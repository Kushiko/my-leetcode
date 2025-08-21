<?php
namespace Problems;

use DataStructures\ListNode;

class LinkedListCycle
{
    /**
     * @param ListNode|null $head
     * @return bool
     */
    public static function hasCycle(?ListNode $head): bool
    {
        $slow = $head;
        $fast = $head;
        while ($fast!== null && $fast->next !== null) {
            $slow = $slow->next;
            $fast = $fast->next->next;
            if ($slow === $fast) {
                return true;
            }
        }
        return false;
    }
}
