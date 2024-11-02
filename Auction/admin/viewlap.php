<?php
include("header.php");

include("config.php");
?>



    




      

<div class="container-fluid pt-4 ">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Category</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
         
          <th scope="col">Product Name</th>
          <th scope="col">Description</th>
          <th scope="col">Price</th>
          <th scope="col">SDate</th>
          <th scope="col">EDate</th>
          <th scope="col">Image </th>
        
                                    </tr>
                                </thead>
                                <tbody>
      <tbody>
        <tr>
        
        <?php
                            $sql = "SELECT * FROM  tbl_laptop";

                            $res  = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($res) > 0){
                                  while($data = mysqli_fetch_array($res)){

                                ?>
                                <tr>
                                    <th scope="row"><?php  echo $data['lapid'];?></th>
                                    <td><?php  echo $data['subname'];?></td>
                                    <td><?php  echo $data['descption'];?></td>
                                    <td><?php  echo $data['price'];?></td>
                                    <td><?php  echo $data['sdate'];?></td>
                                    <td><?php  echo $data['edate'];?></td>
                                    <td><img src="img/<?php echo $data['image'];?>" width="80" height="80"></td>
                                                  
                                                
                                   <!-- <td><?php  echo $data['catname'];?> </td>   -->
                                    <?php
                                echo "<td><a href='editlap.php?lapid=".$data['lapid']."'><button class='btn btn-warning'>EDIT</button></a></td>";
                                ?>                                     
                                <?php
                               echo "<td><a href='deletelap.php?lapid=".$data['lapid']."'><button class='btn btn-danger'>DELETE</button></a></td>";
                               ?> 
                                </tr>
                                <?php
                                }}
                                ?>              
        </tr>
        
      </tbody>
    </table>
    <!-- End Table with stripped rows -->

  </div>
</div>

<?php
include("footer.php");
?>