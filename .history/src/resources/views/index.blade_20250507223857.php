<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="css/sanitize.css" />
    <link rel="stylesheet" href="css/index.css" />
</head>
<body>
    <!--お問合せフォーム入力ページ-->
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
            <hr>
        </div>
    </header>
    <main>
            <div class="contact-form">
                <div class="contact-form__content-title">
                    <h2>contact</h2>
                </div>
                    <div class="contact-form__content-item">
                        @if (count($errors) > 0)
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form action="/confirm" method="post">
                            @csrf
                            <table>
                                <tr>
                                    <th>
                                        お名前
                                        <span style="color: red;">※</span>
                                    </th>
                                    <td>
                                        <input type="text" name="last_name" placeholder="例:山田">
                                        <input type="text" name="first_name" placeholder="例:太郎">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        性別
                                        <span style="color: red;">※</span>
                                    </th>
                                    <td>
                                        <span>
                                            <input type="radio" name="gender"
                                            value="1">男性
                                        </span>
                                        <span>
                                            <input type="radio" name="gender"
                                            value="2">
                                                女性
                                        </span>
                                        <span>
                                            <input type="radio" name="gender"
                                            value="3">
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
                                        <input type="email" name="email" placeholder="例：info@sample.com">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        電話番号
                                        <span style="color: red;">※</span>
                                    </th>
                                    <td>
                                        <input type="tel" id="tel1" name="tel1" value="" placeholder="例：080">
                                        <input type="tel" id="tel2" name="tel2" value="" placeholder="例：1234">
                                        <input type="tel" id="tel3" name="tel3" value="" placeholder="5678">
                                        <input type="hidden" id="tel" name="tel" >
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        住所
                                        <span style="color: red;">※</span>
                                    </th>
                                    <td>
                                        <input type="text" name="address" value="" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        建物名
                                    </th>
                                    <td>
                                        <input type="text" name="building" value="" placeholder="例：千駄ヶ谷マンション101">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        お問い合わせの種類
                                        <span style="color: red;">※</span>
                                    </th>
                                    <td>
                                        <select name="category_id" placeholder="">
                                            <option value="">選択してください</option>
                                            <option  id="1" value="1">商品のお届けについて</option>
                                            <option  id="2" value="2">商品の交換について</option>
                                            <option  id="3" value="3">商品トラブル</option>
                                            <option  id="4" value="4">ショップへのお問合せ</option>
                                            <option  id="5" value="5">その他</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        お問合せ内容
                                        <span style="color: red;">※</span>
                                    </th>
                                    <td>
                                        <textarea name="detail" cols="50" rows="10" placeholder="お問合せ内容をご記載ください"></textarea>
                                    </td>
                                </tr>
                        </table>
                        <div class="contact-form__button">
                            <input class="contact-form__button-submit" type="submit" value="確認画面">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script>
    document.querySelector('form').addEventListener('submit', function() {
        const tel1 = document.getElementById('tel1').value;
        const tel2 = document.getElementById('tel2').value;
        const tel3 = document.getElementById('tel3').value;

        document.getElementById('tel').value = [tel1, tel2, tel3].filter(v => v.trim() !== '').join('-');
    });
</script>
</body>
</html>