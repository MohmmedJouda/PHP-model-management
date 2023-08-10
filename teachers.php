<?php include('header.php');
include('conn.php');
$conn=new conn();
$data=$conn->getTeacher();
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
                <div class="card">
                    <div class="card-header">
                    <h2 class="card-title" style="position: relative; left: 50%;">عرض المعلمين</h2>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>البريد اللكتروني</th>
                                <th>عمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php  while($row = $data->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $row["id"];?></td>
                                <td><?php echo $row["name"];?></td>
                                <td><?php echo $row["email"];?></td>
                                <td><a class="fas fa-trash" style="color: red" href="functions.php?type=delete_teacher&id=<?php echo $row["id"];?>"></a>
                                    | <a class="fas fa-edit" href="add_teachers.php?type=edit&id=<?php echo $row["id"];?>"></a>
                                </td>
                            </tr>
                            <?php }?>

                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

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
