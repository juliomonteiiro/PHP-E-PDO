<?php 

use Alura\Pdo\Domain\Model\Student;
require_once 'vendor/autoload.php';

$pdo = \Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();

$student = new Student(null,'Julio Monteiro', new \DateTimeImmutable('2005-10-13'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name', $student->name());
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));
echo $sqlInsert; exit();

var_dump($pdo->exec($sqlInsert));