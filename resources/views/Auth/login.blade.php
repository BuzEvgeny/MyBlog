<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: 10px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>

    <title>Login</title>
</head>
<body class="text-center">

<main class="form-signin">
    <form method="post" action="{{route('user.login')}}">
        @CSRF
        <h1 class="h3 mb-3 fw-normal">Мы рады, что Вы с нами</h1>

        <div class="form-floating">

            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Email ">
            <label for="floatingInput">Email адрес</label>
            @error('email')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-floating">

            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Пароль">
            <label for="floatingPassword">Пароль</label>
            @error('password')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" name="remember" value="remember-me"> Запомнить
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>
        <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
    </form>
</main>
</body>
</html>

