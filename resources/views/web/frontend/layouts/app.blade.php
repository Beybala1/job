<!DOCTYPE html>
<html class="no-js" lang="az">
<head>
    {{-- Meta tags and CSS --}}
    @include('web.frontend.layouts.components.head')
    @include('web.frontend.layouts.components.header.css')
</head>
<body>
    
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo">
                </div>
            </div>
        </div>
    </div>
    
    {{-- Header --}}
    @include('web.frontend.layouts.components.header')

    {{-- Content Section --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('web.frontend.layouts.components.footer')

    {{-- JavaScript --}}

    @include('web.frontend.layouts.components.header.js')
</body>
</html>
