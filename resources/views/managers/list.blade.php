@extends('layout')
@section('content')
    <div class="page-header clearfix">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="mt-0 mb-5">Менеджеры</h1>
                <ol class="breadcrumb mb-0">
                    <li><a href="#">Апанде</a></li>
                    <li><a href="#">Електронная коммерция</a></li>
                    <li class="active">Список покупателей</li>
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


        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="widget-title">Список менеджеров</h3>
            </div>
            <div style="margin-right: auto">

                <a href="/admin/managers/new"><button type="button" class="btn btn-success" style="margin: 20px">Добавить менеджера</button></a>
                <br>


            </div>

        </div>

        <div class="widget">
            {{--<div class="widget-heading">--}}





            {{--</div>--}}

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
                                <label for="txtCustomerName">Email</label>
                                <input id="txtCustomerName" type="text" class="form-control">
                            </div>
                        </div>
                        {{--<div class="col-md-2">--}}
                        {{--<div class="form-group">--}}
                        {{--<label for="date-added">Дата регистрации</label>--}}
                        {{--<div class="input-group">--}}
                        {{--<input id="date-added" type="text" class="form-control"><span class="input-group-addon"><span class="ti-calendar"></span></span>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="txtCustomerName">Дела</label>
                                <input id="txtCustomerName" type="text" class="form-control">
                            </div>
                        </div>



                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="txtCustomerName">Заказы в обробот.</label>
                                <input id="txtCustomerName" type="text" class="form-control">
                            </div>
                        </div>

                        {{--<div class="col-md-1">--}}
                        {{--<div class="form-group">--}}
                        {{--<label for="txtCustomerName">кол-во заказов неудачны</label>--}}
                        {{--<input id="txtCustomerName" type="text" class="form-control">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="txtEmail">моб. номер</label>
                                <input id="txtEmail" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="txtEmail">доп моб. номер</label>
                                <input id="txtEmail" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
            </div>
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
                    <th>Email</th>
                    <th>Дела</th>
                    <th>Заказы в обробот.</th>

                    <th>моб. телефон</th>
                    <th>доп моб. телефон</th>
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
                    <td><a href="/admin/managers/1">Larry Elliott</a></td>
                    <td>larry.elliott@gmail.com</td>
                    <td>4</td>
                    <td>50</td>

                    <td>+380994545675</td>
                    <td>+380994545675</td>
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
                    <td><a href="/admin/managers/3">Lori Cox</a></td>
                    <td>larry.elliott@gmail.com</td>
                    <td>4</td>
                    <td>50</td>

                    <td>+380994545675</td>
                    <td>+380994545675</td>
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
                    <td><a href="/admin/managers/4">James Medina</a></td>
                    <td>larry.elliott@gmail.com</td>
                    <td>4</td>
                    <td>50</td>

                    <td>+380994545675</td>
                    <td>+380994545675</td>
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
                    <td><a href="/admin/managers/5">Lauren Perry</a></td>
                    <td>larry.elliott@gmail.com</td>
                    <td>4</td>
                    <td>50</td>

                    <td>+380994545675</td>
                    <td>+380994545675</td>
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
                    <td><a href="/admin/managers/6">Aaron Holmes</a></td>
                    <td>larry.elliott@gmail.com</td>
                    <td>4</td>
                    <td>50</td>

                    <td>+380994545675</td>
                    <td>+380994545675</td>
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
                    <td><a href="/admin/managers/6">Eric Santos</a></td>
                    <td>larry.elliott@gmail.com</td>
                    <td>4</td>
                    <td>50</td>

                    <td>+380994545675</td>
                    <td>+380994545675</td>
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
                    <td><a href="/admin/managers/7">Benjamin Ray</a></td>
                    <td>larry.elliott@gmail.com</td>
                    <td>4</td>
                    <td>50</td>
                    <
                    <td>+380994545675</td>
                    <td>+380994545675</td>
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
                    <td><a href="/admin/managers/8">Virginia Baker</a></td>
                    <td>larry.elliott@gmail.com</td>
                    <td>4</td>
                    <td>50</td>

                    <td>+380994545675</td>
                    <td>+380994545675</td>
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
                    <td><a href="/admin/managers/9">Adam Vargas</a></td>
                    <td>larry.elliott@gmail.com</td>
                    <td>4</td>
                    <td>50</td>

                    <td>+380994545675</td>
                    <td>+380994545675</td>
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
                    <td><a href="/admin/managers/10">Dylan Chapman</a></td>
                    <td>larry.elliott@gmail.com</td>
                    <td>4</td>
                    <td>50</td>

                    <td>+380994545675</td>
                    <td>+380994545675</td>
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
                    <td><a href="/admin/makers/11">Mildred Henry</a></td>
                    <td>larry.elliott@gmail.com</td>
                    <td>4</td>
                    <td>50</td>

                    <td>+380994545675</td>
                    <td>+380994545675</td>
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
                            <input id="product-13" type="checkbox" value="13">
                            <label for="product-13" class="pl-0">&nbsp;</label>
                        </div>
                    </td>
                    <td><a href="/admin/makers/12">Brian Rogers</a></td>
                    <td>larry.elliott@gmail.com</td>
                    <td>4</td>
                    <td>50</td>
                    <
                    <td>+380994545675</td>
                    <td>+380994545675</td>
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
                            <input id="product-14" type="checkbox" value="14">
                            <label for="product-14" class="pl-0">&nbsp;</label>
                        </div>
                    </td>
                    <td><a href="/admin/makers/13">Jennifer Valdez</a></td>
                    <td>larry.elliott@gmail.com</td>
                    <td>4</td>
                    <td>50</td>

                    <td>+380994545675</td>
                    <td>+380994545675</td>
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
                            <input id="product-15" type="checkbox" value="15">
                            <label for="product-15" class="pl-0">&nbsp;</label>
                        </div>
                    </td>
                    <td><a href="/admin/makers/14">James Perez</a></td>
                    <td>larry.elliott@gmail.com</td>
                    <td>4</td>
                    <td>50</td>

                    <td>+380994545675</td>
                    <td>+380994545675</td>
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
                            <input id="product-16" type="checkbox" value="16">
                            <label for="product-16" class="pl-0">&nbsp;</label>
                        </div>
                    </td>
                    <td><a href="/admin/makers/15">Joshua Tran</a></td>
                    <td>larry.elliott@gmail.com</td>
                    <td>4</td>
                    <td>50</td>

                    <td>+380994545675</td>
                    <td>+380994545675</td>
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
                            <input id="product-17" type="checkbox" value="17">
                            <label for="product-17" class="pl-0">&nbsp;</label>
                        </div>
                    </td>
                    <td><a href="/admin/makers/16">Ryan Long</a></td>
                    <td>larry.elliott@gmail.com</td>
                    <td>4</td>
                    <td>50</td>

                    <td>+380994545675</td>
                    <td>+380994545675</td>
                    <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>
                    <td class="text-center">
                        <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                            <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                            <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
                        </div>
                    </td>
                </tr>
                @for($i=0; $i<10; $i++)
                    <tr>
                        <td class="text-center">
                            <div class="checkbox-custom">
                                <input id="product-02" type="checkbox" value="02">
                                <label for="product-02" class="pl-0">&nbsp;</label>
                            </div>
                        </td>
                        <td><a href="/admin/managers/2">Harry Gardner</a></td>
                        <td>larry.elliott9{{$i}}@gmail.com</td>
                        <td>{{4+$i}}</td>
                        <td>{{50+$i}}</td>

                        <td>+380994545675</td>
                        <td>+380994545675</td>
                        <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>
                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
                            </div>
                        </td>
                    </tr>
                @endfor
                <tr>
                    <td class="text-center">
                        <div class="checkbox-custom">
                            <input id="product-18" type="checkbox" value="18">
                            <label for="product-18" class="pl-0">&nbsp;</label>
                        </div>
                    </td>
                    <td><a href="/admin/makers/17">Walter Scott</a></td>
                    <td>larry.elliott@gmail.com</td>
                    <td>4</td>
                    <td>50</td>

                    <td>+380994545675</td>
                    <td>+380994545675</td>
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
                            <input id="product-19" type="checkbox" value="19">
                            <label for="product-19" class="pl-0">&nbsp;</label>
                        </div>
                    </td>
                    <td><a href="/admin/makers/18">Theresa Olson</a></td>
                    <td>larry.elliott@gmail.com</td>
                    <td>4</td>
                    <td>50</td>

                    <td>+380994545675</td>
                    <td>+380994545675</td>
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
                            <input id="product-20" type="checkbox" value="20">
                            <label for="product-20" class="pl-0">&nbsp;</label>
                        </div>
                    </td>
                    <td><a href="/admin/makers/19">Helen Rose</a></td>
                    <td>larry.elliott@gmail.com</td>
                    <td>4</td>
                    <td>50</td>

                    <td>+380994545675</td>
                    <td>+380994545675</td>
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
                {{--<input type="submit" name="delete" value="">--}}
                {{--<input type="submit" name="mod_on" value="">--}}
                <button type="button" class="btn btn-danger">Заблокировать</button>
                <button type="button" class="btn btn-default">Временно ограничить</button>
                <button type="button" class="btn btn-success">Добавить менеджера</button>

            </form>
        </div>

    </div>
@endsection
@section('script')
    <script type="text/javascript" src="/js/page-content/e-commerce/customer-list.js"></script>
@stop