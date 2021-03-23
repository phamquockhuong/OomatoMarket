<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('public')}}/template/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('public')}}/template/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{url('public')}}/template/css/AdminLTE.css">
  <link rel="stylesheet" href="{{url('public')}}/template/css/_all-skins.min.css">
  <link rel="stylesheet" href="{{url('public')}}/template/css/jquery-ui.css">
  <link rel="stylesheet" href="{{url('public')}}/template/css/style.css" />
  <script src="js/angular.min.js"></script>
  <script src="js/app.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="{{ route('index') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><i>Oomato market</i></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">4</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 4 messages</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                         @if(Auth::check()) 
                         <img src="{{ asset('uploads') }}/{{Auth::user()->img_users}}" class="img-circle" alt="User Image">
                         @else
                         <p>Name</p>
                         @endif
                       </div>
                       <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">20% Complete</span>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- end task item -->
              </ul>
            </li>
            <li class="footer">
              <a href="#">View all tasks</a>
            </li>
          </ul>
        </li>
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              @if(Auth::check()) 
                          <img src="{{ asset('uploads') }}/{{Auth::user()->img_users}}" class="img-circle" alt="User Image" style="width: 22px;height: 22px;" >
                          @else
                          <p>name</p>
                          @endif
              <span class="hidden-xs">
                @if(Auth::check()) 
                    {{Auth::user()->name}} 
                    @else
                    <p>name</p>
                    @endif
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                @if(Auth::check()) 
                <img src="{{ asset('uploads') }}/{{Auth::user()->img_users}}" class="img-circle" alt="User Image">
                @else
                <p>name</p>
                @endif
                <p>
                  @if(Auth::check()) 
                   {{Auth::user()->name}}      
                    @else
                    <p>name</p>
                    @endif
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              @if(Auth::check()) 
                     <li class="user-footer">
                <div class="pull-left">
                  <a href="{{route('profile',Auth::user()->id)}}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{route('logout')}}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>    
                    @else

                    
                    @endif

              
            </ul>
          </li>

      </ul>
    </div>
  </nav>
</header>

<!-- =============================================== -->

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">@if(Auth::check())
          <img src="{{ asset('uploads')}}/{{Auth::user()->img_users}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> 
               {{Auth::user()->name}}              
              @else
              <p>name</p>
              @endif</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="key_pro" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">


       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Catalog management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admincategory.index')}}"><b>-</b> List of categories</a></li>
            <li><a href="{{route('admincategory.create')}}"><b>-</b> Add new categories</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Product management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('adminproduct.index')}}"><i class="fa fa-circle-o"></i>List of products</a></li>
            <li><a href="{{route('adminproduct.create')}}"><i class="fa fa-circle-o"></i>Add new products</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Slide Banner</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('adminslide.index')}}"><i class="fa fa-circle-o"></i>List of slide</a></li>
            <li><a href="{{route('adminslide.create')}}"><i class="fa fa-circle-o"></i>Add new slide</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Shipping method</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('adminmethod.index')}}"><i class="fa fa-circle-o"></i>List of method</a></li>
            <li><a href="{{route('adminmethod.create')}}"><i class="fa fa-circle-o"></i>Add new method</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Promotion </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('adminpromotion.index')}}"><i class="fa fa-circle-o"></i>List of promotion</a></li>
            <li><a href="{{route('adminpromotion.create')}}"><i class="fa fa-circle-o"></i>Add new promotion</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Role management </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('role.index')}}"><i class="fa fa-circle-o"></i>List of Role</a></li>
            <li><a href="{{route('role.create')}}"><i class="fa fa-circle-o"></i>Add new Role</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Users permissions </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('userr.index')}}"><i class="fa fa-circle-o"></i>List of Role</a></li>
            <li><a href="{{route('userr.create')}}"><i class="fa fa-circle-o"></i>Add new Role</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Customer management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('adminuser.index')}}"><i class="fa fa-circle-o"></i>List of user</a></li>
            @if(!Auth::check()) 
            <li><a href="{{route('adminuser.create')}}"><i class="fa fa-circle-o"></i>Add new user</a></li>
            @endif
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Order management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('adminorder.index')}}"><i class="fa fa-circle-o"></i>List of Order</a></li>
            <li><a href="{{route('adminorder.create')}}"><i class="fa fa-circle-o"></i>Add new Order</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Information blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('adminblog.index')}}"><i class="fa fa-circle-o"></i>List of blog</a></li>
            <li><a href="{{route('adminblog.create')}}"><i class="fa fa-circle-o"></i>Add new blog</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Store listing</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('adminstorelocaltion.index')}}"><i class="fa fa-circle-o"></i>List of storeloacltion</a></li>
            <li><a href="{{route('adminstorelocaltion.create')}}"><i class="fa fa-circle-o"></i>Add new storeloacltion</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>FAQs management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('adminmenu.index')}}"><i class="fa fa-circle-o"></i>List of menu</a></li>
            <li><a href="{{route('adminmenu.create')}}"><i class="fa fa-circle-o"></i>Add new menu</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Error message</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admincontact.index')}}"><i class="fa fa-circle-o"></i>List of Contact</a></li>
            <li><a href="{{route('admincontact.create')}}"><i class="fa fa-circle-o"></i>Add new Contact</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Features shop</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('adminfeatures.index')}}"><i class="fa fa-circle-o"></i>List of features</a></li>
            <li><a href="{{route('adminfeatures.create')}}"><i class="fa fa-circle-o"></i>Add new features</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Comment blog </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admincomment_blog.index')}}"><i class="fa fa-circle-o"></i>List of comment blog</a></li>
          </ul>
        </li> 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Comment product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admincomment.index')}}"><i class="fa fa-circle-o"></i>List of comment </a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.0.1
    </div>
    <strong>Copyright &copy; 2018 <a href="https://adminlte.io">TTPM_BKAP</a>.</strong>
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<script src="{{url('public')}}/template/js/jquery.min.js"></script>
<script src="{{url('public')}}/template/js/jquery-ui.js"></script>
<script src="{{url('public')}}/template/js/bootstrap.min.js"></script>
<script src="{{url('public')}}/template/js/adminlte.min.js"></script>
<script src="{{url('public')}}/template/js/dashboard.js"></script>
<script src="{{url('public')}}/template/tinymce/tinymce.min.js"></script>
<script src="{{url('public')}}/template/tinymce/config.js"></script>
<script src="{{url('public')}}/template/js/function.js"></script>
<script>
  $('#modal-file').on('hide.bs.modal',function(){
   var img_product = $('#image').val();

   $('#img').attr('src',img_product);
 });
  $('#modal-file-list').on('hide.bs.modal',function(){
   var img_productList = $('#imageList').val();
   var imgList = $.parseJSON(img_productList);
   var _html = '';

   for(var i=0; i<imgList.length; i++){
    _html += '<div class = "col-md-2 thumbnail">';
    _html += '<img src="'+imgList[i]+'" class="img-responsive"  style="height:80px;width:100px;";>';
    _html += '</div>';
  }

  console.log(_html);

  $('#show').html(_html);
   // $('#img').attr('src',img_productList);
 });
</script>
<script>
  $("#checkAll").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
  });
</script>
</body>
</html>
