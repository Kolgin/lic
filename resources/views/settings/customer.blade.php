@extends('layout')
@section('content')
<div class="page-header clearfix">
    <div class="row">
        <div>
            <div class="content1" style="text-align: left;">
                <h3>Что выводится изначально:</h1>
                <div class="col-sm-6">
                    <div style="text-align: left;">Купоны: <button type="button" class="btn btn-success"> Добавить</button></div>
                    </br>
                    <table class="table" border="2">
                        <tr>
                            <th><select name="" id=""><option>Название</option></select></th>
                            <th><select name="" id=""><option>Код </option></select></th>
                            <th><select name="" id=""><option>Срок окончания</option></select></th>
                        </tr>
                        <tr>
                            <th>Купон1</th>
                            <th>58greuv</th>
                            <th>11.07.2016</th>
                        </tr>
                        <tr>
                            <th>Купон2</th>
                            <th>uevnjk</th>
                            <th>25.07.2016</th>
                        </tr>
                        <tr>
                            <th>Купон3</th>
                            <th>n54qwe</th>
                            <th>11.09.2016</th>
                        </tr>
                        <tr>
                           <th>Купон4</th>
                            <th>wqe123</th>
                            <th>22.09.2016</th>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-6">
                    <div>Группы пользователей: <button type="button" class="btn btn-success"> Добавить</button></div>
                    </br>
                    <table class="table" border="2">
                        <tr>
                            <th><select name="" id=""><option>Название</option></select></th>
                            <th><select name="" id=""><option>Скидка </option></select></th>
                            
                        </tr>
                        <tr>
                            <th>Группа1</th>
                            <th>10%</th>
                            
                        </tr>
                        <tr>
                            <th>Группа2</th>
                            <th>15%</th>
                          
                        </tr>
                        <tr>
                            <th>Группа3</th>
                            <th>20%</th>
                            
                        </tr>
                        <tr>
                           <th>Группа4</th>
                            <th>25%</th>
                            
                        </tr>
                    </table>
                </div>
            </div>
            <div>
                <div class="content1 col-sm-6" style="text-align: left;">
                    <h3>Добавление и редактирование:</h3>
                    <div>
                        <h4>Новая группа</h4>
                        <div><label for="s_name">Название:</label><input id ="s_name"type="text" placeholder="Название" class="form-control"></div>
                        <div><label for="skidka"> Cкидка в процентах:</label> <input id="skidka" type="text" placeholder="Скидка" class="form-control"></div>
                        <div><label for="min_price">Минимальная цена заказа которую этот тип пользователь может оформлять:</label> <input id="min_price" type="text" placeholder="Цена заказа" class="form-control"></div>
                        </br>
                        <button type="button" class="btn btn-success">Создать</button>
                    </div>
                </div>
            </div>
             <div class="col-sm-6">
                <div class="content1" style="text-align: left;">
                    <h3>Новый купон: </h3>
                    <div>
                        <div><label for="nazvanie"">Название: </label><input id="nazvanie" type="text" placeholder="Email adress" class="form-control " ></div>

                        <div><label for="srok_okonch"> Срок окончания: </label><input id="srok_okonch" type="radio" checked> Бесконечный <input type="text" name="" placeholder="Дата окончания" class="form-control">   <input placeholder="Дата окончания" type="date"> </div>

                        <div><label for="ogranichenie">Ограничение по кол-ву использования:</label><input id="ogranichenie" type="text" placeholder="кол-во и
                        спользования" class="form-control"></div>

                        <div><label for="ispolz">Сколько раз может использовать конкретный покупатель:</label><input id="ispolz" type="text" placeholder="кол-во использования" class="form-control"></div>

                        <div><label for="tip_kupona">Тип купона: </label><input id="tip_kupona" type="radio" checked> Бесплатная доставка <input type="radio" checked> Купон на скидку <input type="text" placeholder="В процентах" class="form-control"><input type="text" placeholder="В рублях" class="form-control"></div>

                        <div><label for="vibor_kateg">Выбор определенной категории товаров(можно выбирать несколько)</label><select id="vibor_kateg" name="" id=""><option value="">Options1</option><option value="">Options2</option></select></div>

                        <div><button type="button" class="btn btn-success">Создать</button></div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
    @stop