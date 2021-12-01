<!DOCTYPE html>
<html>
<head>
	<title>First User Interface Booking</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/360631bbad.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://internal.mysa.highlysucceed.com/assets/css/style.css?v1.1">

	<style>
            span.input-group-text {
                border: none;
            }
            .form-outline.mb-4 {
                width: 80%;
            }
             
            .input-group-prepend span i {
                color: black;
            }

            .input-group-prepend {
                height: 38px;
                color: #4fac9c;
                width: 40px;
                border: 1px solid;
            }
            
        </style>
</head>
<body>

<br>
<div id="accountinfo_divblock" class="container my-5 py-3 px-5">
<h1>Account Information</h1>
<p>Fill up the need infomation to continue</p>

<div class="row">
<div class="col-sm-4">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fas fa-address-card"></i></span>
</div>
<div class="form-outline mb-4">
<input type="text" id="Surname" name="Surname" class="form-control" placeholder="Enter Your Surname" required/>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fas fa-address-card"></i></span>
</div>
<div class="form-outline mb-4">
<input type="text" id="firstname" name="firstname" class="form-control" placeholder="Enter Your First Name" required/>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fas fa-address-card"></i></span>
</div>
<div class="form-outline mb-4">
<input type="text" id="middlename" name="middlename" class="form-control" placeholder="Enter Your Middle Name" required/>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fas fa-calendar"></i></span>
</div>
<div class="form-outline mb-4">
<input type="date" id="birthdate" name="birthdate" class="form-control" placeholder="Birthday" max="2021/11/16" required/>
<label class="form-label primary" for="birthdate">Birthdate</label>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fas fa-user"></i></span>
</div>
<div class="form-outline mb-4">
<input type="number" id="age" name="age" class="form-control" min="18" max="99" maxlength="2" required/>
<label class="form-label primary" for="age">Age</label>
</div>
</div>
</div>
</div>

<p>Address</p>
<div class="row">
<div class="col-sm-4">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="far fa-address-book"></i></span>
</div>
<div class="form-outline mb-4">
<input type="text" id="street" name="street" class="form-control" placeholder="Street Name" required/>

</div>
</div>
</div>
<div class="col-sm-4">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fas fa-map"></i></span>
</div>
<div class="form-outline mb-4">
<input type="text" id="city" name="city" class="form-control" placeholder="Enter City" required/>

</div>
</div>
</div>
<div class="col-sm-4">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fas fa-hashtag"></i></span>
</div>
<div class="form-outline mb-4">
<input type="text" id="postal" name="postal" class="form-control" placeholder="Enter Your Postal Code" required/>

</div>
</div>
</div>
</div>
<p>Contacts</p>
<div class="row">
<div class="col-sm-4">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fas fa-tty"></i></span>
</div>
<div class="form-outline mb-4">
<input type="tel" id="phone_number" name="phone_number" class="form-control" placeholder="Enter Telephone Number" required/>

</div>
</div>
</div>
<div class="col-sm-4">
<div class="input-group">
<div class="input-group-prepend">
 <span class="input-group-text"><i class="fas fa-mobile"></i></span>
</div>
<div class="form-outline mb-4">
<input type="tel" id="mobile_number" name="mobile_number" class="form-control" placeholder="Enter Mobile Number" required/>

</div>
</div>
</div>
<div class="col-sm-4">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fas fa-envelope"></i></span>
</div>
<div class="form-outline mb-4">
<input type="email" id="Email" name="Email" class="form-control" placeholder="Enter Your Email Address" required/>

</div>
</div>
</div>
</div>
<p>Incase of Emergency Please Contact the following:</p>
<div class="row">
<div class="col-sm-4">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fas fa-user"></i></span>
</div>
<div class="form-outline mb-4">
<input type="text" id="emergency_name" name="emergency_name" class="form-control" placeholder="Enter Your Name" required/>

</div>
</div>
</div>
<div class="col-sm-4">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fas fa-mobile"></i></span>
</div>
<div class="form-outline mb-4">
<input type="tel" id="emergency_number" name="emergency_number" class="form-control" placeholder="Enter Mobile Number" required/>

</div>
</div>
</div>
<div class="col-sm-4">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fas fa-user"></i></span>
</div>
<div class="form-outline mb-4">
<input type="text" id="emergency_relationship" name="emergency_relationship" class="form-control" placeholder="Enter relationship" required/>

</div>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-sm-12 text-center">
<a id="accountinfobtn" class="btn btn-primary w-50" required>Next</a>
</div>
</div>

</body>
</html>