<?php
namespace Tests;

use Problems\MergeTwoSortedLists;
use Tests\Utils\LinkedListHelper;

test('Merge Two Sorted Lists case 1', function () {
    $list1 = LinkedListHelper::buildList([1, 2, 4]);
    $list2 = LinkedListHelper::buildList([1, 3, 4]);
    $mergedHead = MergeTwoSortedLists::mergeTwoLists($list1, $list2);
    $result = LinkedListHelper::listToArray($mergedHead);
    expect($result)->toBe([1, 1, 2, 3, 4, 4]);
});

test('Merge Two Sorted Lists case 2', function () {
    $list1 = LinkedListHelper::buildList([]);
    $list2 = LinkedListHelper::buildList([]);
    $mergedHead = MergeTwoSortedLists::mergeTwoLists($list1, $list2);
    $result = LinkedListHelper::listToArray($mergedHead);
    expect($result)->toBe([]);
});

test('Merge Two Sorted Lists case 3', function () {
    $list1 = LinkedListHelper::buildList([]);
    $list2 = LinkedListHelper::buildList([0]);
    $mergedHead = MergeTwoSortedLists::mergeTwoLists($list1, $list2);
    $result = LinkedListHelper::listToArray($mergedHead);
    expect($result)->toBe([0]);
});
