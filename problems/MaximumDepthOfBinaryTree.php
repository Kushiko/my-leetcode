<?php
namespace Problems;

use DataStructures\TreeNode;

/*
Given the root of a binary tree, return its maximum depth.
A binary tree's maximum depth is the number of nodes along the longest path from the root node down to the farthest leaf node.

Constraints:
    The number of nodes in the tree is in the range [0, 104].
    -100 <= Node.val <= 100
*/

// Your code here
class MaximumDepthOfBinaryTree
{
    /**
     * @param TreeNode|null $root
     * @return int
     */
    public static function maxDepth(?TreeNode $root): int
    {
        if ($root === null) {
            return 0;
        }
        $left = self::maxDepth($root->left);
        $right = self::maxDepth($root->right);
        return max($left, $right) + 1;
    }
}
