<?php
namespace Tests;
use Problems\ValidParentheses;


test("Valid Parentheses case 1", function () {
    $result = ValidParentheses::isValid("()");
    expect($result)->toBeTrue();
});

test("Valid Parentheses case 2", function () {
    $result = ValidParentheses::isValid("()[]{}");
    expect($result)->toBeTrue();
});

test("Valid Parentheses case 3", function () {
    $result = ValidParentheses::isValid("(]");
    expect($result)->toBeFalse();
});

test("Valid Parentheses case 4", function () {
    $result = ValidParentheses::isValid("([])");
    expect($result)->toBeTrue();
});

test("Valid Parentheses case 5", function () {
    $result = ValidParentheses::isValid("([)]");
    expect($result)->toBeFalse();
});
