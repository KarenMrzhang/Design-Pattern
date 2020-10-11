<?php
/**
 * Author: Karen
 * Date: 2019/10/10 0010
 */

interface Criteria
{
    public function meetCriteria($persons);
}

class CriteriaMale implements Criteria
{
    public function meetCriteria($persons)
    {
        // TODO: Implement meetCriteria() method.
        $malePersons = array();
        foreach ($persons as $person) {
            if (strcmp(strtoupper($person->getGender()), 'MALE') == 0) {
                $malePersons[] = $person;
            }
        }
        return $malePersons;
    }
}

class CriteriaFeMale implements Criteria
{
    public function meetCriteria($persons)
    {
        // TODO: Implement meetCriteria() method.
        $femalePersons = array();
        foreach ($persons as $person) {
            if (strcmp(strtoupper($person->getGender()), 'FEMALE') == 0) {
                $femalePersons[] = $person;
            }
        }
        return $femalePersons;
    }
}

class CriteriaSingle implements Criteria
{
    public function meetCriteria($persons)
    {
        // TODO: Implement meetCriteria() method.
        $singlePersons = array();
        foreach ($persons as $person) {
            if (strcmp(strtoupper($person->getMaritalStatus()), 'SINGLE') == 0) {
                $singlePersons[] = $person;
            }
        }
        return $singlePersons;
    }
}

class CriteriaAnd implements Criteria
{
    private $criteria;
    private $otherCriteria;

    public function __construct($criteria, $otherCriteria)
    {
        $this->criteria = $criteria;
        $this->otherCriteria = $otherCriteria;
    }

    public function meetCriteria($persons)
    {
        // TODO: Implement meetCriteria() method.
        $firstCriteriaPersons = $this->criteria->meetCriteria($persons);
        return $this->otherCriteria->meetCriteria($firstCriteriaPersons);
    }
}

class CriteriaOr implements Criteria
{
    private $criteria;
    private $otherCriteria;

    public function __construct($criteria, $otherCriteria)
    {
        $this->criteria = $criteria;
        $this->otherCriteria = $otherCriteria;
    }

    public function meetCriteria($persons)
    {
        // TODO: Implement meetCriteria() method.
        $firstCriteriaPersons = $this->criteria->meetCriteria($persons);
        $otherCriteriaItems  = $this->otherCriteria->meetCriteria($persons);
        foreach ($otherCriteriaItems as $otherCriteriaItem) {
            if (!in_array($otherCriteriaItem, $firstCriteriaPersons)) {
                $firstCriteriaPersons[] = $otherCriteriaItem;
            }
        }
        return $firstCriteriaPersons;
    }
}
