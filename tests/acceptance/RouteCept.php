<?php
$I = new WebGuy($scenario);
$I->wantTo('go to routes and see the correct things');
$I->amOnPage('/page/majk');
$I->see('My butt! majk', 'h1');

$I->amOnPage('/');
$I->see('plask');