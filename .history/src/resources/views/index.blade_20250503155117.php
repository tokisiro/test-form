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
                            <div class="contact-form__item-name">
                                <p>お名前</p>
                                <span style="color: red;">※</span>
                                <input type="text" name="last_name" placeholder="例:山田">
                                <input type="text" name="first_name" placeholder="例:太郎">
                            </div>
                            @if ($errors->has('first_name'))
                                <tr>
                                    <th style="background-color: red">ERROR</th>
                                    <td>
                                        {{$errors->first('first_name')}}
                                    </td>
                                </tr>
                            @endif
                            <div class="contact-form__item-gender">
                                <p>性別</p>
                                <span style="color: red;">※</span>
                                <div class="contact-form__item-gender-man">
                                    <label><input type="radio" name="gender" value="1">
                                    男性</label>
                                </div>
                                <div class="contact-form__item-gender-woman">
                                    <label><input type="radio" name="gender" value="2">
                                    女性</label>
                                </div>
                                <div class="contact-form__item-gender-woman">
                                    <label><input type="radio" name="gender" value="3">
                                    その他</label>
                                </div>
                                @if ($errors->has('gender'))
                                    <tr>
                                        <th style="background-color: red">ERROR</th>
                                        <td>
                                            {{$errors->first('gender')}}
                                        </td>
                                    </tr>
                                @endif
                            </div>
                            <div class="contact-form__item-email">
                                <p>メールアドレス</p>
                                <span style="color: red;">※</span>
                                <input type="email" name="email">
                            </div>
                            @if ($errors->has('email'))
                                <tr>
                                    <th style="background-color: red">ERROR</th>
                                    <td>
                                        {{$errors->first('email')}}
                                    </td>
                                </tr>
                            @endif
                            <div class="contact-form__item-tel">
                                <p>電話番号</p>
                                <span style="color: red;">※</span>
                                <input type="tel" name="tel1" maxlength="3" size="3">
                                <p>-</p>
                                <input type="tel" name="tel2" maxlength="4" size="4">
                                <p>-</p>
                                <input type="tel" name="tel3" maxlength="4" size="4">
                            </div>
                            @if ($errors->has('tel'))
                                <tr>
                                    <th style="background-color: red">ERROR</th>
                                    <td>
                                        {{$errors->first('tel')}}
                                    </td>
                                </tr>
                            @endif
                            <div class="contact-form__item-address">
                                <p>住所</p>
                                <span style="color: red;">※</span>
                                <input type="address" name="address">
                            </div>
                            @if ($errors->has('address'))
                                <tr>
                                    <th style="background-color: red">ERROR</th>
                                    <td>
                                        {{$errors->first('address')}}
                                    </td>
                                </tr>
                            @endif
                            <div class="contact-form__item-tel">
                                <p>建物名</p>
                                <span style="color: red;">※</span>
                                <input type="text" name="building">
                            </div>
                            @if ($errors->has('name'))
                                <tr>
                                    <th style="background-color: red">ERROR</th>
                                    <td>
                                        {{$errors->first('name')}}
        </td>
    </tr>
    @endif   
                            <div class="contact-form__item-select">
                                <p>お問い合わせの種類</p>
                                <span style="color: red;">※</span>
                                <select name="category_id">
                                    <option value="0">選択してください</option>
                                    <option name="delivery" value="1">商品のお届けについて</option>
                                    <option name="exchange" value="2">商品の交換について</option>
                                    <option name="trouble" value="3">商品トラブル</option>
                                    <option name="inquiry" value="4">ショップへのお問合せ</option>
                                    <option name="others" value="5">その他</option>
                                </select>
                            </div>
                            <div class="contact-form__item-inquiry">
                                <p>お問合せ内容</p>
                                <span style="color: red;">※</span>
                                <textarea name="detail" cols="50" rows="10"></textarea>
                            </div>
                            <div class="register-form__button">
                                <button class="register-form__button-submit" type="submit">
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