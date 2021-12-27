<?php

namespace App\Core;

class BreadcrumbElement
{
    final public function __construct(
        public string $text,
        public ?string $link = null,
    ) { }
}
