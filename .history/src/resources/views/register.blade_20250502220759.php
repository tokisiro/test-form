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
        @if (count($errors) > 0)
            <ul>
  @foreach ($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif
        <div>
            <div class="register-form__content">
                <div class="register-form__content-title">
                    <h2>Register</h2>
                    <div class="register-form__content-item">
                        <form  method="post" action="{{ route('register') }}">
                            @csrf
                            <p>お名前</p>
                            <input type="text" name="name" placeholder="例:山田 太郎" required>
                            <p>メールアドレス</p>
                            <input type="text" name="email" placeholder="例:test@example.com" required>
                            <p>パスワード</p>
                            <input type="text" name="password" placeholder="例:coachtech1106" required>
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