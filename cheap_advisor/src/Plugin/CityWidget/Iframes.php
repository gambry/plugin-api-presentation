<?php

namespace Drupal\cheap_advisor\Plugin\CityWidget;

use Drupal\cheap_advisor\Annotation\CityWidget;
use Drupal\cheap_advisor\Plugin\CityWidgetBase;

/**
 * Provides a base CityWidget plugin for iframes derivatives.
 *
 * @CityWidget(
 *   id = "iframes",
 *   label = @Translation("Iframes"),
 *   deriver = "Drupal\cheap_advisor\Plugin\Derivative\Iframes"
 * )
 */
class Iframes extends CityWidgetBase {

  /**
   * {@inheritdoc}
   */
  public function buildWidget($city) {
    return ['#markup' => '<iframe src="' . $this->pluginDefinition['iframe_url'] . '"/>'];
  }

}
