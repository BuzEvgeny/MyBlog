<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Private</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<h1>Это аутентифицированная страница</h1>
<p>Сюда попадпют только аутентифицированные пользователи</p>
</body>
</html>
