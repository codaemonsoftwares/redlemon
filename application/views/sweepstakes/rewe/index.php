<!DOCTYPE html>
<html lang="de">
    <head>
        <title></title>
        <link href="<?php echo base_url();?>public/sweepstakes/rewe/css/format.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url();?>public/sweepstakes/rewe/css/validationEngine.jquery.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url();?>public/sweepstakes/rewe/css/template.css" type="text/css"/>
        <script src="<?php echo base_url();?>public/sweepstakes/rewe/js/jquery-1.8.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>public/sweepstakes/rewe/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo base_url();?>public/sweepstakes/rewe/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

    </head>

    <body>
        <div id="content">
            <div id="header">

            </div>
            <div id="text_1">

            </div>
            <div id="kostenlos">

            </div>			
            <div id="main">		
                <div id="left">
                    <div id="gewinn_bild">
                    </div>
                    <div id="banderole">
                        <img src="<?php echo base_url();?>public/sweepstakes/rewe/images/bulletpoints.png">
                    </div>	
                </div>
                <div id="right">
                    <div id="right_header">
                        Der Gewinn soll gehen an:
                        <div class="small_text">(Nur vollst&auml;ndige und korrekte Angaben k&ouml;nnen einen Gewinn erhalten)</div>
                    </div>
                    <form id="formID" onsubmit="return jQuery(this).validationEngine('validate');" class="formular" method="post" action="<?php echo base_url()."sweepstakes/get_sweepstakes_data"; ?>">
                        <div id="forms">

                            <p>Anrede 
                            <div id="checkbox">
                                <input type="radio" name="gender" value="frau" class="validate[required] radio">Frau
                                <input type="radio" name="gender" value="herr" class="validate[required] radio">Herr
                            </div>
                            </p>

                            <p>
                                Vorname <input type="text" name="first_name" value="" class="inputs validate[required,custom[onlyLetterSp]]">
                            </p>
                            <p>
                                Nachname <input type="text" name="last_name" value="" class="inputs validate[required,custom[onlyLetterSp]]">
                            </p>
                            <p>
                                E-Mail <input type="text" name="email" value="" class="inputs validate[required,custom[email]]">
                            </p>

                            <p>	
                            <div id="input_check">                               
                                <input type="checkbox" value="yes" name="agree" id="agree" class="validate[required] checkbox">
                            </div>
                                    
                            <div id="agb" class="small_text">
                                Ja, ich m&ouml;chte am Gewinnspiel teilnehmen und bin damit einverstanden, dass einige der Sponsoren und Kooperationspartner mich postalisch oder telefonisch oder per E-Mail/SMS &uuml;ber Angebote aus ihrem jeweiligen Gesch&auml;ftsbereich informieren. Diese kann ich hier selbst bestimmen, ansonsten erfolgt eine Auswahl durch den Veranstalter. Das Einverst&auml;ndnis kann ich jederzeit widerrufen. Weitere Infos dazu hier.</div

                        </div>
                        </p>                 

                </div>

                <!-- <div id="button"></div>-->
                <input type="hidden" name="page_number" value="1">
                <input type="hidden" name="sweepstake_id" value="<?php echo $sweepstake_id; ?>">
                <input type="submit" name="submit" value="" id="button">
               
                </form>

                <div id="form_footer">
                    <a href="">Teinahmebedingungen</a> und <a href="">Datenschutz</a> habe ich gelesen und akzeptiert.
                </div>
            </div></div>


        <div id="footer_text">
            Teilnahme ohne Werbeeinwilligung per <a href="">Post</a> m&ouml;glich.
            Veranstalter des Gewinnspiel ist die red lemon media GmbH. <br>
            REWE ist weder Verstalter noch Sponsor dieses Gewinnspiels und steht mit dem Veranstalter in keiner gesch&auml;ftlichen Beziehung.
        </div>
        <div id="footer_sponsoren">

        </div>	

        <div id="footer_links">
            <a href="">AGB</a>
            <a href="">Impressum</a>
            <a href="">Datenschutz</a>
        </div>
    </div>


    <script>
                        jQuery(document).ready(function() {
                            // binds form submission and fields to the validation engine
                            jQuery("#formID").validationEngine({
                                onFormSuccess: formSuccess,
                                onFormFailure: formFailure
                            });
                        });
    </script>




</body>
</html>


