<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>نظام الادارة</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">

    <!-- JQVMap -->
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Bootstrap 4 RTL -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">
    <!-- Custom style for RTL -->

    <link rel="stylesheet" href="dist/css/custom.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="home.php" class="brand-link">
            <img src="\ptc\img\favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">نظام ادارة الاختبارات</span>
        </a>

        

        <!-- Sidebar -->
        <div class="sidebar">
        <a href="update_profile.php" class="brand-link">
            <img src="\ptc\img\profile.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light" >mohammed</span>
        </a>
            <!-- Sidebar user panel (optional) -->
            
            

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="home.php" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                لوحة التحكم
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                المعلمين
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="add_teachers.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>اضافة معلم</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="teachers.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>عرض المعلمين</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                الطلاب
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="add_student.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>اضافة طالب</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="students.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>عرض الطلاب</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                المواد
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="add_course.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>اضافة مادة</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="courses.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>عرض المادة</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                الأسئلة
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="add_questions.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>اضافة سؤال</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="questions.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>عرض الاسئلة</p>
                                </a>
                            </li>

                            
                        </ul>
                        <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                الملف الشخصي
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="update_profile.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>تعديل الملف الشخصي</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>تسجيل خروج</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    </li>
                </ul>
             
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
