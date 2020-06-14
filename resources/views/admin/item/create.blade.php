@extends('layouts.adminApp') @section('title', 'Inventory') @section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i>  ITEM  DETAILS</h1>
        </div>
    </div>
    <!--Start Add item modal -->
    <div class="modal fade" id="add-brand" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title text-info" id="exampleModalCenterTitle">Add Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!! Form::open(['route' => 'item.store','class'=>'form-horizontal itemValidation','id'=>'itemAddForm','name'=>'itemAddForm']) !!}
                <div class="modal-body">
                    <div class="title">
                        <b> Fields marked with <strong style="color:red">*</strong> are mandatory </b>
                    </div>
                    <div class="brand-item-border"></div>
                    <br>
                    <!-- brand -->
                    <?php
                  $brands = App\Brand::orderBy('id','DESC')->get();
               ?>
                        <div class="form-group row">
                            <label class="control-label col-md-3"> Brand <strong style="color:red">*</strong></label>
                            <div class="col-md-8">
                                <select style="text-align: center" class="form-control" aria-invalid="false" id="brand_id" name="brand_id">
                                    <option value="">----select Brand ----</option>
                                    @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                                <div class="form-control-feedback" id="brandMessage"></div>
                            </div>
                        </div>
                        <!-- end brand -->
                        <!-- Model -->
                        <?php
                  $models = App\Models::orderBy('id','DESC')->get();
                  ?>
                            <div class="form-group row">
                                <label class="control-label col-md-3"> Model <strong style="color:red">*</strong></label>
                                <div class="col-md-8">
                                    <select style="text-align: center" class="form-control" aria-invalid="false" id="model_id" name="model_id">
                                        <option value="">----select Model ----</option>
                                        @foreach($models as $model)
                                        <option value="{{ $model->id }}">{{ $model->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="form-control-feedback" id="modelMessage"></div>
                                </div>
                            </div>
                            <!-- end model -->
                            <div class="form-group row">
                                <label class="control-label col-md-3"> Item Name<strong style="color:red">*</strong>
                                </label>
                                <div class="col-md-8">
                                    {!! Form::text('name','',array('class'=>'form-control','id'=>'name')) !!}
                                    <div class="form-control-feedback" id="itemMessage"></div>
                                </div>
                            </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg ">Add</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- End Add item modal -->
    <!-- record of data -->
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bbranded" id="sampleTable">
                            <thead align="center">
                                <tr>
                                    <th>SL</th>
                                    <th>Item </th>
                                    <th>Model Name </th>
                                    <th>Brand Name</th>
                                    <th>Entry Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody align="center">
                                <?php
                           $count = 1; 
                           ?>
                                    @foreach($items as $item)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->modelName }}</td>
                                        <td>{{ $item->brandName }}</td>
                                        <td>{{ $model->entry_date->format('d-m-Y') }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="edit" title="Edit" data-brandname="{{ $item->name }}" data-toggle="modal" data-target="#edititem{{$item->model_id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                 </a>&nbsp;&nbsp;&nbsp;
                                                <a href="{{ url('admin/item/destroy',$item->id) }}" onclick="return check_item_delete_info();"><i class="fa fa-trash-o"></i>
                                 </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Start Edit Item modal -->
                                    <div class="modal fade" id="edititem{{$item->model_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-info" id="exampleModalCenterTitle">Edit item</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('admin.update.item') }}" method="POST" id="editForm" name="itemEditForm">
                                                    @csrf
                                                    <input type="hidden" name="eitem_id" value="{{$item->id}}">
                                                    <!--  -->
                                                    <div class="modal-body">
                                                        <div class="title">
                                                            <b> Fields marked with <strong style="color:red">*</strong> are mandatory </b>
                                                        </div>
                                                        <div class="brand-item-border"></div>
                                                        <br>
                                                        <!-- brand -->
                                                        <div class="form-group row">
                                                            <label class="control-label col-md-3"> Brand <strong style="color:red">*</strong></label>
                                                            <div class="col-md-8">
                                                                <select style="text-align: center" class="form-control" aria-invalid="false" id="" name="brand_id" required="required">
                                                                    @foreach($brands as $brand)
                                                                    <option value="{{ $brand->id }}" {{$brand->id == $item->brand_id ? 'selected' : ''}}>{{ $brand->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- end brand -->
                                                        <!-- Model -->
                                                        <div class="form-group row">
                                                            <label class="control-label col-md-3"> Model <strong style="color:red">*</strong></label>
                                                            <div class="col-md-8">
                                                                <select style="text-align: center" class="form-control" aria-invalid="false" id="" name="model_id">
                                                                    @foreach($models as $model)
                                                                    <option value="{{ $model->id }}" {{ $model->id == $item->model_id ? 'selected' : ''}}>{{ $model->name }}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- end model -->
                                                        <div class="form-group row">
                                                            <label class="control-label col-md-3"> item Name<strong style="color:red">*</strong></label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" name="name" value="{{$item->name}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-success btn-lg ">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Edit Brand modal -->
                                    @endforeach
                            </tbody>
                        </table>
                        <div class="button">
                            <button title="Add Brand" data-toggle="modal" data-target="#add-brand" class="button btn-lg shadow mb-5 rounded" style="background-color: #f24c15;">Add Item </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End record of data -->
</main>
@endsection