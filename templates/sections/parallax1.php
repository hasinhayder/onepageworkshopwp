<?php
global $opm;
if($opm['opm_parallax1_section_display']){
?>
<div class="section" id="parallax1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="parallaxtext col-md-offset-1 col-md-10">
                    <div class="text-center">
                        <?php echo $opm['opm_parallax1_section_description'];?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>