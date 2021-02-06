<?php get_header(''); ?>
<?php get_sidebar(''); ?>
    <main>
        <section class="main-message">
            <div class="main-message-first">
                <img class="main-message-speech" src="<?php echo get_template_directory_uri(); ?>/img/speech-and-bee.png" alt="">
                <img class="main-message-vivid" src="<?php echo get_template_directory_uri(); ?>/img/BeeCome-textrogo.png" alt="">
                <img class="main-message-semivivid" src="<?php echo get_template_directory_uri(); ?>/img/BeeCome-textrogo.png" alt="">
                <img class="main-message-vague" src="<?php echo get_template_directory_uri(); ?>/img/BeeCome-textrogo.png" alt="">
            </div>
            <article class="main-message-scripts">
                <div class="main-message-scripts-headline" >
                    <h2>”やりたい”が夢を運ぶ。</h2>
                    <h2>さぁ、飛び立とう。</h2>
                </div>
                <div class="main-message-scripts-para">
                    <p>飛び立とう。</p>
                    <p>キミは青森のことをどれだけ知っているだろうか。</p>
                    <p>
                    知っているって、知識の話じゃないぜ？<br>
                    “シゴト”の話をしているんだ。
                    </p>
                    <p>無知は最高に恐ろしい。</p>
                    <p>
                    知らないうちに、将来は狭まっている。<br>
                    知るには、行動しかない。
                    </p>
                    <p>
                        行動しないことを、<br>
                        ウイルスのせいには出来ないだろう。
                    </p>
                    <p>

                        どうだい、ひとつ一緒に挑戦しないか。<br>
                        方法なら、ここにある。
                    </p>
                </div>
            </article>
            </div>
        </section>
        <section class="main-event contents-inner" id="event">
            <h2>EVENT</h2>
            <ul class="slick">
              	<li class="slick-items"><img src="<?php echo get_template_directory_uri(); ?>/img/hitotabihirosaki.jpg" alt="イベントの画像です"></li>
               <li class="slick-items"><img src="<?php echo get_template_directory_uri(); ?>/img/kaikousya-air.png" alt="イベントの画像です"></li>
					<li class="slick-items"><img src="<?php echo get_template_directory_uri(); ?>/img/hitotabihirosaki.jpg" alt="イベントの画像です"></li>
            </ul>
            <div>
                <a href="<?php get_template_directory_uri(); ?>/event-post.jpg">イベント詳細ページへ</a>
            </div>
        </section>
        <section class="main-whats">
            <h2>What's BeeCome?</h2>
            <img class="main-whats-logoimg" src="<?php echo get_template_directory_uri(); ?>/img/BeeCome-logo.png" alt="ロゴの蜂の画像です">
            <img class="main-whats-lectureimg" src="<?php echo get_template_directory_uri(); ?>/img/lecture.png" alt="活動の様子です">
            <div class="main-whats-scripts">
                <p>
                    　”BeeCome”は学生が自分自身のやりたいことを実現させる団体です。<br>
                    　BeeComeの学生は、講座で学習し、得た知識・技術を用いてイベントの企画運営を行います。<br>
                    　青森県内の企業を講師としてお呼びし、企画班・ 広報班・ IT班・ 動画班に分かれそれぞれの専門性を身につけることを目的とします。
                </p>
            </div>
        </section>
        <section class="main-activity" id="activity">
            <h2>ACTIVITY</h2>
            <div class="main-activity-script">
                <h3>ポータブルスキルの習得と実践</h3>
                <p>
                    　ポータブルスキルとは、どのような仕事でも通用する「持ち運び可能な能力」です。<br>
                    　BeeComeでは、講師企業から専門知識・技術を教わり、学んだ知識をもとに地域交流イベントを開催します。<br>
                    　実践を通して専門知識・技術をポータブルスキルとして習得することで、多様性に長けたクリエイティブな人材を目指すことができます。
                </p>
            </div>
            <div class="main-activity-articles">
                <article class="main-activity-articles-item">
                    <h4>企画班</h4>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/kikaku.jpg" alt="">
                    <ul>
                        <li>０&rarr;１を作る経験</li>
                        <li>企画・運営</li>
                        <br>
                        <h4>講師企業：株式会社QLOCK UP</h4>
                    </ul>
                </article>
                <article class="main-activity-articles-item">
                    <h4>広報班</h4>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/kouhou.jpg" alt="">
                    <ul>
                        <li>デザインの実践</li>
                        <li>取材・編集・ライティング</li>
                        <br>
                        <h4>講師企業：株式会社エスパス</h4>
                        <h4>　　　　株式会社字と図</h4>
                        
                    </ul>
                </article>
                <article class="main-activity-articles-item">
                    <h4>IT班</h4>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/it.jpg" alt="">
                    <ul>
                        <li>Webデザインの実践をしたい</li>
                        <li>プログラミングの実践</li>
                        <br>
                        <h4>講師企業：株式会社コンシス</h4>
                    </ul>
                </article>
                <article class="main-activity-articles-item">
                    <h4>動画班</h4>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/douga.jpg" alt="">
                    <ul>
                        <li>動画制作を1から学ぶ</li>
                        <li>動画企画・撮影・編集の基本と実践</li>
                        <br>
                        <h5>講師企業：株式会社SCIENCE WORKS.</h5>
                    </ul>
                </article>
            </div>
        </section>
    </main>
<?php get_footer(''); ?>
