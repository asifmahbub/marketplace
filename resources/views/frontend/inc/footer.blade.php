<!--<section class="bg-white border-top mt-auto">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block" href="{{ route('terms') }}">
                    <i class="la la-file-text la-3x text-primary mb-2"></i>
                    <h4 class="h6">{{ translate('Terms & conditions') }}</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block" href="{{ route('returnpolicy') }}">
                    <i class="la la-mail-reply la-3x text-primary mb-2"></i>
                    <h4 class="h6">{{ translate('Return Policy') }}</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block" href="{{ route('supportpolicy') }}">
                    <i class="la la-support la-3x text-primary mb-2"></i>
                    <h4 class="h6">{{ translate('Support Policy') }}</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left border-right text-center p-4 d-block" href="{{ route('privacypolicy') }}">
                    <i class="las la-exclamation-circle la-3x text-primary mb-2"></i>
                    <h4 class="h6">{{ translate('Privacy Policy') }}</h4>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark py-5 text-light footer-widget">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-xl-4 text-center text-md-left">
                <div class="mt-4">
                    <a href="{{ route('home') }}" class="d-block">
                        @if(get_setting('footer_logo') != null)
    <img class="lazyload" src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset(get_setting('footer_logo')) }}" alt="{{ env('APP_NAME') }}" height="44">
                        @else
    <img class="lazyload" src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ static_asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}" height="44">
                        @endif
    </a>
    <div class="my-3">
{!! get_setting('about_us_description',null,App::getLocale()) !!}
    </div>
    <div class="d-inline-block d-md-block mb-4">
        <form class="form-inline" method="POST" action="{{ route('subscribers.store') }}">
                            @csrf
    <div class="form-group mb-0">
        <input type="email" class="form-control" placeholder="{{ translate('Your Email Address') }}" name="email" required>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                {{ translate('Subscribe') }}
    </button>
</form>
</div>
<div class="w-300px mw-100 mx-auto mx-md-0">
@if(get_setting('play_store_link') != null)
    <a href="{{ get_setting('play_store_link') }}" target="_blank" class="d-inline-block mr-3 ml-0">
                                <img src="{{ static_asset('assets/img/play.png') }}" class="mx-100 h-40px">
                            </a>
                        @endif
@if(get_setting('app_store_link') != null)
    <a href="{{ get_setting('app_store_link') }}" target="_blank" class="d-inline-block">
                                <img src="{{ static_asset('assets/img/app.png') }}" class="mx-100 h-40px">
                            </a>
                        @endif
    </div>
</div>
</div>
<div class="col-lg-3 ml-xl-auto col-md-4 mr-0">
<div class="text-center text-md-left mt-4">
    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
{{ translate('Contact Info') }}
    </h4>
    <ul class="list-unstyled">
        <li class="mb-2">
            <span class="d-block opacity-30">{{ translate('Address') }}:</span>
                            <span class="d-block opacity-70">{{ get_setting('contact_address',null,App::getLocale()) }}</span>
                        </li>
                        <li class="mb-2">
                            <span class="d-block opacity-30">{{translate('Phone')}}:</span>
                            <span class="d-block opacity-70">{{ get_setting('contact_phone') }}</span>
                        </li>
                        <li class="mb-2">
                            <span class="d-block opacity-30">{{translate('Email')}}:</span>
                            <span class="d-block opacity-70">
                               <a href="mailto:{{ get_setting('contact_email') }}" class="text-reset">{{ get_setting('contact_email')  }}</a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        {{ get_setting('widget_one',null,App::getLocale()) }}
    </h4>
    <ul class="list-unstyled">
@if ( get_setting('widget_one_labels',null,App::getLocale()) !=  null )
    @foreach (json_decode( get_setting('widget_one_labels',null,App::getLocale()), true) as $key => $value)
        <li class="mb-2">
            <a href="{{ json_decode( get_setting('widget_one_links'), true)[$key] }}" class="opacity-50 hov-opacity-100 text-reset">
                                        {{ $value }}
            </a>
        </li>
@endforeach
@endif
    </ul>
</div>
</div>

<div class="col-md-4 col-lg-2">
<div class="text-center text-md-left mt-4">
    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
{{ translate('My Account') }}
    </h4>
    <ul class="list-unstyled">
@if (Auth::check())
    <li class="mb-2">
        <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('logout') }}">
                                    {{ translate('Logout') }}
        </a>
    </li>
@else
    <li class="mb-2">
        <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('user.login') }}">
                                    {{ translate('Login') }}
        </a>
    </li>
@endif
    <li class="mb-2">
        <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('purchase_history.index') }}">
                                {{ translate('Order History') }}
    </a>
</li>
<li class="mb-2">
    <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('wishlists.index') }}">
                                {{ translate('My Wishlist') }}
    </a>
</li>
<li class="mb-2">
    <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('orders.track') }}">
                                {{ translate('Track Order') }}
    </a>
</li>
@if (addon_is_activated('affiliate_system'))
    <li class="mb-2">
        <a class="opacity-50 hov-opacity-100 text-light" href="{{ route('affiliate.apply') }}">{{ translate('Be an affiliate partner')}}</a>
                            </li>
                        @endif
    </ul>
</div>
@if (get_setting('vendor_system_activation') == 1)
    <div class="text-center text-md-left mt-4">
        <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
{{ translate('Be a Seller') }}
        </h4>
        <a href="{{ route('shops.create') }}" class="btn btn-primary btn-sm shadow-md">
                            {{ translate('Apply Now') }}
        </a>
    </div>
@endif
    </div>
</div>
</div>
</section>

&lt;!&ndash;FOOTER&ndash;&gt;
<footer class="pt-3 pb-7 pb-xl-3 bg-black text-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="text-center text-md-left" current-verison="{{get_setting("current_version")}}">
                    {!! get_setting('frontend_copyright_text',null,App::getLocale()) !!}
                </div>
            </div>
            <div class="col-lg-4">
@if ( get_setting('show_social_links') )
    <ul class="list-inline my-3 my-md-0 social colored text-center">
@if ( get_setting('facebook_link') !=  null )
        <li class="list-inline-item">
            <a href="{{ get_setting('facebook_link') }}" target="_blank" class="facebook"><i class="lab la-facebook-f"></i></a>
                            </li>
                        @endif
    @if ( get_setting('twitter_link') !=  null )
        <li class="list-inline-item">
            <a href="{{ get_setting('twitter_link') }}" target="_blank" class="twitter"><i class="lab la-twitter"></i></a>
                            </li>
                        @endif
    @if ( get_setting('instagram_link') !=  null )
        <li class="list-inline-item">
            <a href="{{ get_setting('instagram_link') }}" target="_blank" class="instagram"><i class="lab la-instagram"></i></a>
                            </li>
                        @endif
    @if ( get_setting('youtube_link') !=  null )
        <li class="list-inline-item">
            <a href="{{ get_setting('youtube_link') }}" target="_blank" class="youtube"><i class="lab la-youtube"></i></a>
                            </li>
                        @endif
    @if ( get_setting('linkedin_link') !=  null )
        <li class="list-inline-item">
            <a href="{{ get_setting('linkedin_link') }}" target="_blank" class="linkedin"><i class="lab la-linkedin-in"></i></a>
                            </li>
                        @endif
        </ul>
@endif
    </div>
    <div class="col-lg-4">
        <div class="text-center text-md-right">
            <ul class="list-inline mb-0">
@if ( get_setting('payment_method_images') !=  null )
    @foreach (explode(',', get_setting('payment_method_images')) as $key => $value)
        <li class="list-inline-item">
            <img src="{{ uploaded_asset($value) }}" height="30" class="mw-100 h-auto" style="max-height: 30px">
                                </li>
                            @endforeach
@endif
    </ul>
</div>
</div>
</div>
</div>
</footer>


<div class="plx-mobile-bottom-nav d-xl-none fixed-bottom bg-white shadow-lg border-top rounded-top" style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important; ">
<div class="row align-items-center gutters-5">
<div class="col">
<a href="{{ route('home') }}" class="text-reset d-block text-center pb-2 pt-3">
                <i class="las la-home fs-20 opacity-60 {{ areActiveRoutes(['home'],'opacity-100 text-primary')}}"></i>
                <span class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['home'],'opacity-100 fw-600')}}">{{ translate('Home') }}</span>
            </a>
        </div>
        <div class="col">
            <a href="{{ route('categories.all') }}" class="text-reset d-block text-center pb-2 pt-3">
                <i class="las la-list-ul fs-20 opacity-60 {{ areActiveRoutes(['categories.all'],'opacity-100 text-primary')}}"></i>
                <span class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['categories.all'],'opacity-100 fw-600')}}">{{ translate('Categories') }}</span>
            </a>
        </div>
        @php
    if(auth()->user() != null) {
        $user_id = Auth::user()->id;
        $cart = \App\Models\Cart::where('user_id', $user_id)->get();
    } else {
        $temp_user_id = Session()->get('temp_user_id');
        if($temp_user_id) {
            $cart = \App\Models\Cart::where('temp_user_id', $temp_user_id)->get();
        }
    }
@endphp
    <div class="col-auto">
        <a href="{{ route('cart') }}" class="text-reset d-block text-center pb-2 pt-3">
                <span class="align-items-center bg-primary border border-white border-width-4 d-flex justify-content-center position-relative rounded-circle size-50px" style="margin-top: -33px;box-shadow: 0px -5px 10px rgb(0 0 0 / 15%);border-color: #fff !important;">
                    <i class="las la-shopping-bag la-2x text-white"></i>
                </span>
                <span class="d-block mt-1 fs-10 fw-600 opacity-60 {{ areActiveRoutes(['cart'],'opacity-100 fw-600')}}">
                    {{ translate('Cart') }}
