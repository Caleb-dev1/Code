
<?php
class Student {
    public $naam;
    public $schoenmaat;

    public function __construct($naam, $schoenmaat = 43) {
        $this->naam = $naam;
        $this->schoenmaat = $schoenmaat;
    }
}


class Klas {
    public $klasNaam;
    public $studenten = [];

    public function __construct($klasNaam) {
        $this->klasNaam = $klasNaam;
    }

 public function voegStudentToe(Student $student) {
        $this->studenten[] = $student;
    }


      public function setStudenten(array $studenten) {
        $this->studenten = $studenten;
    }
}


$klas = new Klas('BO4SD1C');

$namen = [
    'Disayo', 'Rayan', 'Hayan', 'Dino', 'Ilyas', 'Nordin', 'Rooney', 'Yassine',
    'Abdel', 'Sydney', 'Emirhan', 'Maryem', 'Bertan', 'Kaan', 'Roham',
    'Deshawn', 'Dylan', 'Dirk-Jan', 'Arda', 'Ocean'
];


for ($i = 0; $i < count($namen); $i++) {
    $student = new Student($namen[$i]);
    $klas->voegStudentToe($student);
}


echo '<h1>Klas: ' . $klas->klasNaam . '</h1>';
echo '<ul>';
foreach ($klas->studenten as $student) {
    echo '<li>' . $student->naam . ' (schoenmaat: ' . $student->schoenmaat . ')</li>';
}
echo '</ul>';