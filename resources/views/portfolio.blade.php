@extends ('layouts.master')
@section ('content')

<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="banner_content">
                        <h3 class="text-uppercase">Hell0</h3>
                        <h1 class="text-uppercase">I am san win maung</h1>
                        <h5 class="text-uppercase">senior web developer(PHP + laravel)</h5>
                        <div class="d-flex align-items-center">
                            <a class="primary_btn" href="#about-us"><span>Hire Me</span></a>
                            <a class="primary_btn tr-bg" href="{{ asset('cv/sanwinmaung-cv.pdf') }}" target="_blank"><span>Get CV</span></a>
                        </div>
                        {{-- <div><p>Email : sanwinmaung.dev@gmail.com </p></div> --}}
                        {{-- <div><p>Email : sanwinmaung.dev@gmail.com </p></div> --}}
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="home_right_img">
                        <img class="" src="{{ asset('custom/img/banner/home-right.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_area section_gap" id="about-us">
    <div class="container">
        <div class="row justify-content-start align-items-center">
            <div class="col-lg-5">
                <div class="about_img">
                    <img class="" src="{{ asset('custom/img/about-us.png') }}" alt="">
                </div>
            </div>

            <div class="offset-lg-1 col-lg-5">
                <div class="main_title text-left">
                    <h2>let’s <br>
                        Introduce about <br>
                    myself</h2>
                    <h3>Working Experiences [3 Years]</h3>
                    <br>
                    <p><strong>1) Currently Worked at Golden ICT Solutions Co., Ltd</strong></p>
                    <p>
                        <b style="padding-left: 50px;color: #524e4e;">(1 March 2017 – Present)</b><br>  
                        <b style="padding-left: 50px;color: #7c7c8f;">I</b> worked as Web Developer ( Leader of Development Team) in company. Team has 3
                        Developer and 1 Android Developer. I support api services for Front-end Android Developer.
                        Developed and Maintaining for <a href="https://www.jobready365.com/" target="_blank">https://www.jobready365.com/</a> .
                    </p>
                    <br>
                    <p><strong>2) Link Techs Group and Felixent Co., Ltd</strong></p>
                    <p>
                        <b style="padding-left: 50px;color: #524e4e;">(1 Jan 2016 – Present)</b><br>  
                        <b style="padding-left: 50px;color: #7c7c8f;">I</b> am working as Web Application Developer in group. I am CoFounder of Group and Team.
                        I support api, backend and web services for Front-end Android Developer.
                    </p>
                    <a class="primary_btn" href="{{ route('download.cv') }}"><span>Download CV</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection