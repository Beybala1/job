<header>
    <!-- Header Start -->
   <div class="header-area header-transparrent">
       <div class="headder-top header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>  
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="menu-wrapper">
                            <!-- Main-menu -->
                            <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation">
                                        <li><a href="index.html">@lang('Main page')</a></li>
                                        <li><a href="index.html">@lang('Companies')</a></li>
                                        <li><a href="index.html">@lang('Vacancies')</a></li>
                                        <li><a href="index.html">@lang('News')</a></li>
                                        <li><a href="contact.html">@lang('Contact us')</a></li>
                                    </ul>
                                </nav>
                            </div>                           
                            <!-- Header-btn -->
                            <div class="header-btn d-none f-right d-lg-block">
                                <a href="#" class="btn head-btn1">@lang('Register')</a>
                                <a href="#" class="btn head-btn2">@lang('Login')</a>
                            </div>

                            <!-- Lang select -->
                            <div class="language-select-wrapper d-none d-lg-block">
                                <select class="language-select" data-role="select-lang">
                                    @foreach (config("app.locales") as $item)
                                        <option value="{{ $item }}" {{ config("app.locale") === $item ? "selected" : ""}}>{{ $item }}</option>
                                    @endforeach   
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
       </div>
   </div>
    <!-- Header End -->
</header>


 