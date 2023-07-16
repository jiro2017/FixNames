<?php
namespace FixNames;
/**
 * fix_names fixes the name strings input by the user of your application by removing white spaces and setting each name to initial caps.
 * All paramenters are passed by reference.
 * All names are by default set to the null string.
 * This means that all names are not required.
 * Surname, First name and Middle name can appear in any order when the function is called
 * @param string $n1 is the first name.
 * @param string $n2 is the second name.
 * @param string $n3 is the third name.
 * @return void
 */
function fix_names(string &$n1 = '', string &$n2 = '', string &$n3 = '') : void {
    $n1 = ucfirst(strtolower(trim($n1)));
    $n2 = ucfirst(strtolower(trim($n2)));
    $n3 = ucfirst(strtolower(trim($n3)));
}