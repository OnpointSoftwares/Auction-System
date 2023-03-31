<html>
	<head>
		<style>
			      .theme-blue {
        color: #427bb8;
      }
      .theme-orange {
        color: #cc851c;
      }
      .theme-green {
       color: #8ab042;
      }
      .theme-grey {
        color: #666666;
      }
      .theme-white {
        color: #fff;
      }
      .theme-background-blue {
        background-color: #427bb8;
        color: #fff;
      }
      .theme-background-orange {
        background-color: #cc851c;
        color: #fff;
      }
      .theme-background-green {
        background-color: #8ab042;
        color: #fff;
      }
      .theme-background-grey {
        background-color: #666666;
        color: #fff;
      }
      .theme-background-white {
        background-color: #fff;
        color: #4c4c4c;
      }
      .donate-bar {
        padding: 32px 23px 28px;
      }
      .donate-bar > div:first-child {
        font-family: 'Roboto Condensed', sans-serif;
        font-weight: bold;
        border-right: 1px dotted #2a4f76;
        margin-top: 19px;
        font-size: 25px;
        padding: 0;
      }
      .donate-buttons>li>a {
        font-size: 17px;
        font-family: 'Roboto Condensed', sans-serif;
        font-weight: bold;
        position: relative;
        display: block;
        padding: 10px 3px;
        border-radius: 5px;
      }
      .btn-blue-other,
      .btn-blue {
        font-family: 'Roboto Condensed', sans-serif;
        font-weight: bold;
        background-color: #427bb8;
        color: #fff;
        border-radius: 5px;
        border: 0;
        padding: 0;
        width: 75px;
        height: 37px;
        margin-top: 8px;
      }
      .btn-green {
        font-family: 'Roboto Condensed', sans-serif;
        font-weight: bold;
        background-color: #8ab042;
        color: #fff;
        border-radius: 5px;
        border: 0;
        padding: 0;
        width: 114px;
        height: 37px;
        margin-top: 8px;
      }
      #other-input {
        display: none;
      }
      #other-input input {
        position: relative;
        font-weight: bold;
        background-color: #fff;
        color: #427bb8;
        border-radius: 5px;
        border: 0;
        border: 5px solid #427bb8;
        padding: 0 0 3px 15px;
        width: 75px;
        height: 37px;
        margin: 18px 3px 0;
      }
      input[type=number]::-webkit-inner-spin-button, 
      input[type=number]::-webkit-outer-spin-button { 
      -webkit-appearance: none; 
       margin: 0; 
      }
      #other-input span {
        font-family: inherit;
        font-weight:bold;
        color: #427bb8;
        position: absolute;
        padding: 23px 12px;
        z-index: 10;
        pointer-events: none;
      }
      .impact {
        font-size: 1.1em;
        font-weight: bold;
        clear: both;
      }
      .nav>li>a:hover, .nav>li>a:focus {
        text-decoration: none;
        background-color: transparent;
      }
      .donate-buttons .active {
        background-color: #fff;
        border: 5px solid #427bb8;
        color: #427bb8;
      }
      .donate-buttons:focus {
      outline: -webkit-focus-ring-color auto 0px;
      }
      .donate-buttons li:last-child {
        font-size: 17px;
        line-height: 37px;
        padding-left: 20px;
        padding-top: 15px;
      }
			</style>
			<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" />
			<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script>
	    $(document).ready(function(){

$('#searchbar').focus();

$('#donate-buttons').on('click', '.btn-blue', function(e) {
  e.preventDefault();
  $('.active').removeClass('active');
  $('#other-input').hide().siblings('#other').show();
  $(this).filter('.btn-blue').addClass("active");
  var value = $(this).data('impact');
  $(this).closest('div').find('p').text("" + value);
  $('#other-input').find('input').val('');  
});
  
$('.btn-green').on('click', function() {
  var dollar;
  var input = $('#other-input').find('input').val();
  if ( !input ) {
	dollar = $('.active').data('dollars');
   } else if ( $.trim(input) === '' || isNaN(input)) {
	// empty space leaves value = 'undefined'. 
	// Have to fix $.trim(input) == '' above so that it works.
	console.log('Yes');
	dollar = "Please enter a number."; 
  } else {
	dollar = input;
  }
  $('#price').text(""+dollar);
});

$('#other').on('click', function(e) {
  e.preventDefault(); 
  var buttons = $(this).parent('#donate-buttons');
  buttons.find('.active').removeClass('active');
  var other = $(this).hide().siblings('#other-input');
  other.show();
  other.find('input').focus();
  var pText = buttons.siblings('p');
  pText.text("Thank you!");
  var oValue = other.find('input');
  oValue.keyup(function() {
	if ( oValue.val() > 50 ) {
	  pText.text("Thank you!" + " You\'re about to donate.");
	} else {
	  pText.text("Thank you!");
	}
  });
}); 

});
	</script>
