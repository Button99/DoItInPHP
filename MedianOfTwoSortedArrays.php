<?php

/*
 * Given two sorted arrays nums1 and nums2 of size m and n respectively, return the median of the two sorted arrays.
 * The overall run time complexity should be O(log (m+n)).
*/

class MedianOfTwoSortedArrays
{
    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2)
    {
        $results = array_merge($nums1, $nums2);
        sort($results);
        $size = count($results);
        $mid = $size / 2;
        if ($size % 2 != 0) {
            return $results[$mid];
        }
        return (float) (($results[$mid] + $results[$mid - 1]) / 2);
    }
}