@php
    $count = (isset($cart) && count($cart)) ? count($cart) : 0;
@endphp
(<span class="cart-count">{{$count}}</span>)
    </span>
            </a>
        </div>
        <div class="col">
            <a href="{{ route('all-notifications') }}" class="text-reset d-block text-center pb-2 pt-3">
                <span class="d-inline-block position-relative px-2">
                    <i class="las la-bell fs-20 opacity-60 {{ areActiveRoutes(['all-notifications'],'opacity-100 text-primary')}}"></i>
                    @if(Auth::check() && count(Auth::user()->unreadNotifications) > 0)
    <span class="badge badge-sm badge-dot badge-circle badge-primary position-absolute absolute-top-right" style="right: 7px;top: -2px;"></span>
@endif
    </span>
                <span class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['all-notifications'],'opacity-100 fw-600')}}">{{ translate('Notifications') }}</span>
            </a>
        </div>
        <div class="col">
            @if (Auth::check())
    @if(isAdmin())
        <a href="{{ route('admin.dashboard') }}" class="text-reset d-block text-center pb-2 pt-3">
                    <span class="d-block mx-auto">
                        @if(Auth::user()->photo != null)
            <img src="{{ custom_asset(Auth::user()->avatar_original)}}" class="rounded-circle size-20px">
                        @else
            <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="rounded-circle size-20px">
                        @endif
            </span>
                        <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                    </a>
                @else
        <a href="javascript:void(0)" class="text-reset d-block text-center pb-2 pt-3 mobile-side-nav-thumb" data-toggle="class-toggle" data-backdrop="static" data-target=".plx-mobile-side-nav">
<span class="d-block mx-auto">
@if(Auth::user()->photo != null)
            <img src="{{ custom_asset(Auth::user()->avatar_original)}}" class="rounded-circle size-20px">
                @else
            <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="rounded-circle size-20px">
                @endif
            </span>
                        <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                    </a>
                @endif
@else
    <a href="{{ route('user.login') }}" class="text-reset d-block text-center pb-2 pt-3">
                <span class="d-block mx-auto">
                    <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="rounded-circle size-20px">
                </span>
                    <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                </a>
            @endif
    </div>
</div>
</div>
@if (Auth::check() && !isAdmin())
    <div class="plx-mobile-side-nav collapse-sidebar-wrap sidebar-xl d-xl-none z-1035">
        <div class="overlay dark c-pointer overlay-fixed" data-toggle="class-toggle" data-backdrop="static" data-target=".plx-mobile-side-nav" data-same=".mobile-side-nav-thumb"></div>
        <div class="collapse-sidebar bg-white">
            @include('frontend.inc.user_side_nav')
        </div>
    </div>
