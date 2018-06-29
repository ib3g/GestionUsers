<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('verifie si la page login affiche les informations et se connecté');
$I->amOnPage('/login');
$I->see('Gestion utilisateurs');
$I->see('username');
$I->see('password');
$I->see('remember me');
$I->see('Connexion');
$I->see('Inscription');
$I->fillField('username', 'ib3g');
$I->fillFiled('password', '12345');
$I->click('_submit');
$I->amOnPage('/user');

