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
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Cell Church</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 5%">Sno.</th>
                  <th>Day</th>
                  <th>Location</th>
                  <th>Time</th>
                  <th style="width: 20%">Map</th>
                  <th>Contact</th>
                  <th style="width: 20%">Action</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php 
  $menu="SELECT * FROM `cell_churches`";
  $result=mysqli_query($con,$menu);
  $s=1;
  while ($row =mysqli_fetch_array($result)){
    ?>
                <tr>
                  <td><?php echo $s++ ?></td>
                  <td><?php echo $row['Day']; ?></td>
                  <td><?php echo $row['Location']; ?></td>
                  <td><?php echo $row['Time']; ?></td>
                  <td>This is map Like</td>
                  <td><?php echo $row['Contact']; ?></td>
                   
                  
                  <td ><a href="edit_cell_church.php?id=<?php echo $row['id']; ?>" class="btn-warning btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a> &nbsp;&nbsp;&nbsp; <a href="delete_cell_church.php?id=<?php echo $row['id']; ?>" class="btn-danger btn"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a></td>
                </tr>
               <?php }?>
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
</div>

</div>
      <!-- /.row -->
    </section>







    <!-- /.content -->
  </div>
 <?php 
include_once 'include/footer.php';
  ?>