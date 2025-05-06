<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <style>
        /* 簡単なスタイルでモーダル表示を調整 */
        .modal {
            display: none; /* 最初は非表示 */
            position: fixed; 
            z-index: 9999; /* 最前面 */
            top: 0; left: 0; right: 0; bottom: 0;
            background-color: rgba(0,0,0,0.5); /* 半透明背景 */
            justify-content: center; /* 中央寄せ */
            align-items: center;
        }

        .modal-content {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            width: 300px;
            position: relative;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!--管理画面ページ-->
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php02/index.php">
                FashionablyLate
            </a>
        </div>
    </header>
    <main>
        <div class="admin-form">
            <div class="admin-form__title">
                <h2>Admin</h2>
            </div>
            <form action="">
                <div class="admin-form__search">
                    <input type="text">
                    <select name="" >
                        <option value="">男</option>
                        <option value="">女</option>
                        <option value="">その他</option>
                    </select>
                    <select name="" >
                        <option value="">商品のお届けについて</option>
                        <option value="">商品の交換について</option>
                        <option value="">商品トラブル</option>
                        <option value="">ショップへのお問い合わせ</option>
                        <option value="">その他</option>
                    </select>
                    <input type="date">
                    <button class="admin-form__search-button">
                        検索
                    </button>
                    <button class="admin-form__reset-button">
                        リセット
                    </button>
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
                                <button class="open-modal-btn"
                                data-name="{{$contact->last_name}}  {{$contact->first_name}}"
                                data-gender="{{$contact->gender}}"
                                data-email="{{$contact->email}}"
                                data-tel="{{$contact->tel}}"
                                data-building="{{$contact->building}}"
                                data-category="{{$contact->category_id}}"
                                data-detail="{{$contact->detail}}">
                                    詳細
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </form>
            </table>
            <!-- モーダルのHTML -->
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>
                        <strong>お名前：</strong> 
                        <span id="modal-name"></span>
                    </p>
                    <p>
                        <strong>性別：</strong> 
                        <span id="modal-gender"></span>
                    </p>
                    <p>
                        <strong>メール：</strong> 
                        <span id="modal-email"></span>
                    </p>
                    <p>
                        <strong>お問い合わせの種類：</strong> 
                        <span id="modal-category"></span>
                    </p>
                </div>
            </div>
        </div>
    </main>
</body>
<script>
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
                document.getElementById('modal-category').textContent = btn.dataset.category;

                // モーダルを表示
                document.getElementById('myModal').style.display = 'flex';
                });
            });
            // 閉じる（×）ボタン
            spanClose.onclick = () => {
                modal.style.display = 'none';
            };

            //モーダル外クリックで閉じる
            window.onclick = (e) => {
            //    if (e.target == modal) {
            //        modal.style.display = 'none';
            //    }
            //};
        </script>
</html>