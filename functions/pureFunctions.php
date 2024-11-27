<?php

declare(strict_types=1);

// Las funciones puras no modifican el estado de la aplicación, ni el estado de sus argumentos.
// Son funciones que solo se encargan de hacer una tarea y devolver un resultado

function add(int $a, int $b): int
{
    return $a + $b;
}

// Son funciones que siempre arrojarán lo mismo si les pasas los mismos parámetros. Son funciones muy predecibles.
