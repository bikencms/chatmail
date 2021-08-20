@extends('layouts.app')

@section('content')
    <div id="app"><!---->
        <div id="root" class="page xl:tw-flex">
            <div class="xl:tw-flex-1"><!---->
                <div><!---->
                    <main>
                        <div>
                            <div class="home-banner tw-relative">
                                <div class="home-banner-inner tw-flex tw-flex-col">
                                    <nav class="section new-nav tw-z-50 tw-py-4 md:tw-pt-7 md:tw-pb-4 tw-bg-transparent"
                                         style="height: 60px; max-width: 1200px;">
                                        <div class="tw-flex tw-justify-between tw-h-full tw-items-center tw-relative">
                                            <div id="header-logo-arrow" class="tw-flex tw-mr-4 xl:tw-mr-0 xl:tw-w-1/4"><a
                                                        class="tw-relative tw-cursor-pointer tw-leading-none tw-inline-block"
                                                        href="{{ route('index', [ 'locale' => app()->getLocale()]) }}">
                                                    <img src="{{ asset('assets/images/Flat_wordmark_alt_light.svg') }}"
                                                         alt="Flat_wordmark_alt_light.png">
                                                </a></div><!---->
                                            <div class="md:tw-hidden tw-flex tw-items-center">
                                                <button title="Tip: press / or s anywhere to instantly activate me."
                                                        class="tw-leading-none tw-mr-4">
                                                    <svg width="20" viewBox="0 0 15 15" class="tw-text-white">
                                                        <g fill="none" fill-rule="evenodd">
                                                            <path d="M-2-2h20v20H-2z"></path>
                                                            <path class="tw-fill-current"
                                                                  d="M10.443 9.232h-.638l-.226-.218A5.223 5.223 0 0 0 10.846 5.6 5.247 5.247 0 1 0 5.6 10.846c1.3 0 2.494-.476 3.414-1.267l.218.226v.638l4.036 4.028 1.203-1.203-4.028-4.036zm-4.843 0A3.627 3.627 0 0 1 1.967 5.6 3.627 3.627 0 0 1 5.6 1.967 3.627 3.627 0 0 1 9.232 5.6 3.627 3.627 0 0 1 5.6 9.232z"></path>
                                                        </g>
                                                    </svg>
                                                </button><!---->
                                                <div><a class="tw-block tw-leading-none">
                                                        <div class="hamburger-nav">
                                                            <span></span><span></span><span></span><span></span></div>
                                                    </a></div>
                                            </div>
                                            <div class="tw-hidden md:tw-block tw-relative xl:tw-w-1/4">
                                                <div class="tw-flex tw-items-center tw-justify-end">
                                                    <a href="/features"
                                                       class="tw-flex-shrink-0 tw-text-white hover:tw-text-white link tw-font-semibold tw-uppercase tw-ml-6 tw-text-xs">
                                                        Features </a>
                                                    <a href="#"
                                                       class="tw-flex-shrink-0 tw-text-white hover:tw-text-white link tw-font-semibold tw-uppercase tw-ml-6 tw-text-xs">
                                                        Solution </a><a
                                                            class="tw-flex-shrink-0 tw-ml-6 tw-text-white hover:tw-bg-white hover:tw-text-blue tw-font-semibold tw-uppercase tw-border tw-rounded-full tw-text-xs tw-px-3 tw-py-2 tw-leading-tight"
                                                            href="#"> Security </a>
                                                    <select name="lang"
                                                            class="lang tw-flex-shrink-0 tw-ml-6 hover:tw-text-blue tw-font-semibold tw-uppercase tw-border tw-rounded-full tw-text-xs tw-px-3 tw-py-2 tw-leading-tight">
                                                        <option value="{{ url('en') }}" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>🇺🇸</option>
                                                        <option value="{{ url('vn') }}" {{ app()->getLocale() == 'vn' ? 'selected' : '' }}>🇻🇳</option>
                                                        <option value="{{ url('zh') }}" {{ app()->getLocale() == 'zh' ? 'selected' : '' }}>🇨🇳</option>
                                                        <option value="{{ url('th') }}" {{ app()->getLocale() == 'th' ? 'selected' : '' }}>🇹🇭</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                    <div class="home-banner-main tw-flex-1 section tw-flex lg:tw-items-center tw-py-10 tw-mt-10 lg:tw-mt-0">
                                        <div class="container tw-w-full tw-mx-auto" style="max-width: 1400px;">
                                            <div class="tw-grid tw-grid-cols-12">
                                                <img
                                                        src="{{ asset('assets/images/IMG_0564.jpg') }}"
                                                        id="home-banner-illustration"
                                                        class="tw-absolute tw-pointer-events-none"
                                                        width="0"
                                                        alt="Lary the robot surrounded by Laracasts series thumbnails">
                                                <div class="home-banner-content tw-col-span-12 md:tw-col-start-5 md:tw-col-span-7 xl:tw-col-start-6 xl:tw-col-span-6 tw-relative tw-max-w-sm tw-mx-auto lg:tw-max-w-none lg:tw-mx-0">
                                                    <h1 class="header-title tw-font-semibold tw-tracking-normal tw-mb-7 md:tw-mb-8"
                                                        style="width: max-content;"> A whole new ChatMail
                                                    <span
                                                            class="header-title-accent has-cursor tw-font-extrabold tw-block tw-leading-tight"
                                                            contenteditable="" spellcheck="false"
                                                            style="width: max-content;">experience;</span></h1>
                                                    <p class=" md:tw-block lg:tw-text-lg tw-text-white tw-mb-9 md:tw-mb-5 tw-max-w-md tw-leading-loose">
                                                        However you use encryption, the game has changed.<span
                                                                class="md:tw-hidden">However you use encryption, the game has changed</span></p>
                                                    .
                                                    </span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!----><!---->
                        <section class="plans-section" style="background-color: #fff">
                            <div class="container mb-md-5">
                                <div class="row text-center">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="why-choose-us-block wow fadeInUp animated"
                                             style="visibility: visible; animation-name: fadeInUp;">
                                            <div class="choose-us-img">
                                                <img src="{{ asset('assets/images/features.png') }}" alt="hostinza hosting image"
                                                     draggable="false">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="home-banner tw-relative plant">
                            <div class="home-banner-inner tw-flex tw-flex-col">
                                <div class="home-banner-main tw-flex-1 section tw-flex lg:tw-items-center tw-py-10 tw-mt-10 lg:tw-mt-0">
                                    <div class=" tw-w-full tw-mx-auto">
                                        <div class="tw-grid tw-grid-cols-12">
                                            <img src="{{ asset('assets/images/IMG_0563.jpg') }}" id="plant-first"
                                                 class="tw-absolute tw-pointer-events-none" width="100%"
                                                 alt="Lary the robot surrounded by Laracasts series thumbnails">
                                            <div class="home-banner-content tw-col-span-12 md:tw-col-start-5 md:tw-col-span-7 xl:tw-col-start-6 xl:tw-col-span-6 tw-relative tw-max-w-sm tw-mx-auto lg:tw-max-w-none lg:tw-mx-0">
                                                <h1 class="header-title tw-font-semibold tw-tracking-normal tw-mb-7 md:tw-mb-8"
                                                    style="width: max-content;"> Tamper Proof
                                                <span
                                                        class="header-title-accent has-cursor tw-font-extrabold tw-block tw-leading-tight"
                                                        contenteditable="" spellcheck="false"
                                                        style="width: max-content;">Servers;</span></h1>
                                                <p class=" md:tw-block lg:tw-text-lg tw-text-white tw-mb-9 md:tw-mb-5 tw-max-w-md tw-leading-loose">
                                                    With our proprietary design, your confidential information can never be compromised. We've removed server storage of sensitive data from the equation. Be assured that your contacts, notes, emails, and encrypted messages are continuously protected and secured.
                                                </p>
                                                .
                                                </span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="plans-section mb-5" style="background-color: #fff">
                            <header class="container tw-text-center tw-mb-4 tw-mx-auto tw-pb-4 tw-text-black"
                                    style="max-width: 650px;margin: 0 auto;"><h3
                                        class="header-title tw-font-semibold tw-tracking-normal tw-mb-7 md:tw-mb-8">
                                    <span style="color:#000">Unified User</span> <span
                                            class="header-title-accent has-cursor tw-font-extrabold tw-leading-tight"
                                            contenteditable="" spellcheck="false"
                                            >Interface;</span>
                                </h3>
                                <p style="color:#000" class=" md:tw-block lg:tw-text-lg tw-text-white tw-mb-9 md:tw-mb-5 tw-max-w-md tw-leading-loose">
                                    We've completely streamlined the user experience by developing the latest, most advanced, intuitive, and powerful encrypted software. You no longer have to switch between apps because everything you need is in one place.
                                </p>
                                <img class="mt-5" src="{{ asset('assets/images/tripple-phone.png') }}" alt="tripple-phone.png">
                            </header>
                        </section>
                    </main>

                </div>
                <div class="footer-wrap mobile:tw-text-lg">
                    <section class="footer-section top lg:tw-pb-0 tw-pt-0">
                        <div class="container">
                            <div class="md:tw-w lg:tw-w-1/2 tw-mx-auto tw-text-center" style="margin: 0 auto;">
                                <div><h2 class="tw-text-white tw-text-2xl md:tw-text-3xl tw-mb-8 tw-tracking-tight"> Want us
                                        to email you occasionally with Chatmail news? </h2></div>
                                <div class="tw-mb-6">
                                    <form id="newsletter-form" method="POST" action="/newsletters/subscribe">
                                        <div class="tw-flex tw-flex-col md:tw-flex-row tw-justify-center tw-mb-6 lg:tw-mb-0 tw-max-w-sm tw-mx-auto lg:tw-max-w-full lg:tw-mx-0"
                                             style="margin: 0 auto;">
                                            <input class="md:tw-w-1/2 tw-rounded-2xl tw-px-4 tw-py-4 md:tw-py-3 tw-mb-4 md:tw-mb-0 tw-text-grey-black tw-text-center md:tw-text-left tw-text-base md:tw-text-xs md:tw--mr-8"
                                                   type="email" name="email" placeholder="Enter your email address"
                                                   autocomplete="off" required="">
                                            <button type="submit"
                                                    class="tw-btn tw-btn-primary tw-py-5 md:tw-py-4 md:tw-w-32"> Subscribe
                                            </button>
                                        </div><!----></form>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="footer-section bottom tw-text-center lg:tw-text-left tw-py-0">
                        <footer class="container">
                            <div class="tw-border-t tw-border-solid tw-border-transparent-10 tw-py-4 lg:tw-mt-8 mobile:tw-text-lg">
                                <div class="tw-text-transparent-50 tw-text-base lg:tw-text-xs tw-text-center"><p
                                            class="lg:tw-mb-2 tw-tracking-normal"> © Chatmail 2021. All rights reserved.</p>
                                    <p class="tw-tracking-normal tw-hidden md:tw-block"><span class="mobile:tw-block"> Designed by Minhbiken . </span><br
                                                class="lg:tw-hidden"></p></div>
                            </div>
                        </footer>
                    </section>
                </div>
                <!----></div>
        </div>
    </div>
@endsection
