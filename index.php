
<?php include_once("index.html"); ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="contact__form-box effect-fade" method="POST">
        <p class="contact__form">                            
            <label for="name">お名前 <span class="required">必須</span></label><br>
            <input type="text" name="name" class="contact__input contact__input--text" id="name" placeholder="例）田中 太郎" value="<?php echo $name; ?>" required>
        </p>
        <p class="contact__form">
            <label for="email">メールアドレス <span class="required">必須</span></label><br>
            <input type="email" name="email" id="email" class="contact__input contact__input--text" placeholder="例) yoshino@example.com" value="<?php echo $email ?>" required>
        </p>                            
        <p class="contact__form">                            
            <label for="subject">件名 </label><br>
            <input type="text" id="subject" name="subject" class="contact__input contact__input--text" placeholder="件名" id="subject" value="<?php echo $subject ?>">
        </p>
        <p class="contact__form">
            <label for="message">お問い合わせ内容 <span class="required">必須</span></label><br>
            <textarea name="message" class="contact__input contact__input--message" id="message" required><?php echo $message; ?></textarea>
        </p>                            
        <buuton type="submit" value="入力を確認する" name="btn_confirm" class="btn-square-shadow"></button>
    </form>
</body>
</html>