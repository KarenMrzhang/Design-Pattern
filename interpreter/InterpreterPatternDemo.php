<?php
require_once "./Expression.php";
/**
 * Author: Karen
 * Date: 2019/10/17 0017
 */
//规则：Robert 和 John 是男性
function getMaleExpression(){
    $robert = new TerminalExpression("Robert");
    $john = new TerminalExpression("John");
    return new OrExpression($robert, $john);
}

function getMarriedWomanExpression(){
    $julie = new TerminalExpression("Julie");
    $married = new TerminalExpression("Married");
    return new AndExpression($julie, $married);
}

$isMale = getMaleExpression();
$isMarriedWoman = getMarriedWomanExpression();

echo "John is male? " . ($isMale->interpret("John") ? "true" : "false") . "\n";
echo "Julie is a married women? "  . ($isMarriedWoman->interpret("Married Julie") ? "true" : "false");