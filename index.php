<?php

$list = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16);

function makeCouple(array $list): array {
    $couple = [];
    while (count($list) > 0) {
        $limit = count($list) - 1;
        $rand = rand(0, $limit);
        $rand2 = rand(0, $limit);
        while ($rand === $rand2) {
            $rand2 = rand(0, $limit);
        }
        $couple[] = $list[$rand] . ' - ' . $list[$rand2];
        unset($list[$rand]);
        unset($list[$rand2]);
        $list = array_values($list);
    }
    return $couple;
}

print_r(makeCouple($list));
print_r(makeCouple($list));