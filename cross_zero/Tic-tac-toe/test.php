<?php

include "autoload.php";
include "unitTest.php";

$tictac = new Tictac(3);
$tictac
    ->putCross(1, 1)
    ->getMap();

test(
    $tictac->init(2)->getMap(),
    [
        ["", ""],
        ["", ""]
    ]
);

test(
    $tictac->init(3)->getMap(),
    [
        ["", "", ""],
        ["", "", ""],
        ["", "", ""]
    ]
);

test(
    $tictac->init(1)->getMap(),
    [
        [""]
    ]
);

test(
    $tictac->init(3)->putCross(1, 2)->getMap(),
    [
        ["", "", ""],
        ["", "", "x"],
        ["", "", ""]
    ]
);

test(
    $tictac->init(3)->putCross(2, 2)->getMap(),
    [
        ["", "", ""],
        ["", "", ""],
        ["", "", "x"]
    ]
);

test(
    $tictac->init(3)->putZero(2, 1)->getMap(),
    [
        ["", "", ""],
        ["", "", ""],
        ["", "0", ""]
    ]
);
test(
    $tictac
        ->init(3)
        ->putCross(2, 1)
        ->putZero(1, 1)
        ->putCross(2, 2)
        ->putZero(0, 2)
        ->putCross(2, 0)
        ->getMap(),
    [
        ["", "", "0"],
        ["", "0", ""],
        ["x", "x", "x"]
    ]
);
test(
    $tictac
        ->init(3)
        ->putCross(2, 1)
        ->putZero(1, 1)
        ->putCross(2, 2)
        ->putZero(0, 2)
        ->putCross(2, 0)
        ->checkWinner(),
    true
);
test(
    $tictac
        ->init(3)
        ->checkWinner(),
    false
);
test(
    $tictac
        ->init(3)
        ->putCross(1, 1)
        ->putZero(2, 1)
        ->putCross(0, 2)
        ->putZero(2, 2)
        ->putCross(1, 2)
        ->putZero(2, 0)
        ->checkWinner(),
    true
);
test(
    $tictac->setMap([
        ["O", "", ""],
        ["O", "", ""],
        ["O", "", ""]
    ])->checkWinner(),
    true
);
