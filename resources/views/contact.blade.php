@extends('layout')
@section('page-css')
    <link rel="stylesheet" id="elementor-post-41-css" href="{{asset('assets/css/post-41.css')}}" type="text/css" media="all" />
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
                                                <ul id="menu-1-5743b6f" class="elementor-nav-menu" data-smartmenus-id="1614801634390549">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1921"><a href="{{route('index')}}" class="elementor-item">Home</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1923"><a href="{{route('about')}}" class="elementor-item">About</a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1942">
                                                        <a class="elementor-item has-submenu" id="sm-1614801634390549-1" aria-haspopup="true" aria-controls="sm-1614801634390549-2" aria-expanded="false">
                                                            Service
                                                        </a>
                                                        <ul
                                                            class="sub-menu elementor-nav-menu--dropdown sm-nowrap"
                                                            id="sm-1614801634390549-2"
                                                            role="group"
                                                            aria-hidden="true"
                                                            aria-labelledby="sm-1614801634390549-1"
                                                            aria-expanded="false"
                                                            style="width: auto; min-width: 10em; display: none; max-width: 1000px; top: auto; left: 0px; margin-left: 0px; margin-top: 0px;"
                                                        >
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1943">
                                                                <a class="elementor-sub-item has-submenu" id="sm-1614801634390549-3" aria-haspopup="true" aria-controls="sm-1614801634390549-4" aria-expanded="false">
                                                                    Website
                                                                </a>
                                                                <ul class="sub-menu elementor-nav-menu--dropdown" id="sm-1614801634390549-4" role="group" aria-hidden="true" aria-labelledby="sm-1614801634390549-3" aria-expanded="false">
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1927"><a href="{{route('corporate_website')}}" class="elementor-sub-item">Corporate Website</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1945">
                                                                <a class="elementor-sub-item has-submenu" id="sm-1614801634390549-7" aria-haspopup="true" aria-controls="sm-1614801634390549-8" aria-expanded="false">
                                                                    Design
                                                                </a>
                                                                <ul class="sub-menu elementor-nav-menu--dropdown" id="sm-1614801634390549-8" role="group" aria-hidden="true" aria-labelledby="sm-1614801634390549-7" aria-expanded="false">
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1932"><a href="{{route('logo_design')}}" class="elementor-sub-item">Logo Design</a></li>
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1934"><a href="{{route('name_card_design')}}" class="elementor-sub-item">Name Card Design</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-41 current_page_item menu-item-1926">
                                                        <a href="{{route('contact')}}" aria-current="page" class="elementor-item elementor-item-active">Contact</a>
                                                    </li>
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
    <div data-elementor-type="wp-page" data-elementor-id="41" class="elementor elementor-41" data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap elementor-motion-effects-parent">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-58074678 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
                    data-id="58074678"
                    data-element_type="section"
                    data-settings='{"background_background":"classic"}'
                >
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6fc3ee8b" data-id="6fc3ee8b" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div
                                            class="elementor-element elementor-element-524ef7b8 elementor-widget elementor-widget-heading elementor-motion-effects-parent"
                                            data-id="524ef7b8"
                                            data-element_type="widget"
                                            data-settings='{"motion_fx_motion_fx_scrolling":"yes","motion_fx_translateY_effect":"yes","motion_fx_translateY_speed":{"unit":"px","size":0.5,"sizes":[]},"motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                                            data-widget_type="heading.default"
                                        >
                                            <div class="elementor-widget-container elementor-motion-effects-element" style="--translateY: -6.575px; transform: translateY(var(--translateY));">
                                                <h1 class="elementor-heading-title elementor-size-default">Contact</h1>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-6d1e6197 elementor-widget elementor-widget-text-editor" data-id="6d1e6197" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix"><p>Ready to take the next step and work together? Let’s work together</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-17605550 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="17605550"
                    data-element_type="section"
                >
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-29afaa0b" data-id="29afaa0b" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-4ef6c257 elementor-widget elementor-widget-heading" data-id="4ef6c257" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Let's get in touch.</h2></div>
                                        </div>
                                        <div class="elementor-element elementor-element-46706e12 elementor-widget elementor-widget-text-editor" data-id="46706e12" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix">Ready to take the next step and work together?</div></div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-4552be7a elementor-button-align-stretch elementor-widget elementor-widget-form"
                                            data-id="4552be7a"
                                            data-element_type="widget"
                                            data-settings='{"step_next_label":"Next","step_previous_label":"Previous","button_width":"100","step_type":"number_text","step_icon_shape":"circle"}'
                                            data-widget_type="form.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <form class="elementor-form" method="post" name="New Form">
                                                    <input type="hidden" name="post_id" value="41" /> <input type="hidden" name="form_id" value="4552be7a" /> <input type="hidden" name="queried_id" value="41" />
                                                    <div class="elementor-form-fields-wrapper elementor-labels-">
                                                        <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100 elementor-field-required">
                                                            <label for="form-field-name" class="elementor-field-label elementor-screen-only">Name</label>
                                                            <input
                                                                size="1"
                                                                type="text"
                                                                name="form_fields[name]"
                                                                id="form-field-name"
                                                                class="elementor-field elementor-size-sm elementor-field-textual"
                                                                placeholder="Name"
                                                                required="required"
                                                                aria-required="true"
                                                            />
                                                        </div>
                                                        <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required">
                                                            <label for="form-field-email" class="elementor-field-label elementor-screen-only">Email</label>
                                                            <input
                                                                size="1"
                                                                type="email"
                                                                name="form_fields[email]"
                                                                id="form-field-email"
                                                                class="elementor-field elementor-size-sm elementor-field-textual"
                                                                placeholder="Email"
                                                                required="required"
                                                                aria-required="true"
                                                            />
                                                        </div>
                                                        <div class="elementor-field-type-number elementor-field-group elementor-column elementor-field-group-field_9ebd2d2 elementor-col-100 elementor-field-required">
                                                            <label for="form-field-field_9ebd2d2" class="elementor-field-label elementor-screen-only">Mobile Number</label>
                                                            <input
                                                                type="number"
                                                                name="form_fields[field_9ebd2d2]"
                                                                id="form-field-field_9ebd2d2"
                                                                class="elementor-field elementor-size-sm elementor-field-textual"
                                                                placeholder="Mobile Number"
                                                                required="required"
                                                                aria-required="true"
                                                                min=""
                                                                max=""
                                                            />
                                                        </div>
                                                        <div class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100">
                                                            <label for="form-field-message" class="elementor-field-label elementor-screen-only">Message</label>
                                                            <textarea class="elementor-field-textual elementor-field elementor-size-sm" name="form_fields[message]" id="form-field-message" rows="4" placeholder="Message"></textarea>
                                                        </div>
                                                        <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                                            <button type="submit" class="elementor-button elementor-size-sm">
                                                                <span> <span class="elementor-button-icon"> </span> <span class="elementor-button-text">Send</span> </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1d2d4b94" data-id="1d2d4b94" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-4fb5c50d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="4fb5c50d"
                                            data-element_type="section"
                                        >
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3a14638" data-id="3a14638" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div
                                                                    class="elementor-element elementor-element-452a06a3 elementor-widget elementor-widget-heading"
                                                                    data-id="452a06a3"
                                                                    data-element_type="widget"
                                                                    data-widget_type="heading.default"
                                                                >
                                                                    <div class="elementor-widget-container"><h3 class="elementor-heading-title elementor-size-default">Respond Time</h3></div>
                                                                </div>
                                                                <div
                                                                    class="elementor-element elementor-element-6c01d5e6 elementor-widget elementor-widget-text-editor"
                                                                    data-id="6c01d5e6"
                                                                    data-element_type="widget"
                                                                    data-widget_type="text-editor.default"
                                                                >
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix"><p>Generally, respond within 1-3 business days. Monday – Friday</p></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-7e361378 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="7e361378"
                                            data-element_type="section"
                                        >
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-64797cd4" data-id="64797cd4" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div
                                                                    class="elementor-element elementor-element-23f98467 elementor-widget elementor-widget-heading"
                                                                    data-id="23f98467"
                                                                    data-element_type="widget"
                                                                    data-widget_type="heading.default"
                                                                >
                                                                    <div class="elementor-widget-container"><h3 class="elementor-heading-title elementor-size-default">Support</h3></div>
                                                                </div>
                                                                <div
                                                                    class="elementor-element elementor-element-283acb41 elementor-widget elementor-widget-text-editor"
                                                                    data-id="283acb41"
                                                                    data-element_type="widget"
                                                                    data-widget_type="text-editor.default"
                                                                >
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>
                                                                                <a href="https://wa.me/601159131210"><span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fab fa-whatsapp"></i> </span> <span class="elementor-icon-list-text">Whatsapp</span></a><br />
                                                                                <a href="tel:601159131210">+6011 591 31210</a>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-e1ecf14 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-motion-effects-element elementor-motion-effects-element-type-background"
                    data-id="e1ecf14"
                    data-element_type="section"
                    data-settings='{"background_background":"classic","background_motion_fx_motion_fx_scrolling":"yes","background_motion_fx_translateY_effect":"yes","background_motion_fx_blur_effect":"yes","background_motion_fx_blur_range":{"unit":"%","size":"","sizes":{"start":40,"end":80}},"background_motion_fx_translateY_speed":{"unit":"px","size":4,"sizes":[]},"background_motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"background_motion_fx_blur_direction":"out-in","background_motion_fx_blur_level":{"unit":"px","size":7,"sizes":[]},"background_motion_fx_devices":["desktop","tablet","mobile"]}'
                >
                    <div class="elementor-motion-effects-container">
                        <div class="elementor-motion-effects-layer" style="width: 100%; height: 140%; --translateY: -53.952px; --blur: 7px; transform: translateY(var(--translateY)); filter: blur(var(--blur));"></div>
                    </div>
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4544ee73" data-id="4544ee73" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-3afe2034 elementor-widget elementor-widget-heading" data-id="3afe2034" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Let us create your success!</h2></div>
                                        </div>
                                        <div class="elementor-element elementor-element-18eb44dc elementor-widget elementor-widget-text-editor" data-id="18eb44dc" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix">Ready to take the next step and work together? Let’s work together</div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1cf8f804" data-id="1cf8f804" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div
                                            class="elementor-element elementor-element-258e8d0c elementor-mobile-align-justify elementor-widget elementor-widget-button"
                                            data-id="258e8d0c"
                                            data-element_type="widget"
                                            data-widget_type="button.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a href="http://gohat-studio.com/quotation/" class="elementor-button-link elementor-button elementor-size-lg" role="button">
                                                        <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">Get Free Quote</span> </span>
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