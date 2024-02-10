<?php
echo (int) 15.2 + (int) 14.7 + (10.5 + 10.5); // 50
echo '<br>';
echo gettype((int) (15.2 + 14.7 + (10.5 + 10.5))); // Integer
echo '<br>';
echo '<br>';

echo 100;
echo '<br>';

// Method One
echo gettype(100);
echo '<br>';
// Method Two
var_dump(100);
echo '<br>';
// Method Three => Optional
echo is_int(100);
echo '<br>';
echo '<br>';

echo "???";

// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"
echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"$\$PHP\"";
echo '<br>';
echo '<br>';

echo "We \n Love \n Elzero \n Web \n School";
echo '<br>';
echo nl2br("We
Love
Elzero
Web
School");
// Needed Output
// We
// Love
// Elzero
// Web
// School
echo '<br>';
echo '<br>';

// Needed Output
// Hello "'Elzero'"
// We Love $Programming$
// Languages Specially "PHP"
//header('Content-type: text/plain');
// view page source
echo <<<'nowdoc'
Hello '"Elzero"'
We Love $Programming$
Languages Specially "PHP"
nowdoc;

$something = "Programming";

echo <<<"code"
Hello \PHP\
We Love $something
code;

// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

// Needed Output
// Hello \PHP\ We Love Programming
echo '<br>';
echo '<br>';

echo (bool) "Hello PHP";
echo '<br>';
echo gettype((int) "Hello PHP");

// Needed Output
// 1
// integer
echo '<br>';
echo '<br>';

echo '<pre>';
print_r(
    [
        'FrontEnd' => [
            '0' => 'HTML',
            '1' => 'CSS',
            'JS' => [
                'Vuejs' => [
                    '2' => 'v2',
                    '3' => 'v3',
                ],
                '0' => 'Reactjs',
                '1' => 'svelte',
            ],
        ],
        'BackEnd' => [
            '0' => 'PHP',
            '1' => 'MySQL',
            '2' => 'Security',
        ],
        '0' => 'Git',
        '1' => 'GitHub',
        'Testing' => [
            '0' => 'Unit Testing',
            '1' => 'End To End',
            '2' => 'Intergration',
        ],
    ]
);
echo '</pre>';
