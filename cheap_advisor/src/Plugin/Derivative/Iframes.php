<?php

namespace Drupal\cheap_advisor\Plugin\Derivative;

use Drupal\Component\Plugin\Derivative\DeriverBase;

/**
 * CityWidget Iframes plugin deriver.
 *
 * @see \Drupal\cheap_advisor\Plugin\CityWidget\Iframes
 */
class Iframes extends DeriverBase {

  /**
   * {@inheritdoc}
   */
  public function getDerivativeDefinitions($base_plugin_definition) {

    // Here your logic to load dynamic derivatives/iframes URLs.
    $hardcode_urls = [
      'google' => 'https://www.google.co.uk/search?q=',
      'twitter' => 'https://twitter.com/hashtag/',
    ];

    foreach ($hardcode_urls as $name => $iframe_url) {
      // This make sure any definition from the base plugin is kept.
      $this->derivatives['iframe:' . $name] = $base_plugin_definition;

      // Let override base definitions + adding our custom needs.
      $this->derivatives['iframe:' . $name]['label'] = ucfirst($name);
      $this->derivatives['iframe:' . $name]['iframe_url'] = $iframe_url;
    }

    return $this->derivatives;
  }

}
