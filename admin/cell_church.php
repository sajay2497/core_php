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
              <h3 class="box-title">Add Cell Church</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Day</label>

                  <div class="col-sm-10">
                    <input type="text" name="day" class="form-control" id="inputEmail3" placeholder="Day">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Location</label>

                  <div class="col-sm-10">
                    <input type="text" name="location" class="form-control" id="inputEmail3" placeholder="Location">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Time</label>

                  <div class="col-sm-10">
                    <input type="text" name="time" class="form-control" id="inputEmail3" placeholder="Time">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Map</label>

                  <div class="col-sm-10">
                    <input type="text" name="map" class="form-control" id="inputEmail3" placeholder="Map Link">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Contact</label>

                  <div class="col-sm-10">
                    <input type="text" name="contact" class="form-control" id="inputEmail3" placeholder="Contact">
                  </div>
                </div>



                
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="submit" name="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div >
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
    $day= $_POST['day'];
    $location= $_POST['location'];
    $time= $_POST['time'];
    $map= $_POST['map'];
    $contact= $_POST['contact'];
    if ($day== '' OR  $location== '' OR $time== '' OR $map== '' OR $contact== '' ) {
      ?>
        <script type="text/javascript">
          swal({
            title: "Bed job!",
            text: "Enter All Fild",
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
  text: "Add Your All Fild",
  icon: "success",
  button: "OK!",
  timer: 1000
});
</script>
<?php
      $sql="INSERT INTO `cell_churches`(`id`, `Day`, `Location`, `Time`, `map`, `Contact`) VALUES ('','$day','$location','$time','$map','$contact')";
      mysqli_query($con,$sql);
      }
    }

  


 ?>