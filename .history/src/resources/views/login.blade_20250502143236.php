<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
</head>
<body>
    <!--ログイン画面-->
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/con">
                FashionablyLate
            </a>
            <form class="header__button" action="/register" method="get">
                <button class="heder__button-item">
                    register
                </button>
            </form>
        </div>
    </header>
    <main>
        <div>
            <div class="register-form__content">
                <div class="register-form__content-title">
                    <h2>Login</h2>
                    <div class="register-form__content-item">
                        <form action="/login" method="post">
                            @csrf
                            <p>メールアドレス</p>
                            <input type="text" name="email" required>
                            <p>パスワード</p>
                            <input type="text" name="password" required>
                            <div class="register-form__button">
                                <button class="register-form__button-submit" type="submit">
                                ログイン
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>

