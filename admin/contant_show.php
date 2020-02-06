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
              <h3 class="box-title">Contant</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 10%">S no.</th>
                  <th>Hadding</th>
                  <th >Main body</th>
                  <th style="width: 30%">Action</th>
                  
                </tr>
                </thead>
                <tbody>

<?php 
  $menu="SELECT * FROM `contant`";
  $result=mysqli_query($con,$menu);
  $s=1;
  while ($row =mysqli_fetch_array($result)){
    ?>                  
                <tr>
                  <td><?php echo $s++ ?></td>
                  <td><?php echo $row['hadding']; ?></td>
                  <td><?php echo $row['main_body']; ?></td>
                  
                  <td><a href="edit_contant.php?id=<?php echo $row['id']; ?>" class="btn-warning btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a> &nbsp;&nbsp;&nbsp;<a href="delete_contant.php?id=<?php echo $row['id']; ?>" class="btn-danger btn"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a></td>
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