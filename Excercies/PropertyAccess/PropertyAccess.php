<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\PropertyAccess\PropertyAccess;

$accessor = PropertyAccess::createPropertyAccessor();

class Person{
    
    public $firstName;
    
    public function getFirstName(){        
        return 'Rayn';
    }
}

/** Reading form Objet with getter **/

$person = new Person();
$person->FirstName = 'Wounter';
var_dump($person);
$firstName = $accessor->getValue($person, 'firstName');
//var_dump($firstName); die;

/** Reading for Array ..**/
$person2 = ['first_name' => 'Wouter'];
$readFromArray = $accessor->getValue($person2,'[first_name]');// Wouter
$readFromArray2 = $accessor->getValue($person2,'[age]');// null

//var_dump($readFromArray2); die;
/*Multiple Dimension reading from array */

$person3 = [['first_name' => 'Wouter']];
$readFromArray3 = $accessor->getValue($person3, '[0][first_name]');

var_dump($readFromArray3); die;

/*Read from Object use dot notation*/
