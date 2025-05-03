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
                            <table>
                            @csrf
                            <div class="contact-form__item-name">
                                <tr>
                                    <th>お名前<span style="color: red;">※</span></th>
                                    <td><input type="text" name="last_name" placeholder="例:山田"></td>
                                    <td><input type="text" name="first_name" placeholder="例:太郎"></td>
                                </tr>
                            </div>
                            @if ($errors->has('first_name'))
                                <tr>
                                    <th>ERROR</th>
                                    <td>
                                        {{$errors->first('first_name')}}
                                    </td>
                                </tr>
                            @endif
                            <div class="contact-form__item-gender">
                                <tr>
                                    <th>性別<span style="color: red;">※</span></th>
                                    <div class="contact-form__item-gender-man">
                                        <td><input type="radio" name="gender" value="1">
                                    男性</td>
                                    </div>
                                    <div class="contact-form__item-gender-woman">
                                        <td><input type="radio" name="gender" value="2">
                                    女性</td>
                                    </div>
                                    <div class="contact-form__item-gender-woman">
                                        <td><input type="radio" name="gender" value="3">
                                    その他</td>
                                </tr>
                            </div>
                                @if ($errors->has('gender'))
                                    <tr>
                                        <th">ERROR</th>
                                        <td>
                                            {{$errors->first('gender')}}
                                        </td>
                                    </tr>
                                @endif
                            </div>
                            <div class="contact-form__item-email">
                                <tr>
                                    <th>メールアドレス<span style="color: red;">※</span></th>
                                    <td><input type="email" name="email"></td>
                                </tr>
                            </div>
                            @if ($errors->has('email'))
                                <tr>
                                    <th">ERROR</th>
                                    <td>
                                        {{$errors->first('email')}}
                                    </td>
                                </tr>
                            @endif
                            <div class="contact-form__item-tel">
                                <tr>
                                    <th>電話番号<span style="color: red;">※</span></th>
                                    <td><input type="tel" name="tel1" maxlength="3" size="3"><span>-</span>
                                        <input type="tel" name="tel2" maxlength="4" size="4"><span>-</span>
                                        <input type="tel" name="tel3" maxlength="4" size="4"></td>
                                </tr>
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
                                <tr>
                                    <th>住所<span style="color: red;">※</span></th>
                                    <td><input type="address" name="address"></td>
                                </tr>
                            </div>
                            @if ($errors->has('address'))
                                <tr>
                                    <th">ERROR</th>
                                    <td>
                                        {{$errors->first('address')}}
                                    </td>
                                </tr>
                            @endif
                            <div class="contact-form__item-tel">
                                <tr>
                                    <th>建物名<span style="color: red;">※</span></th>
                                    <td><input type="text" name="building"></td>
                                </tr>
                            </div>
                            @if ($errors->has('building'))
                                <tr>
                                    <th">ERROR</th>
                                    <td>
                                        {{$errors->first('building')}}
                                    </td>
                                </tr>
                            @endif
                            <div class="contact-form__item-select">
                                <tr></tr>
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
                            @if ($errors->has('category_id'))
                                <tr>
                                    <th>ERROR</th>
                                    <td>
                                        {{$errors->first('category_id')}}
                                    </td>
                                </tr>
                            @endif
                            <div class="contact-form__item-inquiry">
                                <p>お問合せ内容</p>
                                <span style="color: red;">※</span>
                                <textarea name="detail" cols="50" rows="10"></textarea>
                            </div>
                            @if ($errors->has('detail'))
                                <tr>
                                    <th>ERROR</th>
                                    <td>
                                        {{$errors->first('detail')}}
                                    </td>
                                </tr>
                            @endif
                            </table>
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