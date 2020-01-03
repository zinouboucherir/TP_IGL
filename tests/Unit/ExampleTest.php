<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;
use App\Etudiant;
use Illuminate\support\Facades\Auth;


class ExampleTest extends TestCase
{
    /** @test */
    public function AjouterEtudiantTest()
    {

        $use = new User([
            'name' => 'admin',
            'email' => 'admin@esi.dz',
            'password' => 'password'
            ]);

            $this->actingAs($use);
             $respons = $this->json('POST', '/ajouter', [
            'nom'=>'Amirat',
            'prenom'=>'rima',
            'email'=>'amirat@esi.dz',
            'adress'=>'tiziouzou',
            'password'=>'rima',
            'matricule'=>'170011',
            'groupe'=> '6',
            'promo'=>'1CS'
            ]);
            $this->assertDatabaseHas('users',['email'=>"amirat@esi.dz"]);
            $respons->assertStatus(302);
           
    }


    public function AfficherNotesTest()
    {
        $etud = new Etudiant([
            'nom'=>'idrissou',
            'prenom'=>'dalia',
            'email'=>'hd_idrissou@esi.dz',
            'adress'=>'bejaia',
            'password'=>'dalia',
            'matricule'=>'171717',
            'groupe'=> '6',
            'promo'=>'1CS'
            ]);

            $this->actingAs($etud); 
            $response = $this->call('GET', '/get_marks');    
            $response 
            ->assertStatus(200)
            ->assertSeeTexte('idrissou');
    }                   

    


}
