<?php
/**
* Dynamic Block Template.
*	@param   array $attributes - A clean associative array of block attributes.
* @param   array $block - All the block settings and attributes.
* @param   string $content - The block inner HTML (usually empty unless using inner blocks).
*/


$heading = $attributes["heading"];
$body = $attributes["body"];
$image_id = $attributes["image_id"];

$layout_variant = $attributes["layout_variant"];

?>


<!-- <div <?php echo get_block_wrapper_attributes(["class" => 'variant-' . $layout_variant]); ?>>
    <div class="cta-image-container">
        <?php echo wp_get_attachment_image( $image_id, "full" ); ?>
    </div>
    <div class="cta-text-container">
        <h2><?php echo $heading ?></h2>
        <p><?php echo $body ?></p>
        <?php echo $content; ?>
    </div>
</div> -->


<div class="mx-auto col-xl-8 col-lg-8 col-md-6 mb-2 col-10">
    <div class="radius-md position-relative h-100 overflow-hidden bg-primary">
        <div class="row">

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 order-lg-1 order-3">
                <div class="p-5">
                    <h6 class="display-5 text-light"><?php echo $heading ?></h6>
                    <div class="text-light mb-3">
                        <p><?php echo $body ?></p>
                        <?php echo $content; ?>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 order-lg-2 order-1" style="min-height: 300px;">
                <div class="m-0 z-index-0 h-100 w-100"
                    style="background:
      url('<?php echo wp_get_attachment_url( $image_id, "full" ); ?>');     background-repeat: no-repeat;background-size: cover; height: 100%; width: 50%; opacity: 1; bottom: 0%; right: 0%; background-position: top right;">
                </div>
            </div>


        </div>
    </div>
</div>