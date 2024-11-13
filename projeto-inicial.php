<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Julio Monteiro',
    new \DateTimeImmutable('2005-10-13')
);

echo $student->age();
