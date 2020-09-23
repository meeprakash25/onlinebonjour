@extends('layout')
@push('css')
    <style>
        .modal {
            padding: 0 !important;
        }

        .modal .modal-fullscreen {
            min-width: 100%;
            margin: 0;
        }

        .modal .modal-fullscreen .modal-content {
            min-height: 100vh;
            border-radius: 0;
            width: 100%;
            padding: 0;
            margin: 0;
            background: #ed1c24;
            color: #fff;
        }

        .modal .modal-header {
            border-bottom: 1px solid rgba(255, 255, 255, 0.5);
            padding: 1px;
        }

        .modal .modal-header .close {
            color: gold;
            padding: 5px 10px;
            margin: 5px;
        }

        .modal footer {
            position: absolute;
            bottom: 0px;
            left: 0px;
            right: 0px;
            background: #ed1c24;
            padding-top: 22px;
            border-top: 1px solid rgba(255, 255, 255, 0.5);
        }

        .modal a {
            font-size: 13px;
        }

        .modal .leftlinks {
            color: rgba(255, 255, 255, 0.7);
            position: relative;
            bottom: 12px;
            left: 18px;
            padding-right: 15px;
            padding-left: 15px;
        }

        .modal .rightlinks {
            color: rgba(255, 255, 255, 0.7);
            position: relative;
            bottom: 9px;
            float: right;
            right: 18px;
            padding-right: 15px;
            padding-left: 15px;
        }

        .modal .leftlinks:hover,
        .modal .rightlinks:hover {
            color: rgba(255, 255, 255, .9);
        }

        .modal .search-categories {
            background-color: #fff;
            border: 1px solid #dee2e6;
            position: relative;
            width: 100%;
        }

        .modal .search-categories #category_id {
            float: left;
            background-color: #fff;
            border: 1px solid #fff;
            border-radius: 0;
            width: 150px;
            padding: 8px 0 8px 10px;
            margin-right: 9px;
        }

        .modal .search-categories input {
            float: left;
            padding: 0.5625rem;
            width: calc(100% - 224px);
            border-radius: 0;
            border-right: none;
            border-top: none;
            border-bottom: none;
            border-left: 1px solid #dee2e6;
            outline: none !important;
        }

        .modal .search-categories .btn-secondary {
            position: absolute;
            right: 1px;
            top: 1px;
            bottom: 1px;
            height: calc(100% - 2px);
            width: 46px;
            border-radius: 0;
        }

        .modal .ui-selectmenu-menu .ui-menu {
            border-radius: 0;
        }

        .modal .ui-selectmenu-menu .ui-menu-item .ui-menu-item-wrapper {
            padding: 5px 9px;
        }

        .modal .ui-selectmenu-menu .ui-menu-item .ui-state-active {
            background-color: #dee2e6;
            color: #212529;
            border-color: #dee2e6;
        }

        .search-box {
            width: 70%;
            margin: auto auto;
        }

        .box-content {
            margin-top: -150px;
        }

        .modal .logo {
            font-family: 'Rufina';
            color: #fff !important;
            font-size: 40px;
            text-transform: uppercase;
        }

        .modal .logo-text a {
            text-decoration: none;
            opacity: 1;
        }

        .modal p.subtext {
            font-size: 18px;
            margin-top: -10px;
        }

        .modal .navbar-nav .nav-item .p-pic {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            overflow: hidden;
            width: 26px;
            height: 26px;
            border: 1px solid #ced4da;
            border-radius: 200px;
            -moz-border-radius: 200px;
            -webkit-border-radius: 200px;
            margin-right: -10px;
        }

        .modal .navbar-nav .nav-item .p-pic img {
            max-height: 100%;
            max-width: 100%;
        }

        .modal .navbar-nav .nav-item a {
            padding-top: 12px;
        }

        .modal .navbar-toggler {
            font-family: "Roboto", sans-serif;
            font-size: 0.875rem !important;
            width: auto;
        }

        .modal .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.7);
        }

        .modal .navbar-dark .navbar-nav a:hover {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: underline;
        }

        .modal .search-categories {
            background-color: #fff;
            border: 1px solid #ced4da;
            position: relative;
            width: 100%;
        }

        .modal .search-categories #category_id {
            float: left;
            font-family: "Roboto", sans-serif;
            background-color: #fff;
            border: 1px solid #fff;
            border-radius: 0;
            width: 150px;
            padding: 8px 0 8px 10px;
            margin-right: 9px;
        }

        .modal .search-categories .ui-selectmenu-button {
            float: left;
            font-family: "Roboto", sans-serif;
            background-color: #fff;
            border-color: #fff;
            border-radius: 0;
            width: 214px;
            padding: 9px 0 9px 14px;
            margin-right: 9px;
        }

        .modal .search-categories .ui-selectmenu-button:active,
        .modal .search-categories .ui-selectmenu-button:focus {
            outline: none;
        }

        .modal .search-categories .ui-selectmenu-button .ui-selectmenu-icon {
            margin-top: 2px;
        }

        .ui-front {
            z-index: 0 !important;
        }

        .ui-selectmenu-open {
            z-index: 9999 !important;
        }

        .overflow {
            height: 200px;
        }

        .modal .modal-body {
            background-image: radial-gradient(rgba(237, 28, 36, 0.8), rgba(237, 28, 36, 3)),
            url('{{asset('public/images/eiffel-tower.jpg')}}');
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .modal .navbar-dark .navbar-toggler {
            color: rgba(255, 255, 255, 1);
            border: 2px solid rgba(255, 215, 0, 0.3);
        }

        @media only screen and (max-width: 575.98px) {
            .search-box {
                width: 95%;
            }

            .modal .logo {
                font-size: 30px;
            }

            .modal p.subtext {
                font-size: 14px;
                margin-top: -10px;
            }

            .modal .search-categories {
                background-color: transparent;
                border-color: transparent;
            }

            .modal .search-categories #category_id {
                border: 1px solid #ced4da;
                width: 100%;
                margin-right: 0;
                margin-bottom: 0.875rem;
            }

            .modal .search-categories .ui-selectmenu-button {
                border: 1px solid #ced4da;
                width: 100%;
                padding-right: 0.875rem;
                margin-right: 0;
                margin-bottom: 0.875rem;
            }

            .modal .search-categories input {
                border: 1px solid #ced4da;
                width: 100%;
                margin-bottom: 0.875rem;
            }

            .modal .search-categories .btn-secondary {
                position: static;
                width: 100%;
                margin-bottom: 0.875rem;
                background: #fff;
                color: #ed1c24;
            }

            .overflow {
                height: 250px;
            }

            .modal .modal-header {
                border-bottom: 1px solid rgba(255, 255, 255, 0.5);
                padding: 1px 1rem;
            }
        }
    </style>
