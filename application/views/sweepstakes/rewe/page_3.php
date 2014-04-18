<!DOCTYPE html>
<html lang="de">
    <head>
        <title></title>
        <link href="<?php echo base_url() . "public/sweepstakes/rewe/"; ?>css/page_3.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/sweepstakes/rewe/css/validationEngine.jquery.css" type="text/css"/>
        <script src="<?php echo base_url(); ?>public/sweepstakes/rewe/js/jquery-1.8.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/sweepstakes/rewe/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo base_url(); ?>public/sweepstakes/rewe/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

        <script src="" >
        </script>
    </head>

    <body>
        <div id="content">
            <div id="header">

            </div>

            <div id="main">	


                <br><br>

                <p class="big_text"><?php echo $this->session->userdata("first_name") ?> <?php echo $this->session->userdata("last_name") ?> , w&auml;hlen Sie aus folgenden Exklusivangeboten:</p>

                <form id="formID" onsubmit="return jQuery(this).validationEngine('validate');" class="formular" method="post" action="<?php echo base_url() . "sweepstakes/get_sweepstakes_data"; ?>">
                    <fieldset id="mfw_fieldset_ownCoregData" class="test3">
                        <p class="mfw_coreg_20 ">

                            <label><b>M&ouml;chten Sie 3 Monate die S&uuml;ddeutsche Zeitung gratis erhalten?</b></label>
                            <input type="hidden" name="lifestyle_question_1" value="M&ouml;chten Sie 3 Monate die S&uuml;ddeutsche Zeitung gratis erhalten?">
                            <span>
                                <img src="<?php echo base_url() . "public/sweepstakes/rewe/"; ?>images/sz.jpg">
                                <p>Hier soll noch hin und wieder etwas texts stehen.</p>
                                <input class="radio" type="radio" name="lifestyle_answer_1"  value="Ja, unbedingt!" id="mfw_coreg[19]">Ja, unbedingt!<br>
                                <input class="radio" type="radio" name="lifestyle_answer_1"  value="Ich bin mir nicht sicher" id="mfw_coreg[19]">Ich bin mir nicht sicher<br>
                            </span>
                        </p>
                    </fieldset>
                    <fieldset id="mfw_fieldset_ownCoregData" class="test3">
                        <label><b>M&ouml;chten Sie 3 Monate die S&uuml;ddeutsche Zeitung gratis erhalten?</b></label>
                        <input type="hidden" name="lifestyle_question_2" value="M&ouml;chten Sie 3 Monate die S&uuml;ddeutsche Zeitung gratis erhalten?">
                        <span>
                            <img src="<?php echo base_url() . "public/sweepstakes/rewe/"; ?>images/sz.jpg">
                            <p>Hier soll noch hin und wieder etwas texts stehen.</p>
                            <input class="radio" type="radio" name="lifestyle_answer_2"  value="Ja, unbedingt!" id="mfw_coreg[19]">Ja, unbedingt!<br>
                            <input class="radio" type="radio" name="lifestyle_answer_2"  value="Ich bin mir nicht sicher" id="mfw_coreg[19]">Ich bin mir nicht sicher<br>                       
                        </span>
                    </fieldset>				 
            </div>


            <input type="hidden" name="page_number" value="4">
            <input type="hidden" name="user_id" value="<?php echo $this->uri->segment(4); ?>">
            <input type="submit" name="submit" value="Weiter" id="footer_sponsoren">	

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