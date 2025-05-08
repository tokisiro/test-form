<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
</head>
<body>
    <!--ユーザー登録ページ-->
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php02/index.php">
                FashionablyLate
            </a>
            <a class="header__button" href="/login">
                <button class="heder__button-item">
                    login
                </button>
            </a>
        </div>
    </header>
    <main>
        <div>
            <div class="register-form__content">
                <div class="register-form__content-title">
                    <h2>Register</h2>
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
                            <p>お名前</p>
                            <input type="text" name="name" value="{{ old('name') }}">
                            <p>メールアドレス</p>
                            <input type="email" name="email" value="{{ old('email') }}">
                            <p>パスワード</p>
                            <input type="password" name="password_confirmation" >
                            <div class="register-form__button">
                            <button class="register-form__button-submit" type="submit">
                                登録
                            </button>
                        </div>
                        </form>
                    </div>
                <!--ボタン類を記述-->
                </div>
                
            </div>
        </div>
    </main>
</body>
</html>