<?php
global $opm;
if($opm['opm_contact_section_display']){
?>
<div id="contact" class="pt100">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1 class="section-title"><?php echo $opm['opm_contact_section_title'];?></h1>

                <div class="col-md-offset-1 col-md-10 section-description lead text-center">
                    <?php echo wpautop($opm['opm_contact_section_description']);?>
                </div>
            </div>
        </div>

        <div class="row pt100 pb100">
            <div class="col-lg-12">
                <?php

                if($opm['opm_contact_shortcode']){
                    echo do_shortcode($opm['opm_contact_shortcode']);
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>