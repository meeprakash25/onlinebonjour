<?php $qunatity=0; ?>                
@foreach($result['commonContent']['cart'] as $cart_data)
	<?php $qunatity += $cart_data->customers_basket_quantity; ?>                    
@endforeach

<a href="#" id="dropdownMenuButton" class="dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
	<span class="badge badge-secondary">{{ $qunatity }}</span>
	<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
	<span class="block">
		<span class="title">@lang('website.My Cart')</span>                    
		@if(count($result['commonContent']['cart'])>0)                        
			<span class="items">{{ count($result['commonContent']['cart']) }}&nbsp;@lang('website.items')</span>
		@else 
			<span class="items">(0)&nbsp;@lang('website.item')</span>
		@endif 
	</span>
</a>

@if(count($result['commonContent']['cart'])>0)

<div class="shopping-cart dropdown-menu dropdown-menu-right" style="pointer-events:auto !important;" aria-labelledby="dropdownMenuButton">

	<ul class="shopping-cart-items" >
		<?php
			$total_amount=0;
			$qunatity=0;
		?>
		@foreach($result['commonContent']['cart'] as $cart_data)

		<?php 
		$total_amount += $cart_data->final_price*$cart_data->customers_basket_quantity;
		$qunatity 	  += $cart_data->customers_basket_quantity; ?>
		<li>

			<div class="item-thumb">
				<a href="javascript:void(0)" class="icon" onClick="delete_cart_product({{$cart_data->customers_basket_id}})"><img class="img-fluid" src="{{asset('').'public/images/close.png'}}" alt="icon"></a>
				<div class="image">
					<img class="img-fluid" src="{{asset('').$cart_data->image}}" alt="{{$cart_data->products_name}}"/>
				</div>
			</div>
			<h2 class="item-name">{{$cart_data->products_name}}</h2>
			<span class="item-quantity">@lang('website.Qty')&nbsp;:&nbsp;{{$cart_data->customers_basket_quantity}}</span>
			<span class="item-price">
				@if(session('currency') == 'sgd' && session()->has('countryCurrency'))
					{{'S$' .round((($cart_data->final_price*$cart_data->customers_basket_quantity) * round((1/session('countryCurrency')),3)),2)}}
				@elseif(session('currency') == 'usd' && session()->has('countryCurrency'))
					{{'USD' .round((($cart_data->final_price*$cart_data->customers_basket_quantity) * round((1/session('countryCurrency')),4)),2)}}
				@else
					{{$web_setting[19]->value}}{{$cart_data->final_price*$cart_data->customers_basket_quantity}}
				@endif
			</span>
		</li>
		@endforeach                       
	</ul>
	<div class="tt-summary">
		<p>@lang('website.items')<span>{{ $qunatity }}</span></p>
		<p>@lang('website.SubTotal')<span>
				@if(session('currency') == 'sgd' && session()->has('countryCurrency'))
					{{'S$' .round((($total_amount) * round((1/session('countryCurrency')),3)),2)}}
				@elseif(session('currency') == 'usd' && session()->has('countryCurrency'))
					{{'USD' .round((($total_amount) * round((1/session('countryCurrency')),4)),2)}}
				@else
					{{$web_setting[19]->value}}{{$total_amount}}
				@endif
			</span>
		</p>
	</div>
	<div class="buttons">
		<a class="btn btn-dark" href="{{ URL::to('/viewcart')}}">@lang('website.View Cart')</a>
		<a class="btn btn-secondary" href="{{ URL::to('/checkout')}}">@lang('website.Checkout')</a>
	</div>
</div>

@else

<div class="shopping-cart shopping-cart-empty dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
	<ul class="shopping-cart-items">
		<li>@lang('website.You have no items in your shopping cart')</li>
	</ul>
</div>
@endif