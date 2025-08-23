<?php
namespace Problems;

use DataStructures\TreeNode;
/*
Given the root of a binary tree, determine if it is a valid binary search tree (BST).

A valid BST is defined as follows:
    The left subtree of a node contains only nodes with keys strictly less than the node's key.
    The right subtree of a node contains only nodes with keys strictly greater than the node's key.
    Both the left and right subtrees must also be binary search trees.

Constraints:
    The number of nodes in the tree is in the range [1, 104].
    -231 <= Node.val <= 231 - 1
*/

// Your code here
class ValidateBinarySearchTree {
    /**
         * @param TreeNode $root
         * @return bool
    */
    public static function isValidBST(TreeNode $root): bool {
        return self::validate($root, -INF, INF);
    }

    /**
         * @param ?TreeNode $root
         * @param int|float $min
         * @param int|float $max
         * @return bool
    */
    private static function validate(?TreeNode $root, int|float $min, int|float $max): bool {
        if ($root === null) {
            return true;
        }
        $root_val = $root->val;
        if($root_val >= $max || $root_val<=$min) {
            return false;
        }
        return self::validate($root->left, $min, $root_val) && self::validate($root->right, $root_val, $max);
    }
}
