<?php

//このページでechoしたものがhtmlに返されて出力される
header("Content-type: text/plain; charset=UTF-8");
mb_language("ja");
mb_internal_encoding("UTF-8");

$errFlg = false;

try {

    if(!(isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER["HTTP_X_REQUESTED_WITH"]) === "xmlhttprequest") 
        && (!empty($_SERVER["SCRIPT_FILENAME"]) && "contact_mail.php" === basename($_SERVER["SCRIPT_FILENAME"])))
    {
        $errFlg = true;
        throw new \Exception("不正な通信です。もう一度初めからやり直してください。");
    }else{
        $whereTo = $_POST['whereTo'];
        $applyType = $_POST['applyType'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $mail = $_POST['mail'];
        $mail2 = $_POST['mail2'];
        $content = $_POST['content'];
    }

    //エラーチェック
    if(strlen($whereTo) > 0 && $whereTo == "大阪"){
        $to = "kagobasketballschool@gmail.com";
    }else if(strlen($whereTo) > 0 && $whereTo == "福岡"){
        $to = "kagobasketballschoolfukuoka@gmail.com";
    }else if(strlen($whereTo) > 0 && $whereTo == "東京"){
        $to = "kago-tokyo@handoff-all.jp";
    }else{
        $errFlg = true;
    }
    if(strlen($applyType) == 0){
        $errFlg = true;
    }
    if(strlen($name) == 0){
        $errFlg = true;
    }
    if(strlen($phone) == 0){
        $errFlg = true;
    }
    if(strlen($mail) == 0 || strlen($mail2) == 0){
        $errFlg = true;
    }else if(strlen($mail2) > 0 && $mail != $mail2){
        $errFlg = true;
    }
    if(strlen($content) == 0){
        $errFlg = true;
    }

    if($errFlg){
        throw new \Exception("入力内容に不備があります。入力内容をお確かめください。");
    }


    //メッセージ作成
    $message = "ホームページからお問い合わせがありました。";
    $message .= "\r\n\r\n[お問い合わせ種別] ".$applyType;
    $message .= "\r\n\r\n[お名前] ".$name.' 様';
    $message .= "\r\n\r\n[電話番号] ".$phone;
    $message .= "\r\n\r\n[メールアドレス] ".$mail;
    $message .= "\r\n\r\n[お問い合わせ内容]\r\n".$content;

    //件名
    $subject = "ホームページより「".$applyType."」に関するお問い合わせ";
    $headers = "From:".$to;

    //メール送信
    $result = mb_send_mail($to, $subject, $message, $headers);

    //送信結果を判定
    if($result){
        echo json_encode(array('result' => true, 'msg' => $message,'to'=>$to,'sub'=>$subject,'head'=>$headers));
    }else{
        echo json_encode(array('result' => false));
        throw new \Exception("送信できませんでした。ネットワークの状態やメールアドレスを確認してください。");
    }

} catch(\Exception $e) {
    $errFlg = true;
    echo json_encode( array( 'result' => false, 'msg' => $e->getMessage() ) );
}


try{
    // メールアドレスが記入されている場合、その人に確認メールを送る
    if(!$errFlg && strlen($mail) > 0){
        $headers = "From:".$to;
        $subject = "[KAGO] お問い合わせありがとうございます。";
        $to = $mail;
        $message = $name." 様\r\n\r\n";
        $message .= "お問い合わせいただき、ありがとうございます。\r\n";
        $message .= "2−3日中に担当の者からお電話またはメールにてご連絡させていただきます。\r\n";
        $message .= "今しばらくお待ちくださいませ。\r\n\r\n";
        $message .= "なお、返信がない場合は大変お手数ですが再度お問い合わせいただきますよう\r\n";
        $message .= "お願い申し上げます。\r\n\r\n\r\n";
        $message .= "-----\r\nKAGO\r\n\r\n";
        $message .= "-------------------------------------------------\r\n";
        $message .= "本メールは自動で送信されております。\r\n";
        $message .= "内容にお心当たりの無い方は、大変お手数ですが削除をお願いいたします。\r\n";
        $message .= "なお、本メールへの返信はできませんので、予めご了承ください。\r\n\r\n\r\n";    
        mb_send_mail($to, $subject, $message, $headers);
    }
}catch(\Exception $e) {

}

?>