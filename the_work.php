<?php 

require '../../includes/products_queries.php';




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EECGroup | أضافة مورد</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Select2 CSS -->
<link rel="stylesheet" type="text/css" href="../../plugins/select2/dist/css/select2.min.css">


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
        <!-- User Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <!-- <i class="far fa-user"></i> -->
            <img class="profile-photo-nav" src="../../dist/img/avatar.png" >
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="../../index.html" class="dropdown-item">
              <i class="user-nav-icon float-right fas fa-user mr-2"></i> <span class=" float-right text-muted text-sm">الصفحة الشخصية</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="../../login.html" class="dropdown-item">
              <i class="user-nav-icon float-right fas fa-sign-out-alt mr-2"></i> <span class=" float-right text-muted text-sm"> تسجيل خروج</span>
            </a>
            <div class="dropdown-divider"></div>


          </div>
        </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <img src="../../dist/img/eecgroup-logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
	  
	     <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
              <a href="../../index.html" class="nav-link active">
                <i class="fa fa-tachometer-alt nav-icon"></i>
                <p>لوحة التحكم</p>
              </a>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shipping-fast"></i>
              <p>
              المشتريات الداخلية
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/internal_supplier_request.html" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>الموردين</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/internal_supplier_form.html" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>أضافة مورد</p>
                </a>
              </li>

            </ul>
          </li> -->

          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shipping-fast"></i>
              <p>
              المشتريات الخارجية
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/external_supplier_request.html" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>الموردين</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/external_supplier_form.html" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>أضافة مورد</p>
                </a>
              </li>

            </ul>
          </li> -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shipping-fast"></i>
              <p>
                الموردين
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" title="كل الموردين ">
                <a href="../Suppliers/internal_supplier_request.html" class="nav-link">
                  <i class="fa fa-users nav-icon"></i>
                  <p>جميع الموردين</p>
                </a>
              </li>
              <li class="nav-item" title="أضافة مورد جديد">
                <a href="../Suppliers/internal_supplier_form.html" class="nav-link active">
                  <i class="fa fa-user-plus nav-icon"></i>
                  <p>أضافة مورد</p>
                </a>
              </li>

            </ul>
          </li>
<!-- 
          <li class="nav-header">الأعدادات</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-file-alt"></i>
              <p>
                المستخدمين
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                الصفحة الشخصية
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p>عرض </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-edit nav-icon"></i>
                  <p>تعديل </p>
                </a>
              </li>
            </ul>
          </li> -->


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>الموردين
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">أضافة مورد </li>
              <li class="breadcrumb-item"><a href="../../index.html">الصفحة الرئيسية</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content form-i_request" dir="rtl">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">أضافة مورد جديد</h3>
                <!-- <div class="file-upload-div" dir="ltr">
                  <form method="post" enctype="multipart/form-data" action="#">
                      <div class="form-group">
                        <input type="submit" name="upload" class="upload_btn btn btn-primary" value="تأكيد">
                          <input class="select_file" type="file" name="select_file" value=".xls, .xslx"/>
                        </div>
                  </form>
                </div> -->
              </div>
              <form action="#">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="الشركات">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-building"></i></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
				  
				  <!-- show products function -->
				  
				  
                    <div class="input-group mb-3">
                      <select id='user_selected1' class="form-control the_dick">
					  
					  
					  <?php 
		$result = getall_products(); 
		if ($result->num_rows > 0) {
           // output data of each row
        while($row = $result->fetch_assoc()) {
		  
		  
		  ?>
		  <option value='<?php echo $row["id"]; ?>'><?php echo $row["name"]; ?></option>
		  <?php 
       }
        } else {
       $results = 0;
       }
$conn->close();
		
		
		?>
                     </select>
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-file-signature"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group">
                      <input type="text" class="form-control"  placeholder="البند المطلوب">
                      <div class="input-group-append">
                        <div class="input-group-text"><i class="fas fa-file-alt"></i></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="الشخص المسئول">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group">
                      <input type="text" class="form-control"  placeholder="تليفون">
                      <div class="input-group-append">
                        <div class="input-group-text"><i class="fas fa-phone"></i></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="موبايل  ">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group">
                      <input type="text" class="form-control"  placeholder="فاكس">
                      <div class="input-group-append">
                        <div class="input-group-text"><i class="fas fa-fax"></i></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="البريد الإلكترونى">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-envelope-square"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group">
                      <input type="text" class="form-control"  placeholder="كلمة المرور">
                      <div class="input-group-append">
                        <div class="input-group-text"><i class="fas fa-key"></i></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="العنوان">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group">
                      <select class="form-control">
                        <option selected hidden>الاعتماد</option>
                        <option>معتمد</option>
                        <option>غير معتمد</option>
                      </select>
                      <div class="input-group-append">
                        <div class="input-group-text"><i class="fas fa-percent"></i></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group mb-3">
                      <select class="form-control">
                        <option selected hidden>التقييم</option>
                        <option >0</option>
                        <option>0.5</option>
                        <option>1</option>
                        <option>1.5</option>
                        <option>2</option>
                        <option>2.5</option>
                        <option>3</option>
                        <option>3.5</option>
                        <option>4</option>
                        <option>4.5</option>
                        <option>5</option>
                      </select>
                      <div class="input-group-append">
                        <div class="input-group-text"><i class="fas fa-star"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group mb-3 image">
                      <input type="file" class="form-control image-input"  >
                      <label for="file">اضافة صوره</label>
                      <div class="input-group-append">
                        <div class="input-group-text"><i class="fas fa-images"></i></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group row">
                        <div class="col-12">
                          <select id='user_selected' class="form-control  js-example-basic-multiple js-states"  multiple="multiple" >
						  
						  					  <?php 
		$result = getall_products_meta(); 
		if ($result->num_rows > 0) {
           // output data of each row
        while($row = $result->fetch_assoc()) {
		  
		  
		  ?>
		  <option value='<?php echo $row["name"]; ?>'><?php echo $row["name"]; ?></option>
		  <?php 
       }
        } else {
       $results = 0;
       }
$conn->close();
		getall_products_meta
		
		?>
                         </select>
                        </div>
                      </div>
                  </div>
                 
                </div>
           
                <div class="row">
                  <div class="col-md-12">
                    <div class="input-group  ">
                      <textarea type="text" class="form-control"  placeholder="ملاحظات"></textarea>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12">
                    <button type="submit" class="request-form-btn" >تسجيل</button>
                  </div>
                </div>

              </div>
            </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
       

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0-pre
    </div>
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- jQuery -->


<!-- Select2 JS -->
<script src="../../plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>
<!-- Page specific script -->


<script>

  $(document).ready(function(){
    $('#user_selected1').change(function(){   
    let product_id = document.getElementById('user_selected1').value;
	let second_list = document.getElementById('user_selected');
	
	
$.ajax({
    type: "POST",
    url: 'x.php',
    data: {id: product_id},
    success: function(data){
        alert(data);
		second_list.setAttribute("data-link", data);
		let data_id = second_list.getAttribute('data-link');
		alert(data_id);
		
		
		
		
		
		
		
    }
});
 
	 
    });
  });
  
  
  
  


  
  
  
  
  
  

</script>



</body>
</html>
