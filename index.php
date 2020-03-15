<?php
require __DIR__ . '/vendor/autoload.php';
use App\Controller\Solution;

$data = [
    ['country' => 'India', 'population' => 1.3 ],
    ['country' => 'China', 'population' => 1.5 ],
    ['country' => 'USA', 'population' => 0.35 ],
    ['country' => 'UK', 'population' => 0.05 ],
    ['country' => 'Brazil', 'population' => 0.4 ],
];

$solution = new Solution();

echo "<pre>","=====================Solution 1 ========================\n";
$solution->getFirstSolution($data);
echo "=====================Solution 2 ========================\n";
$solution->getSecoundSolution($data);
echo "=====================Solution 3 ========================\n";
$solution->getThirdSolution($data);
echo "=====================Solution 4 ========================\n";
$solution->getFourthSolution();
echo "=====================Solution 5 ========================\n";
$solution->getFifthSolution();
echo "=====================Solution 6 ========================\n";
$solution->getSixthSolution();
echo "=====================Solution 7 ========================\n";
$solution->getSeventhSolution();
