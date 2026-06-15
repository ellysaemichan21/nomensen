<?php
require 'vendor/autoload.php';
$ref = new ReflectionClass('Filament\Resources\Resource');
foreach($ref->getMethods() as $m) {
    if ($m->getName() == 'form' || $m->getName() == 'table') {
        echo $m->getName() . ': ' . $m->getReturnType() . PHP_EOL;
        foreach($m->getParameters() as $p) {
            echo '  ' . $p->getType() . ' $' . $p->getName() . PHP_EOL;
        }
    }
}
foreach($ref->getProperties() as $p) {
    if (str_starts_with($p->getName(), 'navigation') || str_ends_with($p->getName(), 'Label')) {
        echo $p->getName() . ': ' . ($p->getType() ? $p->getType() : 'no type') . PHP_EOL;
    }
}
