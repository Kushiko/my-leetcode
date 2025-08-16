<?php

namespace DataStructures;

/**
 * Definition for a singly-linked list.
 */
class ListNode {
    public int $val = 0;
    public ?ListNode $next = null;
    public function __construct(int $val = 0, ?ListNode $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}
