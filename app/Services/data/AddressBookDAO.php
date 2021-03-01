<?php


namespace App\Services\data;
use App\Models\AddressModel;

error_reporting(E_ALL);
ini_set('display_errors', 1);



class AddressBookDAO 
{
    private $conn;
    private $servername = "localhost";
    private $username = "root";
    private $password = "root";
    private $dbname = "miniapp";
    private $dbQuery;
    private $port = "8889";
    
    public function __construct()
    {
        
        //Creating a connection to database
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname, $this->port);
        //make sure to test connection for errors
    }
    
    public function deleteUser(AddressModel $user)
    {
        $id = $user->getId();
        
        $sql_statment  = "DELETE FROM `address` WHERE `address`.`ID` = '$id'";
        
        $results = $this->connect()->query($sql_statment);
        
        if ($results) {
            return true;
        }
        return false;
        
        
    }
    
    public function updateUser(AddressModel $user) 
    {
        
        $id = $user->getId();
        $fname = $user->getFName();
        $lname = $user->getLName();
        $email = $user->getEmail();
        $address = $user->getAddress();
        $city = $user->getCity();
        $state = $user->getState();
        $zipcode = $user->getZipCode();
        
        
        $sql_statment  = "UPDATE address SET  First_Name = '$fname', Last_Name ='$lname', Email ='$email', Address ='$address', City ='$city', State ='$state', Zip_Code ='$zipcode' WHERE ID = '$id'";
        
        $results = $this->conn()->query($sql_statment);
        
        if ($results) {
            return true;
        }
        return false;
        
        
    }
    
    // working!
    public function getAlluser()
    
    {
                
        $sql = "SELECT * FROM address";
        
        $results = $this->conn()->query($sql);
        
        $numRows = $results->num_rows;
        
        if ($numRows > 0)
        {
            $listofeveryone = [];
            while( $row = $results->fetch_array(MYSQLI_ASSOC))
            {
                
                $u = new AddressModel($row['ID'], $row['First_Name'], $row['Last_Name'], $row['Email'], $row['Address'], $row['City'], $row['State'], $row['Zip_Code']);
                array_push($listofeveryone, $u);
            }
            
            return $listofeveryone;
            
            
            
        }
    }
    
   public function addAddress(AddressModel $user)
   {
       $fname = $user->getFName();
       $lname = $user->getLName();
       $email = $user->getEmail();
       $address = $user->getAddress();
       $city = $user->getCity();
       $state = $user->getState();
       $zipcode = $user->getZipCode();
       
       $sql_statment  = "INSERT INTO `address`(`ID`, `First_Name`, `Last_Name`, `Email`, `Address`,`City`,`State`, `Zip_Code`) VALUES ('', '$fname', '$lname', '$email', '$address', '$address', '$city', '$state', '$zipcode')";
       
       if ($conn->query($sql_statment) === TRUE){
           echo " New record created successfully";
           
           
       }
       else {
           echo "Error " . $sql_statment . "<br>" . $conn->error;
       }
   }
}
?>