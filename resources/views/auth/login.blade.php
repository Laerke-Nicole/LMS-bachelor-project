@extends('layouts.layout')

@section('content')
    <div class="container-fluid vh-100">
        <div class="row h-100">
            <!-- Left side -->
            <div class="col-lg-4 d-flex flex-column justify-content-center align-items-start px-5 bg-white">
                <div class="mb-5">
                    <img src="{{ asset('images/logo.png') }}" alt="AB Inventech" style="max-width: 160px;">
                </div>

                <div class="w-100" style="max-width: 320px;">
                    <h3 class="fw-semibold mb-4">Log in</h3>

                    <form>
                        <div class="mb-3">
                            <label class="form-label small ls-2 fs-6 text-uppercase" for="email">Email</label>
                            <input type="email" class="form-control shadow-none fs-5" id="email" placeholder="Enter your email">
                        </div>

                        <div class="mb-4">
                            <label class="form-label small ls-2 fs-6 text-uppercase" for="password">Password</label>
                            <input type="password" class="form-control shadow-none fs-5" id="password" placeholder="Enter your password">
                        </div>

                        <div class="d-flex flex-column mt-2">
                            <a href="#" class="small mb-3 text-decoration-none text-secondary"><u>Forgot your password?</u></a>
                            <button type="submit" class="btn btn-primary">Log in</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right side -->
            <div class="col-lg-8 d-none d-lg-block p-0">
{{--                <img src="{{ asset('images/login-bg.jpg') }}"--}}
{{--                     alt="Wind turbines"--}}
{{--                     class="img-fluid w-100 h-100 object-fit-cover">--}}
                <img src="https://cdn.pixabay.com/photo/2015/06/23/08/16/daegwallyeong-818420_1280.jpg" alt="" class="img-fluid w-100 h-100 object-fit-cover">
            </div>
        </div>
    </div>
@endsection

{{--https://cdn.pixabay.com/photo/2015/06/23/08/16/daegwallyeong-818420_1280.jpg--}}
{{--https://cdn.pixabay.com/photo/2023/05/11/10/43/windmills-7986053_1280.jpg--}}
{{--https://images.pexels.com/photos/414837/pexels-photo-414837.jpeg--}}
