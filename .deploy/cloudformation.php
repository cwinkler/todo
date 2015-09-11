#!/usr/bin/env php
<?php

require_once "../vendor/autoload.php";

foreach (['AWS_ACCESS_KEY_ID', 'AWS_SECRET_ACCESS_KEY', 'AWS_REGION', 'AWS_CLOUDFORMATION_STACK'] as $key)
{
    if (!isset($_ENV[$key]))
    {
        printf("ERROR: Missing ENV[%s]!\n", $key);
        exit(2);
    }
}

// - Parse Cloudformation Template
// - Check if Cloudformation Stack exists
// - Create/Update Stack
// - Wait for Stack creation to be done