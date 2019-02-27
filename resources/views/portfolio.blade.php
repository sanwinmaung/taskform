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
                                <a class="primary_btn" href="#"><span>Hire Me</span></a>
                                <a class="primary_btn tr-bg" href="#"><span>Get CV</span></a>
                            </div>
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
    
    <section class="about_area section_gap">
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
                        <p>
                            Whose given. Were gathered. There first subdue greater. Bearing you Whales heaven 
                            midst their. Beast creepeth. Fish days.
                        </p>
                        <p>
                            Is give may shall likeness made yielding spirit a itself together created after sea 
                            is in beast beginning signs open god you're gathering whose gathered cattle let. 
                            Creature whales fruit unto meat the life beginning all in under give two.
                        </p>
                        <a class="primary_btn" href="#"><span>Download CV</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection