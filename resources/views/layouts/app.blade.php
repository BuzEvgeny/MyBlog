<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Hugo 0.84.0">
    <title>MyBlog </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="resources/css/app.css" rel="stylesheet">
    <style>
        .blog-header-logo {
            font-family: "Playfair Display", Georgia, "Times New Roman", serif/*rtl:Amiri, Georgia, "Times New Roman", serif*/;
            font-size: 2.25rem;
        }
        .blog-header-logo:hover {
            text-decoration: none;
        }
        .blog-footer {
            padding: 2.5rem 0;
            color: #727272;
            text-align: center;
            background-color: #f9f9f9;
            border-top: .05rem solid #e5e5e5;
        }
        .blog-footer p:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
<div class="container">
@include('inc.header')
</div>
<main class="container">
    <div class="row g-5">
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                All posts
            </h3>
            @yield('content')
        </div>
        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                @include('inc.aside')
            </div>
        </div>
    </div>
</main>
<footer class="blog-footer">
@include('inc.footer')
</footer>
</body>
</html>
