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
}
