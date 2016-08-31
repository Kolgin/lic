@extends('layout')
@section('content')
    
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Настройки каталога</h3>
                    </div>
                    <div class="panel-body">
                       
                            <div>Скрывать товары которых нет в наличии  <input type="checkbox" ></div>
                            <div>Показывать кнопки "Купить" на страницах со списком товаров <input type="checkbox" checked></div>
                            <div>Сортировка товаров по умолчанию 
                                <select name="selet" id="">
                                    <option value="">Дате</option>
                                    <option value="">Популярности</option>
                                    <option value="">Цене</option>
                                </select>
                            </div> 
                            
                            <div>Показывать цена за еденицу измерения товара <input type="radio" checked>Отключено <a href="#">Включить</a></div> 
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Настройки оформления заказа</h3>
                    </div>
                    <div class="panel-body">
                            <div>Минимально допустимая сумма стоимости товаров <input type="text"> Оставте пустым если нет ограничений</div>
                             <div>Максимально допустимая сумма стоимости товаров <input type="text"> Оставте пустым если нет ограничений</div>
                             <div>Пропускать оплату заказов с нулевой суммой Включено <a href="">Отключить</a> Устанавливать статус <select name="" id=""><option value="">Ожидает оплаты</option></select> <a href="">(Что это?)</a></div>
                             <div>Обязательная регистрация покупателя <input type="checkbox"> </div>
                              <div>Требовать указать номер телефона <input type="checkbox"> </div>
                              <div> Добавление товаров в карту без выбранных опций <select name="" id=""><option value="">Спрашивать у клиента обязательные параметры</option><option value="">Выставлять по умолчанию</option></select></div>
                              <div>Открывать корзину после нажатия кнопки "В козину" <input type="checkbox"></div>
                              <div>Спрашивать название компании <input type="checkbox"></div>
                              <div>Партнерский Javascript код учёта продаж при завершении заказа <input type="radio" checked>Отключено <button type="button" class="btn btn-default">Купить эту функциональность </button></div>
                              <div>Спрашивать адрес для оформления счета при размещении заказа <span> Включено <a href="">Отключить</a></span></div>
                    </div>
                </div>


                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Сравнить с ценой</h3>
                    </div>
                    <div class="panel-body">
                       <div>Показывать сравнение с ценой <select name="" id=""><option value="">В списке товаров и на странице товара</option><option value="">Только на странице товара</option></select></div>
                </div>






                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Коментарии к заказу</h3>
                    </div>
                    <div class="panel-body">
                       <div>Комментарии к заказу <span> Включено <a href="">Отключить</a></span></div>
                       <div>Заголовок для поля <input type="text" placeholder="Комментарий к заказу"></div>
                       <div>Сделать комментарий к заказу обязательными <input type="radio" checked> Отключено <a href=""> Включить</a></div>
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Избранное</h3>
                    </div>
                    <div class="panel-body">
                        <div>Возможность у клиентов добавлять товары <span><input type="radio" checked=""> Включено <a href="">Отключено</a></span></div>
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Номер заказа</h3>
                    </div>
                    <div class="panel-body">
                        <div>Номер стандартного заказа <a href="">#</a></div>
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title"> Адреса отправителей </h>
                    </div>
                    <div class="panel-body">
                        <div>Название компании <input type="text" placeholder='ООО"Компания"'></div>
                        <div>E-mail <input type="text"  placeholder='mail@mail.ru'></div>
                        <div>Адресс. строка 1 <input type="text" placeholder='район'></div>
                        <div>Адресс. строка 2 <input type="text" placeholder='д.45'></div>
                        <div>Город <input type="text" placeholder="Москва"></div>
                        <div>Республика/Область <input type="text" placeholder="Московская обл."></div>
                        <div>Почтовый индекс <input type="text" placeholder="359952"></div>
                        <div>Страна <input type="text" placeholder="Россия"></div>
                        <div>Номер телефона<input type="text" placeholder="+789456123"></div>
                    </div>
                </div>
            </div>  
        </div>
        
        
        
        
        
        
    </div>
@stop