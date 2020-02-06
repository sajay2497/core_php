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
              <h3 class="box-title">Change Password</h3>
            </div>
            <!-- /.box-header -->
            <?php

    $query="SELECT * FROM `admin`";
     $show=mysqli_query($con,$query);
  $row=mysqli_fetch_array($show); 

  ?>
            <!-- form start -->
            <form class="form-horizontal" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Old Password</label>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                  <div class="col-sm-10">
                    <input type="text" name="old_password" class="form-control" id="inputEmail3" placeholder="Old Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">New Password</label>

                  <div class="col-sm-10">
                    <input type="text" name="new_password" class="form-control" id="inputEmail3" placeholder="New Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Again New Password</label>

                  <div class="col-sm-10">
                    <input type="text" name="new_password_t" class="form-control" id="inputEmail3" placeholder="Again New Password">
                  </div>
                </div>
                
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="submit" name="submit" class="btn btn-success pull-right">Change passwrod</button>
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
    $id         = $_POST['id'];
    $old_password= $_POST['old_password'];
    $new_password= $_POST['new_password'];
    $new_password_t= $_POST['new_password_t'];

    $old_p = $row['password'];

if ($old_p === $old_password) {

   if ($new_password === $new_password_t) {
      ?>
      <script type="text/javascript">
             swal({
  title: "Good job!",
  text: "Your Password Successfully Changed",
  icon: "success",
  button: "Ok",
  timer: 1000
});
      </script>
 
      <?php
      $new_sql="UPDATE `admin` SET `password`='$new_password' WHERE  id='$id'";
   mysqli_query($con,$new_sql);
       }
      else{
          ?>
        <script type="text/javascript">
             swal({
  title: "Bad job!",
  text: "Your New Password Is Not Match",
  icon: "error",
  button: "Ok",
});
      </script>
      <?php
      } 
     
    }

    else{
      ?>
        <script type="text/javascript">
             swal({
  title: "Bad job!",
  text: "Your Old Password Is Not Match",
  icon: "error",
  button: "Ok",
});
      </script>
      <?php
    }

}
 ?>