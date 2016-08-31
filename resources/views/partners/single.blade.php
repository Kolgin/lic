@extends('layout')
@section('content')
    <div class="page-header clearfix">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mt-0 mb-5">Профиль партнера</h4>
                <ol class="breadcrumb mb-0">
                    <li><a href="#">Апанде</a></li>
                    <li><a href="#">Строничка пользователя</a></li>
                    <li class="active">Профиль</li>
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
    {{--<div class="page-content container-fluid p-0">--}}
    {{--<div class="row row-0">--}}
    {{--<div class="col-lg-12">--}}


    {{--<div style="height: 260px; padding-top: 130px; background-image: url(/images/backgrounds/profile.png)" class="bg-overlay pl-30 pr-30 clearfix text-white">--}}
    {{--<div class="pull-left media">--}}
    {{--<div class="media-left"><a href="javascript:void(0)" style="display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt="" class="media-object img-circle"></a></div>--}}
    {{--<div style="width: auto" class="media-body media-middle">--}}
    {{--<h2 class="media-heading">Steven Cook</h2>--}}
    {{--<div class="fs-20">Software Developer</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="pull-right text-center">--}}
    {{--<ul class="list-inline">--}}
    {{--<li>--}}
    {{--<div class="fs-24 fw-500">208</div>--}}
    {{--<p>Followers</p>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="fs-24 fw-500">560</div>--}}
    {{--<p>Likes</p>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="fs-24 fw-500">95</div>--}}
    {{--<p>Photos</p>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--<button type="button" class="btn btn-default">Удалить</button>--}}
    {{--<button type="button" class="btn btn-default">Изменить</button>--}}
    {{--<button type="button" class="btn btn-default">Подтвердить</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    <div class="row ml-10 mr-10 pt-10">
        <div class="col-md-3">
            <div class="widget clear">
                <div style="width: auto" class="media-body media-middle">
                    <div class="media-left"><a href="javascript:void(0)" style="display: inline-block;  padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="200" alt=""></a></div>
                    <h2 class="media-heading">Steven Cook</h2>
                    <div class="fs-20">Разработчик программного обеспечения</div>
                    <button type="button" class="btn btn-danger" style="width: 150px">Удалить</button></br></br>
                    <button type="button" class="btn btn-success" style="width: 150px">Подтвердить</button></br></br>
                    <a href="/admin/partners/1/edit"><button type="button" class="btn btn-default" style="width: 150px">Редактировать</button></a>
                </div>

                {{--<div class="widget-body">--}}
                {{--<ul class="media-list mb-0">--}}
                {{--<li class="media">--}}
                {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                {{--<div class="media-body">--}}
                {{--<p>Software Developer</p>--}}
                {{--</div>--}}
                {{--</li>--}}
                {{--<li class="media">--}}
                {{--<div class="media-left"><i class="ti-gift text-info"></i></div>--}}
                {{--<div class="media-body">--}}
                {{--<p>20 October 1990</p>--}}
                {{--</div>--}}
                {{--</li>--}}
                {{--<li class="media">--}}
                {{--<div class="media-left"><i class="ti-email text-info"></i></div>--}}
                {{--<div class="media-body">--}}
                {{--<p>lethemes@gmail.com</p>--}}
                {{--</div>--}}
                {{--</li>--}}
                {{--<li class="media">--}}
                {{--<div class="media-left"><i class="ti-home text-info"></i></div>--}}
                {{--<div class="media-body">--}}
                {{--<p>4270 Cottage Hill Road</p>--}}
                {{--</div>--}}
                {{--</li>--}}
                {{--<li class="media">--}}
                {{--<div class="media-left"><i class="ti-mobile text-info"></i></div>--}}
                {{--<div class="media-body">--}}
                {{--<p>(251) 300-2770</p>--}}
                {{--</div>--}}
                {{--</li>--}}
                {{--<li class="media">--}}
                {{--<div class="media-left"><i class="ti-world text-info"></i></div>--}}
                {{--<div class="media-body">--}}
                {{--<p>www.lethemes.net</p>--}}
                {{--</div>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</div>--}}
            </div>
            {{--<div class="widget clear">--}}
            {{--<div class="widget-heading">--}}
            {{--<h3 class="widget-title">Biography</h3>--}}
            {{--</div>--}}
            {{--<div class="widget-body">--}}
            {{--<p>I am an Java, Android and Python software developer and teacher with 5 years of development experience! Whats more I reveal all my knowledge and secrets in my courses!</p>--}}
            {{--<p>I've been using Java since all the way back in 2006 !</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="widget clear">--}}
            {{--<div class="widget-heading">--}}
            {{--<h3 class="widget-title">Skills</h3>--}}
            {{--</div>--}}
            {{--<div class="widget-body">--}}
            {{--<ul class="list-unstyled mb-0">--}}
            {{--<li>--}}
            {{--<div class="block clearfix mb-5"><span class="pull-left fs-12">HTML5</span><span class="pull-right label label-outline label-primary">95%</span></div>--}}
            {{--<div class="progress progress-xs">--}}
            {{--<div role="progressbar" data-transitiongoal="85" class="progress-bar"></div>--}}
            {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<div class="block clearfix mb-5"><span class="pull-left fs-12">CSS</span><span class="pull-right label label-outline label-success">98%</span></div>--}}
            {{--<div class="progress progress-xs">--}}
            {{--<div role="progressbar" data-transitiongoal="98" class="progress-bar progress-bar-success"></div>--}}
            {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<div class="block clearfix mb-5"><span class="pull-left fs-12">Javascript</span><span class="pull-right label label-outline label-purple">85%</span></div>--}}
            {{--<div class="progress progress-xs">--}}
            {{--<div role="progressbar" data-transitiongoal="85" class="progress-bar progress-bar-purple"></div>--}}
            {{--</div>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>
        <div class="col-md-6">
            <div class="widget clear">
                <div class="widget-heading">
                    <h3 class="widget-title">Обо мне</h3>
                </div>
                <div class="widget-body">
                    <ul class="media-list mb-0">
                        <li class="media">
                            {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                            <div class="media-body">
                                <p>ФИО: Стивен Кок Викторович </p>

                            </div>

                        </li>
                        <li class="media">
                            {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                            <div class="media-body">
                                <p>Моб. телефон: +30955447172</p>

                            </div>

                        </li>

                        <li class="media">
                            {{--<div class="media-left"><i class="ti-email text-info"></i></div>--}}
                            <div class="media-body">
                                <p>Email: lethemes@gmail.com</p>
                            </div>
                        </li>
                        <li class="media">
                            {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                            <div class="media-body">
                                <p>Реферальный код данного партнера: 8757865875876</p>

                            </div>

                        </li>
                        <li class="media">
                            {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                            <div class="media-body">
                                <p>Статистика по партнерам:
                                    <div class="media-body">

                                <p>Кол-во переходов: 5</p>
                                <p>Кол-во продаж: 34</p>
                                <p>Кол-во продаж по сумме 50: 4</p>
                                <p>Кол-во заработанных денег: 34543</p>
                                <p>Кол-во денег которые должны отдать: 543</p>
                            </div>
                                </p>

                            </div>


                        {{--<li class="media">--}}
                        {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                        {{--<div class="media-body">--}}
                        {{--<p>БИК: 987368761289</p>--}}

                        {{--</div>--}}

                        {{--</li>--}}
                        {{--<li class="media">--}}
                        {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                        {{--<div class="media-body">--}}
                        {{--<p>P/C: 467548489897</p>--}}

                        {{--</div>--}}

                        {{--</li>--}}
                        {{--<li class="media">--}}
                        {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                        {{--<div class="media-body">--}}
                        {{--<p>Основная специализация: Разроботчик программного обеспечения</p>--}}

                        {{--</div>--}}

                        {{--</li>--}}
                        {{--<li class="media">--}}
                        {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                        {{--<div class="media-body">--}}
                        {{--<p>Кол-во товаров: 400</p>--}}

                        {{--</div>--}}

                        {{--</li>--}}
                        {{--<li class="media">--}}
                        {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                        {{--<div class="media-body">--}}
                        {{--<p>Кол-во товаров на модерации: 200</p>--}}

                        {{--</div>--}}

                        {{--</li>--}}
                        {{--<li class="media">--}}
                        {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                        {{--<div class="media-body">--}}
                        {{--<p><a href="url('/admin/producrs/1')">Кол-во заказов(56 - оплаченных, сумма - 2000000 руб, 40 - неоплаченных, сумма - 250000)</a></p>--}}

                        {{--</div>--}}

                        {{--</li>--}}
                        {{--<li class="media">--}}
                        {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                        {{--<div class="media-body">--}}
                        {{--<p>Кол-во посмотров товаров: 200</p>--}}

                        {{--</div>--}}

                        {{--</li>--}}
                        {{--<li class="media">--}}
                        {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                        {{--<div class="media-body">--}}
                        {{--<p>Средний рейтинг по всем товарам:--}}
                        {{--<i class="fa fa-star-o"></i>--}}
                        {{--<i class="fa fa-star-o"></i>--}}
                        {{--<i class="fa fa-star-o"></i>--}}
                        {{--</p>--}}
                        {{--<div class="col-md-4 col-sm-6"><i class="fa fa-star"></i> star</div>--}}
                        {{--<div class="col-md-4 col-sm-6"><i class="fa fa-star"></i> star</div>--}}
                        {{--<div class="col-md-4 col-sm-6"><i class="fa fa-star-half"></i> star-half</div>--}}
                        {{--<div class="col-md-4 col-sm-6"><i class="fa fa-star-half-empty"></i> star-half-empty <span class="text-muted">(alias)</span></div>--}}
                        {{--<div class="col-md-4 col-sm-6"><i class="fa fa-star-half-full"></i> star-half-full <span class="text-muted">(alias)</span></div>--}}
                        {{--<div class="col-md-4 col-sm-6"><i class="fa fa-star-half-o"></i> star-half-o</div>--}}
                        {{--<div class="col-md-4 col-sm-6"><i class="fa fa-star-o"></i> </div>--}}
                        {{--<div class="col-md-4 col-sm-6"><i class="fa fa-star-o"></i> </div>--}}
                        {{--<div class="col-md-4 col-sm-6"><i class="fa fa-star-o"></i> </div>--}}
                        {{--</div>--}}

                        {{--</li>--}}

                    </ul>
                </div>
            </div>




            {{--<div class="widget clear">--}}
            {{--<div class="widget-heading">--}}
            {{--<h3 class="widget-title">Блок с текстом о себе</h3>--}}
            {{--</div>--}}
            {{--<div class="widget-body">--}}
            {{--<p>Я Java, Android and Python -разроботчик программного обеспечения и учитель с 5 - летним опытом! Я выкладываю все мои знания и секреты в моих курсах!</p>--}}
            {{--<p>Я начал изучать Java с 2009 года !</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="widget clear">--}}
            {{--<div class="widget-heading">--}}
            {{--<h3 class="widget-title">Сотрудники</h3>--}}
            {{--</div>--}}

            {{--<div class="widget-body">--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/03.jpg" width="100" alt=""></a></div>--}}
            {{--<div style="display: inline-block;">--}}
            {{--<p> Иванова Катерина Викторовна</p>--}}
            {{--<p> Должность: шеф</p>--}}
            {{--<p> Информация</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="widget-body">--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/04.jpg" width="100" alt=""></a></div>--}}
            {{--<div style="display: inline-block;">--}}
            {{--<p> Иванов Степан Викторович</p>--}}
            {{--<p> Должность: шеф</p>--}}
            {{--<p> Информация</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="widget-body">--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/05.jpg" width="100" alt=""></a></div>--}}
            {{--<div style="display: inline-block;">--}}
            {{--<p> Степанова Лариса Викторовна</p>--}}
            {{--<p> Должность: Менеждер</p>--}}
            {{--<p> Информация</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="widget clear">--}}
            {{--<div class="widget-heading">--}}
            {{--<h3 class="widget-title">Фото с производства <h6>(По клику открывется фото в папапе с возможностью листать и выводится текст-описание)</h6></h3>--}}
            {{--</div>--}}
            {{--<div class="widget-body">--}}

            {{--<div style="display: inline-block;">--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}


            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="widget clear">--}}
            {{--<div class="widget-heading">--}}
            {{--<h3 class="widget-title">Изделия ожидают модерацию <h6>(Открываем в попапе (быстрый просмотр) или на новой странице. Можно: редактировать одобрить или откланить (+ примичания)</h6></h3>--}}
            {{--</div>--}}
            {{--<div class="widget-body">--}}

            {{--<div style="display: inline-block;">--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}
            {{--<button type="button" class="btn btn-danger">Отклонить</button>--}}
            {{--<button type="button" class="btn btn-default">Редактировать</button>--}}
            {{--<button type="button" class="btn btn-success">Одобрить</button>--}}

            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="widget clear">--}}
            {{--<div class="widget-heading">--}}
            {{--<h3 class="widget-title">Все изделия <h6>(Открываем в попапе (быстрый просмотр) или на новой странице. Можно: редактировать одобрить или откланить (+ примичания))</h6></h3>--}}
            {{--</div>--}}
            {{--<div class="widget-body">--}}

            {{--<div style="display: inline-block;">--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}
            {{--<div class="media-left" style="display: inline-block;"><a href="javascript:void(0)" style=" display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/images/users/06.jpg" width="100" alt=""></a></div>--}}

            {{--<button type="button" class="btn btn-danger">Удалить</button>--}}
            {{--<button type="button" class="btn btn-default">Редактировать</button>--}}


            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="widget clear">--}}
            {{--<div class="widget-heading">--}}
            {{--<h3 class="widget-title">Skills</h3>--}}
            {{--</div>--}}
            {{--<div class="widget-body">--}}
            {{--<ul class="list-unstyled mb-0">--}}
            {{--<li>--}}
            {{--<div class="block clearfix mb-5"><span class="pull-left fs-12">HTML5</span><span class="pull-right label label-outline label-primary">95%</span></div>--}}
            {{--<div class="progress progress-xs">--}}
            {{--<div role="progressbar" data-transitiongoal="85" class="progress-bar"></div>--}}
            {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<div class="block clearfix mb-5"><span class="pull-left fs-12">CSS</span><span class="pull-right label label-outline label-success">98%</span></div>--}}
            {{--<div class="progress progress-xs">--}}
            {{--<div role="progressbar" data-transitiongoal="98" class="progress-bar progress-bar-success"></div>--}}
            {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<div class="block clearfix mb-5"><span class="pull-left fs-12">Javascript</span><span class="pull-right label label-outline label-purple">85%</span></div>--}}
            {{--<div class="progress progress-xs">--}}
            {{--<div role="progressbar" data-transitiongoal="85" class="progress-bar progress-bar-purple"></div>--}}
            {{--</div>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="widget clear">--}}
            {{--<div class="widget-heading">--}}
            {{--<div class="media">--}}
            {{--<div class="media-left"><img src="/images/users/10.jpg" alt="" class="media-object mo-lg img-circle"></div>--}}
            {{--<div class="media-body media-middle">--}}
            {{--<p class="mb-0"><span class="fw-500">Philip Fernandez</span> uploaded a new photo</p>--}}
            {{--<time datetime="2015-12-10T20:50:48+07:00" class="text-muted fs-12">20 Jan 2016 <i class="ti-time"></i> 12:03 PM</time>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="widget-body">--}}
            {{--<p>--}}
            {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod--}}
            {{--tempor incididunt ut labore et dolore magna aliqua.--}}
            {{--</p>--}}
            {{--<div class="thumbnail"><img src="/images/backgrounds/02.jpg" alt="">--}}
            {{--<div class="text-right caption">--}}
            {{--<ul class="list-inline mb-0">--}}
            {{--<li><i class="ti-comment text-info"></i> 239</li>--}}
            {{--<li><i class="ti-heart text-danger"></i> 4325</li>--}}
            {{--<li><i class="ti-share text-success"></i> 3654</li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<ul class="media-list">--}}
            {{--<li class="media">--}}
            {{--<div class="media-left avatar"><img alt="" src="/images/users/01.jpg" class="media-object img-circle"><span class="status bg-success"></span></div>--}}
            {{--<div class="media-body">--}}
            {{--<h5 class="media-heading inline-block">Philip Fernandez</h5>--}}
            {{--<time datetime="2015-12-10T20:50:48+07:00" class="text-muted fs-12">20 Jan 2016 <i class="ti-time"></i> 12:12 PM</time>--}}
            {{--<p>Mission accomplished. It's revolutionary.</p>--}}
            {{--<div class="media">--}}
            {{--<div class="media-left avatar"><img alt="" src="/images/users/12.jpg" class="media-object img-circle"><span class="status bg-success"></span></div>--}}
            {{--<div class="media-body">--}}
            {{--<h5 class="media-heading inline-block">Carolyn Hernandez</h5>--}}
            {{--<time datetime="2015-12-10T20:50:48+07:00" class="text-muted fs-12">20 Jan 2016 <i class="ti-time"></i> 12:14 PM</time>--}}
            {{--<p>Vastly thought out! Found myself staring at it for minutes.</p>--}}
            {{--<div class="media">--}}
            {{--<div class="media-left avatar"><img alt="" src="/images/users/11.jpg" class="media-object img-circle"><span class="status bg-success"></span></div>--}}
            {{--<div class="media-body">--}}
            {{--<h5 class="media-heading inline-block">Johnny Shaw</h5>--}}
            {{--<time datetime="2015-12-10T20:50:48+07:00" class="text-muted fs-12">20 Jan 2016 <i class="ti-time"></i> 12:15 PM</time>--}}
            {{--<p>Let me take a nap... great colour palette, anyway.</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="media">--}}
            {{--<div class="media-left avatar"><img alt="" src="/images/users/14.jpg" class="media-object img-circle"><span class="status bg-success"></span></div>--}}
            {{--<div class="media-body">--}}
            {{--<h5 class="media-heading inline-block">Jean Boyd</h5>--}}
            {{--<time datetime="2015-12-10T20:50:48+07:00" class="text-muted fs-12">20 Jan 2016 <i class="ti-time"></i> 12:14 PM</time>--}}
            {{--<p>--}}
            {{--This camera angle has navigated right into my heart.--}}
            {{--My 32 year old parent rates this icons very cool :)--}}
            {{--</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="widget clear">--}}
            {{--<div class="widget-heading">--}}
            {{--<div class="media">--}}
            {{--<div class="media-left"><img src="/images/users/12.jpg" alt="" class="media-object mo-lg img-circle"></div>--}}
            {{--<div class="media-body media-middle">--}}
            {{--<p class="mb-0"><span class="fw-500">Pamela Day</span> at <span class="fw-500">Los Angeles</span></p>--}}
            {{--<time datetime="2015-12-10T20:50:48+07:00" class="text-muted fs-12">20 Jan 2016 <i class="ti-time"></i> 9:29 PM</time>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="widget-body">--}}
            {{--<p>Looks fun and good :-)</p>--}}
            {{--<div class="thumbnail">--}}
            {{--<div id="simpleMap" style="height:350px;"></div>--}}
            {{--<div class="text-right caption">--}}
            {{--<ul class="list-inline mb-0">--}}
            {{--<li><i class="ti-comment text-info"></i> 43</li>--}}
            {{--<li><i class="ti-heart text-danger"></i> 437</li>--}}
            {{--<li><i class="ti-share text-success"></i> 651</li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<ul class="media-list">--}}
            {{--<li class="media">--}}
            {{--<div class="media-left avatar"><img alt="" src="/images/users/01.jpg" class="media-object img-circle"><span class="status bg-success"></span></div>--}}
            {{--<div class="media-body">--}}
            {{--<h5 class="media-heading inline-block">Philip Fernandez</h5>--}}
            {{--<time datetime="2015-12-10T20:50:48+07:00" class="text-muted fs-12">20 Jan 2016 <i class="ti-time"></i> 12:12 PM</time>--}}
            {{--<p>Mission accomplished. It's revolutionary.</p>--}}
            {{--<div class="media">--}}
            {{--<div class="media-left avatar"><img alt="" src="/images/users/12.jpg" class="media-object img-circle"><span class="status bg-success"></span></div>--}}
            {{--<div class="media-body">--}}
            {{--<h5 class="media-heading inline-block">Carolyn Hernandez</h5>--}}
            {{--<time datetime="2015-12-10T20:50:48+07:00" class="text-muted fs-12">20 Jan 2016 <i class="ti-time"></i> 12:14 PM</time>--}}
            {{--<p>Vastly thought out! Found myself staring at it for minutes.</p>--}}
            {{--<div class="media">--}}
            {{--<div class="media-left avatar"><img alt="" src="/images/users/11.jpg" class="media-object img-circle"><span class="status bg-success"></span></div>--}}
            {{--<div class="media-body">--}}
            {{--<h5 class="media-heading inline-block">Johnny Shaw</h5>--}}
            {{--<time datetime="2015-12-10T20:50:48+07:00" class="text-muted fs-12">20 Jan 2016 <i class="ti-time"></i> 12:15 PM</time>--}}
            {{--<p>Let me take a nap... great colour palette, anyway.</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="media">--}}
            {{--<div class="media-left avatar"><img alt="" src="/images/users/14.jpg" class="media-object img-circle"><span class="status bg-success"></span></div>--}}
            {{--<div class="media-body">--}}
            {{--<h5 class="media-heading inline-block">Jean Boyd</h5>--}}
            {{--<time datetime="2015-12-10T20:50:48+07:00" class="text-muted fs-12">20 Jan 2016 <i class="ti-time"></i> 12:14 PM</time>--}}
            {{--<p>--}}
            {{--This camera angle has navigated right into my heart.--}}
            {{--My 32 year old parent rates this icons very cool :)--}}
            {{--</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>
        <div class="col-md-12">
            <div class="widget">
                <div class="widget-heading">
                    <h3 class="widget-title">Tabs Example</h3>
                </div>
                <div class="widget-body">
                    <form id="form-tabs" class="form-horizontal">
                        <h3>Список клиентов(5)</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-3" style="margin: 10px;">
                                    <div class="form-group">
                                        <label for="txtCustomerName">ФИО</label>
                                        <input id="txtCustomerName" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3" style="margin: 10px;">
                                    <div class="form-group">
                                        <label for="ddlCustomerGroup">Группа клиентов</label>
                                        <select id="ddlCustomerGroup" class="form-control">
                                            <option value="">Выберите</option>
                                            <option value="1">Группа 1</option>
                                            <option value="2">Группа 2</option>
                                            <option value="3">Группа 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3" style="margin: 10px;">
                                    <div class="form-group">
                                        <label for="txtCustomerName">моб. номер</label>
                                        <input id="txtCustomerName" type="text" class="form-control">
                                    </div>
                                </div>

                                {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                {{--<label for="ddlApproved">Approved</label>--}}
                                {{--<select id="ddlApproved" class="form-control">--}}
                                {{--<option value="">Choose</option>--}}
                                {{--<option value="1">Yes</option>--}}
                                {{--<option value="0">No</option>--}}
                                {{--</select>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            </div>
                            <div class="row">

                                <div class="col-md-3" style="margin: 10px;">
                                    <div class="form-group">
                                        <label for="date-added">Дата регистрации</label>
                                        <div class="input-group">
                                            <input id="date-added" type="text" class="form-control"><span class="input-group-addon"><span class="ti-calendar"></span></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3" style="margin: 10px;">
                                    <div class="form-group">
                                        <label for="txtCustomerName">кол-во заказов</label>
                                        <input id="txtCustomerName" type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-3" style="margin: 10px;">
                                    <div class="form-group">
                                        <label for="txtCustomerName">бонусы</label>
                                        <input id="txtCustomerName" type="text" class="form-control">
                                    </div>
                                </div>

                            </div>

                            <table id="customer-list" style="width: 100%" class="table table-hover dt-responsive nowrap">
                                <thead>
                                <tr>
                                    <th class="text-center">
                                        <div class="checkbox-custom">
                                            <input id="checkAll" type="checkbox" value="option1">
                                            <label for="checkAll" class="pl-0">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th>ФИО</th>
                                    <th>Группа покупателей</th>
                                    <th>моб. телефон</th>
                                    <th>Дата регистрации</th>
                                    <th>кол-во заказов</th>
                                    <th>Бонусы</th>
                                    <th>Чат</th>
                                    <th class="text-center">Action</th>
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
                                    <td><a href="/admin/makers/1">Larry Elliott</a></td>
                                    <td>2</td>
                                    <td>+380994545675</td>

                                    <td>07/2/2016</td>
                                    <td>12</td>
                                    <td>3</td>
                                    <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>



                                    <td class="text-center">
                                        <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                            <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                            <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
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



                                    <td><a href="{{ url('/admin/makers/2') }}">Harry Gardner</a></td>
                                    <td>3</td>
                                    <td>+380994545675</td>

                                    <td>07/2/2016</td>
                                    <td>12</td>
                                    <td>3</td>
                                    <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>
                                    <td class="text-center">
                                        <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                            <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                            <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
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
                                    <td><a href="/admin/makers/3">Lori Cox</a></td>
                                    <td>1</td>
                                    <td>+380955447172</td>

                                    <td>07/2/2016</td>
                                    <td>12</td>
                                    <td>3</td>
                                    <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>

                                    <td class="text-center">
                                        <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                            <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                            <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
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
                                    <td><a href="/admin/makers/4">James Medina</a></td>
                                    <td>1</td>
                                    <td>+380445544675</td>

                                    <td>07/2/2016</td>
                                    <td>12</td>
                                    <td>3</td>
                                    <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>

                                    <td class="text-center">
                                        <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                            <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                            <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
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
                                    <td><a href="/admin/makers/5">Lauren Perry</a></td>
                                    <td>3</td>
                                    <td>+380643465675</td>


                                    <td>07/2/2016</td>
                                    <td>12</td>
                                    <td>3</td>
                                    <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>
                                    <td class="text-center">
                                        <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                            <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                            <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
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
                                    <td><a href="/admin/makers/6">Aaron Holmes</a></td>
                                    <td>3</td>
                                    <td>+380656554545</td>

                                    <td>07/2/2016</td>
                                    <td>12</td>
                                    <td>3</td>
                                    <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>
                                    <td class="text-center">
                                        <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                            <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                            <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
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
                                    <td><a href="/admin/makers/7">Eric Santos</a></td>
                                    <td>2</td>
                                    <td>+380678834545</td>

                                    <td>07/2/2016</td>
                                    <td>12</td>
                                    <td>3</td>
                                    <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>

                                    <td class="text-center">
                                        <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                            <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                            <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
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
                                    <td><a href="/admin/makers/8">Benjamin Ray</a></td>
                                    <td>1</td>
                                    <td>+380678844444</td>

                                    <td>07/2/2016</td>
                                    <td>12</td>
                                    <td>3</td>
                                    <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>

                                    <td class="text-center">
                                        <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                            <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                            <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
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
                                    <td><a href="/admin/makers/9">Virginia Baker</a></td>
                                    <td>3</td>
                                    <td>+380678834545</td>

                                    <td>07/2/2016</td>
                                    <td>12</td>
                                    <td>3</td>
                                    <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>
                                    <td class="text-center">
                                        <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                            <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                            <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
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
                                    <td><a href="/admin/makers/10">Adam Vargas</a></td>
                                    <td>3</td>
                                    <td>+380504815335</td>

                                    <td>07/2/2016</td>
                                    <td>12</td>
                                    <td>3</td>
                                    <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>
                                    <td class="text-center">
                                        <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                            <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                            <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="checkbox-custom">
                                            <input id="product-11" type="checkbox" value="11">
                                            <label for="product-11" class="pl-0">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="/admin/makers/10">Dylan Chapman</a></td>
                                    <td>3</td>
                                    <td>+380678827506</td>

                                    <td>07/2/2016</td>
                                    <td>12</td>
                                    <td>3</td>
                                    <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>
                                    <td class="text-center">
                                        <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                            <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                            <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="checkbox-custom">
                                            <input id="product-12" type="checkbox" value="12">
                                            <label for="product-12" class="pl-0">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="/admin/makers/11">Mildred Henry</a></td>
                                    <td>3</td>
                                    <td>+380958833445</td>

                                    <td>07/2/2016</td>
                                    <td>12</td>
                                    <td>3</td>
                                    <td><div class="col-md-4 col-sm-6"><i class="fa fa-comment"></i></div></td>
                                    <td class="text-center">
                                        <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">

                                            <a><button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button></a>
                                            <a><button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button></a>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>


                            </table>

                            {{--<div class="row">--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<p>1) ФИО: Крудский Николай Иванович</p>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtFirstNameBillingTab" name="txtFirstNameBillingTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<p>Моб. телефона: +380955447656</p>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtLastNameBillingTab" name="txtLastNameBillingTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<p>2) ФИО: Крудская Лариса Николаевна</p>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtFirstNameBillingTab" name="txtFirstNameBillingTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<p>Моб. телефона: +38092345546</p>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtLastNameBillingTab" name="txtLastNameBillingTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<p>3) ФИО: Маршавский Игорь Николаевич</p>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtFirstNameBillingTab" name="txtFirstNameBillingTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<p>Моб. телефона: +38095534566</p>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtLastNameBillingTab" name="txtLastNameBillingTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<p>4) ФИО: Грей Иосиф Иванович</p>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtFirstNameBillingTab" name="txtFirstNameBillingTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<p>Моб. телефона? +38030102030</p>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtLastNameBillingTab" name="txtLastNameBillingTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<p>5) ФИО: Лазоренко Илона Ивановна</p>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtFirstNameBillingTab" name="txtFirstNameBillingTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<p>Моб. телефона? +3803565445656</p>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtLastNameBillingTab" name="txtLastNameBillingTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}


                            {{--<div class="row">--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="txtCompanyBillingTab" class="col-sm-3 col-md-4 control-label">Company</label>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtCompanyBillingTab" name="txtCompanyBillingTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="txtEmailAddressBillingTab" class="col-sm-3 col-md-4 control-label">Email Address</label>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtEmailAddressBillingTab" name="txtEmailAddressBillingTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="txtAddress1BillingTab" class="col-sm-3 col-md-4 control-label">Address 1</label>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<textarea id="txtAddress1BillingTab" name="txtAddress1BillingTab" class="form-control"></textarea>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="txtAddress2BillingTab" class="col-sm-3 col-md-4 control-label">Address 2</label>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<textarea id="txtAddress2BillingTab" name="txtAddress2BillingTab" class="form-control"></textarea>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="txtCityBillingTab" class="col-sm-3 col-md-4 control-label">City</label>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtCityBillingTab" name="txtCityBillingTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="txtStateProvinceBillingTab" class="col-sm-3 col-md-4 control-label">State/Province</label>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtStateProvinceBillingTab" name="txtStateProvinceBillingTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="txtZipPostalBillingTab" class="col-sm-3 col-md-4 control-label">Zip/Postal Code</label>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtZipPostalBillingTab" name="txtZipPostalBillingTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="ddlCountryBillingTab" class="col-sm-3 col-md-4 control-label">Country</label>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<select id="ddlCountryBillingTab" name="ddlCountryBillingTab" class="form-control">--}}
                            {{--<option value="">--Please Select--</option>--}}
                            {{--<option value="AF">Afghanistan</option>--}}
                            {{--<option value="AX">Åland Islands</option>--}}
                            {{--<option value="AL">Albania</option>--}}
                            {{--<option value="DZ">Algeria</option>--}}
                            {{--<option value="AS">American Samoa</option>--}}
                            {{--<option value="AD">Andorra</option>--}}
                            {{--<option value="AO">Angola</option>--}}
                            {{--<option value="AI">Anguilla</option>--}}
                            {{--<option value="AQ">Antarctica</option>--}}
                            {{--<option value="AG">Antigua and Barbuda</option>--}}
                            {{--<option value="AR">Argentina</option>--}}
                            {{--<option value="AM">Armenia</option>--}}
                            {{--<option value="AW">Aruba</option>--}}
                            {{--<option value="AU">Australia</option>--}}
                            {{--<option value="AT">Austria</option>--}}
                            {{--<option value="AZ">Azerbaijan</option>--}}
                            {{--<option value="BS">Bahamas</option>--}}
                            {{--<option value="BH">Bahrain</option>--}}
                            {{--<option value="BD">Bangladesh</option>--}}
                            {{--<option value="BB">Barbados</option>--}}
                            {{--<option value="BY">Belarus</option>--}}
                            {{--<option value="BE">Belgium</option>--}}
                            {{--<option value="BZ">Belize</option>--}}
                            {{--<option value="BJ">Benin</option>--}}
                            {{--<option value="BM">Bermuda</option>--}}
                            {{--<option value="BT">Bhutan</option>--}}
                            {{--<option value="BO">Bolivia</option>--}}
                            {{--<option value="BA">Bosnia and Herzegovina</option>--}}
                            {{--<option value="BW">Botswana</option>--}}
                            {{--<option value="BV">Bouvet Island</option>--}}
                            {{--<option value="BR">Brazil</option>--}}
                            {{--<option value="IO">British Indian Ocean Territory</option>--}}
                            {{--<option value="VG">British Virgin Islands</option>--}}
                            {{--<option value="BN">Brunei</option>--}}
                            {{--<option value="BG">Bulgaria</option>--}}
                            {{--<option value="BF">Burkina Faso</option>--}}
                            {{--<option value="BI">Burundi</option>--}}
                            {{--<option value="KH">Cambodia</option>--}}
                            {{--<option value="CM">Cameroon</option>--}}
                            {{--<option value="CA">Canada</option>--}}
                            {{--<option value="CV">Cape Verde</option>--}}
                            {{--<option value="KY">Cayman Islands</option>--}}
                            {{--<option value="CF">Central African Republic</option>--}}
                            {{--<option value="TD">Chad</option>--}}
                            {{--<option value="CL">Chile</option>--}}
                            {{--<option value="CN">China</option>--}}
                            {{--<option value="CX">Christmas Island</option>--}}
                            {{--<option value="CC">Cocos [Keeling] Islands</option>--}}
                            {{--<option value="CO">Colombia</option>--}}
                            {{--<option value="KM">Comoros</option>--}}
                            {{--<option value="CG">Congo - Brazzaville</option>--}}
                            {{--<option value="CD">Congo - Kinshasa</option>--}}
                            {{--<option value="CK">Cook Islands</option>--}}
                            {{--<option value="CR">Costa Rica</option>--}}
                            {{--<option value="CI">Côte d’Ivoire</option>--}}
                            {{--<option value="HR">Croatia</option>--}}
                            {{--<option value="CU">Cuba</option>--}}
                            {{--<option value="CY">Cyprus</option>--}}
                            {{--<option value="CZ">Czech Republic</option>--}}
                            {{--<option value="DK">Denmark</option>--}}
                            {{--<option value="DJ">Djibouti</option>--}}
                            {{--<option value="DM">Dominica</option>--}}
                            {{--<option value="DO">Dominican Republic</option>--}}
                            {{--<option value="EC">Ecuador</option>--}}
                            {{--<option value="EG">Egypt</option>--}}
                            {{--<option value="SV">El Salvador</option>--}}
                            {{--<option value="GQ">Equatorial Guinea</option>--}}
                            {{--<option value="ER">Eritrea</option>--}}
                            {{--<option value="EE">Estonia</option>--}}
                            {{--<option value="ET">Ethiopia</option>--}}
                            {{--<option value="FK">Falkland Islands</option>--}}
                            {{--<option value="FO">Faroe Islands</option>--}}
                            {{--<option value="FJ">Fiji</option>--}}
                            {{--<option value="FI">Finland</option>--}}
                            {{--<option value="FR">France</option>--}}
                            {{--<option value="GF">French Guiana</option>--}}
                            {{--<option value="PF">French Polynesia</option>--}}
                            {{--<option value="TF">French Southern Territories</option>--}}
                            {{--<option value="GA">Gabon</option>--}}
                            {{--<option value="GM">Gambia</option>--}}
                            {{--<option value="GE">Georgia</option>--}}
                            {{--<option value="DE">Germany</option>--}}
                            {{--<option value="GH">Ghana</option>--}}
                            {{--<option value="GI">Gibraltar</option>--}}
                            {{--<option value="GR">Greece</option>--}}
                            {{--<option value="GL">Greenland</option>--}}
                            {{--<option value="GD">Grenada</option>--}}
                            {{--<option value="GP">Guadeloupe</option>--}}
                            {{--<option value="GU">Guam</option>--}}
                            {{--<option value="GT">Guatemala</option>--}}
                            {{--<option value="GG">Guernsey</option>--}}
                            {{--<option value="GN">Guinea</option>--}}
                            {{--<option value="GW">Guinea-Bissau</option>--}}
                            {{--<option value="GY">Guyana</option>--}}
                            {{--<option value="HT">Haiti</option>--}}
                            {{--<option value="HM">Heard Island and McDonald Islands</option>--}}
                            {{--<option value="HN">Honduras</option>--}}
                            {{--<option value="HK">Hong Kong SAR China</option>--}}
                            {{--<option value="HU">Hungary</option>--}}
                            {{--<option value="IS">Iceland</option>--}}
                            {{--<option value="IN">India</option>--}}
                            {{--<option value="ID">Indonesia</option>--}}
                            {{--<option value="IR">Iran</option>--}}
                            {{--<option value="IQ">Iraq</option>--}}
                            {{--<option value="IE">Ireland</option>--}}
                            {{--<option value="IM">Isle of Man</option>--}}
                            {{--<option value="IL">Israel</option>--}}
                            {{--<option value="IT">Italy</option>--}}
                            {{--<option value="JM">Jamaica</option>--}}
                            {{--<option value="JP">Japan</option>--}}
                            {{--<option value="JE">Jersey</option>--}}
                            {{--<option value="JO">Jordan</option>--}}
                            {{--<option value="KZ">Kazakhstan</option>--}}
                            {{--<option value="KE">Kenya</option>--}}
                            {{--<option value="KI">Kiribati</option>--}}
                            {{--<option value="KW">Kuwait</option>--}}
                            {{--<option value="KG">Kyrgyzstan</option>--}}
                            {{--<option value="LA">Laos</option>--}}
                            {{--<option value="LV">Latvia</option>--}}
                            {{--<option value="LB">Lebanon</option>--}}
                            {{--<option value="LS">Lesotho</option>--}}
                            {{--<option value="LR">Liberia</option>--}}
                            {{--<option value="LY">Libya</option>--}}
                            {{--<option value="LI">Liechtenstein</option>--}}
                            {{--<option value="LT">Lithuania</option>--}}
                            {{--<option value="LU">Luxembourg</option>--}}
                            {{--<option value="MO">Macau SAR China</option>--}}
                            {{--<option value="MK">Macedonia</option>--}}
                            {{--<option value="MG">Madagascar</option>--}}
                            {{--<option value="MW">Malawi</option>--}}
                            {{--<option value="MY">Malaysia</option>--}}
                            {{--<option value="MV">Maldives</option>--}}
                            {{--<option value="ML">Mali</option>--}}
                            {{--<option value="MT">Malta</option>--}}
                            {{--<option value="MH">Marshall Islands</option>--}}
                            {{--<option value="MQ">Martinique</option>--}}
                            {{--<option value="MR">Mauritania</option>--}}
                            {{--<option value="MU">Mauritius</option>--}}
                            {{--<option value="YT">Mayotte</option>--}}
                            {{--<option value="MX">Mexico</option>--}}
                            {{--<option value="FM">Micronesia</option>--}}
                            {{--<option value="MD">Moldova</option>--}}
                            {{--<option value="MC">Monaco</option>--}}
                            {{--<option value="MN">Mongolia</option>--}}
                            {{--<option value="ME">Montenegro</option>--}}
                            {{--<option value="MS">Montserrat</option>--}}
                            {{--<option value="MA">Morocco</option>--}}
                            {{--<option value="MZ">Mozambique</option>--}}
                            {{--<option value="MM">Myanmar [Burma]</option>--}}
                            {{--<option value="NA">Namibia</option>--}}
                            {{--<option value="NR">Nauru</option>--}}
                            {{--<option value="NP">Nepal</option>--}}
                            {{--<option value="NL">Netherlands</option>--}}
                            {{--<option value="AN">Netherlands Antilles</option>--}}
                            {{--<option value="NC">New Caledonia</option>--}}
                            {{--<option value="NZ">New Zealand</option>--}}
                            {{--<option value="NI">Nicaragua</option>--}}
                            {{--<option value="NE">Niger</option>--}}
                            {{--<option value="NG">Nigeria</option>--}}
                            {{--<option value="NU">Niue</option>--}}
                            {{--<option value="NF">Norfolk Island</option>--}}
                            {{--<option value="MP">Northern Mariana Islands</option>--}}
                            {{--<option value="KP">North Korea</option>--}}
                            {{--<option value="NO">Norway</option>--}}
                            {{--<option value="OM">Oman</option>--}}
                            {{--<option value="PK">Pakistan</option>--}}
                            {{--<option value="PW">Palau</option>--}}
                            {{--<option value="PS">Palestinian Territories</option>--}}
                            {{--<option value="PA">Panama</option>--}}
                            {{--<option value="PG">Papua New Guinea</option>--}}
                            {{--<option value="PY">Paraguay</option>--}}
                            {{--<option value="PE">Peru</option>--}}
                            {{--<option value="PH">Philippines</option>--}}
                            {{--<option value="PN">Pitcairn Islands</option>--}}
                            {{--<option value="PL">Poland</option>--}}
                            {{--<option value="PT">Portugal</option>--}}
                            {{--<option value="PR">Puerto Rico</option>--}}
                            {{--<option value="QA">Qatar</option>--}}
                            {{--<option value="RE">Réunion</option>--}}
                            {{--<option value="RO">Romania</option>--}}
                            {{--<option value="RU">Russia</option>--}}
                            {{--<option value="RW">Rwanda</option>--}}
                            {{--<option value="BL">Saint Barthélemy</option>--}}
                            {{--<option value="SH">Saint Helena</option>--}}
                            {{--<option value="KN">Saint Kitts and Nevis</option>--}}
                            {{--<option value="LC">Saint Lucia</option>--}}
                            {{--<option value="MF">Saint Martin</option>--}}
                            {{--<option value="PM">Saint Pierre and Miquelon</option>--}}
                            {{--<option value="VC">Saint Vincent and the Grenadines</option>--}}
                            {{--<option value="WS">Samoa</option>--}}
                            {{--<option value="SM">San Marino</option>--}}
                            {{--<option value="ST">São Tomé and Príncipe</option>--}}
                            {{--<option value="SA">Saudi Arabia</option>--}}
                            {{--<option value="SN">Senegal</option>--}}
                            {{--<option value="RS">Serbia</option>--}}
                            {{--<option value="SC">Seychelles</option>--}}
                            {{--<option value="SL">Sierra Leone</option>--}}
                            {{--<option value="SG">Singapore</option>--}}
                            {{--<option value="SK">Slovakia</option>--}}
                            {{--<option value="SI">Slovenia</option>--}}
                            {{--<option value="SB">Solomon Islands</option>--}}
                            {{--<option value="SO">Somalia</option>--}}
                            {{--<option value="ZA">South Africa</option>--}}
                            {{--<option value="GS">South Georgia and the South Sandwich Islands</option>--}}
                            {{--<option value="KR">South Korea</option>--}}
                            {{--<option value="ES">Spain</option>--}}
                            {{--<option value="LK">Sri Lanka</option>--}}
                            {{--<option value="SD">Sudan</option>--}}
                            {{--<option value="SR">Suriname</option>--}}
                            {{--<option value="SJ">Svalbard and Jan Mayen</option>--}}
                            {{--<option value="SZ">Swaziland</option>--}}
                            {{--<option value="SE">Sweden</option>--}}
                            {{--<option value="CH">Switzerland</option>--}}
                            {{--<option value="SY">Syria</option>--}}
                            {{--<option value="TW">Taiwan</option>--}}
                            {{--<option value="TJ">Tajikistan</option>--}}
                            {{--<option value="TZ">Tanzania</option>--}}
                            {{--<option value="TH">Thailand</option>--}}
                            {{--<option value="TL">Timor-Leste</option>--}}
                            {{--<option value="TG">Togo</option>--}}
                            {{--<option value="TK">Tokelau</option>--}}
                            {{--<option value="TO">Tonga</option>--}}
                            {{--<option value="TT">Trinidad and Tobago</option>--}}
                            {{--<option value="TN">Tunisia</option>--}}
                            {{--<option value="TR">Turkey</option>--}}
                            {{--<option value="TM">Turkmenistan</option>--}}
                            {{--<option value="TC">Turks and Caicos Islands</option>--}}
                            {{--<option value="TV">Tuvalu</option>--}}
                            {{--<option value="UG">Uganda</option>--}}
                            {{--<option value="UA">Ukraine</option>--}}
                            {{--<option value="AE">United Arab Emirates</option>--}}
                            {{--<option value="GB">United Kingdom</option>--}}
                            {{--<option value="US">United States</option>--}}
                            {{--<option value="UY">Uruguay</option>--}}
                            {{--<option value="UM">U.S. Minor Outlying Islands</option>--}}
                            {{--<option value="VI">U.S. Virgin Islands</option>--}}
                            {{--<option value="UZ">Uzbekistan</option>--}}
                            {{--<option value="VU">Vanuatu</option>--}}
                            {{--<option value="VA">Vatican City</option>--}}
                            {{--<option value="VE">Venezuela</option>--}}
                            {{--<option value="VN">Vietnam</option>--}}
                            {{--<option value="WF">Wallis and Futuna</option>--}}
                            {{--<option value="EH">Western Sahara</option>--}}
                            {{--<option value="YE">Yemen</option>--}}
                            {{--<option value="ZM">Zambia</option>--}}
                            {{--<option value="ZW">Zimbabwe</option>--}}
                            {{--</select>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="txtTelephoneBillingTab" class="col-sm-3 col-md-4 control-label">Telephone</label>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtTelephoneBillingTab" name="txtTelephoneBillingTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="txtFaxBillingTab" class="col-sm-3 col-md-4 control-label">Fax</label>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtFaxBillingTab" name="txtFaxBillingTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            <div class="widget-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>With icon</label>
                                            <div class="input-group">
                                                <input id="with-icon-picker" type="text" value="01/01/2015 - 02/15/2015" class="form-control"><span class="input-group-addon"><span class="ti-calendar"></span></span>
                                            </div>
                                        </div>
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


                            <div class="col-md-6">
                                <div class="widget">
                                    <div class="widget-heading">
                                        <h3 class="widget-title">Bar Chart</h3>
                                    </div>
                                    <div class="widget-body">
                                        <div class="chartjs">
                                            <canvas id="barchart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                        <h3>Всего обработано заказов(3)</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="txtFirstNameShippingTab" class="col-sm-3 col-md-4 control-label">Заказ: 1</label>
                                        {{--<div class="col-sm-9 col-md-8">--}}
                                        {{--<input id="txtFirstNameShippingTab" name="txtFirstNameShippingTab" type="text" class="form-control">--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="txtLastNameShippingTab" class="col-sm-3 col-md-4 control-label">Золотое украшение</label>
                                        {{--<div class="col-sm-9 col-md-8">--}}
                                        {{--<input id="txtLastNameShippingTab" name="txtLastNameShippingTab" type="text" class="form-control">--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="txtCompanyShippingTab" class="col-sm-3 col-md-4 control-label">Заказ: 2</label>
                                        {{--<div class="col-sm-9 col-md-8">--}}
                                        {{--<input id="txtCompanyShippingTab" name="txtCompanyShippingTab" type="text" class="form-control">--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="txtEmailAddressShippingTab" class="col-sm-3 col-md-4 control-label">Серебренное украшение</label>
                                        {{--<div class="col-sm-9 col-md-8">--}}
                                        {{--<input id="txtEmailAddressShippingTab" name="txtEmailAddressShippingTab" type="text" class="form-control">--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="txtAddress1ShippingTab" class="col-sm-3 col-md-4 control-label">Заказ:3</label>
                                        {{--<div class="col-sm-9 col-md-8">--}}
                                        {{--<textarea id="txtAddress1ShippingTab" name="txtAddress1ShippingTab" class="form-control"></textarea>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="txtAddress2ShippingTab" class="col-sm-3 col-md-4 control-label">Красивое украшение</label>
                                        {{--<div class="col-sm-9 col-md-8">--}}
                                        {{--<textarea id="txtAddress2ShippingTab" name="txtAddress2ShippingTab" class="form-control"></textarea>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                            </div>
                            {{--<div class="row">--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="txtCityShippingTab" class="col-sm-3 col-md-4 control-label">City</label>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtCityShippingTab" name="txtCityShippingTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="txtStateProvinceShippingTab" class="col-sm-3 col-md-4 control-label">State/Province</label>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtStateProvinceShippingTab" name="txtStateProvinceShippingTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="txtZipPostalShippingTab" class="col-sm-3 col-md-4 control-label">Zip/Postal Code</label>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtZipPostalShippingTab" name="txtZipPostalShippingTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="ddlCountryShippingTab" class="col-sm-3 col-md-4 control-label">Country</label>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<select id="ddlCountryShippingTab" name="ddlCountryShippingTab" class="form-control">--}}
                            {{--<option value="">--Please Select--</option>--}}
                            {{--<option value="AF">Afghanistan</option>--}}
                            {{--<option value="AX">Åland Islands</option>--}}
                            {{--<option value="AL">Albania</option>--}}
                            {{--<option value="DZ">Algeria</option>--}}
                            {{--<option value="AS">American Samoa</option>--}}
                            {{--<option value="AD">Andorra</option>--}}
                            {{--<option value="AO">Angola</option>--}}
                            {{--<option value="AI">Anguilla</option>--}}
                            {{--<option value="AQ">Antarctica</option>--}}
                            {{--<option value="AG">Antigua and Barbuda</option>--}}
                            {{--<option value="AR">Argentina</option>--}}
                            {{--<option value="AM">Armenia</option>--}}
                            {{--<option value="AW">Aruba</option>--}}
                            {{--<option value="AU">Australia</option>--}}
                            {{--<option value="AT">Austria</option>--}}
                            {{--<option value="AZ">Azerbaijan</option>--}}
                            {{--<option value="BS">Bahamas</option>--}}
                            {{--<option value="BH">Bahrain</option>--}}
                            {{--<option value="BD">Bangladesh</option>--}}
                            {{--<option value="BB">Barbados</option>--}}
                            {{--<option value="BY">Belarus</option>--}}
                            {{--<option value="BE">Belgium</option>--}}
                            {{--<option value="BZ">Belize</option>--}}
                            {{--<option value="BJ">Benin</option>--}}
                            {{--<option value="BM">Bermuda</option>--}}
                            {{--<option value="BT">Bhutan</option>--}}
                            {{--<option value="BO">Bolivia</option>--}}
                            {{--<option value="BA">Bosnia and Herzegovina</option>--}}
                            {{--<option value="BW">Botswana</option>--}}
                            {{--<option value="BV">Bouvet Island</option>--}}
                            {{--<option value="BR">Brazil</option>--}}
                            {{--<option value="IO">British Indian Ocean Territory</option>--}}
                            {{--<option value="VG">British Virgin Islands</option>--}}
                            {{--<option value="BN">Brunei</option>--}}
                            {{--<option value="BG">Bulgaria</option>--}}
                            {{--<option value="BF">Burkina Faso</option>--}}
                            {{--<option value="BI">Burundi</option>--}}
                            {{--<option value="KH">Cambodia</option>--}}
                            {{--<option value="CM">Cameroon</option>--}}
                            {{--<option value="CA">Canada</option>--}}
                            {{--<option value="CV">Cape Verde</option>--}}
                            {{--<option value="KY">Cayman Islands</option>--}}
                            {{--<option value="CF">Central African Republic</option>--}}
                            {{--<option value="TD">Chad</option>--}}
                            {{--<option value="CL">Chile</option>--}}
                            {{--<option value="CN">China</option>--}}
                            {{--<option value="CX">Christmas Island</option>--}}
                            {{--<option value="CC">Cocos [Keeling] Islands</option>--}}
                            {{--<option value="CO">Colombia</option>--}}
                            {{--<option value="KM">Comoros</option>--}}
                            {{--<option value="CG">Congo - Brazzaville</option>--}}
                            {{--<option value="CD">Congo - Kinshasa</option>--}}
                            {{--<option value="CK">Cook Islands</option>--}}
                            {{--<option value="CR">Costa Rica</option>--}}
                            {{--<option value="CI">Côte d’Ivoire</option>--}}
                            {{--<option value="HR">Croatia</option>--}}
                            {{--<option value="CU">Cuba</option>--}}
                            {{--<option value="CY">Cyprus</option>--}}
                            {{--<option value="CZ">Czech Republic</option>--}}
                            {{--<option value="DK">Denmark</option>--}}
                            {{--<option value="DJ">Djibouti</option>--}}
                            {{--<option value="DM">Dominica</option>--}}
                            {{--<option value="DO">Dominican Republic</option>--}}
                            {{--<option value="EC">Ecuador</option>--}}
                            {{--<option value="EG">Egypt</option>--}}
                            {{--<option value="SV">El Salvador</option>--}}
                            {{--<option value="GQ">Equatorial Guinea</option>--}}
                            {{--<option value="ER">Eritrea</option>--}}
                            {{--<option value="EE">Estonia</option>--}}
                            {{--<option value="ET">Ethiopia</option>--}}
                            {{--<option value="FK">Falkland Islands</option>--}}
                            {{--<option value="FO">Faroe Islands</option>--}}
                            {{--<option value="FJ">Fiji</option>--}}
                            {{--<option value="FI">Finland</option>--}}
                            {{--<option value="FR">France</option>--}}
                            {{--<option value="GF">French Guiana</option>--}}
                            {{--<option value="PF">French Polynesia</option>--}}
                            {{--<option value="TF">French Southern Territories</option>--}}
                            {{--<option value="GA">Gabon</option>--}}
                            {{--<option value="GM">Gambia</option>--}}
                            {{--<option value="GE">Georgia</option>--}}
                            {{--<option value="DE">Germany</option>--}}
                            {{--<option value="GH">Ghana</option>--}}
                            {{--<option value="GI">Gibraltar</option>--}}
                            {{--<option value="GR">Greece</option>--}}
                            {{--<option value="GL">Greenland</option>--}}
                            {{--<option value="GD">Grenada</option>--}}
                            {{--<option value="GP">Guadeloupe</option>--}}
                            {{--<option value="GU">Guam</option>--}}
                            {{--<option value="GT">Guatemala</option>--}}
                            {{--<option value="GG">Guernsey</option>--}}
                            {{--<option value="GN">Guinea</option>--}}
                            {{--<option value="GW">Guinea-Bissau</option>--}}
                            {{--<option value="GY">Guyana</option>--}}
                            {{--<option value="HT">Haiti</option>--}}
                            {{--<option value="HM">Heard Island and McDonald Islands</option>--}}
                            {{--<option value="HN">Honduras</option>--}}
                            {{--<option value="HK">Hong Kong SAR China</option>--}}
                            {{--<option value="HU">Hungary</option>--}}
                            {{--<option value="IS">Iceland</option>--}}
                            {{--<option value="IN">India</option>--}}
                            {{--<option value="ID">Indonesia</option>--}}
                            {{--<option value="IR">Iran</option>--}}
                            {{--<option value="IQ">Iraq</option>--}}
                            {{--<option value="IE">Ireland</option>--}}
                            {{--<option value="IM">Isle of Man</option>--}}
                            {{--<option value="IL">Israel</option>--}}
                            {{--<option value="IT">Italy</option>--}}
                            {{--<option value="JM">Jamaica</option>--}}
                            {{--<option value="JP">Japan</option>--}}
                            {{--<option value="JE">Jersey</option>--}}
                            {{--<option value="JO">Jordan</option>--}}
                            {{--<option value="KZ">Kazakhstan</option>--}}
                            {{--<option value="KE">Kenya</option>--}}
                            {{--<option value="KI">Kiribati</option>--}}
                            {{--<option value="KW">Kuwait</option>--}}
                            {{--<option value="KG">Kyrgyzstan</option>--}}
                            {{--<option value="LA">Laos</option>--}}
                            {{--<option value="LV">Latvia</option>--}}
                            {{--<option value="LB">Lebanon</option>--}}
                            {{--<option value="LS">Lesotho</option>--}}
                            {{--<option value="LR">Liberia</option>--}}
                            {{--<option value="LY">Libya</option>--}}
                            {{--<option value="LI">Liechtenstein</option>--}}
                            {{--<option value="LT">Lithuania</option>--}}
                            {{--<option value="LU">Luxembourg</option>--}}
                            {{--<option value="MO">Macau SAR China</option>--}}
                            {{--<option value="MK">Macedonia</option>--}}
                            {{--<option value="MG">Madagascar</option>--}}
                            {{--<option value="MW">Malawi</option>--}}
                            {{--<option value="MY">Malaysia</option>--}}
                            {{--<option value="MV">Maldives</option>--}}
                            {{--<option value="ML">Mali</option>--}}
                            {{--<option value="MT">Malta</option>--}}
                            {{--<option value="MH">Marshall Islands</option>--}}
                            {{--<option value="MQ">Martinique</option>--}}
                            {{--<option value="MR">Mauritania</option>--}}
                            {{--<option value="MU">Mauritius</option>--}}
                            {{--<option value="YT">Mayotte</option>--}}
                            {{--<option value="MX">Mexico</option>--}}
                            {{--<option value="FM">Micronesia</option>--}}
                            {{--<option value="MD">Moldova</option>--}}
                            {{--<option value="MC">Monaco</option>--}}
                            {{--<option value="MN">Mongolia</option>--}}
                            {{--<option value="ME">Montenegro</option>--}}
                            {{--<option value="MS">Montserrat</option>--}}
                            {{--<option value="MA">Morocco</option>--}}
                            {{--<option value="MZ">Mozambique</option>--}}
                            {{--<option value="MM">Myanmar [Burma]</option>--}}
                            {{--<option value="NA">Namibia</option>--}}
                            {{--<option value="NR">Nauru</option>--}}
                            {{--<option value="NP">Nepal</option>--}}
                            {{--<option value="NL">Netherlands</option>--}}
                            {{--<option value="AN">Netherlands Antilles</option>--}}
                            {{--<option value="NC">New Caledonia</option>--}}
                            {{--<option value="NZ">New Zealand</option>--}}
                            {{--<option value="NI">Nicaragua</option>--}}
                            {{--<option value="NE">Niger</option>--}}
                            {{--<option value="NG">Nigeria</option>--}}
                            {{--<option value="NU">Niue</option>--}}
                            {{--<option value="NF">Norfolk Island</option>--}}
                            {{--<option value="MP">Northern Mariana Islands</option>--}}
                            {{--<option value="KP">North Korea</option>--}}
                            {{--<option value="NO">Norway</option>--}}
                            {{--<option value="OM">Oman</option>--}}
                            {{--<option value="PK">Pakistan</option>--}}
                            {{--<option value="PW">Palau</option>--}}
                            {{--<option value="PS">Palestinian Territories</option>--}}
                            {{--<option value="PA">Panama</option>--}}
                            {{--<option value="PG">Papua New Guinea</option>--}}
                            {{--<option value="PY">Paraguay</option>--}}
                            {{--<option value="PE">Peru</option>--}}
                            {{--<option value="PH">Philippines</option>--}}
                            {{--<option value="PN">Pitcairn Islands</option>--}}
                            {{--<option value="PL">Poland</option>--}}
                            {{--<option value="PT">Portugal</option>--}}
                            {{--<option value="PR">Puerto Rico</option>--}}
                            {{--<option value="QA">Qatar</option>--}}
                            {{--<option value="RE">Réunion</option>--}}
                            {{--<option value="RO">Romania</option>--}}
                            {{--<option value="RU">Russia</option>--}}
                            {{--<option value="RW">Rwanda</option>--}}
                            {{--<option value="BL">Saint Barthélemy</option>--}}
                            {{--<option value="SH">Saint Helena</option>--}}
                            {{--<option value="KN">Saint Kitts and Nevis</option>--}}
                            {{--<option value="LC">Saint Lucia</option>--}}
                            {{--<option value="MF">Saint Martin</option>--}}
                            {{--<option value="PM">Saint Pierre and Miquelon</option>--}}
                            {{--<option value="VC">Saint Vincent and the Grenadines</option>--}}
                            {{--<option value="WS">Samoa</option>--}}
                            {{--<option value="SM">San Marino</option>--}}
                            {{--<option value="ST">São Tomé and Príncipe</option>--}}
                            {{--<option value="SA">Saudi Arabia</option>--}}
                            {{--<option value="SN">Senegal</option>--}}
                            {{--<option value="RS">Serbia</option>--}}
                            {{--<option value="SC">Seychelles</option>--}}
                            {{--<option value="SL">Sierra Leone</option>--}}
                            {{--<option value="SG">Singapore</option>--}}
                            {{--<option value="SK">Slovakia</option>--}}
                            {{--<option value="SI">Slovenia</option>--}}
                            {{--<option value="SB">Solomon Islands</option>--}}
                            {{--<option value="SO">Somalia</option>--}}
                            {{--<option value="ZA">South Africa</option>--}}
                            {{--<option value="GS">South Georgia and the South Sandwich Islands</option>--}}
                            {{--<option value="KR">South Korea</option>--}}
                            {{--<option value="ES">Spain</option>--}}
                            {{--<option value="LK">Sri Lanka</option>--}}
                            {{--<option value="SD">Sudan</option>--}}
                            {{--<option value="SR">Suriname</option>--}}
                            {{--<option value="SJ">Svalbard and Jan Mayen</option>--}}
                            {{--<option value="SZ">Swaziland</option>--}}
                            {{--<option value="SE">Sweden</option>--}}
                            {{--<option value="CH">Switzerland</option>--}}
                            {{--<option value="SY">Syria</option>--}}
                            {{--<option value="TW">Taiwan</option>--}}
                            {{--<option value="TJ">Tajikistan</option>--}}
                            {{--<option value="TZ">Tanzania</option>--}}
                            {{--<option value="TH">Thailand</option>--}}
                            {{--<option value="TL">Timor-Leste</option>--}}
                            {{--<option value="TG">Togo</option>--}}
                            {{--<option value="TK">Tokelau</option>--}}
                            {{--<option value="TO">Tonga</option>--}}
                            {{--<option value="TT">Trinidad and Tobago</option>--}}
                            {{--<option value="TN">Tunisia</option>--}}
                            {{--<option value="TR">Turkey</option>--}}
                            {{--<option value="TM">Turkmenistan</option>--}}
                            {{--<option value="TC">Turks and Caicos Islands</option>--}}
                            {{--<option value="TV">Tuvalu</option>--}}
                            {{--<option value="UG">Uganda</option>--}}
                            {{--<option value="UA">Ukraine</option>--}}
                            {{--<option value="AE">United Arab Emirates</option>--}}
                            {{--<option value="GB">United Kingdom</option>--}}
                            {{--<option value="US">United States</option>--}}
                            {{--<option value="UY">Uruguay</option>--}}
                            {{--<option value="UM">U.S. Minor Outlying Islands</option>--}}
                            {{--<option value="VI">U.S. Virgin Islands</option>--}}
                            {{--<option value="UZ">Uzbekistan</option>--}}
                            {{--<option value="VU">Vanuatu</option>--}}
                            {{--<option value="VA">Vatican City</option>--}}
                            {{--<option value="VE">Venezuela</option>--}}
                            {{--<option value="VN">Vietnam</option>--}}
                            {{--<option value="WF">Wallis and Futuna</option>--}}
                            {{--<option value="EH">Western Sahara</option>--}}
                            {{--<option value="YE">Yemen</option>--}}
                            {{--<option value="ZM">Zambia</option>--}}
                            {{--<option value="ZW">Zimbabwe</option>--}}
                            {{--</select>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="txtTelephoneShippingTab" class="col-sm-3 col-md-4 control-label">Telephone</label>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtTelephoneShippingTab" name="txtTelephoneShippingTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="txtFaxShippingTab" class="col-sm-3 col-md-4 control-label">Fax</label>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtFaxShippingTab" name="txtFaxShippingTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        </fieldset>
                        <h3>Неудачных заказов(1)</h3>
                        <fieldset>
                            {{--<div class="row">--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="txtNameCardTab" class="col-sm-3 col-md-4 control-label">Заказ: 4</label>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtNameCardTab" name="txtNameCardTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="ddlCreditCardTypeTab" class="col-sm-3 col-md-4 control-label">Credit Card Type</label>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<select id="ddlCreditCardTypeTab" name="ddlCreditCardTypeTab" class="form-control">--}}
                            {{--<option value="">--Please Select--</option>--}}
                            {{--<option value="AE">American Express</option>--}}
                            {{--<option value="VI">Visa</option>--}}
                            {{--<option value="MC">MasterCard</option>--}}
                            {{--<option value="DI">Discover</option>--}}
                            {{--</select>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="txtCreditCardNumberTab" class="col-sm-3 col-md-4 control-label">Заказ: 4</label>
                                        {{--<div class="col-sm-9 col-md-8">--}}
                                        {{--<input id="txtCreditCardNumberTab" name="txtCreditCardNumberTab" type="text" class="form-control">--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="txtCardVerificationNumberTab" class="col-sm-3 col-md-4 control-label">Ожерелье</label>
                                        {{--<div class="col-sm-9 col-md-8">--}}
                                        {{--<input id="txtCardVerificationNumberTab" name="txtCardVerificationNumberTab" type="text" class="form-control">--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                            </div>
                            {{--<div class="row">--}}
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="txtExpirationDateTab" class="col-sm-3 col-md-4 control-label">Expiration Date</label>--}}
                            {{--<div class="col-sm-9 col-md-8">--}}
                            {{--<input id="txtExpirationDateTab" name="txtExpirationDateTab" type="text" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        </fieldset>

                        <h3>В обработке(1)</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="txtCreditCardNumberTab" class="col-sm-3 col-md-4 control-label">Заказ: 5</label>
                                        {{--<div class="col-sm-9 col-md-8">--}}
                                        {{--<input id="txtCreditCardNumberTab" name="txtCreditCardNumberTab" type="text" class="form-control">--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="txtCardVerificationNumberTab" class="col-sm-3 col-md-4 control-label">Ожерелье</label>
                                        {{--<div class="col-sm-9 col-md-8">--}}
                                        {{--<input id="txtCardVerificationNumberTab" name="txtCardVerificationNumberTab" type="text" class="form-control">--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                            </div>
                            {{--<table class="table table-bordered">--}}
                            {{--<thead>--}}
                            {{--<tr>--}}
                            {{--<th style="width:10%">#</th>--}}
                            {{--<th style="width:40%">Product Name</th>--}}
                            {{--<th style="width:15%">Price</th>--}}
                            {{--<th style="width:15%">Qty</th>--}}
                            {{--<th style="width:20%">Subtotal</th>--}}
                            {{--</tr>--}}
                            {{--</thead>--}}
                            {{--<tbody>--}}
                            {{--<tr>--}}
                            {{--<th scope="row">1</th>--}}
                            {{--<td>Samsung Galaxy S7 Edge</td>--}}
                            {{--<td class="text-right">$899.00</td>--}}
                            {{--<td class="text-right">1</td>--}}
                            {{--<td class="text-right">$899.00</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                            {{--<th scope="row">2</th>--}}
                            {{--<td>Apple Iphone 6S Pus</td>--}}
                            {{--<td class="text-right">$999.00</td>--}}
                            {{--<td class="text-right">1</td>--}}
                            {{--<td class="text-right">$999.00</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                            {{--<th scope="row">3</th>--}}
                            {{--<td>Sony Xperia X Performance</td>--}}
                            {{--<td class="text-right">$799.00</td>--}}
                            {{--<td class="text-right">1</td>--}}
                            {{--<td class="text-right">$799.00</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                            {{--<td colspan="4" class="text-right">Subtotal</td>--}}
                            {{--<td class="text-right">$2597.00</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                            {{--<td colspan="4" class="text-right">Shipping & Handling</td>--}}
                            {{--<td class="text-right">$10.00</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                            {{--<td colspan="4" class="text-right">Grand Total</td>--}}
                            {{--<td class="text-right">$2607.00</td>--}}
                            {{--</tr>--}}
                            {{--</tbody>--}}
                            {{--</table>--}}
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        {{--<div class="col-md-3">--}}
        {{--<div class="widget clear">--}}
        {{--<div class="widget-heading">--}}
        {{--<h3 class="widget-title">Team member</h3>--}}
        {{--</div>--}}
        {{--<div class="widget-body">--}}
        {{--<ul class="media-list mb-0">--}}
        {{--<li class="media"><a href="javascript:;" class="conversation-toggle">--}}
        {{--<div class="media-left avatar"><img src="/images/users/10.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>--}}
        {{--<div class="media-body">--}}
        {{--<h5 class="media-heading">Philip Fernandez</h5>--}}
        {{--<p class="text-muted mb-0">489 Rhapsody Street</p>--}}
        {{--</div></a></li>--}}
        {{--<li class="media"><a href="javascript:;" class="conversation-toggle">--}}
        {{--<div class="media-left avatar"><img src="/images/users/20.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>--}}
        {{--<div class="media-body">--}}
        {{--<h5 class="media-heading">Mary Carr</h5>--}}
        {{--<p class="text-muted mb-0">3611 West Fork Drive</p>--}}
        {{--</div></a></li>--}}
        {{--<li class="media"><a href="javascript:;" class="conversation-toggle">--}}
        {{--<div class="media-left avatar"><img src="/images/users/11.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>--}}
        {{--<div class="media-body">--}}
        {{--<h5 class="media-heading">Joseph Salazar</h5>--}}
        {{--<p class="text-muted mb-0">4489 Hart Ridge Road</p>--}}
        {{--</div></a></li>--}}
        {{--<li class="media"><a href="javascript:;" class="conversation-toggle">--}}
        {{--<div class="media-left avatar"><img src="/images/users/06.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>--}}
        {{--<div class="media-body">--}}
        {{--<h5 class="media-heading">John Cruz</h5>--}}
        {{--<p class="text-muted mb-0">3274 Lyndon Street</p>--}}
        {{--</div></a></li>--}}
        {{--<li class="media"><a href="javascript:;" class="conversation-toggle">--}}
        {{--<div class="media-left avatar"><img src="/images/users/19.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>--}}
        {{--<div class="media-body">--}}
        {{--<h5 class="media-heading">Jacqueline Rios</h5>--}}
        {{--<p class="text-muted mb-0">559 Holly Street</p>--}}
        {{--</div></a></li>--}}
        {{--</ul>--}}
        {{--</div>--}}




        {{--<div class="widget clear">--}}
        {{--<div class="widget-heading">--}}
        {{--<h3 class="widget-title">Activities</h3>--}}
        {{--</div>--}}
        {{--<div class="widget-body">--}}
        {{--<ul class="media-list mb-0">--}}
        {{--<li class="media">--}}
        {{--<div class="media-left"><i class="ti-control-record text-info"></i></div>--}}
        {{--<div class="media-body">--}}
        {{--<p>Recommended Karen Ortega</p>--}}
        {{--</div>--}}
        {{--</li>--}}
        {{--<li class="media">--}}
        {{--<div class="media-left"><i class="ti-control-record text-danger"></i></div>--}}
        {{--<div class="media-body">--}}
        {{--<p>Retweeted George Lewis</p>--}}
        {{--</div>--}}
        {{--</li>--}}
        {{--<li class="media">--}}
        {{--<div class="media-left"><i class="ti-control-record text-warning"></i></div>--}}
        {{--<div class="media-body">--}}
        {{--<p>Followed Olivia Williamson</p>--}}
        {{--</div>--}}
        {{--</li>--}}
        {{--<li class="media">--}}
        {{--<div class="media-left"><i class="ti-control-record text-success"></i></div>--}}
        {{--<div class="media-body">--}}
        {{--<p>Replied to Janice Davis</p>--}}
        {{--</div>--}}
        {{--</li>--}}
        {{--<li class="media">--}}
        {{--<div class="media-left"><i class="ti-control-record text-primary"></i></div>--}}
        {{--<div class="media-body">--}}
        {{--<p>Favorited Arthur Gomez</p>--}}
        {{--</div>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--</div>--}}



        {{--</div>--}}
        {{--</div>--}}

    </div>
@endsection
@section('script')
    <script type="text/javascript" src="/js/page-content/user-pages/profile.js"></script>
    <script type="text/javascript" src="/js/page-content/forms/forms-wizard.js"></script>
    <script type="text/javascript" src="/js/page-content/pickers/date-range-picker.js"></script>
    <script type="text/javascript" src="/js/page-content/charts/chart-js.js"></script>
@stop