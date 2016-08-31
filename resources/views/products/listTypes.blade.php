@extends('layout')
@section('content')
    <div class="page-header clearfix">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mt-0 mb-5">Все атрибуты</h4>
                <ol class="breadcrumb mb-0">
                    <li><a href="/">Апанде</a></li>
                    <li class="active">Атрибуты</li>
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
        <table>
            <thead>
                <tr>
                    <td>
                        <table id="product-list" style="height: 355px;" class="table table-bordered">
                            <tbody>
                            <tr>
                                <td>Тип 1</td>
                            </tr>
                            <tr>
                                <td>Тип 2</td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                    <td>
                        <table id="product-list" class="table table-bordered">
                            <tbody>
                            <tr>
                                <td>
                                    Уникальный код
                                </td>
                                <td>
                                    <div class="col-sm-12">
                                    <input type="text" class="txtQuantity form-control" value="Уникальный код">
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Бренд
                                </td>
                                <td>
                                    <div class="col-sm-12">
                                        <input type="text" class="txtQuantity form-control" value="Бренд">
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="col-sm-12">
                                        <input type="text" class="txtQuantity form-control" value="Длина">
                                    </div>
                                </td>
                                <td>
                                    <div class="col-sm-9">
                                        <select id="ddlCategoryType" class="form-control">
                                            <option value="1">Текст</option>
                                            <option value="2">Числовой</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="col-sm-9">
                                        <select id="ddlTextType" class="form-control">
                                            <option value="1">%</option>
                                            <option value="2">0,00</option>
                                            <option value="2">0.00</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="col-sm-12">
                                        <input type="text" class="txtQuantity form-control" value="Ширина">
                                    </div>
                                </td>
                                <td>
                                    <div class="col-sm-9">
                                        <select id="ddlCategoryType" class="form-control">
                                            <option value="1">Текст</option>
                                            <option value="2">Числовой</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="col-sm-9">
                                        <select id="ddlTextType" class="form-control">
                                            <option value="1">%</option>
                                            <option value="2">0,00</option>
                                            <option value="2">0.00</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="col-sm-12">
                                        <input type="text" class="txtQuantity form-control" value="Длина клинка">
                                    </div>
                                </td>
                                <td>
                                    <div class="col-sm-9">
                                        <select id="ddlCategoryType" class="form-control">
                                            <option value="1">Текст</option>
                                            <option value="2">Числовой</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="col-sm-9">
                                        <select id="ddlTextType" class="form-control">
                                            <option value="1">%</option>
                                            <option value="2">0,00</option>
                                            <option value="2">0.00</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="col-sm-12">
                                        <input type="text" class="txtQuantity form-control" value="Материал клинка">
                                    </div>
                                </td>
                                <td>
                                    <div class="col-sm-9">
                                        <select id="ddlCategoryType" class="form-control">
                                            <option value="2">Числовой</option>
                                            <option value="1">Текст</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="col-sm-9">
                                        <select id="ddlTextType" class="form-control">
                                            <option value="1">см</option>
                                            <option value="2">дм</option>
                                            <option value="2">м</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                    <td>
                        <table id="product-list" style="height: 355px;" class="table table-bordered">
                            <thead>
                                <th>Основные параметры</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Длина, см</td>
                            </tr>
                            <tr>
                                <td>Ширина, см</td>
                            </tr>
                            <tr>
                                <td>Материал</td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </thead>
        </table>
    </div>
@stop