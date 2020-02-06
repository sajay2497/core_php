<?php 
include_once 'include/header.php';
include_once 'include/left_side.php';
 ?> 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>

    </section>

    <!-- Main content -->

<div class="col-md-12" style="margin-top: 20px;">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Massage</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Upload file</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="word"  accept="application/pdf, application/msword">
                    <span style=" color: red">Note: Upload Only PDF and Docx</span>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Add Massage To Print</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="text_word" >
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="submit" name="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
          
          <!-- /.box -->
        </div>







    <!-- /.content -->
  </div>
 <?php 
include_once 'include/footer.php';
  ?>


  <?php
   if(isset($_POST['submit'])){
        echo $text_word = $_POST['text_word'];
        $img       = $_FILES['word']['name'];
        $img       = preg_replace('/[\s]+/','_',$img);
        $temp_name = $_FILES['word']['tmp_name'];
        $size      = $_FILES['word']['size'];
        $path = "wordfile/".$img;
           if($img=='' OR $text_word==''){
                  ?>
              <script type="text/javascript">
                swal({
                title: "Bed job!",
                text: "Chose Any Images",
                icon: "error",
              });
               </script>
                  <?php
           }
else{
            ?>
<script type="text/javascript">
            swal({
              title: "Good job!",
              text: "Your Images successfully Submit",
              icon: "success",
              timer: 1000
            });
                  </script>
                  <?php
             $sql ="INSERT INTO `massage`(`id`, `massage_name`, `text_word`) VALUES ('','$img','$text_word')";
           mysqli_query($con,$sql);
           move_uploaded_file($temp_name, $path);
           }
              
        
        
   }

?>
