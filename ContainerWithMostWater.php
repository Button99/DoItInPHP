<?php

// 11. Container With Most Water
// Medium
// Topics
// premium lock icon
// Companies
// Hint
// You are given an integer array height of length n. There are n vertical lines drawn such that the two endpoints of the ith line are (i, 0) and (i, height[i]).

// Find two lines that together with the x-axis form a container, such that the container contains the most water.

// Return the maximum amount of water a container can store.

// Notice that you may not slant the container.

class ContainerWithMostWater {
    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $l = 0;
        $r = count($height) -1;
        $area =0;
        while($l < $r) {
            if($height[$l] < $height[$r]) {
                $tmp = $height[$l] * ($r - $l);
                $area = $tmp > $area ? $tmp : $area;
                $l++;
            } else {
                $tmp = $height[$r] * ($r - $l);
                $area = $tmp > $area ? $tmp : $area;
                $r--; 
            }
        }
        return $area;
    }
}
