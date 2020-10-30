<?php

namespace Tests\Browser;

use App\Models\Gerente;
use App\Models\Pessoa;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;


class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = User::find(1)->first(); 
        $this->browse(function ($browser) use ($user) {
            $browser
                ->visit('/login')
                ->type('email', $user->email)
                ->type('password', 'password')
                ->pause(2000)
                ->screenshot('login')
                ->press('submit')
                ->assertPathIs('/home')
                ->pause(2000)
                ->screenshot('home');
        });
    }
}
