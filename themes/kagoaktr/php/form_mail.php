<?php

//このページでechoしたものがhtmlに返されて出力される
header("Content-type: text/plain; charset=UTF-8");
mb_language("ja");
mb_internal_encoding("UTF-8");

$errFlg = false;

try {

    if(!(isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER["HTTP_X_REQUESTED_WITH"]) === "xmlhttprequest") 
        && (!empty($_SERVER["SCRIPT_FILENAME"]) && "form_mail.php" === basename($_SERVER["SCRIPT_FILENAME"])))
    {
        $errFlg = true;
        throw new \Exception("不正な通信です。もう一度初めからやり直してください。");
    }else{
        $whereTo = isset($_POST['whereTo']) ? $_POST['whereTo'] : "";
        $applyType = isset($_POST['applyType'])?$_POST['applyType']:'';
        $name = isset($_POST['name'])?$_POST['name']:'';
        $kana = isset($_POST['kana'])?$_POST['kana']:'';
        $gender = isset($_POST['gender'])?$_POST['gender']:'';
        $phone = isset($_POST['phone'])?$_POST['phone']:'';
        $mail = isset($_POST['mail'])?$_POST['mail']:'';
        $mail2 = isset($_POST['mail2'])?$_POST['mail2']:'';
        $douki = isset($_POST['douki'])?$_POST['douki']:'';
        $syokureki = isset($_POST['syokureki'])?$_POST['syokureki']:'';
        $experience = isset($_POST['experience'])?$_POST['experience']:'';
        $license = isset($_POST['license'])?$_POST['license']:'';
        $pic = isset($_FILES['pic'])?$_FILES['pic']:'';
        $filename = isset($_FILES['pic'])?$_FILES['pic']["name"]:'';
    }


    //エラーチェック
    $to = "";
    if(strlen($whereTo) > 0 && $whereTo == "大阪"){
        $to = "kagobasketballschool@gmail.com";
    }else if(strlen($whereTo) > 0 && $whereTo == "福岡"){
        $to = "kagobasketballschoolfukuoka@gmail.com";
    }else{
        $errFlg = true;
    }
    if(strlen($applyType) == 0){
        $errFlg = true;
    }
    if(strlen($name) == 0){
        $errFlg = true;
    }
    if(strlen($kana) == 0){
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
    if(strlen($douki) == 0){
        $errFlg = true;
    }
    if(is_null($pic) || strlen($filename) == 0){
        $errFlg = true;
    }
    if($errFlg){
        throw new \Exception("入力内容に不備があります。入力内容をお確かめください。");
    }

    //添付する画像
    $IMGTMP = $pic['tmp_name'];
    $fp = @fopen($IMGTMP, "rb");
    $img = @fread($fp, filesize($IMGTMP));
    @fclose($fp);
    $IMGSIZE = floor(strlen($img) / 1024);
    $ENCODEIMG = base64_encode($img);
    $imginfo = @getimagesize('data:application/octet-stream;base64,' . $ENCODEIMG);
    $IMGTYPE = $imginfo['mime'];

    $INPERRFLG = 0;
    $INPERRMSG = NULL;
    $IMGUPERR = $pic['error'];

    if($IMGUPERR == UPLOAD_ERR_NO_FILE){
        $INPERRFLG = 1;
        $INPERRMSG .= 'ファイルを選択してください' . "\n";
    }else if($IMGUPERR == UPLOAD_ERR_PARTIAL){
        $INPERRFLG = 1;
        $INPERRMSG .= 'ファイルのアップに失敗しました。' . "\n";
    }else if($IMGUPERR == UPLOAD_ERR_INI_SIZE || $IMGUPERR == UPLOAD_ERR_FORM_SIZE){
        $INPERRFLG = 1;
        $INPERRMSG .= 'ファイルサイズが大きすぎます' . "\n";
    }else{

        if($IMGTYPE == 'image/gif' || $IMGTYPE == 'image/jpeg' || $IMGTYPE == 'image/png'){
        }else{
            $INPERRFLG = 1;
            $INPERRMSG .= '画像を選択してください。' . "\n";
        }
        if(!preg_match('/^.*\.(jpg|jpeg|gif|png)$/i', $filename)){
            $INPERRFLG = 1;
            $INPERRMSG .= 'jpg、gif、pngの拡張子を選択してください。' . "\n";
        }
        if(($IMGSIZE / 1024) > 10){
            $INPERRFLG = 1;
            $INPERRMSG .= 'サイズを10MB以下にしてください。' . "\n";
        }
    }
    if($INPERRFLG == 1){
        $errFlg = true;
        throw new \Exception("画像の処理に失敗しました。");
        exit;
    }


    //―――――――――――――――――――――――――――――――――――
    //メール送信
    //―――――――――――――――――――――――――――――――――――
    //メッセージ作成
    $message = "ホームページから求人の応募がありました。";
    $message .= "\r\n\r\n[お問い合わせ種別] ".$applyType;
    $message .= "\r\n\r\n[お名前] ".$name;
    $message .= "\r\n\r\n[カタカナ] ".$kana;
    if(strlen($gender) > 0){
        $message .= "\r\n\r\n[性別] ".$gender;
    }else{
        $message .= "\r\n\r\n[性別] ---無回答---";
    }
    $message .= "\r\n\r\n[電話番号] ".$phone;
    $message .= "\r\n\r\n[メールアドレス] ".$mail;
    $message .= "\r\n\r\n[志望動機・自己PR]\r\n".$douki;
    if(strlen($syokureki) > 0){
        $message .= "\r\n\r\n[学歴・職歴]\r\n".$syokureki;
    }else{
        $message .= "\r\n\r\n[学歴・職歴]\r\n---無回答---";
    }
    if(strlen($experience) > 0){
        $message .= "\r\n\r\n[バスケットボールの経験]\r\n".$experience;
    }else{
        $message .= "\r\n\r\n[バスケットボールの経験]\r\n---無回答---";
    }
    if(strlen($license) > 0){
        $message .= "\r\n\r\n[保有資格]\r\n".$license;
    }else{
        $message .= "\r\n\r\n[保有資格]\r\n---無回答---";
    }
    $BOUNDARY = '__BOUNDARY__' .md5(rand());
    
    //件名
    $subject = "ホームページより「リクルート:".$applyType."」に関するお問い合わせ";
    $header = implode("\r\n",array(
        'Content-Type: multipart/mixed;boundary=' . $BOUNDARY ,
        'From: '.$to
    ));

    $body = "--" . $BOUNDARY . "\n";
    $body .= 'Content-Type: text/plain; charset="ISO-2022-JP' . "\n";
    $body .= $message."\n";
    $body .= '--' . $BOUNDARY . "\n";
    $body .= 'Content-Type: ' . $IMGTYPE . '; name=' . $filename . "\n";
    $body .= 'Content-Disposition: attachment; filename=' . $filename . "\n";
    $body .= 'Content-Transfer-Encoding: base64' . "\n";
    $body .= chunk_split($ENCODEIMG) . "\n";
    $body .= '--' . $BOUNDARY . '--';

    
    $result = mb_send_mail($to, $subject, $body, $header);


    //送信結果を判定
    if($result){
        echo '{"result":true}';
    }else{
        echo '{"result":false}';
        throw new \Exception("送信できませんでした。ネットワークの状態やメールアドレスを確認してください。");
    }
} catch(\Exception $e) {
    echo '{"result":false}';
    exit;
}

try{
    // メールアドレスが記入されている場合、その人に確認メールを送る
    if(!$errFlg && strlen($mail) > 0){
        $headers = "From:".$to;
        $to = $mail;
        $subject = "[KAGO] ご応募ありがとうございます。";
        $message = $name." 様\r\n\r\n";
        $message .= "求人募集にご応募いただき、ありがとうございます。\r\n";
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