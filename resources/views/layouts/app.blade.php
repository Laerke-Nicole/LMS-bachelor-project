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
    <!-- Menu Toggle Button - Only visible on screens < 992px (large and down) -->
    <div class="p-3 d-lg-none">
        <a href="#menu" class="btn btn-primary">
            <span>☰</span>
        </a>
    </div>

{{--    <nav class="navbar bg-body-tertiary fixed-top">--}}
{{--        <div class="container-fluid">--}}
{{--            <a class="navbar-brand" href="/">Offcanvas navbar</a>--}}
{{--            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
{{--            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">--}}
{{--                <div class="offcanvas-header">--}}
{{--                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>--}}
{{--                </div>--}}
{{--                <div class="offcanvas-body">--}}
{{--                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">--}}
{{--                        <li class="nav-item">--}}
{{--                            <x-elements.link class="nav-link active" href="/" title="Dashboard" aria-current="page"></x-elements.link>--}}
{{--                        </li>--}}

{{--                        <x-blocks.dropdown href="/clients" dropdownTitle="Clients">--}}
{{--                            <li><x-elements.link class="dropdown-item" title="Users" href="/users"></x-elements.link></li>--}}
{{--                            <li><x-elements.link class="dropdown-item" title="Sites" href="/sites"></x-elements.link></li>--}}
{{--                            <li><x-elements.link class="dropdown-item" title="User groups" href="/training_users"></x-elements.link></li>--}}
{{--                        </x-blocks.dropdown>--}}

{{--                        <x-blocks.dropdown href="/trainings" dropdownTitle="Trainings">--}}
{{--                            <li><x-elements.link class="dropdown-item" title="Upcoming trainings" href="/trainings/upcoming"></x-elements.link></li>--}}
{{--                            <li><x-elements.link class="dropdown-item" title="Completed trainings" href="/trainings/completed"></x-elements.link></li>--}}
{{--                        </x-blocks.dropdown>--}}

{{--                        <x-blocks.dropdown href="/courses" dropdownTitle="Courses">--}}
{{--                            <li><x-elements.link class="dropdown-item" title="Certificate" href="/certificate"></x-elements.link></li>--}}
{{--                        </x-blocks.dropdown>--}}

{{--                        <li class="nav-item">--}}
{{--                            <x-elements.link class="nav-link" href="/gdpr" title="GDPR & consents"></x-elements.link>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}



{{--    <ul class="nav justify-content-end">--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="#">Link</a>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="#">Link</a>--}}
{{--        </li>--}}
{{--    </ul>--}}

    <nav id="menu">
        <ul>
            <li><x-elements.link href="/" class="" title="Dashboard"></x-elements.link></li>
            <li><x-elements.link href="/companies" class="" title="Clients"></x-elements.link></li>
            <li><x-elements.link href="/trainings" class="" title="Trainings"></x-elements.link></li>
            <li><x-elements.link href="/courses" class="" title="Courses"></x-elements.link></li>

            <x-blocks.mmenu-dropdown title="Clients">
                <li><x-elements.link class="" title="Sites" href="/sites"></x-elements.link></li>
                <li><x-elements.link class="" title="Users" href="/users"></x-elements.link></li>
                <li><x-elements.link class="" title="User groups" href="/training_users"></x-elements.link></li>
            </x-blocks.mmenu-dropdown>

            <x-blocks.mmenu-dropdown title="Trainings">
                <li><x-elements.link class="" title="Upcoming trainings" href="/trainings/upcoming"></x-elements.link></li>
                <li><x-elements.link class="" title="Completed trainings" href="/trainings/completed"></x-elements.link></li>
            </x-blocks.mmenu-dropdown>


            <x-blocks.mmenu-dropdown title="Clients">
                <x-blocks.mmenu-dropdown title="Clients">
                    <li><x-elements.link class="" title="Test" href="/sites"></x-elements.link></li>
                    <li><x-elements.link class="" title="Test" href="/sites"></x-elements.link></li>
                </x-blocks.mmenu-dropdown>
            </x-blocks.mmenu-dropdown>
        </ul>
    </nav>

    <main class="container">
        @yield('content')
    </main>
</div>

</body>

</html>

