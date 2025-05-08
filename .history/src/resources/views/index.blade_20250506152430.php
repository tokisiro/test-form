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
                                <tr>
                                    <th>
                                        お名前
                                        <span style="color: red;">※</span>
                                    </th>
                                    <td>
                                        <input type="text" name="Last_name" placeholder="例:山田">
                                        <input type="text" name="First_name" placeholder="例:太郎">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        性別
                                        <span style="color: red;">※</span>
                                    </th>
                                    <td>
                                        <span>
                                            <input type="radio" name="gender1">男性
                                        </span>
                                        <span>
                                            <input type="radio" name="gender2">
                                                女性
                                        </span>
                                        <span>
                                            <input type="radio" name="gender">
                                            その他
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        メールアドレス
                                        <span style="color: red;">※</span>
                                    </th>
                                    <td>
                                        <input type="email" name="email">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        電話番号
                                        <span style="color: red;">※</span>
                                    </th>
                                    <td>
                                        <input type="tel" name="tel1">
                                        <input type="tel" name="tel2">
                                        <input type="tel" name="tel3">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        住所
                                        <span style="color: red;">※</span>
                                    </th>
                                    <td>
                                        <input type="address" name="address">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        建物名
                                    </th>
                                    <td>
                                        <input type="tel" name="building">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        お問い合わせの種類
                                        <span style="color: red;">※</span>
                                    </th>
                                    <td>
                                        <select name="category_id">
                                            <option value="">選択してください</option>
                                            <option name="1" value="">商品のお届けについて</option>
                                            <option name="2" value="">商品の交換について</option>
                                            <option name="3" value="">商品トラブル</option>
                                            <option name="4" value="">ショップへのお問合せ</option>
                                            <option name="5" value="">その他</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        お問合せ内容
                                        <span style="color: red;">※</span>
                                    </th>
                                    <td>
                                        <textarea name="detail" cols="50" rows="10" value=""></textarea>
                                    </td>
                                </tr>
                        </table>
                        <div class="register-form__button">
                            <button class="register-form__button-submit" >
                                確認画面
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>