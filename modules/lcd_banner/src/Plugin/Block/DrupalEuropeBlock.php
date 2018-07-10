<?php

namespace Drupal\lcd_banner\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DrupalEurope' block.
 *
 * @Block(
 *   id = "lcd_banner_drupaleurope",
 *   admin_label = @Translation("DrupalEurope"),
 *   category = @Translation("Banner")
 * )
 */
class DrupalEuropeBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['content'] = [
      '#markup' => '
        <div id="drupaleurope">
            <div class="darkener">
                <div class="content">
                    <div>
                        <img class="logo" src="' . drupal_get_path('module', 'lcd_banner') . '/images/drupaleurope/logo.svg" alt="' . $this->t('Drupal Europe, Darmstadt, Germany, 10-14 September 2018') . '" />
                    </div>
                    <div class="message">
                        <h2>' . $this->t('The biggest European Drupal event<br />reimagined by the community') . '</h2>
                        <p><a href="https://drupaleurope.org/tickets">' . $this->t('Get your ticket now!') . '</a></p>
                    </div>
                </div>
            </div>
        </div>
      ',
      '#attached' => [
        'library' => [
          'lcd_banner/drupaleurope'
        ],
      ],
    ];
    return $build;
  }

}
