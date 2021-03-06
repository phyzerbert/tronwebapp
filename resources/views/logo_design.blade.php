@extends('layout')
@section('page-css')
    <link rel="stylesheet" id="elementor-post-277-css" href="{{asset('assets/css/post-277.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-post-167-css" href="{{asset('assets/css/post-167.css')}}" type="text/css" media="all" />
@endsection
@section('header')
    <div data-elementor-type="header" data-elementor-id="167" class="elementor elementor-167 elementor-location-header" data-elementor-settings="[]">
        <div class="elementor-section-wrap">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-c42a36c elementor-section-height-min-height elementor-section-full_width elementor-section-height-default elementor-section-items-middle elementor-sticky elementor-sticky--active elementor-section--handles-inside"
                data-id="c42a36c"
                data-element_type="section"
                data-settings='{"background_background":"classic","sticky":"top","sticky_effects_offset":100,"sticky_on":["desktop","tablet","mobile"],"sticky_offset":0}'
                style="position: fixed; width: 100%; margin-top: 0px; margin-bottom: 0px; top: 0px;background-color: #FFF;"
            >
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-647efcde" data-id="647efcde" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-a695b8 logo elementor-widget elementor-widget-image" data-id="a695b8" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image">
                                                <a href="/">
                                                    <img
                                                        src="{{asset('assets/images/tron_logo.png')}}"
                                                        class="attachment-full size-full"
                                                        alt=""
                                                        style="visibility: visible;width:160px;height:80px;"
                                                    />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-3587b5f5" data-id="3587b5f5" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div
                                        class="elementor-element elementor-element-5743b6f elementor-nav-menu__align-center elementor-nav-menu--stretch elementor-nav-menu__text-align-center elementor-nav-menu--indicator-classic elementor-nav-menu--dropdown-tablet elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                                        data-id="5743b6f"
                                        data-element_type="widget"
                                        data-settings='{"full_width":"stretch","layout":"horizontal","toggle":"burger"}'
                                        data-widget_type="nav-menu.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <nav role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-fade">
                                                <ul id="menu-1-5743b6f" class="elementor-nav-menu" data-smartmenus-id="16148023639033452">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1921"><a href="{{route('index')}}" class="elementor-item">Home</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1923"><a href="{{route('about')}}" class="elementor-item">About</a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-1942">
                                                        <a class="elementor-item has-submenu" id="sm-16148023639033452-1" aria-haspopup="true" aria-controls="sm-16148023639033452-2" aria-expanded="false">
                                                            Service
                                                        </a>
                                                        <ul
                                                            class="sub-menu elementor-nav-menu--dropdown sm-nowrap"
                                                            id="sm-16148023639033452-2"
                                                            role="group"
                                                            aria-hidden="true"
                                                            aria-labelledby="sm-16148023639033452-1"
                                                            aria-expanded="false"
                                                            style="width: auto; min-width: 10em; display: none; max-width: 1000px; top: auto; left: 0px; margin-left: 0px; margin-top: 0px;"
                                                        >
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1943">
                                                                <a class="elementor-sub-item has-submenu" id="sm-16148023639033452-3" aria-haspopup="true" aria-controls="sm-16148023639033452-4" aria-expanded="false">
                                                                    Website
                                                                </a>
                                                                <ul
                                                                    class="sub-menu elementor-nav-menu--dropdown"
                                                                    id="sm-16148023639033452-4"
                                                                    role="group"
                                                                    aria-hidden="true"
                                                                    aria-labelledby="sm-16148023639033452-3"
                                                                    aria-expanded="false"
                                                                    style="width: auto; min-width: 10em; display: none; max-width: 1000px; top: auto; left: 0px; margin-left: 132.469px; margin-top: -46px;"
                                                                >
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item menu-item-1927">
                                                                        <a href="{{route('corporate_website')}}" aria-current="page" class="elementor-sub-item">Corporate Website/App</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-1945">
                                                                <a class="elementor-sub-item has-submenu" id="sm-16148023639033452-7" aria-haspopup="true" aria-controls="sm-16148023639033452-8" aria-expanded="false">
                                                                    Design
                                                                </a>
                                                                <ul class="sub-menu elementor-nav-menu--dropdown sm-nowrap" id="sm-16148023639033452-8" role="group" aria-hidden="true" aria-labelledby="sm-16148023639033452-7" aria-expanded="false">
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page-item-277 current_page_item menu-item-1932">
                                                                        <a href="{{route('logo_design')}}" class="elementor-sub-item elementor-item-active">Logo Design</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1926"><a href="{{route('contact')}}" class="elementor-item">Contact</a></li>
                                                </ul>
                                            </nav>
                                            <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false" style="">
                                                <i class="eicon-menu-bar" aria-hidden="true"></i> <span class="elementor-screen-only">Menu</span>
                                            </div>
                                            <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role="navigation" aria-hidden="true" style="width: 1409px; left: 0px; top: 44px;">
                                                <ul id="menu-2-5743b6f" class="elementor-nav-menu" data-smartmenus-id="16147985652091938">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1921"><a href="https://gohat-studio.com/" class="elementor-item">Home</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-17 current_page_item menu-item-1923">
                                                        <a href="{{route('about')}}" aria-current="page" class="elementor-item elementor-item-active">About</a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1942">
                                                        <a class="elementor-item has-submenu" id="sm-16147985652091938-1" aria-haspopup="true" aria-controls="sm-16147985652091938-2" aria-expanded="false">
                                                            Service
                                                        </a>
                                                        <ul class="sub-menu elementor-nav-menu--dropdown" id="sm-16147985652091938-2" role="group" aria-hidden="true" aria-labelledby="sm-16147985652091938-1" aria-expanded="false">
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1943">
                                                                <a class="elementor-sub-item has-submenu" id="sm-16147985652091938-3" aria-haspopup="true" aria-controls="sm-16147985652091938-4" aria-expanded="false">
                                                                    Website
                                                                </a>
                                                                <ul class="sub-menu elementor-nav-menu--dropdown" id="sm-16147985652091938-4" role="group" aria-hidden="true" aria-labelledby="sm-16147985652091938-3" aria-expanded="false">
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1927">
                                                                        <a href="{{route('corporate_website')}}" class="elementor-sub-item">Corporate Website/App</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1945">
                                                                <a class="elementor-sub-item has-submenu" id="sm-16147985652091938-7" aria-haspopup="true" aria-controls="sm-16147985652091938-8" aria-expanded="false">
                                                                    Design
                                                                </a>
                                                                <ul class="sub-menu elementor-nav-menu--dropdown" id="sm-16147985652091938-8" role="group" aria-hidden="true" aria-labelledby="sm-16147985652091938-7" aria-expanded="false">
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
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-c42a36c elementor-section-height-min-height elementor-section-full_width elementor-section-height-default elementor-section-items-middle elementor-sticky elementor-sticky__spacer"
                data-id="c42a36c"
                data-element_type="section"
                data-settings='{"background_background":"classic","sticky":"top","sticky_effects_offset":100,"sticky_on":["desktop","tablet","mobile"],"sticky_offset":0}'
                style="visibility: hidden; transition: none 0s ease 0s; animation: 0s ease 0s 1 normal none running none;"
            >
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-3587b5f5" data-id="3587b5f5" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div
                                        class="elementor-element elementor-element-5743b6f elementor-nav-menu__align-center elementor-nav-menu--stretch elementor-nav-menu__text-align-center elementor-nav-menu--indicator-classic elementor-nav-menu--dropdown-tablet elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                                        data-id="5743b6f"
                                        data-element_type="widget"
                                        data-settings='{"full_width":"stretch","layout":"horizontal","toggle":"burger"}'
                                        data-widget_type="nav-menu.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <nav role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-fade">
                                                <ul id="menu-1-5743b6f" class="elementor-nav-menu">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1921"><a href="https://gohat-studio.com/" class="elementor-item">Home</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-17 current_page_item menu-item-1923">
                                                        <a href="{{route('about')}}" aria-current="page" class="elementor-item elementor-item-active">About</a>
                                                    </li>
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
                                                <ul id="menu-2-5743b6f" class="elementor-nav-menu">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1921"><a href="https://gohat-studio.com/" class="elementor-item">Home</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-17 current_page_item menu-item-1923">
                                                        <a href="{{route('about')}}" aria-current="page" class="elementor-item elementor-item-active">About</a>
                                                    </li>
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
                        <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-70423c85 elementor-hidden-tablet elementor-hidden-phone" data-id="70423c85" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div
                                        class="elementor-element elementor-element-6ac606c4 e-grid-align-right elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons"
                                        data-id="6ac606c4"
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
    <body class="page-template page-template-elementor_header_footer page page-id-17 wp-custom-logo theme-hello-elementor woocommerce-js translatepress-en_US elementor-default elementor-template-full-width elementor-kit-10 elementor-page elementor-page-17 e--ua-blink e--ua-chrome e--ua-webkit" data-elementor-device-mode="desktop">
