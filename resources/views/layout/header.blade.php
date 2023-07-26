
<header id="header" class="header_area">

    <!-- Start Main Menu -->
    <section class="header_nav">
        <div class="vigo_container_one">
            <div class="row">
                <div class="col-auto mr-auto">
                    <div class="header_logo">
                        <a href="./">
                            <img src="landing/assets/img/logo.svg" class="svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-auto">
                    <nav class="main_menu">
                        <ul id="example-one">
                            <li class="current_page_item">
                                <a href="./">Home</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-auto">
                    <div class="hdr_btn_wrapper">
                        <a href="{{ route('get_login') }}" class="btn_one">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Menu -->

    <!-- Start Mobile Menu outer-->
    <section id="mobile-nav-wrap" class="clearfix">
        <div class="vigo_container_one">
            <div class="bottom_nav">
                <div id="mobile-logo">
                    <a href="./">
                <img src="landing/assets/img/logo.svg" class="svg" alt="">
            </a>
                </div>
                <div class="toggle-inner">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </section>
    <!-- End Mobile Menu outer-->
</header>

<section class="mobile-menu-inner">
    <div class="mobile_accor_togo">
        <div class="mobile_accor_logo">
            <a href="./">
        <img src="landing/assets/img/logo.svg" class="svg" alt="">
    </a>
        </div>
        <div class="close-menu">
            <span></span>
        </div>
    </div>
    <nav id="accordian">
        <ul class="accordion-menu">
            <li class="current_page_item">
                <a href="./">Home</a>
            </li>
            <li>
                <a href="{{ route('get_login') }}">Login</a>
            </li>
        </ul>
    </nav>
</section>
