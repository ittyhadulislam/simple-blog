<?php
    if(isset($_GET["status"]))
    {
        if($_GET["status"] == "edit_img")
        {
            $post_id = $_GET["id"];
            
        }
    }
?>


<form action="" method="post" enctype="multipart/form-data">
    <div class="container my-5 p-5 shadow">
        <div class="form-group mb-3">
            <label class="mb-1 py-4" for="inputPostImage">Change Thumbnail Image : </label><br>
            <input class="py-0" id="inputPostFiles" name="post_image" type="file" />
        </div>

        <input type="submit" value="Update Thumbnail" class="btn btn-primary" name = "update_img">
    </div>
</form>