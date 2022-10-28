<?php
include("./admin/class/function.php");
$obj = new admin_blog();
$display_post = $obj->display_post_public();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once("./includes/head.php") ?>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <?php include_once("./includes/navbar.php") ?>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Recent Posts</h4>
                            <h2>Our Recent Blog Entries</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Banner Ends Here -->

    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        <div class="row">
                            <div class="col-lg-8">
                                <span>Ahsanul Hadi</span>
                                <h4>Muhammad-E_Darbar</h4>
                            </div>
                            <div class="col-lg-4">
                                <div class="main-button">
                                    <a href="" target="_blank">About ME</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-posts grid-system">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="row">
                            <?php while ($fatch_all_display_post = mysqli_fetch_assoc($display_post)) { ?>
                                <div class="col-lg-6">
                                    <div class="blog-post">
                                        <div class="blog-thumb">
                                            <img src="./upload/<?php echo $fatch_all_display_post["post_img"] ?>" alt="">
                                        </div>
                                        <div class="down-content">
                                            <span><?php echo $fatch_all_display_post["caterory_title"] ?></span>
                                            <a href="post-details.html">
                                                <h4><?php echo $fatch_all_display_post["post_title"] ?></h4>
                                            </a>
                                            <ul class="post-info">
                                                <li><a href="#"><?php echo $fatch_all_display_post["post_author"] ?></a></li>
                                                <li><a href="#"><?php echo $fatch_all_display_post["post_date"] ?></a></li>
                                                <!-- <li><a href="#">12 Comments</a></li> -->
                                            </ul>
                                            <p><?php echo $fatch_all_display_post["post_summery"] ?></p>
                                            <div class="post-options">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <ul class="post-tags">
                                                            <li><i class="fa fa-tags"></i></li>
                                                            <li><a href="#">Best Templates</a>,</li>
                                                            <li><a href="#">TemplateMo</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- <div class="col-lg-12">
                                <ul class="page-numbers">
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
                <?php include_once("./includes/side_bar.php") ?>
            </div>
        </div>
    </section>



    <?php include_once("./includes/footer.php") ?>


    <?php include_once("./includes/script.php") ?>

</body>

</html>