<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Note;
use Faker\Generator;
use App\Entity\Theme;
use Doctrine\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{

    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager): void
    {
        // Utilisation de faker pour générer des données en base
        // pour les loader un simple symfony console d:f:l
        $themes = [];
        for($i=1; $i<=5; $i++){
            $theme = new Theme();
            $theme->setNom($this->faker->word());
            $theme->setDescription($this->faker->sentence());
            $themes[]= $theme;
            $manager->persist($theme);
        }

        for ($i = 1; $i <= 54; $i++) {
            $note = new Note();
            $note->setSujet($this->faker->sentence(3));
            $note->setContenu($this->faker->paragraph());
            $note->setTheme($themes[mt_rand(0, count($themes) - 1)]);
            $manager->persist($note);
        }

        


        $manager->flush();
    }
}
