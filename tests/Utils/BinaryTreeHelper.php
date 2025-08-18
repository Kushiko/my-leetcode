<?php
namespace Tests\Utils;

use DataStructures\TreeNode;

class BinaryTreeHelper {
    /**
     * @param array<int|null> $values
     */
    public static function buildTree(array $values): ?TreeNode
    {
        if (empty($values)) {
            return null;
        }

        $nodes = [];
        foreach ($values as $key => $val) {
            if ($val !== null) {
                $nodes[$key] = new TreeNode($val);
            }
        }

        $root = $nodes[0] ?? null;
        if ($root === null) {
            return null;
        }

        $queue = new \SplQueue();
        $queue->enqueue($root);
        $i = 1;

        while (!$queue->isEmpty() && $i < count($values)) {
            $current = $queue->dequeue();

            if ($i < count($values) && isset($nodes[$i])) {
                $current->left = $nodes[$i];
                $queue->enqueue($current->left);
            }
            $i++;

            if ($i < count($values) && isset($nodes[$i])) {
                $current->right = $nodes[$i];
                $queue->enqueue($current->right);
            }
            $i++;
        }

        return $root;
    }

    /**
     * @param TreeNode|null $node1
     * @param TreeNode|null $node2
     */
    public static function areTreesEqual(?TreeNode $node1, ?TreeNode $node2): bool
    {
        if ($node1 === null && $node2 === null) {
            return true;
        }
        if ($node1 === null || $node2 === null) {
            return false;
        }

        if ($node1->val !== $node2->val) {
            return false;
        }
        return self::areTreesEqual($node1->left, $node2->left) && self::areTreesEqual($node1->right, $node2->right);
    }
}
