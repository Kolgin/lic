@extends('layout')
@section('content')
    <div class="page-header clearfix">
        <div class="row">
            <div class="col-md-12">
            	<div>
					<h4><a href="#"> Новый способ доставки </a></h4>
					<input type="submit" value="Способ доставки"> <input type="submit" value="Сортировать" disabled> <a href="#">	Компактный вид</a> | <a href="#">Расширенный вид</a>
					</br>
					</br>
				</div>
                <table style="width: 100%" class="table table-hover dt-responsive nowrap">
                	<thead>
                  <tr>
                    <th>Название</th>
                    <th></th>
                    <th>Способ</th>
                    <th>Регион</th>
                    <th>Время доставки</th>
                    <th>Статус</th>
                    
                  </tr>
                	</thead>
                	<thead>
                  <tr>
                    <td>
                      <p>Фильтр:</p>
                    </td>
                    <td><input type="text"></td>
                    <td>
                    	<select name="" id=""><option value="" selected>Все способы </option></select>
                    </td>
                    <td>
                    	<select name="" id=""><option value="" selected>Все регионы </option></select>
                    </td>
                    <td></td>
                    <td>
                    	<select name="" id=""><option value="" selected>Все статусы </option></select>
                    </td>
                  </tr>
                	</thead>
                	<tbody>
                	<tr>
                    
                    <td colspan="2"><a href="#">Мы рады что вы наш клиент</a></td>
                    <td>
                    	<a href="#">Ставка</a><span>(0.00р.)</span>
                    </td>
                    <td>
                    	<a href="#"><a href="#">Russian Federation</a></a>
                    </td>
                    <td> <a href="#">7 раб. дн.</a></td>
                    <td>
                    	<span>Включено</span> <a href="#">Отключить</a>
                    </td>
                  </tr>
                	</tbody>
              	</table>
              	</br>
              	</br>
              	<div>
              		<h2>Адресс отправителя</h2> <span>(Этот адресс используется для расчёта стоимости доставки)</span> </br>
              		<input type="checkbox"> <span>Использовать <a href="#">адрес компании как адрес отправителя</a></span>
              	</div>
              	<div class="col-md-8">
              		<table width="100%" ">
              			<tr>
              				<th><label for="adr_v">Полное имя</label></th>
              				<th><input type="text" id="adr_v"></th>
              			</tr>
              			<tr>
              				<th><label for="adr_v1">Адресс. строка 1</label> </th>
              				<th><input type="text" id="adr_v2" placeholder='район'></th>
              			</tr>
              			<tr>
              				<th><label for="adr_v2">Адресс. строка 2</label></th>
              				<th><input type="text" id="adr_v2" placeholder='д.45'></th>
              			</tr>
              			<tr>
              				<th><label for="adr_v3">Город</label></th>
              				<th><input type="text" id="adr_v3" placeholder="Москва"></th>
              			</tr>
              			<tr>
              				<th><label for="adr_v4">Республика/Область</label></th>
              				<th><select name="" id="adr_v6"><option value="" selected >Московская обл.</option></select></th>
              			</tr>
              			<tr>
              				<th><label for="adr_v5">Почтовый индекс</label></th>
              				<th><input type="text"  id="adr_v5"  placeholder="359952"></th>
              			</tr>
              			<tr>
              				<th><label for="adr_v6">Страна </label></th>
              				<th><select name="" id="adr_v6"><option value="" selected >Россия</option></select></th>
              			</tr>
              			<tr>
              				<th><label for="adr_v7">Телефона</label></th>
              				<th><input type="text"  id="adr_v7" placeholder="+789456123"></th>
              			</tr>
              		</table>
              		<button type="button" class="btn btn-success">Сохранить</button>
            	</div>
            	<br>
            	<div class="col-md-12">
            	<h2> Оплата </h2>
            	<a href="#">Способ оплаты </a><span>PayPal Express Checkout</span> <button type="button" class="btn btn-success">Сохранить</button>
            	<p>Страна магазина: <b>Россия</b></p>
            	</div>
            	 <table id="customer-list" style="width: 100%" class="table table-hover dt-responsive nowrap">
                	<thead>
                  <tr>
					<th></th>
                    <th >Способ оплаты</th>
                    <th>Платежная система</th>
                    <th> </th>
                    <th> </th>
                    
                    
                  </tr>
                	</thead>
                	
                	<tbody>
                	<tr>              
                    	<td><p>Credit card</p></td>
                    	<td><a href="#">[ инструкция для покупателя ]</a> </td>
                    	<td><a href="#">[ Выбрать платежную систему ]</a></td>
                    	<td><span>Отключено</span> <a href="#">Включить</a></td>
                  	</tr>
                  	<tr>              
                    	<td><p>Echeck</p></td>
                    	<td><a href="#">[ инструкция для покупателя ]</a> </td>
                    	<td><a href="#">[ Выбрать платежную систему ]</a></td>
                    	<td><span>Отключено</span> <a href="#">Включить</a></td>
                  	</tr>
                  	<tr>              
                    	<td><p>PayPal</p></td>
                    	<td><a href="#">[ инструкция для покупателя ]</a> </td>
                    	<td><span>Платежичерез веб сатй Standart</span> <a href="#">[ Изменить ]</a> <p><a href="#">[ Настройки ]</a></p></td>
                    	<td><span>Отключено</span> <a href="#">Включить</a></td>
                  	</tr>
                  	<tr>              
                    	<td><p>Check</p></td>
                    	<td><a href="#">[ инструкция для покупателя ]</a> </td>
                    	<td><input type="checkbox" disabled ><a href="#">[ Изменить]</a></td>
                    	<td><span>Отключено</span> <a href="#">Включить</a></td>
                  	</tr>
                	</tbody>
              	</table>
        </div>
    </div>
    
@stop