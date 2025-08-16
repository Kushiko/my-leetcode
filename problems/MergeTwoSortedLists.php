<?php
namespace Problems;

use DataStructures\ListNode;

/*
You are given the heads of two sorted linked lists list1 and list2.
Merge the two lists into one sorted list. The list should be made by splicing together the nodes of the first two lists.
Return the head of the merged linked list.

Constraints:
    The number of nodes in both lists is in the range [0, 50].
    -100 <= Node.val <= 100
    Both list1 and list2 are sorted in non-decreasing order.
*/

// Your code here
class MergeTwoSortedLists {
    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    public static function mergeTwoLists(?ListNode $list1, ?ListNode $list2): ?ListNode {
        $dummy = $current = new ListNode();
        while ($list1 !== null and $list2 !== null) {
            if ($list1->val < $list2->val) {
                $current->next = $list1;
                $list1 = $list1->next;
            } else {
                $current->next = $list2;
                $list2 = $list2->next;
            }
            $current = $current->next;
        }
        $list1 !== null ? $current->next = $list1 : $current->next = $list2;
        return $dummy->next;
    }
}
