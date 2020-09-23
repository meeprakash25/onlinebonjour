@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> Shpping Price by Location<small>Shpping Price by Location...</small></h1>
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('admin/dashboard/this_month') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a>
                </li>
                <li><a href="{{ URL::to('admin/shippingmethods')}}"><i class="fa fa-dashboard"></i>{{ trans('labels.ShippingMethods') }}</a></li>
                <li class="active">Shpping Price by Location</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Shpping Price by Location</h3>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box box-info">
                                        <div class="box-body">
                                            @if( count($errors) > 0)
                                                @foreach($errors->all() as $error)
                                                    <div class="alert alert-success" role="alert">
                                                        <span class="icon fa fa-check" aria-hidden="true"></span>
                                                        <span class="sr-only">{{ trans('labels.Setting') }}:</span>
                                                        {{ $error }}</div>
                                                @endforeach
                                            @endif

                                            {!! Form::open(array('url' =>'admin/updateShippingLocationPrice', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')) !!}

                                            <hr>
                                            @foreach ($result['products_shipping'] as $products_shipping)
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 col-md-2 control-label"></label>
                                                    <div class="col-sm-10 col-md-2">
                                                        {{--{!! Form::text('', $products_shipping->districts, array('class'=>'form-control', 'id'=>$products_shipping->districts,'readonly')) !!}--}}
                                                        <b>{{$products_shipping->districts}}</b>
                                                    </div>

                                                    <label for="name" class="col-sm-2 col-md-2 control-label">Price ({{$web_setting[19]->value}})</label>
                                                    <div class="col-sm-10 col-md-2">
                                                        {!! Form::text('shipping_price[]',  $products_shipping->shipping_price, array('class'=>'form-control', 'id'=>$products_shipping->districts)) !!}
                                                    </div>
                                                </div>
                                                <hr>
                                            @endforeach
                                            <div class="box-footer">
                                                <a href="{{ URL::to('admin/shippingmethods')}}" type="button" class="btn btn-default pull-left"> <i
                                                            class="fa fa-angle-left"></i> {{ trans('labels.back') }}</a>
                                                <button type="submit" class="btn btn-primary pull-right">{{ trans('labels.Update') }}</button>
                                            </div>
                                            {!! Form::close() !!}</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Main row -->

            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection 