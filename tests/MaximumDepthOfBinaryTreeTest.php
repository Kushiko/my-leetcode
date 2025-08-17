<?php
namespace Tests;
use DataStructures\TreeNode;
use Problems\MaximumDepthOfBinaryTree;

function buildTree(array $values): ?TreeNode
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

test('Maximum Depth of Binary Tree case 1', function () {
    $root = buildTree([3, 9, 20, null, null, 15, 7]);
    $result = MaximumDepthOfBinaryTree::maxDepth($root);
    expect($result)->toBe(3);
});

test('Maximum Depth of Binary Tree case 2', function () {
    $root = buildTree([1, null, 2]);
    $result = MaximumDepthOfBinaryTree::maxDepth($root);
    expect($result)->toBe(2);
});
