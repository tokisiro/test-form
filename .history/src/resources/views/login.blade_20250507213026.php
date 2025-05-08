<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="css/sanitize.css" />
    <link rel="stylesheet" href="css/login.css" />
</head>
<body>
    <!--ログイン画面-->
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
        <div></div>
            <a class="header__button" href="/register">
                <button class="header__button-item">
                    register
                </button>
            </a>
        </div>
    </header>
    <main>
            <div class="register-form__content">
                <div class="register-form__content-title">
                    <h2>Login</h2>
                </div>
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
                            <p>メールアドレス</p>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="例：info@sample.com">
                            <p>パスワード</p>
                            <input type="password" name="password"placeholder="例：coachtech1106">
                            <div class="register-form__button">
                                <button class="register-form__button-submit" type="submit">
                                ログイン
                                </button>
                            </div>
                        </form>
                    </div>
            </div>
    </main>
</body>
</html>

