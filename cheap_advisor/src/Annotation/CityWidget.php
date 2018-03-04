<?php

namespace Drupal\cheap_advisor\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a City widget item annotation object.
 *
 * @see \Drupal\cheap_advisor\Plugin\CityWidgetManager
 * @see plugin_api
 *
 * @Annotation
 */
class CityWidget extends Plugin {


  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The label of the plugin.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $label;

}
