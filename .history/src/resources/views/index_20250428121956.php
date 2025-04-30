<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
</head>
<body>
    お問合せフォーム入力ページ-->
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php02/index.php">
                FashionablyLate
            </a>
        </div>
    </header>
    <main>
        <div>
            <div class="register-form__content">
                <div class="contact-form__content-title">
                    <h2>contact</h2>
                    <div class="contact-form__content-item">
                        <form action="/admin" method="post">
                            <div class="contact-form__item-name">
                                <p>お名前</p>
                                <span style="color: red;">※</span>
                                <input type="text" name="Last name" placeholder="例:山田">
                                <input type="text" name="first name" placeholder="例:太郎">
                            </div>
                            <div class="contact-form__item-gender">
                                <p>性別</p>
                                <span style="color: red;">※</span>
                                <div class="contact-form__item-gender-man">
                                    <label></label><input type="radio" name="man">
                                    男性</label>
                                </div>
                                <div class="contact-form__item-gender-woman">
                                    <label></label><input type="radio" name="woman">
                                    女性</label>
                                </div>
                                <div class="contact-form__item-gender-woman">
                                    <label></label><input type="radio" name="others">
                                    その他</label>
                                </div>
                            </div>
                            <div class="contact-form__item-email">
                                <p>メールアドレス</p>
                                <span style="color: red;">※</span>
                                <input type="email" name="email">
                            </div>
                            <div class="contact-form__item-tel">
                                <p>電話番号</p>
                                <span style="color: red;">※</span>
                                <input type="tel" name="tel">
                                <p>-</p>
                                <input type="tel" name="tel">
                                <p>-</p>
                                <input type="tel" name="tel">
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
                            <div class="contact-form__item-tel">
                                <p>お問い合わせの種類</p>
                                <span style="color: red;">※</span>
                                <select>
                                    <option name="delivery" value="">商品のお届けについて</option>
                                    <option name="delivery" value=""></option>
                                </select>
                            </div>
                            <div class="contact-form__item-tel">
                                <p>お問合せ内容</p>
                                <span style="color: red;">※</span>
                                <input type="tel" name="password">
                            </div>
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