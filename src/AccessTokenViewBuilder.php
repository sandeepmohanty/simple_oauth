<?php

/**
 * @file
 * Contains \Drupal\oauth2_token\AccessTokenViewBuilder.
 */
namespace Drupal\oauth2_token;
use Drupal\Core\Entity\Display\EntityViewDisplayInterface;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityViewBuilder;

/**
 * Class AccessTokenViewBuilder.
 *
 * @package Drupal\oauth2_token
 */
class AccessTokenViewBuilder extends EntityViewBuilder {

  /**
   * {@inheritdoc}
   */
  protected function alterBuild(array &$build, EntityInterface $entity, EntityViewDisplayInterface $display, $view_mode) {
    parent::alterBuild($build, $entity, $display, $view_mode);
    if ($entity->id()) {
      $build['#contextual_links']['access_token'] = array(
        'route_parameters' =>array('access_token' => $entity->id()),
      );
    }
  }


}