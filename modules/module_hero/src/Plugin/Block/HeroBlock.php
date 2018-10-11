<?php

namespace Drupal\module_hero\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a block called "Example hero block".
 * 
 * @Block(
 *  id = "module_hero_hero",
 *  admin_label = @Translation("Example hero block")
 * )
 */
class HeroBlock extends BlockBase {

  /**
   * {@inheritDoc}
   *
   * @return void
   */
  function build() {
    $heroes = [
      ['hero_name' => 'Ant-Man', 'real_name' => 'James Bond'],
      ['hero_name' => 'Aquaman', 'real_name' => 'James Bond'],
      ['hero_name' => 'Asterix', 'real_name' => 'James Bond'],
      ['hero_name' => 'The Atom', 'real_name' => 'James Bond'],
      ['hero_name' => 'The Avengers', 'real_name' => 'James Bond'],
      ['hero_name' => 'Batgirl', 'real_name' => 'James Bond'],
      ['hero_name' => 'Batman', 'real_name' => 'James Bond'],
      ['hero_name' => 'Batwoman', 'real_name' => 'James Bond'],
      ['hero_name' => 'Black Canary', 'real_name' => 'James Bond'],
      ['hero_name' => 'Black Panther', 'real_name' => 'James Bond'],
      ['hero_name' => 'Captain America', 'real_name' => 'James Bond'],
      ['hero_name' => 'Catwoman', 'real_name' => 'James Bond'],
      ['hero_name' => 'Conan the Barbarian', 'real_name' => 'James Bond'],
      ['hero_name' => 'Daredevil', 'real_name' => 'James Bond'],
      ['hero_name' => 'The Defenders', 'real_name' => 'James Bond'],
      ['hero_name' => 'Doc Savage', 'real_name' => 'James Bond'],
      ['hero_name' => 'Doctor Strange', 'real_name' => 'James Bond'],
      ['hero_name' => 'Elektra', 'real_name' => 'James Bond'],
      ['hero_name' => 'Fantastic Four', 'real_name' => 'James Bond']
    ];

    $table  = [
      '#type' => 'table',
      '#header' => [
        $this->t('Hero name'),
        $this->t('Real name'),
      ]
    ];

    foreach($heroes as $hero) {
      $table[] = [
        'hero_name' => [
          '#type' => 'markup',
          '#markup' => $hero['hero_name']
        ],
        'real_name' => [
          '#type' => 'markup',
          '#markup' => $hero['real_name']
        ]
      ];
    }

    return $table;
  }
}