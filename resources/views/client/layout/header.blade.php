
<!-- Header -->
<header class="header header--menu-rounded header--blue-lighteen" id="site-header">
<div class="header-lines-decoration">
    <span class="bg-secondary-color"></span>
    <span class="bg-blue"></span>
    <span class="bg-blue-light"></span>
    <span class="bg-orange-light"></span>
    <span class="bg-red"></span>
    <span class="bg-green"></span>
    <span class="bg-secondary-color"></span>
</div>

<div class="container">

    <a href="#" id="top-bar-js" class="top-bar-link">
        <svg class="utouch-icon utouch-icon-arrow-top">
            <use xlink:href="#utouch-icon-arrow-top"></use>
        </svg>
    </a>
    <div class="header-content-wrapper">

        <div class="site-logo">
        <a href="index-2.html" class="full-block"></a>
            <img src="{{asset('frontAsset/img/logo.png')}}" alt="Utouch">
            <div class="logo-text">
                <div class="logo-title">Utouch</div>
                <div class="logo-sub-title">app startup</div>
            </div>
        </div>

        <nav id="primary-menu" class="primary-menu">

            <!-- menu-icon-wrapper -->

            <a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
                <span class="showhide-fix"></span>
                <span class="mob-menu--title">Menu</span>
                <span id="menu-icon-wrapper" class="menu-icon-wrapper">
                    <svg width="1000px" height="1000px">
                        <path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                        <path id="pathE" d="M 300 500 L 700 500"></path>
                        <path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                    </svg>
                </span>
            </a>

            <ul class="primary-menu-menu">
                <li class="menu-item-has-children">
                    <a href="index-2.html">Home</a>
                </li>

                <li class="">
                    <a href="#">Company</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="02_company.html">
                                About Us
                            </a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">
                                Services
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="08_events.html">Events</a>
                                </li>
                                <li>
                                    <a href="05_case_details_ver_01.html">Case Details V1</a>
                                </li>

                                <li>
                                    <a href="06_case_details_ver_02.html">Case Details V2</a>
                                </li>

                                <li>
                                    <a href="07_case_details_ver_03.html">Case Details V3</a>
                                </li>
                                <li>
                                    <a href="11_events_details_lesson.html">Events Lesson</a>
                                </li>
                                <li>
                                    <a href="12_events_details_presentation.html">Events Presentation</a>
                                </li>

                                <li>
                                    <a href="13_events_details_training.html">Events Training</a>
                                </li>

                                <li>
                                    <a href="14_events_details_webinar.html">Events Webinar</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="03_products.html">
                                Products
                            </a>
                        </li>
                        <li>
                            <a href="09_events_details_conference_workshops.html">
                                Conference
                            </a>
                        </li>
                        <li class="">
                            <a href="10_events_details_course.html">
                                Course
                            </a>
                        </li>
                        <li>
                            <a href="04_works.html">
                                Cases
                            </a>
                        </li>

                        <li>
                            <a href="32_testimonials.html">
                                Testimonials
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item-has-mega-menu menu-item-has-children">
                    <a href="#">Products</a>
                    <div class="megamenu with-products">
                        <div class="megamenu-row">

                            <div class="col4" data-mh="product-item">
                                <div class="product-item">
                                    <div class="product-item-thumb">
                                        <div class="square-colored bg-product-blue"></div>
                                        <img src="img/product-item1.jpg" alt="product">
                                    </div>
                                    <div class="product-item-content">
                                        <h6 class="title">Duis autem dolor in hendrerit in vulputate</h6>
                                        <a href="05_case_details_ver_01.html" class="more-arrow">
                                            <span>View Case</span>
                                            <div class="btn-next">
                                                <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                                                    <use xlink:href="#utouch-icon-arrow-right-1"></use>
                                                </svg>
                                                <svg class="utouch-icon utouch-icon-arrow-right1">
                                                    <use xlink:href="#utouch-icon-arrow-right1"></use>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col4" data-mh="product-item">
                                <div class="product-item">
                                    <div class="product-item-thumb">
                                        <div class="square-colored bg-product-violet"></div>
                                        <img src="{{asset('frontAsset/img/product-item2.jpg')}}" alt="product">
                                    </div>
                                    <div class="product-item-content">
                                        <h6 class="title">Investigationes lectores legere saepi</h6>
                                        <a href="06_case_details_ver_02.html" class="more-arrow">
                                            <span>View Case</span>
                                            <div class="btn-next">
                                                <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                                                    <use xlink:href="#utouch-icon-arrow-right-1"></use>
                                                </svg>
                                                <svg class="utouch-icon utouch-icon-arrow-right1">
                                                    <use xlink:href="#utouch-icon-arrow-right1"></use>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col4" data-mh="product-item">
                                <div class="product-item">
                                    <div class="product-item-thumb">
                                        <div class="square-colored bg-product-red"></div>
                                        <img src="{{asset('frontAsset/img/product-item3.jpg')}}" alt="product">
                                    </div>
                                    <div class="product-item-content">
                                        <h6 class="title">Lorem ipsum dolor sit amet, consectetuer</h6>
                                        <a href="07_case_details_ver_03.html" class="more-arrow">
                                            <span>View Case</span>
                                            <div class="btn-next">
                                                <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                                                    <use xlink:href="#utouch-icon-arrow-right-1"></use>
                                                </svg>
                                                <svg class="utouch-icon utouch-icon-arrow-right1">
                                                    <use xlink:href="#utouch-icon-arrow-right1"></use>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col4" data-mh="product-item">
                                <div class="product-item">
                                    <div class="product-item-thumb">
                                        <div class="square-colored bg-product-blue-dark"></div>
                                        <img src="{{asset('frontAsset/img/product-item4.jpg')}}" alt="product">
                                    </div>
                                    <div class="product-item-content">
                                        <h6 class="title">Nam liber tempor cum soluta nobis</h6>
                                        <a href="05_case_details_ver_01.html" class="more-arrow">
                                            <span>View Case</span>
                                            <div class="btn-next">
                                                <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                                                    <use xlink:href="#utouch-icon-arrow-right-1"></use>
                                                </svg>
                                                <svg class="utouch-icon utouch-icon-arrow-right1">
                                                    <use xlink:href="#utouch-icon-arrow-right1"></use>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>

                <li class="menu-item-has-mega-menu menu-item-has-children">
                    <a href="#">Events</a>

                    <div class="megamenu" style="background-image: url('frontAsset/img/menu-bg.jpg');">
                        <div class="megamenu-row">

                            <div class="col4">
                                <ul>
                                    <li class="megamenu-item-info">
                                        <h5 class="megamenu-item-info-title">Our Company</h5>
                                        <p class="megamenu-item-info-text">Claritas processus dynamicus.</p>
                                    </li>
                                    <li>
                                        <a href="02_company.html">About Us</a>
                                    </li>
                                    <li>
                                        <a href="03_products.html">Products</a>
                                    </li>
                                    <li>
                                        <a href="04_works.html">
                                            Cases
                                        </a>
                                    </li>
                                    <li>
                                        <a href="08_events.html">Events</a>
                                    </li>
                                    <li>
                                        <a href="09_events_details_conference_workshops.html">
                                            Conference
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="10_events_details_course.html">
                                            Course
                                        </a>
                                    </li>

                                    <li>
                                        <a href="32_testimonials.html">
                                            Testimonials
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="col4">
                                <ul>
                                    <li class="megamenu-item-info">
                                        <h5 class="megamenu-item-info-title">Services</h5>
                                        <p class="megamenu-item-info-text">Mirum est notare quam littera.</p>
                                    </li>
                                    <li>
                                        <a href="05_case_details_ver_01.html">Case Details V1</a>
                                    </li>

                                    <li>
                                        <a href="06_case_details_ver_02.html">Case Details V2</a>
                                    </li>

                                    <li>
                                        <a href="07_case_details_ver_03.html">Case Details V3</a>
                                    </li>
                                    <li>
                                        <a href="11_events_details_lesson.html">Events Lesson</a>
                                    </li>
                                    <li>
                                        <a href="12_events_details_presentation.html">Events Presentation</a>
                                    </li>

                                    <li>
                                        <a href="13_events_details_training.html">Events Training</a>
                                    </li>

                                    <li>
                                        <a href="14_events_details_webinar.html">Events Webinar</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="col4">
                                <ul>
                                    <li class="megamenu-item-info">
                                        <h5 class="megamenu-item-info-title">Elements</h5>
                                        <p class="megamenu-item-info-text">Qui nunc nobis videntur parum clari.</p>
                                    </li>
                                    <li>
                                        <a href="24_gallery_full_screen.html">Full Screen Gallery</a>
                                    </li>
                                    <li>
                                        <a href="30_search_dark.html">Search Inline Dark</a>
                                    </li>
                                    <li>
                                        <a href="30_search_light.html">Search Inline White</a>
                                    </li>
                                    <li>
                                        <a href="31_search_full_screen_light.html">Search Fullscreen White</a>
                                    </li>
                                    <li>
                                        <a href="23_galleries.html">Galleries</a>
                                    </li>
                                    <li>
                                        <a href="17_news_details.html">Post Details</a>
                                    </li>
                                    <li>
                                        <a href="20_page-not_found.html">Page Not Found 404</a>
                                    </li>
                                    <li>
                                        <a href="29_headers.html">Headers</a>
                                    </li>
                                    <li>
                                        <a href="typography.html">Typography</a>
                                    </li>
                                </ul>
                            </div>


                            <div class="col4">

                            </div>

                        </div>
                    </div>
                </li>

                <li class="">
                    <a href="15_pricing_tables.html">Pricing</a>
                </li>
                <li class="">
                    <a href="16_news.html">News</a>
                </li>

                <li class="">
                    <a href="18_contacts.html">Contact</a>
                </li>
            </ul>
            <ul class="nav-add">
                <li class="search search_main">
                    <a href="#" class="js-open-search-popup">
                        <svg class="utouch-icon utouch-icon-search cd-nav-trigger">
                            <use xlink:href="#utouch-icon-search"></use>
                        </svg>
                    </a>
                </li>
            </ul>
            <div class="search-standard">
                <form id="search-header" name="form-search-header" method="post">
                    <div class="typeahead__container">
                        <div class="typeahead__field">

                        <span class="typeahead__query">
                            <input class="js-typeahead" name="utouch_posts[query]" placeholder="What are you looking for?" autocomplete="off" type="search" autofocus>
                        </span>
                            <button type="submit" class="form-icon">
                                <svg class="utouch-icon utouch-icon-search">
                                    <use xlink:href="#utouch-icon-search"></use>
                                </svg>
                            </button>
                            <span class="close js-popup-clear-input form-icon">
                            <svg class="utouch-icon utouch-icon-cancel-1"><use xlink:href="#utouch-icon-cancel-1"></use></svg>
                        </span>

                        </div>
                    </div>
                </form>
            </div>
        </nav>

    </div>

</div>

</header>

<div class="header-spacer"></div>

<!-- ... End Header -->
