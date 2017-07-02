<?php
get_header( );
global $cs;
$header_text = $cs['header_text'];
$sub_header_text = $cs['sub_heading_text'];
?>

<div class="comming-soon-area text-center">
    <div class="display-table">
        <div class="display-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="coming-text text-center">
                                <h1>
                                <?php echo $header_text ?>
                                </h1>
                                
                                <p><?php echo $sub_header_text ?></p>
                        </div>

                        <div class="countdown">
                            <div class="simply-countdown-losange" id="simply-countdown-losange"></div>
                        </div>

                      <div class="social-icon text-center">
                        <?php 
                            if (isset($cs['contact_social']) && !empty($cs['contact_social'])) {
                                foreach ($cs['contact_social'] as $single_social) {
                                    ?>
                                        <a href="<?php echo $single_social['url'] ?>"><i class="fa <?php echo $single_social['title'] ?>"></i></a>
                                    <?php
                                }
                            } else {
                        ?>
                            <a href="#0"><i class="fa fa-facebook"></i></a>
                            <a href="#0" class="one"><i class="fa fa-twitter"></i></a>
                            <a href="#0" class="two"><i class="fa fa-youtube-play"></i></a>
                        <?php } ?>
                      
                      </div>

                    </div>
                </div>
    		</div>
        </div>
    </div>
</div>

<?php get_footer(  ); ?>