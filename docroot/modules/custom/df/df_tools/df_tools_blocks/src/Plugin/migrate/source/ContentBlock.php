<?php

/**
 * @file
 * Contains \Drupal\df_tools_blocks\Plugin\migrate\source\ContentBlock.
 */

namespace Drupal\df_tools_blocks\Plugin\migrate\source;

use Drupal\migrate\Row;
use Drupal\migrate_source_csv\Plugin\migrate\source\CSV;

/**
 * Source for Content block CSV.
 *
 * @MigrateSource(
 *   id = "content_block"
 * )
 */
class ContentBlock extends CSV {

  public function prepareRow(Row $row) {
    if ($content = $row->getSourceProperty('Content')) {
      $titles = explode(',', $content);
      $references = [];
      foreach ($titles as $title) {
        $result = \Drupal::entityQuery('node')
          ->condition('title', $title)
          ->execute();
        if (!empty($result)) {
          $references[] = [
            'target_id' => reset($result)
          ];
        }
      }
      $row->setSourceProperty('Content', $references);
    }
  }
}
