<?php
/*
Template Name: Checkout
*/

get_header();
?>
     <button class="backButton" onclick="goBack()">Tillbaka</button> 
      <div class="checkout-container">
           
            <div class="left-section">
               <div class="receipt">
                   <h2>Kvitto</h2>
            
              
              </div>
                 
            </div>

            <div class="right-section" autocomplete="on">
          
                   <form class="checkout-form">
                   <input type="text" name="given-name" placeholder="Förnamn"><br>
                   <input type="text" name="family-name" placeholder="Efternamn"><br>
                   <input type="email" name="email" placeholder="E-postadress"><br>
                   <input type="text" name="tel" placeholder="Telefonnummer"><br>
                   <input type="text" name="street-address" placeholder="Adress"><br>
                   <input type="text" name="postal-code" id="postnr" placeholder="Postnummer">
                   <input type="text" name="address-level2" id="city" placeholder="Stad"><br>
                   <input type="text" name="cc-number" placeholder="Kortnummer"><br>
                   <input type="text" name="cc-exp" id="month" placeholder="Månad/år">
                   <input type="text" name="cc-csc" id="ccv" placeholder="CCV"><br>

                   <input type="submit" class="pay-button bigButton" value="Slutför köp">
                </form>
               
            </div> 
        </div>
<?php
get_footer();
?>
