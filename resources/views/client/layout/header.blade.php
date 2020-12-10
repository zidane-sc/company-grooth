<style>
    .header{
        box-shadow:0px 6px 0px rgba(201, 227, 255,0.8);
    }
    .header--blue-lighteen{
        background-color: #d6e9ff !important;
    }

</style>
<!-- Header -->
<header class="header  header--small-lines header--blue-lighteen" id="site-header">
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
        <a href="" class="full-block"></a>
            {{-- <img src="{{asset('frontAsset/img/logo.png')}}" alt="Utouch"> --}}
            <div class="logo-text">
                <div class="logo-title">Grooth</div>
                <div class="logo-sub-title">app startup</div>
            </div>
        </div>

        <nav id="primary-menu" class="primary-menu" >

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
                <a href="{{route('main.home')}}">Home</a>
                </li>
                {{-- <li class="menu-item-has-children">
                   <a href="{{route('main.portfolio')}}">Portfolio</a>
               </li> --}}
               <li class="">
                <a href="#">Iot Solution</a>
                <ul class="sub-menu">
                    @foreach ($products as $product)

                    <li>
                        <a href="02_company.html">
                            {{$product->name}}
                        </a>
                    </li>
                    @endforeach
                </ul>
                 <li class="menu-item-has-children">
                    <a href="{{route('main.about')}}">About us</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{route('main.article')}}">Article</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{route('main.contact')}}">Contact Us</a>
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
