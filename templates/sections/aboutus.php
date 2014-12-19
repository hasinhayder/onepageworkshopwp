<?php
global $opm;
if($opm['opm_about_section_display']){
?>
<div id="about" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="section-title"><?php echo $opm['opm_about_section_title'];?></h1>

                <div class="col-md-offset-1 col-md-10 section-description lead text-center">
                    <?php echo wpautop($opm['opm_about_section_description']);?>
                </div>

                <img src="<?php echo $opm['opm_about_section_image']['url']; ?>" class="pt40" alt=""/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6"></div>
        </div>
    </div>
</div>
<?php } ?>