<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $category = (new Category())
            ->setName('Animal');
        $manager->persist($category);
        $this->setReference('category:animal', $category);

        $category = (new Category())
            ->setName('Toy');
        $manager->persist($category);
        $this->setReference('category:toy', $category);

        $manager->flush();
    }
}
