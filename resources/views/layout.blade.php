<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Апанде</title>
    <!-- PACE-->
    <link rel="stylesheet" type="text/css" href="/plugins/PACE/themes/blue/pace-theme-flash.css">
    <script type="text/javascript" src="/plugins/PACE/pace.min.js"></script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="/plugins/bootstrap/dist/css/bootstrap.min.css">
    <!-- Fonts-->
    <link rel="stylesheet" type="text/css" href="/plugins/themify-icons/themify-icons.css">
    <!-- Malihu Scrollbar-->
    <link rel="stylesheet" type="text/css" href="/plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css">
    <!-- Summernote-->
    <link rel="stylesheet" type="text/css" href="/plugins/summernote/dist/summernote.css">
    <!-- Animo.js-->
    <link rel="stylesheet" type="text/css" href="/plugins/animo.js/animate-animo.min.css">
    <!-- Flag Icons-->
    <link rel="stylesheet" type="text/css" href="/plugins/flag-icon-css/css/flag-icon.min.css">
    <!-- Bootstrap Progressbar-->
    <link rel="stylesheet" type="text/css" href="/plugins/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
    <!-- Toastr-->
    <link rel="stylesheet" type="text/css" href="/plugins/toastr/toastr.min.css">
    <!-- SpinKit-->
    <link rel="stylesheet" type="text/css" href="/plugins/SpinKit/css/spinners/7-three-bounce.css">
    <!-- Jvector Map-->
    <link rel="stylesheet" type="text/css" href="/plugins/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- DropzoneJS-->
    <link rel="stylesheet" type="text/css" href="/plugins/dropzone/dist/min/dropzone.min.css">
    <!-- Morris Chart-->
    <link rel="stylesheet" type="text/css" href="/plugins/morris.js/morris.css">
    <!-- jQuery Steps-->
    <link rel="stylesheet" type="text/css" href="/plugins/jquery.steps/demo/css/jquery.steps.css">
    <!-- Bootstrap File Input-->
    <link rel="stylesheet" type="text/css" href="/plugins/bootstrap-fileinput/css/fileinput.min.css">
    <!-- DataTables-->
    <link rel="stylesheet" type="text/css" href="/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/plugins/datatables.net-buttons-bs/css/buttons.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/plugins/datatables.net-colreorder-bs/css/colReorder.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/plugins/datatables.net-responsive-bs/css/responsive.bootstrap.min.css">
    <!-- Weather Icons-->
    <link rel="stylesheet" type="text/css" href="/plugins/weather-icons/css/weather-icons-wind.min.css">
    <link rel="stylesheet" type="text/css" href="/plugins/weather-icons/css/weather-icons.min.css">
    <!-- FullCalendar-->
    <link rel="stylesheet" type="text/css" href="/plugins/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="/plugins/fullcalendar/dist/fullcalendar.print.css" media="print">
    <!-- jQuery MiniColors-->
    <link rel="stylesheet" type="text/css" href="/plugins/jquery-minicolors/jquery.minicolors.css">
    <!-- Bootstrap Date Range Picker-->
    <link rel="stylesheet" type="text/css" href="/plugins/bootstrap-daterangepicker/daterangepicker.css">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Primary Style-->
    <link rel="stylesheet" type="text/css" href="/css/third-layout.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body data-sidebar-color="sidebar-light" class="sidebar-light">
