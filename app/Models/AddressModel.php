<?php
namespace App\Models;


class AddressModel
{
    
    
    private $ID;
    private $First_Name;
    private $Last_Name;
    private $Address;
    private $City;
    private $Email;
    private $State;
    private $Zip_Code;
    
    function __construct( $ID, $First_Name, $Last_Name, $Email, $Address, $City, $State, $Zip_Code )
    {
        $this->ID = $ID;
        $this->First_Name = $First_Name;
        $this->Last_Name = $Last_Name;
        $this->Email = $Email;
        $this->Address = $Address;
        $this->City = $City;
        $this->State = $State;
        $this->Zip_Code = $Zip_Code;
    }
    
    public function getId()
    {
        return $this->ID;
    }
    
    public function getFName()
    {
        return $this->First_Name;
    }
    
    public function getLName()
    {
        return $this->Last_Name;
    }
    
    public function getAddress()
    {
        return $this->Address;
    }
    
    public function getCity()
    {
        return $this->City;
    }
    
    public function getEmail()
    {
        return $this->Email;
    }
    
    public function getState()
    {
        return $this->State;
    }
    
    public function getZipCode()
    {
        return $this->Zip_code;
    }
      
}
?>