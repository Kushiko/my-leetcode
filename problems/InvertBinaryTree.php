<?php
namespace Problems;

use DataStructures\TreeNode;

/*
Given the root of a binary tree, invert the tree, and return its root.

Constraints:
    The number of nodes in the tree is in the range [0, 100].
    -100 <= Node.val <= 100
*/

// Your code here
class InvertBinaryTree
{
    /**
     * @param TreeNode|null $root
     * @return TreeNode|null
     */
    public static function invertTree(?TreeNode $root): TreeNode|null
    {
        if ($root === null) {
            return null;
        }
        $temp = $root->left;
        $root->left = $root->right;
        $root->right = $temp;
        self::invertTree($root->left);
        self::invertTree($root->right);
        return $root;
    }
}