@endpush
@section('content')
    <section class="products-content"> @include('common.products') </section>
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <div class="row">
                        <div class="col-md-12">
                            <nav id="navbar_0" class="navbar navbar-expand-md navbar-dark navbar-0 p-0">
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_collapse_modal"
                                        aria-controls="navbar_collapse_modal" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbar_collapse_modal">
                                    <ul class="navbar-nav">
                                        @if (Auth::guard('customer')->check())
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <span class="p-pic"><img src="{{asset('').auth()->guard('customer')->user()->customers_picture}}"
                                                                             alt="image"></span>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ URL::to('/profile')}}">@lang('website.Welcome')
                                                    &nbsp;{{ auth()->guard('customer')->user()->customers_firstname }}
                                                    &nbsp;{{ auth()->guard('customer')->user()->customers_lastname }}!</a>
                                            </li>
                                            <li class="nav-item"><a href="{{ URL::to('/wishlist')}}" class="nav-link -before">@lang('website.Wishlist')</a>
                                            </li>
                                            <li class="nav-item"><a href="{{ URL::to('/orders')}}" class="nav-link -before">@lang('website.Orders')</a>
                                            </li>

                                            <li class="nav-item"><a href="{{ URL::to('/shipping-address')}}"
                                                                    class="nav-link -before">@lang('website.Shipping Address')</a></li>
                                            <li class="nav-item"><a href="{{ URL::to('/logout')}}" class="nav-link -before">@lang('website.Logout')</a>
                                            </li>
                                        @else
                                            <li class="nav-item">
                                                <a class="nav-link">@lang('website.Welcome Guest!')</a>
                                            </li>
                                            <li class="nav-item"><a href="{{ URL::to('/login')}}" class="nav-link -before"><i class="fa fa-lock"
                                                                                                                              aria-hidden="true"></i>&nbsp;@lang('website.Login/Register')
                                                </a></li>
                                        @endif
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <button type="button" class="close" id="modal-close" data-dismiss="">&times;</button>

                </div>

                <!-- Modal body -->
                <div class="modal-body  d-flex justify-content-center">
                    <div class="search-box">
                        <div class="box-content">
                            <div class="row">
                                <div class="col-md-12 logo-text text-center">
                                    <a href="{{ URL::to('/')}}" class="logo">
                                        <?=stripslashes($result['commonContent']['setting'][18]->value)?>
                                    </a>
                                    <p class="subtext"><?=stripslashes($result['commonContent']['setting'][79]->value)?></p>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <form class="form-inline" action="{{ URL::to('/shop')}}" method="get">
                                        <div class="search-categories">
                                            <select id="modal_category_id" name="category">
                                                <option value="all">@lang('website.All Categories')</option>
                                                @foreach($result['commonContent']['categories'] as $categories_data)
                                                    <option value="{{$categories_data->slug}}"
                                                            @if($categories_data->slug==app('request')->input('category')) selected @endif>{{$categories_data->name}}</option>
                                                    @if(count($categories_data->sub_categories)>0)
                                                        @foreach($categories_data->sub_categories as $sub_categories_data)
                                                            <option value="{{$sub_categories_data->sub_slug}}"
                                                                    @if($sub_categories_data->sub_slug==app('request')->input('category')) selected @endif>
                                                                --{{$sub_categories_data->sub_name}}</option>
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            </select>
                                            <input type="search" name="search" placeholder="@lang('website.Search entire store here')..."
                                                   value="{{ app('request')->input('search') }}" aria-label="Search">
                                            <button type="submit" class="btn btn-secondary"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer>
                        <a class="leftlinks" href="{{ URL::to('/contact-us')}}" target="_blank">@lang('website.Contact Us')</a>
                        @if(count($result['commonContent']['pages']))
                            @foreach($result['commonContent']['pages'] as $page)
                                <a class="rightlinks" href="{{ URL::to('/page?name='.$page->slug)}}" target="_blank">{{$page->name}}</a>
                            @endforeach
                        @endif
                    </footer>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{--<script>--}}
        {{--jQuery(document).ready(function () {--}}
            {{--jQuery('#myModal').modal('show').addClass('fade');--}}
            {{--jQuery("#modal_category_id").selectmenu()--}}
                {{--.selectmenu("menuWidget")--}}
                {{--.addClass("overflow");--}}
        {{--});--}}
        {{--jQuery('#modal-close').click(function () {--}}
            {{--jQuery('#myModal').modal('hide');--}}
        {{--});--}}
    {{--</script>--}}
@endpush
