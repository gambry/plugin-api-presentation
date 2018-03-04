<?php

namespace Drupal\cheap_advisor\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\cheap_advisor\Plugin\CityWidgetManager;

/**
 * Class CityPageController.
 */
class CityPageController extends ControllerBase {

  /**
   * Drupal\cheap_advisor\Plugin\CityWidgetManager definition.
   *
   * @var \Drupal\cheap_advisor\Plugin\CityWidgetManager
   */
  protected $pluginManagerCityWidget;

  /**
   * Constructs a new CityPageController object.
   */
  public function __construct(CityWidgetManager $plugin_manager_city_widget) {
    $this->pluginManagerCityWidget = $plugin_manager_city_widget;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.city_widget')
    );
  }

  /**
   * Return page title.
   *
   * @param string $city
   *   The city, as passed by the request.
   *
   * @return string
   *   The page title.
   */
  public function pageTitle($city) {
    return $city;
  }

  /**
   * Build the City page content.
   *
   * @param string $city
   *   The city, as passed by the request.
   *
   * @return array
   *   Return city page content render-able array.
   */
  public function pageContent($city) {
    $output = [];
    /** @var \Drupal\cheap_advisor\Plugin\CityWidgetInterface $widget */
    foreach ($this->pluginManagerCityWidget->getDefinitions() as $widget) {
      $output[$widget->getPluginId()] = $widget->buildWidget($city);
    }
    return $output;
  }

}
