@extends('layout')
@section('content')
        <div class="page-header clearfix">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="mt-0 mb-5">Welcome to Umega</h4>
                    <p class="text-muted mb-0">Responsive Web App Kit</p>
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
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>With icon</label>
                    <div class="input-group">
                      <input id="with-icon-picker" type="text" value="01/01/2015 - 02/15/2015" class="form-control"><span class="input-group-addon"><span class="ti-calendar"></span></span>
                    </div>
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label>Predefined ranges</label>
                    <div class="btn-toolbar">
                      <button id="predefined-ranges-picker" type="button" class="btn btn-raised btn-black"><i class="ti-calendar"> </i><span></span></button>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <p>кол-во заказов - 2</p>
                <p>кол-во новых клиентов - 3</p>
                <p>средний чек - 4</p>
                <p>кол-во смс сообщений - 22</p>
                <p>кол-во писем - 33</p>
                <p>среднее кол-во заказов на одного менеджера - 12</p>
                <p>кол-во товаров добавленных - 32</p>
                <p>кол-во просмотров - 21</p>
                <p>самые популярные просматриваемые товары 10шт </p>
                <p>кол-во добавленных товар в избранное - 32</p>
                <p>кол-во брошенных корзин - 2132</p>
                <p>кол-во новых отзывов -  23</p>
                <p>показать менеджеров, кому не выдали зарплату </p>
                </div>
                <div class="col-md-6">
                    <p>показать обороты производителей-продавцов </p> 
                    <p>кол-во новых производителей 12 </p>
                    <p>кол-во новых статей 11 </p>
                    <p>кол-во новых новостей  32</p>
                    <p>кол-во возвратов   1</p>
                    <p>кол-во новых партнеров 222 </p>
                    <p>кол-во заказов по партнеркам 321 </p>
                    <p>общий план магазина по продажам за месяц - и в % выполнение  - 100%</p>
                </div>
            </div>
        </div>
@endsection
@section('script')
    <script type="text/javascript" src="/js/page-content/pickers/date-range-picker.js"></script>
@stop