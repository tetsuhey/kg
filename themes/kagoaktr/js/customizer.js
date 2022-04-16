var ua = window.navigator.userAgent.toLowerCase();
var isiPad = ua.indexOf('ipad') > -1 || ua.indexOf('macintosh') > -1 && 'ontouchend' in document;
$(function(){
	var i = 1;
	$(".scrollAction > .actionChild").each(function(index) {
		var window_w = window.innerWidth;
		if(window_w < 768 && i > 2){
			i = 1;
		}else if(window_w >= 768 && window_w < 992 && i > 3){
			i = 1;
		}else if(window_w >= 992 && i > 4){
			i = 1;
		}
	$(".scrollAction > .actionChild").eq(index).addClass("num" + i);
	  i++;
	});
  
	var FadeInUp = function(target, startPosition) {
	  this.target = $(target);
	  this.startPosition = startPosition;
	};
	FadeInUp.prototype.default = function() {
	  var that = this;
	  var $winTop = $(window).scrollTop();
	  that.target.each(function(index) {
		if ($winTop > that.target.eq(index).offset().top - that.startPosition) {
		  that.target.eq(index).addClass("scroll_FadeIn");
		}
	  });
	  $(window).on("scroll", function() {
		$winTop = $(window).scrollTop();
		that.target.each(function(index) {
		  if ($winTop > that.target.eq(index).offset().top - that.startPosition) {
			that.target.eq(index).addClass("scroll_FadeIn");
		  }
		});
	  });
	};
	if (isiPad) {
	//   var fadeInUp = new FadeInUp(".js-scrollAction > li", 800);
	var fadeInUp = new FadeInUp(".scrollAction > .actionChild", 800);
	} else {
	//   var fadeInUp = new FadeInUp(".js-scrollAction > li", 500);
		var fadeInUp = new FadeInUp(".scrollAction > .actionChild", 500);
	}
	fadeInUp.default();
});

