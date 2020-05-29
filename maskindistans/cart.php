<?php
/*
Template Name: Cart
*/

get_header();
?>
  <div class="container">
            <button class="backButton" onclick="goBack()">Tillbaka</button> 
            <table class="cartTable">
                
            </table>

            <form id="pay-method">
               <h2>Hur vill du betala?</h2> 
                <label class="radio-buttons">Betala direkt
                    <input type="radio" name="payment" id="betala" checked="checked">
                    <span class="checkmark"></span>
                </label>
                <label class="radio-buttons">Delbetala med faktura
                    <input type="radio" name="payment" id="faktura">
                    <span class="checkmark"></span>
               </label>
            </form>

            <div class="checkout-section">
                <h2 class="cart-total"></h2>
                <a href="#" class="bigButton checkout-button">Till kassan</a>
            </div>
        </div>
<?php
get_footer();
?>
