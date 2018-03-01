<?php

namespace Drupal\current_time\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'CurrentTimeBlock' block.
 *
 * @Block(
 *  id = "current_time_block",
 *  admin_label = @Translation("Current time block"),
 * )
 */
class CurrentTimeBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $today = date("l, j F Y", time());
    $build['current_time_block']['#markup'] = '<div class="current_date_time">' .$today. '</div>';

    return $build;
  }

}
