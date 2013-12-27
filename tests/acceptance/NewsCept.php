<?php
$I = new WebGuy($scenario);
$I->wantTo('Kolla att nyheter fungerar');
$I->amOnPage('/nyheter/fotografiska');
$I->see('Nyhet: Fotografiska');