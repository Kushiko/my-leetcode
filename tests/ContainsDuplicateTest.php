<?php
namespace Tests;
use Problems\ContainsDuplicate;

test('Contains Duplicate case 1', function () {
    $nums = [1, 2, 3, 1];
    $result = ContainsDuplicate::containsDuplicate($nums);
    expect($result)->toBeTrue();
});

test('Contains Duplicate case 2', function () {
    $nums = [1, 2, 3, 4];
    $result = ContainsDuplicate::containsDuplicate($nums);
    expect($result)->toBeFalse();
});

test('Contains Duplicate case 3', function () {
    $nums = [1, 1, 1, 3, 3, 4, 3, 2, 4, 2];
    $result = ContainsDuplicate::containsDuplicate($nums);
    expect($result)->toBeTrue();
});
