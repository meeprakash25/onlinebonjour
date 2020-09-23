<!doctype html>

<html>

<!-- meta contains meta taga, css and fontawesome icons etc -->

@include('common.meta')

<!-- ./end of meta -->

<!--dir="rtl"-->

<body dir="{{ session('direction')}}">
<!-- header -->

{{--		@if(session('homeStyle')=='two' )--}}
@include('common.header_two')
{{--@elseif(session('homeStyle')=='three' )--}}
{{--@include('common.header_three')--}}
{{--@else--}}
{{--@include('common.header')--}}
{{--@endif--}}
<!-- ./end of header -->



@yield('content')


<section class="banner-content">
    @include('common.banner')
</section>

@include('common.footer')
<!-- all js scripts including custom js -->

@include('common.scripts')

@stack('scripts')

<!-- ./end of js scripts -->
@if(!empty($result['commonContent']['setting'][77]->value))
    <?=stripslashes($result['commonContent']['setting'][77]->value)?>
@endif
</body>

</html>

