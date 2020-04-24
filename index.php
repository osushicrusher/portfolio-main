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
    <meta name="format-detection" content="telephone=no">
    <title>吉野光のポートフォリオ</title>
    <meta content="吉野光のポートフォリオ" name="title">
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
                <div class="container">
                    <a id="about">
                        <h2 class="heading-secondary">About</h2>
                    </a>
                    <div class="row effect-fade">
                        <div class="about__img-box">
                            <img src="./images/about.jpg" class="about__img" alt="プロフィールの写真">
                        </div>
                        <div class="about__profile">
                            <p class="about__profile-text">
                                <span class="text-inblc">吉野 光（よしの ひかる）</span>
                                <span class="text-inblc">新潟大学人文学部人文学科4年</span>
                                <span class="text-inblc">2019年9月頃から学習開始し、現在はVue.jsとPHPをメインに学習中。</span>
                                <span class="text-inblc">やるきだけが唯一の売りです。よろしくお願いいたします。</span>
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
                                    <p class="text-secondary">CSS3(SCSS)</p>
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
                </div>
            </section>
    
            <section class="works">
                <div class="container">
                    <a id="works">
                        <h2 class="heading-secondary">Works</h2>
                    </a>
                    <div class="wrap-items">
                        <figure class="wrap-items__item effect-fade hover-effect">
                            <img src="./images/mainmockup.png" alt="ポートフォリオのimage">
                            <a href="./pages/main.html">
                                <figcaption class="works__description-box" ontouchstart="">
                                    <h3 class="text-align-center">ポートフォリオ</h3>
                                    <p class="works__description">いまご覧になっているポートフォリオです<br>
                                    使用言語等: JavaScript(jQuery), PHP
                                    </p>
                                </figcaption>
                            </a>
                        </figure>
                        <figure class="wrap-items__item effect-fade hover-effect">
                            <img src="./images/weathermockup.png" alt="天気検索アプリのimage">
                            <a href="./pages/weather-app.html">
                                <figcaption class="works__description-box" ontouchstart="">
                                    <h3 class="text-align-center">天気検索アプリ</h3>
                                    <p class="works__description">世界各地の現在の天気情報を検索<br>
                                    使用言語等: Vue.js, firebase
                                    </p>
                                </figcaption>
                            </a>
                        </figure>
                        <figure class="wrap-items__item effect-fade hover-effect">
                            <img src="./images/finalmockup.png" alt="英語学習アプリのimage">
                            <a href="./pages/vue-news-app.html">
                                <figcaption class="works__description-box" ontouchstart="">
                                    <h3 class="text-align-center">英語学習アプリ</h3>
                                    <p class="works__description">NewYorkTimesのニュースの閲覧、単語・英文の保存<br>
                                    使用言語等: Vue.js, firebase
                                    </p>
                                </figcaption>
                            </a>
                        </figure>
                        <figure class="wrap-items__item effect-fade hover-effect">
                            <img src="./images/noramockup.png" alt="写真投稿アプリのimage">
                            <a href="./pages/photo-app.html">
                                <figcaption class="works__description-box" ontouchstart="">
                                    <h3 class="text-align-center">写真投稿アプリ</h3>
                                    <p class="works__description">写真の投稿の追加・編集・削除<br>
                                    使用言語等: PHP, MySQL
                                    </p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
            </section>
    
            <section class="contact">
                <div class="container">
                    <a id="contact">
                        <h2 class="heading-secondary">Contact</h2>
                    </a>
                    <form class="contact__form-box" method="POST" action="./includes/form-check.php">
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
                            <input type="submit" name="btn_confirm" class="btn btn-elliptical btn-elliptical--submit" value="内容を送信する">
                        </div>                       
                    </form>
                </div>
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