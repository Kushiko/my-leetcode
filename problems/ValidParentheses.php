<?php
namespace Problems;
/*
Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.
An input string is valid if:
    Open brackets must be closed by the same type of brackets.
    Open brackets must be closed in the correct order.
    Every close bracket has a corresponding open bracket of the same type.

Constraints:
    1 <= s.length <= 104
    s consists of parentheses only '()[]{}'.
*/

// Your code here
class ValidParentheses{

    /**
     * @param string $s
     * @return bool
     */
    public static function isValid($s):bool{
        $stack = [];
        $map = [
            ')' => '(',
            ']' => '[',
            '}' => '{',
        ];
        foreach (str_split($s) as $symbol) {
            if (str_contains('([{', $symbol)) {
                array_push($stack, $symbol);
            } else {
                if (count($stack) === 0) {
                    return false;
                }
                if (end($stack) === $map[$symbol]) {
                    array_pop($stack);
                } else {
                    return false;
                }
            }
        }
        return count($stack) === 0;
    }
}
