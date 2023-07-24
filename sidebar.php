<?php

/**
 * General Use Sidebar
 */


if (isset($_GET['s'])) :
    echo '<style>#vertical_container{margin-top:66px;}</style>';
endif;
?>
<style>
    #vertical_container {
        background-image: var(--semper-blue-gradient);
    }

    #vertical_container fieldset {
        border: 1px solid #c0c0c0;
        margin: 0 2px;
        padding: 0.35em 0.625em 0.75em;
    }

    #vertical_container legend {
        float: none;
        width: auto;
        font-size: inherit;
        font-style: oblique;
    }

    #vertical_container input,
    #vertical_container label,
    #vertical_container select {
        width: 100%;
    }

    #vertical_container input::-webkit-input-placeholder {
        opacity: 0
    }

    #vertical_container input::-moz-placeholder {
        opacity: 0
    }

    #vertical_container input:-ms-input-placeholder {
        opacity: 0
    }

    #vertical_container input::-ms-input-placeholder {
        opacity: 0
    }

    #vertical_container input::placeholder {
        opacity: 0
    }
</style>
<aside id="secondary" class="widget-area" style="position: -webkit-sticky;position: sticky; top: 140px;">

    <div id="vertical_container" class="p-3"></div>

</aside><!-- #secondary -->