<?php
namespace Tests;

use Problems\MaximumDepthOfBinaryTree;
use Tests\Utils\BinaryTreeHelper;


test('Maximum Depth of Binary Tree case 1', function () {
    $root = BinaryTreeHelper::buildTree([3, 9, 20, null, null, 15, 7]);
    $result = MaximumDepthOfBinaryTree::maxDepth($root);
    expect($result)->toBe(3);
});

test('Maximum Depth of Binary Tree case 2', function () {
    $root = BinaryTreeHelper::buildTree([1, null, 2]);
    $result = MaximumDepthOfBinaryTree::maxDepth($root);
    expect($result)->toBe(2);
});
