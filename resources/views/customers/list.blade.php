@extends('layout')
@section('content')
        <div class="page-header clearfix">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="mt-0 mb-5">Клиенты</h1>
                    <ol class="breadcrumb mb-0">
                        <li><a href="#">Апанде</a></li>
                        <li><a href="#">Електронная коммерция</a></li>
                        <li class="active">Список Клиентов</li>
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
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="widget-title">Список клиентов</h3>
                    </div>
                    <div style="margin-right: auto">

                        <a href="/admin/customers/new"><button type="button" class="btn btn-success" style="margin: 20px">Добавить клиента</button></a>
                        <br>


                    </div>
                </div>


                <div class="widget-body">
                    <form>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="txtCustomerName">ФИО</label>
                                    <input id="txtCustomerName" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="ddlCustomerGroup">Группа клиентов</label>
                                    <select id="ddlCustomerGroup" class="form-control">
                                        <option value="">Выберите</option>
                                        <option value="1">Группа 1</option>
                                        <option value="2">Группа 2</option>
                                        <option value="3">Группа 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="txtCustomerName">Моб. номер</label>
                                    <input id="txtCustomerName" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="txtCustomerName">Email</label>
                                    <input id="txtCustomerName" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="txtCustomerName">кол-во незаверш. заказов</label>
                                    <input id="txtCustomerName" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="txtCustomerName">Дела</label>
                                    <input id="txtCustomerName" type="text" class="form-control">
                                </div>
                            </div>
                            {{--<div class="col-md-4">--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="ddlApproved">Approved</label>--}}
                            {{--<select id="ddlApproved" class="form-control">--}}
                            {{--<option value="">Choose</option>--}}
                            {{--<option value="1">Yes</option>--}}
                            {{--<option value="0">No</option>--}}
                            {{--</select>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        {{--<div class="row">--}}

                            {{--<div class="col-md-4">--}}

                                {{--<div class="form-group">--}}
                                    {{--<label for="txtCustomerName">кол-во товаров</label>--}}
                                    {{--<input id="txtCustomerName" type="text" class="form-control">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="txtCustomerName">кол-во товаров на модерации</label>--}}
                                    {{--<input id="txtCustomerName" type="text" class="form-control">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="txtCustomerName">кол-во обработаных заказов</label>--}}
                                    {{--<input id="txtCustomerName" type="text" class="form-control">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="ddlStatus">Status</label>--}}
                            {{--<select id="ddlStatus" class="form-control">--}}
                            {{--<option value="">Choose</option>--}}
                            {{--<option value="1">Enabled</option>--}}
                            {{--<option value="0">Disabled</option>--}}
                            {{--</select>--}}
                            {{--</div>--}}
                        {{--</div>--}}


                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="date-added">Дата регистрации</label>--}}
                                    {{--<div class="input-group">--}}
                                        {{--<input id="date-added" type="text" class="form-control"><span class="input-group-addon"><span class="ti-calendar"></span></span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="txtCustomerName">Чат</label>--}}
                            {{--<input id="txtCustomerName" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            <div class="row">

                                {{--<div class="col-md-4">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label for="date-added">Дата регистрации</label>--}}
                                        {{--<div class="input-group">--}}
                                            {{--<input id="date-added" type="text" class="form-control"><span class="input-group-addon"><span class="ti-calendar"></span></span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}


                            </div>
                                <div class="row">

                                    {{--<div class="col-md-4">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="txtCustomerName">Чат</label>--}}
                                            {{--<input id="txtCustomerName" type="text" class="form-control">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="ddlStatus">Статус</label>--}}
                                    {{--<select id="ddlStatus" class="form-control">--}}
                                        {{--<option value="">Choose</option>--}}
                                        {{--<option value="1">Enabled</option>--}}
                                        {{--<option value="0">Disabled</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="ddlStatus">Status</label>--}}
                            {{--<select id="ddlStatus" class="form-control">--}}
                            {{--<option value="">Choose</option>--}}
                            {{--<option value="1">Enabled</option>--}}
                            {{--<option value="0">Disabled</option>--}}
                            {{--</select>--}}
                            {{--</div>--}}
                        </div>

                {{--</div>--}}
                {{--<button type="submit" class="mb-15 btn btn-raised btn-success">Фильтр</button>--}}
                </form>
                <table id="customer-list" style="width: 100%" class="table table-hover dt-responsive nowrap">
                    <thead>
                    <tr>
                        <th class="text-center">
                            <div class="checkbox-custom">
                                <input id="checkAll" type="checkbox" value="option1">
                                <label for="checkAll" class="pl-0">&nbsp;</label>
                            </div>
                        </th>
                        <th>ФИО</th>
                        <th>Группа покупателей</th>
                        <th>моб. телефон</th>
                        <th>Email</th>
                        <th>Кол-во незавершенных заказов</th>
                        <th>Дела</th>
                        <th>Чат</th>
                        <th class="text-center">Action</th>
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
                        <td><a href="/admin/customers/1">Larry Elliott</a></td>
                        <td>2</td>
                        <td>+380994545675</td>

                        <td>larry.elliott@gmail.com</td>
                        <td>12</td>
                        <td>3</td>
                        <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>



                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="checkbox-custom">
                                <input id="product-02" type="checkbox" value="02">
                                <label for="product-02" class="pl-0">&nbsp;</label>
                            </div>
                        </td>



                        <td><a href="{{ url('/admin/customers/2') }}">Harry Gardner</a></td>
                        <td>3</td>
                        <td>+380994545675</td>

                        <td>larry.elliott@gmail.com</td>
                        <td>12</td>
                        <td>3</td>
                        <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>
                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="checkbox-custom">
                                <input id="product-03" type="checkbox" value="03">
                                <label for="product-03" class="pl-0">&nbsp;</label>
                            </div>
                        </td>
                        <td><a href="/admin/customers/3">Lori Cox</a></td>
                        <td>1</td>
                        <td>+380955447172</td>

                        <td>larry.elliott@gmail.com</td>
                        <td>12</td>
                        <td>3</td>
                        <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>

                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="checkbox-custom">
                                <input id="product-04" type="checkbox" value="04">
                                <label for="product-04" class="pl-0">&nbsp;</label>
                            </div>
                        </td>
                        <td><a href="/admin/customers/4">James Medina</a></td>
                        <td>1</td>
                        <td>+380445544675</td>

                        <td>larry.elliott@gmail.com</td>
                        <td>12</td>
                        <td>3</td>
                        <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>

                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="checkbox-custom">
                                <input id="product-05" type="checkbox" value="05">
                                <label for="product-05" class="pl-0">&nbsp;</label>
                            </div>
                        </td>
                        <td><a href="/admin/customers/5">Lauren Perry</a></td>
                        <td>3</td>
                        <td>+380643465675</td>


                        <td>larry.elliott@gmail.com</td>
                        <td>12</td>
                        <td>3</td>
                        <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>
                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="checkbox-custom">
                                <input id="product-06" type="checkbox" value="06">
                                <label for="product-06" class="pl-0">&nbsp;</label>
                            </div>
                        </td>
                        <td><a href="/admin/customers/6">Aaron Holmes</a></td>
                        <td>3</td>
                        <td>+380656554545</td>

                        <td>larry.elliott@gmail.com</td>
                        <td>12</td>
                        <td>3</td>
                        <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>
                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="checkbox-custom">
                                <input id="product-07" type="checkbox" value="07">
                                <label for="product-07" class="pl-0">&nbsp;</label>
                            </div>
                        </td>
                        <td><a href="/admin/customers/7">Eric Santos</a></td>
                        <td>2</td>
                        <td>+380678834545</td>

                        <td>larry.elliott@gmail.com</td>
                        <td>12</td>
                        <td>3</td>
                        <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>

                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="checkbox-custom">
                                <input id="product-08" type="checkbox" value="08">
                                <label for="product-08" class="pl-0">&nbsp;</label>
                            </div>
                        </td>
                        <td><a href="/admin/customers/8">Benjamin Ray</a></td>
                        <td>1</td>
                        <td>+380678844444</td>

                        <td>larry.elliott@gmail.com</td>
                        <td>12</td>
                        <td>3</td>
                        <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>

                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="checkbox-custom">
                                <input id="product-09" type="checkbox" value="09">
                                <label for="product-09" class="pl-0">&nbsp;</label>
                            </div>
                        </td>
                        <td><a href="/admin/customers/9">Virginia Baker</a></td>
                        <td>3</td>
                        <td>+380678834545</td>

                        <td>larry.elliott@gmail.com</td>
                        <td>12</td>
                        <td>3</td>
                        <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>
                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="checkbox-custom">
                                <input id="product-10" type="checkbox" value="10">
                                <label for="product-10" class="pl-0">&nbsp;</label>
                            </div>
                        </td>
                        <td><a href="/admin/customers/10">Adam Vargas</a></td>
                        <td>3</td>
                        <td>+380504815335</td>

                        <td>larry.elliott@gmail.com</td>
                        <td>12</td>
                        <td>3</td>
                        <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>
                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="checkbox-custom">
                                <input id="product-11" type="checkbox" value="11">
                                <label for="product-11" class="pl-0">&nbsp;</label>
                            </div>
                        </td>
                        <td><a href="/admin/customers/10">Dylan Chapman</a></td>
                        <td>3</td>
                        <td>+380678827506</td>

                        <td>larry.elliott@gmail.com</td>
                        <td>12</td>
                        <td>3</td>
                        <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>
                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="checkbox-custom">
                                <input id="product-12" type="checkbox" value="12">
                                <label for="product-12" class="pl-0">&nbsp;</label>
                            </div>
                        </td>
                        <td><a href="/admin/customers/11">Mildred Henry</a></td>
                        <td>3</td>
                        <td>+380958833445</td>

                        <td>larry.elliott@gmail.com</td>
                        <td>12</td>
                        <td>3</td>
                        <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>
                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
                            </div>
                        </td>
                    </tr>

                    </tbody>
                </table>
                <form action="list.blade.php" method="post">
                    {{--<input type="submit" name="delete" value="">--}}
                    {{--<input type="submit" name="mod_on" value="">--}}
                    <button type="button" class="btn btn-danger">Удалить</button>
                    <button type="button" class="btn btn-success">Добавить</button>
                </form>
            </div>
        </div>
        </div>
@endsection
@section('script')
    <script type="text/javascript" src="/js/page-content/e-commerce/customer-list.js"></script>
@stop