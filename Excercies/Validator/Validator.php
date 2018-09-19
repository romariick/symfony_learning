<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\Validator\ValidatorBuilder;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints\IsNull;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Blank;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\IsFalse;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;

$expectedNull = null;
$validator = Validation::createValidator();
/** isNull exactly null **/
$violations = $validator->validate($expectedNull, [new IsNull()]);
var_dump(count($violations)).PHP_EOL;

/*Not equals to blank array, null, and string*/
$violations = $validator->validate('Romaric', new NotBlank());

var_dump($violations).PHP_EOL;

$violations = $validator->validate('', new Blank());

var_dump($violations).PHP_EOL;

/*1, true, "1" */
$violations = $validator->validate(1, new IsTrue());

var_dump($violations).PHP_EOL;

$violations = $validator->validate(false, new isFalse());

var_dump($violations).PHP_EOL;

$violations = $validator->validate("1212", new Type('int', ['message'=>'']));

var_dump($violations);

$violations = $validator->validate('romarick@gmail.com', new Email());

var_dump($violations);

$violations = $validator->validate('abc', new Length(3));

var_dump($violations); die;


