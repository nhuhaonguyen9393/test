<?php
// ログイン時にアクセスした場合は、マイページにリダイレクトできるようにしましょう。
mb_internal_encoding("utf8");
session_start();

?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>

    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="login.php">ログイン</a></div>
        </header>
        <main>
            <form action="mypage.php" method="post">
                <div class="login_contents">
                    <p>メールアドレスまたはパスワードが間違っています。</p>
                    <div class="mail">
                        <label>メールアドレス</label><br>
                        <input type="text" class="formbox" size="40" value="" name="mail">
                    </div>
                    <div class="password">
                        <label>パスワード</label><br>
                        <input type="password" class="formbox" size="40" value="" name="password">
                    </div>
                    <div class="login_button">
                        <input type="submit" class="submit_button" size="35" value="ログイン">
                    </div>
                </div>
            </form>
        </main>
        <footer>
            © 2018 InterNous.inc. All rights reserved
        </footer>
    </body>
</html>