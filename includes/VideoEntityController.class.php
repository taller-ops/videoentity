<?php

class VideoEntityController extends EntityAPIController {

  public function buildContent($entity, $view_mode = 'full', $langcode = NULL, $content = array()) {

    $build = parent::buildContent($entity, $view_mode, $langcode, $content);

    $build['embedcode'] = array(
      '#type' => 'markup',
      '#markup' => '<iframe width="560" height="315" src="//www.youtube.com/embed/' . $entity->embedcode . '" frameborder="0" allowfullscreen></iframe>',
    );

    $build['duration'] = array(
      '#prefix' => '<p>',
      '#type' => 'markup',
      '#markup' => format_interval($entity->duration),
      '#suffix' => '</p>'
    );

    return $build;
  }
}
