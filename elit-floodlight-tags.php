<?php

/**
 * Plugin Name: Elit Floodlight Tags
 * Description: Add Floodlight tags
 * Version:     1.0.0
 * Author:      pjs
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


/**
 * Add floodlight tags.
 *
 * @author pjs
 *
 */
function elit_add_floodlight_tag()
{
    $findYourDoTitle = 'find-your-do';
    $doDifferenceTitle = 'difference';
    $videoLibraryTitle = 'video-library';

    if (is_page($findYourDoTitle)) {

        $html = '
            <!--
            Start of DoubleClick Floodlight Tag: Please do not remove
            Activity name of this tag: Find A DO (Search Results)
            URL of the webpage where the tag is expected to be placed: http://doctorsthatdo.org/find-your-do#search
            This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
            Creation Date: 10/21/2015
            -->

            <script type="text/javascript">
            var axel = Math.random() + "";
            var a = axel * 10000000000000;
            document.write(\'<iframe src="https://5128400.fls.doubleclick.net/activityi;src=5128400;type=kpirm0;cat=finda0;ord=\' + a + \'?" width="1" height="1" frameborder="0" style="display:none"></iframe>\');
            </script>
            <noscript>
            <iframe src="https://5128400.fls.doubleclick.net/activityi;src=5128400;type=kpirm0;cat=finda0;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
            </noscript>
            <!-- End of DoubleClick Floodlight Tag: Please do not remove -->

            <!--
            Start of DoubleClick Floodlight Tag: Please do not remove
            Activity name of this tag: Unique Find A DO (Search Results)
            URL of the webpage where the tag is expected to be placed: http://doctorsthatdo.org/find-your-do#search
            This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
            Creation Date: 08/17/2016
            -->
            <script type="text/javascript">
            var axel = Math.random() + "";
            var a = axel * 10000000000000;
            document.write(\'<iframe src="https://5128400.fls.doubleclick.net/activityi;src=5128400;type=kpirm0;cat=uniqu0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1;num=\' + a + \'?" width="1" height="1" frameborder="0" style="display:none"></iframe>\');
            </script>
            <noscript>
            <iframe src="https://5128400.fls.doubleclick.net/activityi;src=5128400;type=kpirm0;cat=uniqu0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1;num=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
            </noscript>
            <!-- End of DoubleClick Floodlight Tag: Please do not remove -->
        ';
    
        echo $html;

    // Health Library is the page where we list blog posts, 
    // so WP considers it a home page
    } else if (is_home()) {
        $html = '
            <!--
            Start of DoubleClick Floodlight Tag: Please do not remove
            Activity name of this tag: Health Library (Articles)
            URL of the webpage where the tag is expected to be placed: http://doctorsthatdo.org/health-library
            This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
            Creation Date: 10/21/2015
            -->
            <script type="text/javascript">
            var axel = Math.random() + "";
            var a = axel * 10000000000000;
            document.write(\'<iframe src="https://5128400.fls.doubleclick.net/activityi;src=5128400;type=artic0;cat=artic0;ord=1;num=\' + a + \'?" width="1" height="1" frameborder="0" style="display:none"></iframe>\');
            </script>
            <noscript>
            <iframe src="https://5128400.fls.doubleclick.net/activityi;src=5128400;type=artic0;cat=artic0;ord=1;num=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
            </noscript>
            <!-- End of DoubleClick Floodlight Tag: Please do not remove -->';

            echo $html;
    
    } else if (is_page($doDifferenceTitle)) {
        $html = '
            <!--
            Start of DoubleClick Floodlight Tag: Please do not remove
            Activity name of this tag: The DO Difference
            URL of the webpage where the tag is expected to be placed: http://doctorsthatdo.org/difference
            This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
            Creation Date: 10/21/2015
            -->
            <script type="text/javascript">
            var axel = Math.random() + "";
            var a = axel * 10000000000000;
            document.write(\'<iframe src="https://5128400.fls.doubleclick.net/activityi;src=5128400;type=kpirm0;cat=thedo0;ord=1;num=\' + a + \'?" width="1" height="1" frameborder="0" style="display:none"></iframe>\');
            </script>
            <noscript>
            <iframe src="https://5128400.fls.doubleclick.net/activityi;src=5128400;type=kpirm0;cat=thedo0;ord=1;num=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
            </noscript>
            <!-- End of DoubleClick Floodlight Tag: Please do not remove -->
        ';

        echo $html;

    } else if (is_page($videoLibraryTitle)) {

        $html = '
            <!--
            Start of DoubleClick Floodlight Tag: Please do not remove
            Activity name of this tag: Video Library
            URL of the webpage where the tag is expected to be placed: http://doctorsthatdo.org/difference/video-library
            This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
            Creation Date: 10/21/2015
            -->
            <script type="text/javascript">
            var axel = Math.random() + "";
            var a = axel * 10000000000000;
            document.write(\'<iframe src="https://5128400.fls.doubleclick.net/activityi;src=5128400;type=video0;cat=video0;ord=1;num=\' + a + \'?" width="1" height="1" frameborder="0" style="display:none"></iframe>\');
            </script>
            <noscript>
            <iframe src="https://5128400.fls.doubleclick.net/activityi;src=5128400;type=video0;cat=video0;ord=1;num=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
            </noscript>
            <!-- End of DoubleClick Floodlight Tag: Please do not remove -->';

        echo $html;

    } else if (is_front_page()) {

        $html = '
            <!--
            Start of DoubleClick Floodlight Tag: Please do not remove
            Activity name of this tag: Homepage
            URL of the webpage where the tag is expected to be placed: http://doctorsthatdo.org/
            This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
            Creation Date: 08/23/2016
            -->
            <script type="text/javascript">
            var axel = Math.random() + "";
            var a = axel * 10000000000000;
            document.write(\'<iframe src="https://5128400.fls.doubleclick.net/activityi;src=5128400;type=homep0;cat=homep0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1;num=\' + a + \'?" width="1" height="1" frameborder="0" style="display:none"></iframe>\');
            </script>
            <noscript>
            <iframe src="https://5128400.fls.doubleclick.net/activityi;src=5128400;type=homep0;cat=homep0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1;num=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
            </noscript>
            <!-- End of DoubleClick Floodlight Tag: Please do not remove -->
        ';

        echo $html;
    }
}
add_action('just_opened_body_tag' , 'elit_add_floodlight_tag');

