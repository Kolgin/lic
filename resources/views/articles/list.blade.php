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
                <h3 class="widget-title">Статьи</h3>
            </div>
            <div class="widget-body">
                <table id="customer-list" style="width: 100%" class="table table-hover dt-responsive nowrap">
                    <thead>
                    <tr>
                        
                        <th>Выбрать</th>
                        <th>Название <select name="" id=""></select></th>
                        <th>Рубрика <select name="" id=""></select></th>
                        <th>Автор <select name="" id=""></select></th>
                        <th>Дата публикации <select name="" id=""></select></th>
                        
                        
                       
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
                        <td><a href="/admin/articles/1">Статья 1</a></td>
                        <td>Рубрика 1</td>
                        <td>Larry Elliott</td>
                        
                        
                        <td>04/19/2016</td>
                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-outline btn-primary"><i class="ti-eye"></i></button>
                                <button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button>
                                <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
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
                        <td><a href="/admin/articles/2">Статья 2</a></td>
                        <td>Рубрика 2</td>
                        <td>Harry Gardner</td>
                        
                        
                        <td>04/19/2016</td>
                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-outline btn-primary"><i class="ti-eye"></i></button>
                                <button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button>
                                <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
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
                        <td><a href="/admin/articles/3">Статья 3</a></td>
                        <td>Рубрика 3</td>
                        <td>Lori Cox</td>
                        
                       
                        <td>04/19/2016</td>
                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-outline btn-primary"><i class="ti-eye"></i></button>
                                <button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button>
                                <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
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
                        <td><a href="/admin/articles/4">Статья 4</a></td>
                        <td>Рубрика 4</td>
                        <td>James Medina</td>
                        
                        
                        <td>04/19/2016</td>
                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-outline btn-primary"><i class="ti-eye"></i></button>
                                <button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button>
                                <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
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
                        <td><a href="/admin/articles/5">Статья 5</a></td>
                        <td>Рубрика 5</td>
                        <td>Lauren Perry</td>
                        
                       
                        <td>04/19/2016</td>
                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-outline btn-primary"><i class="ti-eye"></i></button>
                                <button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button>
                                <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
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
                        <td><a href="/admin/articles/6">Статья 6</a></td>
                        <td>Рубрика 6</td>
                        <td>Aaron Holmes</td>
                        
                        
                        <td>04/19/2016</td>
                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-outline btn-primary"><i class="ti-eye"></i></button>
                                <button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button>
                                <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
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
                        <td><a href="/admin/articles/7">Статья 7</a></td>
                        <td>Рубрика 7</td>
                        <td>Eric Santos</td>
                        
                        
                        <td>04/18/2016</td>
                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-outline btn-primary"><i class="ti-eye"></i></button>
                                <button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button>
                                <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
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
                        <td><a href="/admin/articles/8">Статья 8</a></td>
                        <td>Рубрика 8</td>
                        <td>Benjamin Ray</td>
                        
                        
                        <td>04/18/2016</td>
                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-outline btn-primary"><i class="ti-eye"></i></button>
                                <button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button>
                                <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
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
                        <td><a href="/admin/articles/9">Статья 9</a></td>
                        <td>Рубрика 9</td>
                        <td>Virginia Baker</td>
                       
                        
                        <td>04/18/2016</td>
                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-outline btn-primary"><i class="ti-eye"></i></button>
                                <button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button>
                                <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
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
                        <td><a href="/admin/articles/10">Статья 10</a></td>
                        <td>Рубрика 10</td>
                        <td>Adam Vargas</td>
                        
                        
                        <td>04/18/2016</td>
                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-outline btn-primary"><i class="ti-eye"></i></button>
                                <button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button>
                                <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="checkbox-custom">
                                <input id="product-11" type="checkbox" value="15">
                                <label for="product-11" class="pl-0">&nbsp;</label>
                            </div>
                        </td>
                        <td><a href="/admin/articles/1">Статья 11</a></td>
                        <td>Рубрика 11</td>
                        <td>James Perez</td>
                        
                        
                        <td>04/18/2016</td>
                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-outline btn-primary"><i class="ti-eye"></i></button>
                                <button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button>
                                <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="checkbox-custom">
                                <input id="product-12" type="checkbox" value="16">
                                <label for="product-12" class="pl-0">&nbsp;</label>
                            </div>
                        </td>
                        <td><a href="/admin/articles/11">Статья 12</a></td>
                        <td>Рубрика 12</td>
                        <td>Joshua Tran</td>
                        
                        
                        <td>04/18/2016</td>
                        <td class="text-center">
                            <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-outline btn-primary"><i class="ti-eye"></i></button>
                                <button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button>
                                <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    
                    </tbody>
                </table>
                <button type="button" class="btn btn-success"> Добавить </button>
                <button type="button" class="btn btn-danger"> Удалить </button>
            </div>
        </div>
    </div>
@stop