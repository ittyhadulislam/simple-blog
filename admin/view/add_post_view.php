<?php

$category_name = $objadminblog->display_category();

if (isset($_POST["post_submit"])) {
    $return_post_message = $objadminblog->add_post($_POST);
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
    <h1>Add Post</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label class="mb-1 py-4" for="inputPostImage">Post Thumbnail Image : </label><br>
            <input class="py-0" id="inputPostFiles" name="post_image" type="file" />
        </div>
        <div class="form-group mb-3">
            <label class="mb-1" for="inputPostCategory">Post Category : </label>
            <select class="form-control" name="post_category" id="inputPostCategory">
                <?php while ($category = mysqli_fetch_assoc($category_name)) { ?>
                    <option value="<?php echo $category["category_id"] ?>"><?php echo $category["caterory_title"] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group mb-3">
            <label class="mb-1" for="inputPostTitle">Post Title : </label>
            <input class="form-control py-4" id="inputPost" name="post_title" type="text" />
        </div>
        <div class="form-group mb-3">
            <label class="mb-1" for="inputPostDiscription">Post Content : </label>
            <textarea class="form-control" id="inputPostDiscription" name="post_discription"></textarea>
        </div>
        <div class="form-group mb-3">
            <label class="mb-1" for="inputPostSummary">Post Summary : </label>
            <textarea class="form-control" id="iinputPostSummary" name="post_summery"></textarea>
        </div>
        <div class="form-group mb-3">
            <label class="mb-1" for="inputPostTag">Post Tag : </label>
            <input class="form-control py-4" id="inputPostTag" name="post_tag" type="text" />
        </div>
        <div class="form-group mb-3">
            <label class="mb-1" for="inputPostStatus">Post Status : </label>
            <select class="form-control" name="post_status" id="inputPostStatus">
                <option value="1">Published</option>
                <option value="0">Unpublished</option>
            </select>
        </div>
        <input type="submit" value="Add_Post" name="post_submit" class="btn btn-primary">
    </form>
</div>