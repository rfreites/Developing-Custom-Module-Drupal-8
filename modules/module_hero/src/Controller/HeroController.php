<?php
namespace Drupal\module_hero\Controller;
use Drupal\Core\Controller\ControllerBase;

/**
 * HeroController class
 */
class HeroController extends ControllerBase{
  public function heroList() {

    $heroes = [
      ['name' => 'Ant-Man'],
      ['name' => 'Aquaman'],
      ['name' => 'Asterix'],
      ['name' => 'The Atom'],
      ['name' => 'The Avengers'],
      ['name' => 'Batgirl'],
      ['name' => 'Batman'],
      ['name' => 'Batwoman'],
      ['name' => 'Black Canary'],
      ['name' => 'Black Panther'],
      ['name' => 'Captain America'],
      ['name' => 'Catwoman'],
      ['name' => 'Conan the Barbarian'],
      ['name' => 'Daredevil'],
      ['name' => 'The Defenders'],
      ['name' => 'Doc Savage'],
      ['name' => 'Doctor Strange'],
      ['name' => 'Elektra'],
      ['name' => 'Fantastic Four']
    ];

    return [
      '#theme' => 'hero_list',
      '#items' => $heroes,
      '#title' => $this->t('Our wonderful heroes list')
    ];
  }
}