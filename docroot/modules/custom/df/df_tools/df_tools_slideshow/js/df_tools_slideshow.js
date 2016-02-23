/**
 * @file
 * Contains Javascript required to format the form
 */

(function ($, Drupal) {

  "use strict";

  Drupal.behaviors.DFToolsSlideshow = {
    attach: function (context, settings) {
      $('.df-tools-slideshow > .field-items').slick(settings.DFToolsSlideshow.slick);
    }
  };

}(jQuery, Drupal));
