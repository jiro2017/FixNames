# FixNames
A PHP based function that fixes user inputted names
## Requirements
This library requires PHP version 5.0 and above

## Install
It is recommended that you install this library using PHP composer. If you don't have composer installed on your machine you can do so by visiting https://www.getcomposer.org/download and follow the instuctions there.

If composer is already installed in your machine, you can install this package by opening the command line terminal and typing the following

```sh
composer require jiro2017/Fixnames
```

## How to use
After installing the package on your directory. include composer autoload on your PHP project by doing the following

```sh
require_once "vendor/autoload.php";
```
Next include the FixNames package by writing the following code on the next line after the require_once code.

```sh
use function FixNames\fix_names;
```
You can make use of the fix_names function by calling the following lines of code

```sh
$firstname = " John";
$middlename = "doe ";
$surname = "MIKE";

echo "Unfixed names: $surname $firstname $middlename<br>"; // Unfixed Names: John doe  Mike

fix_names($surname, $firstname, $middlename);

echo "Fixed names: $surname $firstname $middlename"; // Fixed Names John Doe Mike
```