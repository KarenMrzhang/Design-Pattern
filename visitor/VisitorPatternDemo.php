<?php
require_once "./ComputerPart.php";
require_once "./ComputerPartVisitor.php";
$computer = new Computer();
$computer->handleVisitor(new ComputerPartDisplayVisitor());
