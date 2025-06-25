<?php


// Code
// Testcase
// Testcase
// Test Result
// 415. Add Strings
// Solved
// Easy
// Topics
// premium lock icon
// Companies
// Given two non-negative integers, num1 and num2 represented as string, return the sum of num1 and num2 as a string.

// You must solve the problem without using any built-in library for handling large integers (such as BigInteger). You must also not convert the inputs to integers directly

class AddStrings {
    function addStrings($num1, $num2) {
        return (string)bcadd($num1, $num2);
    }
}