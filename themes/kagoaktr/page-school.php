<?php
/*
Template Name: スクールテンプレート
*/

get_header();
?>

	<main id="primary" class="site-main">
        <nav>
            <ol class="pankuzu head d-flex flex-row flex-wrap">
                <?php mytheme_breadcrumb() ?>
            </ol>
        </nav>
        
        <div id="school" class="scrollAction">		
            <section id="" class=''>
			    <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3">
                            <h1><img src="<?php echo get_template_directory_uri(); ?>/lib/kagoschool_logo.svg" alt="KAGO SCHOOLについて" /></h1>
                        </div>
                        <div class="col-12 col-md-10 offset-md-1">
                            <p class="spacer_top_m">
                            KAGO BASKETBALL SCHOOLは、U-12（小学生）・U-15（中学生）を対象としたバスケットボールスクールです。「TO THE NEXT LEVEL」を信条に、選手として、人として成長する為の“きっかけ”作りを行い、初心者からプロを目指す選手まで幅広くレベルに合った指導を行なっております。
                            </p>
                        </div>
                        <div class="btnwrap col-12 col-md-6 offset-md-3  col-lg-12 offset-lg-0 d-flex flex-column flex-lg-row justify-content-lg-center spacer_top_m">
                            <div class="kagobtn">
				    			<a href="#OSAKA">大阪校のご案内</a>
					    	</div>
                            <div class="kagobtn">
							    <a href="#FUKUOKA">福岡校のご案内</a>
    						</div>
                            <div class="kagobtn">
		    					<a href="#TOKYO">東京校のご案内</a>
			    			</div>
                        </div>
                    </div>
                </div>
		    </section>

		    <section id="OSAKA" class="actionChild">
                <div class="bk_gray relative cap_box">
                    <div class="cap_img right"></div>
                    <div class="container">
				        <div class="row">
					        <div class="col-12 d-flex flex-column flex-md-row">
                                <!-- <img class="material_nums" src="<?php echo get_template_directory_uri(); ?>/lib/1.svg" alt="01"> -->
                                <div class="cap">
								    <h2 class="bold opensans">KAGO SCHOOL OSAKA</h2>
    								<h2 class="bold">大阪校</h2>
	    						</div>
                            </div>
                            <div class="col-12 col-lg-5 spacer_top_m">
                                <p>基本・基礎から個のスキルアップを目指す<strong>「チャレンジクラス」</strong>、
                                実践・応用から個のスキルアップだけでなくチームプレイに必要なバスケIQを学び育成を目的とした<strong>「エリートクラス」</strong>、
                                ボールと一緒に楽しみながら体を動かし、初心者のお子さまから通える<strong>「キッズクラス」</strong>など
                                スキルや目的に応じてクラスを選択いただけます。</p>
                            </div>
                            <div class="col-12">
                                <div class="txt_btn spacer_top_l" target="osk">
                                    <p class="bold">ご入会案内・詳細はこちら</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="osk" class="hidecontent">
                    <div class="container">
                        <div class="row spacer_top_m">
                            <div class="col-12 myTab d-flex flex-row">
                                <div class="tabTitle current" target="challenge">チャレンジクラス</div>
                                <div class="tabTitle" target="elite">エリートクラス</div>
                                <div class="tabTitle" target="kids">キッズクラス</div>
                            </div>
                        </div>
                        <div id="challenge">
                            <div class="row spacer_top_m">
                                <div class="col-12 center">
                                    <h3 class="bold"><small class="small">チャレンジクラス</small><br />ご入会案内</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class='col-12 col-md-6 spacer_top_m'>
                                    <div class="card">
                                        <h4 class="bold">対象</h4>
                                        <div class="contents">
                                            <p>小学2年生〜中学3年生</p>
                                            <p>※小学1年生以下の方はご相談ください。</p>
                                            <p class="color_yellow spacer_top_s">入会特典</p>
                                            <p>当スクール入会時にスクールTシャツをプレゼント！</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-12 col-md-6 spacer_top_m'>
                                    <div class="card">
                                        <h4 class="bold">会費</h4>
                                        <div class="contents">
                                            <table><tbody>
                                                <tr class="bk_gray">
                                                    <th>入会金</th>
                                                    <th>年会費</th>
                                                    <th>月謝</th>
                                                    <th>スポーツ保険</th>
                                                </tr>
                                                <tr>
                                                    <td>10,000円</td>
                                                    <td>なし</td>
                                                    <td>3,000円</td>
                                                    <td>1,000円</td>
                                                </tr>
                                            </tbody>
                                            </table>
                                            <p class="spacer_top_s">※スポーツ保険は年度ごとに更新となります。</p>
                                            <p>※お支払いはクレジットカード決済のみとなります。<br />（別途手数料200円を頂戴します。）</p>
                                            <p>※堺校は不定期開催のため、参加ごとに現金払1,000円となります。</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-12 spacer_top_m'>
                                    <div class="card">
                                        <h4 class="bold">各校紹介</h4>
                                        <div class="contents d-flex flex-wrap flex-column flex-lg-row">
                                            <div class="downbox">
                                                <p class="title bk_gray relative arrow">茨木校（毎週月曜日）</p>
                                                <div class="downcontent">
                                                    <p>
                                                        会場：茨木市近郊の体育館<br />
                                                        U-12：19:00 - 21:00<br />
                                                        U-15：19:00 - 21:00<br />
                                                        駐車場：なし
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="downbox">
                                                <p class="title bk_gray relative arrow">寝屋川校（毎週火曜日）</p>
                                                <div class="downcontent">
                                                    <p>
                                                        会場：寝屋川市近郊の体育館<br />
                                                        U-12：18:30 - 20:15<br />
                                                        U-15：19:15 - 21:00<br />
                                                        駐車場：あり
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="downbox">
                                                <p class="title bk_gray relative arrow">堺校（毎週水曜日）</p>
                                                <div class="downcontent">
                                                    <p>
                                                        会場：堺市近郊の体育館<br />
                                                        U-12：17:50 - 19:20<br />
                                                        U-15：19:20 - 21:10<br />
                                                        駐車場：台数に限りあり
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="downbox">
                                                <p class="title bk_gray relative arrow">寝屋川校（毎週木曜日）</p>
                                                <div class="downcontent">
                                                    <p>
                                                        会場：寝屋川市近郊の体育館<br />
                                                        U-12：18:00 - 19:30<br />
                                                        U-15：19:30 - 21:00<br />
                                                        駐車場：あり
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="downbox">
                                                <p class="title bk_gray relative arrow">寝屋川校（毎週金曜日）</p>
                                                <div class="downcontent">
                                                    <p>
                                                        会場：寝屋川市近郊の体育館<br />
                                                        U-12：18:30 - 20:15<br />
                                                        U-15：19:15 - 21:00<br />
                                                        駐車場：あり
                                                    </p>
                                                </div>
                                            </div>
                                        </div>        
                                    </div>
                                </div>
                            
                                <div class='col-12 col-md-6 spacer_top_m'>
                                    <div class="card">
                                        <h4 class="bold">その他</h4>
                                        <div class="contents">
                                            <p class="">
                                            ・複数クラス受講可能です。（その場合、月謝のみ加算されます。）<br />・祝日・第５週目は基本的にお休みです。<br />・他のチャレンジクラスのスポット受講可能です。（¥1,000/回を担当コーチに現金でお支払いください。）<br />・特待生制度あり。  
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-12 col-md-6 spacer_top_m'>
                                <div class="card">
                                    <h4 class="bold">まずは体験してみよう</h4>
                                    <div class="contents">
                                        <p class="">
                                        入会を決める前に、スクールを無料体験することができます。ご希望の方はお問合せフォーム内容に下記項目を記入の上、ご連絡ください。
                                        </p>
                                        <p class="bold">
                                            ・学年<br/>
                                            ・性別<br/>
                                            ・お子様の名前（フリガナ）<br/>
                                            ・参加希望校<small>※各校１回ずつ体験可能</small><br/>
                                            ・希望日<br/>
                                        </p>
                                        <div class="kagobtn">
		    					            <a href="/contact" target="_blank">お問合せはこちら</a>
			    			            </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div id="elite">
                            <div class="row spacer_top_m">
                                <div class="col-12 center">
                                    <h3 class="bold"><small class="small">エリートクラス</small><br />ご入会案内</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class='col-12 col-md-6 spacer_top_m'>
                                    <div class="card">
                                        <h4 class="bold">対象</h4>
                                        <div class="contents">
                                            <p>小学6年生〜中学3年生でトライアウト（テスト）に合格した者<br />※トライアウトの詳細はお問い合わせください。<br />※小学5年生以下のトライアウト受講はご相談ください。</p>
                                            <p class="color_yellow spacer_top_s">入会特典</p>
                                            <p>当スクール入会時にスクールTシャツをプレゼント！</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-12 col-md-6 spacer_top_m'>
                                    <div class="card">
                                        <h4 class="bold">会費</h4>
                                        <div class="contents">
                                            <table>
                                                <tbody><tr class="bk_gray">
                                                    <th>入会金</th>
                                                    <th>年会費</th>
                                                    <th>月謝</th>
                                                    <th>スポーツ保険</th>
                                                </tr><tr>
                                                    <td>10,000円</td>
                                                    <td>5,000円</td>
                                                    <td>6,000円</td>
                                                    <td>1,000円</td>
                                                </tr></tbody>
                                            </table>
                                            <p class="spacer_top_s">※スポーツ保険/年会費は年度ごとに更新となります。</p>
                                            <p>※お支払いはクレジットカード決済のみとなります。<br />（別途手数料200円を頂戴します。）</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-12 spacer_top_m'>
                                    <div class="card">
                                        <h4 class="bold">各校紹介</h4>
                                        <div class="contents d-flex flex-wrap flex-column flex-lg-row">
                                            <div class="downbox">
                                                <p class="title bk_gray relative arrow">茨木校（毎週月曜日）</p>
                                                <div class="downcontent">
                                                    <p>
                                                    会場：茨木市近郊の体育館<br />
                                                    時間：19:00 - 21:00<br />
                                                    駐車場：なし
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="downbox">
                                                <p class="title bk_gray relative arrow">茨木校（毎週木曜日）</p>
                                                <div class="downcontent">
                                                    <p>
                                                    会場：茨木市近郊の体育館<br />
                                                    時間：19:00 - 21:00<br />
                                                    駐車場：なし
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="downbox">
                                                <p class="title bk_gray relative arrow">堺校（毎週水曜日）</p>
                                                <div class="downcontent">
                                                    <p>
                                                    会場：堺市近郊の体育館<br />
                                                    時間：19:00 - 21:00<br />
                                                    駐車場：あり<br />
                                                    備考 : 18:00からスキルアップレッスンあり
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="downbox">
                                                <p class="title bk_gray relative arrow">堺校（毎週金曜日）</p>
                                                <div class="downcontent">
                                                    <p>
                                                    会場：<a href="../facility/#skillslabo">KAGO SKILLS LABO</a><br />
                                                    時間：19:00 - 21:00<br />
                                                    駐車場：あり<br />
                                                    備考 : 18:00からスキルアップレッスンあり
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-12 col-md-6 spacer_top_m'>
                                    <div class="card">
                                        <h4 class="bold">アドバイザー</h4>
                                        <div class="contents">
                                            <p class="">
                                            静岡ジムラッツの岡田卓也コーチ（通称：Tコーチ）を招いて、定期的に直接指導をしていただいております。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-12 col-md-6 spacer_top_m'>
                                    <div class="card">
                                        <h4 class="bold">その他</h4>
                                        <div class="contents">
                                            <p class="">
                                            ・他のクラスのスポット受講可能です。<br />（¥2,000/回を担当コーチに現金でお支払いください。）<br />・特待生制度あり。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="kids">
                            <div class="row spacer_top_m">
                                <div class="col-12 center">
                                    <h3 class="bold"><small class="small">キッズクラス</small><br />ご入会案内</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class='col-12 col-md-6 spacer_top_m'>
                                    <div class="card">
                                        <h4 class="bold">対象</h4>
                                        <div class="contents">
                                            <p>年長〜小学2年生<br />※年長以下の方はご相談ください。</p>
                                            <p class="color_yellow spacer_top_s">入会特典</p>
                                            <p>当スクール入会時にスクールTシャツをプレゼント！</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-12 col-md-6 spacer_top_m'>
                                    <div class="card">
                                        <h4 class="bold">会費</h4>
                                        <div class="contents">
                                            <table>
                                                <tbody><tr class="bk_gray">
                                                    <th>入会金</th>
                                                    <th>年会費</th>
                                                    <th>参加費</th>
                                                    <th>スポーツ保険</th>
                                                </tr><tr>
                                                    <td>10,000円</td>
                                                    <td>なし</td>
                                                    <td>1,000円/回</td>
                                                    <td>1,000円</td>
                                                </tr></tbody>
                                            </table>
                                            <p class="spacer_top_s">※スポーツ保険は年度ごとに更新となります。</p>
                                            <p>※お支払いは現金のみとなります。</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-12 spacer_top_m'>
                                    <div class="card">
                                        <h4 class="bold">各校紹介</h4>
                                        <div class="contents d-flex flex-wrap flex-column flex-lg-row"> 
                                            <div class="downbox">
                                                <p class="title bk_gray relative arrow">堺校（不定期:土曜、日曜日）</p>
                                                <div class="downcontent">
                                                    <p>
                                                    会場：<a href="../facility/#skillslabo">KAGO SKILLS LABO</a><br />
                                                    時間：11:00 - 12:20<br />
                                                    駐車場：あり
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-12 col-md-6 spacer_top_m'>
                                    <div class="card">
                                        <h4 class="bold">その他</h4>
                                        <div class="contents">
                                            <p class="">
                                                ・複数クラス受講可能です。<br />
                                                ・祝日/第５週目は基本的にお休みです。<br />
                                                ・他のクラスのスポット受講可能です。<br />（¥1,000/回を担当コーチに現金でお支払いください。）
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-12 col-md-6 spacer_top_m'>
                                <div class="card">
                                    <h4 class="bold">まずは体験してみよう</h4>
                                    <div class="contents">
                                    <p class="">
                                        入会を決める前に、スクールを無料体験することができます。ご希望の方はお問合せフォーム内容に下記項目を記入の上、ご連絡ください。
                                        </p>
                                        <p class="bold">
                                            ・学年<br/>
                                            ・性別<br/>
                                            ・お子様の名前（フリガナ）<br/>
                                            ・参加希望校<small>※各校１回ずつ体験可能</small><br/>
                                            ・希望日<br/>
                                        </p>
                                        <div class="kagobtn">
		    					            <a href="/contact" target="_blank">お問合せはこちら</a>
			    			            </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="osk_gallery spacer_top_m">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 center spacer_top_l">
                                <h3 class="bold">ライブラリ</h3>
                            </div>
                        </div>
                        <?php 
                            $ca_args = array(
                               'post_type' => 'library', /* 投稿タイプを指定 */
                                'meta_key' => 'target',
                                'meta_value' => 'school_osaka',
                                'post_status'=>'publish',
                                'showposts' => -1
                            ); 
                            // クエリの定義
                            $wp_query = new WP_Query( $ca_args );
                            if ($wp_query->have_posts()) :
                        ?>
                        <div class="row spacer_top_m">
                            <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                                <div class="slider">
                                    <?php 
                                    // ループ用カウンター
                                    $i = 1;
                                    while ($wp_query->have_posts()) : $wp_query->the_post();
                                    ?>
                                    <a href="<?php the_field('image'); ?>" target="_blank"><img src="<?php the_field('image');?>" alt="kago school osaka <?php $i ?>" /></a>
                                    <?php $i++; endwhile; ?>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                            <p class="center">写真が見つかりませんでした。</p>
                        <?php endif; ?>
                    </div>
                </div>
		    </section>

            <section id="FUKUOKA" class="actionChild">
                <div class="bk_gray relative cap_box">
                    <div class="cap_img left"></div>
                    <div class="container">
				        <div class="row">
					        <div class="col-12 col-lg-5 offset-lg-7 d-flex flex-column flex-md-row">
                                <!-- <img class="material_nums" src="<?php echo get_template_directory_uri(); ?>/lib/2.svg" alt="02"> -->
                                <div class="cap">
								    <h2 class="bold opensans">KAGO SCHOOL FUKUOKA</h2>
								    <h2 class="bold">福岡校</h2>
							    </div>
                            </div>
                            <div class="col-12 col-lg-5 offset-lg-7 spacer_top_m">
                                <p>
                                基本・基礎から個のスキルアップを目指すクラス。<br />また月1回のメンタルトレーニングとコーディネーショントレーニングを専門のコーチを招いて指導を行っております。
                                </p>
                            </div>
                            <div class="col-12 col-lg-5 offset-lg-7">
                                <div class="txt_btn spacer_top_l" target="fuk">
                                    <p class="bold">ご入会案内・詳細はこちら</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id='fuk' class="hidecontent">
                    <div class="container spacer_top_m">
                        <div class="row">
                            <div class="col-12 center">
                                <h3 class="bold">ご入会案内</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class='col-12 col-md-6 spacer_top_m'>
                                <div class="card">
                                    <h4 class="bold">対象</h4>
                                    <div class="contents">
                                        <p>小学1年生〜中学3年生</p>
                                        <p class="color_yellow spacer_top_s">入会特典</p>
                                        <p>当スクール入会時にスクールTシャツをプレゼント！</p>
                                    </div>
                                </div>
                            </div>
                            <div class='col-12 col-md-6 spacer_top_m'>
                                <div class="card">
                                    <h4 class="bold">会費</h4>
                                    <div class="contents">
                                        <table>
                                            <tbody><tr class="bk_gray">
                                                <th>入会金</th>
                                                <th>月謝</th>
                                                <th>スポーツ保険</th>
                                            </tr><tr>
                                                <td>5,000円</td>
                                                <td>5,000円</td>
                                                <td>1,000円</td>
                                            </tr></tbody>
                                        </table>
                                        <p class="spacer_top_s">[注意事項]<br />※スポーツ保険は年度ごとに更新となります。<br />※お支払いはクレジットカード決済となります。（別途手数料200円を頂戴します。）</p>                                        
                                    </div>
                                </div>
                            </div>
                            <div class='col-12 spacer_top_m'>
                                <div class="card">
                                    <h4 class="bold">各校紹介</h4>
                                    <div class="contents d-flex flex-wrap flex-column flex-lg-row">
                                        <div class="downbox">
                                            <p class="title bk_gray relative">東校（毎週火曜日）</p>
                                            <div class="downcontent">
                                                <p>
                                                    会場：福岡市東区近郊の体育館<br />
                                                    時間：19:40 - 21:40<br />
                                                    駐車場：あり
                                                </p>
                                            </div>
                                        </div>
                                        <div class="downbox">
                                            <p class="title bk_gray relative">春日校（毎週火曜日）</p>
                                            <div class="downcontent">
                                                <p>
                                                    会場：春日市近郊の体育館<br />
                                                    時間：19:30 - 21:30<br />
                                                    駐車場：あり
                                                </p>
                                            </div>
                                        </div>
                                        <div class="downbox">
                                            <p class="title bk_gray relative">南校（毎週水曜日）</p>
                                            <div class="downcontent">
                                                <p>
                                                    会場：福岡市南区近郊の体育館<br />
                                                    時間：19:40 - 21:40<br />
                                                    駐車場：あり
                                                </p>
                                            </div>
                                        </div>
                                        <div class="downbox">
                                            <p class="title bk_gray relative">糟屋校（毎週木曜日）</p>
                                            <div class="downcontent">
                                                <p>
                                                    会場：宇美町近郊の体育館<br />
                                                    時間：19:30 - 21:30<br />
                                                    駐車場：あり
                                                </p>
                                            </div>
                                        </div>
                                        <div class="downbox">
                                            <p class="title bk_gray relative">筑豊校（毎週金曜日）</p>
                                            <div class="downcontent">
                                                <p>
                                                    会場：飯塚市近郊の体育館<br />
                                                    時間：19:40 - 21:40<br />
                                                    駐車場：あり
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='col-12 col-md-6 spacer_top_m'>
                                <div class="card">
                                    <h4 class="bold">その他</h4>
                                    <div class="contents">
                                        <p class="">
                                            ・他のクラスのスポット受講可能です。<br />（¥1,000/回を担当コーチに現金でお支払いください。）<br />・特待生制度あり。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class='col-12 col-md-6 spacer_top_m'>
                                <div class="card">
                                    <h4 class="bold">まずは体験してみよう</h4>
                                    <div class="contents">
                                    <p class="">
                                        入会を決める前に、スクールを無料体験することができます。ご希望の方はお問合せフォーム内容に下記項目を記入の上、ご連絡ください。
                                        </p>
                                        <p class="bold">
                                            ・学年<br/>
                                            ・性別<br/>
                                            ・お子様の名前（フリガナ）<br/>
                                            ・参加希望校<small>※各校１回ずつ体験可能</small><br/>
                                            ・希望日<br/>
                                        </p>
                                        <div class="kagobtn">
		    					            <a href="/contact" target="_blank">お問合せはこちら</a>
			    			            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div id="fuk_gallery spacer_top_m">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 center spacer_top_l">
                                <h3 class="bold">ライブラリ</h3>
                            </div>
                        </div>
                        <?php 
                            $ca_args = array(
                               'post_type' => 'library', /* 投稿タイプを指定 */
                                'meta_key' => 'target',
                                'meta_value' => 'school_fukuoka',
                                'post_status'=>'publish',
                                'showposts' => -1
                            ); 
                            // クエリの定義
                            $wp_query = new WP_Query( $ca_args );
                            if ($wp_query->have_posts()) :
                        ?>
                        <div class="row spacer_top_m">
                            <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                                <div class="slider">
                                    <?php 
                                    // ループ用カウンター
                                    $i = 1;
                                    while ($wp_query->have_posts()) : $wp_query->the_post();
                                    ?>
                                    <a href="<?php the_field('image'); ?>" target="_blank"><img src="<?php the_field('image');?>" alt="kago school fukuoka <?php $i ?>" /></a>
                                    <?php $i++; endwhile; ?>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                            <p class="center">写真が見つかりませんでした。</p>
                        <?php endif; ?>
                    </div>
                </div>
		    </section>

            <section id="TOKYO" class="actionChild">
                <div class="bk_gray relative cap_box">
                    <div class="cap_img right"></div>
                    <div class="container">
				        <div class="row">
                            <div class="col-12 d-flex flex-column flex-md-row">
                                <!-- <img class="material_nums" src="<?php echo get_template_directory_uri(); ?>/lib/3.svg" alt="03"> -->
                                <div class="cap">
								    <h2 class="bold opensans">KAGO SCHOOL TOKYO</h2>
    								<h2 class="bold">東京校</h2>
	    						</div>
                            </div>
                            <div class="col-12 col-lg-5 spacer_top_m">
                                <p>基本・基礎から個のスキルアップを目指すクラス。U-12（小学生）とU-15（中学生）でカテゴリー毎に指導しています。</p>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="txt_btn spacer_top_l" target="tok">
                                    <p class="bold">ご入会案内・詳細はこちら</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id='tok' class="hidecontent">
                    <div class="container spacer_top_m">
                        <div class="row">
                            <div class="col-12 center">
                                <h3 class="bold"><br />ご入会案内</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class='col-12 col-md-6 spacer_top_m'>
                                <div class="card">
                                    <h4 class="bold">対象</h4>
                                    <div class="contents">
                                        <p>小学1年生〜中学3年生</p>
                                        <p class="color_yellow spacer_top_s">入会特典</p>
                                        <p>当スクール入会時にスクールTシャツをプレゼント！</p>
                                    </div>
                                </div>
                            </div>
                            <div class='col-12 col-md-6 spacer_top_m'>
                                <div class="card">
                                    <h4 class="bold">会費</h4>
                                    <div class="contents">
                                        <table>
                                            <tbody><tr class="bk_gray">
                                                <th>入会金</th>
                                                <th>月謝(小学生/中学生)</th>
                                                <th>スポーツ保険</th>
                                            </tr><tr>
                                                <td>10,000円</td>
                                                <td>7,200円 / 8,000円</td>
                                                <td>800円</td>
                                            </tr></tbody>
                                        </table>
                                        <p class="spacer_top_s">[注意事項]<br />※スポーツ保険は年度ごとに更新となります。<br />※お支払いはクレジットカード決済となります。</p>
                                    </div>
                                </div>
                            </div>
                            <div class='col-12 col-md-6 spacer_top_m'>
                                <div class="card">
                                    <h4 class="bold">各校紹介</h4>
                                    <div class="contents d-flex flex-wrap flex-column flex-lg-row">
                                        <div style="width:100%;" class="downbox">
                                            <p class="title bk_gray relative arrow open">新木場校（毎週金曜日）</p>
                                            <div class="downcontent open" style="display:block;">
                                                <p>
                                                    会場：F1 STUDIO<br />
                                                    U-12：17:00-18:30<br />
                                                    U-15：18:45 - 20:15<br />
                                                    駐車場：なし
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='col-12 col-md-6 spacer_top_m'>
                                <div class="card">
                                    <h4 class="bold">その他</h4>
                                    <div class="contents">
                                        <p class="">詳細・お申し込みは、下記URLよりアクセスください。</p>
                                        <a href="https://handoff-all.jp/school/" target="_blank">https://handoff-all.jp/school/</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div id="tyo_gallery spacer_top_m">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 center spacer_top_l">
                                <h3 class="bold">ライブラリ</h3>
                            </div>
                        </div>
                        <?php 
                            $ca_args = array(
                               'post_type' => 'library', /* 投稿タイプを指定 */
                                'meta_key' => 'target',
                                'meta_value' => 'school_tokyo',
                                'post_status'=>'publish',
                                'showposts' => -1
                            ); 
                            // クエリの定義
                            $wp_query = new WP_Query( $ca_args );
                            if ($wp_query->have_posts()) :
                        ?>
                        <div class="row spacer_top_m">
                            <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                                <div class="slider">
                                    <?php 
                                    // ループ用カウンター
                                    $i = 1;
                                    while ($wp_query->have_posts()) : $wp_query->the_post();
                                    ?>
                                    <a href="<?php the_field('image'); ?>" target="_blank"><img src="<?php the_field('image');?>" alt="kago school tokyo <?php $i ?>" /></a>
                                    <?php $i++; endwhile; ?>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                            <p class="center">写真が見つかりませんでした。</p>
                        <?php endif; ?>
                    </div>
                </div>
		    </section>
        </div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
