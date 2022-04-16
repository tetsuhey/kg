<?php
/*
Template Name: お問い合わせテンプレート
*/

get_header();
?>

	<main id="primary" class="site-main">
        <nav>
            <ol class="pankuzu head d-flex flex-row flex-wrap">
                <?php mytheme_breadcrumb() ?>
            </ol>
        </nav>
        
        <div id="others">		
            <section id="" class=''>
			    <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3">
                            <h1 class="bold center">お問い合わせ</h1>
                        </div>
                        <div class="col-12 col-md-10 offset-md-1">
                            <p class="spacer_top_m center">無料体験・見学・質問・クリニック依頼など、お気軽にお問い合わせ下さい。</p>
                        </div>
                    </div>
                </div>
		    </section>

            <section id="myform">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="bold center">お問い合わせフォーム</div>
                        </div>
                        <div class="col-12 col-md-10 offset-md-1">
                            <p class="spacer_top_m">メールの指定受信や拒否設定を行っている場合、事務局からの返信が届かない場合がありますので受信可能な設定に変更をお願い致します。通常、2~3営業日以内に返信しますが、万一返信がない場合はお手数ですが上記の電話番号までお電話ください。</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <form id="contact_form" path="<?php echo get_template_directory_uri(); ?>/php/">
                        <div class="row">
                            <div class="col-12 col-lg-10 offset-lg-1 d-flex flex-column flex-md-row align-items-center">
                                <div class="form_title bk_gray align-self-stretch">
                                    <p class="small inquery color_yellow">必須</p>
                                    <p class="bold" for="target">お問い合わせ先</p>
                                </div>
                                <div class="form_item">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="target_osaka" name="target" class="custom-control-input" value="大阪" checked>
                                        <label class="custom-control-label" for="target_osaka" >大阪</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="target_fukuoka" name="target" class="custom-control-input" value="福岡" >
                                        <label class="custom-control-label" for="target_fukuoka">福岡</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="target_tokyo" name="target" class="custom-control-input" value="東京">
                                        <label class="custom-control-label" for="target_tokyo">東京</label>
                                    </div>
                                    <div id="targetMsg" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-10 offset-lg-1 d-flex flex-column flex-md-row align-items-center">
                                <div class="form_title bk_gray align-self-stretch">
                                    <p class="small inquery color_yellow">必須</p>
                                    <p class="bold" for="type">お問い合わせ種別</p>
                                </div>
                                <div class="form_item">
                                    <select id="type" name="type" class="custom-select">
                                        <option value="スクールについて" selected>スクールについて</option>
                                        <option value="チームについて">チームについて</option>
                                        <option value="施設について">施設について</option>
                                        <option value="クリニックについて">クリニックについて</option>
                                        <option value="その他">その他</option>
                                    </select>
                                    <div id="typeMsg" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-10 offset-lg-1 d-flex flex-column flex-md-row align-items-center">
                                <div class="form_title bk_gray align-self-stretch">
                                    <p class="small inquery color_yellow">必須</p>
                                    <p class="bold" for="kanji">お名前</p>
                                </div>
                                <div class="form_item">
                                    <input id="kanji" class="form-control" name="name" type='text'></input>
                                    <div id="nameMsg" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-10 offset-lg-1 d-flex flex-column flex-md-row align-items-center">
                                <div class="form_title bk_gray align-self-stretch">
                                    <p class="small inquery color_yellow">必須</p>
                                    <p class="bold" for="tell">電話番号</p>
                                </div>
                                <div class="form_item">
                                    <input id="tell" name="phone" type='tel'></input>
                                    <div id="phoneMsg" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-10 offset-lg-1 d-flex flex-column flex-md-row align-items-center">
                                <div class="form_title bk_gray align-self-stretch">
                                    <p class="small inquery color_yellow">必須</p>
                                    <p class="bold" for="maill">メールアドレス</p>
                                </div>
                                <div class="form_item">
                                    <input id="maill" name="mail" type="email" placeholder="kago@example.com"></input>
                                    <div id="mailMsg" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-10 offset-lg-1 d-flex flex-column flex-md-row align-items-center">
                                <div class="form_title bk_gray align-self-stretch">
                                    <p class="bold" for="mail-2">メールアドレス<br />確認用</p>
                                </div>
                                <div class="form_item">
                                    <input id="mail-2" name="mail2" type='email'></input>
                                    <div id="mail2Msg" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-10 offset-lg-1 d-flex flex-column flex-md-row">
                                <div class="form_title bk_gray align-self-stretch">
                                    <p class="small inquery color_yellow">必須</p>
                                    <p class="bold" for="mail-2">お問い合わせ内容</p>
                                </div>
                                <div class="form_item">
                                    <textarea class="form-control" id="content" name="content" rows="5"></textarea>
                                    <div id="contentMsg" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-10 offset-lg-1 d-flex flex-column flex-md-row align-items-center">
                                <div class="form_title bk_gray d-none d-md-block align-self-stretch">
                                    <div class="spacer_top_l"></div>
                                </div>
                                <div class="form_item spacer_top_l btnWrap">
                                    <div class="kagobtn">
                                        <button id="submitBtn" type='submit' name='action' value='send'>送信する</button>
							        </div>
                                    <div id="formMsg" class="invalid-feedback spacer_top_s"></div>
                                </div>
                            </div>
                        </div>
                    </form>
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

                                        <p class="spacer_top_m">※KAGO東京校は運営会社が異なります。</p>
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
