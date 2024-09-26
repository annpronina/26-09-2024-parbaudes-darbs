<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Piesakies webināram!</h1>

    <form action="" method="get">
    
    <label for="firstName">Enter your name: </label>
    <input type="text" name="name" id="name"/> </br>
    <br>
    <label for="lastName">Enter your last name: </label>
    <input type="text" name="lastName" id="lastName"/> </br>
    <br>
    <label for="level-select">Choose Your Level:</label>
    <select name="levels" id="level-select">
        <option value="">--Please choose an option</option>
        <option value="beginner">Beginner</option>
        <option value="intermediate">Intermediate</option>
        <option value="advanced">Advanced</option>
    </select>
    <br>
    <br>
    <label for="answer-select">Vai vēlies saņemt info par citiem mūsu
        organizētajiem pasākumiem?
    </label>
    <br>
    <input type="radio" id="yes" name="answer" value="yes">
    <label for="radio">Yes</label>
    <input type="radio" id="no" name="answer" value="no">
    <label for="radio">No</label>
    
    <input type="submit" value="Submit">
    
    </form>
    <a href="blog.php">Blog</a>
    <br>

    <h1>Jau reģistrējušies!</h1>
    <?php
    foreach($_REQUEST as $key => $value);
    echo "";

    $users = [
        1 => ["Vārds:" => "Jānis Bērziņš", "E-pasts:" => "janis@berzins.com", "Līmenis:" => "Intermediate"],
        2 => ["Vārds:" => "Anna Proņina", "E-pasts:" => "anna@pronina.com", "Līmenis:" => "Beginner"],
        3 => ["Vārds:" => "Olga Ozoliņa", "E-pasts:" => "olga@ozolina.com", "Līmenis:" => "Advanced"]

    ];
    echo "<ul>";
    foreach($users as $key => $value){
    echo "<li>";
        echo "{$value["Vārds:"]}, {$value["E-pasts:"]}, {$value["Līmenis:"]}";
    };
    echo "</li>";
    echo "</ul>";
    ?>
    <a href="app.js"></a>
</body>
</html>