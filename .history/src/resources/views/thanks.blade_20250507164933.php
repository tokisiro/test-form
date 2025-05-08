<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="css/sanitize.css" />
    <link rel="stylesheet" href="css/thanks.css" />
</head>
<body>
    <!--サンクスページ-->
    <div class="thanks__content">
        <div class="thanks__background-text">Thank you</div>
        <div class="thanks__content-item">
            <span>お問合せありがとうございました</span>
            <form class="thanks__content-button" action="/" method="get">
                @csrf
                <button type="submit">HOME</button>
            </form>
        </div>
    </div>
</body>
</html>