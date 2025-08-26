<?php
namespace Problems;

/*
Given an integer array nums and an integer k, return the kth largest element in the array.
Note that it is the kth largest element in the sorted order, not the kth distinct element.

Constraints:
    1 <= k <= nums.length <= 105
    -104 <= nums[i] <= 104
*/

class KthLargestElementInAnArray
{
    /**
     * @param array<int> $nums
     * @param int $k
     * @return int
     */
    public static function findKthLargest(array $nums, int $k): int
    {
        $minHeap = new \SplMinHeap();
        for ($i=0;$i<$k;$i++) {
            $minHeap->insert($nums[$i]);
        }
        foreach (array_slice($nums,$k) as $num) {
            $count = $minHeap->count();
            $minHeap->insert($num);
            if ($minHeap->count()>$count) {
                $minHeap->extract();
            }
        }
        return $minHeap->top();
    }
}
