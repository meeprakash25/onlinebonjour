@extends('admin.layout')
@section('content')
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> {{ trans('labels.facebook_settings') }} <small>{{ trans('labels.facebook_settings') }}...</small> </h1>
    <ol class="breadcrumb">
       <li><a href="{{ URL::to('admin/dashboard/this_month') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      <li class="active">{{ trans('labels.facebook_settings') }}</li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content"> 
    <!-- Info boxes --> 
    
    <!-- /.row -->

    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">{{ trans('labels.facebook_settings') }} </h3>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
              		<div class="box box-info">
                        <!--<div class="box-header with-border">
                          <h3 class="box-title">Setting</h3>
                        </div>-->
                        <!-- /.box-header -->
                        <!-- form start -->                        
                         <div class="box-body">
                          @if( count($errors) > 0)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-success" role="alert">
                                      <span class="icon fa fa-check" aria-hidden="true"></span>
                                      <span class="sr-only">{{ trans('labels.Setting') }}:</span>
                                      {{ $error }}
                                </div>
                             @endforeach
                          @endif
                        
                            {!! Form::open(array('url' =>'admin/updateSetting', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')) !!}
                           <br>
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.FacebookAppID') }}
                              
                              </label>
                              <div class="col-sm-10 col-md-4">
                                {!! Form::text($result['settings'][0]->name, $result['settings'][0]->value, array('class'=>'form-control', 'id'=>$result['settings'][0]->name)) !!}
                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">{{ trans('labels.FacebookAppIDText') }}</span>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.FacebookSecretID') }}
                              
                              </label>
                              <div class="col-sm-10 col-md-4">
                                {!! Form::text($result['settings'][1]->name, $result['settings'][1]->value, array('class'=>'form-control', 'id'=>$result['settings'][1]->name)) !!}
                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">{{ trans('labels.FacebookSecretIDText') }}</span>
                              </div>
                            </div>

                            {{--<div class="form-group">--}}
                              {{--<label for="name" class="col-sm-2 col-md-3 control-label">Facebook Callback Url--}}

                              {{--</label>--}}
                              {{--<div class="col-sm-10 col-md-4">--}}
                                {{--{!! Form::text($result['settings'][65]->name, $result['settings'][65]->value, array('class'=>'form-control', 'id'=>$result['settings'][65]->name)) !!}--}}
                                {{--<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">Enter your "Facebook" callback Url</span>--}}
                              {{--</div>--}}
                            {{--</div>--}}
                            
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.facebookLogin') }}
                              
                              </label>
                              <div class="col-sm-10 col-md-4">
                              <select name="{{$result['settings'][2]->name}}" class="form-control">
                              	<option @if($result['settings'][2]->value == '1')
                                        selected
                                    @endif
                                 value="1"> {{ trans('labels.enable') }}</option>
                              	<option @if($result['settings'][2]->value == '0')
                                        selected
                                    @endif
                                 value="0"> {{ trans('labels.disable') }}</option>
                                         
                               </select>
                                
                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">{{ trans('labels.facebookLoginText') }}</span>
                              </div>
                            </div>
                                                        
                              <!-- /.box-body -->
                            <div class="box-footer text-center">
                            	<button type="submit" class="btn btn-primary">{{ trans('labels.Update') }} </button>
                            	<a href="{{ URL::to('admin/dashboard/this_month')}}" type="button" class="btn btn-default">{{ trans('labels.back') }}</a>
                            </div>
                              
                              <!-- /.box-footer -->
                            {!! Form::close() !!}
                        </div>
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