@endsection

@section('page')
<div data-elementor-type="wp-page" data-elementor-id="277" class="elementor elementor-277" data-elementor-settings="[]">
    <div class="elementor-inner">
        <div class="elementor-section-wrap">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-2bb695a1 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
                data-id="2bb695a1"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-273915c6" data-id="273915c6" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div
                                        class="elementor-element elementor-element-56f81065 elementor-widget elementor-widget-heading elementor-motion-effects-parent"
                                        data-id="56f81065"
                                        data-element_type="widget"
                                        data-settings='{"motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":0.5,"sizes":[]},"motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                        data-widget_type="heading.default"
                                    >
                                        <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: -25px; transform: translateY(var(--translateY));">
                                            <h1 class="elementor-heading-title elementor-size-default">Logo Design</h1>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-6e6665c1 elementor-widget elementor-widget-text-editor" data-id="6e6665c1" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-text-editor elementor-clearfix"><p>Start with a Custom Logo that Matches Your Brand</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-6979b42d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="6979b42d"
                data-element_type="section"
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-38b48176" data-id="38b48176" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-46d15afc elementor-widget elementor-widget-heading" data-id="46d15afc" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Build comprehensive, and purpose-driven identities and experiences.</h2></div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-4578f16e elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-spacer"
                                        data-id="4578f16e"
                                        data-element_type="widget"
                                        data-widget_type="spacer.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-214118fc elementor-widget__width-initial elementor-absolute elementor-hidden-tablet elementor-hidden-phone elementor-widget elementor-widget-spacer elementor-motion-effects-parent"
                                        data-id="214118fc"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute","motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_direction":"negative","motion_fx_translateY_speed":{"unit":"px","size":1,"sizes":[]},"motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                        data-widget_type="spacer.default"
                                    >
                                        <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: 46.74px; transform: translateY(var(--translateY));">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6d97e86f" data-id="6d97e86f" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-2d1e46e elementor-widget elementor-widget-text-editor" data-id="2d1e46e" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-text-editor elementor-clearfix">
                                                <p>
                                                    <strong>GOHAT Marketing (PG0495501-M)</strong>&nbsp;is your trusted online source for the web’s best and most innovative web designs and e-Commerce website solutions. We offer real world
                                                    website solutions that can increase your company’s online presence and offer you the chance to find targeted customers and make more sales. Our wide array of web services was designed to
                                                    ensure your continued success and positioning in the global market.
                                                </p>
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
                class="elementor-section elementor-top-section elementor-element elementor-element-51184936 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="51184936"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-13c9b625" data-id="13c9b625" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-7c51bc80 elementor-widget elementor-widget-heading" data-id="7c51bc80" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Why You Should Grab a Logo from Us for Your Business</h2></div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-6416e2ef elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-hidden-phone elementor-widget elementor-widget-spacer elementor-motion-effects-parent"
                                        data-id="6416e2ef"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute","motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":0.5,"sizes":[]},"motion_fx_blur_effect":"yes","motion_fx_blur_level":{"unit":"px","size":4,"sizes":[]},"motion_fx_blur_range":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_blur_direction":"in-out","motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                        data-widget_type="spacer.default"
                                    >
                                        <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: -10.495px; --blur: 2.8396px; transform: translateY(var(--translateY)); filter: blur(var(--blur));">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-1ccf4743 elementor-widget elementor-widget-spacer" data-id="1ccf4743" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-dd9409a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="dd9409a"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-0ce6985" data-id="0ce6985" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-d0c48e0 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="d0c48e0"
                                                                data-element_type="widget"
                                                                data-widget_type="icon-box.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="fas fa-certificate"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title"><span>Professional</span></h3>
                                                                            <p class="elementor-icon-box-description">Our designers are talented and experienced.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-f20a4a5" data-id="f20a4a5" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-2fba981 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="2fba981"
                                                                data-element_type="widget"
                                                                data-widget_type="icon-box.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="fas fa-user"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title"><span>Engaging</span></h3>
                                                                            <p class="elementor-icon-box-description">Catchy colours and designs on your LOGO enable customers to connect with your business.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2fed75e" data-id="2fed75e" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-4d23b09 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="4d23b09"
                                                                data-element_type="widget"
                                                                data-widget_type="icon-box.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="far fa-lightbulb"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title"><span>Memorable</span></h3>
                                                                            <p class="elementor-icon-box-description">LOGO help your customers remember your business better.</p>
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
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-5389eff elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="5389eff"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-78f937f" data-id="78f937f" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-9db0136 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="9db0136"
                                                                data-element_type="widget"
                                                                data-widget_type="icon-box.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="fas fa-user-clock"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title"><span>Fast</span></h3>
                                                                            <p class="elementor-icon-box-description">Ready to be displayed within 5 working days!</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-92813ee" data-id="92813ee" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-2422345 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="2422345"
                                                                data-element_type="widget"
                                                                data-widget_type="icon-box.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="fas fa-male"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title"><span>Unique</span></h3>
                                                                            <p class="elementor-icon-box-description">A business LOGO helps your business stand out from its competitions.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6f3259b" data-id="6f3259b" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-2bdf48c elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="2bdf48c"
                                                                data-element_type="widget"
                                                                data-widget_type="icon-box.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="far fa-check-circle"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title"><span>Convenient</span></h3>
                                                                            <p class="elementor-icon-box-description">Just follow the few given steps, and we’ll handle the rest.</p>
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
                class="elementor-section elementor-top-section elementor-element elementor-element-3cd80a8b elementor-section-content-middle elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="3cd80a8b"
                data-element_type="section"
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2c1b9984" data-id="2c1b9984" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-37f0a423 elementor-widget elementor-widget-heading" data-id="37f0a423" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Stand out, and evoke your brand</h2></div>
                                    </div>
                                    <div class="elementor-element elementor-element-5ad55b30 elementor-widget elementor-widget-text-editor" data-id="5ad55b30" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-text-editor elementor-clearfix">
                                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <section class="vc_cta3-container">
                                                                <div class="vc_general vc_cta3 vc_cta3-style-custom vc_cta3-shape-square vc_cta3-align-left vc_cta3-icon-size-md vc_custom_1586332430040">
                                                                    <div class="vc_cta3_content-container">
                                                                        <div class="vc_cta3-content">
                                                                            <p>
                                                                                Before embarking on any sort of marketing campaign, you must first nail down your brand. Here, this is what we do and are good at – reflecting your company’s
                                                                                culture and telling your brand story.
                                                                            </p>
                                                                            <p>
                                                                                Our creative team will get to know your business before creating a logo that fits your style and make a lasting impression on your brand. We provide
                                                                                high-resolution files that will work for web, print, and all your marketing efforts. Best of all, it only takes 5 business days.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-15be2ffb" data-id="15be2ffb" data-element_type="column" data-settings='{"background_background":"classic"}'>
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div
                                        class="elementor-element elementor-element-7b6b5ead elementor-widget elementor-widget-image animated fadeInRight"
                                        data-id="7b6b5ead"
                                        data-element_type="widget"
                                        data-settings='{"_animation":"fadeInRight"}'
                                        data-widget_type="image.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image">
                                                <img
                                                    width="768"
                                                    height="512"
                                                    src="https://gohat-studio.com/wp-content/uploads/2020/11/working-on-logo-design-1024x682-1-768x512.jpg"
                                                    data-src="https://gohat-studio.com/wp-content/uploads/2020/11/working-on-logo-design-1024x682-1-768x512.jpg"
                                                    class="attachment-medium_large size-medium_large lazyloaded"
                                                    alt=""
                                                    data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/working-on-logo-design-1024x682-1-768x512.jpg 768w, https://gohat-studio.com/wp-content/uploads/2020/11/working-on-logo-design-1024x682-1-300x200.jpg 300w, https://gohat-studio.com/wp-content/uploads/2020/11/working-on-logo-design-1024x682-1-600x400.jpg 600w, https://gohat-studio.com/wp-content/uploads/2020/11/working-on-logo-design-1024x682-1.jpg 1024w"
                                                    sizes="(max-width: 768px) 100vw, 768px"
                                                    data-nsfw-filter-status="sfw"
                                                    style="visibility: visible;"
                                                    srcset="
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/working-on-logo-design-1024x682-1-768x512.jpg  768w,
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/working-on-logo-design-1024x682-1-300x200.jpg  300w,
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/working-on-logo-design-1024x682-1-600x400.jpg  600w,
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/working-on-logo-design-1024x682-1.jpg         1024w
                                                    "
                                                />
                                                <noscript>
                                                    <img
                                                        width="768"
                                                        height="512"
                                                        src="https://gohat-studio.com/wp-content/uploads/2020/11/working-on-logo-design-1024x682-1-768x512.jpg"
                                                        class="attachment-medium_large size-medium_large lazyload"
                                                        alt=""
                                                        srcset="
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/working-on-logo-design-1024x682-1-768x512.jpg  768w,
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/working-on-logo-design-1024x682-1-300x200.jpg  300w,
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/working-on-logo-design-1024x682-1-600x400.jpg  600w,
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/working-on-logo-design-1024x682-1.jpg         1024w
                                                        "
                                                        sizes="(max-width: 768px) 100vw, 768px"
                                                    />
                                                </noscript>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-2311df5f elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-hidden-phone elementor-widget elementor-widget-spacer elementor-motion-effects-parent"
                                        data-id="2311df5f"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute","motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":0.299999999999999988897769753748434595763683319091796875,"sizes":[]},"motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                        data-widget_type="spacer.default"
                                    >
                                        <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: 15px; transform: translateY(var(--translateY));">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-7fc77c3b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="7fc77c3b"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-186fe3a2" data-id="186fe3a2" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-317d29b0 elementor-widget elementor-widget-heading" data-id="317d29b0" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">3 Simple Steps To Have Your Logo Done</h2></div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-69c38450 elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-hidden-phone elementor-widget elementor-widget-spacer elementor-motion-effects-parent"
                                        data-id="69c38450"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute","motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":0.5,"sizes":[]},"motion_fx_blur_effect":"yes","motion_fx_blur_level":{"unit":"px","size":4,"sizes":[]},"motion_fx_blur_range":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_blur_direction":"in-out","motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                        data-widget_type="spacer.default"
                                    >
                                        <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: 25px; --blur: 0px; transform: translateY(var(--translateY)); filter: blur(var(--blur));">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-6ef25b28 elementor-widget elementor-widget-spacer" data-id="6ef25b28" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-437dbcc elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="437dbcc"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-0195cac" data-id="0195cac" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-2a2908d elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="2a2908d"
                                                                data-element_type="widget"
                                                                data-widget_type="icon-box.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="fas fa-info-circle"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title"><span>1. Talk to us</span></h3>
                                                                            <p class="elementor-icon-box-description">Our design experts will get in touch with you within 3 working days to understand your requirements.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-da6bb3e" data-id="da6bb3e" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-20ce07a elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="20ce07a"
                                                                data-element_type="widget"
                                                                data-widget_type="icon-box.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="fas fa-hand-holding"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title"><span>2. Get a sample</span></h3>
                                                                            <p class="elementor-icon-box-description">Review the suggested LOGO chosen selectively by our experienced designers.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-557e2f5" data-id="557e2f5" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-872179e elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="872179e"
                                                                data-element_type="widget"
                                                                data-widget_type="icon-box.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="far fa-id-card"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title"><span>3. Brand it to your requirements</span></h3>
                                                                            <p class="elementor-icon-box-description">We will customize the LOGO according to your brand and corporate profile within 5 business days.</p>
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
                class="elementor-section elementor-top-section elementor-element elementor-element-10f059af elementor-section-content-middle elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="10f059af"
                data-element_type="section"
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-39265f76" data-id="39265f76" data-element_type="column" data-settings='{"background_background":"classic"}'>
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div
                                        class="elementor-element elementor-element-610611d7 elementor-widget elementor-widget-image animated fadeInLeft"
                                        data-id="610611d7"
                                        data-element_type="widget"
                                        data-settings='{"_animation":"fadeInLeft"}'
                                        data-widget_type="image.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image">
                                                <img
                                                    width="800"
                                                    height="461"
                                                    src="https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1.jpg"
                                                    data-src="https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1.jpg"
                                                    class="attachment-large size-large lazyloaded"
                                                    alt=""
                                                    data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1.jpg 1024w, https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1-300x173.jpg 300w, https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1-768x443.jpg 768w, https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1-600x346.jpg 600w"
                                                    sizes="(max-width: 800px) 100vw, 800px"
                                                    data-nsfw-filter-status="sfw"
                                                    style="visibility: visible;"
                                                    srcset="
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1.jpg         1024w,
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1-300x173.jpg  300w,
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1-768x443.jpg  768w,
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1-600x346.jpg  600w
                                                    "
                                                />
                                                <noscript>
                                                    <img
                                                        width="800"
                                                        height="461"
                                                        src="https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1.jpg"
                                                        class="attachment-large size-large lazyload"
                                                        alt=""
                                                        srcset="
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1.jpg         1024w,
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1-300x173.jpg  300w,
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1-768x443.jpg  768w,
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1-600x346.jpg  600w
                                                        "
                                                        sizes="(max-width: 800px) 100vw, 800px"
                                                    />
                                                </noscript>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-1bfe7959 elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-hidden-phone elementor-widget elementor-widget-spacer elementor-motion-effects-parent"
                                        data-id="1bfe7959"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute","motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":0.299999999999999988897769753748434595763683319091796875,"sizes":[]},"motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                        data-widget_type="spacer.default"
                                    >
                                        <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: 15px; transform: translateY(var(--translateY));">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3d41ed37" data-id="3d41ed37" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-7a75e019 elementor-widget elementor-widget-heading" data-id="7a75e019" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">What will you get?</h2></div>
                                    </div>
                                    <div class="elementor-element elementor-element-39369181 elementor-widget elementor-widget-text-editor" data-id="39369181" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-text-editor elementor-clearfix">
                                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <section class="vc_cta3-container">
                                                                <div class="vc_general vc_cta3 vc_cta3-style-custom vc_cta3-shape-square vc_cta3-align-left vc_cta3-icon-size-md vc_custom_1590130373866">
                                                                    <div class="vc_cta3_content-container">
                                                                        <div class="vc_cta3-content">
                                                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                                <div class="vc_column-inner">
                                                                                    <div class="wpb_wrapper">
                                                                                        <section class="vc_cta3-container">
                                                                                            <div class="vc_general vc_cta3 vc_cta3-style-custom vc_cta3-shape-square vc_cta3-align-left vc_cta3-icon-size-md vc_custom_1503640966269">
                                                                                                <div class="vc_cta3_content-container">
                                                                                                    <div class="vc_cta3-content">
                                                                                                        <p>
                                                                                                            Let us know your requirements and within 5 business days, we’ll provide you with a striking, professionally designed logo. If
                                                                                                            fine-tuning is required, our designer will make adjustment to perfect the logo and send you a final version for approval.
                                                                                                        </p>
                                                                                                        <p>Once it’s done, we will provide you with:</p>
                                                                                                        <ul class="checkmark-white">
                                                                                                            <li>A PNG file with transparent background for web usage</li>
                                                                                                            <li>A high-resolution PDF, suitable for small to large scale quality printed materials</li>
                                                                                                            <li>A vector-based EPS file for any quality printed materials</li>
                                                                                                            <li>A high-resolution JPEG</li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </section>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-1b85ec9b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="1b85ec9b"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-18d87a8b" data-id="18d87a8b" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-6a50b271 elementor-widget elementor-widget-heading" data-id="6a50b271" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Why Choose us?</h2></div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-6ce53ba8 elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-hidden-phone elementor-widget elementor-widget-spacer elementor-motion-effects-parent"
                                        data-id="6ce53ba8"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute","motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":0.5,"sizes":[]},"motion_fx_blur_effect":"yes","motion_fx_blur_level":{"unit":"px","size":4,"sizes":[]},"motion_fx_blur_range":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_blur_direction":"in-out","motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                        data-widget_type="spacer.default"
                                    >
                                        <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: 25px; --blur: 0px; transform: translateY(var(--translateY)); filter: blur(var(--blur));">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3747be6c elementor-widget elementor-widget-spacer" data-id="3747be6c" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-a1397bb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="a1397bb"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-d81ef28" data-id="d81ef28" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-2b1e16a elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="2b1e16a"
                                                                data-element_type="widget"
                                                                data-widget_type="icon-box.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="fas fa-redo-alt"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title"><span>Unlimited Revision</span></h3>
                                                                            <p class="elementor-icon-box-description">Unlimited Revision makes sure 100% satisfaction.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-08b5edf" data-id="08b5edf" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-9469e56 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="9469e56"
                                                                data-element_type="widget"
                                                                data-widget_type="icon-box.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="fas fa-certificate"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title"><span>Professional</span></h3>
                                                                            <p class="elementor-icon-box-description">Our designers are talented and experienced.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-00f0313" data-id="00f0313" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-ef10a6f elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="ef10a6f"
                                                                data-element_type="widget"
                                                                data-widget_type="icon-box.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="fas fa-user-clock"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title"><span>Fast</span></h3>
                                                                            <p class="elementor-icon-box-description">Ready to be displayed within 5 working days!</p>
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
                class="elementor-section elementor-top-section elementor-element elementor-element-c16541e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="c16541e"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-65cf3657" data-id="65cf3657" data-element_type="column" data-settings='{"background_background":"classic"}'>
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-5f7c4b80 elementor-widget elementor-widget-heading" data-id="5f7c4b80" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><div class="elementor-heading-title elementor-size-default">“</div></div>
                                    </div>
                                    <div class="elementor-element elementor-element-21de74ee elementor-widget elementor-widget-heading" data-id="21de74ee" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">
                                                The people in charge, globally, are maniacs. They are maniacs, and unless we do something about it these people are going to deprive us of a future.
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-4254e04 elementor-widget elementor-widget-heading" data-id="4254e04" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><p class="elementor-heading-title elementor-size-default">Thom Yorke, Musician @ Radiohead</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-1841333b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="1841333b"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-10a290b2" data-id="10a290b2" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-2580e40 elementor-widget elementor-widget-heading" data-id="2580e40" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Do more with us! We provide website design services too</h2></div>
                                    </div>
                                    <div class="elementor-element elementor-element-29612788 elementor-widget elementor-widget-text-editor" data-id="29612788" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-text-editor elementor-clearfix">
                                                <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-middle vc_row-flex" data-vc-full-width="true" data-vc-full-width-init="true">
                                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <section class="vc_cta3-container">
                                                                    <div class="vc_general vc_cta3 vc_cta3-style-custom vc_cta3-shape-square vc_cta3-align-left vc_cta3-icon-size-md vc_cta3-actions-bottom">
                                                                        <div class="vc_cta3_content-container">
                                                                            <div class="vc_cta3-content">
                                                                                <p>
                                                                                    Built by our experts, from <strong>RM 33</strong><br />
                                                                                    Include: Professional hosting, copywriting, stock photos, 12 months of website services and SEO-friendly design
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        </div>
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
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-cef1832 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="cef1832"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4f56ec1a" data-id="4f56ec1a" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-5c36abda elementor-widget elementor-widget-menu-anchor" data-id="5c36abda" data-element_type="widget" data-widget_type="menu-anchor.default">
                                        <div class="elementor-widget-container"><div id="tes" class="elementor-menu-anchor"></div></div>
                                    </div>
                                    <div class="elementor-element elementor-element-527a695c elementor-widget elementor-widget-heading" data-id="527a695c" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Check out the logos of our happy customers!</h2></div>
                                    </div>
                                    <div class="elementor-element elementor-element-e22e6ce elementor-widget elementor-widget-text-editor" data-id="e22e6ce" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-text-editor elementor-clearfix"><p>A logo that is professionally designed is crucial to your business image and brand</p></div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-76d73ff0 elementor-widget elementor-widget-spacer" data-id="76d73ff0" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-7ec296aa elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="7ec296aa"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-5a77c9df" data-id="5a77c9df" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-5efdaeb5 elementor-widget elementor-widget-image" data-id="5efdaeb5" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img
                                                                            class="lazyloaded"
                                                                            src="https://gohat-studio.com/wp-content/uploads/2020/11/l002.jpg"
                                                                            data-src="https://gohat-studio.com/wp-content/uploads/2020/11/l002.jpg"
                                                                            title="l002"
                                                                            alt="l002"
                                                                            data-nsfw-filter-status="sfw"
                                                                            style="visibility: visible;"
                                                                        />
                                                                        <noscript><img class="lazyload" src="https://gohat-studio.com/wp-content/uploads/2020/11/l002.jpg" title="l002" alt="l002" /></noscript>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2761f730" data-id="2761f730" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-4248d32b elementor-widget elementor-widget-image" data-id="4248d32b" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img
                                                                            class="lazyloaded"
                                                                            src="https://gohat-studio.com/wp-content/uploads/2020/11/l003.jpg"
                                                                            data-src="https://gohat-studio.com/wp-content/uploads/2020/11/l003.jpg"
                                                                            title="l003"
                                                                            alt="l003"
                                                                            data-nsfw-filter-status="sfw"
                                                                            style="visibility: visible;"
                                                                        />
                                                                        <noscript><img class="lazyload" src="https://gohat-studio.com/wp-content/uploads/2020/11/l003.jpg" title="l003" alt="l003" /></noscript>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-52743590" data-id="52743590" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-6336c331 elementor-widget elementor-widget-image" data-id="6336c331" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img
                                                                            class="lazyloaded"
                                                                            src="https://gohat-studio.com/wp-content/uploads/2020/11/l006.jpg"
                                                                            data-src="https://gohat-studio.com/wp-content/uploads/2020/11/l006.jpg"
                                                                            title="l006"
                                                                            alt="l006"
                                                                            data-nsfw-filter-status="sfw"
                                                                            style="visibility: visible;"
                                                                        />
                                                                        <noscript><img class="lazyload" src="https://gohat-studio.com/wp-content/uploads/2020/11/l006.jpg" title="l006" alt="l006" /></noscript>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2bc01394" data-id="2bc01394" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-2d0a736a elementor-widget elementor-widget-image" data-id="2d0a736a" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img
                                                                            class="lazyloaded"
                                                                            src="https://gohat-studio.com/wp-content/uploads/2020/11/l005.jpg"
                                                                            data-src="https://gohat-studio.com/wp-content/uploads/2020/11/l005.jpg"
                                                                            title="l005"
                                                                            alt="l005"
                                                                            data-nsfw-filter-status="sfw"
                                                                            style="visibility: visible;"
                                                                        />
                                                                        <noscript><img class="lazyload" src="https://gohat-studio.com/wp-content/uploads/2020/11/l005.jpg" title="l005" alt="l005" /></noscript>
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
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-7fac04c7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="7fac04c7"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-38c8ded7" data-id="38c8ded7" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-5f7f0dfa elementor-widget elementor-widget-image" data-id="5f7f0dfa" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img
                                                                            class="lazyloaded"
                                                                            src="https://gohat-studio.com/wp-content/uploads/2020/11/l004.jpg"
                                                                            data-src="https://gohat-studio.com/wp-content/uploads/2020/11/l004.jpg"
                                                                            title="l004"
                                                                            alt="l004"
                                                                            data-nsfw-filter-status="sfw"
                                                                            style="visibility: visible;"
                                                                        />
                                                                        <noscript><img class="lazyload" src="https://gohat-studio.com/wp-content/uploads/2020/11/l004.jpg" title="l004" alt="l004" /></noscript>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7b6203a3" data-id="7b6203a3" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-19bf3583 elementor-widget elementor-widget-image" data-id="19bf3583" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img
                                                                            class="lazyloaded"
                                                                            src="https://gohat-studio.com/wp-content/uploads/2020/11/l001.jpg"
                                                                            data-src="https://gohat-studio.com/wp-content/uploads/2020/11/l001.jpg"
                                                                            title="l001"
                                                                            alt="l001"
                                                                            data-nsfw-filter-status="sfw"
                                                                            style="visibility: visible;"
                                                                        />
                                                                        <noscript><img class="lazyload" src="https://gohat-studio.com/wp-content/uploads/2020/11/l001.jpg" title="l001" alt="l001" /></noscript>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-43540d52" data-id="43540d52" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-5d68eb7e elementor-widget elementor-widget-image" data-id="5d68eb7e" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img
                                                                            class="lazyloaded"
                                                                            src="https://gohat-studio.com/wp-content/uploads/2020/11/l008.jpg"
                                                                            data-src="https://gohat-studio.com/wp-content/uploads/2020/11/l008.jpg"
                                                                            title="l008"
                                                                            alt="l008"
                                                                            data-nsfw-filter-status="sfw"
                                                                            style="visibility: visible;"
                                                                        />
                                                                        <noscript><img class="lazyload" src="https://gohat-studio.com/wp-content/uploads/2020/11/l008.jpg" title="l008" alt="l008" /></noscript>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-166ef09f" data-id="166ef09f" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-609a051f elementor-widget elementor-widget-image" data-id="609a051f" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img
                                                                            class="lazyloaded"
                                                                            src="https://gohat-studio.com/wp-content/uploads/2020/11/l007.jpg"
                                                                            data-src="https://gohat-studio.com/wp-content/uploads/2020/11/l007.jpg"
                                                                            title="l007"
                                                                            alt="l007"
                                                                            data-nsfw-filter-status="sfw"
                                                                            style="visibility: visible;"
                                                                        />
                                                                        <noscript><img class="lazyload" src="https://gohat-studio.com/wp-content/uploads/2020/11/l007.jpg" title="l007" alt="l007" /></noscript>
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
                class="elementor-section elementor-top-section elementor-element elementor-element-238eb7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="238eb7"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ae6f71b" data-id="ae6f71b" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-7b3b0c26 elementor-widget elementor-widget-heading" data-id="7b3b0c26" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Get Your Brand Visible!</h2></div>
                                    </div>
                                    <div class="elementor-element elementor-element-3758f789 elementor-widget elementor-widget-text-editor" data-id="3758f789" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-text-editor elementor-clearfix"><p>Create a successful digital platform and scale up your business. Start your business today and focus on what matters.</p></div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-7ab9cf19 elementor-align-center elementor-mobile-align-justify elementor-widget elementor-widget-button"
                                        data-id="7ab9cf19"
                                        data-element_type="widget"
                                        data-widget_type="button.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a href="{{route('contact')}}" class="elementor-button-link elementor-button elementor-size-lg elementor-animation-float" role="button">
                                                    <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">Contact Us</span> </span>
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
        </div>
    </div>
</div>
@endsection