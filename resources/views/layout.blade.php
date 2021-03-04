<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tronwebapp | Digital agency</title>
    <link rel="stylesheet" href="{{asset('assets/css/font.css')}}">
    <link rel="preload" as="font" href="https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfBBc4AMP6lQ.woff2" crossorigin="" />
    <link rel="preload" as="font" href="https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFVZ0bf8pkAg.woff2" crossorigin="" />
    <link rel="stylesheet" id="wp-block-library-css" href="{{asset('assets/css/style.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="wc-block-vendors-style-css" href="{{asset('assets/css/wc-block-vendors-style.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="wc-block-style-css" href="{{asset('assets/css/wc-block-style.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="buttonizer_frontend_style-css" href="{{asset('assets/css/frontend.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="buttonizer-icon-library-css" href="{{asset('assets/css/all.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="woocommerce-layout-css" href="{{asset('assets/css/woocommerce-layout.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="woocommerce-smallscreen-css" href="{{asset('assets/css/woocommerce-smallscreen.min.css')}}" type="text/css" media="only screen and (max-width: 768px)" />
    <link rel="stylesheet" id="woocommerce-general-css" href="{{asset('assets/css/woocommerce-general.min.css')}}" type="text/css" media="all" />
    <style id="woocommerce-inline-inline-css')}}" type="text/css">
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel="stylesheet" id="trp-floater-language-switcher-style-css" href="{{asset('assets/css/trp-floater-language-switcher-style.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="trp-language-switcher-style-css" href="{{asset('assets/css/trp-language-switcher-style.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="hello-elementor-css" href="{{asset('assets/css/elementor-style.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="hello-elementor-theme-style-css" href="{{asset('assets/css/theme.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="jet-elements-css" href="{{asset('assets/css/jet-elements.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="jet-elements-skin-css" href="{{asset('assets/css/jet-elements-skin.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-icons-css" href="{{asset('assets/css/elementor-icons.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-animations-css" href="{{asset('assets/css/animations.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-frontend-legacy-css" href="{{asset('assets/css/frontend-legacy.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-frontend-css" href="{{asset('assets/css/frontend.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-post-10-css" href="{{asset('assets/css/post-10.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-pro-css" href="{{asset('assets/css/elementor-pro-frontend.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="jet-tricks-frontend-css" href="{{asset('assets/css/jet-tricks-frontend.min.css')}}" type="text/css" media="all" />

    @yield('page-css')

    <link rel="stylesheet" id="elementor-post-175-css" href="{{asset('assets/css/post-175.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="notificationx-css" href="{{asset('assets/css/notificationx-public.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-icons-shared-0-css" href="{{asset('assets/css/fontawesome.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-icons-fa-solid-css" href="{{asset('assets/css/solid.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-icons-fa-brands-css" href="{{asset('assets/css/brands.min.css')}}" type="text/css" media="all" />

    <script type="text/javascript" src="https://gohat-studio.com/wp-includes/js/jquery/jquery.min.js?ver=3.5.1" id="jquery-core-js"></script>
    <script type="text/javascript" src="https://gohat-studio.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
    <script defer="" type="text/javascript" src="https://gohat-studio.com/wp-content/uploads/siteground-optimizer-assets/trp-frontend-compatibility.min.js?ver=1.9.5" id="trp-frontend-compatibility-js"></script>
</head>
    @yield('body_tag')
    
    @yield('header')

    @yield('page')

    @include('footer')

    <div id="fb-pxl-ajax-code"></div>
    <script type="text/javascript">
        (function () {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, "woocommerce-js");
            document.body.className = c;
        })();
    </script>
    <script type="text/javascript" id="buttonizer_frontend_javascript-js-extra">
        /* <![CDATA[ */
        var buttonizer_ajax = {
            ajaxurl: "https:\/\/gohat-studio.com\/wp-admin\/admin-ajax.php",
            version: "2.3.0",
            buttonizer_path: "https:\/\/gohat-studio.com\/wp-content\/plugins\/buttonizer-multifunctional-button",
            buttonizer_assets: "https:\/\/gohat-studio.com\/wp-content\/plugins\/buttonizer-multifunctional-button\/assets\/",
            base_url: "https:\/\/gohat-studio.com",
            current: [],
            in_preview: "",
            is_admin: "",
            cache: "cab1e9498043907787e780c98dae0f8f",
            enable_ga_clicks: "1",
        };
        /* ]]> */
    </script>
    <script
        defer=""
        type="text/javascript"
        src="https://gohat-studio.com/wp-content/plugins/buttonizer-multifunctional-button/assets/frontend.min.js?v=70e2b24f7d348efe6b30b41469d5070c#038;siteground-async=1&amp;ver=5.6.2"
        id="buttonizer_frontend_javascript-js"
    ></script>
    <script defer="" type="text/javascript" src="https://gohat-studio.com/wp-content/plugins/sg-cachepress/assets/js/lazysizes.min.js?ver=5.7.15" id="siteground-optimizer-lazy-sizes-js-js"></script>
    <script defer="" type="text/javascript" src="https://gohat-studio.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70" id="jquery-blockui-js"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = { ajax_url: "\/wp-admin\/admin-ajax.php", wc_ajax_url: "\/?wc-ajax=%%endpoint%%", i18n_view_cart: "View cart", cart_url: "https:\/\/gohat-studio.com\/cart\/", is_cart: "", cart_redirect_after_add: "no" };
        /* ]]> */
    </script>
    <script defer="" type="text/javascript" src="https://gohat-studio.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=4.9.2" id="wc-add-to-cart-js"></script>
    <script defer="" type="text/javascript" src="https://gohat-studio.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4" id="js-cookie-js"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = { ajax_url: "\/wp-admin\/admin-ajax.php", wc_ajax_url: "\/?wc-ajax=%%endpoint%%" };
        /* ]]> */
    </script>
    <script defer="" type="text/javascript" src="https://gohat-studio.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=4.9.2" id="woocommerce-js"></script>
    <script type="text/javascript" id="wc-cart-fragments-js-extra">
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
            ajax_url: "\/wp-admin\/admin-ajax.php",
            wc_ajax_url: "\/?wc-ajax=%%endpoint%%",
            cart_hash_key: "wc_cart_hash_288dd33e074d9009f0870a9790c7f2ac",
            fragment_name: "wc_fragments_288dd33e074d9009f0870a9790c7f2ac",
            request_timeout: "5000",
        };
        /* ]]> */
    </script>
    <script defer="" type="text/javascript" src="https://gohat-studio.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=4.9.2" id="wc-cart-fragments-js"></script>
    <script defer="" type="text/javascript" src="https://gohat-studio.com/wp-content/uploads/siteground-optimizer-assets/notificationx-cookie.min.js?ver=1.9.1" id="notificationx-cookie-js"></script>
    <script type="text/javascript" id="notificationx-js-extra">
        /* <![CDATA[ */
        var NotificationX = { ajaxurl: "https:\/\/gohat-studio.com\/wp-admin\/admin-ajax.php" };
        /* ]]> */
    </script>
    <script defer="" type="text/javascript" src="https://gohat-studio.com/wp-content/plugins/notificationx/public/assets/js/notificationx-public.min.js?ver=1.9.1" id="notificationx-js"></script>
    <script type="text/javascript" src="https://gohat-studio.com/wp-includes/js/wp-embed.min.js?ver=5.6.2" id="wp-embed-js"></script>
    <script type="text/javascript" src="https://gohat-studio.com/wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.0.1" id="smartmenus-js"></script>
    <script type="text/javascript" src="https://gohat-studio.com/wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min.js?ver=0.2.1" id="jquery-numerator-js"></script>
    <script type="text/javascript" src="https://gohat-studio.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.1.2" id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript" src="https://gohat-studio.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.1.2" id="elementor-frontend-modules-js"></script>
    <script type="text/javascript" src="https://gohat-studio.com/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js?ver=3.0.9" id="elementor-sticky-js"></script>
    <script type="text/javascript" id="elementor-pro-frontend-js-before">
        var ElementorProFrontendConfig = {
            ajaxurl: "https:\/\/gohat-studio.com\/wp-admin\/admin-ajax.php",
            nonce: "8525a898a6",
            i18n: { toc_no_headings_found: "No headings were found on this page." },
            shareButtonsNetworks: {
                facebook: { title: "Facebook", has_counter: true },
                twitter: { title: "Twitter" },
                google: { title: "Google+", has_counter: true },
                linkedin: { title: "LinkedIn", has_counter: true },
                pinterest: { title: "Pinterest", has_counter: true },
                reddit: { title: "Reddit", has_counter: true },
                vk: { title: "VK", has_counter: true },
                odnoklassniki: { title: "OK", has_counter: true },
                tumblr: { title: "Tumblr" },
                digg: { title: "Digg" },
                skype: { title: "Skype" },
                stumbleupon: { title: "StumbleUpon", has_counter: true },
                mix: { title: "Mix" },
                telegram: { title: "Telegram" },
                pocket: { title: "Pocket", has_counter: true },
                xing: { title: "XING", has_counter: true },
                whatsapp: { title: "WhatsApp" },
                email: { title: "Email" },
                print: { title: "Print" },
            },
            menu_cart: { cart_page_url: "https:\/\/gohat-studio.com\/cart\/", checkout_page_url: "https:\/\/gohat-studio.com\/checkout\/" },
            facebook_sdk: { lang: "en_US", app_id: "" },
            lottie: { defaultAnimationUrl: "https:\/\/gohat-studio.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json" },
        };
    </script>
    <script type="text/javascript" src="https://gohat-studio.com/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.0.9" id="elementor-pro-frontend-js"></script>
    <script type="text/javascript" src="https://gohat-studio.com/wp-includes/js/jquery/ui/core.min.js?ver=1.12.1" id="jquery-ui-core-js"></script>
    <script type="text/javascript" src="https://gohat-studio.com/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.8.1" id="elementor-dialog-js"></script>
    <script type="text/javascript" src="https://gohat-studio.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2" id="elementor-waypoints-js"></script>
    <script type="text/javascript" src="https://gohat-studio.com/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.1.2" id="share-link-js"></script>
    <script type="text/javascript" src="https://gohat-studio.com/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6" id="swiper-js"></script>
    <script type="text/javascript" id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            environmentMode: { edit: false, wpPreview: false, isScriptDebug: false, isImprovedAssetsLoading: false },
            i18n: {
                shareOnFacebook: "Share on Facebook",
                shareOnTwitter: "Share on Twitter",
                pinIt: "Pin it",
                download: "Download",
                downloadImage: "Download image",
                fullscreen: "Fullscreen",
                zoom: "Zoom",
                share: "Share",
                playVideo: "Play Video",
                previous: "Previous",
                next: "Next",
                close: "Close",
            },
            is_rtl: false,
            breakpoints: { xs: 0, sm: 480, md: 768, lg: 1025, xl: 1440, xxl: 1600 },
            version: "3.1.2",
            is_static: false,
            experimentalFeatures: [],
            urls: { assets: "https:\/\/gohat-studio.com\/wp-content\/plugins\/elementor\/assets\/" },
            settings: { page: [], editorPreferences: [] },
            kit: {
                global_image_lightbox: "yes",
                lightbox_enable_counter: "yes",
                lightbox_enable_fullscreen: "yes",
                lightbox_enable_zoom: "yes",
                lightbox_enable_share: "yes",
                lightbox_title_src: "title",
                lightbox_description_src: "description",
            },
            post: { id: 17, title: "GOHAT%20MARKETING%20%7C%20Web%20Design%20%26%20eCommerce", excerpt: "", featuredImage: "https:\/\/gohat-studio.com\/wp-content\/uploads\/2020\/11\/Working-From-Home-1024x1024.jpg" },
        };
    </script>
    <script type="text/javascript" src="https://gohat-studio.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.1.2" id="elementor-frontend-js"></script>
    <span id="elementor-device-mode" class="elementor-screen-only"></span>
    <script type="text/javascript" id="jet-elements-js-extra">
        /* <![CDATA[ */
        var jetElements = {
            ajaxUrl: "https:\/\/gohat-studio.com\/wp-admin\/admin-ajax.php",
            isMobile: "false",
            templateApiUrl: "https:\/\/gohat-studio.com\/wp-json\/jet-elements-api\/v1\/elementor-template",
            devMode: "false",
            messages: { invalidMail: "Please specify a valid e-mail" },
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://gohat-studio.com/wp-content/plugins/jet-elements/assets/js/jet-elements.min.js?ver=2.5.3" id="jet-elements-js"></script>
    <script type="text/javascript" id="jet-tricks-frontend-js-extra">
        /* <![CDATA[ */
        var JetTricksSettings = {
            elements_data: {
                sections: {
                    c42a36c: { view_more: false, particles: "false", particles_json: null },
                    "7cc835a0": { view_more: false, particles: "false", particles_json: null },
                    c4064d0: { view_more: false, particles: "false", particles_json: null },
                    "3ce0dd58": { view_more: false, particles: "false", particles_json: null },
                    "79810b1b": { view_more: false, particles: "false", particles_json: null },
                    "539baeba": { view_more: false, particles: "false", particles_json: null },
                    "57bca03f": { view_more: false, particles: "false", particles_json: null },
                    "28977cef": { view_more: false, particles: "false", particles_json: null },
                    "2a53071a": { view_more: false, particles: "false", particles_json: null },
                    "10189fa4": { view_more: false, particles: "false", particles_json: null },
                },
                columns: [],
                widgets: {
                    a695b8: [],
                    "5743b6f": [],
                    "6ac606c4": [],
                    "63e46585": [],
                    "3c553ce9": [],
                    a2000d: [],
                    "435d530": [],
                    "5983dc95": [],
                    "17971a76": [],
                    "2027c41e": [],
                    "3dbba830": [],
                    "53570779": [],
                    "1b04163d": [],
                    "3928f1d1": [],
                    "5bd36ebc": [],
                    "5c2b481": [],
                    "65fd544d": [],
                    "2f89046b": [],
                    "685f4847": [],
                    "489ae548": [],
                    "6e6f6222": [],
                    "73e49781": [],
                    "74c83800": [],
                    "21d3d442": [],
                    "33b5b8fd": [],
                    "371bbae0": [],
                    bd33fb: [],
                    "338a966f": [],
                    "2c8e7a7b": [],
                    "7466481": [],
                    "2fce455": [],
                    "271e916e": [],
                    "1e815d3c": [],
                    "62d77cc3": [],
                    "478f28a5": [],
                    "3c5cf33b": [],
                    "7d0e4b7d": [],
                    "13210ffe": [],
                    "26eb619a": [],
                },
            },
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://gohat-studio.com/wp-content/plugins/jet-tricks/assets/js/jet-tricks-frontend.js?ver=1.3.3" id="jet-tricks-frontend-js"></script>
    <script type="text/javascript" src="https://gohat-studio.com/wp-content/plugins/elementor/assets/js/preloaded-elements-handlers.min.js?ver=3.1.2" id="preloaded-elements-handlers-js"></script>
</body>
</html>