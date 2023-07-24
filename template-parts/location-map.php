<?php global $content_array; ?>

<div class="container map-wrapper w-1100" style="padding-bottom: 60px;">
    <h2 class="sectionTitle font-weight-light">IN YOUR COMMUNITY</h2>
    <hr class="horizontalLine">
    <div class="row m-auto locationDetails p-0">
        <div class="w-100 switch-field p-0">
            <input style="display:none;" id="bt1" type="radio" name="type" value="1" checked>
            <label class="bt1" for="bt1" style="margin-bottom:8px;"> Bing </label>
            <input style="display:none;" id="bt2" type="radio" name="type" value="2" checked>
            <label class="bt2" for="bt2"> Google </label>
            <div class="gMap">
                <iframe class="_maps" data-src="<?php echo $content_array['google-src'] ?: 'google-src' ?>"  width="100%" height="450" style="border:0; max-height: 400px;" loading="lazy"></iframe>
            </div>
            <div class="bingMap mx-auto">
                <iframe class="_maps" width="800" height="400" frameborder="0" data-src="<?php echo $content_array['bing-src'] ?: 'bing-src' ?>"  scrolling="no">
                </iframe>
            </div>
            <h4 class="location-detail-title location-info" style="color:var(--semperBlue) !important;"><strong><?php echo $content_array['city-name'] ?> Office</strong></h4>
        </div>
        <div class="col-5 locationDetails location-info" style="border-top: 2px solid lightgrey; border-right: 2px solid lightgrey; ">
            <img loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Map Time Blue Icon.svg" alt="clock icon">
            <?php echo $content_array['office-hours'] ?>
        </div>
        <div class="col-4 locationDetails location-info" style="border-top: 2px solid lightgrey; border-right: 2px solid lightgrey;">
            <img loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Map Location Blue Icon.svg" alt="map pin icon">
            <?php echo $content_array['office-address'] ?>
        </div>
        <div class="col-3 locationDetails location-info" style="border-top: 2px solid lightgrey">
            <img loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Map Phone Blue Icon.svg" alt="blue phone icon">
            <?php echo $content_array['office-number'] ?>
        </div>

    </div>
</div>