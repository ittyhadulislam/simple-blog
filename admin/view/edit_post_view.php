<?php
// $edit = new admin_blog();
$category_name = $objadminblog->display_category();

if (isset($_GET["status"])) {
    if ($_GET["status"] == "edit_post") {
        $id = $_GET["id"];
        $display = $objadminblog->display_post_by_id($id);
    }
}
if (isset($_POST["update_post_submit"])) {
    $objadminblog->update_post($_POST);
}
?>


<div class="container my-4 p-4">
    <p align="center">
        <?php
        if (isset($return_post_message)) {
            echo $return_post_message;
        }
        ?>
    </p>
    <h1>Update Post</h1>

    <form action="" method="post">
        <div class="form-group mb-3">
            <input class="py-0" name="post_id" value="<?php echo $id ?>" />
        </div>
        <!-- <div class="form-group mb-3">
            <label class="mb-1 py-4" for="inputPostImage">Post Thumbnail Image : </label><br>
            <input class="py-0" id="inputPostFiles" name="post_image" type="file" />
        </div> -->
        <div class="form-group mb-3">
            <label class="mb-1" for="inputPostCategory">Post Category : </label>
            <select class="form-control" name="update_post_category" id="inputPostCategory">
                <?php while ($category = mysqli_fetch_assoc($category_name)) { ?>
                    <option value="<?php echo $category["category_id"] ?>"><?php echo $category["caterory_title"] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group mb-3">
            <label class="mb-1" for="inputPostTitle">Post Title : </label>
            <input class="form-control py-4" id="inputPost" name="update_post_title" type="text" value="<?php echo $display["post_title"] ?>" />
        </div>
        <div class=" form-group mb-3">
            <label class="mb-1" for="inputPostDiscription">Post Content : </label>
            <textarea class="form-control" id="inputPostDiscription" name="update_post_discription"><?php echo $display["post_content"] ?></textarea>
        </div>
        <div class=" form-group mb-3">
            <label class="mb-1" for="inputPostSummary">Post Summary : </label>
            <textarea class="form-control" id="iinputPostSummary" name="update_post_summery"><?php echo $display["post_summery"] ?></textarea>
        </div>
        <div class="form-group mb-3">
            <label class="mb-1" for="inputPostTag">Post Tag : </label>
            <input class="form-control py-4" id="inputPostTag" name="update_post_tag" type="text" value="<?php echo $display["post_tag"] ?>" />
        </div>
        <div class=" form-group mb-3">
            <label class="mb-1" for="inputPostStatus">Post Status : </label>
            <select class="form-control" name="update_post_status" id="inputPostStatus">
                <option value="1">Published</option>
                <option value="0">Unpublished</option>
            </select>
        </div>
        <input type="submit" value="Update Post" name="update_post_submit" class="btn btn-primary">
    </form>
</div>