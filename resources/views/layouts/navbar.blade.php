<!--== Header Area Start ==-->
<header id="header-area" class="header__3">
    <div class="ruby-container">
        <div class="row">

            <!-- Logo Area Start -->
            <div class="col-3 col-lg-1 col-xl-2 m-auto" style="text-align: center">
                <a href="/" class="logo-area">
                    <img src="{!! asset('assets/img/logo.png') !!}" alt="Logo" class="img-fluid"/>
                </a>
            </div>
            <!-- Logo Area End -->

            <!-- Navigation Area Start -->
            <div class="col-3 col-lg-9 col-xl-8 m-auto">
                <div class="main-menu-wrap">
                    <nav id="mainmenu">
                        <ul>
                            <li><a href="/{{LaravelLocalization::getCurrentLocale()}}">@lang('navbar.home')</a></li>
                            <li class="dropdown-show">
                                <a href="/{{LaravelLocalization::getCurrentLocale()}}/product">@lang('navbar.products')</a>
                                <ul class="mega-menu-wrap dropdown-nav">
                                    <li class="mega-menu-item">
                                        <a href="shop-left-full-wide.html" class="mega-item-title">Gems</a>
                                        <ul>
                                            <li><a href="shop.html">Gem 1</a></li>
                                            <li><a href="shop.html">Gem 2</a></li>
                                            <li><a href="shop.html">Gem 3</a></li>
                                        </ul>
                                    </li>

                                    <li class="mega-menu-item">
                                        <a href="shop-left-full-wide.html" class="mega-item-title">Rings</a>
                                        <ul>
                                            <li><a href="shop.html">Ring 1</a></li>
                                            <li><a href="shop.html">Ring 2</a></li>
                                            <li><a href="shop.html">Ring 3</a></li>
                                            <li><a href="shop.html">Ring 4</a></li>
                                        </ul>
                                    </li>

                                    <li class="mega-menu-item">
                                        <a href="shop-left-full-wide.html" class="mega-item-title">Set</a>
                                        <ul>
                                            <li><a href="shop.html">Set 1</a></li>
                                            <li><a href="shop.html">Set 2</a></li>
                                            <li><a href="shop.html">Set 3</a></li>
                                            <li><a href="shop.html">Set 4</a></li>
                                        </ul>
                                    </li>

                                    <li class="mega-menu-item">
                                        <a href="shop-left-full-wide.html" class="mega-item-title">Set</a>
                                        <ul>
                                            <li><a href="shop.html">Set 1</a></li>
                                            <li><a href="shop.html">Set 2</a></li>
                                            <li><a href="shop.html">Set 3</a></li>
                                            <li><a href="shop.html">Set 4</a></li>
                                        </ul>
                                    </li>

                                    <li class="mega-menu-item">
                                        <a href="shop-left-full-wide.html" class="mega-item-title">Set</a>
                                        <ul>
                                            <li><a href="shop.html">Set 1</a></li>
                                            <li><a href="shop.html">Set 2</a></li>
                                            <li><a href="shop.html">Set 3</a></li>
                                            <li><a href="shop.html">Set 4</a></li>
                                        </ul>
                                    </li>

                                    <li class="mega-menu-item">
                                        <a href="shop-left-full-wide.html" class="mega-item-title">Set</a>
                                        <ul>
                                            <li><a href="shop.html">Set 1</a></li>
                                            <li><a href="shop.html">Set 2</a></li>
                                            <li><a href="shop.html">Set 3</a></li>
                                            <li><a href="shop.html">Set 4</a></li>
                                        </ul>
                                    </li>

                                    <li class="mega-menu-item">
                                        <a href="shop-left-full-wide.html" class="mega-item-title">Set</a>
                                        <ul>
                                            <li><a href="shop.html">Set 1</a></li>
                                            <li><a href="shop.html">Set 2</a></li>
                                            <li><a href="shop.html">Set 3</a></li>
                                            <li><a href="shop.html">Set 4</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="/{{LaravelLocalization::getCurrentLocale()}}/blog">@lang('navbar.blog')</a>
                            </li>
                            <li>
                                <a href="/{{LaravelLocalization::getCurrentLocale()}}/about-us">@lang('navbar.about')</a>
                            </li>
                            <li>
                                <a href="/{{LaravelLocalization::getCurrentLocale()}}/contact-us">@lang('navbar.contact')</a>
                            </li>
                            <li><a href="/{{LaravelLocalization::getCurrentLocale()}}/faq">@lang('navbar.faq')</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Navigation Area End -->

            <!-- Header Right Meta Start -->
            <div class="col-6 col-lg-2 m-auto">
                <div class="header-right-meta text-right">
                    <ul>
                        <li><a href="#" class="modal-active"><i class="fa fa-search"></i></a></li>
                        <li class="settings"><a href="#"><i class="fa fa-cog"></i></a>
                            <div class="site-settings d-block d-sm-flex">
                                <dl class="my-account">
                                    <dt>@lang('navbar.account')</dt>
                                    <dd><a href="/{{LaravelLocalization::getCurrentLocale()}}/dashboard">@lang('navbar.dashboard')</a></dd>
                                    <dd><a href="/{{LaravelLocalization::getCurrentLocale()}}/login-register">@lang('navbar.sign')</a></dd>
                                </dl>
                                <dl class="language">
                                    <dt>@lang('navbar.language')</dt>
                                    <dd class="current"><a
                                            href="/{{LaravelLocalization::getCurrentLocale()}}">{{LaravelLocalization::getCurrentLocaleNative()}}</a>
                                    </dd>
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        @if($localeCode != LaravelLocalization::getCurrentLocale())
                                            <dd>
                                                <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{$properties['native']}}</a>
                                            </dd>
                                        @endif
                                    @endforeach
                                </dl>
                            </div>
                        </li>
                        <li class="shop-cart"><a href="#"><i class="fa fa-shopping-bag"></i> <span
                                    class="count">3</span></a>
                            <div class="mini-cart">
                                <div class="mini-cart-body">
                                    <div class="single-cart-item d-flex">
                                        <figure class="product-thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{!! asset('assets/img/product-1.jpg') !!}"
                                                     alt="Products"/>
                                            </a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="#">Sprite Yoga Companion</a></h2>
                                            <div class="cal d-flex align-items-center">
                                                <span class="quantity">3</span>
                                                <span class="multiplication">X</span>
                                                <span class="price">$77.00</span>
                                            </div>
                                        </div>
                                        <a href="#" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    <div class="single-cart-item d-flex">
                                        <figure class="product-thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{!! asset('assets/img/product-2.jpg') !!}"
                                                     alt="Products"/>
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h2><a href="#">Yoga Companion Kit</a></h2>
                                            <div class="cal d-flex align-items-center">
                                                <span class="quantity">2</span>
                                                <span class="multiplication">X</span>
                                                <span class="price">$6.00</span>
                                            </div>
                                        </div>
                                        <a href="#" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    <div class="single-cart-item d-flex">
                                        <figure class="product-thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{!! asset('assets/img/product-3.jpg') !!}"
                                                     alt="Products"/>
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h2><a href="#">Sprite Yoga Companion Kit</a></h2>
                                            <div class="cal d-flex align-items-center">
                                                <span class="quantity">1</span>
                                                <span class="multiplication">X</span>
                                                <span class="price">$116.00</span>
                                            </div>
                                        </div>
                                        <a href="#" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                </div>
                                <div class="mini-cart-footer">
                                    <a href="/{{LaravelLocalization::getCurrentLocale()}}/checkout" class="btn-add-to-cart">@lang('navbar.checkout')</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Header Right Meta End -->

        </div>
    </div>
</header>
<!--== Header Area End ==-->

<!--== Search Box Area Start ==-->
<div class="body-popup-modal-area">
    <span class="modal-close">
        <img src="{!! asset('assets/img/cancel.png') !!}" alt="Close" class="img-fluid"/>
    </span>
    <div class="modal-container d-flex">
        <div class="search-box-area">
            <div class="search-box-form">
                <form action="#" method="post">
                    <input type="search" placeholder="@lang('navbar.search')"/>
                    <button class="btn" type="button"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--== Search Box Area End ==-->
