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
<?php

    $edit_record= $_GET['id'];
    $query="SELECT * FROM `slider` WHERE id='$edit_record'";
     $show=mysqli_query($con,$query);
  $row=mysqli_fetch_array($show); 

  ?>
<div class="col-md-12" style="margin-top: 20px;">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Update Slider</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="form-group" style="margin-left: 30px;"> 
                <label>Images Preview</label> <br><br>
                  <?php echo'<img height="80" width="120" src="images_upload/'.$row['slider_name'].'">'; ?> 
                </div>
                <br>
                <div class="form-group">
                  <label for="inputEmail3"  class="col-sm-2 control-label">Add Slider</label>

                  <div class="col-sm-10">
                    <input type="file" name="slider_img" class="form-control" id="inputEmail3">
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
      $id        = $_POST['id'];
        $img       = $_FILES['slider_img']['name'];
        $temp_name = $_FILES['slider_img']['tmp_name'];
        $size      = $_FILES['slider_img']['size'];
        $path = "images_upload/".$img;
           if($img == ''){
                  echo "<script>alert('Your data is not Submit');</script>";
           }
           else{
             $sql ="UPDATE `slider` SET `slider_name`='$img' WHERE  id='$id'";
           mysqli_query($con,$sql);
           move_uploaded_file($temp_name, $path);
           ?>
           <script>window.open('show_slider.php','_self')</script>
           <?php
           }
              
        
        
   }
?>