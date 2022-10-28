<?php
$read_data = $objadminblog->display_category();
if (isset($_GET["status"])) {
    if ($_GET["status"] == "delete") {
        $id = $_GET["id"];
        $objadminblog->delete_category($id);
    }
}
?>

<div class="container my-4 p-4">
    <h1>Manage Category</h1>
    <table class="table table-responsive">
        <thead>
            <th>ID</th>
            <th>Category Name</th>
            <th>Category Discription</th>
        </thead>
        <tbody>
            <?php while ($fatch_data = mysqli_fetch_assoc($read_data)) { ?>
                <tr>
                    <td><?php echo $fatch_data["category_id"] ?></td>
                    <td><?php echo $fatch_data["caterory_title"] ?></td>
                    <td><?php echo $fatch_data["category_discription"] ?></td>
                    <td>
                        <a href="add_category.php?status=edit&&id=<?php echo $fatch_data["category_id"] ?>" value="edit" class="btn btn-primary">Edit</a>
                        <a href="?status=delete&&id=<?php echo $fatch_data["category_id"] ?>" value="delete" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>