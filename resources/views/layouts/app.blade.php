<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>




    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet"> -->

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

    <!--STYLESHEET-->
    <!--=================================================-->
    <!--Roboto Slab Font [ OPTIONAL ] -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400"
        rel="stylesheet">
    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/multiselect/multi-select.css') }}" rel="stylesheet">
    <!--Jasmine Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">


    <!--Font Awesome [ OPTIONAL ]-->
    <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!--Switchery [ OPTIONAL ]-->
    <link href="{{ asset('plugins/switchery/switchery.min.css') }}" rel="stylesheet">
    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="{{ asset('plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet">
    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{ asset('css/demo/jasmine.css') }}" rel="stylesheet">
    <!--Bootstrap Validator [ OPTIONAL ]-->
    <link href="{{ asset('plugins/bootstrap-validator/bootstrapValidator.min.css') }}" rel="stylesheet">
    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{ asset('css/demo/jquery-steps.min.css') }}" rel="stylesheet">
    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{ asset('css/demo/jasmine.css') }}" rel="stylesheet">
    <!--SCRIPT-->
    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="{{ asset('plugins/pace/pace.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/new.css') }}" rel="stylesheet">

    <!--Bootstrap Table [ OPTIONAL ]-->
    <link href="{{ asset('plugins/datatables/media/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/datatables/extensions/Responsive/css/dataTables.responsive.css') }}" rel="stylesheet">





    <!--SCRIPT-->
    <!--=================================================-->
    {{-- <script src="{{ asset('plugins/pace/pace.min.js') }}"></script> --}}




    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    {{-- <script src="https://use.fontawesome.com/9712be8772.js"></script> --}}


</head>

