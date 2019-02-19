<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testLoginPage()
    {
        // créer un client
        $client = static::createClient();
        // se rendre à l'URL `/student/`
        $crawler = $client->request('GET', '/connexion');
        // vérifier que le serveur répond un code HTTP 200
        $this->assertSame(200, $client->getResponse()->getStatusCode());
        // vérifier que le texte `Email` se trouve dans la balise `body`
        $this->assertContains('Email', $crawler->filter('body')->text());
        // vérifier que le texte `Password` se trouve dans la balise `body`
        $this->assertContains('Password', $crawler->filter('body')->text());
    }
}
