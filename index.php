<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    // POSTでのアクセスでない場合
    $name = '';
    $email = '';
    $subject = '';
    $message = '';
    
} else {
    // フォームがサブミットされた場合（POST処理）
    // 入力された値を取得する
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

        $to = 'osushicrusher@gmail.com'; // 送信先を指定
        $headers = "From: " . $email . "\r\n";

        // 本文の最後に名前を追加
        $message .= "\r\n\r\n" . $name;

        // メール送信
        mb_send_mail($to, $subject, $message, $headers);

        // 全てクリア
        $name = '';
        $email = '';
        $subject = '';
        $message = '';
    }
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hikaru Yoshino</title>
</head>
<body> 
    <div class="wrapper">
        <header class="header">
            <div class="header__top">
                <ul id="js-nav" class="header__nav">
                    <li class="header__list list-effect" ontouchstart=""><a href="#about" class="header__link">About</a></li>
                    <li class="header__list list-effect" ontouchstart=""><a href="#works" class="header__link">Works</a></li>                    
                    <li class="header__list list-effect" ontouchstart=""><a href="#contact" class="header__link">Contact</a></li>
                </ul>
                <div id="js-hamburger" class="hamburger">
                    <div id="js-line1" class="hamburger__line line1"></div>
                    <div id="js-line2" class="hamburger__line line2 --short"></div>
                    <div id="js-line3" class="hamburger__line line3"></div>
                </div>
            </div>
            <div class="header__main">
                <div class="fluid fluid--medium">
                    <h1 class="heading-primary padding-left-small">
                        <span class="heading-primary--main">Hikaru Yoshino</span>
                        <span class="heading-primary--sub margin-top-small">Engineer</span>
                    </h1>
                </div>
            </div>
        </header>
    
        <main>
            <section class="about">
                <div class="heading-secondary-box">
                    <a id="about"><h2 class="heading-secondary">About</h2></a>
                </div>
                <div class="row effect-fade">
                    <div class="about__img-box">
                        <img src="./images/about.jpg" class="about__img" alt="">
                    </div>
                    <div class="about__profile">
                        <p class="about__profile-text">
                            吉野 光 （よしの ひかる）<br>
                            新潟大学人文学部人文学科4年<br>
                            2019年9月頃から学習開始し、現在はVue.jsとPHPをメインに学習中。
                        </p>
                        <div class="about__skill-items">
                            <div class="about__skill-item">
                                <p class="text-secondary">HTML5</p>
                                <div class="about__skill-bar">
                                    <div class="about__skill-square"></div>
                                    <div class="about__skill-square"></div>
                                    <div class="about__skill-square"></div>
                                    <div class="about__skill-square lighter"></div>
                                    <div class="about__skill-square lighter"></div>
                                </div>
                            </div>
                            <div class="about__skill-item">
                                <p class="text-secondary">CSS3</p>
                                <div class="about__skill-bar">
                                    <div class="about__skill-square"></div>
                                    <div class="about__skill-square"></div>
                                    <div class="about__skill-square"></div>
                                    <div class="about__skill-square lighter"></div>
                                    <div class="about__skill-square lighter"></div>
                                </div>
                            </div>
                            <div class="about__skill-item">
                                <p class="text-secondary">JavaScript</p>
                                <div class="about__skill-bar">
                                    <div class="about__skill-square"></div>
                                    <div class="about__skill-square"></div>
                                    <div class="about__skill-square"></div>
                                    <div class="about__skill-square lighter"></div>
                                    <div class="about__skill-square lighter"></div>
                                </div>
                            </div>
                            <div class="about__skill-item">
                                <p class="text-secondary">PHP</p>
                                <div class="about__skill-bar">
                                    <div class="about__skill-square"></div>
                                    <div class="about__skill-square"></div>
                                    <div class="about__skill-square lighter"></div>
                                    <div class="about__skill-square lighter"></div>
                                    <div class="about__skill-square lighter"></div>
                                </div>
                            </div>
                            <div class="about__skill-item">
                                <p class="text-secondary">Vue.js</p>
                                <div class="about__skill-bar">
                                    <div class="about__skill-square"></div>
                                    <div class="about__skill-square"></div>
                                    <div class="about__skill-square lighter"></div>
                                    <div class="about__skill-square lighter"></div>
                                    <div class="about__skill-square lighter"></div>
                                </div>
                            </div>
                            <div class="about__skill-item">
                                <p class="text-secondary">firebase</p>
                                <div class="about__skill-bar">
                                    <div class="about__skill-square"></div>
                                    <div class="about__skill-square"></div>
                                    <div class="about__skill-square lighter"></div>
                                    <div class="about__skill-square lighter"></div>
                                    <div class="about__skill-square lighter"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-box">
                    <a href="https://www.wantedly.com/users/118382370" class="btn btn-elliptical btn-elliptical--wantedly">Wantedly</a>
                    <a href="https://qiita.com/osushicrusher" class="btn btn-elliptical btn-elliptical--qiita">Qiita</a>
                </div>
            </section>
    
            <section class="works">
                <div class="heading-secondary-box">
                    <a id="works"><h2 class="heading-secondary">Works</h2></a>
                </div>
                <div class="wrap-items">
                    <figure class="wrap-items__item effect-fade hover-effect">
                        <img src="./images/mainmockup.png" alt="ポートフォリオのimage">
                        <a href="main.html">
                            <figcaption class="works__description-box" ontouchstart="">
                                <h3 class="text-align-center">ポートフォリオ</h3>
                                <p class="works__description">いまご覧になっているポートフォリオです。<br>
                                使用言語等: HTML, CSS, JavaScript(jQuery), PHP
                                </p>
                            </figcaption>
                        </a>
                    </figure>
                    <figure class="wrap-items__item effect-fade hover-effect">
                        <img src="./images/weathermockup.png" alt="天気検索アプリのimage">
                        <a href="weather-app.html">
                            <figcaption class="works__description-box" ontouchstart="">
                                <h3 class="text-align-center">天気検索アプリ</h3>
                                <p class="works__description">世界各地の現在の天気情報を検索することができます。<br>
                                使用言語等: Vue.js, firebase
                                </p>
                            </figcaption>
                        </a>
                    </figure>
                    <figure class="wrap-items__item effect-fade hover-effect">
                        <img src="./images/finalmockup.png" alt="英語学習アプリのimage">
                        <a href="vue-news-app.html">
                            <figcaption class="works__description-box" ontouchstart="">
                                <h3 class="text-align-center">英語学習アプリ</h3>
                                <p class="works__description">NewYorkTimesのニュースの閲覧、単語・英文の保存。<br>
                                使用言語等: Vue.js, firebase
                                </p>
                            </figcaption>
                        </a>
                    </figure>
                </div>
            </section>
    
            <section class="contact">
                <div class="heading-secondary-box">
                    <a id="contact"><h2 class="heading-secondary">Contact</h2></a>
                </div>
                <form class="contact__form-box" method="POST" action="">
                    <p class="contact__form">                            
                        <label for="name">お名前</label><br>
                        <input type="text" name="name" class="contact__input contact__input--text" id="name" placeholder="例）田中 太郎" value="" required>
                    </p>
                    <p class="contact__form">
                        <label for="email">メールアドレス</label><br>
                        <input type="email" name="email" id="email" class="contact__input contact__input--text" placeholder="例) yoshino@example.com" value="" required>
                    </p>                            
                    <p class="contact__form">                            
                        <label for="subject">件名</label><br>
                        <input type="text" name="subject" id="subject" class="contact__input contact__input--text"  id="subject" value="" required>
                    </p>
                    <p class="contact__form">
                        <label for="message">お問い合わせ内容</label><br>
                        <textarea name="message" class="contact__input contact__input--message" id="message" required></textarea>
                    </p>
                    <div class="btn-box">
                        <input type="submit" name="btn_confirm" class="btn btn-elliptical btn-elliptical--shadow" value="内容を送信する">
                    </div>                            
                </form>
            </section>
        </main>
        
        <footer class="footer">
            <div class="sns-icons">
                <a href="#" class="sns-icons__link sns-icons__link--twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/yeunserratos/?hl=en" class="sns-icons__link sns-icons__link--insta"><i class="fab fa-instagram"></i></a>
                <a href="https://github.com/osushicrusher" class="sns-icons__link sns-icons__link--github"><i class="fab fa-github"></i></a>
                <a href="#" class="sns-icons__link sns-icons__link--facebook"><i class="fab fa-facebook"></i></a>
            </div>
            <p class="copyright" lang="en">
                <small>Copyright &copy; 2020 HIKARU YOSHINO All Rights Reserved.</small>
            </p>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>
</html>