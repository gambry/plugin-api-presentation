<?php

namespace Drupal\cheap_advisor\Plugin;

use Drupal\Core\Plugin\DefaultPluginManager;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;

/**
 * Provides the City widget plugin manager.
 */
class CityWidgetManager extends DefaultPluginManager {


  /**
   * Constructs a new CityWidgetManager object.
   *
   * @param \Traversable $namespaces
   *   An object that implements \Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \Drupal\Core\Cache\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler to invoke the alter hook with.
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct('Plugin/CityWidget', $namespaces, $module_handler, 'Drupal\cheap_advisor\Plugin\CityWidgetInterface', 'Drupal\cheap_advisor\Annotation\CityWidget');

    $this->alterInfo('cheap_advisor_city_widget_info');
    $this->setCacheBackend($cache_backend, 'cheap_advisor_city_widget_plugins');
  }

}
