<?php

// 104. Maximum Depth of Binary Tree
// Solved
// Easy
// Topics
// premium lock icon
// Companies
// Given the root of a binary tree, return its maximum depth.

// A binary tree's maximum depth is the number of nodes along the longest path from the root node down to the farthest leaf node.

 

class MaximunDepthOfBinaryTree {
    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxDepth($root) {
        if(is_null($root)) {
            return 0;
        }
        return max($this->maxDepth($root->left), $this->maxDepth($root->right)) + 1; 
    }
}