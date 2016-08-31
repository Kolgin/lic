@extends('layout')
@section('content')
    <div class="page-header clearfix">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="mt-0 mb-5">Партнеры</h1>
                <ol class="breadcrumb mb-0">
                    <li><a href="#">Апанде</a></li>
                    <li><a href="#">Електронная коммерция</a></li>
                    <li class="active">Список клиентов</li>
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
                <h3 class="widget-title">Список партнеров</h3>
            </div>
            <div style="margin-right: auto">

                <a href="/admin/customers/new"><button type="button" class="btn btn-success" style="margin: 20px">Добавить партнера</button></a>
                <br>


            </div>

            <div class="widget">
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
                                <label for="txtCustomerName">моб. телефон</label>
                                <input id="txtCustomerName" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="txtEmail">Email</label>
                                <input id="txtEmail" type="text" class="form-control">
                            </div>
                        </div>
                        {{--<div class="col-md-2">--}}

                            {{--<div class="form-group">--}}
                                {{--<label for="txtCustomerName">Кол-во клиентов</label>--}}
                                {{--<input id="txtCustomerName" type="text" class="form-control">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="txtCustomerName">Кол-во денег которое должны</label>
                                <input id="txtCustomerName" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="txtCustomerName">Уникальный код для рефералки</label>
                                <input id="txtCustomerName" type="text" class="form-control">
                            </div>
                        </div>
                        {{--<div class="col-md-4">--}}
                        {{--<div class="form-group">--}}
                        {{--<label for="ddlCustomerGroup">Customer Group</label>--}}
                        {{--<select id="ddlCustomerGroup" class="form-control">--}}
                        {{--<option value="">Choose</option>--}}
                        {{--<option value="1">Group 1</option>--}}
                        {{--<option value="2">Group 2</option>--}}
                        {{--<option value="3">Group 3</option>--}}
                        {{--</select>--}}
                        {{--</div>--}}
                        {{--</div>--}}
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
                    <div class="row">


                        {{--<div class="form-group">--}}
                        {{--<label for="ddlStatus">Status</label>--}}
                        {{--<select id="ddlStatus" class="form-control">--}}
                        {{--<option value="">Choose</option>--}}
                        {{--<option value="1">Enabled</option>--}}
                        {{--<option value="0">Disabled</option>--}}
                        {{--</select>--}}
                        {{--</div>--}}
                    </div>
                    {{--<div class="row">--}}

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
                    {{--</div>--}}

            </div>
            {{--<button type="submit" class="mb-15 btn btn-raised btn-success">Фильтр</button>--}}
            {{--<div class="widget-body">--}}
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
                    <th>моб. телефон</th>
                    <th>Email</th>
                    {{--<th>Кол-во клиентов</th>--}}
                    <th>Кол-во денег которое должны</th>
                    <th>Уникальный код для рефералки</th>
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
                    <td><a href="/admin/partners/1">Larry Elliott</a></td>
                    <td>+380994545675</td>
                    <td>larry.elliott@gmail.com</td>
                    {{--<td>12</td>--}}
                    <td>30 000</td>
                    <td>1</td>
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
                    <td><a href="/admin/partners/2">Harry Gardner</a></td>
                    <td>+380505026734</td>
                    <td>harry.gardner@hotmail.fr</td>
                    {{--<td>20</td>--}}
                    <td>400</td>
                    <td>15</td>
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
                    <td><a href="/admin/partners/3">Lori Cox</a></td>
                    <td>+380955447172</td>
                    <td>lori.cox@gmail.com</td>
                    {{--<td>12</td>--}}
                    <td>3 000</td>
                    <td>19</td>

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
                    <td><a href="/admin/partners/4">James Medina</a></td>
                    <td>+380445544675</td>
                    <td>james.medina</td>
                    {{--<td>45</td>--}}
                    <td>450</td>
                    <td>45</td>


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
                    <td><a href="/admin/partners/5">Lauren Perry</a></td>
                    <td>+380643465675</td>
                    <td>Lauren.Perry@gmail.com</td>
                    {{--<td>10</td>--}}
                    <td>300</td>
                    <td>700</td>
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
                    <td><a href="/admin/partners/6">Aaron Holmes</a></td>
                    <td>+380656554545</td>
                    <td>aaron.holmes@hotmail.com</td>
                    {{--<td>16</td>--}}
                    <td>670</td>
                    <td>13</td>
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
                    <td><a href="/admin/partners/7">Eric Santos</a></td>
                    <td>+380678834545</td>
                    <td>eric.santos@gmail.com</td>
                    {{--<td>12</td>--}}
                    <td>4</td>
                    <td>8</td>


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
                    <td><a href="/admin/partners/8">Benjamin Ray</a></td>
                    <td>+380678844444</td>
                    <td>benjamin.ray@gmail.com</td>
                    {{--<td>13</td>--}}
                    <td>3</td>
                    <td>10</td>

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
                    <td><a href="/admin/partners/9">Virginia Baker</a></td>
                    <td>+380678834545</td>
                    <td>virginia.baker@gmail.com</td>
                    {{--<td>12</td>--}}
                    <td>12000</td>
                    <td>123</td>

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
                    <td><a href="/admin/partners/10">Adam Vargas</a></td>
                    <td>+380504815335</td>
                    <td>adam.vargas@gmail.com</td>
                    {{--<td>155</td>--}}
                    <td>8000</td>
                    <td>147</td>

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
                    <td><a href="/admin/partners/10">Dylan Chapman</a></td>
                    <td>+380678827506</td>
                    <td>dylan.chapman@gmail.com</td>
                    {{--<td>12</td>--}}
                    <td>3000</td>
                    <td>9</td>

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
                    <td><a href="/admin/partners/11">Mildred Henry</a></td>
                    <td>+380958833445</td>
                    <td>mildred.henry@gmail.com</td>
                    {{--<td>12</td>--}}
                    <td>1000</td>
                    <td>1100</td>

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
                    <td><a href="/admin/partners/12">Brian Rogers</a></td>
                    <td>+3806767677800</td>
                    <td>brian.rogers@gmail.com</td>
                    {{--<td>13</td>--}}
                    <td>30</td>
                    <td>10</td>

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
                    <td><a href="/admin/makers/12">Jennifer Valdez</a></td>
                    <td>+380678834545</td>
                    <td>jennifer.valdez@gmail.com</td>
                    {{--<td>3</td>--}}
                    <td>0</td>
                    <td>3</td>

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
                    <td><a href="/admin/makers/13">James Perez</a></td>
                    <td>+380445657687</td>
                    <td>james.perez@hotmail.com</td>
                    {{--<td>12</td>--}}
                    <td>6</td>
                    <td>6</td>

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
                    <td><a href="/admin/makers/14">Joshua Tran</a></td>
                    <td>+380679078890</td>
                    <td>joshua.tran@gmail.com</td>
                    {{--<td>12</td>--}}
                    <td>12</td>
                    <td>0</td>

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
                    <td><a href="/admin/makers/15">Ryan Long</a></td>
                    <td>+380645674545</td>
                    <td>ryan.long@gmail.com</td>
                    {{--<td>12</td>--}}
                    <td>3</td>
                    <td>9</td>


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
                            <input id="product-18" type="checkbox" value="18">
                            <label for="product-18" class="pl-0">&nbsp;</label>
                        </div>
                    </td>
                    <td><a href="/admin/makers/16">Walter Scott</a></td>
                    <td>+380678454567</td>
                    <td>walter.scott@gmail.com</td>
                    {{--<td>12</td>--}}
                    <td>2</td>
                    <td>10</td>

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
                    <td><a href="/admin/makers/17">Theresa Olson</a></td>
                    <td>+380675698765</td>
                    <td>theresa.olson@gmail.com</td>
                    {{--<td>27</td>--}}
                    <td>15</td>
                    <td>12</td>

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
                    <td><a href="/admin/makers/18">Helen Rose</a></td>
                    <td>+38095678920</td>
                    <td>helen.rose@gmail.com</td>
                    {{--<td>20</td>--}}
                    <td>15</td>
                    <td>5</td>

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
                <button type="button" class="btn btn-success">Добавить партнера</button>
            </form>
        </div>
    </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="/js/page-content/e-commerce/customer-list.js"></script>
@stop