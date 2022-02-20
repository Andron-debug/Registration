<?php 
    class DateBase
    {
        private $host;
        private $user;
        private $password;
        private $name;
        private $sql_con;
        public function __construct($Ht, $Ur, $Pw, $Nm)
        {
             $this -> host = $Ht;
             $this -> user = $Ur;
             $this -> password = $Pw;
             $this -> name = $Nm;
             $this -> sql_con = new mysqli($this -> host, $this -> user, $this -> password, $this -> name);
             if($this -> sql_con -> connect_errno) throw new Exeption($this -> sql_con -> error); 
        }
        public function Registration($Email, $Password)
        {
            $sql = "INSERT INTO `users`(`Email`, `Password`) VALUES ('".$Email."', '".$Password."')";
            $this -> sql_con -> query($sql);
        }
        public function IsEmailInBase($Email)
        {
            $sql = "SELECT * FROM `users` WHERE `Email` = '".$Email."'";
            $res = mysqli_query($this->sql_con, $sql);
            $user = mysqli_fetch_assoc($res);
            return !(empty($user));
        }
        public function IsPasswordOk($Email, $Password)
        {
            $sql = "SELECT * FROM `users` WHERE `Email` = '".$Email."' AND `Password` = '".$Password."'";
            $res = mysqli_query($this->sql_con, $sql);
            $user = mysqli_fetch_assoc($res);
            return !(empty($user));
        }
    }
?>