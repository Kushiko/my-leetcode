<?php
namespace Problems;
/*
Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
You may assume that each input would have exactly one solution, and you may not use the same element twice.
You can return the answer in any order.

Constraints:
    2 <= nums.length <= 104
    -109 <= nums[i] <= 109
    -109 <= target <= 109
    Only one valid answer exists.
*/

// Your code here

class TwoSum {

    /**
     * @param int[] $nums
     * @param int $target
     * @return int[]
     */
    public static function twoSum(array $nums, int $target): array
{
    $map = [];

    for ($i = 0; $i<count($nums); $i++) {
        $num = $nums[$i];
        $search = $target - $num;
        if (array_key_exists($search, $map)) {
            return [$map[$search],$i];
        }
        $map[$num] = $i;
    }
    return [];
}
}
