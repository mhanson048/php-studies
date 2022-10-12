<?php

namespace Studies\ClosureTest;

$closure = function ($name) {
  return sprintf('Closure to format string: %s', $name);
};

$numbersPlusOne = array_map(function ($number) {
  return $number + 1;
}, [1, 2, 3]);

function encloseBand($band) {
  return function ($rating) use ($band) {
    return sprintf('%s: %s', $band, $rating);
  };
}

