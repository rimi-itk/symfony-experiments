<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Color;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ColorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $color = (new Color())
            ->setName('Red');
        $manager->persist($color);
        $this->setReference('color:red', $color);

        $color = (new Color())
            ->setName('Green');
        $manager->persist($color);
        $this->setReference('color:green', $color);

        $color = (new Color())
            ->setName('Blue');
        $manager->persist($color);
        $this->setReference('color:blue', $color);

        $manager->flush();
    }
}
