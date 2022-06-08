<?php
 class dbname{
 var $server = "localhost";
 var $user = "root";
 var $pass = "";
 var $dbname = "arsip";
 var $koneksi; 
 
 function __construct(){
        $this->koneksi = mysqli_connect($this->server, $this->user, $this->pass,$this->dbname);
    }


    function register($username,$password,$nama)
    {   
        $insert = mysqli_query($this->koneksi,"insert into tb_user values ('','$username','$password','$nama')");
        return $insert;
    }

    function login($username,$password,$remember)
    {
        $query = mysqli_query($this->koneksi,"select * from tb_user where username='$username'");
        $data_user = $query->fetch_array();
        if(password_verify($password,$data_user['password']))
        {

            if($remember)
            {
                setcookie('username', $user, time() + (60 * 60 * 24 * 5), '/');
                setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
            }
            $_SESSION['username'] = $user;
            $_SESSION['nama'] = $data_user['nama'];
            $_SESSION['is_login'] = TRUE;
            return TRUE;
        }
    }

    function relogin($username)
    {
        $query = mysqli_query($this->koneksi,"select * from tb_user where username='$username'");
        $data_user = $query->fetch_array();
        $_SESSION['username'] = $user;
        $_SESSION['nama'] = $data_user['nama'];
        $_SESSION['is_login'] = TRUE;
    } 
}
?>