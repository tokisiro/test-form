<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
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

                    </button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>