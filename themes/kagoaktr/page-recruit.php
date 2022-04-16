<?php
/*
Template Name: リクルートテンプレート
*/

get_header();
?>

	<main id="primary" class="site-main">
        <nav>
            <ol class="pankuzu head d-flex flex-row flex-wrap">
                <?php mytheme_breadcrumb() ?>
            </ol>
        </nav>
        
        <div id="recuit">		
            <section id="" class=''>
			    <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3">
                            <h1 class="bold center">正社員・アルバイト募集(大阪 / 福岡)</h1>
                        </div>
                        <div class="col-12 col-md-10 offset-md-1">
                            <p class="spacer_top_m">多くの人々にバスケットボールの魅力を伝え、日本のバスケットボールがより身近なスポーツに発展するように活動し、様々なカテゴリーに対して「楽しみ方の提供」と「環境作り」を行っております。またバスケットボールを通して日本だけでなく世界で活躍するグローバルな人材育成を目指します。</p>
                            <p>現在、バスケットボールスクールをはじめ、イベント企画やコート運営など、バスケットボールに関連した事業を多数行なっております。</p>
                        </div>
                    </div>
                </div>
		    </section>

            <section id="company">
                <div class="bk_gray">
                    <div class="container">
				        <div class="row">
					        <div class="col-12">
                                <h2 class="bold center">募集概要</h2>
                            </div>
                            <div class="col-12 col-md-6 spacer_top_m">
                                <div class="card">
                                    <h4 class="bold">求める人材</h4>
                                    <div class="contents">
                                        <p>・誠実であり拘りを持って取り組める人</p>
                                        <p>・自発的に行動ができる人</p>
                                        <p>・常に矢印を自分自身に向けれる人</p>
                                        <p>・バスケに対してクレイジーな人</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 spacer_top_m">
                                <div class="card">
                                    <h4 class="bold">活動場所</h4>
                                    <div class="contents">
                                        <p>【大阪】寝屋川市／茨木市／堺市</p>
                                        <p>【福岡】福岡市／糟屋郡／飯塚市</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 spacer_top_m">
                                <div class="card">
                                    <h4 class="bold">給与</h4>
                                    <div class="contents">
                                        <p>①正社員</p>
                                        <p class="a">月給</p><p class="b">17万円〜23万円</p>
                                        <p>※稼働日数と能力を考慮した上で、決定したいます。</p>                                        
                                        <p class="spacer_top_s">②アルバイト（アシスタントコーチ）</p>
                                        <p class="a">日給</p><p class="b">3000円〜（2〜3時間）</p>
                                        <p>※勤務条件、指導経験、実績などから考慮して面談の上決定します。</p>
                                        <p class="spacer_top_s">③アルバイト（カメラマンや映像編集ができる方）</p>
                                        <p>能力と経験により応相談</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 spacer_top_m">
                                <div class="card">
                                    <h4 class="bold">応募資格・仕事内容</h4>
                                    <div class="contents">
                                        <p>①正社員</p>
                                        <p>・高卒以上18歳〜（学生不可）</p>
                                        <p>・バスケットボール経験者</p>
                                        <p>・指導者としての経験があればなお可</p>
                                        <p>・週5〜6回勤務できる方</p>
                                        <p>・性別不問</p>
                                        <p>・福利厚生（各種保険あり）</p>
                                        <p>※研修期間あり</p>                                        
                                        <p class="spacer_top_s">②アルバイト（アシスタントコーチ）</p>
                                        <p>・高卒以上18歳〜（学生不可）</p>
                                        <p>・バスケットボール経験不問</p>
                                        <p>・指導者としての経験があればなお可</p>
                                        <p>・週1回（2〜3時間）勤務できる方<br />　但し、定期的かつ継続して勤務できる方</p>
                                        <p>・性別不問</p>
                                        <p class="spacer_top_s">③アルバイト（カメラマンや映像編集ができる方）</p>
                                        <p>・大会や遠征での写真撮影、ハイライト動画の撮影</p>
                                        <p>・スキルトレーニング用の動画作成</p>
                                        <p>・当スクールの活動映像の動画作成</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		    </section>

            <section id="myform">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="bold center">応募フォーム</div>
                        </div>
                        <div class="col-12 col-md-10 offset-md-1">
                            <p class="spacer_top_m center">「Basketball is my job.」<br />会社に何をさせてもらえるのかではなく、自分が何をしたいのかをよく考えてご応募ください。</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <form id="recruit_form" path="<?php echo get_template_directory_uri(); ?>/php/">
                        <div class="row">
                            <div class="col-12 col-lg-10 offset-lg-1 d-flex flex-column flex-md-row align-items-center">
                            <div class="form_title bk_gray align-self-stretch">
                                    <p class="small inquery color_yellow">必須</p>
                                    <p class="bold" for="target">応募先</p>
                                </div>
                                <div class="form_item">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="target_osaka" name="target" class="custom-control-input" value="大阪" checked>
                                        <label class="custom-control-label" for="target_osaka" >大阪</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="target_fukuoka" name="target" class="custom-control-input" value="福岡">
                                        <label class="custom-control-label" for="target_fukuoka">福岡</label>
                                    </div>
                                    <div id="targetMsg" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-10 offset-lg-1 d-flex flex-column flex-md-row align-items-center">
                                <div class="form_title bk_gray align-self-stretch">
                                    <p class="small inquery color_yellow">必須</p>
                                    <p class="bold" for="type">応募する職種</p>
                                </div>
                                <div class="form_item">
                                    <select id="type" name="type" class="custom-select">
                                        <option value="正社員" selected>正社員</option>
                                        <option value="アシスタントコーチ">アシスタントコーチ</option>
                                        <option value="カメラマン・映像編集">カメラマン・映像編集</option>
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
                                    <p class="bold" for="kana">フリガナ</p>
                                </div>
                                <div class="form_item">
                                    <input id="kana" class="form-control" name="kana" type='text'></input>
                                    <div id="kanaMsg" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-10 offset-lg-1 d-flex flex-column flex-md-row align-items-center">
                                <div class="form_title bk_gray align-self-stretch">
                                    <p class="bold" for="gender">性別</p>
                                </div>
                                <div class="form_item">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="gender_man" name="gender" class="custom-control-input" value="男性">
                                        <label class="custom-control-label" for="gender_man" >男性</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="gender_women" name="gender"　value="女性" class="custom-control-input">
                                        <label class="custom-control-label" for="gender_women">女性</label>
                                    </div>
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
                                    <input id="tell" class="form-control" name="phone" type='tel'></input>
                                    <div id="phoneMsg" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-10 offset-lg-1 d-flex flex-column flex-md-row align-items-center">
                                <div class="form_title bk_gray align-self-stretch">
                                    <p class="small inquery color_yellow">必須</p>
                                    <p class="bold" for="mail">メールアドレス</p>
                                </div>
                                <div class="form_item">
                                    <input id="mail" class="form-control" name="mail" type="email" placeholder="kago@example.com"></input>
                                    <div id="mailMsg" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-10 offset-lg-1 d-flex flex-column flex-md-row align-items-center">
                                <div class="form_title bk_gray align-self-stretch">
                                    <p class="small inquery color_yellow">必須</p>
                                    <p class="bold" for="mail-2">メールアドレス<br />確認用</p>
                                </div>
                                <div class="form_item">
                                    <input id="mail-2" class="form-control" name="mail2" type='email'></input>
                                    <div id="mail2Msg" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-10 offset-lg-1 d-flex flex-column flex-md-row">
                                <div class="form_title bk_gray align-self-stretch">
                                    <p class="small inquery color_yellow">必須</p>
                                    <p class="bold" for="content">志望動機・自己PR</p>
                                </div>
                                <div class="form_item">
                                    <textarea class="form-control" id="content" name="content" rows="5"></textarea>
                                    <div  id="contentMsg"class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-10 offset-lg-1 d-flex flex-column flex-md-row">
                                <div class="form_title bk_gray align-self-stretch">
                                    <p class="bold" for="syokureki">学歴・職歴</p>
                                </div>
                                <div class="form_item">
                                    <textarea class="form-control" id="syokureki" name="syokureki" rows="5"></textarea>
                                    <div id="syokuMsg" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-10 offset-lg-1 d-flex flex-column flex-md-row">
                                <div class="form_title bk_gray align-self-stretch">
                                    <p class="bold" for="experience">バスケットボールの経験<br />(選手/指導者)</p>
                                </div>
                                <div class="form_item">
                                    <textarea class="form-control" id="experience" name="experience" rows="5"></textarea>
                                    <div id="expeMsg" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-10 offset-lg-1 d-flex flex-column flex-md-row">
                                <div class="form_title bk_gray align-self-stretch">
                                    <p class="bold" for="license">保有資格</p>
                                </div>
                                <div class="form_item">
                                    <textarea class="form-control" id="license" name="license" rows="5"></textarea>
                                    <div id="licneseMsg" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-10 offset-lg-1 d-flex flex-column flex-md-row">
                                <div class="form_title bk_gray align-self-stretch">
                                    <p class="small inquery color_yellow">必須</p>
                                    <p class="bold" for="mail-2">顔写真</p>
                                    <p class="small">※jpg、jpeg、png形式のみで2MB以内のファイルサイズ</p>
                                </div>
                                <div class="form_item">
                                    <div class="custom-file mb-3">
                                        <input type="file" name="pic" class="custom-file-input" id="face"  accept="image/jpg,image/png,image/jpeg">
                                        <label id="piclabel" class="custom-file-label" for="validatedCustomFile">写真を添付してください。</label>
                                        <div id="jpgMsg" class="invalid-feedback"></div>
                                    </div>
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
								        <!-- <a id="submit" href="#" attr="submit">送信する</a> -->
							        </div>
                                    <div id="formMsg" class="invalid-feedback spacer_top_s"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
		    </section>

            <div id="errmsg"></div>
        
        </div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
