<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>CDA  @yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="{{ asset('backend/assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('backend/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('backend/assets/plugins/switchery/css/switchery.min.css') }}" rel="stylesheet" type="text/css" media="screen" />   

    <!-- data table -->
    <link href="{{ asset('backend/assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css ')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/datatables-responsive/css/datatables.responsive.css')}}" rel="stylesheet" type="text/css" media="screen" />

    <!-- toastr -->
    <link class="main-stylesheet" href="{{ asset('css/toastr.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('backend/pages/css/pages-icons.css') }}" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="{{ asset('backend/pages/css/pages.css') }}" rel="stylesheet" type="text/css" />
    <link class="main-stylesheet" href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />

    @yield('styles')

  </head>
  <body class="fixed-header horizontal-menu horizontal-app-menu ">
    <!-- START HEADER -->
    <div class="header">
      <div class="container">
        <div class="header-inner header-md-height">
          <a href="#" class="btn-link toggle-sidebar d-lg-none pg pg-menu" data-toggle="horizontal-menu">
          </a>
          <div class="">
            <!-- START NOTIFICATION LIST -->
            <ul class="d-lg-inline-block d-none notification-list no-margin b-grey b-l b-r no-style p-l-0 p-r-20">
              <li class="p-r-10 inline">
                <div class="dropdown">
                  {{--<a href="javascript:;" id="notification-center" class="header-icon pg pg-world" data-toggle="dropdown">--}}
                    {{--<span class="bubble"></span>--}}
                  {{--</a>--}}
                  <!-- START Notification Dropdown -->
                  <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
                    <!-- START Notification -->
                    <div class="notification-panel">
                      <!-- START Notification Body-->
                      <div class="notification-body scrollable">
                        <!-- START Notification Item-->
                        <div class="notification-item unread clearfix">
                          <!-- START Notification Item-->
                          <div class="heading open">
                            <a href="#" class="text-complete pull-left">
                              <i class="pg-map fs-16 m-r-10"></i>
                              <span class="bold">Carrot Design</span>
                              <span class="fs-12 m-l-10">David Nester</span>
                            </a>
                            <div class="pull-right">
                              <div class="thumbnail-wrapper d16 circular inline m-t-15 m-r-10 toggle-more-details">
                                <div><i class="fa fa-angle-left"></i>
                                </div>
                              </div>
                              <span class=" time">few sec ago</span>
                            </div>
                            <div class="more-details">
                              <div class="more-details-inner">
                                <h5 class="semi-bold fs-16">“Apple’s Motivation - Innovation <br>
                                                            distinguishes between <br>
                                                            A leader and a follower.”</h5>
                                <p class="small hint-text">
                                  Commented on john Smiths wall.
                                  <br> via pages framework.
                                </p>
                              </div>
                            </div>
                          </div>
                          <!-- END Notification Item-->
                          <!-- START Notification Item Right Side-->
                          <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                            <a href="#" class="mark"></a>
                          </div>
                          <!-- END Notification Item Right Side-->
                        </div>
                        <!-- START Notification Body-->
                        <!-- START Notification Item-->
                        <div class="notification-item  clearfix">
                          <div class="heading">
                            <a href="#" class="text-danger pull-left">
                              <i class="fa fa-exclamation-triangle m-r-10"></i>
                              <span class="bold">98% Server Load</span>
                              <span class="fs-12 m-l-10">Take Action</span>
                            </a>
                            <span class="pull-right time">2 mins ago</span>
                          </div>
                          <!-- START Notification Item Right Side-->
                          <div class="option">
                            <a href="#" class="mark"></a>
                          </div>
                          <!-- END Notification Item Right Side-->
                        </div>
                        <!-- END Notification Item-->
                        <!-- START Notification Item-->
                        <div class="notification-item  clearfix">
                          <div class="heading">
                            <a href="#" class="text-warning-dark pull-left">
                              <i class="fa fa-exclamation-triangle m-r-10"></i>
                              <span class="bold">Warning Notification</span>
                              <span class="fs-12 m-l-10">Buy Now</span>
                            </a>
                            <span class="pull-right time">yesterday</span>
                          </div>
                          <!-- START Notification Item Right Side-->
                          <div class="option">
                            <a href="#" class="mark"></a>
                          </div>
                          <!-- END Notification Item Right Side-->
                        </div>
                        <!-- END Notification Item-->
                        <!-- START Notification Item-->
                        <div class="notification-item unread clearfix">
                          <div class="heading">
                            <div class="thumbnail-wrapper d24 circular b-white m-r-5 b-a b-white m-t-10 m-r-10">
                              <img width="30" height="30" alt="" src="{{ asset('backend/assets/img/profiles/1.jpg') }}">
                            </div>
                            <a href="#" class="text-complete pull-left">
                              <span class="bold">Revox Design Labs</span>
                              <span class="fs-12 m-l-10">Owners</span>
                            </a>
                            <span class="pull-right time">11:00pm</span>
                          </div>
                          <!-- START Notification Item Right Side-->
                          <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                            <a href="#" class="mark"></a>
                          </div>
                          <!-- END Notification Item Right Side-->
                        </div>
                        <!-- END Notification Item-->
                      </div>
                      <!-- END Notification Body-->
                      <!-- START Notification Footer-->
                      {{--<div class="notification-footer text-center">--}}
                        {{--<a href="#" class="">Read all notifications</a>--}}
                        {{--<a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#">--}}
                          {{--<i class="pg-refresh_new"></i>--}}
                        {{--</a>--}}
                      {{--</div>--}}
                      <!-- START Notification Footer-->
                    </div>
                    <!-- END Notification -->
                  </div>
                  <!-- END Notification Dropdown -->
                </div>
              </li>

            </ul>
            <!-- END NOTIFICATIONS LIST -->
            {{--<a href="#" class="search-link d-lg-inline-block d-none" data-toggle="search"><i class="pg-search"></i>Type anywhere to <span class="bold">search</span></a>--}}
          </div>
          <div class="d-flex align-items-center">
            <!-- START User Info-->
            <div class="pull-left p-r-10 fs-14 font-heading d-lg-inline-block d-none">
              <span class="semi-bold">{{ Auth::user()->name }}</span>
            </div>
            <div class="dropdown pull-right sm-m-r-5">
              <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="thumbnail-wrapper d32 circular inline">
                  <img src="{{ asset('backend/assets/img/profiles/avatar.jpg') }}" alt="" width="32" height="32">
                  </span>
              </button>
              <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                <a href="{{ route('home.index') }}" target="_blank" class="dropdown-item"><i class="fa fa-globe"></i> View Site</a>
                <a href="{{ route('admin.settings') }}" class="dropdown-item"><i class="pg-settings_small"></i> Settings</a>
                {{--<a href="#" class="dropdown-item"><i class="pg-outdent"></i> Feedback</a>--}}
                {{--<a href="#" class="dropdown-item"><i class="pg-signals"></i> Help</a>--}}
                @auth
                    <a href="#" class="clearfix bg-master-lighter dropdown-item" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" >
                      <span class="pull-left">Logout</span>
                      <span class="pull-right"><i class="pg-power"></i></span>
                    </a>
                    
                @endauth
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </div>
            </div>
            <!-- END User Info-->
          </div>
        </div>
        <div class="header-inner justify-content-start header-lg-height title-bar">
          <div class="brand inline align-self-end">
            <img src="{{ asset('frontend/themes/images/logo-sm.png') }}" alt="logo">
          </div>
          <h2 class="page-title align-self-end">
                
              </h2>
        </div>
        <div class="menu-bar header-sm-height" data-pages-init='horizontal-menu' data-hide-extra-li="4">
          <a href="#" class="btn-link toggle-sidebar d-lg-none pg pg-close" data-toggle="horizontal-menu">
          </a>
          <ul>
             <li>
                <a href="{{ route('admin.home') }}">Home</a>
             </li>
            <li>
              <a href="javascript:;"><span class="title">Products</span>
            <span class=" arrow"></span></a>
              <ul class="">
                <li class="">
                  <a href="{{ route('products') }}">Show Products</a>
                </li>
                <li class="">
                  <a href="{{ route('order') }}">Show Orders</a>
                </li>
                <li class="">
                  <a href="{{ route('categories') }}">Product Categories</a>
                </li>
                <li class="">
                  <a href="{{ route('stocks') }}">Stocks</a>
                </li>        
              </ul>
            </li>
            <li>
              <a href="javascript:;"><span class="title">Manage Users </span>
            <span class=" arrow"></span></a>
              <ul class="">
                <li class="">
                  <a href="{{ route('suppliers') }}">Suppliers</a>
                </li>
                        
              </ul>
            </li>
            <!-- <li>
              <a href="social.html"><span class="title">Social</span></a>
            </li>
            <li>
              <a href="javascript:;"><span class="title">Calendar</span>
            <span class=" arrow"></span></a>
              <ul class="">
                <li class="">
                  <a href="calendar.html">Basic</a>
                </li>
                <li class="">
                  <a href="calendar_lang.html">Languages</a>
                </li>
                <li class="">
                  <a href="calendar_month.html">Month</a>
                </li>
                <li class="">
                  <a href="calendar_lazy.html">Lazy load</a>
                </li>
                <li class="">
                  <a href="https://docs.pages.revox.io/apps/calendar" target="_blank">Documentation</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;"><span class="title">UI Elements</span>
            <span class=" arrow"></span></a>
              <ul class="">
                <li class="">
                  <a href="color.html">Color</a>
                </li>
                <li class="">
                  <a href="typography.html">Typography</a>
                </li>
                <li class="">
                  <a href="icons.html">Icons</a>
                </li>
                <li class="">
                  <a href="buttons.html">Buttons</a>
                </li>
                <li class="">
                  <a href="notifications.html">Notifications</a>
                </li>
                <li class="">
                  <a href="modals.html">Modals</a>
                </li>
                <li class="">
                  <a href="progress.html">Progress &amp; Activity</a>
                </li>
                <li class="">
                  <a href="tabs_accordian.html">Tabs &amp; Accordions</a>
                </li>
                <li class="">
                  <a href="sliders.html">Sliders</a>
                </li>
                <li class="">
                  <a href="tree_view.html">Tree View</a>
                </li>
                <li class="">
                  <a href="nestables.html">Nestable</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;">
                <span class="title">Forms</span>
                <span class=" arrow"></span>
              </a>
              <ul class="">
                <li class="">
                  <a href="form_elements.html">Form Elements</a>
                </li>
                <li class="">
                  <a href="form_layouts.html">Form Layouts</a>
                </li>
                <li class="">
                  <a href="form_wizard.html">Form Wizard</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="builder.html">
                <span class="title">Builder</span>
              </a>
            </li>
            <li>
              <a href="cards.html">
                <span class="title">Cards</span>
              </a>
            </li>
            <li>
              <a href="views.html">
                <span class="title">Views</span>
              </a>
            </li>
            <li>
              <a href="javascript:;"><span class="title">Tables</span>
            <span class=" arrow"></span></a>
              <ul class="">
                <li class="">
                  <a href="tables.html">Basic Tables</a>
                </li>
                <li class="">
                  <a href="datatables.html">Data Tables</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;"><span class="title">Maps</span>
            <span class=" arrow"></span></a>
              <ul class="">
                <li class="">
                  <a href="google_map.html">Google Maps</a>
                </li>
                <li class="">
                  <a href="vector_map.html">Vector Maps</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="charts.html"><span class="title">Charts</span></a>
            </li>
            <li>
              <a href="javascript:;"><span class="title">Extra</span>
            <span class=" arrow"></span></a>
              <ul class="">
                <li class="">
                  <a href="invoice.html">Invoice</a>
                </li>
                <li class="">
                  <a href="404.html">404 Page</a>
                </li>
                <li class="">
                  <a href="500.html">500 Page</a>
                </li>
                <li class="">
                  <a href="blank_template.html">Blank Page</a>
                </li>
                <li class="">
                  <a href="login.html">Login</a>
                </li>
                <li class="">
                  <a href="register.html">Register</a>
                </li>
                <li class="">
                  <a href="lock_screen.html">Lockscreen</a>
                </li>
                <li class="">
                  <a href="gallery.html">Gallery</a>
                </li>
                <li class="">
                  <a href="timeline.html">Timeline</a>
                </li> -->
              </ul>
            </li>
          </ul>
          <a href="#" class="search-link d-flex justify-content-between align-items-center d-lg-none" data-toggle="search">Tap here to search <i class="pg-search float-right"></i></a>
        </div>
      </div>
    </div>
    <div class="page-container ">
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content ">
          <!-- START JUMBOTRON -->
          <div class="jumbotron">
            <div class=" container p-l-0 p-r-0   container-fixed-lg sm-p-l-0 sm-p-r-0">
              <div class="inner">
                <!-- START BREADCRUMB -->
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                 <!--  <li class="breadcrumb-item active">Blank template</li> -->
                </ol>
                <!-- END BREADCRUMB -->
              </div>
            </div>
          </div>
          <!-- END JUMBOTRON -->
          <!-- START CONTAINER FLUID -->
          <div class=" container    container-fixed-lg">
            <!-- BEGIN PlACE PAGE CONTENT HERE -->

            @if(count($errors)> 0)
              <ul class="list-group">
                @foreach($errors->all() as $error)
                  <li class="list-group-item text-danger">{{ $error }}</li>
                @endforeach
              </ul>
              <br>
            @endif

            @yield('content')
            <!-- END PLACE PAGE CONTENT HERE -->
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        <div class=" container   container-fixed-lg footer">
          <div class="copyright sm-text-center">
            <p class="small no-margin pull-left sm-pull-reset">
              <span class="hint-text">Copyright &copy; 2019 </span>
              <span class="font-montserrat">Coconut Development Authority</span>.
              <span class="hint-text">All rights reserved. </span>
                </p>

            <div class="clearfix"></div>
          </div>
        </div>
        <!-- END COPYRIGHT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    <!-- START OVERLAY -->
    <div class="overlay hide" data-pages="search">
      <!-- BEGIN Overlay Content !-->
      <div class="overlay-content has-results m-t-20">
        <!-- BEGIN Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Logo !-->
          <img class="overlay-brand" src="{{ asset('backend/assets/img/logo.png') }}" alt="logo" width="78" height="22">
          <!-- END Overlay Logo !-->
          <!-- BEGIN Overlay Close !-->
          <a href="#" class="close-icon-light overlay-close text-black fs-16">
            <i class="pg-close"></i>
          </a>
          <!-- END Overlay Close !-->
        </div>
        <!-- END Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Controls !-->
          <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
          <br>
          <div class="inline-block">
            <div class="checkbox right">
              <input id="checkboxn" type="checkbox" value="1" checked="checked">
              <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
            </div>
          </div>
          <div class="inline-block m-l-10">
            <p class="fs-13">Press enter to search</p>
          </div>
          <!-- END Overlay Controls !-->
        </div>
        <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
        <div class="container-fluid">
          <span>
                <strong>suggestions :</strong>
            </span>
          <span id="overlay-suggestions"></span>
          <br>
          <div class="search-results m-t-40">
            <p class="bold">Pages Search Results</p>
            <div class="row">
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div>
                      <img width="50" height="50" src="{{ asset('backend/assets/img/profiles/avatar.jpg') }}" alt="">
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                    <p class="hint-text">via john smith</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div>T</div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
                    <p class="hint-text">via pages</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div><i class="fa fa-headphones large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                    <p class="hint-text">via pagesmix</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
                    <div><i class="fa fa-facebook large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                    <p class="hint-text">via facebook</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
                    <div><i class="fa fa-twitter large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via twitter</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
                    <div><i class="fa fa-google-plus large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via google plus</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
            </div>
          </div>
        </div>
        <!-- END Overlay Search Results !-->
      </div>
      <!-- END Overlay Content !-->
    </div>
    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
    <script src="{{ asset('backend/assets/plugins/feather-icons/feather.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jquery/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/modernizr.custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/popper/umd/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jquery/jquery-easy.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-unveil/jquery.unveil.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-ios-list/jquery.ioslist.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-actual/jquery.actual.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/plugins/select2/js/select2.full.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/plugins/classie/classie.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/switchery/js/switchery.min.js') }}" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="{{ asset('backend/pages/js/pages.min.js') }}"></script>
    <!-- END CORE TEMPLATE JS -->
    

    <!-- data tables -->
    <script src="{{ asset('backend/assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/plugins/datatables-responsive/js/datatables.responsive.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/plugins/datatables-responsive/js/lodash.min.js') }}"></script>


    <!-- toastr -->
    <script src="{{ asset('js/toastr.min.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
      @if(Session::has('success'))

        toastr.success("{{ Session::get('success') }}")

      @endif

    </script>




    @yield('scripts')
    

    <!-- BEGIN PAGE LEVEL JS -->
    <script src="{{ asset('backend/assets/js/datatables.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/js/scripts.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->

    <script type="text/javascript">
        $(document).ready(function() {
            $('#order-table').DataTable( {
                "order": [[ 0, "desc" ]],
                "iDisplayLength": 5,
                // "bFilter" : false,
                "bLengthChange": false,


            } );

        } );
    </script>

  </body>
</html>