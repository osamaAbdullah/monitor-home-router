<?php

namespace Tests\Browser;

use Facebook\WebDriver\WebDriverBy;
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
        $this->browse(function (Browser $browser) {
            $b = $browser->visit('http://192.168.1.1/')
                ->type('username', 'user')
                ->type('password', 'b<}J\KUaGdKd&zVe=$D6<2P>D')
                ->press('Login')
                ->assertPathIs('/web/user/gch/main.gch');
            $b->script("document.getElementById('mainFrame').contentWindow.document.getElementById('menu1').firstChild.children[1].click()");
            $b->pause(5000);
            $b->script("document.getElementById('mainFrame').contentWindow.document.getElementById('menu2').firstChild.children[2].click()");
            $b->pause(5000);
            $b->script("document.getElementById('mainFrame').contentWindow.document.getElementById('Frm_ServerEnable').click()");
            $b->pause(7000);
        });

    }
}
