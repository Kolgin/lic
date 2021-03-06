@extends('layout')
@section('content')
    <div class="page-header clearfix">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mt-0 mb-5">Edit Product</h4>
                <ol class="breadcrumb mb-0">
                    <li><a href="#">Umega</a></li>
                    <li><a href="#">E-commerce</a></li>
                    <li class="active">Edit Product</li>
                </ol>
            </div>
            <div class="col-sm-6">
                <div class="btn-group mt-5">
                    <button type="button" class="btn btn-default btn-outline"><i class="flag-icon flag-icon-us mr-5"></i> English</button>
                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default btn-outline dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul class="dropdown-menu dropdown-menu-right animated fadeInDown">
                        <li><a href="#"><i class="flag-icon flag-icon-de mr-5"></i> German</a></li>
                        <li><a href="#"><i class="flag-icon flag-icon-fr mr-5"></i> French</a></li>
                        <li><a href="#"><i class="flag-icon flag-icon-es mr-5"></i> Spanish</a></li>
                        <li><a href="#"><i class="flag-icon flag-icon-it mr-5"></i> Italian</a></li>
                        <li><a href="#"><i class="flag-icon flag-icon-jp mr-5"></i> Japanese</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content container-fluid">
        <div class="widget">
            <div class="widget-heading clearfix">
                <h3 class="widget-title pull-left">Edit Product</h3>
                <div class="pull-right">
                    <button type="button" class="btn btn-primary"><i class="ti-save"></i></button>
                    <button type="button" class="btn btn-default"><i class="ti-share-alt"></i></button>
                </div>
            </div>
            <div class="widget-body">
                <form class="form-horizontal">
                    <ul role="tablist" class="nav nav-tabs mb-15">
                        <li role="presentation" class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab">General</a></li>
                        <li role="presentation"><a href="#data" aria-controls="data" role="tab" data-toggle="tab">Data</a></li>
                        <li role="presentation"><a href="#discount" aria-controls="discount" role="tab" data-toggle="tab">Discount</a></li>
                        <li role="presentation"><a href="#image" aria-controls="image" role="tab" data-toggle="tab">Image</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="general" role="tabpanel" class="tab-pane active">
                            <div class="form-group">
                                <label for="txtProductName" class="col-sm-3 control-label">Product Name</label>
                                <div class="col-sm-9">
                                    <input id="txtProductName" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtMetaTagTitle" class="col-sm-3 control-label">Meta Tag Title</label>
                                <div class="col-sm-9">
                                    <input id="txtMetaTagTitle" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtMetaTagDescription" class="col-sm-3 control-label">Meta Tag Description</label>
                                <div class="col-sm-9">
                                    <textarea id="txtMetaTagDescription" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtMetaTagKeywords" class="col-sm-3 control-label">Meta Tag Keywords</label>
                                <div class="col-sm-9">
                                    <textarea id="txtMetaTagKeywords" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtDescription" class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea id="txtDescription" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div id="data" role="tabpanel" class="tab-pane">
                            <div class="form-group">
                                <label for="txtModel" class="col-sm-3 control-label">Model</label>
                                <div class="col-sm-9">
                                    <input id="txtModel" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtSKU" class="col-sm-3 control-label">SKU</label>
                                <div class="col-sm-9">
                                    <input id="txtSKU" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtLocation" class="col-sm-3 control-label">Location</label>
                                <div class="col-sm-9">
                                    <input id="txtLocation" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtPrice" class="col-sm-3 control-label">Price</label>
                                <div class="col-sm-9">
                                    <input id="txtPrice" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtTaxClass" class="col-sm-3 control-label">Tax Class</label>
                                <div class="col-sm-9">
                                    <input id="txtTaxClass" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtQuantity" class="col-sm-3 control-label">Quantity</label>
                                <div class="col-sm-9">
                                    <input id="txtQuantity" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtMinQuantity" class="col-sm-3 control-label">Minimum Quantity</label>
                                <div class="col-sm-9">
                                    <input id="txtMinQuantity" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ddlStatus" class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-9">
                                    <select id="ddlStatus" class="form-control">
                                        <option value="">Choose</option>
                                        <option value="1">Enabled</option>
                                        <option value="0">Disabled</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="discount" role="tabpanel" class="tab-pane">
                            <table id="product-list" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Group</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th style="width: 20%">Date Start</th>
                                    <th style="width: 20%">Date End</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <select class="form-control">
                                            <option selected="">Group 1</option>
                                            <option>Group 2</option>
                                            <option>Group 3</option>
                                            <option>Group 4</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" value="10" class="txtQuantity form-control">
                                    </td>
                                    <td>
                                        <input type="text" value="28.00" class="txtPrice form-control">
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="start-date form-control"><span class="input-group-addon"><span class="ti-calendar"></span></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="end-date form-control"><span class="input-group-addon"><span class="ti-calendar"></span></span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-control">
                                            <option selected="">Group 1</option>
                                            <option>Group 2</option>
                                            <option>Group 3</option>
                                            <option>Group 4</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" value="10" class="txtQuantity form-control">
                                    </td>
                                    <td>
                                        <input type="text" value="28.00" class="txtPrice form-control">
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="start-date form-control"><span class="input-group-addon"><span class="ti-calendar"></span></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="end-date form-control"><span class="input-group-addon"><span class="ti-calendar"></span></span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-control">
                                            <option selected="">Group 1</option>
                                            <option>Group 2</option>
                                            <option>Group 3</option>
                                            <option>Group 4</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" value="10" class="txtQuantity form-control">
                                    </td>
                                    <td>
                                        <input type="text" value="28.00" class="txtPrice form-control">
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="start-date form-control"><span class="input-group-addon"><span class="ti-calendar"></span></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="end-date form-control"><span class="input-group-addon"><span class="ti-calendar"></span></span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-control">
                                            <option selected="">Group 1</option>
                                            <option>Group 2</option>
                                            <option>Group 3</option>
                                            <option>Group 4</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" value="10" class="txtQuantity form-control">
                                    </td>
                                    <td>
                                        <input type="text" value="28.00" class="txtPrice form-control">
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="start-date form-control"><span class="input-group-addon"><span class="ti-calendar"></span></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="end-date form-control"><span class="input-group-addon"><span class="ti-calendar"></span></span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-control">
                                            <option selected="">Group 1</option>
                                            <option>Group 2</option>
                                            <option>Group 3</option>
                                            <option>Group 4</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" value="10" class="txtQuantity form-control">
                                    </td>
                                    <td>
                                        <input type="text" value="28.00" class="txtPrice form-control">
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="start-date form-control"><span class="input-group-addon"><span class="ti-calendar"></span></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="end-date form-control"><span class="input-group-addon"><span class="ti-calendar"></span></span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="image" role="tabpanel" class="tab-pane">
                            <table style="width: 100%" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="text-center">Image</th>
                                    <th>Image Url</th>
                                    <th style="width: 20%">Sort Order</th>
                                    <th class="text-center">Edit</th>
                                    <th class="text-center">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center"><img src="/images/products/01.jpg" width="100" alt="" class="img-thumbnail img-responsive"></td>
                                    <td>
                                        <input type="text" value="http://mydomain.com/images/product/01.jpg" disabled name="txtImageUrl" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" value="0" name="txtSortOrder" class="form-control">
                                    </td>
                                    <td class="text-center">
                                        <input type="file" data-input="false" data-buttonText="" data-buttonName="btn-primary btn-outline btn-sm" class="filestyle">
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-outline btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><img src="/images/products/02.jpg" width="100" alt="" class="img-thumbnail img-responsive"></td>
                                    <td>
                                        <input type="text" value="http://mydomain.com/images/product/02.jpg" disabled name="txtImageUrl" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" value="0" name="txtSortOrder" class="form-control">
                                    </td>
                                    <td class="text-center">
                                        <input type="file" data-input="false" data-buttonText="" data-buttonName="btn-primary btn-outline btn-sm" class="filestyle">
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-outline btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><img src="/images/products/03.jpg" width="100" alt="" class="img-thumbnail img-responsive"></td>
                                    <td>
                                        <input type="text" value="http://mydomain.com/images/product/03.jpg" disabled name="txtImageUrl" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" value="0" name="txtSortOrder" class="form-control">
                                    </td>
                                    <td class="text-center">
                                        <input type="file" data-input="false" data-buttonText="" data-buttonName="btn-primary btn-outline btn-sm" class="filestyle">
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-outline btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><img src="/images/products/04.jpg" width="100" alt="" class="img-thumbnail img-responsive"></td>
                                    <td>
                                        <input type="text" value="http://mydomain.com/images/product/04.jpg" disabled name="txtImageUrl" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" value="0" name="txtSortOrder" class="form-control">
                                    </td>
                                    <td class="text-center">
                                        <input type="file" data-input="false" data-buttonText="" data-buttonName="btn-primary btn-outline btn-sm" class="filestyle">
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-outline btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><img src="/images/products/05.jpg" width="100" alt="" class="img-thumbnail img-responsive"></td>
                                    <td>
                                        <input type="text" value="http://mydomain.com/images/product/05.jpg" disabled name="txtImageUrl" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" value="0" name="txtSortOrder" class="form-control">
                                    </td>
                                    <td class="text-center">
                                        <input type="file" data-input="false" data-buttonText="" data-buttonName="btn-primary btn-outline btn-sm" class="filestyle">
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-outline btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><img src="/images/products/06.jpg" width="100" alt="" class="img-thumbnail img-responsive"></td>
                                    <td>
                                        <input type="text" value="http://mydomain.com/images/product/06.jpg" disabled name="txtImageUrl" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" value="0" name="txtSortOrder" class="form-control">
                                    </td>
                                    <td class="text-center">
                                        <input type="file" data-input="false" data-buttonText="" data-buttonName="btn-primary btn-outline btn-sm" class="filestyle">
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-outline btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop