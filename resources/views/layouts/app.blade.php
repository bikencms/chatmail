<!DOCTYPE html>
<!-- saved from url=(0022)# -->
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta property="og:site_name" content="Laracasts">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="mask-icon" href="{{ asset('assets/images/favicon.png') }}" color="#3668c9">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    @stack('styles')
    <title>ChatMail | Encrypted Communications</title>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.11.1.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.hamburger-nav').click(function() {
                $('.vfm--inset').css('display', 'block');
                $('.vfm__container').css('display', 'block');
            });

            $('.tw-fill-current').click(function() {
                $('.vfm--inset').css('display', 'none');
                $('.vfm__container').css('display', 'none');
            });

            $(".lang").change(function(){
                var val = $(this).val();
                window.location.href = val;
            });
        })
    </script>
</head>
<body>
@yield('content')
<div class="vfm vfm--inset vfm--fixed" data-js="mobile-nav-menu" height="100%" width="100%" data-v-2836fdb5=""
     style="z-index: 1000; display: none;"><!--v-if-->
    <div class="vfm__container vfm--absolute vfm--inset vfm--outline-none tw-text-white tw-text-center tw-shadow tw-bg-blue tw-rounded-none tw-shadow-inner tw-py-8"
         aria-expanded="false" role="dialog" aria-modal="true" tabindex="-1" data-v-2836fdb5="" style="display: none;">
        <div class="vfm__content tw-h-full" data-v-2836fdb5="">
            <section class="tw-px-0 lg:tw-px-4 tw-h-full" data-v-2836fdb5-s="" style="padding: 0;">
                <button class="tw-transition-all tw-bg-grey-panel hover:tw-bg-grey-light tw-rounded-xl tw-w-10 tw-h-10 tw-flex tw-items-center tw-justify-center tw-absolute tw-z-10 tw-right-4 tw-pin-0 tw-text-grey-darkest hover:tw-text-blue hover:tw-shadow tw-transform tw--translate-y-0 md:tw--translate-y-1/2"
                        data-v-2836fdb5-s="">
                    <svg width="16" viewBox="0 0 12 16" class="tw-fill-current">
                        <path d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"></path>
                    </svg>
                </button>
                <div class="tw-flex tw-flex-col tw-justify-between tw-px-4 tw-h-full tw-overflow-y-auto"
                     data-v-2836fdb5-s="">
                    <div class="tw-w-full tw-flex-1 md:tw-px-10" data-v-2836fdb5-s="">
                        <div class="nav-modal-wrap tw-flex tw-flex-col tw-h-full" data-v-2836fdb5-s="">
                            <ul class="tw-uppercase tw-my-auto tw-flex tw-flex-col tw-justify-around"
                                data-v-2836fdb5-s="">
                                <li class="tw-my-4" data-v-2836fdb5-s=""><a
                                            class="tw-text-white tw-font-bold tw-text-3xl link" href="{{ route('feature', [ 'locale' => app()->getLocale() ]) }}"> Features </a></li>
                                <li class="tw-my-4" data-v-2836fdb5-s=""><a
                                            class="tw-text-white tw-font-bold tw-text-3xl link" href="/solution"
                                            data-v-2836fdb5-s=""> Solution </a></li>
                                <li class="tw-my-4" data-v-2836fdb5-s=""><a
                                            class="tw-text-white tw-font-bold tw-text-3xl link" href="/security"
                                            data-v-2836fdb5-s=""> Security </a></li>
                                <li class="tw-my-4" data-v-2836fdb5-s="">
                                    <select name="lang" style="color: #4d545d"
                                            class="lang tw-flex-shrink-0 tw-ml-6 hover:tw-text-blue tw-font-semibold tw-uppercase tw-border tw-rounded-full tw-text-xs tw-px-3 tw-py-2 tw-leading-tight">
                                        <option value="{{ url('en') }}" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>🇺🇸</option>
                                        <option value="{{ url('vn') }}" {{ app()->getLocale() == 'vn' ? 'selected' : '' }}>🇻🇳</option>
                                        <option value="{{ url('zh') }}" {{ app()->getLocale() == 'zh' ? 'selected' : '' }}>🇨🇳</option>
                                        <option value="{{ url('th') }}" {{ app()->getLocale() == 'th' ? 'selected' : '' }}>🇹🇭</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div><!----></div>
            </section>
        </div>
    </div>
</div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/611233eb649e0a0a5cd06663/1fcnhlkrn';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

@stack('scripts')
</body>
</html>
