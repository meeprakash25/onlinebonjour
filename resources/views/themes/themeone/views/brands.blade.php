@extends('layout')
@section('css')
    <style>

        .search-categories {
            background-color: #fff;
            border: 1px solid #dee2e6;
            position: relative;
            width: 100%;
        }

        .search-categories #category_id {
            float: left;
            background-color: #fff;
            border: 1px solid #fff;
            border-radius: 0;
            width: 150px;
            padding: 8px 0 8px 10px;
            margin-right: 9px;
        }

        .search-categories input {
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

        .search-categories .btn-secondary {
            position: absolute;
            right: 1px;
            top: 1px;
            bottom: 1px;
            height: calc(100% - 2px);
            width: 46px;
            border-radius: 0;
        }

    </style>
@endsection
@section('content')
    <section class="products-content">
        <div class="container-fuild">
            <div class="container">
                <div class="products-area row">
                    <!-- heading -->
                    <div class="col-md-6 col-xs-12"><h2>Brands</h2></div>
                    <div class="col-md-6 col-xs-12">
                        <div class="search-brand-box">
                            <div class="search-categories">
                                <form class="form-inline" action="{{ URL::to('/brand-search')}}" method="get">
                                    <input class="form-control" type="search" name="searchBrand"
                                           placeholder="Search brand here..."
                                           value="{{ app('request')->input('search') }}" aria-label="Search">
                                    <button type="submit" class="btn btn-secondary form-control"><i class="fa fa-search"
                                                                                                   aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="row">
                            <!-- Items -->
                            <div class="products products-5x">
                            {{--{{dd($result)}}--}}
                            <!-- categories -->
                                <?php $counter = 0;?>
                                @foreach($result['manufacturers'] as $manufacturer)
                                    @if($counter<=9)
                                        {{--{{dd($manufacturer)}}--}}
                                        <div class="product">
                                            <div class="blog-post">
                                                <article>
                                                    <div class="module">
                                                        <a href="{{ URL::to('/shop?manufacturer='.$manufacturer->manufacturers_slug)}}"
                                                           class="cat-thumb">
                                                            <img class="img-fluid"
                                                                 src="{{asset('').$manufacturer->manufacturers_image}}"
                                                                 alt="{{$manufacturer->manufacturers_name}}">
                                                        </a>
                                                        <a href="{{ URL::to('/shop?manufacturer='.$manufacturer->manufacturers_slug)}}"
                                                           class="cat-title">
                                                            {{$manufacturer->manufacturers_name}}
                                                        </a>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    @endif
                                    <?php $counter++;?>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
