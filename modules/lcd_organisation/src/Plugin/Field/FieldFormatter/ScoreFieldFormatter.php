<?php

namespace Drupal\lcd_organisation\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'Organisation numeric score' formatter.
 *
 * @FieldFormatter(
 *   id = "org_numeric_score",
 *   label = @Translation("Organisation numeric score"),
 *   field_types = {
 *     "entity_reference"
 *   }
 * )
 */
class ScoreFieldFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = [];
    $summary[] = $this->t('Display organisation quality score as number');
    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    return ($items) ? [0 => ['#markup' => count($items)]] : [];
  }

}
