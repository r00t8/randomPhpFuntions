// Write a function:
// function solution($A);
// that, given an array A of N integers, returns the smallest positive integer (greater than 0) that does not occur in A.
// For example, given A = [1, 3, 6, 4, 1, 2], the function should return 5.
// Given A = [1, 2, 3], the function should return 4.
// Given A = [−1, −3], the function should return 1.
// Write an efficient algorithm for the following assumptions:
// N is an integer within the range [1..100,000];
// each element of array A is an integer within the range [−1,000,000..1,000,000].

function solution($A) {
    // write your code in PHP7.0
    for($i=1; in_array($i, $A); $i++);
    return $i;
}

//[1,8,6,2,1]
//[-1,-5,-3]
//[9,58,3,4,1,2]
