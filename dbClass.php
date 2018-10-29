<?php
//$conn=mysqli_connect("localhost",$user, $pass,$db_name);
class dbClass
{
    private $userName;
    private $password;
    private $hostname;
    private $db_name;
    private $conn;

    /*Database Class Constructor*/

    /*Function user Having Insert Rights*/
    public function insertData($data)
    {
        $this->userName = "root";    //dbUser Insert Access ->UserName
        $this->password = "";        //dbUser Insert Access -> password
        //ConnectDb();
        if (!mysqli_connect($this->hostname, $this->userName, $this->password)) {
            die("unable to connect");
        } else {
            echo "<Script>alert('connected sucessful');</script>";
            if (!mysqli_select_db($this->conn, $this->db_name)) {
                echo "database selected sucessfully";
                $result = array();
                if ($check = mysqli_query($this->conn, $data)) {
                    $result['status'] = 'success';
                } else {
                    $result['status'] = 'error';
                }
                echo json_encode($result);
            }
        }
        mysqli_close($this->conn);

    }
    /*--------->>>> InsertData Ends ENDS <<<<-----------*/
    /*Database Class Constructor*/
    public function __construct()
    {
        $this->userName = "root";    //db User Name
        $this->password = "";        // db User Password
        $this->hostname = "localhost";  //HostName
        $this->db_name = "dbiproupdated";  //database name
        $this->conn = mysqli_connect($this->hostname, $this->userName, $this->password, $this->db_name);
        if (!mysqli_connect($this->hostname, $this->userName, $this->password)) {
            die("unable to connect");
        } else {
            echo "<Script>alert('connected sucessful');</script>";
            if (!mysqli_select_db($this->conn, $this->db_name)) {
                echo "database selected sucessfully";
            }

        }
    }


    /*--------->>>> Constructor ENDS <<<<-----------*/

    function closeConnection()
    {
        mysqli_close($this->conn); //to Close Database Connection
    }

    /*--------->>>> jsonGet Start <<<<-----------*/
    /*This will Return JSON data -> Need to decode in php  use function json_decode($var name)*/
    /*--------->>>> jsonGet ENDS <<<<-----------*/

    /*--------->>>> iud Start <<<<-----------*/
    /*This procedure is to perform Insert Update Delete operations -> can be used with Sql Query and Stored Procedure Call both*/
    function iudCall($data)
    {
        //$query=$data;
//        $result = array();
        if ($check = mysqli_query($this->conn, $data)) {
            echo "<Script>alert('Insert sucessful');</script>";
            //  return true;
        } else {
            $myee = mysqli_error($this->conn);
            //echo "<Script>alert('he.$myee');</script>";

        //    return false;
        }
        //echo json_encode($result);
    }
    /*--------->>>> iud ENDS <<<<-----------*/

    /*--------->>>> verifyEmail Start <<<<-----------*/
    /*This Check if user name or mobile number Exist in database or not*/

    function select($qry){
        $result[]=array();
        if ($check = mysqli_query($this->conn, $qry)) {

            return $check;
        } else {
            return false;
        }
    }
}
?>
