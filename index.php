<?php
include("./admin/class/function.php");

$obj = new admin_blog();

$display_post = $obj->display_post_public();
$recent_post = $obj->display_post_public();
$categories = $obj->display_post_public();
$tags = $obj->display_post_public();

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
    <?php include_once("./includes/banner.php") ?>
    <!-- Banner Ends Here -->

    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        <div class="row">
                            <div class="col-lg-8">
                                <span>Ahsanul Hadi</span>
                                <h4>Muhammad-E-Darbar</h4>
                            </div>
                            <div class="col-lg-4">
                                <div class="main-button">
                                    <a rel="nofollow" href="" target="_blank">About Me</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="row">
                            <?php while ($fatch_all_display_post = mysqli_fetch_assoc($display_post)) { ?>
                                <div class="col-lg-12">
                                    <div class="blog-post">
                                        <div class="blog-thumb">
                                            <img src="./upload/<?php echo $fatch_all_display_post["post_img"] ?>" alt="">
                                        </div>
                                        <div class="down-content">
                                            <span><?php echo $fatch_all_display_post["caterory_title"] ?></span>
                                            <a href="post_details.php?view=post_view&&id=<?php echo $fatch_all_display_post["post_id"] ?>">
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
                                                    <div class="col-6">
                                                        <ul class="post-tags">
                                                            <li><i class="fa fa-tags"></i></li>
                                                            <li><a href="#"><?php echo $fatch_all_display_post["post_tag"] ?></a></li>
                                                            <!-- <li><a href="#">Nature</a></li> -->
                                                        </ul>
                                                    </div>
                                                    <div class="col-6">
                                                        <ul class="post-share">
                                                            <li><i class="fa fa-share-alt"></i></li>
                                                            <li><a href="#">Facebook</a>,</li>
                                                            <li><a href="#"> Twitter</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- <div class="col-lg-12">
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                        <img src="assets/images/blog-post-02.jpg" alt="">
                                    </div>
                                    <div class="down-content">
                                        <span>Healthy</span>
                                        <a href="post-details.html">
                                            <h4>Etiam id diam vitae lorem dictum</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#">May 24, 2020</a></li>
                                            <li><a href="#">36 Comments</a></li>
                                        </ul>
                                        <p>You can support us by contributing a little via PayPal. Please contact <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">TemplateMo</a> via Live Chat or Email. If you have any question or feedback about this template, feel free to talk to us. Also, you may check other CSS templates such as <a rel="nofollow" href="https://templatemo.com/tag/multi-page" target="_parent">multi-page</a>, <a rel="nofollow" href="https://templatemo.com/tag/resume" target="_parent">resume</a>, <a rel="nofollow" href="https://templatemo.com/tag/video" target="_parent">video</a>, etc.</p>
                                        <div class="post-options">
                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-tags"></i></li>
                                                        <li><a href="#">Best Templates</a>,</li>
                                                        <li><a href="#">TemplateMo</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="post-share">
                                                        <li><i class="fa fa-share-alt"></i></li>
                                                        <li><a href="#">Facebook</a>,</li>
                                                        <li><a href="#">Twitter</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                        <img src="assets/images/blog-post-03.jpg" alt="">
                                    </div>
                                    <div class="down-content">
                                        <span>Fashion</span>
                                        <a href="post-details.html">
                                            <h4>Donec tincidunt leo nec magna</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#">May 14, 2020</a></li>
                                            <li><a href="#">48 Comments</a></li>
                                        </ul>
                                        <p>Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet. Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo. Phasellus interdum, diam commodo egestas rhoncus, turpis nisi consectetur nibh, in vehicula eros orci vel neque.</p>
                                        <div class="post-options">
                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-tags"></i></li>
                                                        <li><a href="#">HTML CSS</a>,</li>
                                                        <li><a href="#">Photoshop</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="post-share">
                                                        <li><i class="fa fa-share-alt"></i></li>
                                                        <li><a href="#">Facebook</a>,</li>
                                                        <li><a href="#">Twitter</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="main-button">
                                    <a href="blog.html">View All Posts</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <?php include_once("./includes/side_bar.php") ?>
            </div>
        </div>
    </section>


    <?php include_once("./includes/footer.php") ?>

    <!-- Bootstrap core JavaScript -->
    <?php include_once("./includes/script.php") ?>

</body>

</html>