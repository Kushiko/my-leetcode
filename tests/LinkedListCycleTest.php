<?php
namespace Tests;

use DataStructures\ListNode;
use Problems\LinkedListCycle;
use Tests\Utils\LinkedListHelper;

test('Linked List Cycle case 1', function () {
    $node1 = new ListNode(3);
    $node2 = new ListNode(2);
    $node3 = new ListNode(0);
    $node4 = new ListNode(-4);
    $node1->next = $node2;
    $node2->next = $node3;
    $node3->next = $node4;
    $node4->next = $node2;

    expect(LinkedListCycle::hasCycle($node1))->toBe(true);
});

test('Linked List Cycle case 2', function () {
    $node1 = new ListNode(1);
    $node2 = new ListNode(2);
    $node1->next = $node2;
    $node2->next = $node1;

    expect(LinkedListCycle::hasCycle($node1))->toBe(true);
});

test('Linked List Cycle case 3', function () {
    $list = LinkedListHelper::buildList([1]);
    expect(LinkedListCycle::hasCycle($list))->toBe(false);
});
