<?php

$sum: int = 8000;

if ($sum >= 10000) {
    $discount: int = 0.2;
}elseif ($sum >= 5000) {
    $discount: int = 0.1;
} else {
    $discount: int = 0;
}

$finalSum: int = $sum - ($sum * $discount);

echo "Сумма покупки: $sum руб.";
echo "Скидка: " . ($discount * 100) . "% ";
echo "Итоговая сумма к оплате: $finalSum руб.";