<!-- Header start-->
<header>
    <div class="search-bar closed">
        <form>
            <div class="input-group input-group-lg">
                <input type="text" placeholder="Поиск ..." class="form-control"><span class="input-group-btn">
              <button type="button" class="btn btn-default search-bar-toggle"><i class="ti-close"></i></button></span>
            </div>
        </form>
    </div><a href="/admin" class="brand pull-left"><img src="/images/logo/logo-light.png" alt="" width="100"></a><a href="javascript:;" role="button" class="hamburger-menu pull-left"><span></span></a>
    <form class="search-form pull-left hidden-xs">
        <div class="form-group has-feedback mb-0">
            <input type="text" aria-describedby="inputSearchFor" placeholder="Поиск ..." style="width: 200px; margin-top: 15px;" class="form-control rounded"><span aria-hidden="true" class="ti-search form-control-feedback"></span><span id="inputSearchFor" class="sr-only">(default)</span>
        </div>
    </form>
    <ul class="notification-bar list-inline pull-right">
        <li class="visible-xs"><a href="javascript:;" role="button" class="header-icon search-bar-toggle"><i class="ti-search"></i></a></li>
        <li class="visible-lg"><a href="javascript:;" role="button" class="header-icon sidebar-control"><i class="ti-pin-alt"></i></a></li>
        <li class="dropdown"><a id="dropdownMenu1" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle bubble header-icon"><i class="ti-world"></i><span class="badge bg-danger">6</span></a>
            <div aria-labelledby="dropdownMenu1" class="dropdown-menu dropdown-menu-right dm-medium fs-12 animated fadeInDown">
                <h5 class="dropdown-header">You have 6 notifications</h5>
                <ul data-mcs-theme="minimal-dark" class="media-list mCustomScrollbar">
                    <li class="media"><a href="javascript:;">
                            <div class="media-left avatar"><img src="/images/users/17.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                            <div class="media-body">
                                <h6 class="media-heading">William Carlson</h6>
                                <p class="text-muted mb-0">Commented on your post</p>
                            </div>
                            <div class="media-right text-nowrap">
                                <time datetime="2015-12-10T20:27:48+07:00" class="fs-11">5 mins</time>
                            </div></a></li>
                    <li class="media"><a href="javascript:;">
                            <div class="media-left avatar"><img src="/images/users/19.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                            <div class="media-body">
                                <h6 class="media-heading">Barbara Ortega</h6>
                                <p class="text-muted mb-0">Sent you a new email</p>
                            </div>
                            <div class="media-right text-nowrap">
                                <time datetime="2015-12-10T20:42:40+07:00" class="fs-11">8 mins</time>
                            </div></a></li>
                    <li class="media"><a href="javascript:;">
                            <div class="media-left avatar"><img src="/images/users/02.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                            <div class="media-body">
                                <h6 class="media-heading">Mark Barnett</h6>
                                <p class="text-muted mb-0">Sent you a new message</p>
                            </div>
                            <div class="media-right text-nowrap">
                                <time datetime="2015-12-10T20:50:48+07:00" class="fs-11">9 mins</time>
                            </div></a></li>
                    <li class="media"><a href="javascript:;">
                            <div class="media-left avatar"><img src="/images/users/11.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                            <div class="media-body">
                                <h6 class="media-heading">Alexander Gilbert</h6>
                                <p class="text-muted mb-0">Sent you a new email</p>
                            </div>
                            <div class="media-right text-nowrap">
                                <time datetime="2015-12-10T20:42:40+07:00" class="fs-11">15 mins</time>
                            </div></a></li>
                    <li class="media"><a href="javascript:;">
                            <div class="media-left avatar"><img src="/images/users/12.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                            <div class="media-body">
                                <h6 class="media-heading">Amanda Collins</h6>
                                <p class="text-muted mb-0">You have 8 unread messages</p>
                            </div>
                            <div class="media-right text-nowrap">
                                <time datetime="2015-12-10T20:35:35+07:00" class="fs-11">22 mins</time>
                            </div></a></li>
                    <li class="media"><a href="javascript:;">
                            <div class="media-left avatar"><img src="/images/users/13.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                            <div class="media-body">
                                <h6 class="media-heading">Christian Lane</h6>
                                <p class="text-muted mb-0">Commented on your post</p>
                            </div>
                            <div class="media-right text-nowrap">
                                <time datetime="2015-12-10T20:27:48+07:00" class="fs-11">30 mins</time>
                            </div></a></li>
                </ul>
                <div class="dropdown-footer text-center p-10"><a href="javascript:;" class="fw-500 text-muted">See all notifications</a></div>
            </div>
        </li>
        <li class="dropdown visible-lg visible-md"><a id="dropdownMenu2" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle header-icon lh-1 pt-15 pb-15">
                <div class="media mt-0">
                    <div class="media-left avatar"><img src="/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                    <div class="media-right media-middle pl-0">
                        <p class="fs-12 mb-0">Hi, Matthew</p>
                    </div>
                </div></a>
            <ul aria-labelledby="dropdownMenu2" class="dropdown-menu fs-12 animated fadeInDown">
                <li><a href="profile.html"><i class="ti-user mr-5"></i> My Profile</a></li>
                <li><a href="profile.html"><i class="ti-settings mr-5"></i> Account Settings</a></li>
                <li><a href="login-v2.html"><i class="ti-power-off mr-5"></i> Logout</a></li>
            </ul>
        </li>
        <li><a href="javascript:;" role="button" class="right-sidebar-toggle bubble header-icon"><i class="ti-layout-sidebar-right"></i><span class="dot bg-danger"></span></a></li>
    </ul>
