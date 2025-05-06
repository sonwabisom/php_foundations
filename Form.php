<?php
$name = "";
$subject = "";
$score = "";
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $score = $_POST["score"];
    
   
    if (empty($name) || empty($subject) || empty($score)) {
        $error = "All fields are required";
    } 
    elseif (!is_numeric($score) || $score < 0 || $score > 100) {
        $error = "Score must be between 0 and 100";
    }
    else {
        $success = "Form submitted successfully!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Student Form</title>
    <style>
        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>
    <h2>Student Assessment Form</h2>
    
    <?php if (!empty($error)) { ?>
        <p class="error"><?php echo $error; ?></p>
    <?php } ?>
    
    <?php if (!empty($success)) { ?>
        <p class="success"><?php echo $success; ?></p>
        <p>Name: <?php echo $name; ?></p>
        <p>Subject: <?php echo $subject; ?></p>
        <p>Score: <?php echo $score; ?></p>
    <?php } ?>
    
    <form method="post" action="">
        <p>
            <label>Student Name:</label><br>
            <input type="text" name="name" value="<?php echo $name; ?>">
        </p>
        
        <p>
            <label>Subject:</label><br>
            <select name="subject">
                <option value="" <?php if($subject == "") echo "selected"; ?>>--Select Subject--</option>
                <option value="Math" <?php if($subject == "Math") echo "selected"; ?>>Math</option>
                <option value="Science" <?php if($subject == "Science") echo "selected"; ?>>Science</option>
                <option value="English" <?php if($subject == "English") echo "selected"; ?>>English</option>
            </select>
        </p>
        
        <p>
            <label>Score (0-100):</label><br>
            <input type="number" name="score" value="<?php echo $score; ?>">
        </p>
        
        <p>
            <input type="submit" value="Submit">
        </p>
    </form>
</body>
</html>