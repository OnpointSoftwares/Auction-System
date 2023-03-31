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
                            alert('Donation Successful.Enter your M-Pesa pin to complete the transaction.Check your email for confirmation.'); // show response from the php script.
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