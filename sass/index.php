<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    // POSTでのアクセスでない場合
    $company = '';
    $realname = '';
    $mail = '';
    $phone = '';
    $message = '';
} else {
    // フォームがsubmitされた時（POST処理）
    // 値を取得する
    $company = $_POST['company'];
    $realname = $_POST['realname'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
}

// エラーメッセージ、完了メッセージの準備
$err_msg = '';
$complete_msg = '';

// 空チェック（必須項目が記入されているか）
if ($realname = '' || $mail = '' || $message = '') {
    $err_msg = '正しく記入してください';
}

// 項目に不備がない場合（必須項目が埋まっている）は送信
if ($err_msg = '') {
    $to = 'osushicrusher@gmail.com'; // 送信先の指定
    $headers = "From" . $mail . "\r\n"; // headerの指定
    $subject = $realname . 'さんからのお問い合わせ'; // 件名の指定

    //messageの最後に会社名と名前,電話番号を追加
    $message .= "\r\n\r\n" . $company . $realname . $phone;

    // メールを送信
    mb_send_mail($to, $subject, $message, $headers);

    // 完了メッセージをアラートで表示
    $alert = "<script type='text/javascript'>alert('送信しました');</script>";
    
    echo $alert;

    // 全てクリア
    $company = '';
    $realname = '';
    $mail = '';
    $phone = '';
    $message = '';
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hikaru Yoshino</title>
</head>
<body> 
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
                    <span class="heading-primary--sub margin-top-small">Web Engineer</span>
                </h1>
            </div>
        </div>
    </header>

    <main>
        <section class="about">
            <a id="about" class="heading-secondary-box">
                <h2 class="heading-secondary">About</h2>
            </a>
            <div class="row effect-fade">
                <img src="./images/about.jpg" class="about__img" alt="">
                <div class="about__profile">
                    <p class="about__profile-text">
                        吉野 光 （よしの ひかる)<br>
                        新潟大学人文学部人文学科3年<br>
                        2019年10月頃から学習開始し、現在はVue.jsとPHPをメインに学習中。
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
            </divc>
        </section>

        <section class="works">
            <div class="heading-secondary-box">
                <a id="works"><h2 class="heading-secondary">Works</h2></a>
            </div>
            <div class="works__item-box">
                    <figure class="works__item effect-fade">
                        <img src="./images/weatherApp.png" alt="天気検索アプリのimage">
                        <a href="https://weather-app-7fa23.firebaseapp.com" target="_blank">
                            <figcaption class="works__description-box" ontouchstart="">
                                <h3 class="heading-tertiary">天気検索アプリ</h3>
                                <p class="works__description">世界各地の現在の天気情報を検索することができます。<br>
                                使用言語等: Vue.js, firebase
                                </p>
                            </figcaption>
                        </a>
                    </figure>
                    <figure class="works__item effect-fade">
                        <img src="./images/final.png" alt="英語学習アプリのimage">
                        <a href="https://final-952b0.firebaseapp.com" target="_blank">
                            <figcaption class="works__description-box" ontouchstart="">
                                <h3 class="heading-tertiary">英語学習アプリ</h3>
                                <p class="works__description">NewYorkTimesのニュースの閲覧、単語、英文の保存。<br>
                                「英語できてすごいね！」と褒められても、実際には思うように使いこなせず自分のこれまでの学習法に悔いている人向け。<br>
                                使用言語等: Vue.js, firebase
                                </p>
                            </figcaption>
                        </a>
            </div>
        </section>

        <section class="contact">
            <div class="heading-secondary-box">
                <a id="contact"><h2 class="heading-secondary">Contact</h2></a>
            </div>
            <form class="contact__form-box effect-fade" method="POST">
                <p class="contact__form">
                    <label for="company">貴社名</label><br>
                    <input type="text" name="company" class="contact__input contact__input--text" id="company" placeholder="例）△△△△会社">
                </p>
                <p class="contact__form">                            
                    <label for="realname">お名前 <span class="required">必須</span></label><br>
                    <input type="text" name="realname" class="contact__input contact__input--text" id="realname" placeholder="例）田中 太郎" required>
                </p>
                <p class="contact__form">
                    <label for="js-mail">メールアドレス <span class="required">必須</span></label><br>
                    <input type="email" name="mail" id="js-mail" class="contact__input contact__input--text" placeholder="例) yoshino@example.com" required>
                    <p id="js-warningMail" class="warning-message"></p>
                </p>                            
                <p class="contact__form">                            
                    <label for="js-phone">電話番号 </label><br>
                    <input type="tel" id="js-phone" name="phone" class="contact__input contact__input--text" placeholder="例）03-1234-5678" id="phone">
                    <p id="js-warningPhone" class="warning-message"></p>
                </p>
                <p class="contact__form">
                    <label for="message">お問い合わせ内容 <span class="required">必須</span></label><br>
                    <textarea name="message" class="contact__input contact__input--message" id="message" required></textarea>
                </p>                            
                <p><input type="submit" value="入力を確認する" name="btn_confirm" class="btn-square-shadow"></p>
            </form>
        </section>
    </main>

    <footer class="footer">
        <div class="sns-icon">
            <a href="#" class="sns-icon__link --twitter" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/yeunserratos/?hl=en" class="sns-icon__link --insta" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com/osushicrusher" class="sns-icon__link --github" target="_blank"><i class="fab fa-github"></i></a>
            <a href="#" class="sns-icon__link --facebook"><i class="fab fa-facebook" target="_blank"></i></a>
        </div>
        <p class="copyright" lang="en">
            <small>Copyright &copy; 2020 HIKARU YOSHINO All Rights Reserved.</small>
        </p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/app.js"></script>
</body>
</html>