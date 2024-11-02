
<?php
include("header.php");

// include("sidenav.php");
?>






<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Category</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php
                                    include("config.php");
                                    $res=mysqli_query($conn,"SELECT * FROM categories");
                                    while ($row=mysqli_fetch_array($res)) {
                                ?>
                                <tr>
                                    <th scope="row"><?php  echo $row['catid'];?></th>
                                    <td><?php  echo $row['catname'];?></td>
                                    
                                    <?php
                                echo "<td><a href='editcategory.php?catid=".$row['catid']."'><button class='btn btn-warning'>EDIT</button></a></td>";
                                ?>                                     
                                <?php
                                echo "<td><a href='deletecategory.php?catid=".$row['catid']."'><button class='btn btn-danger'>DELETE</button></a></td>";
                                ?> 
                                </tr>
                                <?php
                                }
                                ?>       
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>










<?php
include("footer.php");
?>
  