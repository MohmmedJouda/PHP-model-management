<?php include('header.php');
include('conn.php');

if(isset($_GET['id'])){
    $conn=new conn();
    $teacher=$conn->getTeacherData($_GET['id']);
}

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>المعلمين</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title" style="position: relative; left: 50%;">اضافة معلم</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="post" action="functions.php">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 control-label">الاسم</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="type" value="<?php echo isset($teacher)?'update_teacher':'add_teacher';?>">
                                    <input type="hidden" name="id" value="<?php echo isset($teacher)?$teacher['id']:'';?>">
                                    <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="الاسم" value="<?php echo isset($teacher)?$teacher['name']:'';?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 control-label">البريد الالكتروني</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="ادخل البريد الالكتروني" value="<?php echo isset($teacher)?$teacher['email']:'';?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 control-label">كلمة المرور</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="ادخل كلمة المرور" value="<?php echo isset($teacher)?$teacher['password']:'';?>">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">حفظ</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>

                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

<!-- /.content-wrapper -->
<?php include('footer.php');?>
