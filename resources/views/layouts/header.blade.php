
<html lang="la">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ໂຮງງານນ້ຳກ້ອນ ເຮືອງອານົງ</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="{{asset('public/dist/icon/logo.png')}}" type="image/ico">
  <link rel="stylesheet" href="{{asset('public/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/fonts/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/fonts/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/dist/css/skins/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/dist/css/style.css')}}">
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="{{ route('admin.truck') }}" class="logo">
      <span class="logo-mini"><b>HN</b></span>
      <span class="logo-lg">ໂຮງງານນ້ຳກ້ອນ ເຮືອງອານົງ</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
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
                        <img src="public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
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
              <img src="public/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">ທ້າວ ຄຳມອນ</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  ທ້າວ ຄຳມອນ
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">ໂປຣໄຟລ໌</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">ອອກຈາກລະບົບ</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
        <div class="pull-left image">
          <img src="public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>ທ້າວ ຄຳມອນ</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">ຂໍ້ມູນທົ່ວໄປ</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-desktop"></i> <span>ຈັດການຂໍ້ມູນ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/HN_user.php"><i class="fa fa-circle-o"></i> ເພີ່ມໃຊ້ງານ</a></li>
            <li><a href="{{ route('admin.truck') }}"><i class="fa fa-circle-o"></i> Dimuthu</a></li>
            <li><a href="pages/HN_customer.php"><i class="fa fa-circle-o"></i> ເພີ່ມລູກຄ້າ</a></li>
            <li><a href="pages/HN_Provider.php"><i class="fa fa-circle-o"></i> ເພີ່ມຜູ້ສະໜອງ</a></li>
            <li><a href="pages/HN_outcome.php"><i class="fa fa-circle-o"></i> ບັນຊີລາຍຈ່າຍ</a></li>
            <li><a href="pages/HN_Account.php"><i class="fa fa-circle-o"></i> ບັນຊີລາຍຮັບ</a></li>
            <li><a href="pages/HN_report.php"><i class="fa fa-circle-o"></i> ສະຫລຸບປະຈຳປີ</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-cart"></i> <span>ລະບົບການຂາຍ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/HN_sale_han.php"><i class="fa fa-circle-o"></i> ຂາຍໜ້າຮ້ານ</a></li>
            <li><a href="pages/HN_sale_song.php"><i class="fa fa-circle-o"></i> ຂາຍສົ່ງ
            <li><a href="pages/HN_mun.php"><i class="fa fa-circle-o"></i> ເຕີ່ມນ້ຳມັນ</a></li>
            <li><a href="pages/HN_han.php"><i class="fa fa-circle-o"></i> ສະຫຼຸບລາຍວັນຂາຍໜ້າຮ້ານ</a></li>
            <li><a href="pages/HN_sale.php"><i class="fa fa-circle-o"></i> ສະຫຼຸບລາຍວັນຂາຍສົ່ງ</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text"></i> <span>ໃບບິນ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/bills/mun.php"><i class="fa fa-circle-o"></i> ໃບບິນເຕີ່ມນ້ຳມັນ</a></li>
            <li><a href="pages/thone.php"><i class="fa fa-circle-o"></i> ໃບບິນລາຍຈ່າຍປະຈຳວັນ</a></li>
            <li><a href="pages/bills/solve.php"><i class="fa fa-circle-o"></i> ໃບບິນຄ່າແປງລົດ</a></li>
            <li><a href="pages/bills/change.php"><i class="fa fa-circle-o"></i> ໃບບິນຄ່າປ່ຽນອາໄຫລ່ລົດ</a></li>
            <li><a href="pages/bills/sale.php"><i class="fa fa-circle-o"></i> ໃບບິນລາຍການຂາຍ</a></li>
            <li><a href="pages/bills/burk.php"><i class="fa fa-circle-o"></i> ໃບບິນເບີກເຄື່ອງ</a></li>
            <li><a href="pages/bills/order.php"><i class="fa fa-circle-o"></i> ໃບບິນສັ່ງຊື້ເຄື່ອງ</a></li>
            <li><a href="pages/bills/booking.php"><i class="fa fa-circle-o"></i> ໃບບິນການຈອງ</a></li>
            <li><a href="pages/bills/fire.php"><i class="fa fa-circle-o"></i> ໃບບິນຄ່າໄຟຟ້າ</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>ກຸ່ມລູກຄ້າ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/HN_booking.php"><i class="fa fa-circle-o"></i> ການຈອງສິນຄ້າ</a></li>
            <li><a href="pages/HN_Payment.php"><i class="fa fa-circle-o"></i> ຊຳລະການຈອງ</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>ຜູ້ສະໜອງ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/HN_order.php"><i class="fa fa-circle-o"></i> ລາຍການສັ່ງຊື້</a></li>
            <li><a href="pages/HN_compare.php"><i class="fa fa-circle-o"></i> ລາຍການສິນຄ້າປຽບທຽບ</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i> <span>ລາຍການໜີ້ສິນ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/HN_debt_recieve.php"><i class="fa fa-circle-o"></i> ໜີ້ສິນຕ້ອງຮັບ</a></li>
            <li><a href="pages/HN_debt.php"><i class="fa fa-circle-o"></i> ໜີ້ສິນຕ້ອງຈ່າຍ</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-sitemap"></i> <span>ຂໍ້ມູນພະນັກງານ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/HN_staff.php"><i class="fa fa-circle-o"></i> ພະນັກງານທັງໝົດ</a></li>
            <li><a href="pages/HN_slary.php"><i class="fa fa-circle-o"></i> ລະບົບຈ່າຍເງິນເດືອນ</a></li>
          </ul>
        </li>
        <li class="header">ຂໍ້ມູນໂຮງງານ</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder-open"></i> <span>ເຄື່ອງໃນສາງ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/HN_Tank.php"><i class="fa fa-circle-o"></i> ເພີ່ມຖັງແຊ່ຣ໌</a></li>
            <li><a href="pages/HN_Touk.php"><i class="fa fa-circle-o"></i> ເພີ່ມກະຕຸ໊ກ</a></li>
            <li><a href="pages/HN_Stock.php"><i class="fa fa-circle-o"></i> ເພີ່ມເຄື່ອງໃນສາງ</a></li>
            <li><a href="pages/HN_Product.php"><i class="fa fa-circle-o"></i> ເພີ່ມການຜະລິດ</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-briefcase"></i> <span>ຂໍ້ມູນຂອງໂຮງງານ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/HN_fee.php"><i class="fa fa-circle-o"></i> ຄ່າໄຟຣ໌ / ຄ່ານ້ຳ</a></li>
            <li><a href="pages/404.php"><i class="fa fa-circle-o"></i> ການເຮັດວຽກຂອງເຄື່ອງ</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dollar"></i> <span>ອັດຕາແລກປ່ຽນ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/HN_currency.php"><i class="fa fa-circle-o"></i> ອັດຕາການແລກປ່ຽນ</a></li>
            <li><a href="pages/HN_close.php"><i class="fa fa-circle-o"></i> ປິດວັນ</a></li>
            <li><a href="pages/HN_cash.php"><i class="fa fa-circle-o"></i> ນຳເງິນອອກຈາກລະບົບ</a></li>
          </ul>
        </li>
    </ul>
    </section>
  </aside>
</div>
</body>
</html>