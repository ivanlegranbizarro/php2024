<?php

declare(strict_types=1);

require_once __DIR__ . './../bootstrap.php';

loadSchema(connectDB(), DB_DIR . '/schema.sql');