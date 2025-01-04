<?php
    $fruit = ["apple", "banana", "cherry", "date", "elderberry"];
    foreach($fruit as $key => $value) {
        echo "$key: $value<br>";
    }
    echo "<br>";
    for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) continue; // skip 3
    if ($i == 5) break;    // stop at 5
    echo "$i <br>";
    }
    echo "<br>";
    function add($a, $b) {
        return $a + $b;
    }
    echo add(5, 10) . "<br>";
    echo add(20, 30) . "<br>";
    echo "<br>";
    $vegetable = ["carrot", "broccoli", "spinach", "potato", "tomato"];
    array_push($vegetable, "cucumber", "zucchini");
    print_r($vegetable);
    echo "<br>";
    //Arrays
    $colors=["red", "green", "blue", "yellow", "purple"];
    echo "The first color is: " . $colors[0] . "<br>";
    foreach($colors as $color) {
        echo $color . "<br>";
    }
    echo "<br>";
    //Associate Arrays
    $students=[
        "John" => 25,
        "Jane" => 22,
        "Tom" => 23,
        "Alice" => 24
    ];
    echo "John's age is: " . $students["John"] . "<br>";
    foreach($students as $name => $age) {
        echo "$name is $age years old.<br>";
    }
    echo "<br>";
    //Multidimensional Arrays
    $matrix=[
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    echo "The value at row 1, column 2 is: " . $matrix[1][2] . "<br>";
    foreach($matrix as $row) {
        foreach($row as $value) {
            echo $value . " ";
        }
        echo "<br>";
    }
    echo "<br>";


?>
   