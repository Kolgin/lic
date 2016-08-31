@extends('layout')
@section('content')
    
    <div class="page-content container-fluid">
        <div class="widget">
            <div class="widget-heading">
                <h3 class="widget-title">Новости</h3>
            </div>
            <div class="widget-body">
                <table id="customer-list" style="width: 100%" class="table table-hover dt-responsive nowrap">
                    <thead>
                    <tr>
                        
                        <th>Выбрать</th>
                        <th>Название</th>
                        <th>Автор</th>
                        <th>Дата публикации</th>
                        
                        
                       
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
                        <td><a href="/admin/news/1">Новость 1</a></td>
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
                        <td><a href="/admin/news/2">Новость 2</a></td>
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
                        <td><a href="/admin/news/3">Новость 3</a></td>
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
                        <td><a href="/admin/news/4">Новость 4</a></td>
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
                        <td><a href="/admin/news/5">Новость 5</a></td>
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
                        <td><a href="/admin/news/6">Новость 6</a></td>
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
                        <td><a href="/admin/news/7">Новость 7</a></td>
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
                        <td><a href="/admin/news/8">Новость 8</a></td>
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
                        <td><a href="/admin/news/9">Новость 9</a></td>
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
                        <td><a href="/admin/news/10">Новость 10</a></td>
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
                        <td><a href="/admin/news/1">Новость 11</a></td>
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
                        <td><a href="/admin/news/11">Новость 12</a></td>
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
@endsection
@section('script')
    <script type="text/javascript" src="/js/page-content/e-commerce/customer-list.js"></script>
@stop