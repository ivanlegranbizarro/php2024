<?php

declare(strict_types=1);

function renderView(string $template, array $data = []): void
{
    require_once TEMPLATES_DIR . '/header.php';
    require_once TEMPLATES_DIR . '/' . $template . '.php';
    require_once TEMPLATES_DIR . '/footer';
}
