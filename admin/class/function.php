<?php
class admin_blog
{
    private $db_connection;

    public function __construct()
    {
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "blogproject";

        $this->db_connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

        if (!$this->db_connection) {
            die("connection unsuccessfull");
        }
        // else
        // {
        //     echo "connection successful";
        // }
    }

    public function admin_login($data)
    {
        $rsv_email = $data["email_login"];
        $rsv_pass  = md5($data["password_login"]);

        $query = "SELECT * FROM admin_info WHERE admin_email = '$rsv_email' AND admin_pass = '$rsv_pass'";

        if (mysqli_query($this->db_connection, $query)) {
            $admin_info = mysqli_query($this->db_connection, $query);
            if ($admin_info) {
                header("location:dashboard.php");
                $fatch_admin_data = mysqli_fetch_assoc($admin_info);
                session_start();
                $_SESSION["admin_id"]   = $fatch_admin_data["id"];
                $_SESSION["admin_name"] = $fatch_admin_data["admin_name"];
            }
        }
    }

    public function admin_logout()
    {
        unset($_SESSION["admin_id"]);
        unset($_SESSION["admin_name"]);

        header("location: index.php");
    }

    public function add_category($data)
    {
        $category_title = $data["category"];
        $category_discription = $data["category_discription"];

        $query = "INSERT INTO categories(caterory_title, category_discription) VALUE('{$category_title}', '{$category_discription}')";

        if (mysqli_query($this->db_connection, $query)) {
            return "Category added successfully";
        }
    }

    public function display_category()
    {
        $query = "SELECT * FROM categories";

        if (mysqli_query($this->db_connection, $query)) {
            $var = mysqli_query($this->db_connection, $query);
            return $var;
        }
    }

    public function delete_category($id)
    {
        $query = "DELETE FROM categories WHERE category_id= $id";
        if (mysqli_query($this->db_connection, $query)) {
            header("location: manage_category_view.php");
        }
    }

    public function add_post($data)
    {
        $post_title = $data["post_title"];
        $post_content = $data["post_discription"];
        $post_img = $_FILES["post_image"]["name"];
        $post_img_tmp = $_FILES["post_image"]["tmp_name"];
        $post_sum = $data["post_summery"];
        $post_tag = $data["post_tag"];
        $post_category = $data["post_category"];
        $post_status = $data["post_status"];

        $query = "INSERT INTO posts(post_title, post_content, post_img, post_category, post_author, post_date, post_comment_count, post_summery, post_tag, post_status) VALUE('$post_title','$post_content','$post_img','$post_category','Admin',now(),3,'$post_sum','$post_tag',$post_status)";

        if (mysqli_query($this->db_connection, $query)) {
            move_uploaded_file($post_img_tmp, "../upload/" . $post_img);

            return "Post added successfully";
        } else {
            return "Post added unsuccessfully";
        }
    }

    public function display_post()
    {
        $query = "SELECT * FROM post_and_category";

        if (mysqli_query($this->db_connection, $query)) {
            $var = mysqli_query($this->db_connection, $query);
            return $var;
        }
    }
    public function display_post_by_id($id)
    {
        $query = "SELECT * FROM post_and_category WHERE post_id=$id";

        if (mysqli_query($this->db_connection, $query)) {
            $post_info = mysqli_query($this->db_connection, $query);
            $post_data = mysqli_fetch_assoc($post_info);

            return $post_data;
        }
    }

    public function update_post($data)

    {

        $update_post_title = $data["update_post_title"];
        $update_post_discription = $data["update_post_discription"];
        $update_post_summery = $data["update_post_summery"];
        $update_post_category = $data["update_post_category"];
        $update_post_tag = $data["update_post_tag"];
        $update_post_status = $data["update_post_status"];
        $post_id = $data["post_id"];

        $query = "UPDATE posts SET post_title='$update_post_title', post_content='$update_post_discription', post_summery='$update_post_summery', post_category='$update_post_category', post_tag='$update_post_tag', post_status='$update_post_status' WHERE post_id=$post_id";

        if (mysqli_query($this->db_connection, $query)) {
            echo "<script>alert('Post Updated Successfully !! ');</script>";
        }
    }

    public function delete_post($id)
    {
        $take_row_query = "SELECT * FROM post_and_category WHERE post_id=$id";
        $connection_query = mysqli_query($this->db_connection, $take_row_query);
        $fatch_data_for_image = mysqli_fetch_assoc($connection_query);
        $delete_img = $fatch_data_for_image["post_img"];

        $delete_query = "DELETE FROM post_and_category WHERE post_id=$id";

        if (mysqli_query($this->db_connection, $delete_query)) {
            unlink("../upload/" . $delete_img);

            echo "<script>alert('Post Deleted Successfully !! ');</script>";
        }
    }

    public function display_post_public()
    {
        $query = "SELECT * FROM post_and_category WHERE post_status = 1";

        if (mysqli_query($this->db_connection, $query)) {
            $var = mysqli_query($this->db_connection, $query);
            return $var;
        }
    }
}
