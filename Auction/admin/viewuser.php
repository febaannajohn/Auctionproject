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
         
          <th scope="col">User Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone Number</th>
         
        
                                    </tr>
                                </thead>
                                <tbody>
      <tbody>
        <tr>
        
        <?php
                            $sql = "SELECT * FROM  tbl_userregister";

                            $res  = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($res) > 0){
                                  while($data = mysqli_fetch_array($res)){

                                ?>
                                <tr>
                                    <th scope="row"><?php  echo $data['id'];?></th>
                                    <td><?php  echo $data['name'];?></td>
                                    <td><?php  echo $data['email'];?></td>
                                    <td><?php  echo $data['mobno'];?></td>
                                   
                                                                      
                               
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