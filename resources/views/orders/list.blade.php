@extends('layout')
@section('content')
    <div class="page-header clearfix">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mt-0 mb-5">Order List</h4>
                <ol class="breadcrumb mb-0">
                    <li><a href="#">Umega</a></li>
                    <li><a href="#">E-commerce</a></li>
                    <li class="active">Order List</li>
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
                <h3 class="widget-title">Order List</h3>
            </div>
            <div class="widget-body">
                <form>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txtOrderID">Номер заказа</label>
                                <input id="txtOrderID" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="ddlStatus">Статус оплаты</label>
                                <select id="ddlStatus" class="form-control">
                                    <option value="*">Выбрать</option>
                                    <option value="0">Оплачено</option>
                                    <option value="7">Доставлено</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="date-added">Дата с...</label>
                                <div class="input-group">
                                    <input id="date-added" type="text" class="form-control"><span class="input-group-addon"><span class="ti-calendar"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txtCustomer">Покупатель</label>
                                <input id="txtCustomer" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txtTotal">Сумма</label>
                                <input id="txtTotal" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="date-modified">Дата по...</label>
                                <div class="input-group">
                                    <input id="date-modified" type="text" class="form-control"><span class="input-group-addon"><span class="ti-calendar"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txtManager">Менеджер</label>
                                <input id="txtManager" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txtProduct">Товар</label>
                                <input id="txtProduct" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Фильтр</button>
                </form>
                <table id="order-list" style="width: 100%" class="table table-hover dt-responsive nowrap">
                    <thead>
                    <tr>
                        <th>Номер заказа</th>
                        <th>Дата</th>
                        <th>Менеджер</th>
                        <th>Покупатель</th>
                        <th>Список товаров</th>
                        <th>Статус оплаты и доставки</th>
                        <th>Сумма</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="/admin/orders/1">1</a></td>
                        <td>05.06.2016</td>
                        <td><a href="/admin/managers/1">Менеджер 1</a></td>
                        <td>Покупатель 1</td>
                        <td>
                            <a href="/admin/products/1">Товар 1</a> - 8шт<br>
                            <a href="/admin/products/2">Товар 2</a> - 4шт
                        </td>
                        <td>Оплачено</td>
                        <td>13 000 руб</td>
                    </tr>
                    <tr>
                        <td><a href="/admin/orders/2">2</a></td>
                        <td>05.06.2016</td>
                        <td><a href="/admin/managers/2">Менеджер 2</a></td>
                        <td>Покупатель 1</td>
                        <td>
                            <a href="/admin/products/2">Товар 2</a> - 4шт
                        </td>
                        <td>Оплачено</td>
                        <td>8 000 руб</td>
                    </tr>
                    <tr>
                        <td><a href="/admin/orders/3">3</a></td>
                        <td>06.06.2016</td>
                        <td><a href="/admin/managers/3">Менеджер 3</a></td>
                        <td>Покупатель 2</td>
                        <td>
                            <a href="/admin/products/1">Товар 1</a> - 8шт<br>
                            <a href="/admin/products/2">Товар 2</a> - 7шт<br>
                            <a href="/admin/products/3">Товар 3</a> - 1шт
                        </td>
                        <td>Неоплачено</td>
                        <td>28 000 руб</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <a href="/admin/orders/new"><button class="btn btn-success">Новый заказ</button></a>
        </div>
    </div>
@endsection()
@section('script')
    <script type="text/javascript" src="/js/page-content/e-commerce/order-list.js"></script>
@stop