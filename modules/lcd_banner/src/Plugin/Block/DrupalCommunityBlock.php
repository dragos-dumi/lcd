<?php

namespace Drupal\lcd_banner\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Drupal Community' block.
 *
 * @Block(
 *   id = "lcd_banner_drupal_community",
 *   admin_label = @Translation("Drupal Community"),
 *   category = @Translation("Banner")
 * )
 */
class DrupalCommunityBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['content'] = [
      '#markup' => '
        <div id="drupal-community">
            <div class="darkener">
                <div class="content">
                    <div>
                        <img class="logo" src="' . drupal_get_path('module', 'lcd_banner') . '/images/drupal-community/logo.svg" alt="' . $this->t('Drupal logo') . '" />
                    </div>
                    <div class="message">
                        <h2>' . $this->t('<strong>Drupal</strong> is powered by an<br /><strong>open source community</strong>') . '</h2>
                        <p><a href="https://www.drupal.org/contribute">' . $this->t('Get involved') . '</a></p>
                    </div>
                </div>
            </div>
        </div>
      ',
      '#attached' => [
        'library' => [
          'lcd_banner/drupal-community'
        ],
      ],
    ];
    return $build;
  }

}
