<?php
/*
Template Name: Thanksテンプレート
*/

get_header();
?>

	<main id="primary" class="site-main">
        <nav>
            <ol class="pankuzu head d-flex flex-row flex-wrap">
                <?php mytheme_breadcrumb() ?>
            </ol>
        </nav>
        
        <div id="thanks">		
            <section id="" class=''>
			    <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1">
                            <h1 class="bold center">お問い合わせありがとうございます。</h1>
                        </div>
                        <div class="col-12 col-md-10 offset-md-1">
                            <p class="spacer_top_m">入力した内容を送信しました。通常、担当者より2−3営業日に返信しますが、祝日や繁忙期等でご連絡が遅くなる場合がございます。</p>
                            <p class="spacer_top_m">2-3日経過しても返信がない場合は、大変お手数ですが直接ご連絡くださいますようお願い申し上げます。</p>
                        </div>
                    </div>
                </div>
		    </section>
            <section id="company">
                <div class="bk_gray">
                    <div class="container">
				        <div class="row">
					        <div class="col-12">
                                <h2 class="bold center">会社概要</h2>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 spacer_top_m">
                                <div class="card">
                                    <h4 class="bold">運営会社</h4>
                                    <div class="contents">
                                        <p>一般社団法人TSO<br />（KAGO BASKETBALL SCHOOL事務局）</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 spacer_top_m">
                                <div class="card">
                                    <h4 class="bold">所在地</h4>
                                    <div class="contents">
                                        <p>〒812-0053<br />福岡県福岡市東区箱崎1丁目12－14－506</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-4 spacer_top_m">
                                <div class="card">
                                    <h4 class="bold">お問い合わせ先</h4>
                                    <div class="contents">
                                        <p class="bold">福岡本社（KAGO福岡）</p>
                                        <div class="d-flex flex-row">
                                            <p class="a">電話</p>
                                            <p class="b">092-776-5402</p>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <p class="a">メール</p>
                                            <p class="b" style="word-break:break-all;">kagobasketballschoolfukuoka@gmail.com</p>
                                        </div>

                                        <p class="bold spacer_top_m">大阪支社（KAGO大阪）</p>
                                        <div class="d-flex flex-row">
                                            <p class="a">電話</p>
                                            <p class="b">072-269-4936</p>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <p class="a">メール</p>
                                            <p class="b" style="word-break:break-all;">kagobasketballschool@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		    </section>
        
        </div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
