@extends('layout')
@section('content')
    <div class="page-header clearfix">
        <div class="row">
            <div class="col-sm-12">
            <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Налоги</h3>
                    </div>
                    <div class="panel-body">
                        <div>
                            <label for="katalog_name">Название каталога: </label> <input id="katalog_name" type="text" placeholder="УСН 6%"> 
                            <input type="checkbox" id="chkb_k"> <label for="chkb_k">Применять по умолчанию всех товаров</label>
                        </div>
                        <div>
                            <label for="prim_nalog">Налог применяется к: </label> <select name="" id=""><option value="">стоимости товара</option> <option value="">стоимости товара + стоимость доставка</option></select>
                            <input type="checkbox" id="chkb_n">
                            <label for="chkb_n">Применять по умолчанию всех товаров</label>
                        </div>
                        <div class="col-md-9"> 
                            <div class="col-md-3">
                            Ставки по зонам 
                            </div>
                            <table  class="col-md-6">
                            <tr>
                                <th>Зона</th>
                                <th>Ставка %</th>
                            </tr>
                            <tr>
                                <th>Все покупатели</th>
                                <th><input type="text"></th>
                            </tr>
                        </table>
                        </div>
                    </div>
            </div>
            <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Графические зоны</h3>
                        </div>
                        <div class="panel-body">
                            <div>
                                <label for="zonaname">Название зоны </label> <input id="zonaname" type="text" placeholder="Europe(EC)">
                            </div>

                            <div class="col-md-6" style="text-align: left;">
                                <div>
                                    <button type="button" class="btn btn-success">Добавить страну...</button>
                                    <button type="button" class="btn btn-success">Добавить регион...</button>
                                    <button type="button" class="btn btn-danger"> Очистить</button>
                                </div>
                                </br>
                                <div style=" height: 200px; overflow-y: scroll">
                                    <div style="text-align: center">Страны</div>
                                    <div>Австрия <input type="checkbox"></div>
                                    <div>Бельгия<input type="checkbox"></div>
                                    <div>Болгария <input type="checkbox"></div>
                                    <div>Великобритания <input type="checkbox"></div>
                                    <div>Венгрия<input type="checkbox"></div>
                                    <div>Германия <input type="checkbox"></div>
                                    <div>Греция <input type="checkbox"></div>
                                    <div>Дания <input type="checkbox"></div>
                                    <div>Ирландия <input type="checkbox"></div>
                                    <div>Италия <input type="checkbox"></div>
                                    <div>Индонезия <input type="checkbox"></div>
                                </div>
                            </div>
                            <div class= "col-md-6" style="text-align: left;">
                                <div>
                                    <button type="button" class="btn btn-success">Добавить штат...</button>
                                    <button type="button" class="btn btn-success">Добавить регион...</button>
                                    <button type="button" class="btn btn-danger"> Очистить</button>
                                </div>
                                </br>
                                <div>
                                    <div style="text-align: center">Штаты</div>
                                    <div>Пусто</div>
                                </br>
                            </div>
                        </div>
            </div> 

            <div class="col-md-12">
            </br>
            </br>
                <p style="text-align: center;">Почтовые индексы</p>
                </br>
                <div class="col-md-5"><input type="text" style="width: 100%;"></div>
                <div class="col-md-7"> Вводите по одному индексу в строке.</br>Используйте'?' и '*' в качестве универсальных заменителей.</div>       
            </div>    
            </div>     
        </div>
    </div>
@stop

