<?php

/**
 * @file
 * Contains \Drupal\df_tools_blocks\Plugin\migrate\source\MediaBlock.
 */

namespace Drupal\df_tools_blocks\Plugin\migrate\source;

use Drupal\migrate\Row;
use Drupal\migrate_source_csv\Plugin\migrate\source\CSV;

/**
 * Source for Media block CSV.
 *
 * @MigrateSource(
 *   id = "media_block"
 * )
 */
class MediaBlock extends CSV {

  public function prepareRow(Row $row) {
    if ($media = $row->getSourceProperty('Media')) {
      $images = explode(',', $media);
      $files = array();

      $base_path = dirname($this->configuration['path']) . '/images/';

      foreach ($images as $image) {
        $path = $base_path . $image;
        $data = file_get_contents($path);
        $uri = file_build_uri($image);
        $files[] = file_save_data($data, $uri);
      }

      $row->setSourceProperty('Media', $files);
    }
  }

}
