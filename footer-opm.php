<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package OnePageMadness
 */
global $opm;
?>
<footer>
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <?php
                if (!dynamic_sidebar("footer")) {
                    ?>
                    <h2><?php echo $opm['opm_footer_section_title']; ?></h2>
                    <?php echo $opm['opm_footer_section_description']; ?>
                <?php } ?>
            </div>

            <div class="col-md-6 text-right">
                <ul class="list-inline social-buttons">
                    <?php
                    $socialSites = array("facebook", "pinterest", "twitter", "dribbble", "flickr", "github");

                    foreach ($socialSites as $ss) {
                        if ($opm['opm_social' . $ss]!="") {
                            ?>
                            <li>
                                <a href="<?php echo $opm['opm_social_' . $ss]; ?>"><i
                                        class="fa fa-<?php echo $ss; ?>"></i></a>
                            </li>
                        <?php
                        }

                    }
                    ?>
                </ul>

                <p class="copyright"><?php echo $opm['opm_footer_copyright']; ?> </a></p>

            </div>

        </div>
    </div>
</footer>
<style type="text/css">
    #parallax1 {
        background-image: url(<?php echo $opm['opm_parallax1_section_image']['url'];?>);
    }

    #parallax2 {
        background-image: url(<?php echo $opm['opm_parallax2_section_image']['url'];?>);
    }
</style>
<script type="text/javascript">
    var banner_gallery = [];
    <?php
    $banner = array();
    if($opm['opm_banner_gallery']){
        $images= explode(",",$opm['opm_banner_gallery']);
        foreach($images as $image){
                $attachment = wp_get_attachment_image_src($image, "banner");
                $banner[] = $attachment[0];
        }
    }
    echo "banner_gallery = ".json_encode($banner).";";
    ?>
</script>
<?php wp_footer(); ?>

</body>
</html>
