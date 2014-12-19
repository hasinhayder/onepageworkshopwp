<?php
/**
 * Created by PhpStorm.
 * User: storyteller
 * Date: 12/20/14
 * Time: 1:53 AM
 */
global $opm;
if ($opm['opm_service_section_display']) {
    ?>
    <div class="section pb100" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="section-title"><?php echo $opm['opm_service_section_title']; ?></h1>

                    <div class="col-md-offset-1 col-md-10 section-description lead text-center">
                        <?php echo wpautop($opm['opm_service_section_description']); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="services">
                    <?php
                    if ($opm['opm_services']) {
                        foreach ($opm['opm_services'] as $service) {
                            $service_meta = get_post_meta($service);
                            ?>
                            <div class="col-md-4">
                                <div class="service text-center">
                                    <img src="<?php echo $service_meta['_opm_icon'][0];?>" alt=""/>

                                    <h2><?php echo get_the_title($service);?></h2>

                                    <?php echo wpautop($service_meta['_opm_description'][0]);?>
                                </div>
                            </div>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>