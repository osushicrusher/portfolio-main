<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    // POSTでのアクセスでない場合
    $name = '';
    $email = '';
    $subject = '';
    $message = '';
    $err_msg = '';
    $complete_msg = '';

} else {
    // フォームがサブミットされた場合（POST処理）
    // 入力された値を取得する
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // エラーメッセージ・完了メッセージの用意
    $err_msg = '';
    $complete_msg = '';

    // 空チェック
    if ($name == '' || $email == '' || $subject == '' || $message == '') {
        $err_msg = '全ての項目を入力してください。';
    }

    // エラーなし（全ての項目が入力されている）
    if ($err_msg == '') {
        $to = 'osushicrusher@gmail.com'; // 管理者のメールアドレスなど送信先を指定
        $headers = "From: " . $email . "\r\n";

        // 本文の最後に名前を追加
        $message .= "\r\n\r\n" . $name;

        // メール送信
        mb_send_mail($to, $subject, $message, $headers);

        // 完了メッセージ
        $complete_msg = '送信されました！';

        // 全てクリア
        $name = '';
        $email = '';
        $subject = '';
        $message = '';
    }

}

?>

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
            <input type="email" name="email" id="email" class="contact__input contact__input--text" placeholder="例) yoshino@example.com" value="<?php echo $email; ?>" required>
        </p>                            
        <p class="contact__form">                            
            <label for="subject">件名 </label><br>
            <input type="text" name="subject" id="subject" class="contact__input contact__input--text" placeholder="件名" id="subject" value="<?php echo $subject; ?>">
        </p>
        <p class="contact__form">
            <label for="message">お問い合わせ内容 <span class="required">必須</span></label><br>
            <textarea name="message" class="contact__input contact__input--message" id="message" required><?php echo $message; ?></textarea>
        </p>                            
        <button type="submit" value="入力を確認する" name="btn_confirm" class="btn-square-shadow">送信する</button>
    </form>
</body>
</html>