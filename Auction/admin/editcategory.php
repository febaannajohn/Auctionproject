<?php
include("header.php");

// include("sidenav.php");
?>



<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                            <form action="editactcategory.php?catid=<?php echo $_REQUEST['catid']?>" method="POST" enctype="multipart/form-data">
                    <?php
                    include('config.php');
                    $catid=$_GET['catid'];
                    $sql="SELECT * FROM `categories` WHERE catid ='$catid'";
                    $res=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($res))
                    {
                    ?> 
                        <div class="body">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-8">
                                        <b>Name</b>
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input name="catname" value="<?php echo $row['catname'];?>" type="text" class="form-control date">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                    </div>
                                <button name="submit" class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                     </form>
                    </div>
                </div>
            </div>

                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                    <?php
include("footer.php");

// include("sidenav.php");
?>




    

