<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Services\data\AddressBookDAO;
use App\Models\AddressModel;



class AddressController extends Controller
{
   public function addAddress(Request $request)
   {
       
       $firstname = $request()->get('firstname');
       $lastname = $request()->get('lastname');
       $email = $request()->get('email');
       $address = $request()->get('address');
       $city = $request()->get('city');
       $state = $request()->get('state');
       $zip = $request()->get('zip');
       
       $user = new AddressModel($firstname, $lastname, $email, $address, $city, $state, $zip);
       
       $service = new AddressBookDAO();
      $result = $service->addAddress($user);
      
      if ($result) {
          
          return view('home');          
      }
      
      else {
          return view('fail');
      }
   }
  
}
