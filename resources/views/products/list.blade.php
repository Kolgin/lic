@extends('layout')
@section('content')
    <div class="page-header clearfix">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mt-0 mb-5">Все товары</h4>
                <ol class="breadcrumb mb-0">
                    <li><a href="/">Apande</a></li>
                    <li class="active">Все товары</li>
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
            <div class="widget-heading">
                <h1 class="widget-title">Все товары</h1>
            </div>
            <div class="widget-body">
                <form>
                    <div class="row">
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="txtArticle">Артикул</label>
                                <input id="txtArticle" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="txtProductName">Название</label>
                                <input id="txtProductName" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="ddlCategory">Категория</label>
                                <select id="ddlCategory" class="form-control">
                                    <option value="">Категория1</option>
                                    <option value="1">Категория2</option>
                                    <option value="0">Категория3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="ddlStatus">Статус</label>
                                <select id="ddlStatus" class="form-control">
                                    <option value="">Выбрать</option>
                                    <option value="1">Enabled</option>
                                    <option value="0">Disabled</option>
                                    <option value="2">Low stock</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="txtMaster">Мастер</label>
                                <input id="txtMaster" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    {{--<button type="submit" class="btn btn-success">Фильтр</button>--}}
                </form>
                <br>
                <table id="product-list" style="width: 100%" class="table table-hover dt-responsive nowrap">
                    <thead>
                    <tr>
                        <th class="text-center">
                            <div class="checkbox-custom">
                                <input id="checkAll" type="checkbox" value="option1">
                                <label for="checkAll" class="pl-0">&nbsp;</label>
                            </div>
                        </th>
                        <th>Фото</th>
                        <th>Артикул</th>
                        <th>Название</th>
                        <th>Цена</th>
                        <th>Категория</th>
                        <th>Статус</th>
                        <th>Мастер</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @for($i = 1; $i <= 9; $i++)
                            <tr>
                                <td class="text-center">
                                    <div class="checkbox-custom">
                                        <input id="product-01" type="checkbox" value="01">
                                        <label for="product-01" class="pl-0">&nbsp;</label>
                                    </div>
                                </td>
                                <td><img src="/images/products/0{!! $i !!}.jpg" width="50" alt="" class="img-thumbnail img-responsive"></td>
                                <td>Артикул {!! $i !!}</td>
                                <td><a href="/admin/products/{!! $i !!}">Товар {!! $i !!}</a></td>
                                <td>500 руб</td>
                                <td>Категория2</td>
                                <td><span class="label label-success">Enabled</span></td>
                                <td>Имя мастер {!! $i !!}</td>
                                <td class="text-center">
                                    <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">
                                        <button type="button" class="btn btn-outline btn-success"><a href="/admin/products/{!! $i !!}/edit"><i class="ti-pencil"></i></a></button>
                                        <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @endfor
                        <tr>
                            <td class="text-center">
                                <div class="checkbox-custom">
                                    <input id="product-01" type="checkbox" value="01">
                                    <label for="product-01" class="pl-0">&nbsp;</label>
                                </div>
                            </td>
                            <td><img src="/images/products/10.jpg" width="50" alt="" class="img-thumbnail img-responsive"></td>
                            <td>Артикул 10</td>
                            <td><a href="/admin/products/10">Товар 10</a></td>
                            <td>500 руб</td>
                            <td>Категория1</td>
                            <td><span class="label label-warning">Low stock</span></td>
                            <td>Имя мастер 10</td>
                            <td class="text-center">
                                <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">
                                    <button type="button" class="btn btn-outline btn-success"><a href="/admin/products/10/edit"><i class="ti-pencil"></i></a></button>
                                    <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <div class="checkbox-custom">
                                    <input id="product-01" type="checkbox" value="01">
                                    <label for="product-01" class="pl-0">&nbsp;</label>
                                </div>
                            </td>
                            <td><img src="/images/products/11.jpg" width="50" alt="" class="img-thumbnail img-responsive"></td>
                            <td>Артикул 11</td>
                            <td><a href="/admin/products/11">Товар 11</a></td>
                            <td>500 руб</td>
                            <td>Категория3</td>
                            <td><span class="label label-danger">Disabled</span></td>
                            <td>Имя мастер 10</td>
                            <td class="text-center">
                                <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">
                                    <button type="button" class="btn btn-outline btn-success"><a href="/admin/products/11/edit"><i class="ti-pencil"></i></a></button>
                                    <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-danger">Удалить</button>
                <button type="button" class="btn btn-default">Экспорт</button>
                <button type="button" class="btn btn-default">Импорт</button>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="/js/page-content/e-commerce/product-list.js"></script>
@stop