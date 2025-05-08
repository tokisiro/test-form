<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="css/sanitize.css" />
    <link rel="stylesheet" href="css/register.css" />
</head>
<body>
    <!--ユーザー登録ページ-->
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
        <div class="header__button">
            <a  href="/login">
                <button class="header__button-item">
                    login
                </button>
            </a>
        </div>
    </header>
    <main>
        <div class="register-form">
            <div class="register-form__title">
                <h2>Register</h2>
            </div>
            <div class="register-form__content">
                    <div class="register-form__content-item">
                        <form action="/register" method="post">
                            @csrf
                            @if (count($errors) > 0)
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="register-form__content-input">
                            <p>お名前</p>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="例：山田 太郎">
                        </div>
                        <div class="register-form__content-input">
                            <p>メールアドレス</p>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="例：info@sample.com">
                        </div>
                        <div class="register-form__content-input">
                            <p>パスワード</p>
                            <input type="password" name="password" placeholder="例：coachtech1106">
                        </div>
                        <div class="register-form__content-input">
                            <p>パスワード確認</p>
                            <input type="password" name="password_confirmation" placeholder="例：coachtech1106">
                        </div>
                            <div class="register-form__button">
                            <button class="register-form__button-submit" type="submit">
                                登録
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