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
            <a class="header__logo" href="/php02/index.php">
                FashionablyLate
            </a>
            <a class="header__button" href="/register">
                <button class="heder__button-item">
                    register
                </button>
            </a>
        </div>
    </header>
    <main>
        <div>
            <div class="register-form__content">
                <div class="register-form__content-title">
                    <h2>Lo</h2>
                    <div class="register-form__content-item">
                        <form action="/login" method="post">
                            @csrf
                            @if (count($errors) > 0)
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                            <p>お名前</p>
                            <input type="text" name="name">
                            <p>メールアドレス</p>
                            <input type="text" name="email">
                            <p>パスワード</p>
                            <input type="text" name="password">
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

