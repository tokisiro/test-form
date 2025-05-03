<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
</head>
<body>
    <!--お問合せフォーム入力ページ-->
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
                    <h2>contact</h2>
                    <div class="contact-form__content-item">
                        <form action="/confirm" method="post">
                            @csrf
                            <table>
                                <div class="contact-form__item-name">
                                    <tr>
                                        <th>
                                            <p>
                                                お名前
                                                <span style="color: red;">※</span>
                                            </p>
                                        </th>
                                        <td>
                                            <input type="text" name="Last name" placeholder="例:山田">
                                            <input type="text" name="first name" placeholder="例:太郎">
                                        </td>
                                    </tr>
                                </div>
                                <div class="contact-form__item-gender">
                                    <tr>
                                        <th>
                                            <p>
                                                性別
                                                <span style="color: red;">※</span>
                                            </p>
                                        </th>
                                        <div class="contact-form__item-gender-item">
                                            <td>
                                                <span>
                                                    <input type="radio" name="man">男性
                                                </span>
                                                <span>
                                                    <input type="radio" name="woman">
                                                    女性
                                                </span>
                                                <span>
                                                    <input type="radio" name="others">
                                                        その他
                                                </span>
                                            </td>
                                        </div>
                                    </tr>
                                </div>
                            </div>
                            <div class="contact-form__item-email">
                                <th>
                                    <p>
                                        メールアドレス
                                        <span style="color: red;">※</span>
                                    </p>
                                </th>
                                <td>
                                    <input type="email" name="email">
                                </td>
                            </div>
                            <div class="contact-form__item-tel">
                                <th>
                                    <p>
                                        電話番号
                                        <span style="color: red;">※</span>
                                    </p>
                                </th>
                                <td>
                                    <input type="tel" name="tel">
                                </td>
                                    <p>-</p>
                                <td>
                                    <input type="tel" name="tel">
                                </td>
                                <td>
                                    <p>-</p>
                                    <input type="tel" name="tel">
                                </td>
                                </td>
                            </div>
                            <div class="contact-form__item-address">
                                <p>住所</p>
                                <span style="color: red;">※</span>
                                <input type="address" name="address">
                            </div>
                            <div class="contact-form__item-tel">
                                <p>建物名</p>
                                <span style="color: red;">※</span>
                                <input type="tel" name="password">
                            </div>
                            <div class="contact-form__item-select">
                                <p>お問い合わせの種類</p>
                                <span style="color: red;">※</span>
                                <select name="select">
                                    <option value="selected">選択してください</option>
                                    <option name="delivery" value="">商品のお届けについて</option>
                                    <option name="exchange" value="">商品の交換について</option>
                                    <option name="trouble" value="">商品トラブル</option>
                                    <option name="inquiry" value="">ショップへのお問合せ</option>
                                    <option name="others" value="">その他</option>
                                </select>
                            </div>
                            <div class="contact-form__item-inquiry">
                                <p>お問合せ内容</p>
                                <span style="color: red;">※</span>
                                <textarea name="inquiry" cols="50" rows="10"></textarea>
                            </div>
                            <div class="register-form__button">
                                <button class="register-form__button-submit" type="submit">
                                確認画面
                                </button>
                            </div>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
    </main>
</body>
</html>