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
              <h3 class="box-title">Add Images</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Add Images</label>

                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="slider_img" id="inputEmail3">
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
      
        $img       = $_FILES['slider_img']['name'].uniqid();
        $temp_name = $_FILES['slider_img']['tmp_name'];
        $size      = $_FILES['slider_img']['size'];
        $path = "images_upload/".$img;
           if($img==''){
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
             $sql ="INSERT INTO `photo`(`id`, `photo_name`) VALUES ('','$img')";
           mysqli_query($con,$sql);
           move_uploaded_file($temp_name, $path);
           }
              
        
        
   }
?>