<?php
namespace Tests;
use Problems\TwoSum;

test('Two Sum case 1', function () {
    $nums = [2, 7, 11, 15];
    $target = 9;

    $result = TwoSum::twoSum($nums, $target);

    expect($result)->toBe([0, 1]);
});

test('Two Sum case 2', function () {
    $nums = [3, 2, 4];
    $target = 6;

    $result = TwoSum::twoSum($nums, $target);

    expect($result)->toBe([1, 2]);
});

test('Two Sum case 3', function () {
    $nums = [3, 3];
    $target = 6;

    $result = TwoSum::twoSum($nums, $target);

    expect($result)->toBe([0, 1]);
});
