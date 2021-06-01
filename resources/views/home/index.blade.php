<x-guest-layout>
<div class="container-fluid landing">
    <div class="row landing-header">
        <div class="col-12 col-lg-8 landing-welcome">
            <h3 class="welcome-title">
                Lorem ipsum dolor sit amet
            </h3>
            <p class="welcome-desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="col-12 col-lg-4 landing-action">
            <a href="/login" class="btn btn-landing btn-lg w-75">
                <div class="btn-landing-icon">
                    <img src="{{ asset('/image/icons/landing-login-icon.svg') }}" alt="LOGIN HERE">
                </div>
                <div class="btn-landing-text">
                    <div class="btn-landing-text-main">
                        LOGIN HERE
                    </div>
                    <div class="btn-landing-text-secondary">
                        Username & password required
                    </div>
                </div>
            </a>
            <div class="landing-action-warning text-center">
                By logging in, you are acknowledging acceptance<br /> of the Terms & Conditions of Use.
            </div>
        </div>
    </div>
    <div class="row landing-menu">
        <ol class="menu-bar unstyled mb-0 pl-0" data-target="#landingCarousel">
            <li class="menu-item active" data-target="#landingCarousel" data-slide-to="0">
                <div class="menu-icon">
                    <img src="{{ asset('/image/icons/about-icon.svg') }}" alt="About Us">
                </div>
                <div class="menu-text">
                    About Us
                </div>
            </li>
            <li class="menu-item" data-target="#landingCarousel" data-slide-to="1">
                <div class="menu-icon">
                    <img src="{{ asset('/image/icons/recruit-icon.svg') }}" alt="Scholarship">
                </div>
                <div class="menu-text">
                    Scholarship
                </div>
            </li>
            <li class="menu-item" data-target="#landingCarousel" data-slide-to="2">
                <div class="menu-icon">
                    <img src="{{ asset('/image/icons/news-icon.svg') }}" alt="News">
                </div>
                <div class="menu-text">
                    News
                </div>
            </li>
            <li class="menu-item" data-target="#landingCarousel" data-slide-to="3">
                <div class="menu-icon">
                    <img src="{{ asset('/image/icons/contact-icon.svg') }}" alt="Contact Us">
                </div>
                <div class="menu-text">
                    Contact Us
                </div>
            </li>
        </ol>
    </div>
    <div class="landing-carousel carousel slide" id="landingCarousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row carousel-aboutus">
                    <div class="col-12 col-lg-3">
                        <div class="carousel-title">
                            About Us
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 carousel-border">
                        <div class="carousel-content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row carousel-scholarship">
                    <div class="col-12 col-lg-3">
                        <div class="carousel-title">
                            Scholarship
                        </div>
                        <div class="carousel-subtitle">
                            Lorem ipsum dolor sit amet
                        </div>
                        <div class="carousel-content">
                            <a href="#" class="btn btn-main btn-block">REGISTER</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="recruitment-image">
                            <img src="{{ asset('/image/beasiswa.jpg') }}" alt="e-Scholarship Scholarship Demo" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row carousel-news">
                    <div class="col-12 col-lg-3">
                        <div class="carousel-title">
                            News
                        </div>
                        <div class="carousel-subtitle">
                            Lorem ipsum dolor sit amet
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 carousel-border">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row carousel-contact">
                    <div class="col-12 col-lg-3">
                        <div class="carousel-title">
                            Contact Us
                        </div>
                        <div class="carousel-subtitle">
                            Lorem ipsum dolor sit amet
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 carousel-border">
                        <div class="carousel-subtitle mb-2">
                            Form Contact
                        </div>
                        <div class="carousel-content mb-3">
                            <div class="carousel-subcontent">
                                Please complete the information below and fill in any special requests in the comments field provided.
                            </div>
                        </div>
                        <div class="carousel-form carousel-content">
                            <form method="POST" action="#">
                                <div class="form-group">
                                    <label for="contactName"><b>Name</b></label>
                                    <input type="name" name="name" class="form-control" id="contactName">
                                    {{ $errors->first('name') }}
                                </div>
                                <div class="form-group">
                                    <label for="contactPhone"><b>Contact</b></label>
                                    <input type="number" name="contact" class="form-control" id="contactPhone">
                                    {{ $errors->first('contact') }}
                                </div>
                                <div class="form-group">
                                    <label for="contactEmail"><b>Email</b><span class="label-warning">We will send feedback to this email address.</span></label>
                                    <input type="email" name="email" class="form-control" id="contactEmail" aria-describedby="emailHelp">
                                    {{ $errors->first('email') }}
                                </div>
                                <div class="form-group">
                                    <label for="contactMessage"><b>Message</b></label>
                                    <textarea name="message" class="form-control" id="contactMessage"></textarea>
                                    {{ $errors->first('message') }}
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-main btn-block mt-3">SEND MESSAGE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#landingCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#landingCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        
    </div>
    <div class="landing-footer">
        <div class="footer-copyright">
            Copyright ©2020 PT Asno Horie Indonesia. Allrights reserved.
        </div>
        <ul class="list-unstyled mb-0 footer-link-list">
            <li class="footer-link">
                <a href="#">Disclaimer</a>
            </li>
            <li class="footer-link">
                <a href="#">Terms and Conditions</a>
            </li>
            <li class="footer-link">
                <a href="#">Privacy Policy</a>
            </li>
        </ul>
    </div>
</div>
@section('script')
<script>
    var $carousel = $('#landingCarousel');
    $carousel.carousel({
        pause: true,
        interval: false
    });
    $(".menu-bar[data-target]").each(function (i, indicators) {
        var targetId = indicators.dataset.target;
        if (targetId != "") {
            var $carousel = $(targetId);
            $carousel.bind('slide.bs.carousel', function (e) {
                var $targetSlide = $(e.relatedTarget);
                var index = $targetSlide.index();
                $('.menu-bar[data-target="' + targetId + '"] li').removeClass('active')
                $('.menu-bar[data-target="' + targetId + '"] li:nth-child(' + (index + 1) + ')').addClass('active');
            });
        }
    });

    $(".menu-bar li").on('click',function(){
        $(this).addClass('active').siblings().removeClass('active');
        handled=true;
    });
</script>
</x-app-layout>
