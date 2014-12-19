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
