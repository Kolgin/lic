@extends('layout')
@section('content')
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
                    <h1>Уведомления</h1>
                    <img src="" alt="image">
                    <p>Уведомления автоматически отсылаются вам и вашим покупателям. Выберите шаблон уведомления ниже, чтобы подстроить его внешний вид под свой фирменный стиль.</p>
                </div>
                    <div class="col-md-12"><h3>Уведомления для покупателя</h3></div>
                    <div >
                        <div class="col-md-9">
                            <h4>Заказ принят</h4>
                            <p>Отправляется покупателю после размещения заказа, чтобы подтвердить его получение.Содержит информацию о купленных товарах, доставке и оплате</p>
                        </div>
                        <div class="col-md-3">
                            <select><option value="" selected>Редактировать</option></select>
                            <div class="switch">
                              <input id="exampleSwitch" type="checkbox" value="option1">
                              <label for="exampleSwitch"></label>
                              <span>ВКЛ/ВЫКЛ</span>
                            </div>

                        </div>
                    </div>
                    <div >
                        <div class="col-md-9">
                            <h4>Изменен статус заказа</h4>
                            <p>Отправляется покупателю после присвоения заказу нового статуса для отслеживания хода выполнения заказа.</p>
                        </div>
                        <div class="col-md-3">
                            <select><option value="" selected>Редактировать</option></select>
                            <div class="switch">
                              <input id="exampleSwitch2" type="checkbox" value="option1">
                              <label for="exampleSwitch2"></label>
                              <span>ВКЛ/ВЫКЛ</span>
                            </div>

                        </div>
                    </div>
                    <div >
                        <div class="col-md-9">
                            <h4>Заказ отправлен</h4>
                            <p>Отправляется покупателю при изменении статуса заказа на "Отправлен". Если посылке присвоен номер для отслеживания, он будет указан в этом уведомлении.</p>
                        </div>
                        <div class="col-md-3">
                            <select><option value="" selected>Редактировать</option></select>
                            <div class="switch">
                              <input id="exampleSwitch3" type="checkbox" value="option1">
                              <label for="exampleSwitch3"></label>
                              <span>ВКЛ/ВЫКЛ</span>
                            </div>
                        </div>
                    </div>
                    <div >
                        <div class="col-md-9">
                            <h4>Успешная регистрация </h4>
                            <p>Отправляется покупателю после регистрации в магазине.</p>
                        </div>
                        <div class="col-md-3">
                            <select><option value="" selected>Редактировать</option></select>
                            <div class="switch">
                              <input id="exampleSwitch4" type="checkbox" value="option1">
                              <label for="exampleSwitch4"></label>
                              <span>ВКЛ/ВЫКЛ</span>
                            </div>
                        </div>
                    </div>
                    <div >
                        <div class="col-md-9">
                            <h4>Изминение пароля</h4>
                            <p>Отправляется покупателю после запроса на восстановление или изменение пароля.</p>
                        </div>
                        <div class="col-md-3">
                            <select><option value="" selected>Редактировать</option></select>
                            <div class="switch">
                              <input id="exampleSwitch5" type="checkbox" value="option1">
                              <label for="exampleSwitch5"></label>
                              <span>ВКЛ/ВЫКЛ</span>
                            </div>
                        </div>
                    </div>
                    <div >
                        <div class="col-md-9">
                            <h4>Доступ к купленным файлам</h4>
                            <p>Высылается покупателю при изменении статуса заказа на "Оплачен" и содержит ссылки на скачку купленных электронных товаров.</p>
                        </div>
                        <div class="col-md-3">
                            <select><option value="" selected>Редактировать</option></select>
                            <div class="switch">
                              <input id="exampleSwitch6" type="checkbox" value="option1">
                              <label for="exampleSwitch6"></label>
                              <span>ВКЛ/ВЫКЛ</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12"><h3>Уведомления для администратора</h3></div>
                    <div >
                        <div class="col-md-9">
                            <h4>Новый заказ</h4>
                            <p>Отправляется администратору при поступлении нового заказа. Уведомление содержит информацию о купленных товараъ, доставке и оплате.</p>
                        </div>
                        <div class="col-md-3">
                            <select><option value="" selected>Редактировать</option></select>
                            <div class="switch">
                              <input id="exampleSwitch7" type="checkbox" value="option1">
                              <label for="exampleSwitch7"></label>
                              <span>ВКЛ/ВЫКЛ</span>
                            </div>
                        </div>
                    </div>
                    <div >
                        <div class="col-md-9">
                            <h4>Заканчивается товар</h4>
                            <p>Отправляется администратору когда какой-либо товар на складе скоро закончится.</p>
                        </div>
                        <div class="col-md-3">
                            <select><option value="" selected>Редактировать</option></select>
                            <div class="switch">
                              <input id="exampleSwitch8" type="checkbox" value="option1">
                              <label for="exampleSwitch8"></label>
                              <span>ВКЛ/ВЫКЛ</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12"><h3>Настройка отправки уведомлений</h3></div>
                    <div class="col-md-12">
                     <p><b>Почтовые адреса</b></p>
                     <p>От <a href="#"> Ювелирный дом "Апанде &lt;apande@yadex.ru&gt; покупателю </a></p>
                     <p>Уведомления для покупателей будут отсылатся с указанного адреса.</p>
                     <p>для <a href="">apande@yadex.ru</a></p>
                     <p>Уведомления для администратора будут доставлятся на указанные адресса.</p>
                     <button type="button" class="btn btn-default">Изменить</button>
                     </br>
                      </br>
                      <div>
                            <div class="col-md-2"><input type="submit" value='Ювелирный дом "Апанде"'></div>  
                            <div class="col-md-10">  
                                <p>Загрузить логотип</p>
                                <p>Этот логотип покупатели увидят в уведомлениях от вашего магазина.</p>
                             </div>
                           
                     </div>
                     </div>

            </div>

        </div>
    </div>
    
@stop