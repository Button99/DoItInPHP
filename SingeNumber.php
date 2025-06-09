<?php


// 136. Single Number
// Given a non-empty array of integers nums, every element appears twice except for one. Find that single one.
// You must implement a solution with a linear runtime complexity and use only constant extra space

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $counter = array_count_values($nums);
        foreach ($counter as $num => $count) {
            if ($count === 1) {
                return $num;
            }
        }
        return null;
    }
}
