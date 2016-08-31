@extends('layout')
@section('content')
    <div class="page-header clearfix">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mt-0 mb-5">Товар 1</h4>
                <ol class="breadcrumb mb-0">
                    <li><a href="#">Апанде</a></li>
                    <li><a href="#">Все товары</a></li>
                    <li class="active">Товар 1</li>
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
            <div class="widget-body">
                <form class="form-horizontal">
                    <ul role="tablist" class="nav nav-tabs mb-15">
                        <li role="presentation" class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab">Основное</a></li>
                        <li role="presentation"><a href="#attribute" aria-controls="attribute" role="tab" data-toggle="tab">Атрибуты</a></li>
                        <li role="presentation"><a href="#discount" aria-controls="discount" role="tab" data-toggle="tab">Параметры</a></li>
                        <li role="presentation"><a href="#image" aria-controls="image" role="tab" data-toggle="tab">Галерея</a></li>
                        <li role="presentation"><a href="#files" aria-controls="files" role="tab" data-toggle="tab">Файлы</a></li>
                        <li role="presentation"><a href="#taxes" aria-controls="taxes" role="tab" data-toggle="tab">Налоги и доставки</a></li>
                        <li role="presentation"><a href="#linkProduct" aria-controls="linkProduct" role="tab" data-toggle="tab">Связанные товары</a></li>
                        <li role="presentation"><a href="#html" aria-controls="html" role="tab" data-toggle="tab">HTML-код</a></li>
                        <li role="presentation"><a href="#seo" aria-controls="seo" role="tab" data-toggle="tab">SEO</a></li>
                        <button class="btn btn-success" style="float: right">Сохранить</button>
                    </ul>
                    <div class="tab-content">
                        <div id="general" role="tabpanel" class="tab-pane active">
                            <div class="form-group">
                                <label for="txtImage" class="col-sm-3 control-label">Изображение</label>
                            </div>
                            <div class="form-group">
                                <label for="txtProductName" class="col-sm-3 control-label">Название</label>
                                <div class="col-sm-9">
                                    <input id="txtProductName" type="text" class="form-control" placeholder="Товар1">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtMetaTagTitle" class="col-sm-3 control-label">Артикл</label>
                                <div class="col-sm-9">
                                    <input id="txtMetaTagTitle" type="text" class="form-control" placeholder="Артикл1">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtWeight" class="col-sm-3 control-label">Вес</label>
                                <div class="col-sm-9">
                                    <input id="txtWeight" type="text" class="form-control" placeholder="15">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtDesc" class="col-sm-3 control-label">Описание</label>
                                <div class="col-sm-9">
                                    <textarea id="txtDesc" class="form-control">Здесь описание товара</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ddlCategory" class="col-sm-3 control-label">Выбор категории и подкатегории</label>
                                <div class="col-sm-9">
                                    <select id="ddlCategory" class="form-control">
                                        <option value="">Категория1</option>
                                        <option value="1">Категория2</option>
                                        <option value="0">Категория3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtPrice" class="col-sm-3 control-label">Цена за товар</label>
                                <div class="col-sm-9">
                                    <input id="txtPrice" type="text" class="form-control" placeholder="15 руб">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtPriceWeight" class="col-sm-3 control-label">Цена за 1 г</label>
                                <div class="col-sm-9">
                                    <input id="txtPrice" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtWholesale" class="col-sm-3 control-label">Оптовая цена</label>
                                <div class="col-sm-9">
                                    <input id="txtWholesale" type="text" class="form-control" placeholder="14 руб">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtCount" class="col-sm-3 control-label">Кол-во товаров на складе</label>
                                <div class="col-sm-9">
                                    <input id="txtWholesale" type="text" class="form-control" placeholder="25 шт">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtComparison" class="col-sm-3 control-label">Сравнить с ценой</label>
                                <div class="col-sm-9">
                                    <input id="txtWholesale" type="text" class="form-control" placeholder="20 руб">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtShow" class="col-sm-3 control-label">Статус</label>
                                <div class="col-sm-9">
                                    <label>Вкл/выкл показ в каталоге</label>
                                    <div class="switch">
                                        <input id="switchSuccess" type="checkbox" value="option1" checked="">
                                        <label for="switchSuccess" class="switch-success"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtProductionTime" class="col-sm-3 control-label">Сроки изготовления товара</label>
                                <div class="col-sm-9">
                                    <input id="txtProductionTime" type="text" class="form-control" placeholder="5 дней">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtCredit" class="col-sm-3 control-label">Можно приобрести в рассрочку</label>
                                <div class="col-sm-9">
                                    <input id="radioSuccess" type="radio" name="radioStates" value="option1">
                                    <label for="radioSuccess" class="radio-success">Да</label>
                                    <input id="radioWarning" type="radio" name="radioStates" value="option2">
                                    <label for="radioWarning" class="radio-warning">Нет</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtSpecial" class="col-sm-3 control-label">Настройка спец предложения по времени действия</label>
                                <div class="col-sm-3">
                                    <input id="txtSpecial" type="text" class="form-control" placeholder="30 дней">
                                </div>
                                <div class="col-sm-6">
                                    <select id="ddlCategory" class="form-control">
                                        <option value="">Скидка</option>
                                        <option value="1">Бесплатная доставка</option>
                                        <option value="0">Подарок</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtSpecial" class="col-sm-3 control-label">Новый товар - добавление товара не прошло 7 дней</label>
                                <div class="col-sm-9">
                                    <input id="txtSpecial" type="text" class="form-control" placeholder="7">
                                </div>
                            </div>
                        </div>

                        <div id="attribute" role="tabpanel" class="tab-pane">
                            <div class="form-group">
                                <div class="col-sm-1">
                                    <select id="ddlCategory" class="form-control">
                                        <option value="">Общий</option>
                                        <option value="1">Кинжал</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtModel" class="col-sm-3 control-label">Бренд</label>
                                <div class="col-sm-9">
                                    <input id="txtModel" type="text" class="form-control" placeholder="Токагава">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtSKU" class="col-sm-3 control-label">Артикул</label>
                                <div class="col-sm-9">
                                    <input id="txtSKU" type="text" class="form-control" placeholder="ТКГВ1">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtLocation" class="col-sm-3 control-label">Длина</label>
                                <div class="col-sm-9">
                                    <input id="txtLocation" type="text" class="form-control" placeholder="30 см">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtPrice" class="col-sm-3 control-label">Ширина</label>
                                <div class="col-sm-9">
                                    <input id="txtPrice" type="text" class="form-control" placeholder="5 см">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtTaxClass" class="col-sm-3 control-label">Высота</label>
                                <div class="col-sm-9">
                                    <input id="txtTaxClass" type="text" class="form-control" placeholder="10 см">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtQuantity" class="col-sm-3 control-label">Вес</label>
                                <div class="col-sm-9">
                                    <input id="txtQuantity" type="text" class="form-control" placeholder="15 кг">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtMinQuantity" class="col-sm-3 control-label">Материал</label>
                                <div class="col-sm-9">
                                    <input id="txtMinQuantity" type="text" class="form-control" placeholder="Валирийская сталь">
                                </div>
                            </div>
                        </div>
                        <div id="discount" role="tabpanel" class="tab-pane">
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label for="txtName" class="col-sm-3 control-label">Название</label>
                                    <input id="txtName" type="text" class="form-control" placeholder="Материал">
                                </div>
                                <div class="col-sm-5">
                                    <label for="txtType" class="col-sm-4 control-label">Тип параметра</label>
                                    <select id="txtType" class="form-control">
                                        <option value="">Радио-кнопка</option>
                                        <option value="1">Флажки</option>
                                        <option value="2">Текстовое поле</option>
                                        <option value="3">Многострочное текстовое поле</option>
                                        <option value="4">Выбор даты</option>
                                        <option value="5">Прикреплённые файлы</option>
                                    </select>
                                </div>
                            </div>
                            <table id="product-list" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Название</th>
                                    <th>Мод...</th>
                                    <th>....</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <input type="text" class="txtQuantity form-control">
                                    </td>
                                    <td>
                                        <div class="col-sm-2">
                                            <select id="txtType" class="form-control">
                                                <option value="">+</option>
                                                <option value="1">-</option>
                                                <option value="2">/</option>
                                                <option value="3">*</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <select id="txtType" class="form-control">
                                                <option value="">p.</option>
                                                <option value="1">%</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" value="0.00" class="txtQuantity form-control">
                                        </div>
                                    </td>
                                    <td>
                                        <input id="radioSuccess" type="radio" name="radioStates" value="option1">
                                        <label for="radioSuccess" class="radio-success"></label>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-success">Добавить</button>
                        </div>
                        <div id="image" role="tabpanel" class="tab-pane">
                            <div class="form-group">
                                <label for="txtVideoLink" class="col-sm-3 control-label">Ссылка на видео</label>
                                <div class="col-sm-5">
                                    <input type="text" id="txtVideoLink" class="form-control">
                                </div>
                            </div>
                            <table style="width: 100%" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="text-center">Image</th>
                                    <th>Image Url</th>
                                    <th style="width: 20%">Sort Order</th>
                                    <th class="text-center">Edit</th>
                                    <th class="text-center">Выбрать основным</th>
                                    <th class="text-center">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center"><img src="/images/products/01.jpg" width="100" alt="" class="img-thumbnail img-responsive"></td>
                                    <td>
                                        <input type="text" value="http://mydomain.com/images/product/01.jpg" disabled name="txtImageUrl" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" value="0" name="txtSortOrder" class="form-control">
                                    </td>
                                    <td class="text-center">
                                        <input type="file" data-input="false" data-buttonText="" data-buttonName="btn-primary btn-outline btn-sm" class="filestyle">
                                    </td>
                                    <td class="text-center">
                                        <div class="checkbox-custom">
                                            <input id="product-01" type="checkbox" value="01">
                                            <label for="product-01" class="pl-0">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-outline btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><img src="/images/products/02.jpg" width="100" alt="" class="img-thumbnail img-responsive"></td>
                                    <td>
                                        <input type="text" value="http://mydomain.com/images/product/02.jpg" disabled name="txtImageUrl" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" value="0" name="txtSortOrder" class="form-control">
                                    </td>
                                    <td class="text-center">
                                        <input type="file" data-input="false" data-buttonText="" data-buttonName="btn-primary btn-outline btn-sm" class="filestyle">
                                    </td>
                                    <td class="text-center">
                                        <div class="checkbox-custom">
                                            <input id="product-02" type="checkbox" value="02">
                                            <label for="product-02" class="pl-0">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-outline btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><img src="/images/products/03.jpg" width="100" alt="" class="img-thumbnail img-responsive"></td>
                                    <td>
                                        <input type="text" value="http://mydomain.com/images/product/03.jpg" disabled name="txtImageUrl" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" value="0" name="txtSortOrder" class="form-control">
                                    </td>
                                    <td class="text-center">
                                        <input type="file" data-input="false" data-buttonText="" data-buttonName="btn-primary btn-outline btn-sm" class="filestyle">
                                    </td>
                                    <td class="text-center">
                                        <div class="checkbox-custom">
                                            <input id="product-03" type="checkbox" value="03">
                                            <label for="product-03" class="pl-0">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-outline btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><img src="/images/products/04.jpg" width="100" alt="" class="img-thumbnail img-responsive"></td>
                                    <td>
                                        <input type="text" value="http://mydomain.com/images/product/04.jpg" disabled name="txtImageUrl" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" value="0" name="txtSortOrder" class="form-control">
                                    </td>
                                    <td class="text-center">
                                        <input type="file" data-input="false" data-buttonText="" data-buttonName="btn-primary btn-outline btn-sm" class="filestyle">
                                    </td>
                                    <td class="text-center">
                                        <div class="checkbox-custom">
                                            <input id="product-04" type="checkbox" value="04">
                                            <label for="product-04" class="pl-0">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-outline btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><img src="/images/products/05.jpg" width="100" alt="" class="img-thumbnail img-responsive"></td>
                                    <td>
                                        <input type="text" value="http://mydomain.com/images/product/05.jpg" disabled name="txtImageUrl" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" value="0" name="txtSortOrder" class="form-control">
                                    </td>
                                    <td class="text-center">
                                        <input type="file" data-input="false" data-buttonText="" data-buttonName="btn-primary btn-outline btn-sm" class="filestyle">
                                    </td>
                                    <td class="text-center">
                                        <div class="checkbox-custom">
                                            <input id="product-05" type="checkbox" value="05">
                                            <label for="product-05" class="pl-0">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-outline btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><img src="/images/products/06.jpg" width="100" alt="" class="img-thumbnail img-responsive"></td>
                                    <td>
                                        <input type="text" value="http://mydomain.com/images/product/06.jpg" disabled name="txtImageUrl" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" value="0" name="txtSortOrder" class="form-control">
                                    </td>
                                    <td class="text-center">
                                        <input type="file" data-input="false" data-buttonText="" data-buttonName="btn-primary btn-outline btn-sm" class="filestyle">
                                    </td>
                                    <td class="text-center">
                                        <div class="checkbox-custom">
                                            <input id="product-06" type="checkbox" value="06">
                                            <label for="product-06" class="pl-0">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-outline btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="files" role="tabpanel" class="tab-pane">
                            <h3 class="widget-title">Прикрепить файл</h3>
                            <div id="multiple-dz" action="/upload" class="dropzone"></div>
                        </div>
                        <div id="taxes" role="tabpanel" class="tab-pane">
                            <div class="widget-body">
                                <table id="product-list" style="width: 100%" class="table table-hover dt-responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th class="text-center">
                                        </th>
                                        <th>Название</th>
                                        <th>Значение</th>
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
                                            <td>Налог 1</td>
                                            <td>Значение 1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <div class="checkbox-custom">
                                                    <input id="product-02" type="checkbox" value="02">
                                                    <label for="product-02" class="pl-0">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>Налог 2</td>
                                            <td>Значение 2</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group">
                                <label for="ddlCategory" class="col-sm-3 control-label">Стоимость доставки</label>
                                <div class="col-sm-9">
                                    <select id="ddlCategory" class="form-control">
                                        <option value="">Бесплатно</option>
                                        <option value="1">Фикс стоимость</option>
                                        <option value="0">Настройки системы</option>
                                        <option value="0">Настройки системы + фикс</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="linkProduct" role="tabpanel" class="tab-pane">
                            <div class="widget-body">
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
                                        {{--<th class="text-right">Price</th>--}}
                                        <th>Категория</th>
                                        <th>Статус</th>
                                        <th>Мастер</th>
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
                                            <td>Категория2</td>
                                            <td><span class="label label-success">Enabled</span></td>
                                            <td>Имя мастер {!! $i !!}</td>
                                        </tr>
                                    @endfor
                                    </tbody>
                                </table>
                                <button class="btn btn-success">Добавить</button>
                            </div>
                        </div>
                        <div id="html" role="tabpanel" class="tab-pane">
                            <div class="widget">
                                <div class="widget-heading">
                                    <h3 class="widget-title">HTML</h3>
                                </div>
                                <div class="widget-body">
                  <pre class="prettyprint lang-html linenums">&lt;!-- Main Sidebar start--&gt;
