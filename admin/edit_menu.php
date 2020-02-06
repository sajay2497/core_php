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
    $query="SELECT * FROM `menu` WHERE id='$edit_record'";
     $show=mysqli_query($con,$query);
  $row=mysqli_fetch_array($show); 

  ?>
<div class="col-md-12" style="margin-top: 20px;">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Update Menu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST">
              <div class="box-body">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Enter Menu</label>

                  <div class="col-sm-10">
                    <input type="text" name="menu" class="form-control" id="inputEmail3" value="<?php echo $row['menu_name'] ?>">
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
    $id         = $_POST['id'];
    $menu_update= $_POST['menu'];

   $new_sql="UPDATE `menu` SET `menu_name`='$menu_update' WHERE  id='$id'";
   mysqli_query($con,$new_sql);
?>

   <script>window.open('menu_show.php','_self')</script>

<?php
}
  ?>