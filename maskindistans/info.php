<?php
/*
Template Name: Information
*/

get_header();
?>
<div class="container">
            <div class="info-container">
                <h1>Vår verksamhet</h1>
                <p>MaskinDistans erbjuder flexibel utbildning för företag och privatpersoner.  Vi håller både teorikurser på distans och på plats hos företag – skräddarsy utbildningen efter Ert behov. Tillgången till inspelat material underlättar i studierna – repetera det som behövs!
                  De praktiska moment som ingår i kurserna görs antingen hos oss i Stockholm eller på Ert företag. 
                  Vi har god erfarenhet inom utbildning, och med livesända lektioner via internet kan vi uppnå samma utbildningskvalitet som i ett klassrum.
                  Vi eftersträvar att erbjuda utbildning utav hög kvalitet till marknadens lägsta priser, på Era villkor.</p>
            </div>

            <div class="info-badges">
                <div class="circle-info" >
                    <div class="circle" onclick="showText(0)">
                        <i class="fas fa-people-arrows"></i>
                     </div>
                     <div class="circle-text">
                        <h4>Flexibelt & lönsamt</h4>
                        <p class="more-info">Teorikurser med instruktör på distans eller på Ert företag. Flexibla tider – kurser kan hållas dag, kväll och även helger.
                        Inspelade kurser gör att du kan titta på kursen var du vill via din mobil eller dator. Praktik sker i Stockholm eller på Ert företag.</p>
                     </div>
                </div>
                
                <div class="circle-info" onclick="showText(1)">
                    <div class="circle"  >
                        <i class="fas fa-search-dollar"></i>
                     </div>
                     <div class="circle-text">
                        <h4>Lågt pris & hög kvalité</h4>
                        <p class="more-info">Vi profilerar oss som marknadens mest prisvärda alternativ. Hittar du lägre priser – kontakta oss!
                        Vi erbjuder även räntefri delbetalning.
                        </p>
                     </div>
                </div>
                
                <div class="circle-info" onclick="showText(2)">
                    <div class="circle">
                        <i class="far fa-address-card"></i>
                     </div>
                     <div class="circle-text">
                        <h4>Utbildningintyg/kort</h4>
                        <p class="more-info">Efter avslutad godkänd utbildning erhåller du ett utbildningsintyg/kort. Intygen lagras i en databas – oroa dig inte för borttappade plastkort.</p>
                     </div>
                </div>
             </div>

             <div class="info-contact">
                <a href="kontakt" class="bigButton">Kontakta oss</a>
             </div>
         </div>
<?php
get_footer();
?>
