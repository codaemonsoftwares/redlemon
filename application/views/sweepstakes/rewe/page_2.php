<!DOCTYPE html>
<html lang="de">
    <head>
        <title></title>
        <link href="<?php echo base_url() . "public/sweepstakes/rewe/"; ?>css/page_2.css" type="text/css" rel="stylesheet">
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

                <p id="hwtxt">Wichtig f&uuml;r Ihre g&uuml;ltige Teilnahme:</p>
                <div id="hinweis">
                    <p class="small_text"><b>Bitte schlie&szlig;en Sie Ihre Teilnahme ab.</b></p><p class="small_text"> Wir haben Ihnen an Ihre E-Mail-Adresse {email} eine E-Mail gesendet. <br>Best&auml;tigen Sie bitte in dieser E-Mail Ihre Teilnahme. </p><p class="small_text"><b>Es k&ouml;nnen nur best&auml;tigte Teilnehmer an der Verlosung teilnehmen.</b></p>
                </div>

                <br>

                <p class="big_text"><?php echo $this->session->userdata("first_name") ?> <?php echo $this->session->userdata("last_name") ?> bitte beantworten Sie kurz folgende Fragen:</p>
                <form id="formID" onsubmit="return jQuery(this).validationEngine('validate');" class="formular" method="post" action="<?php echo base_url() . "sweepstakes/get_sweepstakes_data"; ?>">

                    <fieldset id="mfw_fieldset_ownCoregData"  class="test3">
                        <p class="mfw_coreg_19 ">
                            <input type="hidden" name="coreg_question_1" value="Haben Sie Interesse Ihre Z&auml;hne f&uuml;r wenig Geld machen zu lassen?">
                            <label>Haben Sie Interesse Ihre Z&auml;hne f&uuml;r wenig Geld machen zu lassen?</label>
                            <input class="radio" type="radio" name="coreg_answer_1"  value="Ja, unbedingt!" id="mfw_coreg[19]">Ja, unbedingt!<br>
                            <input class="radio" type="radio" name="coreg_answer_1"  value="Ich bin mir nicht sicher" id="mfw_coreg[19]">Ich bin mir nicht sicher<br>
                            <input class="radio" type="radio" name="coreg_answer_1"  value="Nein, auf keinen Fall" id="mfw_coreg[19]">Nein, auf keinen Fall
                        </p>

                    </fieldset>
                    <fieldset id="mfw_fieldset_ownCoregData"  class="test3">
                        <p class="mfw_coreg_19 ">
                            <input type="hidden" name="coreg_question_2" value="Haben Sie Interesse Ihre Z&auml;hne f&uuml;r wenig Geld machen zu lassen?">
                            <label>Haben Sie Interesse Ihre Z&auml;hne f&uuml;r wenig Geld machen zu lassen?</label>
                            <input class="radio" type="radio" name="coreg_answer_2"  value="Ja, unbedingt!" id="mfw_coreg[19]">Ja, unbedingt!<br>
                            <input class="radio" type="radio" name="coreg_answer_2"  value="Ich bin mir nicht sicher" id="mfw_coreg[19]">Ich bin mir nicht sicher<br>
                            <input class="radio" type="radio" name="coreg_answer_2"  value="Nein, auf keinen Fall" id="mfw_coreg[19]">Nein, auf keinen Fall
                        </p>

                    </fieldset>
                    <fieldset id="mfw_fieldset_ownCoregData"  class="test3">
                        <p class="mfw_coreg_19 ">
                            <input type="hidden" name="coreg_question_3" value="Haben Sie Interesse Ihre Z&auml;hne f&uuml;r wenig Geld machen zu lassen?">
                            <label>Haben Sie Interesse Ihre Z&auml;hne f&uuml;r wenig Geld machen zu lassen?</label>
                            <input class="radio" type="radio" name="coreg_answer_3"  value="Ja, unbedingt!" id="mfw_coreg[19]">Ja, unbedingt!<br>
                            <input class="radio" type="radio" name="coreg_answer_3"  value="Ich bin mir nicht sicher" id="mfw_coreg[19]">Ich bin mir nicht sicher<br>
                            <input class="radio" type="radio" name="coreg_answer_3"  value="Nein, auf keinen Fall" id="mfw_coreg[19]">Nein, auf keinen Fall
                        </p>

                    </fieldset>
            </div>



            <input type="hidden" name="page_number" value="3">
            <input type="hidden" name="user_id" value="<?php echo $this->uri->segment(4); ?>">
            <input type="submit" name="submit" value="Weiter" id="footer_sponsoren">

            <div id="footer_links">
                <a href="">AGB</a>
                <a href="">Impressum</a>
                <a href="">Datenschutz</a>
            </div>
        </form>
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