<?php

namespace Drupal\cheap_advisor\Plugin\CityWidget;

use Drupal\cheap_advisor\Annotation\CityWidget;
use Drupal\cheap_advisor\Plugin\CityWidgetBase;

/**
 * Provides a weather forecast CityWidget plugin.
 *
 * @CityWidget(
 *   id = "restaurants",
 *   label = @Translation("Restaurants")
 * )
 */
class Restaurants extends CityWidgetBase {

  /**
   * {@inheritdoc}
   */
  public function buildWidget($city) {
    return [
      '#theme' => 'city_widget_restaurants',
      '#restaurants' => \Drupal::service('cheap_advisor.restaurants')->getFromCity($city),
    ];
  }
}
