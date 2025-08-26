<?php

use Problems\KthLargestElementInAnArray;

test('Kth Largest Element in an Array case 1', function () {
    $nums1 = [3, 2, 1, 5, 6, 4];
    $k1 = 2;
    expect(KthLargestElementInAnArray::findKthLargest($nums1, $k1))->toBe(5);
});
test('Kth Largest Element in an Array case 2', function () {
    $nums1 = [3, 2, 3, 1, 2, 4, 5, 5, 6];
    $k1 = 4;
    expect(KthLargestElementInAnArray::findKthLargest($nums1, $k1))->toBe(4);
});
