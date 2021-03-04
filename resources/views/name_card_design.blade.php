@extends('layout')
@section('page-css')
    <link rel="stylesheet" id="elementor-post-254-css" href="{{asset('assets/css/post-254.css')}}" type="text/css" media="all" />
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
                                                                        <a href="{{route('corporate_website')}}" aria-current="page" class="elementor-sub-item">Corporate Website</a>
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
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1934">
                                                                        <a href="{{route('name_card_design')}}" class="elementor-sub-item">Name Card Design</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1926"><a href="https://gohat-studio.com/contact/" class="elementor-item">Contact</a></li>
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
                                                                        <a href="{{route('corporate_website')}}" class="elementor-sub-item">Corporate Website</a>
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
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1934">
                                                                        <a href="{{route('name_card_design')}}" class="elementor-sub-item">Name Card Design</a>
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
                                                                        <a href="{{route('corporate_website')}}" class="elementor-sub-item">Corporate Website</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1945">
                                                                <a class="elementor-sub-item">Design</a>
                                                                <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1932">
                                                                        <a href="{{route('logo_design')}}" class="elementor-sub-item">Logo Design</a>
                                                                    </li>
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1934">
                                                                        <a href="{{route('name_card_design')}}" class="elementor-sub-item">Name Card Design</a>
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
                                                                        <a href="{{route('corporate_website')}}" class="elementor-sub-item">Corporate Website</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1945">
                                                                <a class="elementor-sub-item">Design</a>
                                                                <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1932">
                                                                        <a href="{{route('logo_design')}}" class="elementor-sub-item">Logo Design</a>
                                                                    </li>
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1934">
                                                                        <a href="{{route('name_card_design')}}" class="elementor-sub-item">Name Card Design</a>
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
<div data-elementor-type="wp-page" data-elementor-id="254" class="elementor elementor-254" data-elementor-settings="[]">
    <div class="elementor-inner">
        <div class="elementor-section-wrap">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-49e4b165 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
                data-id="49e4b165"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b15e47" data-id="b15e47" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div
                                        class="elementor-element elementor-element-387d897b elementor-widget elementor-widget-heading elementor-motion-effects-parent"
                                        data-id="387d897b"
                                        data-element_type="widget"
                                        data-settings='{"motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":0.5,"sizes":[]},"motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                        data-widget_type="heading.default"
                                    >
                                        <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: -25px; transform: translateY(var(--translateY));">
                                            <h1 class="elementor-heading-title elementor-size-default">Name Card Design</h1>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-4e75f2fb elementor-widget elementor-widget-text-editor" data-id="4e75f2fb" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-text-editor elementor-clearfix"><p>Start with a Name card that Matches Your Brand</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-64e3f93e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="64e3f93e"
                data-element_type="section"
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6cd5032d" data-id="6cd5032d" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-4bc1b58d elementor-widget elementor-widget-heading" data-id="4bc1b58d" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Build comprehensive, and purpose-driven identities and experiences.</h2></div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-4fe21695 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-spacer"
                                        data-id="4fe21695"
                                        data-element_type="widget"
                                        data-widget_type="spacer.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-5b5ae13 elementor-widget__width-initial elementor-absolute elementor-hidden-tablet elementor-hidden-phone elementor-widget elementor-widget-spacer elementor-motion-effects-parent"
                                        data-id="5b5ae13"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute","motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_direction":"negative","motion_fx_translateY_speed":{"unit":"px","size":1,"sizes":[]},"motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                        data-widget_type="spacer.default"
                                    >
                                        <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: 50px; transform: translateY(var(--translateY));">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-11ae9096" data-id="11ae9096" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-53adcc38 elementor-widget elementor-widget-text-editor" data-id="53adcc38" data-element_type="widget" data-widget_type="text-editor.default">
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
                                    <div class="elementor-element elementor-element-37443238 elementor-widget elementor-widget-heading" data-id="37443238" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h4 class="elementor-heading-title elementor-size-default">Your Best Choice for the Name card design</h4></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-f7fc10a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="f7fc10a"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7d0c22b4" data-id="7d0c22b4" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-4cab9698 elementor-widget elementor-widget-heading" data-id="4cab9698" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Why You Should Grab a Name card from Us for Your Business</h2></div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-48a0de50 elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-hidden-phone elementor-widget elementor-widget-spacer elementor-motion-effects-parent"
                                        data-id="48a0de50"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute","motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":0.5,"sizes":[]},"motion_fx_blur_effect":"yes","motion_fx_blur_level":{"unit":"px","size":4,"sizes":[]},"motion_fx_blur_range":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_blur_direction":"in-out","motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                        data-widget_type="spacer.default"
                                    >
                                        <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: -25px; --blur: 4px; transform: translateY(var(--translateY)); filter: blur(var(--blur));">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-d70ef13 elementor-widget elementor-widget-spacer" data-id="d70ef13" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-7d58b827 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="7d58b827"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-e038bcd" data-id="e038bcd" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-15eafee elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="15eafee"
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
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1f20b9be" data-id="1f20b9be" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-d1fd0e3 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="d1fd0e3"
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
                                                                            <p class="elementor-icon-box-description">Catchy colours and designs on your name card enable customers to connect with your business.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3bbd5485" data-id="3bbd5485" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-4f372f3 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="4f372f3"
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
                                                                            <p class="elementor-icon-box-description">Name card help your customers remember your business better.</p>
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
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-449918cd elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="449918cd"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3e47c0e2" data-id="3e47c0e2" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-ada05cd elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="ada05cd"
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
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5ae23698" data-id="5ae23698" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-1b8fc00 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="1b8fc00"
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
                                                                            <p class="elementor-icon-box-description">A business name card helps your business stand out from its competitions.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-30a4008c" data-id="30a4008c" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-d716d14 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="d716d14"
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
                class="elementor-section elementor-top-section elementor-element elementor-element-52b21988 elementor-section-content-middle elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="52b21988"
                data-element_type="section"
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7373f3c7" data-id="7373f3c7" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-68a16b61 elementor-widget elementor-widget-heading" data-id="68a16b61" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Stand out, and evoke your brand</h2></div>
                                    </div>
                                    <div class="elementor-element elementor-element-2af3d2d2 elementor-widget elementor-widget-text-editor" data-id="2af3d2d2" data-element_type="widget" data-widget_type="text-editor.default">
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
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7baf280" data-id="7baf280" data-element_type="column" data-settings='{"background_background":"classic"}'>
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div
                                        class="elementor-element elementor-element-259190c7 elementor-widget elementor-widget-image animated fadeInRight"
                                        data-id="259190c7"
                                        data-element_type="widget"
                                        data-settings='{"_animation":"fadeInRight"}'
                                        data-widget_type="image.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image">
                                                <img
                                                    width="768"
                                                    height="512"
                                                    src="https://gohat-studio.com/wp-content/uploads/2020/11/designer-at-work-in-office-1024x682-1-768x512.jpg"
                                                    data-src="https://gohat-studio.com/wp-content/uploads/2020/11/designer-at-work-in-office-1024x682-1-768x512.jpg"
                                                    class="attachment-medium_large size-medium_large lazyloaded"
                                                    alt=""
                                                    data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/designer-at-work-in-office-1024x682-1-768x512.jpg 768w, https://gohat-studio.com/wp-content/uploads/2020/11/designer-at-work-in-office-1024x682-1-300x200.jpg 300w, https://gohat-studio.com/wp-content/uploads/2020/11/designer-at-work-in-office-1024x682-1-600x400.jpg 600w, https://gohat-studio.com/wp-content/uploads/2020/11/designer-at-work-in-office-1024x682-1.jpg 1024w"
                                                    sizes="(max-width: 768px) 100vw, 768px"
                                                    data-nsfw-filter-status="sfw"
                                                    style="visibility: visible;"
                                                    srcset="
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/designer-at-work-in-office-1024x682-1-768x512.jpg  768w,
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/designer-at-work-in-office-1024x682-1-300x200.jpg  300w,
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/designer-at-work-in-office-1024x682-1-600x400.jpg  600w,
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/designer-at-work-in-office-1024x682-1.jpg         1024w
                                                    "
                                                />
                                                <noscript>
                                                    <img
                                                        width="768"
                                                        height="512"
                                                        src="https://gohat-studio.com/wp-content/uploads/2020/11/designer-at-work-in-office-1024x682-1-768x512.jpg"
                                                        class="attachment-medium_large size-medium_large lazyload"
                                                        alt=""
                                                        srcset="
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/designer-at-work-in-office-1024x682-1-768x512.jpg  768w,
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/designer-at-work-in-office-1024x682-1-300x200.jpg  300w,
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/designer-at-work-in-office-1024x682-1-600x400.jpg  600w,
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/designer-at-work-in-office-1024x682-1.jpg         1024w
                                                        "
                                                        sizes="(max-width: 768px) 100vw, 768px"
                                                    />
                                                </noscript>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-57e8a939 elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-hidden-phone elementor-widget elementor-widget-spacer elementor-motion-effects-parent"
                                        data-id="57e8a939"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute","motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":0.299999999999999988897769753748434595763683319091796875,"sizes":[]},"motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                        data-widget_type="spacer.default"
                                    >
                                        <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: -15px; transform: translateY(var(--translateY));">
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
                class="elementor-section elementor-top-section elementor-element elementor-element-7b01d1af elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="7b01d1af"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8160882" data-id="8160882" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-6292bf8e elementor-widget elementor-widget-heading" data-id="6292bf8e" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">3 Simple Steps To Have Your Name Card Done</h2></div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-4e841814 elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-hidden-phone elementor-widget elementor-widget-spacer elementor-motion-effects-parent"
                                        data-id="4e841814"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute","motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":0.5,"sizes":[]},"motion_fx_blur_effect":"yes","motion_fx_blur_level":{"unit":"px","size":4,"sizes":[]},"motion_fx_blur_range":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_blur_direction":"in-out","motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                        data-widget_type="spacer.default"
                                    >
                                        <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: -25px; --blur: 4px; transform: translateY(var(--translateY)); filter: blur(var(--blur));">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-5fb09c30 elementor-widget elementor-widget-spacer" data-id="5fb09c30" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-3a6595e8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="3a6595e8"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6b27aac" data-id="6b27aac" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-5c04961 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="5c04961"
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
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2b716657" data-id="2b716657" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-a607650 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="a607650"
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
                                                                            <p class="elementor-icon-box-description">Review the suggested Name card chosen selectively by our experienced designers.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-13cb468a" data-id="13cb468a" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-8dfee3a elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="8dfee3a"
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
                                                                            <p class="elementor-icon-box-description">We will customize the Name card according to your brand and corporate profile within 5 business days.</p>
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
                class="elementor-section elementor-top-section elementor-element elementor-element-42682e7b elementor-section-content-middle elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="42682e7b"
                data-element_type="section"
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-13aa2a2c" data-id="13aa2a2c" data-element_type="column" data-settings='{"background_background":"classic"}'>
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div
                                        class="elementor-element elementor-element-400ff3f7 elementor-widget elementor-widget-image animated fadeInLeft"
                                        data-id="400ff3f7"
                                        data-element_type="widget"
                                        data-settings='{"_animation":"fadeInLeft"}'
                                        data-widget_type="image.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image">
                                                <img
                                                    width="768"
                                                    height="443"
                                                    src="https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1-768x443.jpg"
                                                    data-src="https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1-768x443.jpg"
                                                    class="attachment-medium_large size-medium_large lazyloaded"
                                                    alt=""
                                                    data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1-768x443.jpg 768w, https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1-300x173.jpg 300w, https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1-600x346.jpg 600w, https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1.jpg 1024w"
                                                    sizes="(max-width: 768px) 100vw, 768px"
                                                    data-nsfw-filter-status="sfw"
                                                    style="visibility: visible;"
                                                    srcset="
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1-768x443.jpg  768w,
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1-300x173.jpg  300w,
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1-600x346.jpg  600w,
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1.jpg         1024w
                                                    "
                                                />
                                                <noscript>
                                                    <img
                                                        width="768"
                                                        height="443"
                                                        src="https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1-768x443.jpg"
                                                        class="attachment-medium_large size-medium_large lazyload"
                                                        alt=""
                                                        srcset="
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1-768x443.jpg  768w,
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1-300x173.jpg  300w,
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1-600x346.jpg  600w,
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/designers-are-working-on-a-drawing-tablet-and-laptop-1024x590-1.jpg         1024w
                                                        "
                                                        sizes="(max-width: 768px) 100vw, 768px"
                                                    />
                                                </noscript>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-4d1a51c5 elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-hidden-phone elementor-widget elementor-widget-spacer elementor-motion-effects-parent"
                                        data-id="4d1a51c5"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute","motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":0.299999999999999988897769753748434595763683319091796875,"sizes":[]},"motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                        data-widget_type="spacer.default"
                                    >
                                        <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: -15px; transform: translateY(var(--translateY));">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-48be9efd" data-id="48be9efd" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-49447578 elementor-widget elementor-widget-heading" data-id="49447578" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">What will you get?</h2></div>
                                    </div>
                                    <div class="elementor-element elementor-element-c898cd7 elementor-widget elementor-widget-text-editor" data-id="c898cd7" data-element_type="widget" data-widget_type="text-editor.default">
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
                                                                                                            Let us know your requirements and within 5 business days, we’ll provide you with a striking, professionally designed Name card. If
                                                                                                            fine-tuning is required, our designer will make adjustments to perfect the Name card and send you a final version for approval.
                                                                                                        </p>
                                                                                                        <p>Once it’s done, we will provide you with:</p>
                                                                                                        <ul class="checkmark-white">
                                                                                                            <li>2 Slides 2 Concepts get 1 at the end</li>
                                                                                                            <li>Print-ready Name card files</li>
                                                                                                            <li>Name card Source Files</li>
                                                                                                            <li>Unlimited Revision</li>
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
                class="elementor-section elementor-top-section elementor-element elementor-element-845d0a5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="845d0a5"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-28dd4220" data-id="28dd4220" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-7baf826b elementor-widget elementor-widget-heading" data-id="7baf826b" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Why Choose us?</h2></div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-f72e08b elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-hidden-phone elementor-widget elementor-widget-spacer elementor-motion-effects-parent"
                                        data-id="f72e08b"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute","motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":0.5,"sizes":[]},"motion_fx_blur_effect":"yes","motion_fx_blur_level":{"unit":"px","size":4,"sizes":[]},"motion_fx_blur_range":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_blur_direction":"in-out","motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                        data-widget_type="spacer.default"
                                    >
                                        <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: -25px; --blur: 4px; transform: translateY(var(--translateY)); filter: blur(var(--blur));">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-23e5df8e elementor-widget elementor-widget-spacer" data-id="23e5df8e" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-71a9f628 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="71a9f628"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-700fa4c3" data-id="700fa4c3" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-01d2719 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="01d2719"
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
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9c6a9c8" data-id="9c6a9c8" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-bcafa01 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="bcafa01"
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
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1ead2d30" data-id="1ead2d30" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-990c58d elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="990c58d"
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
                class="elementor-section elementor-top-section elementor-element elementor-element-5f7ef0b3 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="5f7ef0b3"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-696021bc" data-id="696021bc" data-element_type="column" data-settings='{"background_background":"classic"}'>
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-b595b7f elementor-widget elementor-widget-heading" data-id="b595b7f" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><div class="elementor-heading-title elementor-size-default">“</div></div>
                                    </div>
                                    <div class="elementor-element elementor-element-3723fb67 elementor-widget elementor-widget-heading" data-id="3723fb67" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">
                                                The people in charge, globally, are maniacs. They are maniacs, and unless we do something about it these people are going to deprive us of a future.
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-1567ad93 elementor-widget elementor-widget-heading" data-id="1567ad93" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><p class="elementor-heading-title elementor-size-default">Thom Yorke, Musician @ Radiohead</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-2d571fc5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="2d571fc5"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1009f883" data-id="1009f883" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-74f0da9a elementor-widget elementor-widget-menu-anchor" data-id="74f0da9a" data-element_type="widget" data-widget_type="menu-anchor.default">
                                        <div class="elementor-widget-container"><div id="tes" class="elementor-menu-anchor"></div></div>
                                    </div>
                                    <div class="elementor-element elementor-element-27d4532b elementor-widget elementor-widget-heading" data-id="27d4532b" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Check out the Name Card of our happy customers!</h2></div>
                                    </div>
                                    <div class="elementor-element elementor-element-36040e1c elementor-widget elementor-widget-text-editor" data-id="36040e1c" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-text-editor elementor-clearfix"><p>A Name card that is professionally designed is crucial to your business image and brand</p></div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-9b6e796 elementor-widget elementor-widget-spacer" data-id="9b6e796" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-1c2ad71e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="1c2ad71e"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b0222b8" data-id="b0222b8" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-1ca71e15 elementor-widget elementor-widget-image" data-id="1ca71e15" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img
                                                                            width="300"
                                                                            height="198"
                                                                            src="https://gohat-studio.com/wp-content/uploads/2020/11/05-1-300x198.jpg"
                                                                            data-src="https://gohat-studio.com/wp-content/uploads/2020/11/05-1-300x198.jpg"
                                                                            class="attachment-medium size-medium lazyloaded"
                                                                            alt=""
                                                                            data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/05-1-300x198.jpg 300w, https://gohat-studio.com/wp-content/uploads/2020/11/05-1-16x12.jpg 16w, https://gohat-studio.com/wp-content/uploads/2020/11/05-1.jpg 340w"
                                                                            sizes="(max-width: 300px) 100vw, 300px"
                                                                            data-nsfw-filter-status="sfw"
                                                                            style="visibility: visible;"
                                                                            srcset="
                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/05-1-300x198.jpg 300w,
                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/05-1-16x12.jpg    16w,
                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/05-1.jpg         340w
                                                                            "
                                                                        />
                                                                        <noscript>
                                                                            <img
                                                                                width="300"
                                                                                height="198"
                                                                                src="https://gohat-studio.com/wp-content/uploads/2020/11/05-1-300x198.jpg"
                                                                                class="attachment-medium size-medium lazyload"
                                                                                alt=""
                                                                                srcset="
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/05-1-300x198.jpg 300w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/05-1-16x12.jpg    16w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/05-1.jpg         340w
                                                                                "
                                                                                sizes="(max-width: 300px) 100vw, 300px"
                                                                            />
                                                                        </noscript>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3e5e268" data-id="3e5e268" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-11179642 elementor-widget elementor-widget-image" data-id="11179642" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img
                                                                            width="300"
                                                                            height="198"
                                                                            src="https://gohat-studio.com/wp-content/uploads/2020/11/001-300x198.jpg"
                                                                            data-src="https://gohat-studio.com/wp-content/uploads/2020/11/001-300x198.jpg"
                                                                            class="attachment-medium size-medium lazyloaded"
                                                                            alt=""
                                                                            data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/001-300x198.jpg 300w, https://gohat-studio.com/wp-content/uploads/2020/11/001-16x12.jpg 16w, https://gohat-studio.com/wp-content/uploads/2020/11/001.jpg 340w"
                                                                            sizes="(max-width: 300px) 100vw, 300px"
                                                                            data-nsfw-filter-status="sfw"
                                                                            style="visibility: visible;"
                                                                            srcset="
                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/001-300x198.jpg 300w,
                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/001-16x12.jpg    16w,
                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/001.jpg         340w
                                                                            "
                                                                        />
                                                                        <noscript>
                                                                            <img
                                                                                width="300"
                                                                                height="198"
                                                                                src="https://gohat-studio.com/wp-content/uploads/2020/11/001-300x198.jpg"
                                                                                class="attachment-medium size-medium lazyload"
                                                                                alt=""
                                                                                srcset="
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/001-300x198.jpg 300w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/001-16x12.jpg    16w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/001.jpg         340w
                                                                                "
                                                                                sizes="(max-width: 300px) 100vw, 300px"
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
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-9e2435c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="9e2435c"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-dbdffe9" data-id="dbdffe9" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-3104ee6f elementor-widget elementor-widget-image" data-id="3104ee6f" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img
                                                                            width="300"
                                                                            height="198"
                                                                            src="https://gohat-studio.com/wp-content/uploads/2020/11/n002-300x198.jpg"
                                                                            data-src="https://gohat-studio.com/wp-content/uploads/2020/11/n002-300x198.jpg"
                                                                            class="attachment-medium size-medium lazyloaded"
                                                                            alt=""
                                                                            data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/n002-300x198.jpg 300w, https://gohat-studio.com/wp-content/uploads/2020/11/n002-16x12.jpg 16w, https://gohat-studio.com/wp-content/uploads/2020/11/n002.jpg 340w"
                                                                            sizes="(max-width: 300px) 100vw, 300px"
                                                                            data-nsfw-filter-status="sfw"
                                                                            style="visibility: visible;"
                                                                            srcset="
                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/n002-300x198.jpg 300w,
                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/n002-16x12.jpg    16w,
                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/n002.jpg         340w
                                                                            "
                                                                        />
                                                                        <noscript>
                                                                            <img
                                                                                width="300"
                                                                                height="198"
                                                                                src="https://gohat-studio.com/wp-content/uploads/2020/11/n002-300x198.jpg"
                                                                                class="attachment-medium size-medium lazyload"
                                                                                alt=""
                                                                                srcset="
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/n002-300x198.jpg 300w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/n002-16x12.jpg    16w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/n002.jpg         340w
                                                                                "
                                                                                sizes="(max-width: 300px) 100vw, 300px"
                                                                            />
                                                                        </noscript>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3e3ba45b" data-id="3e3ba45b" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-5dc3827e elementor-widget elementor-widget-image" data-id="5dc3827e" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img
                                                                            width="300"
                                                                            height="198"
                                                                            src="https://gohat-studio.com/wp-content/uploads/2020/11/n003-300x198.jpg"
                                                                            data-src="https://gohat-studio.com/wp-content/uploads/2020/11/n003-300x198.jpg"
                                                                            class="attachment-medium size-medium lazyloaded"
                                                                            alt=""
                                                                            data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/n003-300x198.jpg 300w, https://gohat-studio.com/wp-content/uploads/2020/11/n003-16x12.jpg 16w, https://gohat-studio.com/wp-content/uploads/2020/11/n003.jpg 340w"
                                                                            sizes="(max-width: 300px) 100vw, 300px"
                                                                            data-nsfw-filter-status="sfw"
                                                                            style="visibility: visible;"
                                                                            srcset="
                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/n003-300x198.jpg 300w,
                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/n003-16x12.jpg    16w,
                                                                                https://gohat-studio.com/wp-content/uploads/2020/11/n003.jpg         340w
                                                                            "
                                                                        />
                                                                        <noscript>
                                                                            <img
                                                                                width="300"
                                                                                height="198"
                                                                                src="https://gohat-studio.com/wp-content/uploads/2020/11/n003-300x198.jpg"
                                                                                class="attachment-medium size-medium lazyload"
                                                                                alt=""
                                                                                srcset="
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/n003-300x198.jpg 300w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/n003-16x12.jpg    16w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/n003.jpg         340w
                                                                                "
                                                                                sizes="(max-width: 300px) 100vw, 300px"
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-5506f0d8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="5506f0d8"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a9417d5" data-id="a9417d5" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-8ae892b elementor-widget elementor-widget-heading" data-id="8ae892b" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Do more with us! We provide website design services too</h2></div>
                                    </div>
                                    <div class="elementor-element elementor-element-407d9144 elementor-widget elementor-widget-text-editor" data-id="407d9144" data-element_type="widget" data-widget_type="text-editor.default">
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
                                    <div
                                        class="elementor-element elementor-element-25ad12cc elementor-align-center elementor-mobile-align-justify elementor-widget elementor-widget-button"
                                        data-id="25ad12cc"
                                        data-element_type="widget"
                                        data-widget_type="button.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a href="http://gohat-studio.com/website-design-and-development/" class="elementor-button-link elementor-button elementor-size-lg elementor-animation-float" role="button">
                                                    <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">See Corporate Website Plan</span> </span>
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
                class="elementor-section elementor-top-section elementor-element elementor-element-4634a9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="4634a9"
                data-element_type="section"
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5ad591e2" data-id="5ad591e2" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-229a8f6b elementor-widget elementor-widget-heading" data-id="229a8f6b" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h4 class="elementor-heading-title elementor-size-default">Choose your plan</h4></div>
                                    </div>
                                    <div class="elementor-element elementor-element-6f18ecf0 elementor-widget elementor-widget-spacer" data-id="6f18ecf0" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-1034aae9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="1034aae9"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-95f254e" data-id="95f254e" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-da55685 elementor-widget elementor-widget-price-table"
                                                                data-id="da55685"
                                                                data-element_type="widget"
                                                                data-widget_type="price-table.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-price-table">
                                                                        <div class="elementor-price-table__header"><h3 class="elementor-price-table__heading">Intern Designer</h3></div>
                                                                        <div class="elementor-price-table__price">
                                                                            <div class="elementor-price-table__original-price elementor-typo-excluded">RM300</div>
                                                                            <span class="elementor-price-table__currency elementor-currency--before">RM</span> <span class="elementor-price-table__integer-part">98</span>
                                                                            <span class="elementor-price-table__period elementor-typo-excluded">Monthly</span>
                                                                        </div>
                                                                        <ul class="elementor-price-table__features-list">
                                                                            <li class="elementor-repeater-item-7a66f2d">
                                                                                <div class="elementor-price-table__feature-inner"><i aria-hidden="true" class="far fa-check-circle"></i> <span> Intern Designer </span></div>
                                                                            </li>
                                                                            <li class="elementor-repeater-item-b69df5d">
                                                                                <div class="elementor-price-table__feature-inner"><i aria-hidden="true" class="far fa-check-circle"></i> <span> Unlimited Revision </span></div>
                                                                            </li>
                                                                            <li class="elementor-repeater-item-4b2142e">
                                                                                <div class="elementor-price-table__feature-inner">
                                                                                    <i aria-hidden="true" class="far fa-check-circle"></i> <span> 2 Slides 2 Concepts get 1 at the end </span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="elementor-repeater-item-63d0854">
                                                                                <div class="elementor-price-table__feature-inner"><i aria-hidden="true" class="far fa-check-circle"></i> <span> Print ready </span></div>
                                                                            </li>
                                                                            <li class="elementor-repeater-item-57bf639">
                                                                                <div class="elementor-price-table__feature-inner"><i aria-hidden="true" class="far fa-check-circle"></i> <span> Source Files </span></div>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="elementor-price-table__footer">
                                                                            <a
                                                                                class="elementor-price-table__button elementor-button elementor-size-md"
                                                                                href="https://api.whatsapp.com/send/?phone=60172142431&amp;text=Hi,%20I%27m%20interest%20with%20your%20Name%20card%20Design%20(Instern%20Designer)"
                                                                                target="_blank"
                                                                                rel="noopener"
                                                                            >
                                                                                CHOOSE
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-755a3fa9" data-id="755a3fa9" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-6913313 elementor-widget elementor-widget-price-table"
                                                                data-id="6913313"
                                                                data-element_type="widget"
                                                                data-widget_type="price-table.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-price-table">
                                                                        <div class="elementor-price-table__header"><h3 class="elementor-price-table__heading">Senior Designer</h3></div>
                                                                        <div class="elementor-price-table__price">
                                                                            <div class="elementor-price-table__original-price elementor-typo-excluded">RM500</div>
                                                                            <span class="elementor-price-table__currency elementor-currency--before">RM</span> <span class="elementor-price-table__integer-part">198</span>
                                                                            <span class="elementor-price-table__period elementor-typo-excluded">Monthly</span>
                                                                        </div>
                                                                        <ul class="elementor-price-table__features-list">
                                                                            <li class="elementor-repeater-item-7a66f2d">
                                                                                <div class="elementor-price-table__feature-inner"><i aria-hidden="true" class="far fa-check-circle"></i> <span> Senior Designer </span></div>
                                                                            </li>
                                                                            <li class="elementor-repeater-item-b69df5d">
                                                                                <div class="elementor-price-table__feature-inner"><i aria-hidden="true" class="far fa-check-circle"></i> <span> Unlimited Revision </span></div>
                                                                            </li>
                                                                            <li class="elementor-repeater-item-4b2142e">
                                                                                <div class="elementor-price-table__feature-inner">
                                                                                    <i aria-hidden="true" class="far fa-check-circle"></i> <span> 2 Slides 2 Concepts get 1 at the end </span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="elementor-repeater-item-63d0854">
                                                                                <div class="elementor-price-table__feature-inner"><i aria-hidden="true" class="far fa-check-circle"></i> <span> Print ready </span></div>
                                                                            </li>
                                                                            <li class="elementor-repeater-item-57bf639">
                                                                                <div class="elementor-price-table__feature-inner"><i aria-hidden="true" class="far fa-check-circle"></i> <span> Source Files </span></div>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="elementor-price-table__footer">
                                                                            <a
                                                                                class="elementor-price-table__button elementor-button elementor-size-md"
                                                                                href="https://api.whatsapp.com/send/?phone=60172142431&amp;text=Hi,%20I%27m%20interest%20with%20your%20Name%20card%20Design%20(Senior%20Designer)"
                                                                                target="_blank"
                                                                                rel="noopener"
                                                                            >
                                                                                CHOOSE
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-price-table__ribbon"><div class="elementor-price-table__ribbon-inner">Popular</div></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7331925d" data-id="7331925d" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-dbfcc75 elementor-widget elementor-widget-price-table"
                                                                data-id="dbfcc75"
                                                                data-element_type="widget"
                                                                data-widget_type="price-table.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-price-table">
                                                                        <div class="elementor-price-table__header"><h3 class="elementor-price-table__heading">Expert Designer</h3></div>
                                                                        <div class="elementor-price-table__price">
                                                                            <div class="elementor-price-table__original-price elementor-typo-excluded">RM900</div>
                                                                            <span class="elementor-price-table__currency elementor-currency--before">RM</span> <span class="elementor-price-table__integer-part">398</span>
                                                                            <span class="elementor-price-table__period elementor-typo-excluded">Monthly</span>
                                                                        </div>
                                                                        <ul class="elementor-price-table__features-list">
                                                                            <li class="elementor-repeater-item-7a66f2d">
                                                                                <div class="elementor-price-table__feature-inner"><i aria-hidden="true" class="far fa-check-circle"></i> <span> Expert Designer </span></div>
                                                                            </li>
                                                                            <li class="elementor-repeater-item-b69df5d">
                                                                                <div class="elementor-price-table__feature-inner"><i aria-hidden="true" class="far fa-check-circle"></i> <span> Unlimited Revision </span></div>
                                                                            </li>
                                                                            <li class="elementor-repeater-item-4b2142e">
                                                                                <div class="elementor-price-table__feature-inner">
                                                                                    <i aria-hidden="true" class="far fa-check-circle"></i> <span> 2 Slides 2 Concepts get 1 at the end </span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="elementor-repeater-item-63d0854">
                                                                                <div class="elementor-price-table__feature-inner"><i aria-hidden="true" class="far fa-check-circle"></i> <span> Print ready </span></div>
                                                                            </li>
                                                                            <li class="elementor-repeater-item-57bf639">
                                                                                <div class="elementor-price-table__feature-inner"><i aria-hidden="true" class="far fa-check-circle"></i> <span> Source Files </span></div>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="elementor-price-table__footer">
                                                                            <a
                                                                                class="elementor-price-table__button elementor-button elementor-size-md"
                                                                                href="https://api.whatsapp.com/send/?phone=60172142431&amp;text=Hi,%20I%27m%20interest%20with%20your%20Name%20card%20Design%20(Expert%20Designer)"
                                                                                target="_blank"
                                                                                rel="noopener"
                                                                            >
                                                                                CHOOSE
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
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-22d7694c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="22d7694c"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e2cdbb3" data-id="e2cdbb3" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-3d526f54 elementor-widget elementor-widget-heading" data-id="3d526f54" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Get Your Brand Visible!</h2></div>
                                    </div>
                                    <div class="elementor-element elementor-element-449dd876 elementor-widget elementor-widget-text-editor" data-id="449dd876" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-text-editor elementor-clearfix"><p>Create a successful digital platform and scale up your business. Start your business today and focus on what matters.</p></div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-46f312f7 elementor-align-center elementor-mobile-align-justify elementor-widget elementor-widget-button"
                                        data-id="46f312f7"
                                        data-element_type="widget"
                                        data-widget_type="button.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a href="http://gohat-studio.com/contact/" class="elementor-button-link elementor-button elementor-size-lg elementor-animation-float" role="button">
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