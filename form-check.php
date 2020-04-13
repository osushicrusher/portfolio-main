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
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div class="wrapper">
        <main>
            <div class="heading-secondary-box">
                <h2 class="heading-secondary">Contact</h2>
            </div>
            <p class="contact__text contact__text--check">もう一度送信内容の確認をお願いします</p>
            <form class="contact__form-box" method="POST" action="form-success.php">
                <p class="contact__form">                            
                    <label for="name">お名前</label><br>
                    <input type="text" name="name" class="contact__input contact__input--text" id="name" placeholder="例）田中 太郎" value="<?php echo $name; ?>" disabled required>
                </p>
                <p class="contact__form">
                    <label for="email">メールアドレス</label><br>
                    <input type="email" name="email" id="email" class="contact__input contact__input--text" placeholder="例) yoshino@example.com" value="<?php echo $email; ?>" disabled required>
                </p>                            
                <p class="contact__form">                            
                    <label for="subject">件名</label><br>
                    <input type="text" name="subject" id="subject" class="contact__input contact__input--text"  id="subject" value="<?php echo $subject; ?>" disabled required>
                </p>
                <p class="contact__form">
                    <label for="message">お問い合わせ内容</label><br>
                    <input type="text" name="message" class="contact__input contact__input--message" id="message" value="<?php echo $message; ?>" disabled required>
                </p>
                <?php
                echo '<input type="hidden" name="name" value="'.$name.'">
                <input type="hidden" name="email" value="'.$email.'">
                <input type="hidden" name="subject" value="'.$subject.'">
                <input type="hidden" name="message" value="'.$message.'">';
                ?>
                <div class="btn-box">
                    <input type="button" onclick="history.back()" class="btn btn-elliptical btn-elliptical--back" value="戻る">
                    <input type="submit" name="btn_confirm" class="btn btn-elliptical btn-elliptical--submit" value="送信">
                </div>                            
            </form>
        <main>
    </div>
</body>
</html>