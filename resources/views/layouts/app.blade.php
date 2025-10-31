<html>
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

    <!-- js -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>

<div id="app">
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Offcanvas navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <x-elements.link class="nav-link active" href="/" title="Dashboard" aria-current="page"></x-elements.link>
                        </li>

                        <x-blocks.dropdown href="/clients" dropdownTitle="Clients">
                            <li><x-elements.link class="dropdown-item" title="Users" href="/users"></x-elements.link></li>
                            <li><x-elements.link class="dropdown-item" title="Sites" href="/sites"></x-elements.link></li>
                            <li><x-elements.link class="dropdown-item" title="User groups" href="/training_users"></x-elements.link></li>
                        </x-blocks.dropdown>

                        <x-blocks.dropdown href="/trainings" dropdownTitle="Trainings">
                            <li><x-elements.link class="dropdown-item" title="Upcoming trainings" href="/trainings/upcoming"></x-elements.link></li>
                            <li><x-elements.link class="dropdown-item" title="Completed trainings" href="/trainings/completed"></x-elements.link></li>
                        </x-blocks.dropdown>

                        <x-blocks.dropdown href="/courses" dropdownTitle="Courses">
                            <li><x-elements.link class="dropdown-item" title="Certificate" href="/certificate"></x-elements.link></li>
                        </x-blocks.dropdown>

                        <li class="nav-item">
                            <x-elements.link class="nav-link" href="/gdpr" title="GDPR & consents"></x-elements.link>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>



    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
    </ul>

    <main class="container">
        @yield('content')
    </main>
</div>
<div class="sidebar border-end">
    <div class="sidebar-header border-bottom">
        <div class="sidebar-brand">CoreUI</div>
    </div>
    <ul class="sidebar-nav">
        <li class="nav-title">Nav Title</li>
        <li class="nav-item">
            <a class="nav-link active" href="#">
                <i class="nav-icon cil-speedometer"></i> Nav item
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="nav-icon cil-speedometer"></i> With badge
                <span class="badge bg-primary ms-auto">NEW</span>
            </a>
        </li>
        <li class="nav-item nav-group show">
            <a class="nav-link nav-group-toggle" href="#">
                <i class="nav-icon cil-puzzle"></i> Nav dropdown
            </a>
            <ul class="nav-group-items">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="nav-icon"><span class="nav-icon-bullet"></span></span> Nav dropdown item
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="nav-icon"><span class="nav-icon-bullet"></span></span> Nav dropdown item
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item mt-5">
            <a class="nav-link" href="https://coreui.io">
                <i class="nav-icon cil-cloud-download"></i> Download CoreUI</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://coreui.io/pro/">
                <i class="nav-icon cil-layers"></i> Try CoreUI
                <strong>PRO</strong>
            </a>
        </li>
    </ul>
    <div class="sidebar-footer border-top d-flex">
        <button class="sidebar-toggler" type="button"></button>
    </div>
</div>

</body>
</html>
