@extends('layout')
@section('content')
    <div class="page-header clearfix">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mt-0 mb-5">Добавление профиля производителя</h4>
                <ol class="breadcrumb mb-0">
                    <li><a href="#">Апанде</a></li>
                    <li><a href="#">Страничка пользователя</a></li>
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
                        <form enctype="multipart/form-data" method="post">
                            <p><input type="file" name="f" value="Выберите аватарку">
                                <input type="submit" value="Загрузить аватарку "></p>

                        </form>
                        {{--<button type="button"  class="btn btn-danger">  Удалить    </button></br></br>--}}
                        {{--<button type="button" class="btn btn-default">  Изменить   </button></br></br>--}}
                        {{--<button type="button" class="btn btn-success"> Подтвердить </button>--}}
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
                                    <p>ФИО: </p>
                                    <input id="txtCustomerName" type="text" class="form-control">

                                </div>

                            </li>
                            <li class="media">
                                {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                                <div class="media-body">
                                    <p>Адрес проживания:</p>
                                    <input id="txtCustomerName" type="text" class="form-control">
                                </div>

                            </li>
                            <li class="media">
                                {{--<div class="media-left"><i class="ti-gift text-info"></i></div>--}}
                                <div class="media-body">
                                    <p>Дата рождения: </p>
                                    <div class="col-md-13">
                                        <div class="form-group">

                                            <div class="input-group">
                                                <input id="date-added" type="text" class="form-control"><span class="input-group-addon"><span class="ti-calendar"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="media">
                                {{--<div class="media-left"><i class="ti-email text-info"></i></div>--}}
                                <div class="media-body">
                                    <p>Електронная почта: </p>
                                    <input id="txtCustomerName" type="text" class="form-control">
                                </div>
                            </li>
                            <li class="media">
                                {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                                <div class="media-body">
                                    <p>Моб. телефон: </p>
                                    <input id="txtCustomerName" type="text" class="form-control">
                                </div>

                            </li>
                            <li class="media">
                                {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                                <div class="media-body">
                                    <p>Соц. сети через которые залогинились: vk</p>

                                </div>

                            </li>
                            <li class="media">
                                {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                                <div class="media-body">
                                    <p>Инн: </p>
                                    <input id="txtCustomerName" type="text" class="form-control">
                                </div>

                            </li>
                            <li class="media">
                                {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                                <div class="media-body">
                                    <p>ОРГН: </p>
                                    <input id="txtCustomerName" type="text" class="form-control">
                                </div>

                            </li>
                            <li class="media">
                                {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                                <div class="media-body">
                                    <p>БИК: </p>
                                    <input id="txtCustomerName" type="text" class="form-control">
                                </div>

                            </li>
                            <li class="media">
                                {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                                <div class="media-body">
                                    <p>P/C: </p>
                                    <input id="txtCustomerName" type="text" class="form-control">
                                </div>

                            </li>
                            <li class="media">
                                {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                                <div class="media-body">
                                    <p>Основная специализация: </p>
                                    <input id="txtCustomerName" type="text" class="form-control">
                                </div>

                            </li>
                            <li class="media">
                                {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                                <div class="media-body">
                                    <p>Кол-во товаров: </p>
                                    {{--<input id="txtCustomerName" type="text" class="form-control">--}}
                                </div>

                            </li>
                            <li class="media">
                                {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                                <div class="media-body">
                                    <p>Кол-во товаров на модерации: </p>
                                    {{--<input id="txtCustomerName" type="text" class="form-control">--}}
                                </div>

                            </li>
                            <li class="media">
                                {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                                <div class="media-body">
                                    <p><a href="url('/admin/producrs/1')">Кол-во заказов: </a></p>
                                    {{--<input id="txtCustomerName" type="text" class="form-control">--}}
                                </div>

                            </li>
                            <li class="media">
                                {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                                <div class="media-body">
                                    <p>Кол-во посмотров товаров: </p>
                                    <input id="txtCustomerName" type="text" class="form-control">
                                </div>

                            </li>
                            <li class="media">
                                {{--<div class="media-left"><i class="ti-briefcase text-info"></i></div>--}}
                                <div class="media-body">
                                    <p>Средний рейтинг по всем товарам:
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </p>
                                    {{--<div class="col-md-4 col-sm-6"><i class="fa fa-star"></i> star</div>--}}
                                    {{--<div class="col-md-4 col-sm-6"><i class="fa fa-star"></i> star</div>--}}
                                    {{--<div class="col-md-4 col-sm-6"><i class="fa fa-star-half"></i> star-half</div>--}}
                                    {{--<div class="col-md-4 col-sm-6"><i class="fa fa-star-half-empty"></i> star-half-empty <span class="text-muted">(alias)</span></div>--}}
                                    {{--<div class="col-md-4 col-sm-6"><i class="fa fa-star-half-full"></i> star-half-full <span class="text-muted">(alias)</span></div>--}}
                                    {{--<div class="col-md-4 col-sm-6"><i class="fa fa-star-half-o"></i> star-half-o</div>--}}
                                    {{--<div class="col-md-4 col-sm-6"><i class="fa fa-star-o"></i> </div>--}}
                                    {{--<div class="col-md-4 col-sm-6"><i class="fa fa-star-o"></i> </div>--}}
                                    {{--<div class="col-md-4 col-sm-6"><i class="fa fa-star-o"></i> </div>--}}
                                </div>

                            </li>
                            <p>Загрузите ваш документ:</p>
                            <input type="file">
                            <input type="button" value="Загрузить документ">
                        </ul>
                    </div>
                </div>
                <div class="widget clear">
                    <div class="widget-heading">
                        <h3 class="widget-title">Блок с текстом о себе</h3>
                    </div>
                    <div class="widget-body">
                        <textarea id="txtCustomerName"  rows="7"  cols="250" class="form-control" ></textarea>
                    </div>
                </div>
                <button type="button" class="btn btn-danger">Удалить </button>
                <button type="button" class="btn btn-success">Добавить</button>
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
            {{--</div>--}}

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



            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="/js/page-content/user-pages/profile.js"></script>
    <script type="text/javascript" src="/js/page-content/e-commerce/customer-list.js"></script>
@stop