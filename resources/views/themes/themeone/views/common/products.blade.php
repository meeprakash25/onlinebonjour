
<div class="container-fuild">
  <div class="container">
    <div class="products-area">
      <!-- heading -->
      <div class="heading">
        <h2>Products <small class="pull-right"><!--<a href="shop" >@lang('website.View All')</a>--></small></h2>
        <hr>
      </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="row">
                    <!-- Items -->
                    <div class="products products-5x">
                        <!-- categories -->
                        <?php $counter = 0;?>
                        @foreach($result['commonContent']['categories'] as $categories_data)
                                @if($counter<=9)
                                <div class="product">
                                    <div class="blog-post">
                                        <article>
                                            <div class="module">
                                            	<a href="{{ URL::to('/shop?category='.$categories_data->slug)}}" class="cat-thumb">
                                                   <img class="img-fluid" src="{{asset('').$categories_data->image}}" alt="{{$categories_data->name}}">
                                                </a>
                                                <a href="{{ URL::to('/shop?category='.$categories_data->slug)}}" class="cat-title">
                                                	{{$categories_data->name}}
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
</div>



