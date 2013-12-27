<?php
$I = new WebGuy($scenario);
$I->wantTo('go to routes and see the correct things');

$I->amOnPage('/');
$I->see('My butt!');

$I->amOnPage('/om-oss');
$I->see('Om oss', 'h1');
$I->see('Lorem ipsum dolor sit amet');

$I->amOnPage('/kunder/fotografiska');
$I->see('Fotografiska', 'h1');