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
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
    </header>
    <main>
        <div class="register-form__content">
            <div class="contact-form__content-title">
                <h2>confirm</h2>
                <div class="contact-form__content-item">
                    <form action="/thanks" method="post">
                        @csrf
                        <table>
                                <tr>
                                    <th>
                                        お名前
                                    </th>
                                    <td>
                                        {{ $data['last_name']  }}{{ $data['first_name']  }}
                                        <input type="hidden" name="last_name" value="{{ $data['last_name']  }}">
                                        <input type="hidden" name="first_name" value="{{ $data['first_name']  }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        性別
                                    </th>
                                        <td>
                                            {{ $data['gender']  }}
                                            <input type="hidden" name="gender" value="{{ $data['gender']  }}">
                                        </td>
                                    </tr>
                                <tr>
                                    <th>
                                        メールアドレス
                                    </th>
                                    <td>
                                        {{ $data['email']  }}
                                        <input type="hidden" name="email" value="{{ $data['email']  }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        電話番号
                                    </th>
                                    <td>
                                        {{ $data['tel']  }}
                                        <input type="hidden" name="tel" value="{{ $data['tel']  }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        住所
                                    </th>
                                    <td>
                                        {{ $data['address']  }}
                                        <input type="hidden" name="address" value="{{ $data['address']  }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        建物名
                                    </th>
                                    <td>
                                        {{ $data['building']  }}
                                        <input type="hidden" name="building" value="{{ $data['building']  }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        お問い合わせの種類
                                    </th>
                                    <td>
                                        {{ $data['category_id']  }}
                                        <input type="hidden" name="category_id" value="{{ $data['category_id']  }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        お問合せ内容
                                    </th>
                                    <td>
                                        {{ $data['detail']  }}
                                        <input type="hidden" name="detail" value="{{ $data['detail']  }}">
                                    </td>
                                </tr>
                            </table>
                            <div class="register-form__button">
                                <button class="register-form__button-submit" >
                                送信
                                </button>
                                <div class="register-form__button">
                            </div>
                        </form>
                        <form action="/" method=>
                            <button class="register-form__button-submit" type="submit">
                                修正
                            </button>
                        </form>
                    </div>
                </div>
            </div>
    </main>
</body>
</html>