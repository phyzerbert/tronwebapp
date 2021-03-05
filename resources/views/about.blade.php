@extends('layout')
@section('page-css')
    <link rel="stylesheet" id="elementor-post-17-css" href="{{asset('assets/css/post-17.css')}}" type="text/css" media="all" />
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
                                                <ul id="menu-1-5743b6f" class="elementor-nav-menu" data-smartmenus-id="16147985651863962">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1921"><a href="{{route('index')}}" class="elementor-item">Home</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-17 current_page_item menu-item-1923">
                                                        <a href="{{route('about')}}" aria-current="page" class="elementor-item elementor-item-active">About</a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1942">
                                                        <a class="elementor-item has-submenu" id="sm-16147985651863962-1" aria-haspopup="true" aria-controls="sm-16147985651863962-2" aria-expanded="false">
                                                            Service
                                                        </a>
                                                        <ul class="sub-menu elementor-nav-menu--dropdown" id="sm-16147985651863962-2" role="group" aria-hidden="true" aria-labelledby="sm-16147985651863962-1" aria-expanded="false">
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1943">
                                                                <a class="elementor-sub-item has-submenu" id="sm-16147985651863962-3" aria-haspopup="true" aria-controls="sm-16147985651863962-4" aria-expanded="false">
                                                                    Website
                                                                </a>
                                                                <ul class="sub-menu elementor-nav-menu--dropdown" id="sm-16147985651863962-4" role="group" aria-hidden="true" aria-labelledby="sm-16147985651863962-3" aria-expanded="false">
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1927">
                                                                        <a href="{{route('corporate_website')}}" class="elementor-sub-item">Corporate Website/App</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1945">
                                                                <a class="elementor-sub-item has-submenu" id="sm-16147985651863962-7" aria-haspopup="true" aria-controls="sm-16147985651863962-8" aria-expanded="false">
                                                                    Design
                                                                </a>
                                                                <ul class="sub-menu elementor-nav-menu--dropdown" id="sm-16147985651863962-8" role="group" aria-hidden="true" aria-labelledby="sm-16147985651863962-7" aria-expanded="false">
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
    <div data-elementor-type="wp-page" data-elementor-id="17" class="elementor elementor-17" data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-7cc835a0 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
                    data-id="7cc835a0"
                    data-element_type="section"
                    data-settings='{"background_background":"classic"}'
                >
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-39022b3c" data-id="39022b3c" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div
                                            class="elementor-element elementor-element-63e46585 elementor-widget elementor-widget-heading elementor-motion-effects-parent"
                                            data-id="63e46585"
                                            data-element_type="widget"
                                            data-settings='{"motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":0.5,"sizes":[]},"motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                            data-widget_type="heading.default"
                                        >
                                            <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: -25px; transform: translateY(var(--translateY));">
                                                <h1 class="elementor-heading-title elementor-size-default">About Us</h1>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3c553ce9 elementor-widget elementor-widget-text-editor" data-id="3c553ce9" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix">We are creative digital studio</div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-c4064d0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="c4064d0"
                    data-element_type="section"
                    data-settings='{"background_background":"classic"}'
                >
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-313a8dd" data-id="313a8dd" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-a2000d elementor-widget elementor-widget-heading" data-id="a2000d" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">We are passionate about your online success.</h2></div>
                                        </div>
                                        <div class="elementor-element elementor-element-435d530 elementor-widget elementor-widget-text-editor" data-id="435d530" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p>
                                                        <strong>TRON Marketing (PG0495501-M)</strong> is your trusted online source for the web’s best and most innovative
                                                        Website design and Web/App development solutions. We offer real world website solutions that can increase your company’s online presence and offer you the chance to find targeted customers and make more sales. Our wide array of web services was
                                                        designed to ensure your continued success and positioning in the global market.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-588181cc" data-id="588181cc" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-5983dc95 elementor-widget elementor-widget-text-editor" data-id="5983dc95" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p>
                                                        Our dedicated team of ambitious and hardworking people will become your trusted colleagues, who’s passion is to make your business or project a success! We aren’t happy with our
                                                        creation until you are. We are true to ourselves, and commit to always perform at our best.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-17971a76 elementor-widget elementor-widget-text-editor" data-id="17971a76" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix"><p>We aren’t happy with our creation until you are. We take tremendous care of your needs.</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-3ce0dd58 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="3ce0dd58"
                    data-element_type="section"
                    data-settings='{"background_background":"classic"}'
                >
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4a0716a7" data-id="4a0716a7" data-element_type="column" data-settings='{"background_background":"classic"}'>
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-2027c41e elementor-widget elementor-widget-spacer" data-id="2027c41e" data-element_type="widget" data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-3dbba830 elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-hidden-phone elementor-widget elementor-widget-spacer elementor-motion-effects-parent"
                                            data-id="3dbba830"
                                            data-element_type="widget"
                                            data-settings='{"_position":"absolute","motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":0.200000000000000011102230246251565404236316680908203125,"sizes":[]},"motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                            data-widget_type="spacer.default"
                                        >
                                            <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: -9.294px; transform: translateY(var(--translateY));">
                                                <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-53570779 elementor-widget__width-initial elementor-absolute elementor-hidden-tablet elementor-hidden-phone elementor-widget elementor-widget-spacer elementor-motion-effects-parent"
                                            data-id="53570779"
                                            data-element_type="widget"
                                            data-settings='{"_position":"absolute","motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":1,"sizes":[]},"motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                            data-widget_type="spacer.default"
                                        >
                                            <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: -50px; transform: translateY(var(--translateY));">
                                                <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3028d796" data-id="3028d796" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-1b04163d elementor-widget elementor-widget-heading" data-id="1b04163d" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">WHO WE ARE</h2></div>
                                        </div>
                                        <div class="elementor-element elementor-element-3928f1d1 elementor-widget elementor-widget-heading" data-id="3928f1d1" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">We Design Your Success</h2></div>
                                        </div>
                                        <div class="elementor-element elementor-element-5bd36ebc elementor-widget elementor-widget-text-editor" data-id="5bd36ebc" data-element_type="widget" data-widget_type="text-editor.default">
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
                                        <div class="elementor-element elementor-element-5c2b481 elementor-widget elementor-widget-text-editor" data-id="5c2b481" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix"><p>TRON MARKETING is your best Web design and ecommetce solutions</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-79810b1b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="79810b1b"
                    data-element_type="section"
                    data-settings='{"background_background":"classic"}'
                >
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3fa0f70b" data-id="3fa0f70b" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-65fd544d elementor-widget elementor-widget-heading" data-id="65fd544d" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">TRON WEBAPP is your One-Stop-Solution for Professional Branding, Design and Development Services.</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-2f89046b elementor-widget elementor-widget-spacer" data-id="2f89046b" data-element_type="widget" data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                            </div>
                                        </div>
                                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-539baeba elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="539baeba"
                                            data-element_type="section"
                                        >
                                            <div class="elementor-container elementor-column-gap-wide">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-294bf94a" data-id="294bf94a" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div
                                                                    class="elementor-element elementor-element-685f4847 elementor-widget elementor-widget-counter"
                                                                    data-id="685f4847"
                                                                    data-element_type="widget"
                                                                    data-widget_type="counter.default"
                                                                >
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-counter">
                                                                            <div class="elementor-counter-number-wrapper">
                                                                                <span class="elementor-counter-number-prefix"></span>
                                                                                <span class="elementor-counter-number" data-duration="2000" data-to-value="1536" data-from-value="0" data-delimiter=",">1,536</span>
                                                                                <span class="elementor-counter-number-suffix">+</span>
                                                                            </div>
                                                                            <div class="elementor-counter-title">Website Completed</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-34bf1a67" data-id="34bf1a67" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div
                                                                    class="elementor-element elementor-element-489ae548 elementor-widget elementor-widget-counter"
                                                                    data-id="489ae548"
                                                                    data-element_type="widget"
                                                                    data-widget_type="counter.default"
                                                                >
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-counter">
                                                                            <div class="elementor-counter-number-wrapper">
                                                                                <span class="elementor-counter-number-prefix"></span>
                                                                                <span class="elementor-counter-number" data-duration="2000" data-to-value="99" data-from-value="0" data-delimiter=",">99</span>
                                                                                <span class="elementor-counter-number-suffix">%</span>
                                                                            </div>
                                                                            <div class="elementor-counter-title">Level of customer satisfaction</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-f7b4b81" data-id="f7b4b81" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div
                                                                    class="elementor-element elementor-element-6e6f6222 elementor-widget elementor-widget-counter"
                                                                    data-id="6e6f6222"
                                                                    data-element_type="widget"
                                                                    data-widget_type="counter.default"
                                                                >
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-counter">
                                                                            <div class="elementor-counter-number-wrapper">
                                                                                <span class="elementor-counter-number-prefix"></span>
                                                                                <span class="elementor-counter-number" data-duration="2000" data-to-value="1605" data-from-value="0" data-delimiter=",">1,605</span>
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-28977cef elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="28977cef"
                    data-element_type="section"
                    data-settings='{"background_background":"classic"}'
                >
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-60a02a5a" data-id="60a02a5a" data-element_type="column" data-settings='{"background_background":"classic"}'>
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-bd33fb elementor-widget elementor-widget-heading" data-id="bd33fb" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container"><div class="elementor-heading-title elementor-size-default">“</div></div>
                                        </div>
                                        <div class="elementor-element elementor-element-338a966f elementor-widget elementor-widget-heading" data-id="338a966f" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">
                                                    The people in charge, globally, are maniacs. They are maniacs, and unless we do something about it these people are going to deprive us of a future.
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-2a53071a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="2a53071a"
                    data-element_type="section"
                    data-settings='{"background_background":"classic"}'
                >
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-565e079e" data-id="565e079e" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-2c8e7a7b elementor-widget elementor-widget-heading" data-id="2c8e7a7b" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Get Your Brand Visible!</h2></div>
                                        </div>
                                        <div class="elementor-element elementor-element-7466481 elementor-widget elementor-widget-text-editor" data-id="7466481" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix"><p>Create a successful digital platform and scale up your business. Start your business today and focus on what matters.</p></div>
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