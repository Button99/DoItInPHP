<?php
//ou are given two non-empty linked lists representing two non-negative integers. The digits are stored in reverse order, and each of their nodes contains a single digit. Add the two numbers and return the sum as a linked list.
//You may assume the two numbers do not contain any leading zero, except the number 0 itself.
//Example 1:
//Input: l1 = [2,4,3], l2 = [5,6,4]
//Output: [7,0,8]
//Explanation: 342 + 465 = 807.
//Example 2:
//Input: l1 = [0], l2 = [0]
//Output: [0]
//Example 3:
//Input: l1 = [9,9,9,9,9,9,9], l2 = [9,9,9,9]
//Output: [8,9,9,9,0,0,0,1]
class AddTwoNumbers
{
    function addTwoNumbers($l1, $l2) {
        if(!$l1 && !$l2)
            return null;
        elseif($l1 && $l2 == null)
            return $l1;
        elseif($l1 == null && $l2)
            return $l2;

        $sum = $l1->val + $l2->val;
        $next = $this->addTwoNumbers($l1->next, $l2->next);

        if($sum >= 10) {
            $sum%=10;
            $next = $this->addTwoNumbers($next, new ListNode(1));
        }
        return new ListNode($sum, $next);
    }
}