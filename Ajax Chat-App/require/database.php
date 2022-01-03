<?php
session_start();

class database{
    
    protected $hostname = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $database = "ajax_chat_box";

    protected $conn   = null;
    protected $query  = null;
    protected $result = null;

    public function __construct(){
        $this->conn = mysqli_connect($this->hostname,$this->username,$this->password,$this->database) or die("Connection Failed:".mysqli_connect_error());

    }

    public function login_process($email,$pass){

        $this->query = "SELECT * FROM `user` 
                    WHERE `email` = '".$email."' 
                    AND `password` = '".$pass."' 
                    AND `is_active` = 1";

        $this->result = mysqli_query($this->conn,$this->query);

        return $this->result;
    }

    public function register_process($name,$email,$pass){

        $this->query = "INSERT INTO `user` (`full_name`,`email`,`password`) VALUES ('$name','$email','$pass')";

        $this->result = mysqli_query($this->conn,$this->query);

        return $this->result;
    }


    public function set_online_status($user_id,$status){

        $this->query = "UPDATE `user` SET `is_online` = '".$status."'
                        WHERE `user_id` = ".$user_id;

        $this->result = mysqli_query($this->conn,$this->query);

        return $this->result;
    }


    public function show_msgs(){

        $this->query = "SELECT * FROM `user`,`chat` 
                        WHERE `user`.`user_id` = `chat`.`user_id` ORDER BY `chat`.`chat_id` DESC";

        $this->result = mysqli_query($this->conn,$this->query);

        return $this->result;
    }


    public function send_msgs($msg,$id,$time){

        $this->query = "INSERT INTO `chat` (`msg`,`user_id`,`added_on`) VALUES ('$msg',$id,'$time')";

        $this->result = mysqli_query($this->conn,$this->query) or die("error:".mysqli_error($this->conn));

        return $this->result;
    }


    public function show_online_users($status){

        $this->query = "SELECT * FROM `user` 
                        WHERE `is_online` = $status AND `full_name` != '".$_SESSION['user']['full_name']."' ";

        $this->result = mysqli_query($this->conn,$this->query);

        return $this->result;
    }


}


?>