@extends('layout')
@section('content')
    <div class="page-header clearfix">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mt-0 mb-5">Customer List</h4>
                <ol class="breadcrumb mb-0">
                    <li><a href="#">Umega</a></li>
                    <li><a href="#">E-commerce</a></li>
                    <li class="active">Customer List</li>
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
                <h3 class="widget-title">Категории для статей</h3>
            </div>
            <div class="widget-body">
                <table id="customer-list" style="width: 100%" class="table table-hover dt-responsive nowrap">
                    <thead>
                    <tr>
                        
                        <th>Выбрать</th>
                        <th>Название </th>
                        <th>Количество записей</th>
                        
                       
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <div class="checkbox-custom">
                                <input id="product-01" type="checkbox" value="01">
                                <label for="product-01" class="pl-0">&nbsp;</label>
                            </div>
                        </td>
                        <td>Категория1</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="checkbox-custom">
                                <input id="product-01" type="checkbox" value="01">
                                <label for="product-01" class="pl-0">&nbsp;</label>
                            </div>
                        </td>
                        <td>Категория2</td>
                        <td>23</td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="checkbox-custom">
                                <input id="product-01" type="checkbox" value="01">
                                <label for="product-01" class="pl-0">&nbsp;</label>
                            </div>
                        </td>
                        <td>Категория3</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="checkbox-custom">
                                <input id="product-01" type="checkbox" value="01">
                                <label for="product-01" class="pl-0">&nbsp;</label>
                            </div>
                        </td>
                        <td>Категория4</td>
                        <td>17</td>
                    </tr>

                    <tr>
                        <td class="text-center">
                            <div class="checkbox-custom">
                                <input id="product-01" type="checkbox" value="01">
                                <label for="product-01" class="pl-0">&nbsp;</label>
                            </div>
                        </td>
                        <td>Категория5</td>
                        <td>11</td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="checkbox-custom">
                                <input id="product-01" type="checkbox" value="01">
                                <label for="product-01" class="pl-0">&nbsp;</label>
                            </div>
                        </td>
                        <td>Категория6</td>
                        <td>25</td>
                    </tr>
                    
                    </tbody>
                </table>
                <input type="text" class="rounded" placeholder="Название новой категории"> <button type="button" class="btn btn-success"> Добавить </button> </br>
                <button type="button" class="btn btn-danger"> Удалить </button>
            </div>
        </div>
    </div>
@stop