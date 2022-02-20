
<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
        </div>
        <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="/">Buzzar</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">

            @yield('sign_up')
            @yield('logout')
            @yield('sign_in')

        </div>
    </div>
</header>

<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between border rounded overflow-hidden shadow-sm">

            <a class="p-2 link-secondary" href="{{route('world')}}">World</a>
            <a class="p-2 link-secondary" href="{{route('design')}}">Design</a>
            <a class="p-2 link-secondary" href="{{route('culture')}}">Culture</a>
            <a class="p-2 link-secondary" href="{{route('science')}}">Science</a>
            <a class="p-2 link-secondary" href="{{route('travel')}}">Travel</a>

    </nav>
</div>

