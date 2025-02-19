<?php

/* 83. Remove Duplicates from Sorted List
* Given the head of a sorted linked list, delete all duplicates such that each element appears only once. Return the linked list sorted as well.
*/

class RemoveDuplicatesFormSortedList
{
    function deleteDuplicates($head)
    {
        // If ListNode is null then return null
        if ($head == NULL) {
            return NULL;
        }
        // If it doesn't have next then return null
        if ($head->next == NULL) {
            return $head;
        }
        $pos = $head;
        while ($pos->next) {
            // Remove and keep one
            if ($pos->val == $pos->next->val) {
                $pos->next = $pos->next->next;
            } else {
                $pos = $pos->next;
            }
        }
        return $head;
    }
}