<body>
    <div id="container" class="effect mainnav-full">
        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">
                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand">
                        <i class="fa fa-cube brand-icon"></i>
                        <div class="brand-title">
                            <span class="brand-text">BusinessMS</span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->
                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content clearfix">
                    <ul class="nav navbar-top-links pull-left">
                        <!--Messages Dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                <i class="fa fa-envelope fa-lg"></i>
                                <span class="badge badge-header badge-warning">9</span>
                            </a>
                            <!--Message dropdown menu-->
                            <div class="dropdown-menu dropdown-menu-md with-arrow">
                                <div class="pad-all bord-btm">
                                    <div class="h4 text-muted text-thin mar-no">You have 3 messages.</div>
                                </div>
                                <div class="nano scrollable">
                                    <div class="nano-content">
                                        <ul class="head-list">
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">

                                                    <div class="media-left">
                                                        <img src="{{ asset('img/av2.png')}}" alt="Profile Picture"
                                                            class="img-circle img-sm">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Andy sent you a message</div>
                                                        <small class="text-muted">15 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <img src="{{ asset('img/av4.png')}}" alt="Profile Picture"
                                                            class="img-circle img-sm">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Lucy sent you a message</div>
                                                        <small class="text-muted">30 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <img src="{{ asset('img/av3.png')}}" alt="Profile Picture"
                                                            class="img-circle img-sm">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Jackson sent you a message</div>
                                                        <small class="text-muted">40 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <img src="{{ asset('img/av6.png')}}" alt="Profile Picture"
                                                            class="img-circle img-sm">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Donna sent you a message</div>
                                                        <small class="text-muted">5 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <img src="{{ asset('img/av4.png')}}" alt="Profile Picture"
                                                            class="img-circle img-sm">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Lucy sent you a message</div>
                                                        <small class="text-muted">Yesterday</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <img src="{{ asset('img/av3.png')}}" alt="Profile Picture"
                                                            class="img-circle img-sm">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Jackson sent you a message</div>
                                                        <small class="text-muted">Yesterday</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Dropdown footer-->
                                <div class="pad-all bord-top">
                                    <a href="#" class="btn-link text-dark box-block">
                                        <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Messages
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End message dropdown-->
                        <!--Notification dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="fa fa-bell fa-lg"></i>
                                <span class="badge badge-header badge-danger">5</span> </a>
                            <!--Notification dropdown menu-->
                            <div class="dropdown-menu dropdown-menu-md with-arrow">
                                <div class="pad-all bord-btm">
                                    <div class="h4 text-muted text-thin mar-no"> Notification </div>
                                </div>
                                <div class="nano scrollable">
                                    <div class="nano-content">
                                        <ul class="head-list">
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left"> <span
                                                            class="icon-wrap icon-circle bg-primary"> <i
                                                                class="fa fa-comment fa-lg"></i> </span> </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">New comments waiting approval</div>
                                                        <small class="text-muted">15 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <span class="badge badge-success pull-right">90%</span>
                                                    <div class="media-left"> <span
                                                            class="icon-wrap icon-circle bg-danger"> <i
                                                                class="fa fa-hdd-o fa-lg"></i> </span> </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">HDD is full</div>
                                                        <small class="text-muted">50 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left"> <span
                                                            class="icon-wrap icon-circle bg-info"> <i
                                                                class="fa fa-file-word-o fa-lg"></i> </span> </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Write a news article</div>
                                                        <small class="text-muted">Last Update 8 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <span class="label label-danger pull-right">New</span>
                                                    <div class="media-left"> <span
                                                            class="icon-wrap icon-circle bg-purple"> <i
                                                                class="fa fa-comment fa-lg"></i> </span> </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Comment Sorting</div>
                                                        <small class="text-muted">Last Update 8 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left"> <span
                                                            class="icon-wrap icon-circle bg-success"> <i
                                                                class="fa fa-user fa-lg"></i> </span> </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">New User Registered</div>
                                                        <small class="text-muted">4 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Dropdown footer-->
                                <div class="pad-all bord-top">
                                    <a href="#" class="btn-link text-dark box-block"> <i
                                            class="fa fa-angle-right fa-lg pull-right"></i>Show All Notifications </a>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End notifications dropdown-->
                    </ul>
                    <ul class="nav navbar-top-links pull-right">
                        <!--Profile toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="hidden-xs" id="toggleFullscreen">
                            <a class="fa fa-expand" data-toggle="fullscreen" href="#" role="button">
                                <span class="sr-only">Toggle fullscreen</span>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Profile toogle button-->
                        <!--User dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <!-- <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            @role('Admin') {{-- Laravel-permission blade helper --}}
                                                <a href="{{ route('users.index') }}"><i class="fa fa-btn fa-unlock"></i>Admin</a>
                                            @endrole
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li> -->

                        <li id="dropdown-user" class="dropdown">

                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="pull-right"> <img class="img-circle img-user media-object"
                                        src="{{ asset('img/av1.png')}}" alt="Profile Picture"> </span>
                                <div class="username hidden-xs">{{ Auth::user()->name }}</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right with-arrow">
                                <!-- User dropdown menu -->
                                <ul class="head-list">
                                    <li>
                                        <a href="#"> <i class="fa fa-user fa-fw"></i> Profile </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-envelope fa-fw"></i> Messages </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-gear fa-fw"></i> Settings </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();"> <i
                                                class="fa fa-sign-out fa-fw"></i> Logout </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <!-- <li>
                                            @role('Admin') {{-- Laravel-permission blade helper --}}
                                                <a href="{{ route('users.index') }}"><i class="fa fa-btn fa-unlock"></i>Admin</a>
                                            @endrole
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li> -->
                                </ul>
                            </div>
                        </li>
                        @endif

                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End user dropdown-->
                    </ul>
                </div>
                <!--End Navbar Dropdown-->
                @if (!Auth::guest())
                <nav class="navbar navbar-default megamenu">
                    <div class="navbar-header">
                        <button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle">
                            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- end navbar-header -->
                    <div id="defaultmenu" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <!-- standard drop down -->
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Dashboard </a>
                                <!-- <ul class="dropdown-menu" role="menu">
                                        <li><a href="index.html">Dashboard V1 </a></li>
                                        <li><a href="dashboard-v2.html">Dashboard V2 </a></li>
                                    </ul> -->
                                <!-- end dropdown-menu -->
                            </li>
                            <!-- end standard drop down -->
                            <!-- standard drop down -->
                            @if(Auth::user()->hasPermissionTo('Supper Permission'))

                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Users<b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{route('users.index')}}"> User List</a></li>
                                    <li><a href="{{route('roles.index')}}"> User Role </a></li>
                                    <li><a href="{{route('permissions.index')}}">User Permissions </a></li>
                                </ul>
                                <!-- end dropdown-menu -->
                            </li>
                            @endif

                            <!-- end standard drop down -->
                            <!-- standard drop down -->
                            @if(Auth::user()->hasPermissionTo('Income Management'))

                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Income <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    @if(Auth::user()->hasPermissionTo('Supper Permission'))
                                    <li><a href="#"> Sales Order </a></li>
                                    <li><a href="#">Invoices </a></li>
                                    <li><a href="#"> Quotation </a></li>
                                    <li><a href="#">Customers </a></li>
                                    @endif
                                    <li><a href="#"> leads </a></li>
                                </ul>
                                <!-- end dropdown-menu -->
                            </li>
                            @endif

                            <!-- end standard drop down -->

                            <!-- standard drop down -->
                            @if(Auth::user()->hasPermissionTo('Employee Management'))

                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Employees <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{route('employees.index')}}"> Manage Employees </a></li>
                                    <li><a href="{{route('attendances.index')}}">Attendance </a></li>
                                    <li><a href="{{route('departments.index')}}"> Employee Department </a></li>
                                    <li><a href="{{route('designations.index')}}">Employee Designation </a></li>
                                    <li><a href="{{route('leaves.index')}}"> Leave Type </a></li>
                                    <li><a href="{{route('paydeads.index')}}"> Payheads </a></li>
                                </ul>
                                <!-- end dropdown-menu -->
                            </li>
                            @endif

                            <!-- end standard drop down -->
                            <!-- standard drop down -->
                            @if(Auth::user()->hasPermissionTo('Expense Management'))
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Expense <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    @if(Auth::user()->hasPermissionTo('Supper Permission'))

                                    <li><a href="#"> Purchase Order </a></li>
                                    <li><a href="#"> Invoices </a></li>
                                    <li><a href="#"> Quotation </a></li>
                                    <li><a href="#"> Vendors</a></li>
                                    @endif
                                </ul>
                                <!-- end dropdown-menu -->
                            </li>
                            @endif
                            <!-- end standard drop down -->
                            <!-- standard drop down -->
                            @if(Auth::user()->hasPermissionTo('Project Management'))
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Projects <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{route('projects.index')}}"> Manage Projects </a></li>
                                    <li><a href="#"> Manage Task </a></li>
                                </ul>
                                <!-- end dropdown-menu -->
                            </li>
                            @endif
                            <!-- end standard drop down -->
                            <!-- standard drop down -->
                            @if(Auth::user()->hasPermissionTo('Banking Management'))
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Banking <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"> Accounts </a></li>
                                    <li><a href="#"> Transfer </a></li>
                                    <li><a href="#"> Statement </a></li>
                                    <li><a href="#"> Trial Balance </a></li>
                                    <li><a href="#"> Deposits </a></li>
                                    <li><a href="#"> Withdrawl </a></li>
                                </ul>
                                <!-- end dropdown-menu -->
                            </li>
                            @endif

                            <!-- end standard drop down -->
                            <!-- standard drop down -->
                            @if(Auth::user()->hasPermissionTo('Interactions'))
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Interactions <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"> Support Forum </a></li>
                                    <li><a href="#"> Bug Tracker </a></li>
                                    <li><a href="#"> Mail Recipient </a></li>
                                </ul>
                                <!-- end dropdown-menu -->
                            </li>
                            @endif

                            <!-- end standard drop down -->
                            <!-- standard drop down -->
                            @if(Auth::user()->hasPermissionTo('Inventory Management'))

                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Inventory <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"> Category </a></li>
                                    <li><a href="#">Items in queue for validation </a></li>
                                    <li><a href="#"> Items </a></li>
                                    <li><a href="#">Manages Stock </a></li>
                                    <li><a href="#"> Assets </a></li>
                                </ul>
                                <!-- end dropdown-menu -->
                            </li>
                            @endif

                            <!-- end standard drop down -->
                            <!-- standard drop down -->
                            @if(Auth::user()->hasPermissionTo('Reports'))
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Reports <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"> Calender View </a></li>
                                    <li><a href="#">Stats </a></li>
                                </ul>
                                <!-- end dropdown-menu -->
                            </li>
                            @endif
                            <!-- end standard drop down -->
                            <!-- standard drop down -->
                            @if(Auth::user()->hasPermissionTo('Settings'))

                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Settings <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">User Profile</a></li>
                                    <li><a href="#">Activity Log</a></li>

                                    @if(Auth::user()->hasPermissionTo('Supper Permission'))

                                    <li><a href="#">Configuaration</a></li>
                                    <li><a href="#">Email Templates</a></li>

                                    <li><a href="#">Transactions</a></li>
                                    <li><a href="#">Transaction Mode</a></li>
                                    <li class="dropdown-submenu">
                                        <a href="#">Import/Export</a>
                                        <ul class="dropdown-menu">
                                            <!-- <li class="dropdown-submenu">
                                                    <a href="#">Third Level</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Import Schedule Task</a></li>
                                                        <li><a href="#">Export Schedule task</a></li>
                                                    </ul>
                                                </li> -->
                                            <!-- end dropdown-submenu -->
                                            <li><a href="#">Import Schedule Task</a></li>
                                            <li><a href="#">Export Schedule task</a></li>
                                        </ul>
                                        <!-- end dropdown-menu -->
                                    </li>
                                    <li><a href="#">Tax</a></li>
                                    <li><a href="#">Discount</a></li>
                                    <li><a href="#">Widget Listing</a></li>

                                    @endif
                                </ul>
                                <!-- end dropdown-menu -->
                            </li>
                            @endif
                            <!-- end standard drop down -->
                        </ul>
                        <!-- end nav navbar-nav -->
                    </div>
                    <!-- end #navbar-collapse-1 -->
                </nav>
                @endif
                <!-- end navbar navbar-default megamenu -->
            </div>
        </header>

        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">
            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <!-- <div id="profilebody">
                        <div class="pad-all animated fadeInDown">
                            <div class="row">
                                <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                                    <div class="panel panel-default mar-no">
                                        <div class="panel-body">
                                            <a href="JavaScript:void(0);">
                                                <div class="pull-left">
                                                    <p class="profile-title text-bricky">Users</p>
                                                </div>
                                                <div class="pull-right text-bricky"> <i class="fa fa-users fa-4x"></i> </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                                    <div class="panel panel-default mar-no">
                                        <div class="panel-body">
                                            <a href="JavaScript:void(0);">
                                                <div class="pull-left">
                                                    <p class="profile-title text-bricky">Inbox</p>
                                                </div>
                                                <div class="pull-right text-bricky"> <i class="fa fa-envelope fa-4x"></i> </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                                    <div class="panel panel-default mar-no">
                                        <div class="panel-body">
                                            <a href="JavaScript:void(0);">
                                                <div class="pull-left">
                                                    <p class="profile-title text-bricky">FAQ</p>
                                                </div>
                                                <div class="pull-right text-bricky"> <i class="fa fa-headphones fa-4x"></i> </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                                    <div class="panel panel-default mar-no">
                                        <div class="panel-body">
                                            <a href="JavaScript:void(0);">
                                                <div class="pull-left">
                                                    <p class="profile-title text-bricky">Settings</p>
                                                </div>
                                                <div class="pull-right text-bricky"> <i class="fa fa-cogs fa-4x"></i> </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                                    <div class="panel panel-default mar-no">
                                        <div class="panel-body">
                                            <a href="JavaScript:void(0);">
                                                <div class="pull-left">
                                                    <p class="profile-title text-bricky">Calender</p>
                                                </div>
                                                <div class="pull-right text-bricky"> <i class="fa fa-calendar fa-4x"></i> </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                                    <div class="panel panel-default mar-no">
                                        <div class="panel-body">
                                            <a href="JavaScript:void(0);">
                                                <div class="pull-left">
                                                    <p class="profile-title text-bricky">Pictures</p>
                                                </div>
                                                <div class="pull-right text-bricky"> <i class="fa fa-picture-o fa-4x"></i> </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!-- <div class="pageheader">
                        <h3><i class="fa fa-home"></i> Dashboard </h3>
                        <div class="breadcrumb-wrapper">
                            <span class="label">You are here:</span>
                            <ol class="breadcrumb">
                                <li class="active"> Dashboard </li>
                            </ol>
                        </div>
                    </div> -->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    <div class="container body_content">
                        @if(Session::has('flash_message'))
                        <div class="container">
                            <div class="alert alert-success"><em> {!! session('flash_message') !!}</em>
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                @include ('errors.list') {{-- Including error file --}}
                            </div>
                        </div>

                        @yield('content')
                    </div>

                </div>
                <!--===================================================-->
                <!--End page content-->
            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->
        </div>

        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">
            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- <div class="show-fixed pull-right">
                    <ul class="footer-list list-inline">
                        <li>
                            <p class="text-sm">SEO Proggres</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                            </div>
                        </li>
                        <li>
                            <p class="text-sm">Online Tutorial</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                            </div>
                        </li>
                        <li>
                            <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                        </li>
                    </ul>
                </div> -->
            <!-- Visible when footer positions are static -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">Currently v2.2</div>
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <p class="pad-lft">&#0169; 2015 Your Company</p>
        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->
        <!-- SCROLL TOP BUTTON -->
        <!--===================================================-->
        <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
        <!--===================================================-->
    </div>

    <!-- Scripts -->
    <!--===================================================-->
    <!-- END OF CONTAINER -->
    <!--JAVASCRIPT-->
    <!--=================================================-->
    <!--jQuery [ REQUIRED ]-->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script> -->
    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    {{-- <script src="{{ asset('js/default.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/iframe.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/scripts.js') }}"></script> --}}

    <script src="{{ asset('js/inject.js') }}"></script>


  <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <!--Fast Click [ OPTIONAL ]-->
    <script src="{{ asset('plugins/fast-click/fastclick.min.js') }}"></script>
    <!--Jquery Nano Scroller js [ REQUIRED ]-->
    <script src="{{ asset('plugins/nanoscrollerjs/jquery.nanoscroller.min.js') }}"></script>
    <!--Metismenu js [ REQUIRED ]-->
    <script src="{{ asset('plugins/metismenu/metismenu.min.js') }}"></script>
    <!--Jasmine Admin [ RECOMMENDED ]-->
    <!--Switchery [ OPTIONAL ]-->
    <script src="{{ asset('plugins/switchery/switchery.min.js') }}"></script>
    <!--Jquery Steps [ OPTIONAL ]-->
    <script src="{{ asset('plugins/parsley/parsley.min.js') }}"></script>
    <!--Jquery Steps [ OPTIONAL ]-->
    <script src="{{ asset('plugins/jquery-steps/jquery-steps.min.js') }}"></script>
    <!--Bootstrap Select [ OPTIONAL ]-->
    <script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <!--Bootstrap Wizard [ OPTIONAL ]-->
    <script src="{{ asset('plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
    <!--Masked Input [ OPTIONAL ]-->
    <script src="{{ asset('plugins/masked-input/bootstrap-inputmask.min.js') }}"></script>
    <!--Bootstrap Validator [ OPTIONAL ]-->
    <script src="{{ asset('plugins/bootstrap-validator/bootstrapValidator.min.js') }}"></script>
    <!--Flot Chart [ OPTIONAL ]-->
    <script src="{{ asset('plugins/flot-charts/jquery.flot.min.js') }}"></script>
    <script src="{{ asset('plugins/flot-charts/jquery.flot.resize.min.js') }}"></script>
    <script src="{{ asset('plugins/flot-charts/jquery.flot.spline.js') }}"></script>
    <script src="{{ asset('js/moment.js') }}"></script>
    <script src="{{ asset('plugins/moment-range/moment-range.js') }}"></script>
    <script src="{{ asset('plugins/flot-charts/jquery.flot.tooltip.min.js') }}"></script>
    <!--Flot Order Bars Chart [ OPTIONAL ]-->
    <script src="{{ asset('plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <!--Morris.js [ OPTIONAL ]-->
    <script src="{{ asset('plugins/morris-js/morris.min.js') }}"></script>
    <script src="{{ asset('plugins/morris-js/raphael-js/raphael.min.js') }}"></script>
    <!--Easy Pie Chart [ OPTIONAL ]-->
    <script src="{{ asset('plugins/easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <!--Fullscreen jQuery [ OPTIONAL ]-->
    <script src="{{ asset('plugins/screenfull/screenfull.js') }}"></script>
    <!--Form Wizard [ SAMPLE ]-->
    <script src="{{ asset('js/demo/index.js') }}"></script>
    <!--Form Wizard [ SAMPLE ]-->


    <script src="{{ asset('plugins/pace/pace.min.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>  



    @yield('script')


</body>

</html>