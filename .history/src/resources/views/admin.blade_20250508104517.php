<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="css/sanitize.css" />
    <link rel="stylesheet" href="css/admin.css" />
</head>
<body>
    @if (Auth::check())
    <!--管理画面ページ-->
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
            <form class="header__logout" action="/logout" method="post">
                @csrf
                <button class="header-nav__button">logout</button>
            </form>
            <hr>
        </div>
    </header>
    <main>
        <div class="admin-form">
            <div class="admin-form__title">
                <h2>Admin</h2>
            </div>
            <div>
                <form action="" method=post>
                    @csrf
                    <div class="admin-form__search">
                        <input type="text" name=name value="{{ request('name') }}">
                        <select name="gender" >
                            <option value="">男</option>
                            <option value="">女</option>
                            <option value="">その他</option>
                        </select>
                        <select name="category" >
                            <option value="">商品のお届けについて</option>
                            <option value="">商品の交換について</option>
                            <option value="">商品トラブル</option>
                            <option value="">ショップへのお問い合わせ</option>
                            <option value="">その他</option>
                        </select>
                        <input type="date" name="date">
                        <button class="admin-form__search-button">
                            検索
                        </button>
                        <input type="reset" value="リセット">
                    </div>
                </form>
                <table>
                    <tr>
                        <th>お名前</th>
                        <th>性別</th>
                        <th>メールアドレス</th>
                        <th>お問い合わせの種類</th>
                        <th></th>
                    </tr>
                    <form action="/admin">
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{$contact->last_name}}{{$contact->first_name}}</td>
                                <td>{{$contact->gender}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->category_id}}</td>
                                <td>
                                    <!-- data-* 属性に問い合わせ情報を入れる -->
                                    <button type="button"
                                    class="open-modal-btn"
                                    data-name="{{$contact->last_name}}  {{$contact->first_name}}"
                                    data-gender="{{$contact->gender_text}}"
                                    data-email="{{$contact->email}}"
                                    data-tel="{{$contact->tel}}"
                                    data-address="{{$contact->address}}"
                                    data-building="{{$contact->building}}"
                                    data-category="{{$contact->category_name}}"
                                    data-detail="{{$contact->detail}}">
                                        詳細
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </form>
                </table>
            </div>
            </div>
            </div>
            <!-- モーダルのHTML -->
            <div id="myModal" class="modal" style="display:none;">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p><strong>お名前：</strong><span id="modal-name"></span></p>
                    <p><strong>性別：</strong><span id="modal-gender"></span></p>
                    <p><strong>メール：</strong><span id="modal-email"></span></p>
                    <p><strong>TEL：</strong> <span id="modal-tel"></span></p>
                    <p><strong>住所：</strong> <span id="modal-address"></span></p>
                    <p><strong>建物：</strong> <span id="modal-building"></span></p>
                    <p><strong>お問い合わせの種類：</strong><span id="modal-category"></span></p>
                    <p><strong>お問い合わせ内容：</strong><span id="modal-detail"></span></p>
                </div>
            </div>
    </main>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
            // モーダルとボタン取得
                const modal = document.getElementById("myModal");
                const spanClose = document.getElementsByClassName("close")[0];

            // 詳細ボタン全てに対してクリックイベントを設定
                document.querySelectorAll('.open-modal-btn').forEach(btn => {
                btn.addEventListener('click', () => {
            // data属性から情報を取得
                document.getElementById('modal-name').textContent = btn.dataset.name;
                document.getElementById('modal-gender').textContent = btn.dataset.gender;
                document.getElementById('modal-email').textContent = btn.dataset.email;
                document.getElementById('modal-tel').textContent = btn.dataset.tel;
                document.getElementById('modal-address').textContent = btn.dataset.address;
                document.getElementById('modal-building').textContent = btn.dataset.building;
                document.getElementById('modal-category').textContent = btn.dataset.category;
                document.getElementById('modal-detail').textContent = btn.dataset.detail;
                // モーダルを表示
                document.getElementById('myModal').style.display = 'flex';
                });
            });
            // 閉じる（×）ボタン
            spanClose.onclick = () => {
                modal.style.display = 'none';
            };

            モーダル外クリックで閉じる
            window.onclick = (e) => {
                if (e.target == modal) {
                    modal.style.display = 'none';
                }
            };
            });
        </script>
        @endif
</body>

</html>