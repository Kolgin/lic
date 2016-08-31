@extends('layout')
@section('content')
    <div class="page-header clearfix">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mt-0 mb-5">Сайт</h4>
                <ol class="breadcrumb mb-0">
                    <li><a href="#">Umega</a></li>
                    <li><a href="#">File Uploads</a></li>
                    <li class="active">Bootstrap File Input</li>
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
            <div class="widget-heading">
                <h3 class="widget-title">Слайдер</h3>
            </div>
            <div class="widget-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Вывод слайдов </label>
                        <div class="col-sm-10">
                            <input id="input-8" name="8[]" type="file" multiple="" class="file-loading">
                            <p class="help-block">Set maximum file upload size to 100 KB.</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="widget">
            <div class="widget-heading">
                <h3 class="widget-title">Товар Дня</h3>
            </div>
            <div class="widget-body">
                <form class="form-horizontal">
                    
                    <div class="form-group">    
                        <div class="col-sm-10">
                            <span>За какое время выводить самые покупаемые товары </span> 
                            <select name="" id="">
                                <option value="">01 - 10</option>
                                <option value="">10 - 20</option>
                                <option value="">20 - 31</option>
                            </select>
                            </br>
                            <span>Указывать цену от </span> 
                            <select name="" id="">
                                <option value="">100</option>
                                <option value="">1000</option>
                                <option value="">10000</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="widget">
                <div class="widget-heading">
                  <h3 class="widget-title">Настройки СЕО </h3>
                </div>
                <div class="widget-body">
                  <div role="tabpanel">
                    <ul role="tablist" class="nav nav-tabs mb-15">
                      <li role="presentation" class="active"><a id="home-tab" href="#home" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Главная</a></li>
                      <li role="presentation"><a id="profile-tab" href="#profile" role="tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Все категории</a></li>
                        <li role="presentation"><a id="profile-tab" href="#profile" role="tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Несколько подкатегорий</a></li>
                    </ul>
                    <div class="tab-content">
                      <div id="home" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade active in">
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p>
                      </div>
                      <div id="profile" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade">
                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.</p>
                      </div>
                      <div id="dropdown1" role="tabpanel" aria-labelledby="dropdown1-tab" class="tab-pane fade">
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer.</p>
                      </div>
                      <div id="dropdown2" role="tabpanel" aria-labelledby="dropdown2-tab" class="tab-pane fade">
                        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="/js/page-content/file-uploads/bootstrap-file-input.js"></script>
@stop