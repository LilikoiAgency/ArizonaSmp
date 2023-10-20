<?php

$button_color = '#0b4e97';
$_social_handles = ['twitter' => urlencode('https://twitter.com/sempersolarisco')];

$_domain = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
$_page_url = $_domain . parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$_params = parse_url($_SERVER["REQUEST_URI"], PHP_URL_QUERY);
if (!empty($_params)) {
    $_page_url = $_page_url . '?' . $_params;
}
$_page_url = urlencode($_page_url);

$_page_title = get_the_title();
$_thumbnail = get_the_post_thumbnail_url();

$social_links = array(
    'Facebook' => <<<FACEBOOK
    <a href="https://www.facebook.com/sharer/sharer.php?u={$_page_url}&t={$_page_title}"
       onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"
       target="_blank" title="Share on Facebook"><svg xmlns="http://www.w3.org/2000/svg" fill="{$button_color}" height="2em" viewBox="0 0 448 512"><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"/></svg></a>
    FACEBOOK,
    'Twitter' => <<<TWITTER
    <a href="https://twitter.com/intent/tweet?original_referer={$_domain}&url={$_page_url}&via={$_social_handles['twitter']}&text={$_page_title}&hashtags=SemperSolaris"
    onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"
    target="_blank" title="Share on Twitter"><svg xmlns="http://www.w3.org/2000/svg" fill="{$button_color}" height="2em" viewBox="0 0 448 512"><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm297.1 84L257.3 234.6 379.4 396H283.8L209 298.1 123.3 396H75.8l111-126.9L69.7 116h98l67.7 89.5L313.6 116h47.5zM323.3 367.6L153.4 142.9H125.1L296.9 367.6h26.3z"/></svg></a>
    TWITTER,
    'LinkedIn' => <<<LINKEDIN
    <a href="https://www.linkedin.com/sharing/share-offsite/?url={$_page_url}&title={$_page_title}&source={$_domain}"
    onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"
    target="_blank" title="Share on LinkedIn"><svg xmlns="http://www.w3.org/2000/svg" fill="{$button_color}" height="2em" viewBox="0 0 448 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a>
    LINKEDIN,
    'pinterest' => <<<PINTEREST
    <a href="https://www.pinterest.com/pin/create/bookmarklet/?url={$_page_url}&media={$_thumbnail}&description={$_page_title}"
    onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"
    target="_blank" title="Share on Pinterest"><svg xmlns="http://www.w3.org/2000/svg" fill="{$button_color}" height="2em" viewBox="0 0 448 512"><path d="M448 80v352c0 26.5-21.5 48-48 48H154.4c9.8-16.4 22.4-40 27.4-59.3 3-11.5 15.3-58.4 15.3-58.4 8 15.3 31.4 28.2 56.3 28.2 74.1 0 127.4-68.1 127.4-152.7 0-81.1-66.2-141.8-151.4-141.8-106 0-162.2 71.1-162.2 148.6 0 36 19.2 80.8 49.8 95.1 4.7 2.2 7.1 1.2 8.2-3.3.8-3.4 5-20.1 6.8-27.8.6-2.5.3-4.6-1.7-7-10.1-12.3-18.3-34.9-18.3-56 0-54.2 41-106.6 110.9-106.6 60.3 0 102.6 41.1 102.6 99.9 0 66.4-33.5 112.4-77.2 112.4-24.1 0-42.1-19.9-36.4-44.4 6.9-29.2 20.3-60.7 20.3-81.8 0-53-75.5-45.7-75.5 25 0 21.7 7.3 36.5 7.3 36.5-31.4 132.8-36.1 134.5-29.6 192.6l2.2.8H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48z"/></svg></a>
    PINTEREST,
    'Email' => <<<EMAIL
    <a href="mailto:?subject={$_page_title}&body=Check out this information: {$_page_title} {$_page_url}" title="Share via Email"><svg xmlns="http://www.w3.org/2000/svg" fill="{$button_color}" height="2em" viewBox="0 0 512 512"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg></a>
    EMAIL,
    'sms' => <<<SMS
    <a href="sms:?&body={$_page_title} - {$_page_url}" title="Share via Text Message"><svg xmlns="http://www.w3.org/2000/svg" fill="{$button_color}" height="2em" viewBox="0 0 512 512"><path d="M256 448c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9c-5.5 9.2-11.1 16.6-15.2 21.6c-2.1 2.5-3.7 4.4-4.9 5.7c-.6 .6-1 1.1-1.3 1.4l-.3 .3 0 0 0 0 0 0 0 0c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c28.7 0 57.6-8.9 81.6-19.3c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9zM202.9 176.8c6.5-2.2 13.7 .1 17.9 5.6L256 229.3l35.2-46.9c4.1-5.5 11.3-7.8 17.9-5.6s10.9 8.3 10.9 15.2v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V240l-19.2 25.6c-3 4-7.8 6.4-12.8 6.4s-9.8-2.4-12.8-6.4L224 240v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-6.9 4.4-13 10.9-15.2zm173.1 38c0 .2 0 .4 0 .4c.1 .1 .6 .8 2.2 1.7c3.9 2.3 9.6 4.1 18.3 6.8l.6 .2c7.4 2.2 17.3 5.2 25.2 10.2c9.1 5.7 17.4 15.2 17.6 29.9c.2 15-7.6 26-17.8 32.3c-9.5 5.9-20.9 7.9-30.7 7.6c-12.2-.4-23.7-4.4-32.6-7.4l0 0 0 0c-1.4-.5-2.7-.9-4-1.4c-8.4-2.8-12.9-11.9-10.1-20.2s11.9-12.9 20.2-10.1c1.7 .6 3.3 1.1 4.9 1.6l0 0 0 0c9.1 3.1 15.6 5.3 22.6 5.5c5.3 .2 10-1 12.8-2.8c1.2-.8 1.8-1.5 2.1-2c.2-.4 .6-1.2 .6-2.7l0-.2c0-.7 0-1.4-2.7-3.1c-3.8-2.4-9.6-4.3-18-6.9l-1.2-.4c-7.2-2.2-16.7-5-24.3-9.6c-9-5.4-17.7-14.7-17.7-29.4c-.1-15.2 8.6-25.7 18.5-31.6c9.4-5.5 20.5-7.5 29.7-7.4c10 .2 19.7 2.3 27.9 4.4c8.5 2.3 13.6 11 11.3 19.6s-11 13.6-19.6 11.3c-7.3-1.9-14.1-3.3-20.1-3.4c-4.9-.1-9.8 1.1-12.9 2.9c-1.4 .8-2.1 1.6-2.4 2c-.2 .3-.4 .8-.4 1.9zm-272 0c0 .2 0 .4 0 .4c.1 .1 .6 .8 2.2 1.7c3.9 2.3 9.6 4.1 18.3 6.8l.6 .2c7.4 2.2 17.3 5.2 25.2 10.2c9.1 5.7 17.4 15.2 17.6 29.9c.2 15-7.6 26-17.8 32.3c-9.5 5.9-20.9 7.9-30.7 7.6c-12.3-.4-24.2-4.5-33.2-7.6l0 0 0 0c-1.3-.4-2.5-.8-3.6-1.2c-8.4-2.8-12.9-11.9-10.1-20.2s11.9-12.9 20.2-10.1c1.4 .5 2.8 .9 4.1 1.4l0 0 0 0c9.5 3.2 16.5 5.6 23.7 5.8c5.3 .2 10-1 12.8-2.8c1.2-.8 1.8-1.5 2.1-2c.2-.4 .6-1.2 .6-2.7l0-.2c0-.7 0-1.4-2.7-3.1c-3.8-2.4-9.6-4.3-18-6.9l-1.2-.4 0 0c-7.2-2.2-16.7-5-24.3-9.6C80.8 239 72.1 229.7 72 215c-.1-15.2 8.6-25.7 18.5-31.6c9.4-5.5 20.5-7.5 29.7-7.4c9.5 .1 22.2 2.1 31.1 4.4c8.5 2.3 13.6 11 11.3 19.6s-11 13.6-19.6 11.3c-6.6-1.8-16.8-3.3-23.3-3.4c-4.9-.1-9.8 1.1-12.9 2.9c-1.4 .8-2.1 1.6-2.4 2c-.2 .3-.4 .8-.4 1.9z"/></svg></a>
    SMS
);

echo '<p style="margin:0"><strong><small>Share this:</small></strong></p><div style="display:inline">';
foreach ($social_links as $name => $link) {
    echo '<span style="display:inline;padding-right:8px">' . $link . '</span>';
}
echo '</div>';
