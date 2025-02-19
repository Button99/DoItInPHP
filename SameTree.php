<?php


/* 100. Same Tree
* Given the roots of two binary trees p and q, write a function to check if they are the same or not.
* Two binary trees are considered the same if they are structurally identical, and the nodes have the same value.
*/

class SameTree
{
    function isSameTree($p, $q): Boolean
    {

        // If both trees are null then return true
        if ($p == NULL && $q == NULL) {
            return true;
        }
        // If one of them is then return false
        if ($p == NULL || $q == NULL) {
            return false;
        }
        // If a value is different that another then return false
        if ($p->val != $q->val) {
            return false;
        }
        // Redo the same for left and right
        return $this->isSameTree($p->left, $q->left) && $this->isSameTree($p->right, $q->right);
    }
}
