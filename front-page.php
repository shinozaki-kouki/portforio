<?php get_header(); ?>
<div class=image>
    <img width="80%" class="scroll" src="<?php echo get_template_directory_uri(); ?>/img/IMG_0096.jpg">
</div>
<div class=font>
    <div class=relative>
        <div class="box"></div>
        <div class="flex introduce">
            <p class="photo"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_3032.jpg"></img>
            <div class="blockflex">
                <div class="margin">
                    <h2>about</h2>
                    <p>-私について-</p>
                </div>
                <div class=introduction>
                    <P>1996年生まれ。大阪府阪南市出身。<br class="br-sp">大学を卒業後、地方銀行へ入行。
                        <br class="br-pc">個人営業を主として業務を行なっており、顧客の資産形成の相談を請負う。<br class="br-sp2">
                        <br class="br-pc2">活動の幅を広げるためweb系のフリーランスへ。人とのコミュニケーションを大切にして、
                        <br class="br-pc3">エンジニアとしてお客様のニーズに応えれるような活動を行なっていく。
                    </P>
                </div>
            </div>
        </div>
    </div>
    <div class="service scroll">
        <h1>-service-</h1>
        <div class="d-flex">
            <div class="container">
                <h2>ディレクション</h2>
                <h3>DIRECTION</h3>
                <img width="120" height="100" src="<?php echo get_template_directory_uri(); ?>/img/icon_service01.jpg">
                <p>お客様の要望をヒアリングし、現状の問題点を洗い出し効果的なプランを作成いたします。制作ではデザインに入る前の事前の準備が特に重要になります。何が必要で何が必要でないのかをヒアリングを元に判断し、費用対効果の高いWebサイトを作るための土台を作ります。</p>
            </div>
            <div class="container">
                <h2>デザイン</h2>
                <h3>DESIGN</h3>
                <img width="120" height="100" src="<?php echo get_template_directory_uri(); ?>/img/icon_service02.jpg">
                <p>「あなたが求めるデザイン」を作成いたします。人の使うものであることを常に意識して、使う人が迷わない、目的を達成できるデザインを心がけています。インターフェースの重要性が増す中でデザインの役割を理解し、そのプランに最適な提案をさせていただきます。</p>
            </div>
            <div class="container">
                <h2>コーディング</h2>
                <h3>CODING</h3>
                <img width="120" height="100" src="<?php echo get_template_directory_uri(); ?>/img/icon_service03.jpg">
                <p>デザインの意図を理解し、動きや効果を適切に使用することでWebサイトの仕上がりは大きく変わります。HTMLとCSSを活用し、正しい文法で忠実なデザインを再現、 加えてJava Scriptを使用した動きのあるサイトなど、様々なサイトのコーディングを行っております。</p>
            </div>
        </div>
    </div>
    <div class="work scroll">
        <h1>-work-</h1>
        <div class="d-flex">
            <div class="work-container"><a href="お花屋さんのLP編/flower.html"><img class="work-pic" src="<?php echo get_template_directory_uri(); ?>/img/work_01.png"></div></a>
            <div class="box2 work-container push"></div>
            <div class="box3 work-container push"></div>
        </div>
    </div>
    <div class="blog-home scroll">
        <h1>-blog-</h1>
        <div class="d-flex">
            <div class="yokonarabi container">
                <div class="blog-container">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<div class="d-flex">
    <div class="yokonarabi container">
        <div class="blog-container">
            <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_0028.jpeg">
            <p>月日が経つのは早いもので、来月１３歳の誕生日を迎えます。最近は疲れているのかずっとお昼寝しています。いつまでも元気で居てほしいものです。</p>
        </div>
        <div class="blog-container">
            <img src="<?php echo get_template_directory_uri(); ?>/img/cups01.jpg">
            <p>甘いものが食べたくなり地元の友人と和歌山市にある「CUPS coffee & cupcakes」という喫茶店へ。ゆったりと過ごすことができいい気分転換になりました。</p>
        </div>
        <div class="blog-container">
            <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_7495.jpg">
            <p>少し前になりますが会社の同僚と石垣島へ。台風の影響で飛行機が遅れどうなるかと思いましたが最終日は晴れてマリンスポーツを楽しむことができました。</p>
        </div>
    </div>
</div>
    </div>
</div>
</div>
<?php get_footer(); ?>