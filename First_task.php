<?php

$name = "Lerato";               
$age = 20;                     
$grade = 75.5;                 
$isStudent = true;             
$graduationYear = null;        

if ($name !== "Lerato") {
    echo "who is that be for real.<br>";
    $name = null; 
} else {
 
    $schoolSubjects = ["Math", "English", "Science", "History"];
    $leratoSubjects = ["Math", "Science"]; 

  
    if ($age < 13) {
        echo "$name is a child.<br>";
    } elseif ($age < 20) {
        echo "$name is a teenager.<br>";
    } else {
        echo "$name is an adult student.<br>";
    }

    switch (true) {
        case ($grade >= 75):
            echo "Excellent performance!<br>";
            break;
        case ($grade >= 50):
            echo "Passed the course.<br>";
            break;
        default:
            echo "Needs improvement.<br>";
    }

    echo "<br>Assignments submitted:<br>";
    for ($i = 1; $i <= 3; $i++) {
        echo "Assignment $i submitted ✅<br>";
    }

    echo "<br>Practice test attempts:<br>";
    $attempt = 1;
    do {
        echo "Attempt $attempt: Keep practicing! 🔄<br>";
        $attempt++;
    } while ($attempt <= 2);

    echo "<br>Checking subject enrollment:<br>";
    foreach ($schoolSubjects as $subject) {
        if (in_array($subject, $leratoSubjects)) {
            echo "$name is enrolled in: $subject ✅<br>";
        } else {
            echo "$name is NOT enrolled in: $subject ❌<br>";
        }
    }
}

?>
