<?php include('header.php');
include('conn.php');
if(isset($_GET['id'])){
    $conn=new conn();
    $question=$conn->getQuestionData($_GET['id']);
    $answers=$conn->getAnswerData($_GET['id']);
}

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>الأسئلة</h1>
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
                        <h3 class="card-title" style="position: relative; left: 50%;">اضافة سؤال</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="post" action="functions.php">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 control-label">عنوان السؤال</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="type" value="<?php echo isset($question)?'update_question':'add_question';?>">
                                    <input type="hidden" name="id" value="<?php echo isset($question)?$question['id']:'';?>">
                                    <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="عنوان السؤال" value="<?php echo isset($question)?$question['title']:'';?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 control-label">درجة السؤال</label>
                                <div class="col-sm-10">
                                    <input type="number" name="degree" min="1" class="form-control" id="inputEmail3" placeholder="درجة السؤال" value="<?php echo isset($question)?$question['degree']:'';?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 control-label">رقم الاجابة الصحيحة</label>
                                <div class="col-sm-10">
                                    <input type="number" name="correct_answer" min="1" max="4" class="form-control" id="inputPassword3" placeholder="درجة الاجابة الصحيحة" value="<?php echo isset($question)?$question['correct_answer']:'';?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 control-label">  الإجابات <i class="fa fa-plus add_answer" style="color:green;font-size: 19px;cursor: pointer;"></i>  </label>
                                <div class="col-sm-10">
                                </div>
                                <div class="col-md-12" id="putInput">
                                    <?php if(isset($answers)){
                                        $x=0;
                                        while($row = $answers->fetch_assoc()) {
                                        ?>
                                    <div class="col-md-6">
                                        <input type="text" name="answer[]" class="form-control" id="inputPassword3" placeholder="الاجابة" value="<?php echo $row['answer'];?>">
                                        <?php if($x>0){?>
                                        <i class="fa fa-times delete_answer" style="color: red;font-size: 24px;cursor: pointer;position: absolute;margin-top: -31px;left: -14px;"></i>
                                        <?php }?>
                                    </div>
                                    <br/>
                                    <?php  $x++; } }else{?>
                                        <div class="col-md-6">
                                            <input type="text" name="answer[]" class="form-control" id="inputPassword3" placeholder="الاجابة">
                                        </div>
                                        <br/>
                                    <?php }?>
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
