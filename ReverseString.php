<?php

// Write a function that reverses a string. The input string is given as an array of characters s.

// You must do this by modifying the input array in-place with O(1) extra memory.




class ReverseString {
    function reverseString(&$s) {
        $s = array_reverse($s);
    }
}