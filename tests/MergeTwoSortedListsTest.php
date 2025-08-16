<?php
namespace Tests;

use DataStructures\ListNode;
use Problems\MergeTwoSortedLists;

// Helper function to build a linked list from an array
function buildList(array $items): ?ListNode
{
    if (empty($items)) {
        return null;
    }
    $head = new ListNode($items[0]);
    $current = $head;
    for ($i = 1; $i < count($items); $i++) {
        $current->next = new ListNode($items[$i]);
        $current = $current->next;
    }
    return $head;
}

// Helper function to convert a linked list back to an array
function listToArray(?ListNode $head): array
{
    $result = [];
    $current = $head;
    while ($current !== null) {
        $result[] = $current->val;
        $current = $current->next;
    }
    return $result;
}

test('Merge Two Sorted Lists case 1', function () {
    $list1 = buildList([1, 2, 4]);
    $list2 = buildList([1, 3, 4]);
    $mergedHead = MergeTwoSortedLists::mergeTwoLists($list1, $list2);
    $result = listToArray($mergedHead);
    expect($result)->toBe([1, 1, 2, 3, 4, 4]);
});

test('Merge Two Sorted Lists case 2 (both empty)', function () {
    $list1 = buildList([]);
    $list2 = buildList([]);
    $mergedHead = MergeTwoSortedLists::mergeTwoLists($list1, $list2);
    $result = listToArray($mergedHead);
    expect($result)->toBe([]);
});

test('Merge Two Sorted Lists case 3 (one empty)', function () {
    $list1 = buildList([]);
    $list2 = buildList([0]);
    $mergedHead = MergeTwoSortedLists::mergeTwoLists($list1, $list2);
    $result = listToArray($mergedHead);
    expect($result)->toBe([0]);
});