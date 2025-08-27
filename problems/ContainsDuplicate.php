<?php
namespace Problems;

/*
Given an integer array nums, return true if any value appears at least twice in the array, and return false if every element is distinct.

Constraints:
    1 <= nums.length <= 105
    -109 <= nums[i] <= 109
*/

// Your code here
class ContainsDuplicate {
    /**
     * @param int[] $nums
     * @return bool
     */
    public static function containsDuplicate(array $nums): bool
    {
        $map = [];
        foreach ($nums as $num) {
            if (isset($map[$num])) {
                return true;
            }
            $map[$num] =true;
        }
        return false;
    }
}
