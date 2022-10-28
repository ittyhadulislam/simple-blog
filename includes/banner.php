<?php

$obj = new admin_blog();

$banners = $obj->display_post_public();
?>

<div class="main-banner header-text">
    <div class="container-fluid">
        <div class="owl-banner owl-carousel">
            <!-- owl-carousel -->
            <?php while ($fatch_all_banner = mysqli_fetch_assoc($banners)) { ?>
                <div class="item">
                    <img src="./upload/<?php echo $fatch_all_banner["post_img"] ?>" alt="">
                    <div class="item-content">
                        <div class="main-content">
                            <div class="meta-category">
                                <span><?php echo $fatch_all_banner["caterory_title"] ?></span>
                            </div>
                            <a href="post-details.html">
                                <h4><?php echo $fatch_all_banner["post_title"] ?></h4>
                            </a>
                            <ul class="post-info">
                                <li><a href="#"><?php echo $fatch_all_banner["post_author"] ?></a></li>
                                <li><a href="#"><?php echo $fatch_all_banner["post_date"] ?></a></li>
                                <li><a href="#">12 Comments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- <div class="item">
                <img src="assets/images/banner-item-02.jpg" alt="">
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                            <span>Nature</span>
                        </div>
                        <a href="post-details.html">
                            <h4>Donec porttitor augue at velit</h4>
                        </a>
                        <ul class="post-info">
                            <li><a href="#">Admin</a></li>
                            <li><a href="#">May 14, 2020</a></li>
                            <li><a href="#">24 Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <!-- <div class="item">
                <img src="assets/images/banner-item-03.jpg" alt="">
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                            <span>Lifestyle</span>
                        </div>
                        <a href="post-details.html">
                            <h4>Best HTML Templates on TemplateMo</h4>
                        </a>
                        <ul class="post-info">
                            <li><a href="#">Admin</a></li>
                            <li><a href="#">May 16, 2020</a></li>
                            <li><a href="#">36 Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="assets/images/banner-item-04.jpg" alt="">
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                            <span>Fashion</span>
                        </div>
                        <a href="post-details.html">
                            <h4>Responsive and Mobile Ready Layouts</h4>
                        </a>
                        <ul class="post-info">
                            <li><a href="#">Admin</a></li>
                            <li><a href="#">May 18, 2020</a></li>
                            <li><a href="#">48 Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="assets/images/banner-item-05.jpg" alt="">
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                            <span>Nature</span>
                        </div>
                        <a href="post-details.html">
                            <h4>Cras congue sed augue id ullamcorper</h4>
                        </a>
                        <ul class="post-info">
                            <li><a href="#">Admin</a></li>
                            <li><a href="#">May 24, 2020</a></li>
                            <li><a href="#">64 Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="assets/images/banner-item-06.jpg" alt="">
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                            <span>Lifestyle</span>
                        </div>
                        <a href="post-details.html">
                            <h4>Suspendisse nec aliquet ligula</h4>
                        </a>
                        <ul class="post-info">
                            <li><a href="#">Admin</a></li>
                            <li><a href="#">May 26, 2020</a></li>
                            <li><a href="#">72 Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>