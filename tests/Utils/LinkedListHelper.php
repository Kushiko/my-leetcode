<?php
namespace Tests\Utils;

use DataStructures\ListNode;

class LinkedListHelper {
    /**
     * Builds a linked list from an array of values.
     *
     * @param array<int> $items The values to insert into the list.
     * @return ListNode|null The head of the newly created list, or null if the input array is empty.
     */
    public static function buildList(array $items): ?ListNode
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

    /**
     * Converts a linked list to an array.
     *
     * @param ListNode|null $head The head of the list.
     * @return array<int> The array of values from the list.
     */
    public static function listToArray(?ListNode $head): array
    {
        $result = [];
        $current = $head;
        while ($current !== null) {
            $result[] = $current->val;
            $current = $current->next;
        }
        return $result;
    }
}
