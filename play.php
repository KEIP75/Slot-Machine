<?php

header('Content-Type: application/json');

// Notre proba d'apparition 
$symbols_with_weights = [
    '🍋' => 40,
    '🍒' => 30,
    '⭐' => 15,
    '🔔' => 10,
    '💎' => 5,
];

// Notre gain
$paytable = [
    '🍋🍋🍋' => 40,
    '🍒🍒🍒' => 50,
    '⭐⭐⭐' => 100,
    '🔔🔔🔔' => 150,
    '💎💎💎' => 200,
];

// Notre fonction symbole aléatoire
function getRandomSymbol($symbols_with_weights) {
    $rand = mt_rand(1, array_sum($symbols_with_weights));
    foreach ($symbols_with_weights as $symbol => $weight) {
        if ($rand <= $weight) {
            return $symbol;
        }
        $rand -= $weight;
    }
    return null;
}

// Notre Généreration de nos 3 symboles
$reel1 = getRandomSymbol($symbols_with_weights);
$reel2 = getRandomSymbol($symbols_with_weights);
$reel3 = getRandomSymbol($symbols_with_weights);

// Notre Résultat
$combination = $reel1 . $reel2 . $reel3;

// Notre Calcule de gain
$gain = isset($paytable[$combination]) ? $paytable[$combination] : 0;

echo json_encode([
    'success' => true,
    'reels' => [$reel1, $reel2, $reel3],
    'gain' => $gain,
]);

?>
