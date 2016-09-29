<?php


class AuthCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $user = \App\User::find(1);

        $I->amLoggedAs($user);

        $I->sendPOST('/user', []);
        $I->sendPOST('/user', []);

        $I->see('Success');
    }
}
