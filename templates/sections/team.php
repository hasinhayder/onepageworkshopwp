<?php
/**
 * Created by PhpStorm.
 * User: storyteller
 * Date: 12/20/14
 * Time: 1:53 AM
 */
global $opm;
if ($opm['opm_team_section_display']) {
    ?>
    <div class="section pb100" id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="section-title"><?php echo $opm['opm_team_section_title']; ?></h1>

                    <div class="col-md-offset-1 col-md-10 section-description lead text-center">
                        <?php echo wpautop($opm['opm_team_section_description']); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="teams">
                    <?php
                    if ($opm['opm_teammembers']) {
                        foreach ($opm['opm_teammembers'] as $teammember) {
                            $tm_meta = get_post_meta($teammember);
                            ?>
                            <div class="col-md-3">
                                <div class="team text-center">
                                    <img class="img-responsive img-rounded"
                                         src="<?php echo $tm_meta['_opm_profile'][0]; ?>"
                                         alt=""/>

                                    <h2><?php echo get_the_title($teammember); ?></h2>

                                    <?php echo wpautop($tm_meta['_opm_description'][0]); ?>

                                    <p class="social">

                                        <?php
                                        $socialSites = array("facebook", "pinterest", "twitter", "dribbble", "flickr", "github");

                                        foreach ($socialSites as $ss) {
                                            if($tm_meta["_opm_{$ss}"]!=""){
                                                ?>
                                                <a href="<?php echo $$tm_meta["_opm_{$ss}"];?>" target="_blank">
                                                    <span class="fa-stack fa-lg">
                                                        <i class="fa fa-circle fa-stack-2x"></i>
                                                        <i class="fa fa-<?php echo $ss;?> fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                                <?php
                                            }
                                        }
                                        ?>

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
    </div>
<?php } ?>