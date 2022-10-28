<?php
include("./class/function.php");
$objadminblog = new admin_blog();
session_start();
$id = $_SESSION["admin_id"];

if ($id == null) {
    header("location:index.php");
}

if (isset($_GET["adminlogout"])) {
    if ($_GET["adminlogout"] == "logout") {
        $objadminblog->admin_logout();
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<!-- header file -->
<?php include_once("./includes/head.php"); ?>

<body class="sb-nav-fixed">
    <!-- top navber -->
    <?php include_once("./includes/topnav.php"); ?>
    <div id="layoutSidenav">
        <!-- side navber -->
        <?php include_once("./includes/sidenav.php"); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <?php
                    if (isset($view)) {
                        if ($view == "dashboard") {
                            include("./view/dashboard_view.php");
                        } elseif ($view == "add_category") {
                            include("./view/add_category_view.php");
                        } elseif ($view == "add_post") {
                            include("./view/add_post_view.php");
                        } elseif ($view == "manage_category") {
                            include("./view/manage_category_view.php");
                        } elseif ($view == "manage_post") {
                            include("./view/manage_post_view.php");
                        } elseif ($view == "edit_img") {
                            include("./view/edit_img_view.php");
                        } elseif ($view == "edit_post") {
                            include("./view/edit_post_view.php");
                        }
                    }
                    ?>
                </div>
            </main>
            <!-- footer side -->
            <?php include_once("./includes/footer.php"); ?>
        </div>
    </div>
    <?php include_once("./includes/js.php"); ?>
</body>

</html>