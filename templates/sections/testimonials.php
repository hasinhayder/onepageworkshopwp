<?php
/**
 * Created by PhpStorm.
 * User: storyteller
 * Date: 12/20/14
 * Time: 2:38 AM
 */
global $opm;
if ($opm['opm_testimonial_section_display']) {
    ?>
    <div class="section pb100 bg-offWhite" id="testimonials">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h1 class="section-title"><?php echo $opm['opm_testimonial_section_title']; ?></h1>

                    <div class="col-md-offset-1 col-md-10 section-description lead text-center">
                        <?php echo wpautop($opm['opm_testimonial_section_description']); ?>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="clients-say pt100 text-center">
                    <?php
                    if ($opm['opm_testimonials']) {
                        foreach ($opm['opm_testimonials'] as $testimonial) {
                            $tm_meta =  get_post_meta($testimonial);
                            ?>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php echo $tm_meta['_opm_icon'][0];?>"/>
                                </div>
                                <div class="details">
                                    <h2><?php echo $tm_meta['_opm_name'][0];?></h2>

                                    <p>
                                        <a href="<?php echo $tm_meta['_opm_url'][0];?>" target="_blank"><?php echo $tm_meta['_opm_designation'][0];?></a>
                                    </p>
                                    <blockquote>
                                        <i class="fa fa-quote-left"></i>
                                        <?php echo wpautop($tm_meta['_opm_description'][0]);?>
                                        <i class="fa fa-quote-right"></i>
                                    </blockquote>
                                </div>
                            </div>
                        <?php
                        }
                    }
                    ?>
                </div>
                <!--End clients-say -->
            </div>
            <!--End row -->
        </div>
    </div>
<?php } ?>