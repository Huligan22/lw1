<?php
$sum = 8000;

if ($sum >= 10000) {
    $discount = 0.2;
}elseif ($sum >= 5000) {
    $discount = 0.1;
} else {
    $discount = 0;
}

$finalSum = $sum - ($sum * $discount);

echo "Сумма покупки: $sum руб.";
echo "Скидка: " . ($discount * 100) . "% ";
echo "Итоговая сумма к оплате: $finalSum руб.";