</head>
	<body>
                    <div class="row">  
                      <section class="col-md-12">
                        <form method="POST" action="checkout.php">
                          <fieldset class="col-md-6">
                            <legend>
                              Your personal info
                            </legend>
                           <script>
                            function fill()
                            {
                              var amnt=$('#price').html();
                            }
                              
                              </script>
                            <label>Your Name</label>
                            
                            <input type="string" name="name" id="name" class="form-control">
                            <label>Your email</label>
                            <input type="email" id="email" name="email" class="form-control">
                            <label>Address</label>
                            <input type="string" id="address" name="address" class="form-control">
                            <label>City, State, Zip Code</label>
                            <input type="string" id="street" name="street" class="form-control">
                          </fieldset>
                          <fieldset class="col-md-6">
                            <legend>
                              Credit Card Information
                            </legend>
                            <label for="card-number">Credit Card Number</label>
                            <input placeholder="1234 5678 9012 3456" id="ccn" pattern="[0-9]*" type="text" name="cardno"  class="form-control card-number" id="card-number">
                            <label for="card-number">Expiration Date</label>
                            <input placeholder="MM/YY" id="expd" pattern="[0-9]*" type="text" name="expiration" class="form-control card-expiration" id="card-expiration">
                            <label for="card-number">CVV Number</label>
                            <input placeholder="CVV" id="cvv" pattern="[0-9]*" type="text" name="cvv" class="form-control card-cvv" id="card-cvv">
                            <label for="card-number">Billing Zip Code</label>
                            <input placeholder="ZIP" pattern="[0-9]*" type="text" name="bzp" class="form-control card-zip" id="card-zip">
                            <label for="card-number">Phone Number</label>
                            <input placeholder="2547xxxxxxxx" pattern="[0-9]*" id="phone" type="text" name="phone" class="form-control card-zip" id="card-zip">
                          
                          </fieldset>
						  <button type="button" onclick="pay2()" class="btn-green">CONTINUE</button>
              <button type="button" onclick="pay()"class="btn-green">Use Mpesa</button>
                        </form>
                      </section>
                      <script>
                        function pay()
                        {
                          var amnt=$("#price").html();
                          var name=document.getElementById("name").value;
                        var address=document.getElementById("address").value;
                        var email=document.getElementById("email").value;
                        var street=document.getElementById("street").value;
                        var phone=document.getElementById("phone").value;
                        $.ajax({
                          url:'mpesapay.php',
                          type: "POST",
                          data:{name:name,address:address,email:email,street:street,phone:phone,amount:amnt},
                          success: function(data)
                          {
                            alert('Successful the item.Enter your M-Pesa pin to complete the transaction.Check your email for confirmation.'); // show response from the php script.
                          }
                        });   
                      }   
                      function pay2()
                        {
                          var amnt=$("#price").html();
                          var name=document.getElementById("name").value;
                        var address=document.getElementById("address").value;
                        var email=document.getElementById("email").value;
                        var street=document.getElementById("street").value;
                        var phone=document.getElementById("phone").value;
                        var credit_card_no=document.getElementById("ccn").value;
                        var expiration_date=document.getElementById("expd").value;
                        var cvv=document.getElementById("cvv").value;
                        $.ajax({
                          url:'checkout.php',
                          type: "POST",
                          data:{name:name,address:address,email:email,street:street,phone:phone,amount:amnt,cardno:credit_card_no,expiration:expiration_date,cvv:cvv},
                          success: function(data)
                          {
                            alert("Donation Successfull.Check your email for confirmation"); // show response from the php script.
                          }
                        });   
                      }  
                        </script>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">BACK</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>
        </div><!--/.donate-bar-->
      </div><!-- /.col-md-12 -->