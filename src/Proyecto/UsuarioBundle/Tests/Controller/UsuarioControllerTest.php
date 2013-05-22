<?php

namespace Proyecto\UsuarioBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UsuarioControllerTest extends WebTestCase
{
    
    public function testCompleteScenario()
    {
        // Create a new client to browse the application
        $client = static::createClient();

        // Create a new entry in the database
        $crawler = $client->request('GET', '/usuarios/');
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());
        $crawler = $client->click($crawler->selectLink('Create a new entry')->link());

        // Fill in the form and submit it
        $form = $crawler->selectButton('Create')->form();
                
            $form['proyecto_usuariobundle_usuariotype[use_name]']='Prueba2';
            $form['proyecto_usuariobundle_usuariotype[use_dependencia]']='Depedencia2';
            $form['proyecto_usuariobundle_usuariotype[use_phone]']='3124538950';
            $form['proyecto_usuariobundle_usuariotype[use_email]']='Prueba2@gmail.com';
            $form['proyecto_usuariobundle_usuariotype[use_login]']='Prueba2';
            $form['proyecto_usuariobundle_usuariotype[use_password]']='1234567';
            $form['proyecto_usuariobundle_usuariotype[use_original]']='Original2';
            $form['proyecto_usuariobundle_usuariotype[use_rename]']='rename2';
            $form['proyecto_usuariobundle_usuariotype[use_status]']='1';
            $form['proyecto_usuariobundle_usuariotype[use_type]']='Dependencia';
            
            

        $client->submit($form);
        $crawler = $client->followRedirect();
       
        // Check data in the show view
        $this->assertTrue($crawler->filter('td:contains("Prueba2")')->count() > 0);
         /*
        // Edit the entity
        $crawler = $client->click($crawler->selectLink('Edit')->link());

        $form = $crawler->selectButton('Edit')->form(array(
            'proyecto_usuariobundle_usuariotype[field_name]'  => 'Foo',
            // ... other fields to fill
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check the element contains an attribute with value equals "Foo"
        $this->assertTrue($crawler->filter('[value="Foo"]')->count() > 0);

        // Delete the entity
        $client->submit($crawler->selectButton('Delete')->form());
        $crawler = $client->followRedirect();

        // Check the entity has been delete on the list
        $this->assertNotRegExp('/Foo/', $client->getResponse()->getContent());
         * 
         */
    }

    
}