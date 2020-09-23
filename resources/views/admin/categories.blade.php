@extends('admin.layout')
@section('content')
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> {{ trans('labels.MainCategories') }} <small>{{ trans('labels.ListingAllMainCategories') }}...</small> </h1>
    <ol class="breadcrumb">
       <li><a href="{{ URL::to('admin/dashboard/this_month') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      <li class="active">{{ trans('labels.MainCategories') }}</li>
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
            <h3 class="box-title">{{ trans('labels.ListingAllMainCategories') }} </h3>
            <div class="box-tools pull-right">
            	<a href="{{ URL::to('admin/addcategory') }}" type="button" class="btn btn-block btn-primary">{{ trans('labels.AddNewCategory') }}</a>
            </div>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
              		  @if (count($errors) > 0)
                          @if($errors->any())
                            <div class="alert alert-success alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              {{$errors->first()}}
                            </div>
                          @endif
                      @endif

              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>{{ trans('labels.ID') }}</th>
                      <th>{{ trans('labels.Name') }}</th>
                      <th>{{ trans('labels.Image') }}</th>
                      <th>{{ trans('labels.Icon') }}</th>
                      <th>{{ trans('labels.AddedLastModifiedDate') }}</th>
                      <th>{{ trans('labels.Action') }}</th>
                    </tr>
                  </thead>
                  <tbody>
                  @if(count($categories)>0)
                    @foreach ($categories as $key=>$category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td><img src="{{asset('').'/'.$category->image}}" alt="" width=" 100px"></td>
                            <td><img src="{{asset('').'/'.$category->icon}}" alt="" width=" 100px"></td>
                            <td><strong>{{ trans('labels.AddedDate') }}: </strong> {{ $category->date_added }}<br>
                            <strong>{{ trans('labels.ModifiedDate') }}: </strong>{{ $category->last_modified }}  </td>
                            <td><a data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.Edit') }}" href="editcategory/{{ $category->id }}" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                            {{--<a data-toggle="tooltip" data-placement="bottom"--}}
                               {{--title="{{ trans('labels.Delete') }}" href="deletecategory/{{ $category->id }}" class="badge bg-red">--}}
                                {{--<i class="fa fa-trash" aria-hidden="true"></i>--}}
                            {{--</a>--}}
                                <a type="button" class="badge bg-red" data-toggle="modal" data-target="#deleteCategoryId{{$category->id}}">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                                <!-- deleteCategoryModal -->
                                <div class="modal fade" id="deleteCategoryId{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteCategoryModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="deleteProductModalLabel">Delete Category</h4>
                                            </div>
                                            <form method="get" action="{{route('deleteCategory',$category->id)}}" class="form-horizontal">
                                                <div class="modal-body">
                                                    <p>Are you sure you want to delete this category?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('labels.Close') }}</button>
                                                    <button type="submit" class="btn btn-primary" id="deleteProduct">{{ trans('labels.Delete') }}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @else
                       <tr>
                            <td colspan="6">{{ trans('labels.NoRecordFound') }}</td>
                       </tr>
                    @endif
                  </tbody>
                </table>
                <div class="col-xs-12 text-right">
                	{{$categories->links('vendor.pagination.default')}}
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