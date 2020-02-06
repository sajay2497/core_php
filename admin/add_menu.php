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
              <h3 class="box-title">Add Menu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Enter Menu</label>

                  <div class="col-sm-10">
                    <input type="text" name="menu" class="form-control" id="inputEmail3" placeholder="Menu">
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
    $menu= $_POST['menu'];
    if ($menu== '') {
      ?>
        <script type="text/javascript">
          swal({
            title: "Bed job!",
            text: "Enter Menu",
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
  text: "Add Your Menu",
  icon: "success",
  button: "OK!",
  timer: 1000
});
</script>
<?php
      $sql="INSERT INTO `menu`(`id`, `menu_name`) VALUES (' ','$menu')";
      mysqli_query($con,$sql);
      }
    }

  


 ?>