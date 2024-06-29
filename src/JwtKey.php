<?php

declare(strict_types=1);

namespace issbox\jwt;

interface JwtKey
{

    public const EMPTY = 0;

    public const PLAIN_TEXT = 1;

    public const BASE64_ENCODED = 2;

    public const FILE = 3;
}