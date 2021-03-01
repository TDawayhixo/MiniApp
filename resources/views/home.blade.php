<?php
use App\Models\AddressModel;
?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome!
                </div>
			</div>
		</div>
	</div>
</div>

 <div class="container">
  <div class="row justify-content-center">
  	<div class="col-md-8">
    	<div class="card">
    		<div class="card-body">
      			<form name="frmRegistration" method="post" action="AddAddress">
      			{{ csrf_field() }}      
       	 			<div class="form-group row">
          				<div class="col-md-4">
           	 				<h3>Add An Address</h3>
            				<label for="fname"><i class="fa fa-user"></i> First Name</label>
            				<input type="text" id="fname" name="firstname" placeholder="John">
            				<label for="lname"><i class="fa fa user"></i>Last Name</label>
            				<input type="text" id="fname" name="lastfirstname" placeholder="Deo">
            				<label for="email"><i class="fa fa-envelope"></i> Email</label>
            				<input type="text" id="email" name="email" placeholder="john@example.com">            				
            				<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            				<input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            				<label for="city"><i class="fa fa-institution"></i> City</label>
            				<input type="text" id="city" name="city" placeholder="New York">
            				<label for="state">State</label>
                			<input type="text" id="state" name="state" placeholder="NY"><br>
              				<label for="zip">Zip Code</label>
                			<input type="text" id="zip" name="zip" placeholder="10001">
                			<button type="submit" class="btn btn-primary">Add</button>           			
            			</div>
         			</div>
				</form>
			</div>
      	</div>
  	</div>
  </div>	
</div>

<h1>Current AddressBook</h1>

<table class="table"> 

<tr>
<th>Edit</th>
<th>Delete</th>
<th>First name</th>
<th>Last Name</th>
<th>Email</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>Zip Code</th>
</tr>

<?php 

//$p= new AddressModel($ID, $First_Name, $Last_Name, $Email, $Address, $City, $State, $Zip_Code);
//$listOfUsers = $p->getAllUser();


//foreach($listOfUsers as $p) 
//{        
    //echo "<tr>";
    //echo "<td> <form action=''><input name='id' type='hidden' value='". $p->getId() . "'> </input><button type='submit' class='btn btn-primary'>Edit</button></form></td>";
   // echo "<td> <form action=''><input name='id' type='hidden' value='". $p->getId() . "'> </input><button type='submit' class='btn btn-primary'>Delete</button></form></td>";
    //echo "<td>". $p->getFName() . "</td>";
    //echo "<td>". $p->getLName() . "</td>";
    //echo "<td>". $p->getEmail() . "</td>";
    //echo "<td>". $p->getAddress() . "</td>";
    //echo "<td>". $p->getCity() . "</td>";
    //echo "<td>". $p->getState() . "</td>";
    //echo "<td>". $p->ZipCode() . "</td>";
//}
?>
</table>

@endsection

