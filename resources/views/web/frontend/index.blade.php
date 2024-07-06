@extends("web.frontend.layouts.app");

@section("content")
<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="slider-active">
        <div class="single-slider slider-height d-flex align-items-center"
            data-background="assets/img/hero/h1_hero.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-9 col-md-10">
                        <div class="hero__caption">
                            <h1>@lang('Find your dream job')</h1>
                        </div>
                    </div>
                </div>
                <!-- Search Box -->
                <div class="row">
                    <div class="col-xl-8">
                        <!-- form -->
                        <form action="#" class="search-box">
                            <div class="input-form">
                                <input type="text" placeholder="@lang('Type the name of the job you are looking for')">
                            </div>
                            <div class="select-form">
                                <div class="select-itms">
                                    <select name="select" id="select1">
                                        <option value="">Baku </option>
                                    </select>
                                </div>
                            </div>
                            <div class="search-form">
                                <a href="#">@lang('Search')</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<!-- Our Services Start -->
<div class="our-services section-pad-t30">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <h2>@lang('Categories')</h2>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-contnet-center">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-tour"></span>
                    </div>
                    <div class="services-cap">
                        <h5><a href="job_listing.html">Design & Creative</a></h5>
                        <span>(653)</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- More Btn -->
        <!-- Section Button -->
        <div class="row">
            <div class="col-lg-12">
                <div class="browse-btn2 text-center mt-50">
                    <a href="job_listing.html" class="border-btn2">@lang('All categories')</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Services End -->
<!-- Online CV Area Start -->
{{-- <div class="online-cv cv-bg section-overly pt-90 pb-120" data-background="assets/img/gallery/cv_bg.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="cv-caption text-center">
                    <p class="pera1">FEATURED TOURS Packages</p>
                    <p class="pera2"> Make a Difference with Your Online Resume!</p>
                    <a href="#" class="border-btn2 border-btn4">Upload your cv</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Online CV Area End-->
<!-- Featured_job_start -->
<section class="featured-job-area feature-padding">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <h2>@lang('Recent jobs')</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="job_details.html"><img src="assets/img/icon/job-list1.png" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="job_details.html">
                                <h4>Digital Marketer</h4>
                            </a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                <li>$3500 - $4000</li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="job_details.html">Full Time</a>
                        <span>7 hours ago</span>
                    </div>
                </div>
                <!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="job_details.html"><img src="assets/img/icon/job-list2.png" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="job_details.html">
                                <h4>Digital Marketer</h4>
                            </a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                <li>$3500 - $4000</li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="job_details.html">Full Time</a>
                        <span>7 hours ago</span>
                    </div>
                </div>
                <!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="job_details.html"><img src="assets/img/icon/job-list3.png" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="job_details.html">
                                <h4>Digital Marketer</h4>
                            </a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                <li>$3500 - $4000</li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="job_details.html">Full Time</a>
                        <span>7 hours ago</span>
                    </div>
                </div>
                <!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="job_details.html"><img src="assets/img/icon/job-list4.png" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="job_details.html">
                                <h4>Digital Marketer</h4>
                            </a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                <li>$3500 - $4000</li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="job_details.html">Full Time</a>
                        <span>7 hours ago</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Featured_job_end -->

<!-- How  Apply Process End-->
<!-- Blog Area Start -->
<div class="home-blog-area blog-h-padding">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <h2>@lang('Last news')</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="assets/img/blog/home-blog1.jpg" alt="">
                            <!-- Blog date -->
                            <div class="blog-date text-center">
                                <span>24</span>
                                <p>Now</p>
                            </div>
                        </div>
                        <div class="blog-cap">
                            <p>| Properties</p>
                            <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                            <a href="#" class="more-btn">Read more »</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="assets/img/blog/home-blog2.jpg" alt="">
                            <!-- Blog date -->
                            <div class="blog-date text-center">
                                <span>24</span>
                                <p>Now</p>
                            </div>
                        </div>
                        <div class="blog-cap">
                            <p>| Properties</p>
                            <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                            <a href="#" class="more-btn">Read more »</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->
@endsection
