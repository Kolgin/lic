@extends('layout')
@section('content')
    <div class="page-header clearfix">
        <div class="row">
            <div class="col-md-12">
               <div class="col-md-6">
                   <p style="text-align: center;">Напечатать образец счета</p>
                   <img src="http://ulpressa.ru/wp-content/uploads/old/Obrazets-scheta1.jpg" alt="obrazec" style="width: 100%;"> 
               </div>
               <div class="col-md-6" style="text-align: justify;">
                   <p >Счет - это форма отчётности между покупателем и продавцом. Обычно счета включают общую информацию о размещённом заказе: стоимость услуг и товаров, их количество, дату размещения заказа и информацию о налогах и доставке. Добавте логотип и укажите налоговый или регистрационный номер своей организации для персонализации счета.</p>
                   <input type="submit" value="Изменить логотип счета"> <span>или</span> <a href="#">Убрать логотип</a>
                   <p>рекомендуемый размер 240 х 100 px</p>
                    </br>
                    </br>
                    </br>
                   <button type="button" class="btn btn-success">Укажите налоговый номер</button>
                   </br>
                   </br>
                   </br>
                   </br>
                   <div>
                     <span>ИНН</span> <input type="text">
                     <p>Укажите налоговый или регистрационный номер своей организации, который будет отображаться в бланке счетов. Наличие этой информации в счете может быть обязательным для соответствия законодательству вашей страны.</p>
                   </div>
                   <button type="button" class="btn btn-success">Сохранить изминиения</button>
               </div>
            </div>
        </div>
    </div>
@stop