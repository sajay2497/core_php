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
              <h3 class="box-title">Add Slider</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Video Link</label>

                  <div class="col-sm-10">
                    <input type="text" name="video" class="form-control" id="inputEmail3" placeholder="Video Link &nbsp; &nbsp;Ex.https://www.youtube.com/watch?v=ZYztvGcQuns">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Video Name</label>

                  <div class="col-sm-10">
                    <input type="text" name="video_name" class="form-control" id="inputEmail3" placeholder="Video Name ">
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
  if (isset($_POST['submit'])) {
    $video= $_POST['video'];
    $video_name = $_POST['video_name'];
    $arrs =  (explode("=",$video));
    $v_path = end($arrs);
    if ($v_path=='' OR $video_name=='') {
      ?>
        <script type="text/javascript">
          swal({
            title: "Bed job!",
            text: "Past Video Link & Video Name",
            icon: "error",
            button: "OK!",
          });
         </script>
      <?php
      }else{
?>
<script type="text/javascript">
  swal({
  title: "Good job!",
  text: "Add Video Link & Video Name",
  icon: "success",
  button: "OK!",
  timer: 1000
});
</script>
<?php
      $sql="INSERT INTO `video`(`id`, `video_link`,`video_name`) VALUES (' ','$v_path','$video_name')";
      mysqli_query($con,$sql);
      }
    }

  


 ?>