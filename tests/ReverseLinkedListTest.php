<?php
namespace Tests;

use Problems\ReverseLinkedList;
use Tests\Utils\LinkedListHelper;

test('Reverse Linked List case 1', function () {
    $list = LinkedListHelper::buildList([1, 2, 3, 4, 5]);
    $reversed = ReverseLinkedList::reverseList($list);
    expect(LinkedListHelper::listToArray($reversed))->toBe([5, 4, 3, 2, 1]);
});


test('Reverse Linked List case 2', function () {
    $list = LinkedListHelper::buildList([1, 2]);
    $reversed = ReverseLinkedList::reverseList($list);
    expect(LinkedListHelper::listToArray($reversed))->toBe([2, 1]);
});

test('Reverse Linked List case 3', function () {
    $list = LinkedListHelper::buildList([]);
    $reversed = ReverseLinkedList::reverseList($list);
    expect(LinkedListHelper::listToArray($reversed))->toBe([]);
});
