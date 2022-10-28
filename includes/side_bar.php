<?php

$obj = new admin_blog();

$display_post = $obj->display_post_public();
$recent_post = $obj->display_post_public();
$categories = $obj->display_post_public();
$tags = $obj->display_post_public();

?>


<div class="col-lg-4">
    <div class="sidebar">
        <div class="row">
            <!-- <div class="col-lg-12">
                                <div class="sidebar-item search">
                                    <form id="search_form" name="gs" method="GET" action="#">
                                        <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                                    </form>
                                </div>
                            </div> -->
            <div class="col-lg-12">
                <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                        <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                        <ul>
                            <?php while ($fatch_all_recent_post = mysqli_fetch_assoc($recent_post)) { ?>
                                <li>
                                    <a href="post-details.html">
                                        <h5><?php echo $fatch_all_recent_post["post_title"] ?></h5>
                                        <span><?php echo $fatch_all_recent_post["post_date"] ?></span>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                        <h2>Categories</h2>
                    </div>
                    <div class="content">
                        <ul>
                            <?php while ($fatch_all_caregory = mysqli_fetch_assoc($categories)) { ?>
                                <li>
                                    <a href="#">- <?php echo $fatch_all_caregory["caterory_title"] ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                        <h2>Tag Clouds</h2>
                    </div>
                    <div class="content">
                        <ul>
                            <?php while ($fatch_all_tags = mysqli_fetch_assoc($tags)) { ?>
                                <li>
                                    <a href="#"><?php echo $fatch_all_tags["post_tag"] ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>