</header>
<!-- Header end-->
<div class="main-container">
    <!-- Main Sidebar start-->
    <aside data-mcs-theme="minimal-dark" class="main-sidebar mCustomScrollbar">
        <ul class="list-unstyled navigation mb-0">
            <li class="panel managers customers makers partners"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse5" aria-expanded="false" aria-controls="collapse5" class="collapsed"><i class="ti-id-badge"></i><span class="sidebar-title">Пользователи</span></a>
                <ul id="collapse5" class="list-unstyled collapse">
                    <li><a href="/admin/managers">Список менеджеров</a></li>
                    <li><a href="/admin/customers">Список клиентов</a></li>
                    <li><a href="/admin/makers">Список производителей</a></li>
                    <li><a href="/admin/partners">Список партнеров</a></li>
                </ul>
            </li>
            <li class="panel products categories subcategories product-types"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse6" aria-expanded="false" aria-controls="collapse6" class="collapsed"><i class="ti-package"></i><span class="sidebar-title">Товары</span></a>
                <ul id="collapse6" class="list-unstyled collapse">
                    <li><a href="/admin/products">Все товары</a></li>
                    <li><a href="/admin/categories">Все категории</a></li>
                    <li><a href="/admin/subcategories">Все подкатегории</a></li>
                    <li><a href="/admin/product-types">Типы товаров</a></li>
                </ul>
            </li>
            <li class="panel orders"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse7" aria-expanded="false" aria-controls="collapse7" class="collapsed"><i class="ti-shopping-cart-full"></i><span class="sidebar-title">Заказы</span></a>
                <ul id="collapse7" class="list-unstyled collapse">
                    <li><a href="/admin/orders">Все заказы</a></li>
                </ul>
            </li>
            <li class="panel news articles"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse8" aria-expanded="false" aria-controls="collapse8" class="collapsed"><i class="fa fa-newspaper-o"></i><span class="sidebar-title">Новости и блог</span></a>
                <ul id="collapse8" class="list-unstyled collapse">
                    <li><a href="/admin/news">Все новости</a></li>
                    <li><a href="/admin/articles">Все статьи</a></li>
                    <li><a href="/admin/articles/categories">Категории для статей</a></li>
                </ul>
            </li>
            <li class="panel settings"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse9" aria-expanded="false" aria-controls="collapse9" class="collapsed"><i class="ti-settings"></i><span class="sidebar-title">Настройки</span></a>
                <ul id="collapse9" class="list-unstyled collapse">
                    <li><a href="/admin/settings/general">Общие</a></li>
                    <li><a href="/admin/settings/makers">Производители</a></li>
                    <li><a href="/admin/settings/managers">Менеджеры</a></li>
                    <li><a href="/admin/settings/customers">Клиенты</a></li>
                    <li><a href="/admin/settings/payment_delivery">Способы оплаты и доставки</a></li>
                    <li><a href="/admin/settings/taxes">Налоги</a></li>
                    <li><a href="/admin/settings/notes">Уведомления</a></li>
                    <li><a href="/admin/settings/invoices">Счёт</a></li>
                    <li><a href="/admin/settings/social">Соц. инструменты</a></li>
                    <li><a href="/admin/settings/site">Сайт</a></li>
                </ul>
            </li>
            {{--<li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse10" aria-expanded="false" aria-controls="collapse10" class="collapsed"><i class="ti-layout-grid2"></i><span class="sidebar-title">Чат</span></a>--}}
                {{--<ul id="collapse10" class="list-unstyled collapse">--}}
                    {{--<li><a href="/admin/chats">Чаты</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul>
    </aside>
    <!-- Main Sidebar end-->
    <div class="page-container">
        @yield('content')
    </div>
    <!-- Right Sidebar start-->
    <aside class="right-sidebar closed">
        <ul role="tablist" class="nav nav-tabs nav-justified nav-sidebar">
            <li role="presentation" class="active"><a href="#chat" aria-controls="chat" role="tab" data-toggle="tab"><i class="ti-comment-alt"></i></a></li>
            <li role="presentation"><a href="#announcement" aria-controls="announcement" role="tab" data-toggle="tab"><i class="ti-announcement"></i></a></li>
            <li role="presentation"><a href="#ticket" aria-controls="ticket" role="tab" data-toggle="tab"><i class="ti-bookmark-alt"></i></a></li>
            <li role="presentation"><a href="#setting" aria-controls="setting" role="tab" data-toggle="tab"><i class="ti-settings"></i></a></li>
        </ul>
        <div data-mcs-theme="minimal-dark" class="tab-content nav-sidebar-content mCustomScrollbar">
            <div id="chat" role="tabpanel" class="tab-pane fade in active">
                <form>
                    <div class="form-group has-feedback">
                        <input type="text" aria-describedby="inputChatSearch" placeholder="Chat with..." class="form-control rounded"><span aria-hidden="true" class="ti-search form-control-feedback"></span><span id="inputChatSearch" class="sr-only">(default)</span>
                    </div>
                </form>
                <ul class="chat-list mb-0 fs-12 media-list">
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="/images/users/20.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                            <div class="media-body">
                                <h6 class="media-heading">Jane Curtis</h6>
                                <p class="text-muted mb-0">Where are you from?</p>
                            </div>
                            <div class="media-right"><span class="badge bg-danger">2</span></div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="/images/users/01.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                            <div class="media-body">
                                <h6 class="media-heading">Edward Garcia</h6>
                                <p class="text-muted mb-0">Nice to meet you.</p>
                            </div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="/images/users/02.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                            <div class="media-body">
                                <h6 class="media-heading">Bruce Olson</h6>
                                <p class="text-muted mb-0">What do you want to do?</p>
                            </div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="/images/users/03.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                            <div class="media-body">
                                <h6 class="media-heading">Martha Rodriguez</h6>
                                <p class="text-muted mb-0">I'm hungry.</p>
                            </div>
                            <div class="media-right"><span class="badge bg-danger">1</span></div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="/images/users/05.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                            <div class="media-body">
                                <h6 class="media-heading">Hannah Williamson</h6>
                                <p class="text-muted mb-0">Do you know the address?</p>
                            </div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="/images/users/06.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                            <div class="media-body">
                                <h6 class="media-heading">Anthony Mills</h6>
                                <p class="text-muted mb-0">No problem.</p>
                            </div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="/images/users/07.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                            <div class="media-body">
                                <h6 class="media-heading">Ethan Stanley</h6>
                                <p class="text-muted mb-0">Hello?</p>
                            </div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="/images/users/08.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                            <div class="media-body">
                                <h6 class="media-heading">Jonathan Castro</h6>
                                <p class="text-muted mb-0">OK. Thanks.</p>
                            </div>
                            <div class="media-right"><span class="badge bg-danger">1</span></div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="/images/users/09.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                            <div class="media-body">
                                <h6 class="media-heading">Denise Rose</h6>
                                <p class="text-muted mb-0">Bye bye.</p>
                            </div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="/images/users/10.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                            <div class="media-body">
                                <h6 class="media-heading">Eugene Meyer</h6>
                                <p class="text-muted mb-0">How are you?</p>
                            </div></a></li>
                </ul>
            </div>
            <div id="announcement" role="tabpanel" class="tab-pane fade">
                <ul class="media-list mb-0 fs-12">
                    <li class="media">
                        <div class="media-left"><i class="ti-bar-chart-alt media-object mo-xs img-circle bg-primary text-center"></i></div>
                        <div class="media-body">
                            <h6 class="media-heading">Market Trend Data</h6>
                            <p class="text-muted mb-0">Mattis nam fringilla dui nostra, ad fames fusce venenatis massa.</p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="ti-package media-object mo-xs img-circle bg-success text-center"></i></div>
                        <div class="media-body">
                            <h6 class="media-heading">Change Your Password!</h6>
                            <p class="text-muted mb-0">Varius dolor condimentum hendrerit eleifend est urna neque fames faucibus?</p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="ti-gift media-object mo-xs img-circle bg-warning text-center"></i></div>
                        <div class="media-body">
                            <h6 class="media-heading">We Apologize</h6>
                            <p class="text-muted mb-0">Justo at mauris ridiculus conubia penatibus dis varius proin porttitor!</p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="ti-harddrives media-object mo-xs img-circle bg-info text-center"></i></div>
                        <div class="media-body">
                            <h6 class="media-heading">Content Policy Update</h6>
                            <p class="text-muted mb-0">Quis ante imperdiet a volutpat quam tellus condimentum blandit elementum.</p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="ti-mobile media-object mo-xs img-circle bg-purple text-center"></i></div>
                        <div class="media-body">
                            <h6 class="media-heading">Mobile Apps</h6>
                            <p class="text-muted mb-0">Ad iaculis at feugiat integer lobortis vivamus hac egestas venenatis.</p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="ti-alarm-clock media-object mo-xs img-circle bg-danger text-center"></i></div>
                        <div class="media-body">
                            <h6 class="media-heading">New Features</h6>
                            <p class="text-muted mb-0">Primis elementum facilisi tristique faucibus feugiat enim rutrum id himenaeos.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="ticket" role="tabpanel" class="tab-pane fade">
                <form>
                    <div class="form-group">
                        <input type="text" placeholder="Username" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Subject" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea rows="6" placeholder="Description" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-block btn-success">Create Ticket</button>
                </form>
            </div>
            <div id="setting" role="tabpanel" class="tab-pane fade">
                <form class="form-horizontal fs-12">
                    <div class="clearfix">
                        <h6 class="pull-left">Maintenance Mode</h6>
                        <div class="switch pull-right">
                            <input id="setting-1" type="checkbox" checked="">
                            <label for="setting-1" class="switch-success"></label>
                        </div>
                    </div>
                    <p class="text-muted">Ipsum non tempor non nullam nisi congue nisi amet enim.</p>
                    <div class="clearfix">
                        <h6 class="pull-left">Location Services</h6>
                        <div class="switch pull-right">
                            <input id="setting-2" type="checkbox" checked="">
                            <label for="setting-2" class="switch-success"></label>
                        </div>
                    </div>
                    <p class="text-muted">Eleifend suscipit erat cursus viverra commodo nostra sit commodo mollis.</p>
                    <div class="clearfix">
                        <h6 class="pull-left">Display Errors</h6>
                        <div class="switch pull-right">
                            <input id="setting-3" type="checkbox" checked="">
                            <label for="setting-3" class="switch-success"></label>
                        </div>
                    </div>
                    <p class="text-muted">Amet per tortor adipiscing risus dolor orci diam curabitur senectus.</p>
                    <div class="clearfix">
                        <h6 class="pull-left">Use SEO URLs</h6>
                        <div class="switch pull-right">
                            <input id="setting-4" type="checkbox" checked="">
                            <label for="setting-4" class="switch-success"></label>
                        </div>
                    </div>
                    <p class="text-muted">Ullamcorper dignissim facilisis fames proin a leo diam amet urna.</p>
                    <div class="clearfix">
                        <h6 class="pull-left">Enable History</h6>
                        <div class="switch pull-right">
                            <input id="setting-5" type="checkbox" checked="">
                            <label for="setting-5" class="switch-success"></label>
                        </div>
                    </div>
                    <p class="text-muted">Consectetur cubilia varius vulputate fermentum non dolor cubilia torquent risus.</p>
                </form>
            </div>
        </div>
    </aside>
    <aside class="conversation closed">
        <h5 class="text-center m-0 p-20">Edward Garcia<a href="javascript:;" class="conversation-toggle pull-left"><i class="ti-arrow-left text-muted"></i></a><a href="javascript:;" class="pull-right"><i class="ti-pencil text-muted"></i></a></h5>
        <ul data-mcs-theme="minimal-dark" class="media-list chat-content fs-12 pl-20 pr-20 mCustomScrollbar">
            <li class="media">
                <div class="media-left avatar"><img src="/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                <div class="media-body">
                    <p>Hello.</p>
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">09:45 PM <i class="ti-check text-success"></i></time>
                </div>
            </li>
            <li class="media other">
                <div class="media-body">
                    <p>Hi.</p>
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">09:46 PM <i class="ti-check text-success"></i></time>
                </div>
                <div class="media-right avatar"><img src="/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            </li>
            <li class="media">
                <div class="media-left avatar"><img src="/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                <div class="media-body">
                    <p>How are you?</p>
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">09:47 PM <i class="ti-check text-success"></i></time>
                </div>
            </li>
            <li class="media other">
                <div class="media-body">
                    <p>I'm good. How are you?</p>
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">09:50 PM <i class="ti-check text-success"></i></time>
                </div>
                <div class="media-right avatar"><img src="/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            </li>
            <li class="media">
                <div class="media-left avatar"><img src="/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                <div class="media-body">
                    <p>Good. Do you speak English?</p>
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">09:55 PM <i class="ti-check text-success"></i></time>
                </div>
            </li>
            <li class="media other">
                <div class="media-body">
                    <p>A little. Are you American?</p>
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">09:56 PM <i class="ti-check text-success"></i></time>
                </div>
                <div class="media-right avatar"><img src="/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            </li>
            <li class="media">
                <div class="media-left avatar"><img src="/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                <div class="media-body">
                    <p>Yes.</p>
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">10:00 PM <i class="ti-check text-success"></i></time>
                </div>
            </li>
            <li class="media other">
                <div class="media-body">
                    <p>Where are you from?</p>
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">10:01 PM <i class="ti-check text-success"></i></time>
                </div>
                <div class="media-right avatar"><img src="/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            </li>
            <li class="media">
                <div class="media-left avatar"><img src="/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                <div class="media-body">
                    <p>I'm from California.</p>
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">10:03 PM <i class="ti-check text-success"></i></time>
                </div>
            </li>
            <li class="media other">
                <div class="media-body">
                    <p>Nice to meet you.</p>
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">10:04 PM <i class="ti-check text-success"></i></time>
                </div>
                <div class="media-right avatar"><img src="/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            </li>
            <li class="media">
                <div class="media-left avatar"><img src="/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                <div class="media-body">
                    <p>Nice to meet you too.</p>
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">10:05 PM <i class="ti-check text-success"></i></time>
                </div>
            </li>
        </ul>
        <form class="pl-20 pr-20">
            <div class="form-group has-feedback mb-0">
                <input type="text" aria-describedby="inputSendMessage" placeholder="Sent a message" class="form-control rounded"><span aria-hidden="true" class="ti-pencil-alt form-control-feedback"></span><span id="inputSendMessage" class="sr-only">(default)</span>
            </div>
        </form>
    </aside>
    <!-- Right Sidebar end-->
</div>
<!-- Demo Settings start-->
{{--<div class="setting closed">--}}
    {{--<a href="javascript:;" class="setting-toggle fs-16"><i class="ti-palette text-muted"></i></a>--}}
    {{--<h5 class="fs-16 mt-0 mb-20">Header Colors</h5>--}}
    {{--<ul class="list-inline">--}}
        {{--<li><a href="javascript:;" data-color="header-primary" class="mo-xs bg-primary inline-block img-circle header-color"></a></li>--}}
        {{--<li><a href="javascript:;" data-color="header-green" class="mo-xs bg-success inline-block img-circle header-color"></a></li>--}}
        {{--<li><a href="javascript:;" data-color="header-purple" class="mo-xs bg-purple inline-block img-circle header-color"></a></li>--}}
        {{--<li><a href="javascript:;" data-color="header-yellow" class="mo-xs bg-warning inline-block img-circle header-color"></a></li>--}}
        {{--<li><a href="javascript:;" data-color="header-red" class="mo-xs bg-danger inline-block img-circle header-color"></a></li>--}}
    {{--</ul>--}}
    {{--<h5 class="fs-16 mt-0 mb-20">Sidebar Style</h5>--}}
    {{--<ul class="list-inline">--}}
        {{--<li><a href="javascript:;" data-color="sidebar-dark" class="sidebar-color mo-xs bg-black inline-block img-circle"></a></li>--}}
        {{--<li><a href="javascript:;" data-color="sidebar-light" class="sidebar-color mo-xs bg-default inline-block img-circle"></a></li>--}}
    {{--</ul>--}}
    {{--<form class="form-horizontal mb-20">--}}
        {{--<div class="clearfix">--}}
            {{--<p class="form-control-static pull-left">Background Image</p>--}}
            {{--<div class="switch pull-right">--}}
                {{--<input id="sidebar-bg" type="checkbox" checked="">--}}
                {{--<label for="sidebar-bg" class="switch-success"></label>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</form>--}}
    {{--<ul class="list-inline mb-0">--}}
        {{--<li><a href="javascript:;" data-bg="10.jpg" class="inline-block sidebar-bg"><img src="/images/thumbnails/10.jpg" width="60" alt="" class="img-rounded"></a></li>--}}
        {{--<li><a href="javascript:;" data-bg="11.jpg" class="inline-block sidebar-bg"><img src="/images/thumbnails/11.jpg" width="60" alt="" class="img-rounded"></a></li>--}}
        {{--<li><a href="javascript:;" data-bg="12.jpg" class="inline-block sidebar-bg"><img src="/images/thumbnails/12.jpg" width="60" alt="" class="img-rounded"></a></li>--}}
    {{--</ul>--}}
{{--</div>--}}
<!-- Demo Settings end-->
<!-- jQuery-->
<script type="text/javascript" src="/plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap JavaScript-->
<script type="text/javascript" src="/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Malihu Scrollbar-->
<script type="text/javascript" src="/plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Animo.js-->
<script type="text/javascript" src="/plugins/animo.js/animo.min.js"></script>
<!-- Bootstrap Progressbar-->
<script type="text/javascript" src="/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- jQuery Easy Pie Chart-->
<script type="text/javascript" src="/plugins/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<!-- Toastr-->
<script type="text/javascript" src="/plugins/toastr/toastr.min.js"></script>
<!-- MomentJS-->
<script type="text/javascript" src="/plugins/moment/min/moment.min.js"></script>
<!-- jQuery BlockUI-->
<script type="text/javascript" src="/plugins/blockUI/jquery.blockUI.js"></script>
<!-- jQuery Counter Up-->
<script type="text/javascript" src="/plugins/jquery-waypoints/waypoints.min.js"></script>
<script type="text/javascript" src="/plugins/Counter-Up/jquery.counterup.min.js"></script>
<!-- Jvector Map-->
<script type="text/javascript" src="/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script type="text/javascript" src="/plugins/jvectormap/maps/jquery-jvectormap-world-mill.js"></script>
<!-- Flot Charts-->
<!--[if lte IE 8]>
<script type="text/javascript" src="https://raw.githubusercontent.com/flot/flot/master/excanvas.min.js"></script>
<![endif]-->
<script type="text/javascript" src="/plugins/flot/jquery.flot.js"></script>
<script type="text/javascript" src="/plugins/flot/jquery.flot.resize.js"></script>
<script type="text/javascript" src="/plugins/flot.curvedlines/curvedLines.js"></script>
<script type="text/javascript" src="/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<!-- Morris Chart-->
<script type="text/javascript" src="/plugins/raphael/raphael-min.js"></script>
<script type="text/javascript" src="/plugins/morris.js/morris.min.js"></script>
<!-- DataTables-->
<script type="text/javascript" src="/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="/plugins/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script type="text/javascript" src="/plugins/jszip/dist/jszip.min.js"></script>
{{--<!-- Google maps-->--}}
{{--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=weather"></script>--}}
<script type="text/javascript" src="/plugins/pdfmake/build/pdfmake.min.js"></script>
<script type="text/javascript" src="/plugins/pdfmake/build/vfs_fonts.js"></script>
<script type="text/javascript" src="/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
<script type="text/javascript" src="/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="/plugins/datatables.net-colreorder/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="/plugins/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<!-- jQuery UI-->
<script type="text/javascript" src="/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- jQuery Steps-->
<script type="text/javascript" src="/plugins/jquery.steps/build/jquery.steps.min.js"></script>
<!-- Summernote-->
<script type="text/javascript" src="/plugins/summernote/dist/summernote.min.js"></script>
<!-- FullCalendar-->
<script type="text/javascript" src="/plugins/fullcalendar/dist/fullcalendar.min.js"></script>
<!-- jQuery MiniColors-->
<script type="text/javascript" src="/plugins/jquery-minicolors/jquery.minicolors.min.js"></script>
<!-- Bootstrap Date Range Picker-->
<script type="text/javascript" src="/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- DropzoneJS-->
<script type="text/javascript" src="/plugins/dropzone/dist/min/dropzone.min.js"></script>
<!-- Chart.js-->
<script type="text/javascript" src="/plugins/Chart.js/Chart.min.js"></script>
<!-- Bootstrap File Input-->
<script type="text/javascript" src="/plugins/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js"></script>
<script type="text/javascript" src="/plugins/bootstrap-fileinput/js/fileinput.min.js"></script>
<!-- CKEditor-->
<script type="text/javascript" src="/plugins/bootstrapck4-skin/ckeditor.js"></script>
<!-- Code Prettify-->
<script type="text/javascript" src="/plugins/code-prettify/src/run_prettify.js?skin=default"></script>
<script type="text/javascript" src="/plugins/code-prettify/src/lang-css.js"></script>
<script type="text/javascript" src="/plugins/code-prettify/src/lang-sql.js"></script>
<script type="text/javascript" src="/plugins/code-prettify/src/lang-vb.js"></script>
<!-- Custom JS-->
<script type="text/javascript" src="/js/third-layout/app.js"></script>
<script type="text/javascript" src="/js/third-layout/demo.js"></script>
@yield('script')
</body>
</html>