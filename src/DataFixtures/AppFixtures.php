<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        // create 20 products! Bam!
        for ($i = 0; $i < 20; $i++) {
            $article = new Article();
            $article->setTitle('product '.$i)
                    ->setSlug("product-".$i)
                    ->setContent("Contenu du produit...")
                    ->setPicture("")
                    ->setIsPublished(true)
                    ->setPublishedAt(new \DateTime('now'))
                    ->setUpdatedAt(new \DateTime('now'))
            ;
            $manager->persist($article);
        }

        $manager->flush();
    }
}
