@extends('layout')
@section('page-css')
    <link rel="stylesheet" id="elementor-post-57-css" href="{{asset('assets/css/post-57.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-post-178-css" href="{{asset('assets/css/post-178.css')}}" type="text/css" media="all" />
@endsection
@section('header')
    <div data-elementor-type="header" data-elementor-id="178" class="elementor elementor-178 elementor-location-header" data-elementor-settings="[]">
        <div class="elementor-section-wrap">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-e8e3471 elementor-section-height-min-height elementor-section-full_width elementor-section-height-default elementor-section-items-middle elementor-sticky elementor-sticky--effects elementor-sticky--active elementor-section--handles-inside"
                data-id="e8e3471"
                data-element_type="section"
                data-settings='{"background_background":"classic","sticky":"top","sticky_effects_offset":100,"sticky_on":["desktop","tablet","mobile"],"sticky_offset":0}'
                style="position: fixed; width: 1903px; margin-top: 0px; margin-bottom: 0px; top: 0px;"
            >
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-23e2bc42" data-id="23e2bc42" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-78ec3eaa logo elementor-widget elementor-widget-image" data-id="78ec3eaa" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image">
                                                <a href="/">
                                                    <img
                                                        src="{{asset('assets/images/tron_logo.png')}}"
                                                        class="attachment-full size-full"
                                                        alt=""
                                                        data-nsfw-filter-status="sfw"
                                                        style="visibility: visible;width:120px;height:60px;"
                                                    />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-5b6143a9" data-id="5b6143a9" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div
                                        class="elementor-element elementor-element-5a84b2f elementor-nav-menu__align-center elementor-nav-menu--stretch elementor-nav-menu__text-align-center elementor-nav-menu--indicator-classic elementor-nav-menu--dropdown-tablet elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                                        data-id="5a84b2f"
                                        data-element_type="widget"
                                        data-settings='{"full_width":"stretch","layout":"horizontal","toggle":"burger"}'
                                        data-widget_type="nav-menu.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <nav role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-fade">
                                                <ul id="menu-1-5a84b2f" class="elementor-nav-menu" data-smartmenus-id="16147886476310862">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-57 current_page_item menu-item-1921">
                                                        <a href="/" aria-current="page" class="elementor-item elementor-item-active">Home</a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1923"><a href="{{route('about')}}" class="elementor-item">About</a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1942">
                                                        <a class="elementor-item has-submenu" id="sm-16147886476310862-1" aria-haspopup="true" aria-controls="sm-16147886476310862-2" aria-expanded="false">
                                                            Service
                                                        </a>
                                                        <ul class="sub-menu elementor-nav-menu--dropdown" id="sm-16147886476310862-2" role="group" aria-hidden="true" aria-labelledby="sm-16147886476310862-1" aria-expanded="false">
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1943">
                                                                <a class="elementor-sub-item has-submenu" id="sm-16147886476310862-3" aria-haspopup="true" aria-controls="sm-16147886476310862-4" aria-expanded="false">
                                                                    Website
                                                                </a>
                                                                <ul class="sub-menu elementor-nav-menu--dropdown" id="sm-16147886476310862-4" role="group" aria-hidden="true" aria-labelledby="sm-16147886476310862-3" aria-expanded="false">
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1927">
                                                                        <a href="{{route('corporate_website')}}" class="elementor-sub-item">Corporate Website/App</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1945">
                                                                <a class="elementor-sub-item has-submenu" id="sm-16147886476310862-7" aria-haspopup="true" aria-controls="sm-16147886476310862-8" aria-expanded="false">
                                                                    Design
                                                                </a>
                                                                <ul class="sub-menu elementor-nav-menu--dropdown" id="sm-16147886476310862-8" role="group" aria-hidden="true" aria-labelledby="sm-16147886476310862-7" aria-expanded="false">
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1932">
                                                                        <a href="{{route('logo_design')}}" class="elementor-sub-item">Logo Design</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1926"><a href="{{route('contact')}}" class="elementor-item">Contact</a></li>
                                                </ul>
                                            </nav>
                                            <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
                                                <i class="eicon-menu-bar" aria-hidden="true"></i> <span class="elementor-screen-only">Menu</span>
                                            </div>
                                            <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role="navigation" aria-hidden="true" style="top: 44px; width: 1903px; left: 0px;">
                                                <ul id="menu-2-5a84b2f" class="elementor-nav-menu" data-smartmenus-id="16147886476542107">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-57 current_page_item menu-item-1921">
                                                        <a href="/" aria-current="page" class="elementor-item elementor-item-active">Home</a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1923"><a href="{{route('about')}}" class="elementor-item">About</a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1942">
                                                        <a class="elementor-item has-submenu" id="sm-16147886476542107-1" aria-haspopup="true" aria-controls="sm-16147886476542107-2" aria-expanded="false">
                                                            Service
                                                        </a>
                                                        <ul class="sub-menu elementor-nav-menu--dropdown" id="sm-16147886476542107-2" role="group" aria-hidden="true" aria-labelledby="sm-16147886476542107-1" aria-expanded="false">
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1943">
                                                                <a class="elementor-sub-item has-submenu" id="sm-16147886476542107-3" aria-haspopup="true" aria-controls="sm-16147886476542107-4" aria-expanded="false">
                                                                    Website
                                                                </a>
                                                                <ul class="sub-menu elementor-nav-menu--dropdown" id="sm-16147886476542107-4" role="group" aria-hidden="true" aria-labelledby="sm-16147886476542107-3" aria-expanded="false">                                                                    
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1927">
                                                                        <a href="/corporate_website.php" class="elementor-sub-item">Corporate Website/App</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1945">
                                                                <a class="elementor-sub-item has-submenu" id="sm-16147886476542107-7" aria-haspopup="true" aria-controls="sm-16147886476542107-8" aria-expanded="false">
                                                                    Design
                                                                </a>
                                                                <ul class="sub-menu elementor-nav-menu--dropdown" id="sm-16147886476542107-8" role="group" aria-hidden="true" aria-labelledby="sm-16147886476542107-7" aria-expanded="false">
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1932">
                                                                        <a href="/logo_design.php" class="elementor-sub-item">Logo Design</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1926"><a href="/contact.php" class="elementor-item">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-e8e3471 elementor-section-height-min-height elementor-section-full_width elementor-section-height-default elementor-section-items-middle elementor-sticky elementor-sticky__spacer"
                data-id="e8e3471"
                data-element_type="section"
                data-settings='{"background_background":"classic","sticky":"top","sticky_effects_offset":100,"sticky_on":["desktop","tablet","mobile"],"sticky_offset":0}'
                style="visibility: hidden; transition: none 0s ease 0s; animation: 0s ease 0s 1 normal none running none;"
            >
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-5b6143a9" data-id="5b6143a9" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div
                                        class="elementor-element elementor-element-5a84b2f elementor-nav-menu__align-center elementor-nav-menu--stretch elementor-nav-menu__text-align-center elementor-nav-menu--indicator-classic elementor-nav-menu--dropdown-tablet elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                                        data-id="5a84b2f"
                                        data-element_type="widget"
                                        data-settings='{"full_width":"stretch","layout":"horizontal","toggle":"burger"}'
                                        data-widget_type="nav-menu.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <nav role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-fade">
                                                <ul id="menu-1-5a84b2f" class="elementor-nav-menu">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-57 current_page_item menu-item-1921">
                                                        <a href="https://gohat-studio.com/" aria-current="page" class="elementor-item elementor-item-active">Home</a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1923"><a href="{{route('about')}}" class="elementor-item">About</a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1942">
                                                        <a class="elementor-item">Service</a>
                                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1943">
                                                                <a class="elementor-sub-item">Website</a>
                                                                <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1927">
                                                                        <a href="{{route('corporate_website')}}" class="elementor-sub-item">Corporate Website/App</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1945">
                                                                <a class="elementor-sub-item">Design</a>
                                                                <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1932">
                                                                        <a href="{{route('logo_design')}}" class="elementor-sub-item">Logo Design</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1926"><a href="{{route('contact')}}" class="elementor-item">Contact</a></li>
                                                </ul>
                                            </nav>
                                            <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
                                                <i class="eicon-menu-bar" aria-hidden="true"></i> <span class="elementor-screen-only">Menu</span>
                                            </div>
                                            <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role="navigation" aria-hidden="true">
                                                <ul id="menu-2-5a84b2f" class="elementor-nav-menu">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-57 current_page_item menu-item-1921">
                                                        <a href="https://gohat-studio.com/" aria-current="page" class="elementor-item elementor-item-active">Home</a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1923"><a href="{{route('about')}}" class="elementor-item">About</a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1942">
                                                        <a class="elementor-item">Service</a>
                                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1943">
                                                                <a class="elementor-sub-item">Website</a>
                                                                <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1927">
                                                                        <a href="{{route('corporate_website')}}" class="elementor-sub-item">Corporate Website/App</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1945">
                                                                <a class="elementor-sub-item">Design</a>
                                                                <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1932">
                                                                        <a href="{{route('logo_design')}}" class="elementor-sub-item">Logo Design</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1926"><a href="{{route('contact')}}" class="elementor-item">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-2c7a7eec elementor-hidden-tablet elementor-hidden-phone" data-id="2c7a7eec" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div
                                        class="elementor-element elementor-element-3046d08e e-grid-align-right elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons"
                                        data-id="3046d08e"
                                        data-element_type="widget"
                                        data-widget_type="social-icons.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="elementor-social-icons-wrapper elementor-grid">
                                                <div class="elementor-grid-item">
                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-e7679ed" href="https://www.facebook.com/gohat4u" target="_blank">
                                                        <span class="elementor-screen-only">Facebook</span> <i class="fab fa-facebook"></i>
                                                    </a>
                                                </div>
                                                <div class="elementor-grid-item">
                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-telegram elementor-repeater-item-7a99745" href="https://t.me/gohatstudio" target="_blank">
                                                        <span class="elementor-screen-only">Telegram</span> <i class="fab fa-telegram"></i>
                                                    </a>
                                                </div>
                                                <div class="elementor-grid-item">
                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-messenger elementor-repeater-item-91ef91d" href="http://m.me/gohat4u" target="_blank">
                                                        <span class="elementor-screen-only">Facebook-messenger</span> <i class="fab fa-facebook-messenger"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('body_tag')
    <body class="home page-template-default page page-id-57 wp-custom-logo theme-hello-elementor woocommerce-js translatepress-en_US elementor-default elementor-kit-10 elementor-page elementor-page-57 e--ua-blink e--ua-chrome e--ua-webkit">        
