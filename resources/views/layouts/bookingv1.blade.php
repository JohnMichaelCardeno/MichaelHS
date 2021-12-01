
<!DOCTYPE html>
<html lang="en">
<head>
<title>Second User Interface Booking</title>


<link rel="stylesheet" href="http://internal.mysa.highlysucceed.com/css/app.css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/360631bbad.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://internal.mysa.highlysucceed.com/assets/css/mdb.min.css">
<link rel="stylesheet" href="http://internal.mysa.highlysucceed.com/assets/css/style.css?v1.1">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.1/jquery-ui.css" rel="stylesheet" />
<style>
           
            
            .form-outline.mb-4 {
                width: 78%;
            }
                
           
            label.btn.btn-secondary {
                background: transparent;
                color: #000;
            }

            .ui-datepicker{
                font-size: 9.5pt;
            }

            

            #ui-datepicker-div .ui-state-highlight{
                background: yellow;
                color: red;
                font-weight: bold;
            }

            .ui-datepicker-current-day .ui-state-active{
                background: white;
                color: blue;
                font-weight: bold;
            }

            .input-group-prepend {
                height: 35px;
                color: #4fac9c;
                width: 13%;
                border: 1px solid;
            }
            

            @media (max-width: 425px) {
                .input-group-prepend {
                    width: 20%;
                    border: 1px solid;
                }
            }
        </style>
</head>
<body>

<div class="row justify-content-center">
<div class="col-sm-6 shadow">
<h1 class="primary">Booking Details</h1>
<p>Fill up the need infomation to continue</p>
<div class="form-group">
<label class="form-label primary" for="appointment">Appointment Date <i id="appointment-error" class="fas fa-exclamation-circle error" style="display: none"></i></label>
<div class="form-outline mb-4">
<input type="date" id="appointment" name="appointment" class="form-control" placeholder="Select Date" />
</div>
</div>
<div><p>Morning</p><i id="timesched-error" class="fas fa-exclamation-circle error" style="display: none"></i></div>
<div class="form-group">
<div class="btn-group btn-group-toggle row" data-toggle="buttons">
<label class="btn btn-secondary col-sm-3 mt-2">
<input type="radio" id="08:30AM" name="timesched" autocomplete="off" value="08:30 AM"> <span class="fas fa-clock"></span> 08:30 AM
</label>
<label class="btn btn-secondary col-sm-3 mt-2">
<input type="radio" id="09:00AM" name="timesched" autocomplete="off" value="09:00 AM"> <span class="fas fa-clock"></span> 09:00 AM
</label>
<label class="btn btn-secondary col-sm-3 mt-2">
<input type="radio" id="09:30AM" name="timesched" autocomplete="off" value="09:30 AM"> <span class="fas fa-clock"></span> 09:30 AM
</label>
<label class="btn btn-secondary col-sm-3 mt-2">
<input type="radio" id="10:00AM" name="timesched" autocomplete="off" value="10:00 AM"> <span class="fas fa-clock"></span> 10:00 AM
</label>
 <label class="btn btn-secondary col-sm-3 mt-2">
