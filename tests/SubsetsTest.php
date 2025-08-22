<?php
namespace Tests;

use Problems\Subsets;

/**
 * Sorts subsets for consistent comparison.
 * @param array $subsets
 */
function sortSubsets(array &$subsets): void
{
    // Sort elements within each subset to ensure consistent ordering
    foreach ($subsets as &$subset) {
        sort($subset);
    }
    // Sort the array of subsets to ensure consistent ordering
    usort($subsets, function ($a, $b) {
        return $a <=> $b;
    });
}

test('Subsets case 1', function () {
    $list = Subsets::subsets([1, 2, 3]);
    $answer = [[], [1], [2], [1, 2], [3], [1, 3], [2, 3], [1, 2, 3]];

    sortSubsets($list);
    sortSubsets($answer);

    expect($list)->toBe($answer);
});

test('Subsets case 2', function () {
    $list = Subsets::subsets([0]);
    $answer = [[], [0]];

    sortSubsets($list);
    sortSubsets($answer);

    expect($list)->toBe($answer);
});