<?php

namespace Drupal\cheap_advisor\Plugin\CityWidget;

use Drupal\cheap_advisor\Annotation\CityWidget;
use Drupal\cheap_advisor\Plugin\CityWidgetBase;

/**
 * Provides a weather forecast CityWidget plugin.
 *
 * @CityWidget(
 *   id = "weather_forecast",
 *   label = @Translation("Weather Forecast")
 * )
 */
class WeatherForecast extends CityWidgetBase {

  /**
   * {@inheritdoc}
   */
  public function buildWidget($city) {
    return [
      '#theme' => 'city_widget_weather_forecast',
      '#forecast' => \Drupal::service('cheap_advisor.weather_forecast')->getFromCity($city),
    ];
  }
}
