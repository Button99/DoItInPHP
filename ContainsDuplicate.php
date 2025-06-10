<?php

// 217. Contains Duplicate
// Solved
// Easy
// Topics
// premium lock icon
// Companies
// Given an integer array nums, return true if any value appears at least twice in the array, and return false if every element is distinct.

class ContainsDuplicate {
        function containsDuplicate($nums) {
            return max(array_count_values($nums)) >=2 ? true : false;
    }
}