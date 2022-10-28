<?php

if (isset($_POST["category_submit"])) {
    $return_category_message = $objadminblog->add_category($_POST);
}
?>



<div class="container my-4 p-4">
    <p align="center">
        <?php
        if (isset($return_category_message)) {
            echo $return_category_message;
        }
        ?>
    </p>
    <h1>Add Category</h1>

    <form action="" method="post">
        <div class="form-group mb-3">
            <label class="mb-1" for="inputCategory">Category : </label>
            <input class="form-control py-4" id="inputCategory" name="category" type="text" placeholder="Enter Category Name" />
        </div>
        <div class="form-group mb-3">
            <label class="mb-1" for="inputCategoryDiscription">Category Distription : </label>
            <textarea class="form-control" id="inputCategoryDiscription" name="category_discription" placeholder="Enter Category Disctription"></textarea>
            <!-- <input class="form-control py-4" id="inputCategoryDiscription" name="category_discription" type="text" placeholder="Enter Category Name" /> -->
        </div>
        <input type="submit" value="Add Category" name="category_submit" class="btn btn-primary">
    </form>
</div>