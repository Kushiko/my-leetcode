<?php
namespace Problems;

/*
Given an integer array nums of unique elements, return all possible (the power set).
The solution set must not contain duplicate subsets. Return the solution in any order.

Constraints:
    1 <= nums.length <= 10
    -10 <= nums[i] <= 10
    All the numbers of nums are unique.
*/

// Your code here
class Subsets {
    /**
     * @param array<int> $nums
     * @return array<array<int>>
     */
    public static function subsets(array $nums): array {
        $result = [];
        $currentSubset = [];
        self::findSubsetRecursive($nums, 0, $currentSubset, $result);
        return $result;
    }
    /**
     * @param array<int> $nums
     * @param array<int> $currentSubset
     * @param array<array<int>> $result
     * @return void
     */
    private static function findSubsetRecursive(array $nums, int $index, array $currentSubset, array &$result):void {
        $result[] = $currentSubset;
        for ($i = $index; $i < count($nums); $i++) {
            $currentSubset[] = $nums[$i];
            self::findSubsetRecursive($nums, $i+1, $currentSubset, $result);
            array_pop($currentSubset);
        }
    }
}
