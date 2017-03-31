<?php

namespace backend\tests\functional;

use \backend\tests\FunctionalTester;
use common\fixtures\User as UserFixture;

/**
 * Class LoginCest
 */
class LoginCest
{
    public function _before(FunctionalTester $I)
    {
       
    }
    /**
     * @param FunctionalTester $I
     */
    public function loginUser(FunctionalTester $I)
    {
        /*$I->amOnPage('/backend/web/index.php');
        $I->seeincurrentUrl('/web/index.php');
        $I->click('Student Login');
        $I->see('HLQLQLQ');
      //  $I->click('Student Login');
        $I->fillField('id','3');
        $I->fillField('PASSWORD','222');
        $I->click('body > div.wrap > div > form > input[type="submit"]:nth-child(6)');
        $I->see('Name: essam');*/


        /*
        $I->fillField('LoginForm[username]', 'erau');
        $I->fillField('Password', 'password_0');
        $I->click('login-button');

        $I->see('Logout (erau)', 'form button[type=submit]');
        $I->dontSeeLink('Login');
        $I->dontSeeLink('Signup');
        */
    }
}
