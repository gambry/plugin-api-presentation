<?php

namespace Drupal\cheap_advisor\Plugin;

use Drupal\Component\Plugin\PluginInspectionInterface;

/**
 * Defines an interface for City widget plugins.
 */
interface CityWidgetInterface extends PluginInspectionInterface {

  /**
   * Returns the render-able widget for provided city
   *
   * @param string $city
   *   The name of the city to build the widget for.
   *
   * @return array
   *   The render-able array.
   */
  public function buildWidget($city);

}