@endsection

@section('page')
    <main class="site-main post-57 page type-page status-publish has-post-thumbnail hentry" role="main">
        <header class="page-header"><h1 class="entry-title">Home</h1></header>
        <div class="page-content">
            <div data-elementor-type="wp-page" data-elementor-id="57" class="elementor elementor-57" data-elementor-settings="[]">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap elementor-motion-effects-parent">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-1de32161 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="1de32161"
                            data-element_type="section"
                            data-settings='{"background_background":"classic"}'
                        >
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-79dc012f" data-id="79dc012f" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div
                                                    class="elementor-element elementor-element-7e8a1ea6 animated-fast elementor-widget elementor-widget-heading animated fadeInDown"
                                                    data-id="7e8a1ea6"
                                                    data-element_type="widget"
                                                    data-settings='{"_animation_delay":500,"_animation":"fadeInDown"}'
                                                    data-widget_type="heading.default"
                                                >
                                                    <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Digital Agency</h2></div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-757063aa elementor-widget elementor-widget-heading animated fadeInUp"
                                                    data-id="757063aa"
                                                    data-element_type="widget"
                                                    data-settings='{"_animation_delay":600,"_animation":"fadeInUp"}'
                                                    data-widget_type="heading.default"
                                                >
                                                    <div class="elementor-widget-container"><h1 class="elementor-heading-title elementor-size-default">Create Your Online Success</h1></div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-10125ae0 animated-fast elementor-widget elementor-widget-spacer animated fadeInLeft"
                                                    data-id="10125ae0"
                                                    data-element_type="widget"
                                                    data-settings='{"_animation":"fadeInLeft","_animation_delay":500}'
                                                    data-widget_type="spacer.default"
                                                >
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4c197ae7" data-id="4c197ae7" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div
                                                    class="elementor-element elementor-element-a4cd28d elementor-widget elementor-widget-image animated fadeInRight"
                                                    data-id="a4cd28d"
                                                    data-element_type="widget"
                                                    data-settings='{"_animation":"fadeInRight"}'
                                                    data-widget_type="image.default"
                                                >
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img
                                                                width="854"
                                                                height="670"
                                                                src="https://gohat-studio.com/wp-content/uploads/2020/11/gohat_72a5c2ad13048c8b8c83eec7005757a6.png"
                                                                data-src="https://gohat-studio.com/wp-content/uploads/2020/11/gohat_72a5c2ad13048c8b8c83eec7005757a6.png"
                                                                class="attachment-full size-full ls-is-cached lazyloaded"
                                                                alt=""
                                                                data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/gohat_72a5c2ad13048c8b8c83eec7005757a6.png 854w, https://gohat-studio.com/wp-content/uploads/2020/11/gohat_72a5c2ad13048c8b8c83eec7005757a6-300x235.png 300w, https://gohat-studio.com/wp-content/uploads/2020/11/gohat_72a5c2ad13048c8b8c83eec7005757a6-768x603.png 768w, https://gohat-studio.com/wp-content/uploads/2020/11/gohat_72a5c2ad13048c8b8c83eec7005757a6-600x471.png 600w"
                                                                sizes="(max-width: 854px) 100vw, 854px"
                                                                data-nsfw-filter-status="sfw"
                                                                style="visibility: visible;"
                                                                srcset="
                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/gohat_72a5c2ad13048c8b8c83eec7005757a6.png         854w,
                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/gohat_72a5c2ad13048c8b8c83eec7005757a6-300x235.png 300w,
                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/gohat_72a5c2ad13048c8b8c83eec7005757a6-768x603.png 768w,
                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/gohat_72a5c2ad13048c8b8c83eec7005757a6-600x471.png 600w
                                                                "
                                                            />
                                                            <noscript>
                                                                <img
                                                                    width="854"
                                                                    height="670"
                                                                    src="https://gohat-studio.com/wp-content/uploads/2020/11/gohat_72a5c2ad13048c8b8c83eec7005757a6.png"
                                                                    class="attachment-full size-full lazyload"
                                                                    alt=""
                                                                    srcset="
                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/gohat_72a5c2ad13048c8b8c83eec7005757a6.png         854w,
                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/gohat_72a5c2ad13048c8b8c83eec7005757a6-300x235.png 300w,
                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/gohat_72a5c2ad13048c8b8c83eec7005757a6-768x603.png 768w,
                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/gohat_72a5c2ad13048c8b8c83eec7005757a6-600x471.png 600w
                                                                    "
                                                                    sizes="(max-width: 854px) 100vw, 854px"
                                                                />
                                                            </noscript>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-4b8afcf0 elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-spacer animated fadeInRight"
                                                    data-id="4b8afcf0"
                                                    data-element_type="widget"
                                                    data-settings='{"_position":"absolute","_animation_delay":300,"_animation":"fadeInRight"}'
                                                    data-widget_type="spacer.default"
                                                >
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-6c4dfc1d elementor-absolute elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-image animated fadeInRight"
                                                    data-id="6c4dfc1d"
                                                    data-element_type="widget"
                                                    data-settings='{"_position":"absolute","_animation":"fadeInRight","_animation_delay":400}'
                                                    data-widget_type="image.default"
                                                >
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img
                                                                width="459"
                                                                height="959"
                                                                src="https://gohat-studio.com/wp-content/uploads/2020/11/gohat-p.png"
                                                                data-src="https://gohat-studio.com/wp-content/uploads/2020/11/gohat-p.png"
                                                                class="attachment-medium_large size-medium_large ls-is-cached lazyloaded"
                                                                alt=""
                                                                data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/gohat-p.png 459w, https://gohat-studio.com/wp-content/uploads/2020/11/gohat-p-144x300.png 144w"
                                                                sizes="(max-width: 459px) 100vw, 459px"
                                                                data-nsfw-filter-status="sfw"
                                                                style="visibility: visible;"
                                                                srcset="https://gohat-studio.com/wp-content/uploads/2020/11/gohat-p.png 459w, https://gohat-studio.com/wp-content/uploads/2020/11/gohat-p-144x300.png 144w"
                                                            />
                                                            <noscript>
                                                                <img
                                                                    width="459"
                                                                    height="959"
                                                                    src="https://gohat-studio.com/wp-content/uploads/2020/11/gohat-p.png"
                                                                    class="attachment-medium_large size-medium_large lazyload"
                                                                    alt=""
                                                                    srcset="https://gohat-studio.com/wp-content/uploads/2020/11/gohat-p.png 459w, https://gohat-studio.com/wp-content/uploads/2020/11/gohat-p-144x300.png 144w"
                                                                    sizes="(max-width: 459px) 100vw, 459px"
                                                                />
                                                            </noscript>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-7170382 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="7170382"
                            data-element_type="section"
                            data-settings='{"background_background":"classic"}'
                        >
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ab070c7" data-id="ab070c7" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-6fa3ad6 elementor-widget elementor-widget-heading" data-id="6fa3ad6" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Why Choose us?</h2></div>
                                                </div>
                                                <div class="elementor-element elementor-element-0cdfcf4 elementor-widget elementor-widget-spacer" data-id="0cdfcf4" data-element_type="widget" data-widget_type="spacer.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                                    </div>
                                                </div>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-a8184cc elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="a8184cc"
                                                    data-element_type="section"
                                                >
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4cb7b9d" data-id="4cb7b9d" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-99186af elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                            data-id="99186af"
                                                                            data-element_type="widget"
                                                                            data-widget_type="icon-box.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-icon-box-wrapper">
                                                                                    <div class="elementor-icon-box-icon">
                                                                                        <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="fas fa-user-tie"></i> </span>
                                                                                    </div>
                                                                                    <div class="elementor-icon-box-content">
                                                                                        <h3 class="elementor-icon-box-title"><span>Best Customer Service</span></h3>
                                                                                        <p class="elementor-icon-box-description">
                                                                                            We provide the top class customer service to our customer . Let them not only get a first-class website but also experience first-class service!
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-0ef587b" data-id="0ef587b" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-405aeba elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                            data-id="405aeba"
                                                                            data-element_type="widget"
                                                                            data-widget_type="icon-box.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-icon-box-wrapper">
                                                                                    <div class="elementor-icon-box-icon">
                                                                                        <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="fas fa-home"></i> </span>
                                                                                    </div>
                                                                                    <div class="elementor-icon-box-content">
                                                                                        <h3 class="elementor-icon-box-title"><span>Best Hosting</span></h3>
                                                                                        <p class="elementor-icon-box-description">
                                                                                            We use the fastest and best hosting in Malaysia, with our Web Design and eCommerce allowing you to have an extremely fast website! It won’t take
                                                                                            long for customers to drive in.
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2bee72c" data-id="2bee72c" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-f401bb3 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                            data-id="f401bb3"
                                                                            data-element_type="widget"
                                                                            data-widget_type="icon-box.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-icon-box-wrapper">
                                                                                    <div class="elementor-icon-box-icon">
                                                                                        <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="fas fa-window-restore"></i> </span>
                                                                                    </div>
                                                                                    <div class="elementor-icon-box-content">
                                                                                        <h3 class="elementor-icon-box-title"><span>Site Optimization</span></h3>
                                                                                        <p class="elementor-icon-box-description">
                                                                                            After development, we will ensure your documents are optimised by deleting caches from the development. To ensure your sites are optimised
                                                                                            completely, we will finalise the development by optimising overall images.
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-9b81708" data-id="9b81708" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-3d99bed elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                            data-id="3d99bed"
                                                                            data-element_type="widget"
                                                                            data-widget_type="icon-box.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-icon-box-wrapper">
                                                                                    <div class="elementor-icon-box-icon">
                                                                                        <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="fas fa-user-clock"></i> </span>
                                                                                    </div>
                                                                                    <div class="elementor-icon-box-content">
                                                                                        <h3 class="elementor-icon-box-title"><span>Ready In Fastest Time</span></h3>
                                                                                        <p class="elementor-icon-box-description">
                                                                                            From planning, designing, and developing, we will prepare your websites in the most efficient and quality way.
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-1a68874e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="1a68874e"
                            data-element_type="section"
                        >
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div
                                        class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b104600"
                                        data-id="b104600"
                                        data-element_type="column"
                                        data-settings='{"background_background":"classic"}'
                                    >
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-5b295ef9 elementor-widget elementor-widget-spacer" data-id="5b295ef9" data-element_type="widget" data-widget_type="spacer.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-74afb5 elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-hidden-phone elementor-widget elementor-widget-spacer elementor-motion-effects-parent"
                                                    data-id="74afb5"
                                                    data-element_type="widget"
                                                    data-settings='{"_position":"absolute","motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":0.200000000000000011102230246251565404236316680908203125,"sizes":[]},"motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                                    data-widget_type="spacer.default"
                                                    style=""
                                                >
                                                    <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: 10px; transform: translateY(var(--translateY));">
                                                        <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-7d897ae8 elementor-widget__width-initial elementor-absolute elementor-hidden-tablet elementor-hidden-phone elementor-widget elementor-widget-spacer elementor-motion-effects-parent"
                                                    data-id="7d897ae8"
                                                    data-element_type="widget"
                                                    data-settings='{"_position":"absolute","motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":1,"sizes":[]},"motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                                    data-widget_type="spacer.default"
                                                    style=""
                                                >
                                                    <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: 50px; transform: translateY(var(--translateY));">
                                                        <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-28db892e" data-id="28db892e" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-61375a9a elementor-widget elementor-widget-heading" data-id="61375a9a" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">WHO WE ARE</h2></div>
                                                </div>
                                                <div class="elementor-element elementor-element-77c1b343 elementor-widget elementor-widget-heading" data-id="77c1b343" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">We Design Your Success</h2></div>
                                                </div>
                                                <div class="elementor-element elementor-element-46aecacf elementor-widget elementor-widget-text-editor" data-id="46aecacf" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p>
                                                                With more than 100+ websites per month working experience, our team plan and create strategy every single detail to make sure to bring you the best and effective solution for
                                                                your business. We are passionate about your online success.
                                                            </p>
                                                            <p>Brand identities, digital platforms e-commerce flagships, and branded Capabilities content that bring culture and commerce together.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-215a9dec elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="215a9dec"
                            data-element_type="section"
                            data-settings='{"background_background":"classic"}'
                        >
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2641f0f1" data-id="2641f0f1" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-52247771 elementor-widget elementor-widget-heading" data-id="52247771" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Our Portfolio</h2></div>
                                                </div>
                                                <div class="elementor-element elementor-element-5c7ace15 elementor-widget elementor-widget-heading" data-id="5c7ace15" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Featured Works</h2></div>
                                                </div>
                                                <div class="elementor-element elementor-element-638bb5f1 elementor-widget elementor-widget-spacer" data-id="638bb5f1" data-element_type="widget" data-widget_type="spacer.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                                    </div>
                                                </div>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-276a41f6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="276a41f6"
                                                    data-element_type="section"
                                                >
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-99b518f" data-id="99b518f" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-240417b1 elementor-widget elementor-widget-image"
                                                                            data-id="240417b1"
                                                                            data-element_type="widget"
                                                                            data-widget_type="image.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <a href="http://gohat-studio.com/wp-content/uploads/2020/11/002.png" data-elementor-open-lightbox="yes" data-elementor-lightbox-title="002.png">
                                                                                        <img
                                                                                            width="300"
                                                                                            height="235"
                                                                                            src="https://gohat-studio.com/wp-content/uploads/2020/11/002-300x235.png"
                                                                                            data-src="https://gohat-studio.com/wp-content/uploads/2020/11/002-300x235.png"
                                                                                            class="elementor-animation-shrink attachment-medium size-medium lazyloaded"
                                                                                            alt=""
                                                                                            data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/002-300x235.png 300w, https://gohat-studio.com/wp-content/uploads/2020/11/002-768x603.png 768w, https://gohat-studio.com/wp-content/uploads/2020/11/002-600x471.png 600w, https://gohat-studio.com/wp-content/uploads/2020/11/002.png 854w"
                                                                                            sizes="(max-width: 300px) 100vw, 300px"
                                                                                            data-nsfw-filter-status="sfw"
                                                                                            style="visibility: visible;"
                                                                                            srcset="
                                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/002-300x235.png 300w,
                                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/002-768x603.png 768w,
                                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/002-600x471.png 600w,
                                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/002.png         854w
                                                                                            "
                                                                                        />
                                                                                        <noscript>
                                                                                            <img
                                                                                                width="300"
                                                                                                height="235"
                                                                                                src="https://gohat-studio.com/wp-content/uploads/2020/11/002-300x235.png"
                                                                                                class="elementor-animation-shrink attachment-medium size-medium lazyload"
                                                                                                alt=""
                                                                                                srcset="
                                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/002-300x235.png 300w,
                                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/002-768x603.png 768w,
                                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/002-600x471.png 600w,
                                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/002.png         854w
                                                                                                "
                                                                                                sizes="(max-width: 300px) 100vw, 300px"
                                                                                            />
                                                                                        </noscript>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-6de6cdfd elementor-widget elementor-widget-image"
                                                                            data-id="6de6cdfd"
                                                                            data-element_type="widget"
                                                                            data-widget_type="image.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <a href="http://gohat-studio.com/wp-content/uploads/2020/11/003.png" data-elementor-open-lightbox="yes" data-elementor-lightbox-title="003.png">
                                                                                        <img
                                                                                            width="300"
                                                                                            height="235"
                                                                                            src="https://gohat-studio.com/wp-content/uploads/2020/11/003-300x235.png"
                                                                                            data-src="https://gohat-studio.com/wp-content/uploads/2020/11/003-300x235.png"
                                                                                            class="elementor-animation-shrink attachment-medium size-medium lazyloaded"
                                                                                            alt=""
                                                                                            data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/003-300x235.png 300w, https://gohat-studio.com/wp-content/uploads/2020/11/003-768x603.png 768w, https://gohat-studio.com/wp-content/uploads/2020/11/003-600x471.png 600w, https://gohat-studio.com/wp-content/uploads/2020/11/003.png 854w"
                                                                                            sizes="(max-width: 300px) 100vw, 300px"
                                                                                            data-nsfw-filter-status="sfw"
                                                                                            style="visibility: visible;"
                                                                                            srcset="
                                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/003-300x235.png 300w,
                                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/003-768x603.png 768w,
                                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/003-600x471.png 600w,
                                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/003.png         854w
                                                                                            "
                                                                                        />
                                                                                        <noscript>
                                                                                            <img
                                                                                                width="300"
                                                                                                height="235"
                                                                                                src="https://gohat-studio.com/wp-content/uploads/2020/11/003-300x235.png"
                                                                                                class="elementor-animation-shrink attachment-medium size-medium lazyload"
                                                                                                alt=""
                                                                                                srcset="
                                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/003-300x235.png 300w,
                                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/003-768x603.png 768w,
                                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/003-600x471.png 600w,
                                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/003.png         854w
                                                                                                "
                                                                                                sizes="(max-width: 300px) 100vw, 300px"
                                                                                            />
                                                                                        </noscript>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-740c7083" data-id="740c7083" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-70c63934 elementor-widget elementor-widget-image"
                                                                            data-id="70c63934"
                                                                            data-element_type="widget"
                                                                            data-widget_type="image.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <a href="http://gohat-studio.com/wp-content/uploads/2020/11/001.png" data-elementor-open-lightbox="yes" data-elementor-lightbox-title="001.png">
                                                                                        <img
                                                                                            width="300"
                                                                                            height="235"
                                                                                            src="https://gohat-studio.com/wp-content/uploads/2020/11/001-300x235.png"
                                                                                            data-src="https://gohat-studio.com/wp-content/uploads/2020/11/001-300x235.png"
                                                                                            class="elementor-animation-shrink attachment-medium size-medium lazyloaded"
                                                                                            alt=""
                                                                                            data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/001-300x235.png 300w, https://gohat-studio.com/wp-content/uploads/2020/11/001-768x603.png 768w, https://gohat-studio.com/wp-content/uploads/2020/11/001-600x471.png 600w, https://gohat-studio.com/wp-content/uploads/2020/11/001.png 854w"
                                                                                            sizes="(max-width: 300px) 100vw, 300px"
                                                                                            data-nsfw-filter-status="sfw"
                                                                                            style="visibility: visible;"
                                                                                            srcset="
                                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/001-300x235.png 300w,
                                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/001-768x603.png 768w,
                                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/001-600x471.png 600w,
                                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/001.png         854w
                                                                                            "
                                                                                        />
                                                                                        <noscript>
                                                                                            <img
                                                                                                width="300"
                                                                                                height="235"
                                                                                                src="https://gohat-studio.com/wp-content/uploads/2020/11/001-300x235.png"
                                                                                                class="elementor-animation-shrink attachment-medium size-medium lazyload"
                                                                                                alt=""
                                                                                                srcset="
                                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/001-300x235.png 300w,
                                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/001-768x603.png 768w,
                                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/001-600x471.png 600w,
                                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/001.png         854w
                                                                                                "
                                                                                                sizes="(max-width: 300px) 100vw, 300px"
                                                                                            />
                                                                                        </noscript>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-2fc5be42 elementor-widget elementor-widget-image"
                                                                            data-id="2fc5be42"
                                                                            data-element_type="widget"
                                                                            data-widget_type="image.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <a href="http://gohat-studio.com/wp-content/uploads/2020/11/004.png" data-elementor-open-lightbox="yes" data-elementor-lightbox-title="004.png">
                                                                                        <img
                                                                                            width="300"
                                                                                            height="235"
                                                                                            src="https://gohat-studio.com/wp-content/uploads/2020/11/004-300x235.png"
                                                                                            data-src="https://gohat-studio.com/wp-content/uploads/2020/11/004-300x235.png"
                                                                                            class="elementor-animation-shrink attachment-medium size-medium lazyloaded"
                                                                                            alt=""
                                                                                            data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/004-300x235.png 300w, https://gohat-studio.com/wp-content/uploads/2020/11/004-768x603.png 768w, https://gohat-studio.com/wp-content/uploads/2020/11/004-600x471.png 600w, https://gohat-studio.com/wp-content/uploads/2020/11/004.png 854w"
                                                                                            sizes="(max-width: 300px) 100vw, 300px"
                                                                                            data-nsfw-filter-status="sfw"
                                                                                            style="visibility: visible;"
                                                                                            srcset="
                                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/004-300x235.png 300w,
                                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/004-768x603.png 768w,
                                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/004-600x471.png 600w,
                                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/004.png         854w
                                                                                            "
                                                                                        />
                                                                                        <noscript>
                                                                                            <img
                                                                                                width="300"
                                                                                                height="235"
                                                                                                src="https://gohat-studio.com/wp-content/uploads/2020/11/004-300x235.png"
                                                                                                class="elementor-animation-shrink attachment-medium size-medium lazyload"
                                                                                                alt=""
                                                                                                srcset="
                                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/004-300x235.png 300w,
                                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/004-768x603.png 768w,
                                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/004-600x471.png 600w,
                                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/004.png         854w
                                                                                                "
                                                                                                sizes="(max-width: 300px) 100vw, 300px"
                                                                                            />
                                                                                        </noscript>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <div
                                                    class="elementor-element elementor-element-657d9919 elementor-align-center elementor-widget elementor-widget-button"
                                                    data-id="657d9919"
                                                    data-element_type="widget"
                                                    data-widget_type="button.default"
                                                >
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="http://gohat-studio.com/website-design-and-development/" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">Corporate Website/App</span> </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-3e0369d2 elementor-align-center elementor-widget elementor-widget-button"
                                                    data-id="3e0369d2"
                                                    data-element_type="widget"
                                                    data-widget_type="button.default"
                                                >
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="http://gohat-studio.com/ecommerce/" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">eCommerce Website</span> </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-51c885a7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="51c885a7"
                            data-element_type="section"
                            data-settings='{"background_background":"gradient"}'
                        >
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-42a0ca86" data-id="42a0ca86" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-5b0c5e66 elementor-widget elementor-widget-heading" data-id="5b0c5e66" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Our Services</h2></div>
                                                </div>
                                                <div class="elementor-element elementor-element-1be56c9e elementor-widget elementor-widget-heading" data-id="1be56c9e" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Bring Value To The Company</h2></div>
                                                </div>
                                                <div class="elementor-element elementor-element-bfc7a42 elementor-widget elementor-widget-spacer" data-id="bfc7a42" data-element_type="widget" data-widget_type="spacer.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                                    </div>
                                                </div>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-3dab96ba elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="3dab96ba"
                                                    data-element_type="section"
                                                >
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6d1025b2" data-id="6d1025b2" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-649d6789 elementor-widget elementor-widget-counter"
                                                                            data-id="649d6789"
                                                                            data-element_type="widget"
                                                                            data-widget_type="counter.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-counter">
                                                                                    <div class="elementor-counter-number-wrapper">
                                                                                        <span class="elementor-counter-number-prefix"></span>
                                                                                        <span class="elementor-counter-number" data-duration="2000" data-to-value="1536" data-from-value="0" data-delimiter=",">0</span>
                                                                                        <span class="elementor-counter-number-suffix">+</span>
                                                                                    </div>
                                                                                    <div class="elementor-counter-title">Website Completed</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5166d0b4" data-id="5166d0b4" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-24275afa elementor-widget elementor-widget-counter"
                                                                            data-id="24275afa"
                                                                            data-element_type="widget"
                                                                            data-widget_type="counter.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-counter">
                                                                                    <div class="elementor-counter-number-wrapper">
                                                                                        <span class="elementor-counter-number-prefix"></span>
                                                                                        <span class="elementor-counter-number" data-duration="2000" data-to-value="99" data-from-value="0" data-delimiter=",">0</span>
                                                                                        <span class="elementor-counter-number-suffix">%</span>
                                                                                    </div>
                                                                                    <div class="elementor-counter-title">Level of customer satisfaction</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-bbe5b47" data-id="bbe5b47" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-24a991e3 elementor-widget elementor-widget-counter"
                                                                            data-id="24a991e3"
                                                                            data-element_type="widget"
                                                                            data-widget_type="counter.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-counter">
                                                                                    <div class="elementor-counter-number-wrapper">
                                                                                        <span class="elementor-counter-number-prefix"></span>
                                                                                        <span class="elementor-counter-number" data-duration="2000" data-to-value="1605" data-from-value="0" data-delimiter=",">0</span>
                                                                                        <span class="elementor-counter-number-suffix">+</span>
                                                                                    </div>
                                                                                    <div class="elementor-counter-title">Design Completed</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-7aa599aa elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-motion-effects-element elementor-motion-effects-element-type-background"
                            data-id="7aa599aa"
                            data-element_type="section"
                            data-settings='{"background_background":"classic","background_motion_fx_motion_fx_scrolling":"yes","background_motion_fx_translateY_effect":"yes","background_motion_fx_blur_effect":"yes","background_motion_fx_blur_range":{"unit":"%","size":"","sizes":{"start":40,"end":80}},"background_motion_fx_translateY_speed":{"unit":"px","size":4,"sizes":[]},"background_motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"background_motion_fx_blur_direction":"out-in","background_motion_fx_blur_level":{"unit":"px","size":7,"sizes":[]},"background_motion_fx_devices":["desktop","tablet","mobile"]}'
                        >
                            <div class="elementor-motion-effects-container">
                                <div class="elementor-motion-effects-layer" style="width: 100%; height: 140%; --translateY: -48.2844px; --blur: 7px; transform: translateY(var(--translateY)); filter: blur(var(--blur));"></div>
                            </div>
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ba13eb7" data-id="ba13eb7" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-708bd719 elementor-widget elementor-widget-heading" data-id="708bd719" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Let's Build Your Tomorrow, Today!</h2></div>
                                                </div>
                                                <div class="elementor-element elementor-element-3ae99ac3 elementor-widget elementor-widget-text-editor" data-id="3ae99ac3" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix"><p>Create a successful digital platform and scale up your business. Start your business today and focus on what matters.</p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6e96a64 elementor-hidden-phone" data-id="6e96a64" data-element_type="column">
                                        <div class="elementor-column-wrap"><div class="elementor-widget-wrap"></div></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="post-tags"></div>
        </div>
        <section id="comments" class="comments-area"></section>
        <!-- .comments-area -->
    </main>
@endsection