<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
</head>
<body>
    //お問合せフォーム確認ページ
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php02/index.php">
                FashionablyLate
            </a>
        </div>
    </header>
    <main>
        <table>
            <tr>
                <th>id</th>
                <th>category_id</th>
                <th>first_name</th>
                <th>last_name</th>
                <th>gender</th>
                <th>email</th>
                <th></th>
            </tr>
            @foreach ($authors as $author)
            <tr>
                <td>{{$author->id}}</td>
                <td>{{$author->name}}</td>
                <td>{{$author->age}}</td>
                <td>{{$author->nationality}}</td>
            </tr>
        </main>
    </body>
</html>