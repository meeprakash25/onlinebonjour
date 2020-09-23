<div class="sidebar">
    <div class="widget block-categories">
        <div class="block-title">
            <h2>@lang('website.My Account')</h2>
        </div>
        <div class="block-content">
            <ul class="list-categories">
                <li>
                    <a href="{{ URL::to('/profile')}}">@lang('website.Profile')</a>
                </li>
                <li>
                    <a href="{{ URL::to('/wishlist')}}">@lang('website.Wishlist')</a>
                </li>
                <li>
                    <a href="{{ URL::to('/orders')}}">@lang('website.Orders')</a>
                </li>
                <li>
                    <a href="{{ URL::to('/shipping-address')}}">@lang('website.Shipping Address')</a>
                </li>
                <li>
                    <a href="{{ URL::to('/logout')}}">@lang('website.Logout')</a>
                </li>
            </ul>
        </div>
    </div>
</div>