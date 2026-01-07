<?php

namespace App\DataFixtures;

use App\Entity\Genre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class GenreFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $genre = new Genre();
        $genre->setTitre('Action')
            ->setCreatedAt(new \DateTimeImmutable())
            ->setUpdatedAt(new \DateTimeImmutable());
        $this->addReference('genre_0', $genre);
        $manager->persist($genre);

        $genre = new Genre();
        $genre->setTitre('Comédie')
            ->setCreatedAt(new \DateTimeImmutable())
            ->setUpdatedAt(new \DateTimeImmutable());
        $this->addReference('genre_1', $genre);
        $manager->persist($genre);

        $genre = new Genre();
        $genre->setTitre('Romantique')
            ->setCreatedAt(new \DateTimeImmutable())
            ->setUpdatedAt(new \DateTimeImmutable());
        $this->addReference('genre_2', $genre);
        $manager->persist($genre);

        $genre = new Genre();
        $genre->setTitre('Drame')
            ->setCreatedAt(new \DateTimeImmutable())
            ->setUpdatedAt(new \DateTimeImmutable());
        $this->addReference('genre_3', $genre);
        $manager->persist($genre);

        $genre = new Genre();
        $genre->setTitre('Animation')
            ->setCreatedAt(new \DateTimeImmutable())
            ->setUpdatedAt(new \DateTimeImmutable());
        $this->addReference('genre_4', $genre);
        $manager->persist($genre);

        
        $manager->flush();
    }
}