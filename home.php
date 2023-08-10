<?php include('header.php');?>
  <!-- Content Wrapper. Contains page content -->


  <!doctype html>
<html class="no-js" lang="en">
<head>
<title>لوحة التحكم</title>
</head>

<body> <br>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
  

        <!-- Main content -->
        <section class="content">
            
           <div class="card">
           <div class="col-sm-6">
                        <h2 class="control-panel" style="position: relative; right: 85%;">لوحة التحكم</h2>
                    </div>
                <div class="card-header">

                </div>
                <div class="card-body">
                مرحبا بكم في نظام ادارة الاختبارات
                </div>
                
                
            </div>
           

        </section>
    
     
        <!-- -------------------------------------------------------------------------------------------------- -->

<div class="row">
        <div class="card" style="width: 18rem;">
  <img src="./img1/teachers.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title" >عدد المعلمين : </h4><br><br>
    <h3 class="card-text">12</h3><br>
    <a href="/ptc/teachers.php" class="btn btn-primary">عرض التفاصيل</a>
  </div>
</div>

<div class="card" style="width: 18rem;height: 23rem;">
  <img src="./img1/student.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title">عدد الطلاب : </h4><br><br>
    <h3 class="card-text">20</h3><br>
    <a href="http://localhost/ptc/students.php" class="btn btn-primary">عرض التفاصيل</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="./img1/books.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title">عدد المواد : </h4><br><br>
    <h3 class="card-text">6</h3><br>
    <a href="http://localhost/ptc/courses.php" class="btn btn-primary">عرض التفاصيل</a>
  </div>
</div>
     

<div class="card" style="width: 18rem;">
  <img src="./img1/exzamp.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title">عدد الأسئلة : </h4><br><br>
    <h3 class="card-text">10</h3><br>
    <a href="http://localhost/ptc/questions.php" class="btn btn-primary">عرض التفاصيل</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="\ptc\img\profile.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title">عدد المستخدمون :</h4><br><br>
    <h3 class="card-text">2</h3><br>
    <a href="http://localhost/ptc/update_profile.php" class="btn btn-primary">عرض التفاصيل</a>
  </div>
</div>
     
     
</div>
            <!-- ------------------------------------------------------------------------------------------------- -->


        </div>
         
        
    </div>


    <style>
      
        .card-title{
            position: relative;
            left: 66px;
            font-size:17px;
            
            
        }
        .row{
            margin: 100px;
            margin-top: 0px;
            

        }
        
.card-img-top{
    height: 148px;
    width: 283px;
}
        .engineers img{
            width: 140px;
        }
      
        .sss{
            background-color: #1976d2;
            position: relative;
            right: 60px;
        }
        .ss{
            
            position: relative;
            right: 60px;
        }
        .card-body{
            text-align: center;
            font-size:20px;
        }
      

    </style>

</body>

</html>

    <!-- /.content-wrapper -->
<?php include('footer.php');?>
