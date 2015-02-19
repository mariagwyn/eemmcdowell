<?php
// deipcoro by Adaptivethemes.com, a starter sub-sub-theme.

/**
 * Rename each function and instance of "deipcoro" to match
 * your subthemes name, e.g. if you name your theme "deipcoro" then the function
 * name will be "deipcoro_preprocess_hook". Tip - you can search/replace
 * on "deipcoro".
 */

/**
 * Override or insert variables into the html templates.
 * Replace 'deipcoro' with your themes name, i.e. mytheme_preprocess_html()
 */
function deipcoro_preprocess_html(&$vars) {

  // Load the media queries styles
  // If you change the names of these files they must match here - these files are
  // in the /css/ directory of your subtheme - the names must be identical!
  $media_queries_css = array(
    'deipcoro.responsive.style.css',
    'deipcoro.responsive.gpanels.css'
  );
  load_subtheme_media_queries($media_queries_css, 'deipcoro'); // Replace 'deipcoro' with your themes name

 /**
  * Load IE specific stylesheets
  * AT automates adding IE stylesheets, simply add to the array using
  * the conditional comment as the key and the stylesheet name as the value.
  *
  * See our online help: http://adaptivethemes.com/documentation/working-with-internet-explorer
  *
  * For example to add a stylesheet for IE8 only use:
  *
  *  'IE 8' => 'ie-8.css',
  *
  * Your IE CSS file must be in the /css/ directory in your subtheme.
  */
  /* -- Delete this line to add a conditional stylesheet for IE 7 or less.
  $ie_files = array(
    'lte IE 7' => 'ie-lte-7.css',
  );
  load_subtheme_ie_styles($ie_files, 'deipcoro'); // Replace 'deipcoro' with your themes name
  // */

}