<html>
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

    <!-- CSS and JS -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>
<body>

<div id="app">
    <header>
        <div class="p-3 d-lg-none">
            <a href="#menu" class="btn fs-3">
                <span>☰</span>
            </a>
        </div>

        <nav id="menu">
            <ul>
                <li><x-elements.link href="/" class="" title="Dashboard"></x-elements.link></li>

                <x-blocks.mmenu-dropdown title="Clients">
                    <li><x-elements.link class="" title="Sites" href="/sites"></x-elements.link></li>
                    <li><x-elements.link class="" title="Users" href="/users"></x-elements.link></li>
                    <li><x-elements.link class="" title="User groups" href="/training_users"></x-elements.link></li>
                </x-blocks.mmenu-dropdown>

                <x-blocks.mmenu-dropdown title="Trainings">
                    <li><x-elements.link class="" title="Upcoming trainings" href="/trainings/upcoming"></x-elements.link></li>
                    <li><x-elements.link class="" title="Completed trainings" href="/trainings/completed"></x-elements.link></li>
                </x-blocks.mmenu-dropdown>

                <x-blocks.mmenu-dropdown title="Courses">
                    <li><x-elements.link class="dropdown-item" title="Certificate" href="/certificate"></x-elements.link></li>
                </x-blocks.mmenu-dropdown>

    {{--            <x-blocks.mmenu-dropdown title="Clients">--}}
    {{--                <x-blocks.mmenu-dropdown title="Clients">--}}
    {{--                    <li><x-elements.link class="" title="Test" href="/sites"></x-elements.link></li>--}}
    {{--                    <li><x-elements.link class="" title="Test" href="/sites"></x-elements.link></li>--}}
    {{--                </x-blocks.mmenu-dropdown>--}}
    {{--            </x-blocks.mmenu-dropdown>--}}
            </ul>
        </nav>

        {{--    <ul class="nav justify-content-end">--}}
        {{--        <li class="nav-item">--}}
        {{--            <a class="nav-link" href="#">Link</a>--}}
        {{--        </li>--}}
        {{--        <li class="nav-item">--}}
        {{--            <a class="nav-link" href="#">Link</a>--}}
        {{--        </li>--}}
        {{--    </ul>--}}
    </header>

    <main class="container margin-screen">
        @yield('content')
    </main>
</div>

</body>

</html>

