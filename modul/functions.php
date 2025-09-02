<?php
//function declaration
function name($firstName, $lastName = 'defaultvalue') {
    return "$firstName $lastName";
}

//function call
echo name('Mike', 'Taylor') . "\n";

//function call with named parameters (PHP 8)
echo name(firstName: 'Mike', lastName: 'Taylor') . "\n"; // order can change

//function variables params
function name_var(...$params) {
    return $params[0] . " " . $params[1];
}
echo name_var('John', 'Doe') . "\n";

// Closure function
$closure = function () {
     return "Hello from closure!";
};
echo $closure() . "\n";

// Arrow functions
$arrow = fn() => "Hello from arrow function!";
echo $arrow() . "\n";

// Typed parameter and typed return
function display(string $first, string $last) : string {
    return "$first $last";
}
echo display('Alice', 'Smith') . "\n";

// Typed or null
function display_nullable(?string $name) {
    return $name ?? "No name provided";
}
echo display_nullable(null) . "\n";
echo display_nullable("Bob") . "\n";

// Union type (or)
function display_union(string|int $data) {
    return "Data: $data";
}
echo display_union("Hello") . "\n";
echo display_union(123) . "\n";

// Intersection type (and) - PHP 8.1+
function count_and_iterate(Iterator&Countable $value) {
    foreach ($value as $item) {
        echo $item . "\n";
    }
    echo "Total: " . count($value) . "\n";
}

// Return any type (mixed)
function logInfo(string $info) : mixed {
    return ["info" => $info, "time" => date("H:i:s")];
}
print_r(logInfo("Test info"));

// No return (void)
function logInfo_void(string $info) : void {
    echo "Logging: $info\n";
}
logInfo_void("This is a log");

?>
