<!DOCTYPE html>
<html lang="de">
    <head>
        <title></title>
        <link href="<?php echo base_url() . "public/sweepstakes/rewe/"; ?>css/page_1.css" type="text/css" rel="stylesheet">
          <link rel="stylesheet" href="<?php echo base_url();?>public/sweepstakes/rewe/css/validationEngine.jquery.css" type="text/css"/>
        <script src="<?php echo base_url(); ?>public/sweepstakes/rewe/js/jquery-1.8.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/sweepstakes/rewe/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo base_url(); ?>public/sweepstakes/rewe/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

    </head>

    <body>
        <div id="content">
            <div id="header">

            </div>
            <div id="text_1">

            </div>

            <div id="main">		
                <div id="left">
                    <div id="gewinn_bild">
                    </div>
                    <div id="banderole">
                        <img src="<?php echo base_url() . "public/sweepstakes/rewe/"; ?>images/bulletpoints.png">
                    </div>	
                </div>
                <div id="right">
                    <div id="right_header">
                        Wohin soll der Gewinn gehen?
                        <div class="small_text">(Nur vollst&auml;ndige und korrekte Angaben k&ouml;nnen einen Gewinn erhalten)</div>
                    </div>

                    <form id="formID" onsubmit="return jQuery(this).validationEngine('validate');" class="formular" method="post" action="<?php echo base_url() . "sweepstakes/get_sweepstakes_data"; ?>">
                        <div id="forms">
                            <div id="form_text">
                                Stra&szlig;e/Nr
                            </div>

                            <div id="form_inputs">
                                <p>
                                    <input type="text" name="street" value="" class="inputs_strasse">
                                    <input type="text" name="house_number" value="" class="inputs_nummer">
                                </p>
                            </div>

                            <div id="form_text">
                                PLZ/Ort
                            </div>

                            <div id="form_inputs">	
                                <p>
                                    <input type="text" name="post_code" value="" class="validate[custom[integer]] inputs_plz">
                                    <input type="text" name="place" value="" class="inputs_ort">
                                </p>
                            </div>

                            <div id="form_text">
                                Land
                            </div>

                            <div id="form_inputs">	
                                <p>
                                    <select value="" name="country" class="dropdown">
                                        <option>Deutschland</option>
                                        <option>&Ouml;sterreich</option>
                                        <option>Schweiz</option>
                                    </select>
                                </p>
                            </div>
                            <div id="form_text">
                                Telefon
                            </div>

                            <div id="form_inputs">	
                                <p>
                                    <input type="text" name="prefix" value="" class="inputs_telefon1">
                                    <input type="text" name="telephone" value="" class="validate[custom[integer]] inputs_telefon2">
                                </p>
                            </div>

                            <div id="form_text">
                                Geburtstag
                            </div>
                            <div id="form_inputs">	
                                <p>
                                    <input type="text" name="date_of_birth_day" value="" class="validate[custom[integer]] inputs_geb1">
                                    <input type="text" name="date_of_birth_month" value="" class="validate[custom[integer]] inputs_geb2">
                                    <input type="text" name="date_of_birth_year" value="" class="validate[custom[integer]] inputs_geb3"> (TT.MM.JJJJ)
                                </p>
                            </div>


                        </div>

                        <input type="hidden" name="page_number" value="2">
                        <input type="hidden" name="user_id" value="<?php echo $this->uri->segment(4); ?>">
                        <input type="submit" name="submit" value="Jetzt mitmachen" id="button">

                        <!--                    <div id="button">
                                                Jetzt mitmachen
                                            </div>-->                   
                    </form>
                    <div id="form_footer">
                        (Teilnahme erst ab 18 Jahren)
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