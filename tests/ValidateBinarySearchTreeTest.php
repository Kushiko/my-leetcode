<?php
namespace Tests;

use Problems\ValidateBinarySearchTree;
use Tests\Utils\BinaryTreeHelper;

test('Validate Binary Search Tree case 1', function () {
    $root = BinaryTreeHelper::buildTree([2, 1, 3]);
    $answer = ValidateBinarySearchTree::isValidBST($root);
    expect($answer)->toBeTrue();
});

test('Validate Binary Search Tree case 2', function () {
    $root = BinaryTreeHelper::buildTree([5,1,4,null,null,3,6]);
    $answer = ValidateBinarySearchTree::isValidBST($root);
    expect($answer)->toBeFalse();
});
