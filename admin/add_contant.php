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

 <section class="content">
      <div class="row">
        <div class="col-md-12">
          

          <div class="box" >
            <div class="box-header">
              
              <!-- tools box -->
              
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              
              <form class="form-horizontal" method="POST">
          <div class="box-body" style="margin-bottom: 20px;">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Hadding</label>

                  <div class="col-sm-10">
                    <input type="text" name="hadding" class="form-control" id="inputEmail3" placeholder="Hadding">
                  </div>
                </div>
            </div>
                <textarea class="textarea" name="main_body" placeholder="Place some text here"
                          style="width: 100%; height: 200px; margin-top: 20px font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>


              <div class="box-footer">
                
                <button type="submit" name="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>







    <!-- /.content -->
  </div>
 <?php 
include_once 'include/footer.php';
  ?>


  <?php 
  if (isset($_POST['submit'])) {
    $hadding= $_POST['hadding'];
    $main_body= $_POST['main_body'];
    if ($hadding== '' OR $main_body=='') {
      ?>
        <script type="text/javascript">
          swal({
            title: "Bed job!",
            text: "Enter Haddind & Content",
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
  text: "your Haddind & Content successfully Submit",
  icon: "success",
  button: "OK!",
  timer: 1000
});
</script>
<?php
      $sql="INSERT INTO `contant`(`id`, `hadding`, `main_body`) VALUES (' ','$hadding','$main_body')";
      mysqli_query($con,$sql);
      }
    }

  


 ?>