@extends('layout')
@section('page-css')
    <link rel="stylesheet" id="elementor-post-328-css" href="{{asset('assets/css/post-328.css')}}" type="text/css" media="all" />
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
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-1943">
                                                                <a class="elementor-sub-item has-submenu" id="sm-16148023639033452-3" aria-haspopup="true" aria-controls="sm-16148023639033452-4" aria-expanded="false">
                                                                    Website
                                                                </a>
                                                                <ul
                                                                    class="sub-menu elementor-nav-menu--dropdown sm-nowrap"
                                                                    id="sm-16148023639033452-4"
                                                                    role="group"
                                                                    aria-hidden="true"
                                                                    aria-labelledby="sm-16148023639033452-3"
                                                                    aria-expanded="false"
                                                                    style="width: auto; min-width: 10em; display: none; max-width: 1000px; top: auto; left: 0px; margin-left: 132.469px; margin-top: -46px;"
                                                                >
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-328 current_page_item menu-item-1927">
                                                                        <a href="{{route('corporate_website')}}" aria-current="page" class="elementor-sub-item elementor-item-active">Corporate Website/App</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1945">
                                                                <a class="elementor-sub-item has-submenu" id="sm-16148023639033452-7" aria-haspopup="true" aria-controls="sm-16148023639033452-8" aria-expanded="false">
                                                                    Design
                                                                </a>
                                                                <ul class="sub-menu elementor-nav-menu--dropdown" id="sm-16148023639033452-8" role="group" aria-hidden="true" aria-labelledby="sm-16148023639033452-7" aria-expanded="false">
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
<div data-elementor-type="wp-page" data-elementor-id="328" class="elementor elementor-328" data-elementor-settings="[]">
    <div class="elementor-inner">
        <div class="elementor-section-wrap">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-2caadfe1 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
                data-id="2caadfe1"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-412e83e0" data-id="412e83e0" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div
                                        class="elementor-element elementor-element-64ef647 elementor-widget elementor-widget-heading elementor-motion-effects-parent"
                                        data-id="64ef647"
                                        data-element_type="widget"
                                        data-settings='{"motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":0.5,"sizes":[]},"motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                        data-widget_type="heading.default"
                                    >
                                        <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: -6.575px; transform: translateY(var(--translateY));">
                                            <h1 class="elementor-heading-title elementor-size-default">Corporate Website/App</h1>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-17d4a8c0 elementor-widget elementor-widget-text-editor" data-id="17d4a8c0" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix">We are an extension of your team</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-557fb018 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="557fb018"
                data-element_type="section"
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3cccf8ea" data-id="3cccf8ea" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-2acee9af elementor-widget elementor-widget-heading" data-id="2acee9af" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Build comprehensive, and purpose-driven identities and experiences.</h2></div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-2a83d29f elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-spacer"
                                        data-id="2a83d29f"
                                        data-element_type="widget"
                                        data-widget_type="spacer.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-89e089a elementor-widget__width-initial elementor-absolute elementor-hidden-tablet elementor-hidden-phone elementor-widget elementor-widget-spacer elementor-motion-effects-parent"
                                        data-id="89e089a"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute","motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_direction":"negative","motion_fx_translateY_speed":{"unit":"px","size":1,"sizes":[]},"motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                        data-widget_type="spacer.default"
                                    >
                                        <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: -23.4px; transform: translateY(var(--translateY));">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-186fec78" data-id="186fec78" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-4d98ac53 elementor-widget elementor-widget-text-editor" data-id="4d98ac53" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-text-editor elementor-clearfix">
                                                <p>
                                                    With more than 100+ websites per month working experience, our team plan and create strategy every single detail to make sure to bring you the best and effective solution for your
                                                    business. We are passionate about your online success.
                                                </p>
                                                <p>Brand identities, digital platforms e-commerce flagships, and branded Capabilities content that bring culture and commerce together.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-37d6cd11 elementor-widget elementor-widget-heading" data-id="37d6cd11" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h4 class="elementor-heading-title elementor-size-default">Your best choice for Website Design and development</h4></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-aeceb1c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="aeceb1c"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9497c5a" data-id="9497c5a" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-93cb195 elementor-widget elementor-widget-heading" data-id="93cb195" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">3 Simple Steps To Have Your Website Done</h2></div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-1eb5583 elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-hidden-phone elementor-widget elementor-widget-spacer elementor-motion-effects-parent"
                                        data-id="1eb5583"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute","motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":0.5,"sizes":[]},"motion_fx_blur_effect":"yes","motion_fx_blur_level":{"unit":"px","size":4,"sizes":[]},"motion_fx_blur_range":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_blur_direction":"in-out","motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                        data-widget_type="spacer.default"
                                    >
                                        <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: 22.285px; --blur: 0.2172px; transform: translateY(var(--translateY)); filter: blur(var(--blur));">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-55486db elementor-widget elementor-widget-spacer" data-id="55486db" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-3fb96ae elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="3fb96ae"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-55b1c47" data-id="55b1c47" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-639e4e1 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="639e4e1"
                                                                data-element_type="widget"
                                                                data-widget_type="icon-box.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="far fa-comments"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title"><span>1. Info Management</span></h3>
                                                                            <p class="elementor-icon-box-description">
                                                                                We will first communicate with our clients, understand more on your problems and products, and what features to be included as a booster to your page. We will
                                                                                further plan your strategy, to ensure that we both are on the same page before proceeding.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-d4bba3c" data-id="d4bba3c" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-145bf94 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="145bf94"
                                                                data-element_type="widget"
                                                                data-widget_type="icon-box.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="fas fa-laptop-code"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title"><span>2. Web Development</span></h3>
                                                                            <p class="elementor-icon-box-description">
                                                                                Our designers will construct the first round of color optimization and layout arrangement, this is to let our clients decide their future style and brand up
                                                                                their identity on an online platform
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3c5c45f" data-id="3c5c45f" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-5a833ce elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="5a833ce"
                                                                data-element_type="widget"
                                                                data-widget_type="icon-box.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="fas fa-window-restore"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title"><span>3. Site Optimize</span></h3>
                                                                            <p class="elementor-icon-box-description">
                                                                                After web development, our web developers will finalise the site with a series of optimisation, ensure your site is clean and optimised in every aspect.
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
                class="elementor-section elementor-top-section elementor-element elementor-element-690a97c7 elementor-section-content-middle elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="690a97c7"
                data-element_type="section"
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5ddb2f9c" data-id="5ddb2f9c" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-2a9c6eb0 elementor-widget elementor-widget-heading" data-id="2a9c6eb0" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Impressive Design</h2></div>
                                    </div>
                                    <div class="elementor-element elementor-element-1d054878 elementor-widget elementor-widget-text-editor" data-id="1d054878" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-text-editor elementor-clearfix">
                                                <p>
                                                    We have a professional web design and web development team to create for you an awesome interface to ensure your visitors have the best user experience, and come back for more (repeat
                                                    visits, repeat sales).
                                                </p>
                                                <p>
                                                    All-in-one service for your digital appearance from Content Strategy, User Experience, Interface Design, Content Design, Information Architecture, User Flow Mapping, Wireframing and
                                                    Prototyping, Visual Design, Responsive Design, UI Kits and Pattern Libraries.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-409accb9" data-id="409accb9" data-element_type="column" data-settings='{"background_background":"classic"}'>
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div
                                        class="elementor-element elementor-element-621f6597 elementor-widget elementor-widget-image animated fadeInRight"
                                        data-id="621f6597"
                                        data-element_type="widget"
                                        data-settings='{"_animation":"fadeInRight"}'
                                        data-widget_type="image.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image">
                                                <img
                                                    width="768"
                                                    height="603"
                                                    src="https://gohat-studio.com/wp-content/uploads/2020/11/001-1-768x603.png"
                                                    data-src="https://gohat-studio.com/wp-content/uploads/2020/11/001-1-768x603.png"
                                                    class="attachment-medium_large size-medium_large lazyloaded"
                                                    alt=""
                                                    data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/001-1-768x603.png 768w, https://gohat-studio.com/wp-content/uploads/2020/11/001-1-300x235.png 300w, https://gohat-studio.com/wp-content/uploads/2020/11/001-1-600x471.png 600w, https://gohat-studio.com/wp-content/uploads/2020/11/001-1.png 854w"
                                                    sizes="(max-width: 768px) 100vw, 768px"
                                                    data-nsfw-filter-status="sfw"
                                                    style="visibility: visible;"
                                                    srcset="
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/001-1-768x603.png 768w,
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/001-1-300x235.png 300w,
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/001-1-600x471.png 600w,
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/001-1.png         854w
                                                    "
                                                />
                                                <noscript>
                                                    <img
                                                        width="768"
                                                        height="603"
                                                        src="https://gohat-studio.com/wp-content/uploads/2020/11/001-1-768x603.png"
                                                        class="attachment-medium_large size-medium_large lazyload"
                                                        alt=""
                                                        srcset="
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/001-1-768x603.png 768w,
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/001-1-300x235.png 300w,
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/001-1-600x471.png 600w,
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/001-1.png         854w
                                                        "
                                                        sizes="(max-width: 768px) 100vw, 768px"
                                                    />
                                                </noscript>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-7d1ac66b elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-hidden-phone elementor-widget elementor-widget-spacer elementor-motion-effects-parent"
                                        data-id="7d1ac66b"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute","motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":0.299999999999999988897769753748434595763683319091796875,"sizes":[]},"motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                        data-widget_type="spacer.default"
                                    >
                                        <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: 15px; transform: translateY(var(--translateY));">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-457f589e elementor-absolute elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-image elementor-motion-effects-parent animated fadeInRight"
                                        data-id="457f589e"
                                        data-element_type="widget"
                                        data-settings='{"motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":0.5,"sizes":[]},"_position":"absolute","_animation":"fadeInRight","_animation_delay":400,"motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                        data-widget_type="image.default"
                                    >
                                        <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: 25px; transform: translateY(var(--translateY));">
                                            <div class="elementor-image">
                                                <img
                                                    width="144"
                                                    height="300"
                                                    src="https://gohat-studio.com/wp-content/uploads/2020/11/phone-noshadow-1-1-144x300.png"
                                                    data-src="https://gohat-studio.com/wp-content/uploads/2020/11/phone-noshadow-1-1-144x300.png"
                                                    class="attachment-medium size-medium lazyloaded"
                                                    alt=""
                                                    data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/phone-noshadow-1-1-144x300.png 144w, https://gohat-studio.com/wp-content/uploads/2020/11/phone-noshadow-1-1.png 459w"
                                                    sizes="(max-width: 144px) 100vw, 144px"
                                                    data-nsfw-filter-status="sfw"
                                                    style="visibility: visible;"
                                                    srcset="https://gohat-studio.com/wp-content/uploads/2020/11/phone-noshadow-1-1-144x300.png 144w, https://gohat-studio.com/wp-content/uploads/2020/11/phone-noshadow-1-1.png 459w"
                                                />
                                                <noscript>
                                                    <img
                                                        width="144"
                                                        height="300"
                                                        src="https://gohat-studio.com/wp-content/uploads/2020/11/phone-noshadow-1-1-144x300.png"
                                                        class="attachment-medium size-medium lazyload"
                                                        alt=""
                                                        srcset="https://gohat-studio.com/wp-content/uploads/2020/11/phone-noshadow-1-1-144x300.png 144w, https://gohat-studio.com/wp-content/uploads/2020/11/phone-noshadow-1-1.png 459w"
                                                        sizes="(max-width: 144px) 100vw, 144px"
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
                class="elementor-section elementor-top-section elementor-element elementor-element-3b0f0d47 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="3b0f0d47"
                data-element_type="section"
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-415f2d37" data-id="415f2d37" data-element_type="column" data-settings='{"background_background":"classic"}'>
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-6a021903 elementor-widget elementor-widget-image" data-id="6a021903" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image">
                                                <img
                                                    width="459"
                                                    height="959"
                                                    src="https://gohat-studio.com/wp-content/uploads/2020/11/gohat-p-1.png"
                                                    data-src="https://gohat-studio.com/wp-content/uploads/2020/11/gohat-p-1.png"
                                                    class="attachment-medium_large size-medium_large lazyloaded"
                                                    alt=""
                                                    data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/gohat-p-1.png 459w, https://gohat-studio.com/wp-content/uploads/2020/11/gohat-p-1-144x300.png 144w"
                                                    sizes="(max-width: 459px) 100vw, 459px"
                                                    data-nsfw-filter-status="sfw"
                                                    style="visibility: visible;"
                                                    srcset="https://gohat-studio.com/wp-content/uploads/2020/11/gohat-p-1.png 459w, https://gohat-studio.com/wp-content/uploads/2020/11/gohat-p-1-144x300.png 144w"
                                                />
                                                <noscript>
                                                    <img
                                                        width="459"
                                                        height="959"
                                                        src="https://gohat-studio.com/wp-content/uploads/2020/11/gohat-p-1.png"
                                                        class="attachment-medium_large size-medium_large lazyload"
                                                        alt=""
                                                        srcset="https://gohat-studio.com/wp-content/uploads/2020/11/gohat-p-1.png 459w, https://gohat-studio.com/wp-content/uploads/2020/11/gohat-p-1-144x300.png 144w"
                                                        sizes="(max-width: 459px) 100vw, 459px"
                                                    />
                                                </noscript>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-610c170c elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-hidden-phone elementor-widget elementor-widget-spacer elementor-motion-effects-parent"
                                        data-id="610c170c"
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
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4ed2d6a4" data-id="4ed2d6a4" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-302bf2e3 elementor-widget elementor-widget-heading" data-id="302bf2e3" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Mobile Compatible</h2></div>
                                    </div>
                                    <div class="elementor-element elementor-element-10631d65 elementor-widget elementor-widget-text-editor" data-id="10631d65" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-text-editor elementor-clearfix">
                                                <p>We build responsive websites that looks great no matter it’s viewed on a computer, mobile or tablet. Delight and impress your visitors with a highly user-friendly website.</p>
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
                class="elementor-section elementor-top-section elementor-element elementor-element-816dc7c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="816dc7c"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4b7088e" data-id="4b7088e" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-4fbba30 elementor-widget elementor-widget-heading" data-id="4fbba30" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Why Choose us?</h2></div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-47bdaa8 elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-hidden-phone elementor-widget elementor-widget-spacer elementor-motion-effects-parent"
                                        data-id="47bdaa8"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute","motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":0.5,"sizes":[]},"motion_fx_blur_effect":"yes","motion_fx_blur_level":{"unit":"px","size":4,"sizes":[]},"motion_fx_blur_range":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_blur_direction":"in-out","motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                        data-widget_type="spacer.default"
                                    >
                                        <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: 25px; --blur: 0px; transform: translateY(var(--translateY)); filter: blur(var(--blur));">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-912f3d8 elementor-widget elementor-widget-spacer" data-id="912f3d8" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-cc114ae elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="cc114ae"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-9bf76f8" data-id="9bf76f8" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-d76fe90 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="d76fe90"
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
                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-ff1c316" data-id="ff1c316" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-1a7ea46 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="1a7ea46"
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
                                                                                We use the fastest and best hosting in Malaysia, allowing you to have an extremely fast website! It won’t take long for customers to drive in.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2dbda79" data-id="2dbda79" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-b92d831 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="b92d831"
                                                                data-element_type="widget"
                                                                data-widget_type="icon-box.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="far fa-window-maximize"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title"><span>Site Optimization</span></h3>
                                                                            <p class="elementor-icon-box-description">
                                                                                After development, we will ensure your documents are optimised by deleting caches from the development. To ensure your sites are optimised completely, we will
                                                                                finalise the development by optimising overall images.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-005bbf2" data-id="005bbf2" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-8157be7 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="8157be7"
                                                                data-element_type="widget"
                                                                data-widget_type="icon-box.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="fas fa-user-clock"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title"><span> Ready In Fastest Time</span></h3>
                                                                            <p class="elementor-icon-box-description">From planning, designing, and developing, we will prepare your websites in the most efficient and quality way.</p>
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
                class="elementor-section elementor-top-section elementor-element elementor-element-0278bab elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="0278bab"
                data-element_type="section"
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d81e844" data-id="d81e844" data-element_type="column" data-settings='{"background_background":"classic"}'>
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-1666cd9 elementor-widget elementor-widget-image" data-id="1666cd9" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image">
                                                <img
                                                    width="768"
                                                    height="512"
                                                    src="https://gohat-studio.com/wp-content/uploads/2020/11/young-business-team-planning-startup-768x512.jpg"
                                                    data-src="https://gohat-studio.com/wp-content/uploads/2020/11/young-business-team-planning-startup-768x512.jpg"
                                                    class="attachment-medium_large size-medium_large lazyloaded"
                                                    alt=""
                                                    data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/young-business-team-planning-startup-768x512.jpg 768w, https://gohat-studio.com/wp-content/uploads/2020/11/young-business-team-planning-startup-300x200.jpg 300w, https://gohat-studio.com/wp-content/uploads/2020/11/young-business-team-planning-startup-1024x682.jpg 1024w, https://gohat-studio.com/wp-content/uploads/2020/11/young-business-team-planning-startup-1536x1024.jpg 1536w, https://gohat-studio.com/wp-content/uploads/2020/11/young-business-team-planning-startup-600x400.jpg 600w, https://gohat-studio.com/wp-content/uploads/2020/11/young-business-team-planning-startup.jpg 2000w"
                                                    sizes="(max-width: 768px) 100vw, 768px"
                                                    data-nsfw-filter-status="sfw"
                                                    style="visibility: visible;"
                                                    srcset="
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/young-business-team-planning-startup-768x512.jpg    768w,
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/young-business-team-planning-startup-300x200.jpg    300w,
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/young-business-team-planning-startup-1024x682.jpg  1024w,
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/young-business-team-planning-startup-1536x1024.jpg 1536w,
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/young-business-team-planning-startup-600x400.jpg    600w,
                                                        https://gohat-studio.com/wp-content/uploads/2020/11/young-business-team-planning-startup.jpg           2000w
                                                    "
                                                />
                                                <noscript>
                                                    <img
                                                        width="768"
                                                        height="512"
                                                        src="https://gohat-studio.com/wp-content/uploads/2020/11/young-business-team-planning-startup-768x512.jpg"
                                                        class="attachment-medium_large size-medium_large lazyload"
                                                        alt=""
                                                        srcset="
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/young-business-team-planning-startup-768x512.jpg    768w,
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/young-business-team-planning-startup-300x200.jpg    300w,
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/young-business-team-planning-startup-1024x682.jpg  1024w,
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/young-business-team-planning-startup-1536x1024.jpg 1536w,
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/young-business-team-planning-startup-600x400.jpg    600w,
                                                            https://gohat-studio.com/wp-content/uploads/2020/11/young-business-team-planning-startup.jpg           2000w
                                                        "
                                                        sizes="(max-width: 768px) 100vw, 768px"
                                                    />
                                                </noscript>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4bb0550" data-id="4bb0550" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-bac543c elementor-widget elementor-widget-heading" data-id="bac543c" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Build Website Is Never Been This Easy</h2></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-1e6d1ed9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="1e6d1ed9"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1e921d4e" data-id="1e921d4e" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-3c321fe4 elementor-widget elementor-widget-heading" data-id="3c321fe4" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Now What About Website Performance?</h2></div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-6620149 elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-hidden-phone elementor-widget elementor-widget-spacer elementor-motion-effects-parent"
                                        data-id="6620149"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute","motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":0.5,"sizes":[]},"motion_fx_blur_effect":"yes","motion_fx_blur_level":{"unit":"px","size":4,"sizes":[]},"motion_fx_blur_range":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_blur_direction":"in-out","motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                        data-widget_type="spacer.default"
                                    >
                                        <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: 25px; --blur: 0px; transform: translateY(var(--translateY)); filter: blur(var(--blur));">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-2073b60d elementor-widget elementor-widget-spacer" data-id="2073b60d" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-166bf8c9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="166bf8c9"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1e38a6b6" data-id="1e38a6b6" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-ea5cac5 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="ea5cac5"
                                                                data-element_type="widget"
                                                                data-widget_type="icon-box.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="far fa-clock"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title"><span>Website Loading Speed 10X Faster</span></h3>
                                                                            <p class="elementor-icon-box-description">Running your website on SSD disk, your website will load faster than normal websites.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7eb44073" data-id="7eb44073" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-33b5c76 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="33b5c76"
                                                                data-element_type="widget"
                                                                data-widget_type="icon-box.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="fas fa-chart-line"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title"><span>Increase Conversion Rate By 80%</span></h3>
                                                                            <p class="elementor-icon-box-description">Amazing and attractive website content with Call-To-Action buttons to boost the website conversion.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-24cfcf4f" data-id="24cfcf4f" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-06c1ab3 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="06c1ab3"
                                                                data-element_type="widget"
                                                                data-widget_type="icon-box.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="fas fa-user-lock"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title"><span>100% Security Protection</span></h3>
                                                                            <p class="elementor-icon-box-description">Your website has a full range of security protection – SSL certification, anti-spam, firewall, and daily backup.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-39a32034" data-id="39a32034" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-d62b9bd elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                data-id="d62b9bd"
                                                                data-element_type="widget"
                                                                data-widget_type="icon-box.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="fab fa-google"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title"><span>Search Engine Friendly</span></h3>
                                                                            <p class="elementor-icon-box-description">Your website is SEO [Search Engine Optimisation] friendly, and rank top on search engines such as Google.</p>
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
                class="elementor-section elementor-top-section elementor-element elementor-element-697bb3bf elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="697bb3bf"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3d5ebb5e" data-id="3d5ebb5e" data-element_type="column" data-settings='{"background_background":"classic"}'>
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-446a117c elementor-widget elementor-widget-heading" data-id="446a117c" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><div class="elementor-heading-title elementor-size-default">“</div></div>
                                    </div>
                                    <div class="elementor-element elementor-element-6f0b1ee2 elementor-widget elementor-widget-heading" data-id="6f0b1ee2" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">
                                                The people in charge, globally, are maniacs. They are maniacs, and unless we do something about it these people are going to deprive us of a future.
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-43dad3b9 elementor-widget elementor-widget-heading" data-id="43dad3b9" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><p class="elementor-heading-title elementor-size-default">Thom Yorke, Musician @ Radiohead</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-3194127d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="3194127d"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-66fe942e" data-id="66fe942e" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-5dadf5f2 elementor-widget elementor-widget-heading" data-id="5dadf5f2" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Looking to build an eCommerce website instead?</h2></div>
                                    </div>
                                    <div class="elementor-element elementor-element-1eae8345 elementor-widget elementor-widget-text-editor" data-id="1eae8345" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-text-editor elementor-clearfix"><p>Checkout out eCommerce plan that could help on your business transformation</p></div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-531c20b2 elementor-align-center elementor-mobile-align-justify elementor-widget elementor-widget-button"
                                        data-id="531c20b2"
                                        data-element_type="widget"
                                        data-widget_type="button.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a href="http://gohat-studio.com/ecommerce/" class="elementor-button-link elementor-button elementor-size-lg elementor-animation-float" role="button">
                                                    <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">See E-Commerce Plan</span> </span>
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
                class="elementor-section elementor-top-section elementor-element elementor-element-476f9f74 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="476f9f74"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7c051615" data-id="7c051615" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-8ac9eda elementor-widget elementor-widget-heading" data-id="8ac9eda" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Our Latest Portfolio</h2></div>
                                    </div>
                                    <div class="elementor-element elementor-element-463f838a elementor-widget elementor-widget-spacer" data-id="463f838a" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-da428b1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="da428b1"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2483d30b" data-id="2483d30b" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-37528338 elementor-widget elementor-widget-image" data-id="37528338" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <a href="https://ecoprocc.com.my/" target="_blank" rel="noopener">
                                                                            <img
                                                                                width="300"
                                                                                height="147"
                                                                                src="https://gohat-studio.com/wp-content/uploads/2020/11/w08-300x147.jpg"
                                                                                data-src="https://gohat-studio.com/wp-content/uploads/2020/11/w08-300x147.jpg"
                                                                                class="elementor-animation-shrink attachment-medium size-medium lazyloaded"
                                                                                alt=""
                                                                                data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/w08-300x147.jpg 300w, https://gohat-studio.com/wp-content/uploads/2020/11/w08-1024x501.jpg 1024w, https://gohat-studio.com/wp-content/uploads/2020/11/w08-768x376.jpg 768w, https://gohat-studio.com/wp-content/uploads/2020/11/w08-1536x752.jpg 1536w, https://gohat-studio.com/wp-content/uploads/2020/11/w08-600x294.jpg 600w, https://gohat-studio.com/wp-content/uploads/2020/11/w08.jpg 1911w"
                                                                                sizes="(max-width: 300px) 100vw, 300px"
                                                                                data-nsfw-filter-status="sfw"
                                                                                style="visibility: visible;"
                                                                                srcset="
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w08-300x147.jpg   300w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w08-1024x501.jpg 1024w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w08-768x376.jpg   768w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w08-1536x752.jpg 1536w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w08-600x294.jpg   600w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w08.jpg          1911w
                                                                                "
                                                                            />
                                                                            <noscript>
                                                                                <img
                                                                                    width="300"
                                                                                    height="147"
                                                                                    src="https://gohat-studio.com/wp-content/uploads/2020/11/w08-300x147.jpg"
                                                                                    class="elementor-animation-shrink attachment-medium size-medium lazyload"
                                                                                    alt=""
                                                                                    srcset="
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w08-300x147.jpg   300w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w08-1024x501.jpg 1024w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w08-768x376.jpg   768w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w08-1536x752.jpg 1536w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w08-600x294.jpg   600w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w08.jpg          1911w
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
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-57a88814" data-id="57a88814" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-41f4c203 elementor-widget elementor-widget-image" data-id="41f4c203" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <a href="https://deluxetravelservice.com/" target="_blank" rel="noopener">
                                                                            <img
                                                                                width="300"
                                                                                height="151"
                                                                                src="https://gohat-studio.com/wp-content/uploads/2020/11/w05-300x151.jpg"
                                                                                data-src="https://gohat-studio.com/wp-content/uploads/2020/11/w05-300x151.jpg"
                                                                                class="elementor-animation-shrink attachment-medium size-medium lazyloaded"
                                                                                alt=""
                                                                                data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/w05-300x151.jpg 300w, https://gohat-studio.com/wp-content/uploads/2020/11/w05-1024x514.jpg 1024w, https://gohat-studio.com/wp-content/uploads/2020/11/w05-768x386.jpg 768w, https://gohat-studio.com/wp-content/uploads/2020/11/w05-1536x771.jpg 1536w, https://gohat-studio.com/wp-content/uploads/2020/11/w05-600x301.jpg 600w, https://gohat-studio.com/wp-content/uploads/2020/11/w05.jpg 1904w"
                                                                                sizes="(max-width: 300px) 100vw, 300px"
                                                                                data-nsfw-filter-status="sfw"
                                                                                style="visibility: visible;"
                                                                                srcset="
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w05-300x151.jpg   300w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w05-1024x514.jpg 1024w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w05-768x386.jpg   768w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w05-1536x771.jpg 1536w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w05-600x301.jpg   600w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w05.jpg          1904w
                                                                                "
                                                                            />
                                                                            <noscript>
                                                                                <img
                                                                                    width="300"
                                                                                    height="151"
                                                                                    src="https://gohat-studio.com/wp-content/uploads/2020/11/w05-300x151.jpg"
                                                                                    class="elementor-animation-shrink attachment-medium size-medium lazyload"
                                                                                    alt=""
                                                                                    srcset="
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w05-300x151.jpg   300w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w05-1024x514.jpg 1024w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w05-768x386.jpg   768w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w05-1536x771.jpg 1536w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w05-600x301.jpg   600w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w05.jpg          1904w
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
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1a86dda3" data-id="1a86dda3" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-e505075 elementor-widget elementor-widget-image" data-id="e505075" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <a href="https://skmagicsoo.com/" target="_blank" rel="noopener">
                                                                            <img
                                                                                width="300"
                                                                                height="153"
                                                                                src="https://gohat-studio.com/wp-content/uploads/2020/11/w06-300x153.jpg"
                                                                                data-src="https://gohat-studio.com/wp-content/uploads/2020/11/w06-300x153.jpg"
                                                                                class="elementor-animation-shrink attachment-medium size-medium lazyloaded"
                                                                                alt=""
                                                                                data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/w06-300x153.jpg 300w, https://gohat-studio.com/wp-content/uploads/2020/11/w06-1024x521.jpg 1024w, https://gohat-studio.com/wp-content/uploads/2020/11/w06-768x391.jpg 768w, https://gohat-studio.com/wp-content/uploads/2020/11/w06-1536x782.jpg 1536w, https://gohat-studio.com/wp-content/uploads/2020/11/w06-600x305.jpg 600w, https://gohat-studio.com/wp-content/uploads/2020/11/w06.jpg 1912w"
                                                                                sizes="(max-width: 300px) 100vw, 300px"
                                                                                data-nsfw-filter-status="sfw"
                                                                                style="visibility: visible;"
                                                                                srcset="
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w06-300x153.jpg   300w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w06-1024x521.jpg 1024w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w06-768x391.jpg   768w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w06-1536x782.jpg 1536w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w06-600x305.jpg   600w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w06.jpg          1912w
                                                                                "
                                                                            />
                                                                            <noscript>
                                                                                <img
                                                                                    width="300"
                                                                                    height="153"
                                                                                    src="https://gohat-studio.com/wp-content/uploads/2020/11/w06-300x153.jpg"
                                                                                    class="elementor-animation-shrink attachment-medium size-medium lazyload"
                                                                                    alt=""
                                                                                    srcset="
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w06-300x153.jpg   300w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w06-1024x521.jpg 1024w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w06-768x391.jpg   768w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w06-1536x782.jpg 1536w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w06-600x305.jpg   600w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w06.jpg          1912w
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
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-14fd836e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="14fd836e"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3149ee34" data-id="3149ee34" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-22e4bb64 elementor-widget elementor-widget-image" data-id="22e4bb64" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <a href="https://syntech-solutions.my/" target="_blank" rel="noopener">
                                                                            <img
                                                                                width="300"
                                                                                height="146"
                                                                                src="https://gohat-studio.com/wp-content/uploads/2020/11/w03-300x146.jpg"
                                                                                data-src="https://gohat-studio.com/wp-content/uploads/2020/11/w03-300x146.jpg"
                                                                                class="elementor-animation-shrink attachment-medium size-medium lazyloaded"
                                                                                alt=""
                                                                                data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/w03-300x146.jpg 300w, https://gohat-studio.com/wp-content/uploads/2020/11/w03-1024x500.jpg 1024w, https://gohat-studio.com/wp-content/uploads/2020/11/w03-768x375.jpg 768w, https://gohat-studio.com/wp-content/uploads/2020/11/w03-1536x750.jpg 1536w, https://gohat-studio.com/wp-content/uploads/2020/11/w03-600x293.jpg 600w, https://gohat-studio.com/wp-content/uploads/2020/11/w03.jpg 1901w"
                                                                                sizes="(max-width: 300px) 100vw, 300px"
                                                                                data-nsfw-filter-status="sfw"
                                                                                style="visibility: visible;"
                                                                                srcset="
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w03-300x146.jpg   300w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w03-1024x500.jpg 1024w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w03-768x375.jpg   768w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w03-1536x750.jpg 1536w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w03-600x293.jpg   600w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w03.jpg          1901w
                                                                                "
                                                                            />
                                                                            <noscript>
                                                                                <img
                                                                                    width="300"
                                                                                    height="146"
                                                                                    src="https://gohat-studio.com/wp-content/uploads/2020/11/w03-300x146.jpg"
                                                                                    class="elementor-animation-shrink attachment-medium size-medium lazyload"
                                                                                    alt=""
                                                                                    srcset="
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w03-300x146.jpg   300w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w03-1024x500.jpg 1024w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w03-768x375.jpg   768w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w03-1536x750.jpg 1536w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w03-600x293.jpg   600w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w03.jpg          1901w
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
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1643193" data-id="1643193" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-2515785c elementor-widget elementor-widget-image" data-id="2515785c" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <a href="https://cocoonpillow.my/" target="_blank" rel="noopener">
                                                                            <img
                                                                                width="300"
                                                                                height="144"
                                                                                src="https://gohat-studio.com/wp-content/uploads/2020/11/w012-300x144.jpg"
                                                                                data-src="https://gohat-studio.com/wp-content/uploads/2020/11/w012-300x144.jpg"
                                                                                class="elementor-animation-shrink attachment-medium size-medium lazyloaded"
                                                                                alt=""
                                                                                data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/w012-300x144.jpg 300w, https://gohat-studio.com/wp-content/uploads/2020/11/w012-1024x492.jpg 1024w, https://gohat-studio.com/wp-content/uploads/2020/11/w012-768x369.jpg 768w, https://gohat-studio.com/wp-content/uploads/2020/11/w012-1536x738.jpg 1536w, https://gohat-studio.com/wp-content/uploads/2020/11/w012-600x288.jpg 600w, https://gohat-studio.com/wp-content/uploads/2020/11/w012.jpg 1900w"
                                                                                sizes="(max-width: 300px) 100vw, 300px"
                                                                                data-nsfw-filter-status="sfw"
                                                                                style="visibility: visible;"
                                                                                srcset="
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w012-300x144.jpg   300w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w012-1024x492.jpg 1024w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w012-768x369.jpg   768w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w012-1536x738.jpg 1536w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w012-600x288.jpg   600w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w012.jpg          1900w
                                                                                "
                                                                            />
                                                                            <noscript>
                                                                                <img
                                                                                    width="300"
                                                                                    height="144"
                                                                                    src="https://gohat-studio.com/wp-content/uploads/2020/11/w012-300x144.jpg"
                                                                                    class="elementor-animation-shrink attachment-medium size-medium lazyload"
                                                                                    alt=""
                                                                                    srcset="
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w012-300x144.jpg   300w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w012-1024x492.jpg 1024w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w012-768x369.jpg   768w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w012-1536x738.jpg 1536w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w012-600x288.jpg   600w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w012.jpg          1900w
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
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-519cbdf6" data-id="519cbdf6" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-5dd0695c elementor-widget elementor-widget-image" data-id="5dd0695c" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <a href="https://finfocusadvisory.com/" target="_blank" rel="noopener">
                                                                            <img
                                                                                width="300"
                                                                                height="147"
                                                                                src="https://gohat-studio.com/wp-content/uploads/2020/11/w02-300x147.jpg"
                                                                                data-src="https://gohat-studio.com/wp-content/uploads/2020/11/w02-300x147.jpg"
                                                                                class="elementor-animation-shrink attachment-medium size-medium lazyloaded"
                                                                                alt=""
                                                                                data-srcset="https://gohat-studio.com/wp-content/uploads/2020/11/w02-300x147.jpg 300w, https://gohat-studio.com/wp-content/uploads/2020/11/w02-1024x502.jpg 1024w, https://gohat-studio.com/wp-content/uploads/2020/11/w02-768x377.jpg 768w, https://gohat-studio.com/wp-content/uploads/2020/11/w02-1536x753.jpg 1536w, https://gohat-studio.com/wp-content/uploads/2020/11/w02-600x294.jpg 600w, https://gohat-studio.com/wp-content/uploads/2020/11/w02.jpg 1904w"
                                                                                sizes="(max-width: 300px) 100vw, 300px"
                                                                                data-nsfw-filter-status="sfw"
                                                                                style="visibility: visible;"
                                                                                srcset="
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w02-300x147.jpg   300w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w02-1024x502.jpg 1024w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w02-768x377.jpg   768w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w02-1536x753.jpg 1536w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w02-600x294.jpg   600w,
                                                                                    https://gohat-studio.com/wp-content/uploads/2020/11/w02.jpg          1904w
                                                                                "
                                                                            />
                                                                            <noscript>
                                                                                <img
                                                                                    width="300"
                                                                                    height="147"
                                                                                    src="https://gohat-studio.com/wp-content/uploads/2020/11/w02-300x147.jpg"
                                                                                    class="elementor-animation-shrink attachment-medium size-medium lazyload"
                                                                                    alt=""
                                                                                    srcset="
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w02-300x147.jpg   300w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w02-1024x502.jpg 1024w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w02-768x377.jpg   768w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w02-1536x753.jpg 1536w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w02-600x294.jpg   600w,
                                                                                        https://gohat-studio.com/wp-content/uploads/2020/11/w02.jpg          1904w
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-4e932068 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="4e932068"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2537fb18" data-id="2537fb18" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-216a9ab8 elementor-widget elementor-widget-heading" data-id="216a9ab8" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Get Your Brand Visible!</h2></div>
                                    </div>
                                    <div class="elementor-element elementor-element-391f5ce7 elementor-widget elementor-widget-text-editor" data-id="391f5ce7" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-text-editor elementor-clearfix"><p>Create a successful digital platform and scale up your business. Start your business today and focus on what matters.</p></div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-7681cd5 elementor-align-center elementor-mobile-align-justify elementor-widget elementor-widget-button"
                                        data-id="7681cd5"
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