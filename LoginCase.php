#!/usr/bin/env php
<?php
/*
 * This is a test of page https://netpeak.ua/
 */

$I->amOnPage('/');
$I->click('Work at Netpeak');
$I->click('I want to work at Netpeak');
$I->see('New Page');
$I->submitForm('form#new_page', ['title' => 'Personal data']);
$I->click('Send resume');
$I->see('page created'); // Check that the message on the current page - "All fields are required" - is highlighted in red.
$I->click('Internship');
$I-> seeInPage ('course page');