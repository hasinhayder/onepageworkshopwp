<?php
global $opm;
if ($opm['opm_experience_section_display']) {
    ?>
    <div class="section pb100" id="experiences">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="section-title"><?php echo $opm['opm_experience_section_title']; ?></h1>

                    <div class="col-md-offset-1 col-md-10 section-description lead text-center">
                        <?php echo wpautop($opm['opm_experience_section_description']); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                if ($opm['opm_experiences']) {
                    foreach ($opm['opm_experiences'] as $experience) {
                        $experience_parts = explode(",",$experience);

                        ?>
                        <div class="col-md-3">
                            <div class="exp">
                                <div class="exp-number">
                                    <?php echo $experience_parts[0];?>
                                </div>
                                <h2 class="exp-heading text-center"><?php echo $experience_parts[1];?></h2>
                            </div>
                        </div>
                    <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
<?php } ?>