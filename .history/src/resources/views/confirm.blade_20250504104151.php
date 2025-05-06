<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
</head>
<body>
    <!--お問合せフォーム確認ページ-->
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php02/index.php">
                FashionablyLate
            </a>
        </div>
    </header>
    <main>
        <div class="register-form__content">
            <div class="contact-form__content-title">
                <h2>confirm</h2>
                <div class="contact-form__content-item">
                    <form action="/confirm" method="post">
                        @csrf
                        @if (count($errors) > 0)
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                        <table>
                            <div class="contact-form__item-name">
                                <tr>
                                    <th>
                                        <p>
                                            お名前
                                        </p>
                                    </th>
                                    <td>
                                        {{ $data['Last_name'] ?? '' }} {{ $data['First_name'] ?? '' }}
                                        </td>
                                    </tr>
                                </div>
                                <div class="contact-form__item-gender">
                                    <tr>
                                        <th>
                                            <p>
                                                性別
                                                
                                            </p>
                                        </th>
                                        <div class="contact-form__item-gender-item">
                                            <td>
                                                {{ $data['gender'] ?? '' }}
                                            </td>
                                        </div>
                                    </tr>
                                </div>
                            </div>
                            <div class="contact-form__item-email">
                                <tr>
                                    <th>
                                        メールアドレス
                                        
                                    </th>
                                    <td>
                                        {{ $data['email'] ?? '' }}
                                    </td>
                                </tr>
                            </div>
                            <div class="contact-form__item-tel">
                                <tr>
                                    <th>
                                        <p>
                                            電話番号
                                        </p>
                                    </th>
                                    <td>
                                        {{ $data['tel'] ?? '' }}
                                    </td>
                                </tr>
                            </div>
                            <div class="contact-form__item-address">
                                <tr>
                                    <th>
                                        住所
                                        
                                    </th>
                                    <td>
                                        {{ $data['address'] ?? '' }}
                                    </td>
                                </tr>
                            </div>
                            <div class="contact-form__item-tel">
                                <tr>
                                    <th>
                                        建物名
                                    
                                    </th>
                                    <td>
                                        {{ $data['building'] ?? '' }}
                                    </td>
                                </tr>
                            </div>
                            <div class="contact-form__item-select">
                                <tr>
                                    <th>
                                        お問い合わせの種類
                                        
                                    </th>
                                    <td>
                                        {{ $data['category_id'] ?? '' }}
                                    </td>
                                </tr>
                            </div>
                            <div class="contact-form__item-inquiry">
                                <tr>
                                    <th>
                                        お問合せ内容
                                        
                                    </th>
                                    <td>
                                        {{ $data['detail'] ?? '' }}
                                    </td>
                                </tr>
                            </div>
                            </table>
                            <div class="register-form__button">
                                <button class="register-form__button-submit" type="submit">
                                送信
                                </button>
                                <div class="register-form__button">
                                <button class="register-form__button-submit" type="submit">
                                修正
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </main>
</body>
</html>