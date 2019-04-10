<?php
// Array with names
$a[] = "Introduction to Algorithms";
$a[] = "Advanced Accountancy";
$a[] = "Bad Science";
$a[] = "Programming with Java";
$a[] = "The Business School";
$a[] = "UGC NET/SET";
$a[] = "Civil Engineering";
$a[] = "Objective Computer Science";
$a[] = "Encyclopedia of General Science";
$a[] = "101 Science Experiments";
$a[] = "NCERT Science";
$a[] = "The Art of War";
$a[] = "MCQ Biotechnology";
$a[] = "Be Obsessed or Be Average";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>