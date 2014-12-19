<?php
/**
 * Created by PhpStorm.
 * User: storyteller
 * Date: 12/20/14
 * Time: 3:02 AM
 */
global $opm;
if ($opm['opm_portfolio_section_display']) {
    ?>
    <div id="portfolio" class="section pb100 bg-offWhite">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h1 class="section-title"><?php echo $opm['opm_portfolio_section_title']; ?></h1>

                    <div class="col-md-offset-1 col-md-10 section-description lead text-center">
                        <?php echo wpautop($opm['opm_portfolio_section_description']); ?>
                    </div>
                </div>
            </div>

            <div class="row pt40">
                <?php
                if ($opm['opm_portfolio_gallery']) {
                    $gallery_images = explode(",",$opm['opm_portfolio_gallery']);
                    foreach ($gallery_images as $image) {
                        $image_meta = wp_prepare_attachment_for_js($image);
                        ?>
                        <div class="col-md-4 col-sm-6 portfolio-item web-design">
                            <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <i class="fa fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img
                                    src="<?php echo wp_get_attachment_image_src($image,"portfolio")[0];?>"
                                    class="img-responsive" alt="<?php echo $image_meta['caption'];?>"> </a>

                            <div class="portfolio-caption">
                                <h4><?php echo $image_meta['caption'];?></h4>

                                <p class="text-muted">
                                    <?php echo $image_meta['description'];?>
                                </p>
                            </div>
                        </div>
                    <?php

                    }
                }
                ?>
            </div>

        </div>
    </div>
<?php
}
?>