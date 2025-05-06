<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 20px;
            padding: 10px;
        }
        
        h {
            color:rgb(80, 44, 74);
        }
        
        
        p {
            font-size: 16px;
            line-height: 1.6;
        }
        
        .section {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Student Details and Status</h1>
    <?php
   
    $name = "Lerato";               
    $age = 20;                     
    $grade = 75.5;                 
    $graduationYear = null;      


    if ($name !== "Lerato") {
        echo "<p>Name not found. Returning null.</p>";
        $name = null; 
    } else {
     
        $schoolSubjects = ["Math", "English", "Science", "History"];
        $leratoSubjects = ["Math", "Science"]; 

        if ($age < 13) {
            echo "<p>$name is a child.</p>";
        } elseif ($age < 20) {
            echo "<p>$name is a teenager.</p>";
        } else {
            echo "<p>$name is an adult student.</p>";
        }

        switch (true) {
            case ($grade >= 75):
                echo "<p>Excellent performance!</p>";
                break;
            case ($grade >= 50):
                echo "<p>Passed the course.</p>";
                break;
            default:
                echo "<p>Needs improvement.</p>";
        }

        echo "<h2>Assignments submitted:</h2>";
        for ($i = 1; $i <= 3; $i++) {
            echo "<p>Assignment $i submitted ✅</p>";
        }

        echo "<h2>Practice test attempts:</h2>";
        $attempt = 1;
        do {
            echo "<p>Attempt $attempt: Keep practicing! 🔄</p>";
            $attempt++;
        } while ($attempt <= 2);

        echo "<h2>Checking subject enrollment:</h2>";
        foreach ($schoolSubjects as $subject) {
            if (in_array($subject, $leratoSubjects)) {
                echo "<p>$name is enrolled in: $subject ✅</p>";
            } else {
                echo "<p>$name is NOT enrolled in: $subject ❌</p>";
            }
        }
    }
    ?>

</body>
</html>
