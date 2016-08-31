@extends('layout')
@section('content')
    <div class="page-header clearfix">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mt-0 mb-5">Все категории</h4>
                <ol class="breadcrumb mb-0">
                    <li><a href="/">Апанде</a></li>
                    <li class="active">Категории</li>
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
        <div class="form-group">
            <div class="col-sm-2">
                <a href="/admin/categories/1"><h2>Категория 1</h2></a>
                <ul>
                    <a href="/admin/subcategories/1"><li>Подкатегория 1</li></a>
                    <a href="/admin/subcategories/2"><li>Подкатегория 2</li></a>
                    <a href="/admin/subcategories/3"><li>Подкатегория 3</li></a>
                </ul>
            </div>
            <div class="col-sm-2">
                <a href="/admin/categories/2"><h2>Категория 2</h2></a>
                <ul>
                    <a href="/admin/subcategories/4"><li>Подкатегория 4</li></a>
                    <a href="/admin/subcategories/5"><li>Подкатегория 5</li></a>
                    <a href="/admin/subcategories/6"><li>Подкатегория 6</li></a>
                </ul>
            </div>
            <div class="col-sm-2">
                <a href="/admin/categories/3"><h2>Категория 3</h2></a>
                <ul>
                    <a href="/admin/subcategories/7"><li>Подкатегория 7</li></a>
                    <a href="/admin/subcategories/8"><li>Подкатегория 8</li></a>
                    <a href="/admin/subcategories/9"><li>Подкатегория 9</li></a>
                </ul>
            </div>
            <div class="col-sm-2">
                <a href="/admin/categories/4"><h2>Категория 4</h2></a>
                <ul>
                    <a href="/admin/subcategories/10"><li>Подкатегория 10</li></a>
                    <a href="/admin/subcategories/11"><li>Подкатегория 11</li></a>
                    <a href="/admin/subcategories/12"><li>Подкатегория 12</li></a>
                </ul>
            </div>
            <div class="col-sm-2">
                <a href="/admin/categories/5"><h2>Категория 5</h2></a>
                <ul>
                    <a href="/admin/subcategories/13"><li>Подкатегория 13</li></a>
                    <a href="/admin/subcategories/14"><li>Подкатегория 14</li></a>
                    <a href="/admin/subcategories/15"><li>Подкатегория 15</li></a>
                </ul>
            </div>
            <div class="col-sm-2">
                <a href="/admin/categories/6"><h2>Категория 6</h2></a>
                <ul>
                    <a href="/admin/subcategories/16"><li>Подкатегория 16</li></a>
                    <a href="/admin/subcategories/17"><li>Подкатегория 17</li></a>
                    <a href="/admin/subcategories/18"><li>Подкатегория 18</li></a>
                </ul>
            </div>
        </div>
        {{--<div class="widget">--}}
        <div class="container">
            <div class="row">
                <h3>Добавить категорию</h3>
                <div class="col-sm-8">
                    <div class="col-sm-6">
                        <label for="txtModel" class="control-label">Название</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="txtModel" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-sm-4">
                        <label for="txtModel" class="control-label">Статус</label>
                    </div>
                    <div class="col-sm-4">
                        <label for="txtModel" class="control-label">Вкл/Выкл</label>
                    </div>
                    <div class="col-sm-4">
                        <div class="switch">
                            <input id="switchSuccess" type="checkbox" value="option1" checked="">
                            <label for="switchSuccess" class="switch-success"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="col-sm-6">
                        <div class="row">
                            <label for="txtModel" class="col-sm-6 control-label">Выбрать файл</label>
                        </div>
                        <div class="row">
                            <input id="txtModel" type="file" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <textarea id="txtModel" class="form-control">Превью</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="col-sm-6">
                        <label for="txtDescription">Описание</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <textarea id="txtDescription" class="form-control"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <button class="btn btn-success">Сохранить</button>
                </div>
            </div>
            <div class="row">
                <h3>Добавить подкатегорию</h3>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="col-sm-6">
                        <label for="ddlCategory" class="control-label">Выбрать категорию</label>
                    </div>
                    <div class="col-sm-6">
                        <select id="ddlCategory" class="form-control">
                            <option value="">Категория 1</option>
                            <option value="1">Категория 2</option>
                            <option value="2">Категория 3</option>
                            <option value="3">Категория 4</option>
                            <option value="4">Категория 5</option>
                            <option value="5">Категория 6</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="col-sm-6">
                        <label for="txtModel" class="control-label">Название</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="txtModel" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-sm-4">
                        <label for="txtModel" class="control-label">Статус</label>
                    </div>
                    <div class="col-sm-4">
                        <label for="txtModel" class="control-label">Вкл/Выкл</label>
                    </div>
                    <div class="col-sm-4">
                        <div class="switch">
                            <input id="switchSuccessSub" type="checkbox" value="option1" checked="">
                            <label for="switchSuccessSub" class="switch-success"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="col-sm-6">
                        <div class="row">
                            <label for="txtModel" class="col-sm-6 control-label">Выбрать файл</label>
                        </div>
                        <div class="row">
                            <input id="txtModel" type="file" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <textarea id="txtModel" class="form-control">Превью</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="col-sm-6">
                        <label for="txtDescription">Описание</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div id="summernote-1"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <button class="btn btn-success">Сохранить</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="/js/page-content/e-commerce/edit-product.js"></script>
    <script type="text/javascript" src="/js/page-content/file-uploads/dropzone-js.js"></script>
    <script type="text/javascript" src="/js/page-content/editors/summernote.js"></script>
@stop