( function( $ ) { 

	$(".menu_btn").on('click',function(){
		$(this).toggleClass('open');
		if($(this).hasClass('open')){
			$("#primary-menu").addClass('open');
			$("header .snswrap").addClass('open');
		}else{
			$("#primary-menu").removeClass('open');
			$("header .snswrap").removeClass('open');
		}
	});
	$('.downbox .title').on('click', function(){
		$(this).toggleClass('open');
		$(this).next().slideToggle();
	});
	$('.txt_btn').on('click',function(){
		var target = $(this).attr('target');
		var $target = $('#' + target);
		$target.slideToggle();
		$(this).toggleClass('open');
		$target.toggleClass('open');
	});
	$('.myTab .tabTitle').on('click', function(){
		var target = $(this).attr('target');
		var $current_view;
		if($(this).hasClass('current')){
			return false;
		}else{
			$current_view = $('#' + $('.current').attr('target'));
			$('.current').removeClass('current');
			$(this).addClass('current');
		}
		$current_view.fadeOut('fast', function(){
			$('#' + target).fadeIn();
		});
	});
	$('.slider').slick({
		centerMode: true,
		// centerPadding: '30px',
		lazyLoad:"progressive",
		arrows:true,
		dots:true,
		focusOnSelect:true,
	});
	//スライドの変更前イベント
	$('.slider').on('beforeChange',function(event, slick){
		slick = $(slick.$slider);
		currentSlide = slick.find(".slick-current");
		video = currentSlide.children("video").get(0);
    	if (video != null) {
			//動画を停止させる
			video.pause();
    	}
	});
	

	//写真添付時のイベント
	var pic_errFlg = false;
	$("#recruit_form #face").on('change',function(){
		$('#piclabel').text($(this)[0].files[0].name);

		if(fileChk(this.value)){
			$('#jpgMsg').text('写真ファイル(.jpeg/.jpg/.png)のみ添付可能です。').show();
			$('#submitBtn').attr('disabled', true);
			return false;
		}

		if(fileSizeChk($(this)[0].files[0])){
			$('#jpgMsg').text('写真の容量が大きすぎます。2MB以内の写真を添付してください。').show();
			$('#submitBtn').attr('disabled', true);
			return false;
		}

		$('#jpgMsg').hide();
		$('#submitBtn').attr('disabled', false);
	});

	//求人フォーム
	$('#recruit_form').on('submit',function(){
		var isErr = false;
		var path = $(this).attr('path')
		var redirect_url = $(this).attr('redirect')
		$('#submitBtn').attr('disabled',true);
		$('.invalid-feedback').text("").hide();

		var msg1 = "この項目を空欄にすることはできません。";
		var msg2 = "半角数字以外の入力はできません。ハイフンは不要です。";
		var msg3 = "メールアドレスを正しく入力してください。";
		var msg4 = "30文字以内で入力してください。";
		var msg5 = "10桁または11桁で入力してください。";
		var msg6 = "50文字以内で入力してください。";
		var msg7 = "500文字以内で入力してください。";
		var msg8 = "写真が添付されていません。";
		var msg9 = "写真の容量が大きすぎます。2MB以内の写真を添付してください。";

		var $target = $("form input[name='target']:checked");//応募先
		var $type = $("form select[name='type']");//種別
		var $name = $("form input[name='name']");//名前
		var $kana = $("form input[name='kana']");//カタカナ
		var $gender = $("form input[name='gender']:checked");//性別
		var $phone = $("form input[name='phone']");//電話番号
		var $mail = $("form input[name='mail']");//メール
		var $mail2 = $("form input[name='mail2']");//メール
		var $content = $("form textarea[name='content']");//志望動機・自己PR
		var $syokureki = $("form textarea[name='syokureki']");//学歴・職歴
		var $experience = $("form textarea[name='experience']");//バスケットボールの経験
		var $license = $("form textarea[name='license']");//保有資格
		var $file = $('form input[name="pic"]');

		//必須チェック
		if( isNull_chk($target.val() )){
			$("#targetMsg").text(msg1).show();
			isErr=true;
		}
		if( isNull_chk($type.val() )){
			$("#typeMsg").text(msg1).show();
			isErr=true;
		}
		if( isNull_chk($name.val() )){
			$("#nameMsg").text(msg1).show();
			isErr=true;
		}
		if( isNull_chk($kana.val() )){
			$("#kanaMsg").text(msg1).show();
			isErr=true;
		}
		if( isNull_chk($phone.val() )){
			$("#phoneMsg").text(msg1).show();
			isErr=true;
		}
		if( isNull_chk($mail.val() )){
			$("#mailMsg").text(msg1).show();
			isErr=true;
		}
		if( isNull_chk($mail2.val() )){
			$("#mail2Msg").text(msg1).show();
			isErr=true;
		}
		if( isNull_chk($content.val() )){
			$("#contentMsg").text(msg1).show();
			isErr=true;
		}
		if( $file[0] == undefined){
			$("#jpgMsg").text(msg8).show();
			isErr=true;
		}else if( $file[0].files.length == 0 ){
			$("#jpgMsg").text(msg8).show();
			isErr=true;
		}
		if(isErr){
			$('#submitBtn').attr('disabled',false);
			return false;
		}
		
		//数字チェック
		if( isNumeric_chk($phone.val() )){
			$("#phoneMsg").text(msg2).show();
			isErr=true;
		}

		//メールの形式チェック
		if(mail_chk($mail.val())){
			$("#mailMsg").text(msg3).show();
			isErr=true;
		}
		if(mail_chk($mail2.val())){
			$("#mail2Msg").text(msg3).show();
			isErr=true;
		}

		//文字数チェック
		if($.trim($name.val()).length > 30){
			$("#nameMsg").text(msg4).show();
			isErr = true;
		}
		if($.trim($kana.val()).length > 30){
			$("#kanaMsg").text(msg4).show();
			isErr = true;
		}
		if($phone.val().length > 0 && ($.trim($phone.val()).length < 10 || $.trim($phone.val()).length > 11)){
			$("#phoneMsg").text(msg5).show();
			isErr = true;
		}
		if($.trim($mail.val()).length > 50){
			$("#mailMsg").text(msg6).show();
			isErr = true;
		}
		if($.trim($mail2.val()).length > 50){
			$("#mail2Msg").text(msg6).show();
			isErr = true;
		}
		if($.trim($content.val()).length > 500){
			$("#contentMsg").text(msg7).show();
			isErr = true;
		}
		if($.trim($syokureki.val()).length > 500){
			$("#syokuMsg").text(msg7).show();
			isErr = true;
		}
		if($.trim($experience.val()).length > 500){
			$("#expeMsg").text(msg7).show();
			isErr = true;
		}
		if($.trim($license.val()).length > 500){
			$("#licneseMsg").text(msg7).show();
			isErr = true;
		}
		//メールの生合成チェック
		if($mail.val() != $mail2.val()){
			$("#mailMsg").text(msg3).show();
			$("#mail2Msg").text(msg3).show();
			isErr= true;
		}
		//ファイルサイズチェック
		if(fileChk($file.val())){
			$('#jpgMsg').text('写真ファイル(.jpeg/.jpg/.png)のみ添付可能です。').show();
			$('#piclabel').text('写真を添付してください。');
			$('#submitBtn').attr('disabled', true);
			isErr= true;
		}else if(　fileSizeChk($file[0].files[0])　){
			$('#jpgMsg').text(msg9).show();
			$('#submitBtn').attr('disabled', true);
			isErr= true;
		}
		
		var fd = new FormData();
		if(isErr){
			$('#submitBtn').attr('disabled',false);
			return false;
		}else{
			/* 画像ファイルの取得・セット */
			fd.append('pic', $file[0].files[0]);
			
			/* 他の項目 */
			fd.append('whereTo', $target.val());
			fd.append('applyType',$type.val());
			fd.append('name',$name.val());
			fd.append('kana',$kana.val());
			fd.append('gender',$gender.val());
			fd.append('phone',$phone.val());
			fd.append('mail',$mail.val());
			fd.append('mail2',$mail2.val());
			fd.append('douki',$content.val());
			fd.append('syokureki',$syokureki.val());
			fd.append('experience',$experience.val());
			fd.append('license',$license.val());
		}

		$.ajax({
			type: "POST",
			url: path + "form_mail.php",
			data: fd,
			cache: false,
        	contentType: false,
        	processData: false
		  }).done(function(data,e){
			data = JSON.parse(data);
			if(data && data.result){
				// $("#formMsg").text("送信完了しました。").fadeIn();
				window.location.href = "/thanks/";
			}else{
				$("#formMsg").text('送信に失敗しました。').fadeIn();
			}
			$('#submitBtn').attr('disabled',false);
		  }).fail(function(XMLHttpRequest, status, e){
			$('#submitBtn').attr('disabled',false);
			$("#formMsg").text('送信に失敗しました。').fadeIn();
		});

		// $('#submitBtn').attr('disabled',false);
		return false;
	});

	//お問い合わせフォーム
	$('#contact_form').on('submit',function(){
		var isErr = false;
		var path = $(this).attr('path')
		$('#submitBtn').attr('disabled',true);
		$('.invalid-feedback').text("").hide();

		var msg1 = "この項目を空欄にすることはできません。";
		var msg2 = "半角数字以外の入力はできません。ハイフンは不要です。";
		var msg3 = "メールアドレスを正しく入力してください。";
		var msg4 = "30文字以内で入力してください。";
		var msg5 = "10桁または11桁で入力してください。";
		var msg6 = "50文字以内で入力してください。";
		var msg7 = "500文字以内で入力してください。";

		var $target = $("form input[name='target']:checked");//応募先
		var $type = $("form select[name='type']");//種別
		var $name = $("form input[name='name']");//名前
		var $phone = $("form input[name='phone']");//電話番号
		var $mail = $("form input[name='mail']");//メール
		var $mail2 = $("form input[name='mail2']");//メール
		var $content = $("form textarea[name='content']");//お問い合わせ内容

		//必須チェック
		if( isNull_chk($target.val() )){
			$("#targetMsg").text(msg1).show();
			isErr=true;
		}
		if( isNull_chk($type.val() )){
			$("#typeMsg").text(msg1).show();
			isErr=true;
		}
		if( isNull_chk($name.val() )){
			$("#nameMsg").text(msg1).show();
			isErr=true;
		}
		if( isNull_chk($phone.val() )){
			$("#phoneMsg").text(msg1).show();
			isErr=true;
		}
		if( isNull_chk($mail.val() )){
			$("#mailMsg").text(msg1).show();
			isErr=true;
		}
		if( isNull_chk($mail2.val() )){
			$("#mail2Msg").text(msg1).show();
			isErr=true;
		}
		if( isNull_chk($content.val() )){
			$("#contentMsg").text(msg1).show();
			isErr=true;
		}
		if(isErr){
			$('#submitBtn').attr('disabled',false);
			return false;
		}
		
		//数字チェック
		if( isNumeric_chk($phone.val() )){
			$("#phoneMsg").text(msg2).show();
			isErr=true;
		}

		//メールの形式チェック
		if(mail_chk($mail.val())){
			$("#mailMsg").text(msg3).show();
			isErr=true;
		}
		if(mail_chk($mail2.val())){
			$("#mail2Msg").text(msg3).show();
			isErr=true;
		}

		//文字数チェック
		if($.trim($name.val()).length > 30){
			$("#nameMsg").text(msg4).show();
			isErr = true;
		}
		if($phone.val().length > 0 && ($.trim($phone.val()).length < 10 || $.trim($phone.val()).length > 11)){
			$("#phoneMsg").text(msg5).show();
			isErr = true;
		}
		if($.trim($mail.val()).length > 50){
			$("#mailMsg").text(msg6).show();
			isErr = true;
		}
		if($.trim($mail2.val()).length > 50){
			$("#mail2Msg").text(msg6).show();
			isErr = true;
		}
		if($.trim($content.val()).length > 500){
			$("#contentMsg").text(msg7).show();
			isErr = true;
		}
		//メールの生合成チェック
		if($mail.val() != $mail2.val()){
			$("#mailMsg").text(msg3).show();
			$("#mail2Msg").text(msg3).show();
			isErr= true;
		}
		
		var fd = new FormData();
		if(isErr){
			$('#submitBtn').attr('disabled',false);
			return false;
		}else{
			/* 他の項目 */
			fd.append('whereTo', $target.val());
			fd.append('applyType',$type.val());
			fd.append('name',$name.val());
			fd.append('phone',$phone.val());
			fd.append('mail',$mail.val());
			fd.append('mail2',$mail2.val());
			fd.append('content',$content.val());
		

		$.ajax({
			type: "POST",
			url: path + "contact_mail.php",
			data: fd,
			dataType : "json",
			cache: false,
        	contentType: false,
        	processData: false
		  }).done(function(data){
			  if(data.result){
				// $("#formMsg").text("送信完了しました。").fadeIn();
				window.location.href = "/thanks/";
			  }else{
				$("#formMsg").text(data.msg).fadeIn();
			  }
			  $('#submitBtn').attr('disabled',false);
		  }).fail(function(XMLHttpRequest, status, e){
			$('#submitBtn').attr('disabled',false);
			$("#formMsg").text('送信に失敗しました。').fadeIn();
		});
		}

		$('#submitBtn').attr('disabled',false);
		$('.invalid-feedback').text("").hide();
		return false;
	});

	function isNull_chk(val){
        if(val == null){
            return true;
        }else if($.trim(val).length == 0){
            return true;
        }
        return false;
    }
	function isNumeric_chk(val){
        for(var i = 0; i < val.length -1; i++){
            var num = parseInt(val.charAt(i),10);
            if((!num || isNaN(num)) && num !== 0){
                return true;
            }
        }

        return false;
    }
	function mail_chk(val){
        var mail_str = val == null || val == undefined ? "" : $.trim(val);
        if(mail_str.length == 0 ){
            return false;
        }else if(mail_str.length < 5){
            return true;
        }
        
        if(mail_str.indexOf('@', 0) == -1){
            return true;
        }else if(mail_str.match(/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/) == null){
            return true;
        }
        return false;
    }
	function fileChk(val){
		var ext = val.match(/\.(.+)$/)[1];
		var ret = false;
    	switch (ext) {
        	case 'jpg':
        	case 'jpeg':
        	case 'png':
			case 'JPG':
        	case 'JPEG':
        	case 'PNG':
            	$('#uploadButton').attr('disabled', false);
				ret=false;
            break;
        default:
			ret=true;
    	}
		return ret;
	}

	function fileSizeChk($file){
		var fileSize = ($file.size / 1024 / 1024); //size in MB
    	if (fileSize > 2) {
        	return true;
    	}
		return false;
	}

}( jQuery ) );
