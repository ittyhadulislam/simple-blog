<?php
$read_data = $objadminblog->display_post();
if (isset($_GET["status"])) {
    if ($_GET["status"] == "delete") {
        $id = $_GET["id"];
        $objadminblog->delete_post($id);
    }
}

?>

<div class="container my-4 p-4">
    <h1>Manage Post</h1>
    <table class="table table-responsive">
        <thead>
            <th>ID</th>
            <th>POST Title</th>
            <!-- <th>POST Content</th> -->
            <th>POST Image</th>
            <th>POST Category</th>
            <th>POST Author</th>
            <th>POST Date</th>
            <!-- <th>POST Comment Count</th> -->
            <!-- <th>POST Summery</th> -->
            <th>POST Tag</th>
            <th>POST Status</th>
        </thead>
        <tbody>
            <?php while ($fatch_data = mysqli_fetch_assoc($read_data)) { ?>
                <tr>
                    <td><?php echo $fatch_data["post_id"] ?></td>
                    <td><?php echo $fatch_data["post_title"] ?></td>
                    <!-- <td><?php
                                // echo $fatch_data["post_content"] 
                                ?></td> -->
                    <td><img style="height:100px;" src="../upload/<?php echo $fatch_data["post_img"] ?>">
                        <br>
                        <a href="edit_img.php?status=edit_img&&id=<?php echo $fatch_data["post_id"] ?>">Chnage Image</a>
                    </td>

                    <td><?php echo $fatch_data["caterory_title"] ?></td>
                    <td><?php echo $fatch_data["post_author"] ?></td>
                    <td><?php echo $fatch_data["post_date"] ?></td>
                    <!-- <td><?php
                                // echo $fatch_data["post_comment_count"] 
                                ?></td> -->
                    <!-- <td><?php
                                // echo $fatch_data["post_summery"] 
                                ?></td> -->
                    <td><?php echo $fatch_data["post_tag"] ?></td>
                    <td>
                        <?php
                        if ($fatch_data["post_status"] == 1) {
                            echo "Published";
                        } else {
                            echo "Unpublished";
                        }
                        ?>
                    </td>
                    <td>
                        <a href="edit_post.php?status=edit_post&&id=<?php echo $fatch_data["post_id"] ?>" value="edit" class="btn btn-primary">Edit</a>
                        <a href="?status=delete&&id=<?php echo $fatch_data["post_id"] ?>" value="delete" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>