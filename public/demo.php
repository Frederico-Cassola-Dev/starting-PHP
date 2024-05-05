<?php

function writeSecretSentence (string $animal, string $element): string {
  return "$animal s'incline face à l'$element";
}

echo writeSecretSentence('chat', 'air');