<?php 

class NameCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }

    public function test1(AcceptanceTester $I)
    {
        $I->amOnPage('/zayavki');
        $I->wait(5);
    }

}
