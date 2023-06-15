// const { response } = require("express");
// const { default: Swal } = require("sweetalert2");

$(document).ready(function () {

  $('.razorpay_btn').click(function(e){
  	e.preventDefault();

		  var firstname  = $('.firstname').val();
		var	lastname  = $('.lastname').val();
		var	email  = $('.email').val();
		var	phone  = $('.phone').val();
		var	address  = $('.address').val();
		var	city  = $('.city').val();
		var	country  = $('.country').val();
		var	state  = $('.state').val();
		var	pincode   = $('.pincode').val();

			if(!firstname){
				fname_error = "First name is required ";
				$('#fname_error').html('');
				$('#fname_error').html(fname_error);

			} else{
			fname_error = "  ";
				$('#fname_error').html('');
			}


			if(!lastname){
				lname_error = "last name is required ";
				$('#lname_error').html('');
				$('#lname_error').html(lname_error);

			} else{
			lname_error = "  ";
				$('#lname_error').html('');
			}


			if(!email){
				email_error = "email is required ";
				$('#email_error').html('');
				$('#email_error').html(email_error);

			} else{
			email_error = "  ";
				$('#email_error').html('');
			}


			if(!phone){
				phone_error = "phone is required ";
				$('#phone_error').html('');
				$('#phone_error').html(phone_error);

			} else{
			phone_error = "  ";
				$('#phone_error').html('');
			}

			if(!address){
				address_error = "address is required ";
				$('#address_error').html('');
				$('#address_error').html(address_error);

			} else{
			address_error = "  ";
				$('#address_error').html('');
			}

			if(!city){
				city_error = "city is required ";
				$('#city_error').html('');
				$('#city_error').html(city_error);

			} else{
			city_error = "  ";
				$('#city_error').html('');
			}

			if(!country){
				country_error = "country is required ";
				$('#country_error').html('');
				$('#country_error').html(country_error);

			} else{
			country_error = "  ";
				$('#country').html('');
			}

    if(!state){
				state_error = "state is required ";
				$('#state_error').html('');
				$('#state_error').html(state_error);

			} else{
			state_error = "  ";
				$('#state_error').html('');
			}

			if(!pincode){
				pincode_error = "pincode is required ";
				$('#pincode_error').html('');
				$('#pincode_error').html(pincode_error);

			} else{
			pincode_error = "  ";
				$('#pincode_error').html('');
			}

	// if(fname_error != '' || lname_error != '' || email_error != '' || phone_error != '' || address_error != '' || city_error != '' || country_error != '' || state_error != '' || pincode_error != '' )
	// {
	// 	return false;
	// }
		// else{
    //   console.log(data);
                // var data = {
                //       'firstname'	:  firstname,
                //       'lastname'	:	lastname,
                //       'email'	:	email,
                //       'phone'	:	phone,
                //       'address'	:	address,
                //       'city'	:	city,
                //       'country'	:	country,
                //       'state'	:	state,
                //       'pincode'	:	pincode,
                     
                //                    }
             // console.log(data);                      
		$.ajax({
		 method: "POST",
			url: "/proceed-to-pay",
			data: {
                      'firstname'	:  firstname,
                      'lastname'	:	lastname,
                      'email'	:	email,
                      'phone'	:	phone,
                      'address'	:	address,
                      'city'	:	city,
                      'country'	:	country,
                      'state'	:	state,
                      'pincode'	:	pincode,
                     
                                   },
			success: function (response) {
       // alert(response.total_price);
       var options = {
    "key": "rzp_test_Vm0KeAx84i1RwV", // Enter the Key ID generated from the Dashboard
    "amount": response.total_price*100 , // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name":  response.firstname+' '+response.lastname,
    "description": "Thank You For Choosing Us",
    "image": "https://example.com/your_logo",
    
     "handler": function (responsea){
        alert(responsea.razorpay_payment_id);
        $.ajax({
        	method: "POST",
        	url: "/place-order",
        	data: {
        		'fname': response.firstname,
        		'lname': response.lastname,
        		'email': response.email,
        		'phone': response.phone,
        		'address': response.address,
            'city': response.city,
            'state': response.state,
            'country': response.country,
            'pincode': response.pincode,
            'payment_mode': "Paid by RazorPay",
            'payment_id': responsea.razorpay_payment_id, 
        	},
        	success: function(responseb){
                  //alert(responseb.status);
                  swal(responseb.status);
               window.location.href = "/my-orders";   
        	}
        });
    },
    "prefill": {
       "name": response.firstname+' '+response.lastname,
        "email": response.email,
        "contact": response.phone
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
    rzp1.open();


			  },

		});
	// }
  });

});
