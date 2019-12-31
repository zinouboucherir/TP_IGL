<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\User;


class GetMarksSeleniumTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testAfficherNotes()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Gestion Scolarité')
                    ->visit('login')
                    ->type('email', 'hd_idrissou@esi.dz')
                    ->type('password', 'dalia')
                    ->press('SE CONNECTER')
                    ->assertPathIs('/home')
                    ->assertSee('Module')
                    ->assertSee('Note CC')
                    ->assertSee('Moyenne');

        });

    }
}