@endif-->

    @if (Auth::check() && !isAdmin())
        <div class="plx-mobile-side-nav collapse-sidebar-wrap sidebar-xl d-xl-none z-1035">
            <div class="overlay dark c-pointer overlay-fixed" data-toggle="class-toggle" data-backdrop="static" data-target=".plx-mobile-side-nav" data-same=".mobile-side-nav-thumb"></div>
            <div class="collapse-sidebar bg-white">
                @include('frontend.inc.user_side_nav')
            </div>
        </div>
    @endif

    <section class="bg-white mt-auto conditional-area pt-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 mb-3">
                    <a class="text-reset single-conditional-area text-center" href="{{ route('terms') }}">
                        <svg class="mb-2" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M43.4052 66.125L43.0499 65.404L42.5853 64.4611L43.4052 66.125ZM43.4052 66.125H42.6014M43.4052 66.125H42.6014M42.6014 66.125H24.91C18.1631 66.125 13.7039 66.1147 10.8764 66.0891C9.46313 66.0763 8.45417 66.0596 7.76975 66.0382C7.42798 66.0276 7.16286 66.0157 6.96691 66.0021C6.79017 65.9899 6.62189 65.974 6.50899 65.9423L6.50899 65.9423M42.6014 66.125L6.50899 65.9423M6.50899 65.9423L6.5047 65.941M6.50899 65.9423L6.5047 65.941M6.5047 65.941C6.00787 65.7965 5.46382 65.3874 5.03813 64.9617C4.6133 64.5369 4.20498 63.9942 4.05968 63.4981C3.94507 63.1194 3.87484 62.4665 3.87484 62.0156V61.25V60.75M6.5047 65.941L3.87484 60.75M3.87484 60.75H4.37484M3.87484 60.75H4.37484M4.37484 60.75H22.9549H41.5213H41.9946M4.37484 60.75H41.9946M41.9946 60.75L42.0206 61.2226M41.9946 60.75L42.0206 61.2226M42.0206 61.2226L42.0886 62.4617C42.0887 62.4626 42.0887 62.4634 42.0888 62.4642M42.0206 61.2226L42.0888 62.4642M42.0888 62.4642C42.1227 62.9849 42.1583 63.2914 42.2251 63.5589M42.0888 62.4642L42.2251 63.5589M42.2251 63.5589C42.2909 63.8218 42.3921 64.068 42.5851 64.4606L42.2251 63.5589ZM11.4647 31.6102L11.4379 56.375H12.0311H12.6248V32.0469C12.6248 22.4972 12.6351 16.2544 12.6607 12.3441C12.6736 10.3894 12.6902 9.01491 12.7115 8.10071C12.7221 7.64408 12.7339 7.29853 12.7472 7.05138C12.7539 6.9281 12.7611 6.82513 12.7692 6.74305C12.7762 6.67191 12.7866 6.58355 12.8076 6.50915L12.8088 6.50486C12.9533 6.00803 13.3624 5.46398 13.7881 5.03829C14.2138 4.6126 14.7579 4.20349 15.2547 4.05894L15.259 4.05773C15.3719 4.02598 15.5402 4.01007 15.7169 3.99787C15.9129 3.98434 16.178 3.9724 16.5198 3.96176C17.2042 3.94043 18.2131 3.92373 19.6264 3.9109C22.4539 3.88525 26.9131 3.875 33.66 3.875H51.3514H52.1504L51.8011 4.59359L51.3226 5.57797L51.3226 5.57798L51.3201 5.58298L50.8804 6.46234L50.8123 34.7824C50.7782 48.5213 50.7577 55.6405 50.7149 59.3878C50.6936 61.2585 50.6666 62.3 50.6287 62.9074C50.5914 63.5067 50.5416 63.7491 50.4338 63.9707L50.4332 63.9719C50.2282 64.3905 49.8493 64.8179 49.4551 65.1589C49.0625 65.4985 48.591 65.8077 48.1618 65.939C47.4684 66.1523 46.8011 66.1913 46.1595 66.0211C45.5204 65.8516 44.947 65.4853 44.4218 64.9533C43.9579 64.4963 43.6375 64.0854 43.4563 63.4932C43.2846 62.9323 43.2498 62.2429 43.2498 61.2637C43.2498 60.5223 43.2444 60.193 43.2099 60.0024C43.196 59.9254 43.1816 59.8999 43.1743 59.8881C43.1622 59.8685 43.1392 59.8392 43.0621 59.7653L43.0546 59.7581L43.0473 59.7506L42.8668 59.5625H22.9686H3.06436L2.85534 59.7715C2.76158 59.8653 2.74448 59.887 2.73449 59.9038C2.73442 59.9039 2.73435 59.904 2.73425 59.9041C2.73151 59.9086 2.71638 59.9334 2.70366 60.0311C2.67235 60.2716 2.67983 60.7072 2.70086 61.7025C2.72869 62.6833 2.74599 63.123 2.80835 63.4497C2.86576 63.7504 2.96083 63.955 3.21103 64.4763C3.77447 65.6145 4.4829 66.3001 5.65508 66.8547L5.65508 66.8547L5.65673 66.8555L6.47053 67.2441H27.3436H48.2166L49.0304 66.8555L49.0321 66.8547C50.2046 66.2999 50.9131 65.6141 51.4767 64.4752C51.4769 64.4747 51.4772 64.4742 51.4774 64.4737L51.9317 63.5406L51.9725 37.2964V37.2961L51.9998 10.937L52.0004 10.4375H52.4998H56.5467H60.3728L60.5818 10.2285C60.6757 10.1346 60.6926 10.1131 60.7023 10.0968L60.7025 10.0965C60.7048 10.0927 60.7195 10.069 60.7315 9.97314C60.7613 9.73491 60.7508 9.30305 60.7227 8.313L60.7226 8.31002C60.7018 7.38089 60.6845 6.92296 60.6285 6.58866C60.5774 6.28327 60.4939 6.07927 60.2925 5.65637L60.292 5.65524C59.7372 4.48252 59.0512 3.77398 57.912 3.21041C57.9117 3.21024 57.9114 3.21008 57.911 3.20991L56.978 2.7557L36.38 2.72851C30.2696 2.72167 25.0344 2.73193 21.288 2.75243C19.4146 2.76268 17.9144 2.77548 16.8635 2.78999C16.3378 2.79723 15.9262 2.80489 15.6371 2.81281C15.4922 2.81678 15.3806 2.82075 15.3019 2.82463C15.2486 2.82726 15.2224 2.82944 15.2138 2.82998C14.857 2.9204 14.3918 3.12486 13.935 3.3929C13.4675 3.66722 13.0515 3.98314 12.7961 4.26168C12.5342 4.54742 12.1107 5.18623 11.8975 5.65015L11.8976 5.65018L11.8944 5.65689L11.5055 6.47108L11.4647 31.6099L11.4647 31.6102ZM56.9308 4.05849L56.9325 4.05896C57.4293 4.20349 57.9734 4.6126 58.399 5.03829C58.8239 5.46317 59.2323 6.00596 59.3775 6.50202C59.4921 6.88078 59.5623 7.53354 59.5623 7.98437V8.75V9.25H59.0623H55.7811H52.4998H51.9998V8.75V7.98437C51.9998 7.35788 52.064 6.83297 52.2554 6.34945C52.4478 5.86316 52.753 5.45866 53.1719 5.04655C53.6976 4.51411 54.2681 4.15104 54.9096 3.98351C55.5522 3.8157 56.2233 3.85525 56.9308 4.05849Z" fill="#92278F" stroke="#92278F"/>
                            <path d="M30.8785 8.32976L30.8784 8.32957C31.7294 8.01908 32.6131 8.1863 33.2182 8.72538L33.2239 8.73051L33.224 8.73046C33.5801 9.038 34.0062 9.24853 34.4395 9.24853C34.9439 9.24853 35.5077 9.51493 35.959 9.96175C36.4097 10.408 36.6816 10.9683 36.6875 11.4723C36.6875 11.473 36.6875 11.4736 36.6875 11.4743L37.1875 11.4692C37.1875 11.77 37.3242 12.0708 37.584 12.3853L30.8785 8.32976ZM30.8785 8.32976L30.8651 8.3342C30.654 8.40457 30.3238 8.60753 30.1647 8.75378L30.8785 8.32976ZM32.9097 10.3275L32.9139 10.3353L32.9179 10.3433C32.9254 10.3583 32.9596 10.4098 33.0277 10.4766C33.0926 10.5403 33.1607 10.5906 33.2119 10.6179L33.2119 10.6178L33.2226 10.6238C33.2916 10.6628 33.3313 10.6811 33.3565 10.6904C33.3761 10.6976 33.3829 10.6979 33.3853 10.6979L33.3856 10.698C33.4042 10.6987 33.4566 10.6954 33.6612 10.6274C34.1554 10.4515 34.7528 10.3885 35.1502 10.7858C35.5484 11.1841 35.4842 11.7834 35.3075 12.2782C35.238 12.4783 35.2524 12.6107 35.2955 12.709C35.3425 12.8162 35.4552 12.9534 35.7086 13.0971C36.0088 13.2626 36.2844 13.4686 36.4439 13.7345C36.5286 13.8756 36.5849 14.0414 36.5839 14.2248C36.5829 14.4068 36.5255 14.5718 36.4368 14.713C36.3521 14.8515 36.2209 14.9776 36.1083 15.0707C35.9892 15.1694 35.8463 15.2676 35.7014 15.3416C35.453 15.4837 35.3421 15.6194 35.2955 15.7256C35.2524 15.8238 35.238 15.9562 35.3075 16.1564C35.4842 16.6512 35.5484 17.2505 35.1502 17.6487C34.7519 18.047 34.1526 17.9828 33.6578 17.806C33.4577 17.7365 33.3253 17.7509 33.2271 17.794C33.1199 17.8411 32.9826 17.9537 32.8389 18.2071C32.712 18.4375 32.5669 18.6431 32.3961 18.7967C32.2217 18.9534 31.9932 19.0786 31.7188 19.0786C31.4443 19.0786 31.2158 18.9534 31.0414 18.7967C30.8706 18.6431 30.7255 18.4375 30.5986 18.2071C30.4549 17.9537 30.3176 17.8411 30.2104 17.794C30.1122 17.7509 29.9798 17.7365 29.7797 17.806C29.2848 17.9828 28.6856 18.047 28.2873 17.6487C27.8891 17.2505 27.9533 16.6512 28.1301 16.1564C28.1995 15.9562 28.1851 15.8238 28.142 15.7256C28.095 15.6184 27.9823 15.4811 27.7289 15.3375C27.4287 15.172 27.1531 14.966 26.9936 14.7001C26.9089 14.559 26.8526 14.3932 26.8536 14.2098C26.8546 14.0278 26.912 13.8628 27.0007 13.7216C27.0854 13.5831 27.2166 13.457 27.3292 13.3638C27.4483 13.2652 27.5912 13.167 27.7361 13.093C27.9845 12.9508 28.0954 12.8151 28.142 12.709C28.1851 12.6107 28.1995 12.4784 28.1301 12.2782C27.9533 11.7834 27.8891 11.1841 28.2873 10.7858C28.6847 10.3885 29.2821 10.4515 29.7763 10.6274C29.9809 10.6954 30.0333 10.6987 30.0519 10.698L30.0522 10.6979C30.0546 10.6979 30.0614 10.6976 30.081 10.6904C30.1062 10.6811 30.1459 10.6628 30.2149 10.6238L30.2148 10.6237L30.2256 10.6179C30.2768 10.5906 30.3449 10.5403 30.4098 10.4766C30.4779 10.4098 30.5121 10.3583 30.5196 10.3433L30.5196 10.3433L30.5222 10.3382C30.657 10.0761 30.8093 9.84155 30.989 9.66672C31.1722 9.48862 31.4169 9.34228 31.7188 9.34228C31.8905 9.34228 32.0516 9.39792 32.1736 9.4603C32.2985 9.52416 32.434 9.62132 32.5373 9.75406C32.6515 9.90101 32.8164 10.1565 32.9097 10.3275Z" fill="#92278F" stroke="#92278F"/>
                            <path d="M58.1782 15.915L58.1708 15.9171L58.1633 15.9191C57.0463 16.2105 56.057 17.0165 55.5469 18.0609L55.547 18.0609L55.5449 18.0651L55.2557 18.6435L55.2285 36.7778L55.2014 54.9097L56.9517 58.3574L56.9521 58.3582C57.4381 59.3198 57.8064 60.0419 58.1004 60.5825C58.3976 61.129 58.6043 61.4624 58.7654 61.663C58.844 61.761 58.8998 61.8118 58.9358 61.8379C58.9665 61.8601 58.9794 61.8621 58.9809 61.8623C58.9809 61.8623 58.9809 61.8623 58.981 61.8623C58.9994 61.8657 59.0508 61.8676 59.2702 61.7929C59.2785 61.7863 59.2964 61.7704 59.3248 61.7376C59.3936 61.6585 59.4936 61.5166 59.6457 61.2598C59.9484 60.7487 60.4054 59.8725 61.1731 58.3577L61.1733 58.3574L62.9239 54.9092L62.9375 38.445V38.4446V21.8747V21.3747H63.4375H64.1895C64.5026 21.3747 64.7766 21.386 65.017 21.4602C65.2835 21.5424 65.4682 21.6873 65.6371 21.8632L65.9713 22.1839L66.125 22.3315V22.5446V28.779V34.4997H66.7188H67.3125V28.7653C67.3125 26.5507 67.3022 24.9562 67.2768 23.8689C67.264 23.3247 67.2475 22.913 67.2272 22.6165C67.217 22.4682 67.2061 22.3535 67.195 22.2682C67.1895 22.2257 67.1842 22.1933 67.1796 22.1695C67.1748 22.1446 67.1719 22.1354 67.1724 22.1371L67.169 22.1264L67.1661 22.1157C67.1446 22.0368 67.0698 21.8745 66.9408 21.668C66.8174 21.4707 66.6683 21.271 66.5291 21.1201L66.5268 21.1176C66.2188 20.7794 65.9082 20.5539 65.5584 20.4089C65.2057 20.2628 64.7857 20.1872 64.2441 20.1872H63.4648H63.0325L62.9701 19.7594L62.875 19.107C62.8749 19.1064 62.8748 19.1058 62.8747 19.1052C62.8304 18.8209 62.6228 18.2343 62.408 17.83L62.407 17.8279C61.7795 16.6334 60.7227 15.9529 59.3236 15.8799L59.3219 15.8798C59.0897 15.8669 58.835 15.8638 58.6139 15.8717C58.3761 15.8803 58.2279 15.9003 58.1782 15.915ZM59.2646 61.7969C59.2645 61.797 59.2653 61.7966 59.2668 61.7955C59.2653 61.7963 59.2646 61.7969 59.2646 61.7969ZM60.1325 17.2307L60.1331 17.231C60.508 17.3903 60.8536 17.6985 61.1151 18.0239C61.3768 18.3496 61.6012 18.7509 61.6842 19.1449C61.6844 19.1457 61.6845 19.1465 61.6847 19.1473L61.7795 19.5804L61.9122 20.1872H61.291H59.0762L58.9519 20.1872C58.4187 20.1873 58.0018 20.1873 57.6871 20.1767C57.3702 20.1659 57.078 20.1442 56.8628 20.0622C56.7425 20.0164 56.5963 19.9339 56.4936 19.7779C56.3882 19.6179 56.3741 19.4498 56.384 19.3246C56.3934 19.2072 56.4263 19.0959 56.4548 19.0106C56.4798 18.9359 56.5115 18.8525 56.542 18.7723C56.5474 18.7583 56.5527 18.7444 56.5579 18.7306L56.5581 18.7299C57.0982 17.3124 58.7138 16.6299 60.1325 17.2307ZM61.75 30.6247V31.1247H61.25H59.0625H56.875H56.375V30.6247V26.2497V21.8747V21.3747H56.875H59.0625H61.25H61.75V21.8747V26.2497V30.6247ZM61.75 34.9997V35.4997H61.25H59.0625H56.875H56.375V34.9997V33.906V32.8122V32.3122H56.875H59.0625H61.25H61.75V32.8122V33.906V34.9997ZM61.75 53.5935V54.0935H61.25H59.0625H56.875H56.375V53.5935V45.3903V37.1872V36.6872H56.875H59.0625H61.25H61.75V37.1872V45.3903V53.5935ZM60.3035 57.4384L60.3035 57.4384L60.3027 57.4401C60.1023 57.8409 59.911 58.2062 59.7633 58.4735C59.69 58.6061 59.6244 58.7201 59.5722 58.8038C59.5471 58.8441 59.5191 58.8871 59.4913 58.924C59.4786 58.9408 59.4557 58.9702 59.4254 59.0001C59.4109 59.0145 59.3823 59.0415 59.3418 59.0681C59.314 59.0864 59.2115 59.1521 59.0625 59.1521C58.9135 59.1521 58.811 59.0864 58.7832 59.0681C58.7427 59.0415 58.7141 59.0145 58.6996 59.0001C58.6693 58.9702 58.6464 58.9408 58.6337 58.924C58.6059 58.8871 58.5779 58.8441 58.5528 58.8038C58.5006 58.7201 58.435 58.6061 58.3617 58.4735C58.214 58.2062 58.0227 57.8409 57.8223 57.4401L57.8215 57.4384L57.1105 56.0029L56.753 55.281H57.5586H59.0625H60.5664H61.372L61.0145 56.0029L60.3035 57.4384Z" fill="#92278F" stroke="#92278F"/>
                            <path d="M23.4688 24.0625V24.6562H25.1562H26.8438V24.0625V23.4688H25.1562H23.4688V24.0625Z" fill="#92278F" stroke="#92278F"/>
                            <path d="M30.0312 24.0625V24.6562H35H39.9688V24.0625V23.4688H35H30.0312V24.0625Z" fill="#92278F" stroke="#92278F"/>
                            <path d="M26.75 28.4375V29.0312H31.7188H36.6875V28.4375V27.8438H31.7188H26.75V28.4375Z" fill="#92278F" stroke="#92278F"/>
                            <path d="M16.9062 33.9062V34.5H17.5H18.0938V33.9062V33.3125H17.5H16.9062V33.9062Z" fill="#92278F" stroke="#92278F"/>
                            <path d="M21.2812 33.9062V34.5H33.9062H46.5312V33.9062V33.3125H33.9062H21.2812V33.9062Z" fill="#92278F" stroke="#92278F"/>
                            <path d="M21.2812 38.2812V38.875H29.5312H37.7812V38.2812V37.6875H29.5312H21.2812V38.2812Z" fill="#92278F" stroke="#92278F"/>
                            <path d="M40.9688 38.2812V38.875H43.75H46.5312V38.2812V37.6875H43.75H40.9688V38.2812Z" fill="#92278F" stroke="#92278F"/>
                            <path d="M16.9062 42.6562V43.25H17.5H18.0938V42.6562V42.0625H17.5H16.9062V42.6562Z" fill="#92278F" stroke="#92278F"/>
                            <path d="M21.2812 42.6562V43.25H33.9062H46.5312V42.6562V42.0625H33.9062H21.2812V42.6562Z" fill="#92278F" stroke="#92278F"/>
                            <path d="M21.2812 47.0312V47.625H24.0625H26.8438V47.0312V46.4375H24.0625H21.2812V47.0312Z" fill="#92278F" stroke="#92278F"/>
                            <path d="M30.0312 47.0312V47.625H38.2812H46.5312V47.0312V46.4375H38.2812H30.0312V47.0312Z" fill="#92278F" stroke="#92278F"/>
                            <path d="M16.9062 51.4062V52H17.5H18.0938V51.4062V50.8125H17.5H16.9062V51.4062Z" fill="#92278F" stroke="#92278F"/>
                            <path d="M21.2812 51.4062V52H29.5312H37.7812V51.4062V50.8125H29.5312H21.2812V51.4062Z" fill="#92278F" stroke="#92278F"/>
                            <path d="M40.9688 51.4062V52H43.75H46.5312V51.4062V50.8125H43.75H40.9688V51.4062Z" fill="#92278F" stroke="#92278F"/>
                            <path d="M21.2812 55.7812V56.375H33.9062H46.5312V55.7812V55.1875H33.9062H21.2812V55.7812Z" fill="#92278F" stroke="#92278F"/>
                        </svg>
{{--                        <i class="la la-file-text la-3x text-primary mb-2"></i>--}}
                        <h4 class="conditional-area-name">{{ translate('Terms & conditions') }}</h4>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-3">
                    <a class="text-reset single-conditional-area text-center" href="{{ route('returnpolicy') }}">
                        <svg class="mb-2" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.57422 2.14635C4.29297 2.18736 4.12891 2.20103 3.88281 2.47447C3.63672 2.74791 3.62305 3.07603 3.58203 7.47838L3.54102 12.2089L2.78906 13.0839L2.05078 13.9725L2.07812 36.6815L2.11914 59.4042L2.43359 60.4022C3.70508 64.5311 7.01367 67.3065 11.252 67.826C11.9629 67.9081 19.209 67.9491 30.8984 67.9217L49.4238 67.8807L50.5039 67.5663C53.5254 66.7186 55.8223 64.8319 57.1484 62.1385C57.9004 60.5799 58.1055 59.6913 58.2012 57.4217L58.2832 55.4393L59.6504 54.5506C63.4375 52.0897 66.2129 48.2342 67.3477 43.9139C67.7988 42.1639 68.0586 39.6073 67.8262 39.3202C67.4844 38.91 67.1699 39.0878 66.377 40.1268C65.3652 41.453 63.834 42.8749 62.4121 43.8182C61.291 44.5702 59.3223 45.5546 58.625 45.7323L58.2422 45.828V29.9003V13.9725L57.4902 13.0975L56.752 12.2225L56.7109 7.47838C56.6699 2.76158 56.6699 2.73424 56.3555 2.43346L56.041 2.119L33.5234 2.10533C21.1367 2.10533 9.46094 2.119 7.57422 2.14635ZM52.1309 5.60533L50.9277 6.97252H30.1465H9.36523L8.16211 5.60533L6.95898 4.23814H30.1465H53.334L52.1309 5.60533ZM50.4492 11.1424V13.2616L30.1875 13.2342L9.91211 13.1932L9.87109 11.1014L9.83008 9.0233H30.1465H50.4492V11.1424ZM56.1914 30.8846V46.4432L54.9883 46.6073C54.2227 46.703 51.1055 46.7577 46.4434 46.7577H39.1152L39.0742 44.5155C39.0332 41.9725 38.9238 41.6991 38.0488 41.6991C37.5566 41.6991 38.0898 41.2479 30.2832 48.2479C28.4102 49.9296 26.7832 51.4061 26.7012 51.5292C26.6055 51.6385 26.5234 51.9393 26.5234 52.1717C26.5234 52.5956 26.9199 52.9784 32.0879 57.6268C36.1211 61.2362 37.7344 62.6171 37.9668 62.6171C38.9102 62.6171 39.1016 62.0838 39.1016 59.5272V57.5858L45.5684 57.5174C51.502 57.4628 52.1309 57.4354 53.3203 57.1756C54.0312 57.0116 54.9883 56.7518 55.4258 56.6014L56.2324 56.328L56.1504 57.7362C56.0137 60.1014 55.248 61.8924 53.7168 63.4237C52.3496 64.7909 50.7637 65.5428 48.7539 65.7753C47.291 65.9393 13.002 65.9393 11.5391 65.7753C8.6543 65.4335 6.27539 63.8065 5.05859 61.3456C4.04688 59.2948 4.10156 60.7577 4.10156 36.8046V15.3124H30.1465H56.1914V30.8846Z" fill="#92278F"/>
                            <path d="M15.5862 18.1289C14.6565 18.5254 13.9319 19.4687 13.7405 20.5488C13.5217 21.6699 14.1916 23.0097 15.3127 23.7207L15.8323 24.0488L15.9006 26.414C15.969 28.998 16.1604 29.9961 16.9533 31.8965C18.1428 34.7675 20.8088 37.625 23.5979 39.0195C29.1213 41.7949 35.5061 40.8925 39.9084 36.709C41.1799 35.4922 41.9592 34.4804 42.7385 33.0312C43.9553 30.7343 44.4338 28.6972 44.4338 25.7578C44.4338 24.0488 44.4475 23.9394 44.7209 23.8574C44.8713 23.8027 45.2131 23.5703 45.4729 23.3515C46.758 22.2168 46.9084 20.3164 45.801 18.9765C44.4201 17.3086 41.6584 17.6367 40.674 19.5918C39.9358 21.0957 40.4416 22.8867 41.8362 23.6797L42.383 23.9941V25.7168C42.383 28.7382 41.8088 30.8164 40.3459 33.0312C38.4865 35.8476 35.5471 37.789 32.2522 38.3632C25.6076 39.5254 19.2366 35.041 18.0608 28.3828C17.9787 27.9316 17.9104 26.7695 17.9241 25.7851V23.9941L18.5666 23.584C20.1799 22.5586 20.426 20.1797 19.0588 18.8125C18.2112 17.9648 16.6662 17.664 15.5862 18.1289Z" fill="#92278F"/>
                        </svg>

                        {{--                        <i class="la la-mail-reply la-3x text-primary mb-2"></i>--}}
                        <h4 class="conditional-area-name">{{ translate('Return Policy') }}</h4>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-3">
                    <a class="text-reset single-conditional-area text-center" href="{{ route('supportpolicy') }}">
                        <svg class="mb-2" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.4238 0.136719C11.7715 0.683594 9.61133 2.58398 8.72266 5.16797L8.4082 6.08398V35V63.916L8.72266 64.8184C9.50195 67.0879 11.252 68.8379 13.5078 69.6172L14.4238 69.9316H35H55.5762L56.4922 69.6172C58.7207 68.8379 60.4023 67.1836 61.2773 64.8594L61.5918 64.0527L61.6328 39.7168C61.6602 21.4238 61.6191 15.2852 61.5098 14.9707C61.291 14.4375 47.5371 0.615234 46.8672 0.259766C46.375 0.0136719 45.9102 0 30.666 0.0136719C22.0391 0.0273438 14.7246 0.0820312 14.4238 0.136719ZM43.8867 10.1172C43.8867 15.8867 43.9004 16.1602 44.1602 16.6797C44.3379 17.0352 44.625 17.3223 44.9805 17.5C45.5 17.7598 45.7734 17.7734 51.543 17.7734H57.5586V40.373C57.5586 65.7617 57.6406 63.7656 56.5332 64.873C55.4395 65.9805 57.0664 65.8984 35 65.8984C12.9336 65.8984 14.5605 65.9805 13.4668 64.873C12.3457 63.7656 12.4414 66.4043 12.4414 35C12.4414 3.58203 12.3457 6.23438 13.4668 5.12695C14.5195 4.06055 13.5352 4.12891 29.5723 4.11523L43.8867 4.10156V10.1172ZM51.3379 10.3906L54.6191 13.6719H51.2969H47.9883V10.3906C47.9883 8.58594 48.002 7.10938 48.0293 7.10938C48.043 7.10938 49.5332 8.58594 51.3379 10.3906Z" fill="#92278F"/>
                            <path d="M28.5194 22.4627C28.1092 22.6951 27.8495 23.0096 27.4256 23.7889C26.1815 26.1131 23.8436 27.617 21.451 27.617C20.6444 27.617 19.8788 28.0682 19.5506 28.7244C19.2635 29.2713 19.2635 29.408 19.3182 36.6131C19.3729 44.8299 19.3866 45.076 20.371 48.0018C21.4647 51.324 23.0096 53.785 25.5526 56.3416C27.9862 58.7752 30.5975 60.4295 33.6463 61.4549C34.9178 61.8924 35.1366 61.8787 36.5995 61.3729C39.5936 60.3065 42.0272 58.7479 44.4471 56.3416C47.5643 53.2108 49.4374 49.7654 50.3397 45.4315C50.6268 44.0233 50.6405 43.5858 50.6952 36.6131C50.7362 29.408 50.7362 29.2713 50.4491 28.7244C50.121 28.0682 49.3553 27.617 48.5487 27.617C46.1561 27.617 43.8182 26.1131 42.5741 23.7889C41.6444 22.0662 42.0546 22.1483 34.9999 22.1483C29.0936 22.1483 29.0526 22.1483 28.5194 22.4627ZM39.7167 27.0018C41.1796 29.1346 43.5311 30.7752 45.9784 31.3494L46.6346 31.5135L46.5799 37.6658C46.5389 42.8748 46.4842 43.9686 46.2928 44.8436C45.7596 47.1268 44.8983 49.1639 43.6405 51.0643C42.7928 52.3494 40.5233 54.619 39.1835 55.5076C37.7342 56.4783 35.6014 57.4764 34.9862 57.4764C34.3026 57.4901 31.6639 56.1365 30.201 55.0428C26.8788 52.5408 24.6913 49.1092 23.7069 44.8436C23.5155 43.9686 23.4608 42.8748 23.4198 37.6248C23.3651 31.6229 23.3651 31.4451 23.6249 31.4451C24.0624 31.4451 25.8397 30.7889 26.7147 30.2967C28.1776 29.4627 29.4628 28.2459 30.4608 26.7557L30.8026 26.2498H34.9999H39.1971L39.7167 27.0018Z" fill="#92278F"/>
                            <path d="M39.7852 36.3669C39.5254 36.5036 37.8984 38.0349 36.1621 39.7712L33.0312 42.9294L31.582 41.5075C30.4473 40.3864 30.0371 40.0583 29.6406 39.9899C28.3008 39.7439 27.207 40.6325 27.207 41.9724C27.207 42.2868 27.2891 42.697 27.3984 42.9021C27.6309 43.3396 31.8008 47.4821 32.2246 47.7009C32.5938 47.8923 33.3594 47.8923 33.8652 47.7146C34.3027 47.5505 42.3008 39.6345 42.6016 39.0739C42.7109 38.8689 42.793 38.445 42.793 38.1169C42.793 36.572 41.166 35.615 39.7852 36.3669Z" fill="#92278F"/>
                        </svg>
{{--                        <i class="la la-support la-3x text-primary mb-2"></i>--}}
                        <h4 class="conditional-area-name">{{ translate('Support Policy') }}</h4>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-3">
                    <a class="text-reset single-conditional-area text-center" href="{{ route('privacypolicy') }}">
                        <svg class="mb-2" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="path-1-inside-1_1_8032" fill="white">
                                <path d="M45.1441 3.54124C39.8941 6.16624 37.9526 7.19163 37.6929 7.50608C37.228 8.06663 37.0503 8.72288 37.0503 9.93967V10.9377H29.6675C22.4624 10.9377 22.2847 10.9377 22.0112 11.2112C21.6421 11.5803 21.6421 12.3459 22.0386 12.7151C22.3257 12.9885 22.4761 12.9885 29.6948 12.9885H37.0503V14.5881C37.0503 16.2424 37.2691 19.7014 37.4058 20.1252C37.4741 20.3576 36.9956 20.3713 28.6694 20.3713H19.8648L19.5777 20.6858C19.1812 21.1096 19.1812 21.7795 19.5777 22.1487C19.8648 22.4221 20.0015 22.4221 28.8609 22.4221H37.8433L38.2808 23.6799C38.5132 24.3772 38.7456 25.0334 38.7866 25.1155C38.8276 25.2522 36.8042 25.2932 29.353 25.3205C20.2339 25.3615 19.8374 25.3752 19.564 25.6213C19.1948 25.9631 19.1812 26.7014 19.5503 27.0705C19.8237 27.344 20.0015 27.344 29.8726 27.344H39.9077L40.5093 28.26C40.8374 28.7795 41.3159 29.4358 41.562 29.7365L41.9995 30.2834L35.8198 30.3518C29.9136 30.4201 29.6402 30.4338 29.4487 30.6799C29.1343 31.1311 29.2026 31.801 29.6128 32.1155C29.9683 32.4026 30.105 32.4026 37.0093 32.4026H44.0366L45.021 33.2639C46.648 34.6721 49.2319 36.5178 51.4741 37.885C52.1577 38.2951 53.3472 38.3362 53.9077 37.967L54.2769 37.7346V50.176V62.6174H40.8784H27.48V61.4553C27.48 60.4709 27.439 60.2522 27.2066 60.0198C26.8374 59.6506 26.0991 59.6643 25.7573 60.0334C25.5249 60.2932 25.4976 60.635 25.4292 64.1076L25.3609 67.8811L14.6421 67.9221C6.83546 67.9358 3.88234 67.9084 3.74562 67.7991C3.58156 67.676 3.55421 66.3225 3.55421 60.2385C3.55421 56.178 3.6089 52.76 3.66359 52.6643C3.75929 52.5276 6.02882 52.5002 14.5737 52.5276L25.3609 52.5686L25.4292 54.428C25.4839 56.0139 25.5386 56.342 25.7573 56.5881C26.0991 56.9573 26.8374 56.9709 27.2066 56.6018C27.4527 56.3557 27.48 56.1506 27.48 54.2776V52.2268H35.9566H44.4468L44.7749 51.885C45.2124 51.4612 45.2124 50.9416 44.7749 50.5178L44.4468 50.176H34.3159H24.1987V48.7405V47.3049L34.398 47.2776L44.5972 47.2366L44.8569 46.9084C45.1987 46.4983 45.1851 46.0608 44.8296 45.6096L44.5562 45.2541H34.3706H24.1987L24.1304 44.8713C24.021 44.3655 23.6792 42.9299 23.5698 42.5471L23.4878 42.2463H29.0112C34.2066 42.2463 34.562 42.2326 34.7671 42.0002C35.0952 41.6311 35.0679 40.8381 34.7124 40.5237C34.439 40.2776 34.0972 40.2639 28.3277 40.2229L22.2437 40.1819L21.1089 39.1155C19.8511 37.9123 18.3335 37.0647 16.8159 36.7092C14.9155 36.2717 12.0581 36.5451 10.5405 37.3244L9.98 37.5979V25.2932V12.9885H14.0269C18.7163 12.9885 18.853 12.9612 18.8667 11.9358C18.8667 11.6623 18.7573 11.3889 18.5659 11.2112C18.2788 10.9514 18.1148 10.9377 13.7534 10.9377C9.46046 10.9377 9.2007 10.9514 8.77687 11.2112C7.8882 11.758 7.92921 11.0881 7.92921 25.7444V39.0608L7.6421 39.3205C7.21828 39.7033 6.2339 41.1115 5.82375 41.9455C5.08546 43.3948 4.9214 44.4612 4.9214 47.6057V50.4494H4.21046C2.84328 50.4631 1.9546 51.1194 1.64015 52.3772C1.54445 52.7873 1.50343 55.3576 1.53078 60.5666C1.57179 69.1252 1.54445 68.8381 2.6382 69.5627L3.19875 69.9319L14.2046 69.9729C20.2612 70.0002 25.4292 69.9729 25.6753 69.9319C26.2222 69.8362 27.0562 69.1252 27.2886 68.5373C27.4116 68.2502 27.48 67.5119 27.48 66.3772V64.6682L41.439 64.6408L55.398 64.5998L55.8628 64.094L56.3276 63.5744V49.9983V36.4084L57.271 35.7795C59.6499 34.1936 62.7944 31.3088 64.271 29.3537C66.3902 26.51 67.7163 23.1877 68.2359 19.4143C68.4273 17.9787 68.4956 8.94163 68.3316 8.31272C68.0718 7.41038 67.7027 7.19163 60.4019 3.54124C54.7417 0.711159 53.1968 0.000221252 52.773 0.000221252C52.3491 0.000221252 50.8042 0.711159 45.1441 3.54124ZM59.6089 5.40061C65.5151 8.35374 66.3081 8.79124 66.3902 9.10569C66.4448 9.31077 66.4448 11.5119 66.4038 14.0002C66.3081 19.9338 65.9937 21.7932 64.5855 24.8694C63.4507 27.3576 61.0718 30.2151 58.3374 32.4162C57.0523 33.4553 52.9917 36.2307 52.773 36.2307C52.5542 36.2307 48.4253 33.4006 47.1675 32.3752C44.4605 30.2014 42.3276 27.6584 41.1519 25.2385C39.4839 21.7795 39.0464 19.0315 39.1284 12.3049L39.1694 8.81858L45.8687 5.44163C49.5601 3.58225 52.6499 2.06467 52.7456 2.06467C52.8276 2.051 55.9175 3.55491 59.6089 5.40061ZM16.4741 38.76C18.8257 39.3752 20.8081 41.1936 21.7105 43.5862C22.0386 44.4475 22.0659 44.6936 22.1206 47.469L22.1753 50.4494H21.1499H20.1245L20.0698 47.6057L20.0288 44.7619L19.5093 43.7229C18.9214 42.5198 18.0464 41.6448 16.8433 41.0569C16.1323 40.7014 15.9273 40.674 14.5601 40.674C13.1382 40.674 13.0015 40.7014 12.1538 41.1115C11.0601 41.6584 9.98 42.7522 9.46046 43.8459C9.105 44.6116 9.09132 44.7209 9.05031 47.5373L9.00929 50.4494H7.9839H6.97218V47.6604C6.97218 45.0627 6.99953 44.7756 7.31398 43.7912C8.29835 40.6741 11.1694 38.5549 14.4234 38.5549C15.1069 38.5549 16.023 38.6506 16.4741 38.76ZM16.105 43.0119C16.5015 43.2033 16.9937 43.5862 17.2261 43.8596C17.9234 44.7073 18.0464 45.3088 18.0464 48.0158V50.4494H14.5601H11.0737V47.8244C11.0737 45.4866 11.1011 45.1448 11.3472 44.6389C12.2085 42.8752 14.3413 42.1369 16.105 43.0119Z"/>
                            </mask>
                            <path d="M45.1441 3.54124C39.8941 6.16624 37.9526 7.19163 37.6929 7.50608C37.228 8.06663 37.0503 8.72288 37.0503 9.93967V10.9377H29.6675C22.4624 10.9377 22.2847 10.9377 22.0112 11.2112C21.6421 11.5803 21.6421 12.3459 22.0386 12.7151C22.3257 12.9885 22.4761 12.9885 29.6948 12.9885H37.0503V14.5881C37.0503 16.2424 37.2691 19.7014 37.4058 20.1252C37.4741 20.3576 36.9956 20.3713 28.6694 20.3713H19.8648L19.5777 20.6858C19.1812 21.1096 19.1812 21.7795 19.5777 22.1487C19.8648 22.4221 20.0015 22.4221 28.8609 22.4221H37.8433L38.2808 23.6799C38.5132 24.3772 38.7456 25.0334 38.7866 25.1155C38.8276 25.2522 36.8042 25.2932 29.353 25.3205C20.2339 25.3615 19.8374 25.3752 19.564 25.6213C19.1948 25.9631 19.1812 26.7014 19.5503 27.0705C19.8237 27.344 20.0015 27.344 29.8726 27.344H39.9077L40.5093 28.26C40.8374 28.7795 41.3159 29.4358 41.562 29.7365L41.9995 30.2834L35.8198 30.3518C29.9136 30.4201 29.6402 30.4338 29.4487 30.6799C29.1343 31.1311 29.2026 31.801 29.6128 32.1155C29.9683 32.4026 30.105 32.4026 37.0093 32.4026H44.0366L45.021 33.2639C46.648 34.6721 49.2319 36.5178 51.4741 37.885C52.1577 38.2951 53.3472 38.3362 53.9077 37.967L54.2769 37.7346V50.176V62.6174H40.8784H27.48V61.4553C27.48 60.4709 27.439 60.2522 27.2066 60.0198C26.8374 59.6506 26.0991 59.6643 25.7573 60.0334C25.5249 60.2932 25.4976 60.635 25.4292 64.1076L25.3609 67.8811L14.6421 67.9221C6.83546 67.9358 3.88234 67.9084 3.74562 67.7991C3.58156 67.676 3.55421 66.3225 3.55421 60.2385C3.55421 56.178 3.6089 52.76 3.66359 52.6643C3.75929 52.5276 6.02882 52.5002 14.5737 52.5276L25.3609 52.5686L25.4292 54.428C25.4839 56.0139 25.5386 56.342 25.7573 56.5881C26.0991 56.9573 26.8374 56.9709 27.2066 56.6018C27.4527 56.3557 27.48 56.1506 27.48 54.2776V52.2268H35.9566H44.4468L44.7749 51.885C45.2124 51.4612 45.2124 50.9416 44.7749 50.5178L44.4468 50.176H34.3159H24.1987V48.7405V47.3049L34.398 47.2776L44.5972 47.2366L44.8569 46.9084C45.1987 46.4983 45.1851 46.0608 44.8296 45.6096L44.5562 45.2541H34.3706H24.1987L24.1304 44.8713C24.021 44.3655 23.6792 42.9299 23.5698 42.5471L23.4878 42.2463H29.0112C34.2066 42.2463 34.562 42.2326 34.7671 42.0002C35.0952 41.6311 35.0679 40.8381 34.7124 40.5237C34.439 40.2776 34.0972 40.2639 28.3277 40.2229L22.2437 40.1819L21.1089 39.1155C19.8511 37.9123 18.3335 37.0647 16.8159 36.7092C14.9155 36.2717 12.0581 36.5451 10.5405 37.3244L9.98 37.5979V25.2932V12.9885H14.0269C18.7163 12.9885 18.853 12.9612 18.8667 11.9358C18.8667 11.6623 18.7573 11.3889 18.5659 11.2112C18.2788 10.9514 18.1148 10.9377 13.7534 10.9377C9.46046 10.9377 9.2007 10.9514 8.77687 11.2112C7.8882 11.758 7.92921 11.0881 7.92921 25.7444V39.0608L7.6421 39.3205C7.21828 39.7033 6.2339 41.1115 5.82375 41.9455C5.08546 43.3948 4.9214 44.4612 4.9214 47.6057V50.4494H4.21046C2.84328 50.4631 1.9546 51.1194 1.64015 52.3772C1.54445 52.7873 1.50343 55.3576 1.53078 60.5666C1.57179 69.1252 1.54445 68.8381 2.6382 69.5627L3.19875 69.9319L14.2046 69.9729C20.2612 70.0002 25.4292 69.9729 25.6753 69.9319C26.2222 69.8362 27.0562 69.1252 27.2886 68.5373C27.4116 68.2502 27.48 67.5119 27.48 66.3772V64.6682L41.439 64.6408L55.398 64.5998L55.8628 64.094L56.3276 63.5744V49.9983V36.4084L57.271 35.7795C59.6499 34.1936 62.7944 31.3088 64.271 29.3537C66.3902 26.51 67.7163 23.1877 68.2359 19.4143C68.4273 17.9787 68.4956 8.94163 68.3316 8.31272C68.0718 7.41038 67.7027 7.19163 60.4019 3.54124C54.7417 0.711159 53.1968 0.000221252 52.773 0.000221252C52.3491 0.000221252 50.8042 0.711159 45.1441 3.54124ZM59.6089 5.40061C65.5151 8.35374 66.3081 8.79124 66.3902 9.10569C66.4448 9.31077 66.4448 11.5119 66.4038 14.0002C66.3081 19.9338 65.9937 21.7932 64.5855 24.8694C63.4507 27.3576 61.0718 30.2151 58.3374 32.4162C57.0523 33.4553 52.9917 36.2307 52.773 36.2307C52.5542 36.2307 48.4253 33.4006 47.1675 32.3752C44.4605 30.2014 42.3276 27.6584 41.1519 25.2385C39.4839 21.7795 39.0464 19.0315 39.1284 12.3049L39.1694 8.81858L45.8687 5.44163C49.5601 3.58225 52.6499 2.06467 52.7456 2.06467C52.8276 2.051 55.9175 3.55491 59.6089 5.40061ZM16.4741 38.76C18.8257 39.3752 20.8081 41.1936 21.7105 43.5862C22.0386 44.4475 22.0659 44.6936 22.1206 47.469L22.1753 50.4494H21.1499H20.1245L20.0698 47.6057L20.0288 44.7619L19.5093 43.7229C18.9214 42.5198 18.0464 41.6448 16.8433 41.0569C16.1323 40.7014 15.9273 40.674 14.5601 40.674C13.1382 40.674 13.0015 40.7014 12.1538 41.1115C11.0601 41.6584 9.98 42.7522 9.46046 43.8459C9.105 44.6116 9.09132 44.7209 9.05031 47.5373L9.00929 50.4494H7.9839H6.97218V47.6604C6.97218 45.0627 6.99953 44.7756 7.31398 43.7912C8.29835 40.6741 11.1694 38.5549 14.4234 38.5549C15.1069 38.5549 16.023 38.6506 16.4741 38.76ZM16.105 43.0119C16.5015 43.2033 16.9937 43.5862 17.2261 43.8596C17.9234 44.7073 18.0464 45.3088 18.0464 48.0158V50.4494H14.5601H11.0737V47.8244C11.0737 45.4866 11.1011 45.1448 11.3472 44.6389C12.2085 42.8752 14.3413 42.1369 16.105 43.0119Z" fill="#92278F" stroke="#92278F" stroke-width="2" mask="url(#path-1-inside-1_1_8032)"/>
                            <path d="M43.3059 14.4524L43.3057 14.4529C43.131 14.9501 43.0504 15.2192 43.0058 15.5938C42.9587 15.9889 42.9512 16.5068 42.9512 17.5C42.9512 18.4932 42.9587 19.0111 43.0058 19.4062C43.0503 19.7806 43.1309 20.0496 43.3054 20.5463C43.8671 22.1266 44.5907 23.2658 45.8651 24.5272C47.8343 26.4702 49.895 27.3086 52.7051 27.3086C53.975 27.3086 54.4996 27.2427 55.3021 27.0134L55.3043 27.0127C57.5282 26.3885 59.643 24.847 60.8887 22.9785L60.8891 22.9779C61.6275 21.8736 61.9478 21.0786 61.9726 20.6096C61.9841 20.3919 61.9293 20.3152 61.9013 20.2876C61.8673 20.2539 61.7654 20.1875 61.4961 20.1875C61.3673 20.1875 61.3161 20.1973 61.2899 20.2061C61.277 20.2104 61.2534 20.2188 61.2066 20.2699C61.0787 20.4093 60.9125 20.7067 60.5806 21.4058L60.5806 21.4059L60.5784 21.4104C58.6335 25.4018 53.9215 27.299 49.7177 25.7628C46.1971 24.4876 43.9336 21.2504 43.9336 17.5C43.9336 15.9855 44.1984 14.8564 44.9024 13.4483C46.3873 10.4785 49.9137 8.46914 53.2333 8.71615C57.0677 8.99119 60.0857 11.4472 61.1827 15.1711C61.3715 15.8074 61.4928 16.0881 61.5978 16.2209C61.6364 16.2698 61.6617 16.2831 61.6819 16.291C61.7116 16.3027 61.7697 16.3164 61.8926 16.3164C62.0871 16.3164 62.1834 16.277 62.2282 16.2466C62.2634 16.2229 62.3053 16.18 62.3338 16.0662C62.402 15.7935 62.3524 15.2723 62.0612 14.4053L62.0604 14.403C61.06 11.3757 58.4264 8.85951 55.375 8.00159C54.9133 7.87712 54.1234 7.76408 53.3264 7.70005C52.5202 7.63528 51.7833 7.62706 51.4167 7.68515C47.6052 8.29887 44.5711 10.8394 43.3059 14.4524Z" fill="#92278F" stroke="#92278F"/>
                            <path d="M54.4685 16.5566L52.2264 18.7852L50.8865 17.459C49.7654 16.3379 49.492 16.1328 49.1229 16.1328C48.8221 16.1328 48.6033 16.2422 48.4119 16.4883C47.865 17.1855 47.9744 17.418 49.9432 19.373C51.5701 21 51.8025 21.1914 52.2264 21.1914C52.6502 21.1914 52.9373 20.959 55.3299 18.5527C57.7771 16.1191 57.9685 15.8867 57.9685 15.4355C57.9685 14.8887 57.6951 14.5605 57.1072 14.4238C56.7517 14.3281 56.5603 14.4785 54.4685 16.5566Z" fill="#92278F"/>
                            <path d="M19.5502 30.625C19.1401 31.0352 19.1811 31.7598 19.6323 32.1152C19.9741 32.3887 20.1655 32.4023 23.1733 32.4023C26.1811 32.4023 26.3725 32.3887 26.7143 32.1152C27.1655 31.7598 27.2065 31.0352 26.7963 30.625C26.5366 30.3652 26.3452 30.3516 23.1733 30.3516C20.0014 30.3516 19.81 30.3652 19.5502 30.625Z" fill="#92278F"/>
                            <path d="M19.632 35.5605C19.1672 35.9297 19.1399 36.6406 19.5774 37.0508C19.8781 37.3242 19.9875 37.3242 32.1555 37.3242H44.4465L44.7746 36.9824C45.2121 36.5586 45.2121 36.0391 44.7746 35.6152L44.4465 35.2734H32.2239C20.0559 35.2734 20.0012 35.2734 19.632 35.5605Z" fill="#92278F"/>
                            <path d="M37.4609 40.291C37.0098 40.4551 36.7773 40.7969 36.7773 41.2891C36.7773 42.2324 36.8184 42.2461 40.9062 42.2461C44.5156 42.2461 44.5293 42.2461 44.8164 41.9316C45.3496 41.3711 45.1582 40.6055 44.4199 40.3457C43.9687 40.1953 37.8574 40.1406 37.4609 40.291Z" fill="#92278F"/>
                        </svg>
{{--                        <i class="las la-exclamation-circle la-3x text-primary mb-2"></i>--}}
                        <h4 class="conditional-area-name">{{ translate('Privacy Policy') }}</h4>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="footer bg-white pt-0">
        <div class="footer-branding-outer">
            <div class="container">
                <div class="footer-branding border-top-base">
                    <div class="row w-100">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="ekshop-logo-footer">
                                <div class="logo">
                                    <a href="{{ route('home') }}">
                                        @if(get_setting('footer_logo') != null)
                                            <img class="lazyload" src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset(get_setting('footer_logo')) }}" alt="{{ env('APP_NAME') }}" height="44">
                                        @else
                                            <img class="lazyload" src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ static_asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}" height="44">
                                        @endif
                                    </a>
                                </div>
                                <p class="mb-0 text-dark d-flex">
                                    <span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 5.6V20L7.36364 16.4L14.6364 20L21 16.4V2L14.6364 5.6L7.36364 2L1 5.6Z" stroke="#92278F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M7.33301 1.8335V16.5002" stroke="#92278F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M14.667 5.5V20.1667" stroke="#92278F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                    <span>{{ get_setting('contact_address',null,App::getLocale()) }}</span>
                                </p>
                                <p class="mb-0 text-dark d-flex">
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 2C6.486 2 2 6.486 2 12V16.143C2 17.167 2.897 18 4 18H5C5.26522 18 5.51957 17.8946 5.70711 17.7071C5.89464 17.5196 6 17.2652 6 17V11.857C6 11.5918 5.89464 11.3374 5.70711 11.1499C5.51957 10.9624 5.26522 10.857 5 10.857H4.092C4.648 6.987 7.978 4 12 4C16.022 4 19.352 6.987 19.908 10.857H19C18.7348 10.857 18.4804 10.9624 18.2929 11.1499C18.1054 11.3374 18 11.5918 18 11.857V18C18 19.103 17.103 20 16 20H14V19H10V22H16C18.206 22 20 20.206 20 18C21.103 18 22 17.167 22 16.143V12C22 6.486 17.514 2 12 2Z" fill="#92278F"/>
                                        </svg>
                                    </span>
                                    <span>{{ get_setting('contact_phone') }}</span>
                                </p>
                                <p class="mb-0 text-dark d-flex">
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.3337 1.6665L9.16699 10.8332" stroke="#92278F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M18.3337 1.6665L12.5003 18.3332L9.16699 10.8332L1.66699 7.49984L18.3337 1.6665Z" stroke="#92278F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                    <span>&nbsp;
                                        <a href="mailto:{{ get_setting('contact_email') }}" class="text-reset">{{ get_setting('contact_email')  }}</a>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="ekshop-contact-info">
                                <div class="ekshop-contact-info-inner">
                                    <span class="title">{{ translate('My Account') }}</span>
                                    <ul class="contact-info-unorder-list">
                                        @if (Auth::check())
                                            <li class="contact-info-list">
                                                <a href="{{ route('logout') }}">
{{--                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"--}}
{{--                                                         viewBox="0 0 1024 1024" height="1em" width="1em"--}}
{{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                        <path d="M765.7 486.8L314.9 134.7A7.97 7.97 0 0 0 302 141v77.3c0 4.9 2.3 9.6 6.1 12.6l360 281.1-360 281.1c-3.9 3-6.1 7.7-6.1 12.6V883c0 6.7 7.7 10.4 12.9 6.3l450.8-352.1a31.96 31.96 0 0 0 0-50.4z"></path>--}}
{{--                                                    </svg>--}}
                                                    {{ translate('Logout') }}
                                                </a>
                                            </li>
                                        @else
                                            <li class="contact-info-list">
                                                <a href="{{ route('user.login') }}">
{{--                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"--}}
{{--                                                         viewBox="0 0 1024 1024" height="1em" width="1em"--}}
{{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                        <path d="M765.7 486.8L314.9 134.7A7.97 7.97 0 0 0 302 141v77.3c0 4.9 2.3 9.6 6.1 12.6l360 281.1-360 281.1c-3.9 3-6.1 7.7-6.1 12.6V883c0 6.7 7.7 10.4 12.9 6.3l450.8-352.1a31.96 31.96 0 0 0 0-50.4z"></path>--}}
{{--                                                    </svg>--}}
                                                    {{ translate('Login') }}
                                                </a>
                                            </li>
                                        @endif

                                        <li class="contact-info-list">
                                            <a class="contact-info-list" href="{{ route('purchase_history.index') }}">
{{--                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"--}}
{{--                                                     viewBox="0 0 1024 1024" height="1em" width="1em"--}}
{{--                                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                    <path d="M765.7 486.8L314.9 134.7A7.97 7.97 0 0 0 302 141v77.3c0 4.9 2.3 9.6 6.1 12.6l360 281.1-360 281.1c-3.9 3-6.1 7.7-6.1 12.6V883c0 6.7 7.7 10.4 12.9 6.3l450.8-352.1a31.96 31.96 0 0 0 0-50.4z"></path>--}}
{{--                                                </svg>--}}
                                                {{ translate('Order History') }}
                                            </a>
                                        </li>

                                        <li class="contact-info-list">
                                            <a class="contact-info-list" href="{{ route('wishlists.index') }}">
{{--                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"--}}
{{--                                                     viewBox="0 0 1024 1024" height="1em" width="1em"--}}
{{--                                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                    <path d="M765.7 486.8L314.9 134.7A7.97 7.97 0 0 0 302 141v77.3c0 4.9 2.3 9.6 6.1 12.6l360 281.1-360 281.1c-3.9 3-6.1 7.7-6.1 12.6V883c0 6.7 7.7 10.4 12.9 6.3l450.8-352.1a31.96 31.96 0 0 0 0-50.4z"></path>--}}
{{--                                                </svg>--}}
                                                {{ translate('My Wishlist') }}
                                            </a>
                                        </li>

                                        <li class="contact-info-list">
                                            <a class="contact-info-list" href="{{ route('orders.track') }}">
{{--                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"--}}
{{--                                                     viewBox="0 0 1024 1024" height="1em" width="1em"--}}
{{--                                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                    <path d="M765.7 486.8L314.9 134.7A7.97 7.97 0 0 0 302 141v77.3c0 4.9 2.3 9.6 6.1 12.6l360 281.1-360 281.1c-3.9 3-6.1 7.7-6.1 12.6V883c0 6.7 7.7 10.4 12.9 6.3l450.8-352.1a31.96 31.96 0 0 0 0-50.4z"></path>--}}
{{--                                                </svg>--}}
                                                {{ translate('Track Order') }}
                                            </a>
                                        </li>
                                    </ul>


                                    <span class="title">{{ translate('Be a Seller') }}</span>
                                    <br/>
                                    <a href="{{ route('shops.create') }}" class="btn btn-primary shadow-md footer-apply-now">
                                        {{ translate('Apply Now ') }}
                                        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 5C0 2.23858 2.23858 0 5 0H26C28.7614 0 31 2.23858 31 5V26C31 28.7614 28.7614 31 26 31H5C2.23858 31 0 28.7614 0 26V5Z" fill="white"/>
                                            <path d="M10 15.5H21M21 15.5L17.3333 12M21 15.5L17.3333 19" stroke="#92278F" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="download-and-social-link">
                                <div class="app-download-area mb-4"><h4 class="title">Download Mobile App</h4>

                                    <div class="d-flex">
                                        @if(get_setting('play_store_link') != null)
                                            <a href="{{ get_setting('play_store_link') }}" target="_blank" class="app-download d-inline-block mr-3 ml-0">
                                                <img src="{{ static_asset('assets/img/play.png') }}">
                                            </a>
                                        @endif

                                        @if(get_setting('app_store_link') != null)
                                            <a href="{{ get_setting('app_store_link') }}" target="_blank" class="app-download  d-inline-block">
                                                <img src="{{ static_asset('assets/img/app.png') }}" class="mx-100 h-40px">
                                            </a>
                                        @endif
                                    </div>

                                </div>

                                @if ( get_setting('show_social_links') )
                                    <div class="app-download-area mb-4">
                                        <h4 class="title">Follow Us</h4>
                                        <ul class="contact-info-unorder-list">

                                            @if ( get_setting('facebook_link') !=  null )
                                                <li class="contact-info-list">
                                                    <a href="https://www.facebook.com/ekshopofficial/" target="_blank">
                                                        <i class="lab la-facebook-f"></i>
                                                    </a>
                                                </li>
                                            @endif

                                            @if ( get_setting('twitter_link') !=  null )
                                                <li class="contact-info-list">
                                                    <a href="{{ get_setting('twitter_link') }}" target="_blank">
                                                        <i class="lab la-twitter"></i>
                                                    </a>
                                                </li>
                                            @endif

                                            @if ( get_setting('instagram_link') !=  null )
                                                <li class="contact-info-list">
                                                    <a href="{{ get_setting('instagram_link') }}" target="_blank">
                                                        <i class="lab la-linkedin-in"></i>
                                                    </a>
                                                </li>
                                            @endif

                                            @if ( get_setting('youtube_link') !=  null )
                                                <li class="contact-info-list">
                                                    <a href="{{ get_setting('youtube_link') }}" target="_blank">
                                                        <i class="lab la-instagram"></i>
                                                    </a>
                                                </li>
                                            @endif

                                            @if ( get_setting('linkedin_link') !=  null )
                                                <li class="contact-info-list">
                                                    <a href="{{ get_setting('linkedin_link') }}" target="_blank">
                                                        <i class="lab la-youtube"></i>
                                                    </a>
                                                </li>
                                            @endif

                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <div class="download-and-social-link">
                                <div class="app-download-area">
                                    <h4 class="title">Subscribe</h4>
                                    {!! get_setting('about_us_description',null,App::getLocale()) !!}
                                    <form class="form-inline w-100 w-100-custom" method="POST" action="{{ route('subscribers.store') }}">
                                        @csrf
                                        <div class="form-group mb-0 w-100 position-relative">
                                            <svg class="subscrib-svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <path d="M14.6663 1.3335L7.33301 8.66683" stroke="#BFBFBF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M14.6663 1.3335L9.99968 14.6668L7.33301 8.66683L1.33301 6.00016L14.6663 1.3335Z" stroke="#BFBFBF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <input type="email" class="form-control w-100 subscrib-input" placeholder="{{ translate('Your Email Address') }}" name="email" required>
                                            <button type="submit" class="btn btn-primary bg-white border-0 btn-hover-none subscrib-button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                                    <path d="M0 5C0 2.23858 2.23858 0 5 0H26C28.7614 0 31 2.23858 31 5V26C31 28.7614 28.7614 31 26 31H5C2.23858 31 0 28.7614 0 26V5Z" fill="#92278F"/>
                                                    <path d="M10 15.5H21M21 15.5L17.3333 12M21 15.5L17.3333 19" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

{{--                <div class="footer-branding justify-content-center align-items-center">--}}
{{--                    <div class="payment-part">--}}
{{--                        <div class="footer-part-title">Payment secured by ESCROW:</div>--}}
{{--                        <ul class="payment-channel-area">--}}
{{--                            <li class="payment-channel-list escrow">--}}
{{--                                <div class="payment-channel-list-single">--}}
{{--                                    <img class="payment-channel-list-img" src="{{ static_asset('assets/img/escrow.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}

                @if ( get_setting('payment_method_images') !=  null )
                <div class="footer-branding global-section-area-bottom">
                    <div class="payment-part">
                        <div class="footer-part-title">Payment Option:</div>
                        <ul class="payment-channel-area">
                            @foreach (explode(',', get_setting('payment_method_images')) as $key => $value)
                                <li class="payment-channel-list">
                                    <div class="payment-channel-list-single">
                                        <img class="payment-channel-list-img" src="{{ uploaded_asset($value) }}" alt="">
                                    </div>
                                </li>
                            @endforeach

                            <li class="payment-channel-list">
                                <div class="payment-channel-list-single">
                                    <img class="payment-channel-list-img" src="{{ static_asset('assets/img/ssl-commerz.png') }}" alt="">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                @endif

{{--                <div class="footer-branding justify-content-around">--}}
{{--                    <div class="logos">--}}
{{--                        <div class="footer-logo"><span class="title">Planning and Implementation</span>--}}
{{--                            <div class="logo">--}}
{{--                                <img src="https://ekshop.gov.bd/static/media/footer-logos.4cc67b9f.png" alt="Footer Logos">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="footer-logo">--}}
{{--                            <span class="title">Developed by</span>--}}
{{--                            <a href="https://parallaxlogic.com/" rel="noopener noreferrer" target="_blank" class="logo">--}}
{{--                                <div class="logo">--}}
{{--                                    <img src="https://ekshop.gov.bd/static/media/plx.94738bda.png" alt="Footer Logos">--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="footer-bottom-part-outer">
            <div class="container">
                <div class="footer-bottom-part justify-content-center">
{{--                    <ul class="footer-menu">--}}
{{--                        <li><a href="https://marketplace.dpg.gov.bd/">marketplace.dpg.gov.bd</a></li>--}}
{{--                    </ul>--}}

                    <div class="copyright" current-verison="{{get_setting("current_version")}}">
                        {!! get_setting('frontend_copyright_text',null,App::getLocale()) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