<input type="radio" id="10:30AM" name="timesched" autocomplete="off" value="10:30 AM"> <span class="fas fa-clock"></span> 10:30 AM
</label>
<label class="btn btn-secondary col-sm-3 mt-2">
<input type="radio" id="11:00AM" name="timesched" autocomplete="off" value="11:00 AM"> <span class="fas fa-clock"></span> 11:00 AM
</label>
<label class="btn btn-secondary col-sm-3 mt-2">
<input type="radio" id="11:30AM" name="timesched" autocomplete="off" value="11:30 AM"> <span class="fas fa-clock"></span> 11:30 AM
</label>
<label class="btn btn-secondary col-sm-3 mt-2">
<input type="radio" id="12:00AM" name="timesched" autocomplete="off" value="12:00 AM"> <span class="fas fa-clock"></span> 12:00 AM
</label>
</div>
</div>
<p class="mt-3">Evening</p>
<div class="form-group">
<div class="btn-group btn-group-toggle row" data-toggle="buttons">
<label class="btn btn-secondary col-sm-3 mt-2">
<input type="radio" name="timesched" id="12:30NN" autocomplete="off" value="12:30 NN"> <span class="fas fa-clock"></span> 12:30 NN
</label>
<label class="btn btn-secondary col-sm-3 mt-2">
<input type="radio" name="timesched" id="01:00PM" autocomplete="off" value="01:00 PM"> <span class="fas fa-clock"></span> 01:00 PM
</label>
<label class="btn btn-secondary col-sm-3 mt-2">
<input type="radio" name="timesched" id="01:30PM" autocomplete="off" value="01:30 PM"> <span class="fas fa-clock"></span> 01:30 PM
</label>
<label class="btn btn-secondary col-sm-3 mt-2">
<input type="radio" name="timesched" id="02:00PM" autocomplete="off" value="02:00 PM"> <span class="fas fa-clock"></span> 02:00 PM
</label>
<label class="btn btn-secondary col-sm-3 mt-2">
<input type="radio" name="timesched" id="02:30PM" autocomplete="off" value="02:30 PM"> <span class="fas fa-clock"></span> 02:30 PM
</label>
<label class="btn btn-secondary col-sm-3 mt-2">
<input type="radio" name="timesched" id="03:00PM" autocomplete="off" value="03:00 PM"> <span class="fas fa-clock"></span> 03:00 PM
</label>
<label class="btn btn-secondary col-sm-3 mt-2">
<input type="radio" name="timesched" id="03:30PM" autocomplete="off" value="03:30 PM"> <span class="fas fa-clock"></span> 03:30 PM
</label>
<label class="btn btn-secondary col-sm-3 mt-2">
<input type="radio" name="timesched" id="04:00PM" autocomplete="off" value="04:00 PM"> <span class="fas fa-clock"></span> 04:00 PM
</label>
<label class="btn btn-secondary col-sm-3 mt-2">
<input type="radio" name="timesched" id="04:30PM" autocomplete="off" value="04:30 PM"> <span class="fas fa-clock"></span> 04:30 PM
</label>
<label class="btn btn-secondary col-sm-3 mt-2">
<input type="radio" name="timesched" id="05:00PM" autocomplete="off" value="05:00 PM"> <span class="fas fa-clock"></span> 05:00 PM
</label>
<label class="btn btn-secondary col-sm-3 mt-2">
<input type="radio" name="timesched" id="05:30PM" autocomplete="off" value="05:30 PM"> <span class="fas fa-clock"></span> 05:30 PM
</label>
<label class="btn btn-secondary col-sm-3 mt-2">
<input type="radio" name="timesched" id="06:00PM" autocomplete="off" value="06:00 PM"> <span class="fas fa-clock"></span> 06:00 PM
</label>
</div>
</div>
<p class="mt-3">Service Type</p>
<div class="form-group">
<label class="form-label primary" for="service_type">Service Type <i id="service_type-error" class="fas fa-exclamation-circle error" style="display: none"></i></label>
<select name="service_type" id="service_type" class="form-control">
<option>Choose Here</option>
<option name="service_type" value="in-lounge">In-lounge</option>
<option name="service_type" value="home-service">Home Service</option>
</select>
</div>
<div class="form-group">
<label class="form-label primary" for="service_category">Service Category <i id="service_category-error" class="fas fa-exclamation-circle error" style="display: none"></i></label>
<select name="service_category" id="service_category" class="form-control">
<option>Choose Here</option>
<option value="1">LASH</option>
<option value="2">WAX</option>
<option value="3">NAILS</option>
<option value="4">FOOT SPA</option>
<option value="5">PARAFFIN</option>
<option value="6">KIDDIE</option>
</select>
</div>
<div class="form-group">
<label class="form-label primary" for="specific_service">Specific Service <i id="specific_service-error" class="fas fa-exclamation-circle error" style="display: none"></i></label>
<select name="specific_service" id="specific_service" class="form-control ">
<option id="tabledfetch">Choose Here</option>
</select>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-sm-12 text-center">
<a id="detailsinfobtn" class="btn btn-primary w-50">Next</a>
</div>
</div>
</form>
</div>
</div>
 <script src="http://internal.mysa.highlysucceed.com/assets/js/mdb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
