<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    
</head>
<body>
    //サンクスページ
    <div class="thanks__content">
        <div class="thanks__content-message">
            <p>thank you</p>
        </div>
        <div class="thanks__content-item">
            <p>お問合せありがとうございました</p>
            <form class="thanks__content-button" action="/" method="get">
                @csrf
                <button type="submit">HOME</button>
            </form>
        </div>
    </div>
</body>
</html>