&lt;aside class=&quot;main-sidebar pinned&quot;&gt;
&lt;/aside&gt;
&lt;!-- Main Sidebar end--&gt;
&lt;!-- Header start--&gt;
&lt;header&gt;
&lt;/header&gt;
&lt;!-- Header end--&gt;
&lt;!-- Work Here start--&gt;
&lt;section class=&quot;wrapper&quot;&gt;
  &lt;div class=&quot;page-header clearfix&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;main-content container-fluid&quot;&gt;
    &lt;div class=&quot;row&quot;&gt;
      &lt;div class=&quot;col-lg-12&quot;&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/section&gt;
&lt;!-- Work Here end--&gt;
&lt;!-- Right Sidebar start--&gt;
&lt;aside class=&quot;right-sidebar closed&quot;&gt;
&lt;/aside&gt;
&lt;aside class=&quot;conversation closed&quot;&gt;
&lt;/aside&gt;
&lt;!-- Right Sidebar end--&gt;
&lt;!-- Demo Settings start--&gt;
&lt;div class=&quot;setting closed&quot;&gt;
&lt;/div&gt;
&lt;!-- Demo Settings end--&gt;</pre>
                                </div>
                            </div>
                        </div>
                        <div id="seo" role="tabpanel" class="tab-pane">
                            <div class="form-group">
                                <label for="txtTitle" class="col-sm-3 control-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" id="txtTitle" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtKeywords" class="col-sm-3 control-label">Keywords</label>
                                <div class="col-sm-9">
                                    <input type="text" id="txtKeywords" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtDesc" class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-9">
                                    <input type="text" id="txtDesc" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="/js/page-content/e-commerce/edit-product.js"></script>
    <script type="text/javascript" src="/js/page-content/file-uploads/dropzone-js.js"></script>
@stop