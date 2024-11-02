

<?php
include("header.php");

// include("sidenav.php");
?>



<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                            <form action="actioncategory.php" method="POST" enctype="multipart/form-data">
   
                            <div class="col-12">
        <label for="inputNanme4" class="form-label">Category Name</label>
        <input type="text" name="catname" class="form-control" id="inputNanme4">
      </div>
                                </div>
                                
                                <div class="">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        
      </div>
                            </form>
                        </div>
                    </div>
                    <?php
include("footer.php");

// include("sidenav.php");
?>
