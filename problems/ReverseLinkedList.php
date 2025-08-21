<?php
namespace Problems;

use DataStructures\ListNode;

/*
Given the head of a singly linked list, reverse the list, and return the reversed list.

Constraints:
    The number of nodes in the list is the range [0, 5000].
    -5000 <= Node.val <= 5000
*/

// Your code here
class ReverseLinkedList {
    /**
     * @param ListNode|null $head
     * @return ListNode
     */
    public static function reverseList(?ListNode $head): ?ListNode {
        if ($head === null) {
            return null;
        }
        if ($head->next === null) {// one item in the list
            return $head;
        } else {
            $reversed_list_head = self::reverseList($head->next);
            $head->next->next = $head;
            $head->next = null;
            return $reversed_list_head;
        }
    }
}
