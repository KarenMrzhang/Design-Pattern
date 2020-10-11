<?php
require_once "./Person.php";
require_once "./Criteria.php";

function printPersons($persons)
{
    foreach ($persons as $person) {
        echo "Person : [ Name : " . $person->getName()
            . ", Gender : " . $person->getGender()
            .", Marital Status : " . $person->getMaritalStatus()
            ." ]\n";
    }
}

$persons = array();

$persons[] = new Person("Robert", "Male", "Single");
$persons[] = new Person("John", "Male", "Married");
$persons[] = new Person("Laura", "Female", "Married");
$persons[] = new Person("Diana", "Female", "Single");
$persons[] = new Person("Mike", "Male", "Single");
$persons[] = new Person("Bobby", "Male", "Single");

$male = new CriteriaMale();
$female = new CriteriaFeMale();
$single = new CriteriaSingle();
$singlemale = new CriteriaAnd($single, $male);
$singleorfemale = new CriteriaOr($single, $female);

echo "Males:\n";
printPersons($male->meetCriteria($persons));

echo "\nFemales:\n";
printPersons($female->meetCriteria($persons));

echo "\nSingle Males:\n";
printPersons($singlemale->meetCriteria($persons));

echo "\nSingle Or Females:\n";
printPersons($singleorfemale->meetCriteria($persons));
