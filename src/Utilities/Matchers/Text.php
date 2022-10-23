<?php

namespace Sinnbeck\DomAssertions\Utilities\Matchers;

use Sinnbeck\DomAssertions\Utilities\Normalize;

class Text implements Matcher
{
    public static function compare($expected, $actual)
    {
        return Normalize::text($expected) === Normalize::text($actual);
    }
}