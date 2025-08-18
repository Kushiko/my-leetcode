<?php
namespace Tests;
use Problems\InvertBinaryTree;
use Tests\Utils\BinaryTreeHelper;


test('Invert Binary Tree case 1', function () {
    $root = BinaryTreeHelper::buildTree([4, 2, 7, 1, 3, 6, 9]);
    $answer = BinaryTreeHelper::buildTree([4, 7, 2, 9, 6, 3, 1]);
    $result = InvertBinaryTree::invertTree($root);
    expect(BinaryTreeHelper::areTreesEqual($answer,$result))->toBe(true);
});

test('Invert Binary Tree case 2', function () {
    $root = BinaryTreeHelper::buildTree([2, 1, 3]);
    $answer = BinaryTreeHelper::buildTree([2, 3, 1]);
    $result = InvertBinaryTree::invertTree($root);
    expect(BinaryTreeHelper::areTreesEqual($answer,$result))->toBe(true);
});

test('Invert Binary Tree case 3', function () {
    $root = BinaryTreeHelper::buildTree([]);
    $result = InvertBinaryTree::invertTree($root);
    expect($result)->toBeNull();
});
