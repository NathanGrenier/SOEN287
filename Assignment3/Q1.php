<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment 4 - Q1</title>
</head>
<body>
    <?php
    // Part A)
    echo "<h2>Function: findSummation</h2>";
    function findSummation($n) {
        if (!is_int($n) || $n < 0) {
            return false;
        }
        if ($n === 1) {
            return 1;
        }
        return $n + findSummation($n - 1);
    }
    echo findSummation(100);

    // Part B)
    echo "<h2>Function: uppercaseFirstandLast</h2>";
    function uppercaseFirstandLast($s) {
        $s = ucwords(strtolower($s));
        $words = explode(" ", $s);
        foreach ($words as &$word) {
            $word = substr($word, 0, strlen($word) - 1) . strtoupper($word[-1]);
        }
        return implode(" ", $words);
    }
    echo uppercaseFirstandLast("THIS is A Mixed STRiNG");
    
    // Part C)
    echo "<h2>Function: findAverage_and_Median</h2>";
    function findAverage_and_Median($nums) {
       $mean = 0;
       $median = 0;
        foreach ($nums as $num) {
            $mean += $num;
       } 
       $mean /= count($nums);
       if (count($nums) % 2 == 0) {
        $lowMid = floor(count($nums) / 2);
        $median = ($nums[$lowMid] + $nums[$lowMid + 1]) / 2;
       } else {
        $median = $nums[floor(count($nums) / 2)];
       }

       return array("mean"=>$mean, "median"=>$median);
    }
    print_r(findAverage_and_Median(array(1,2,3,4,5)));

    // Part D)
    echo "<h2>Function: find4Digits</h2>";
    function find4Digits($s) {
        $nums = explode(" ", $s);
        foreach ($nums as $num) {
            if (strlen($num) == 4) {
                return $num;
            }
        }
        return false;
    }
    echo is_string(find4Digits("1 2 3 4 5 6 7777 8 9 10")) ? find4Digits("1 2 3 4 5 6 7777 8 9 10") : "No 4 digit number found";
    ?>
</body>
</html>