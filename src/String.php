<?php

namespace Cashewdigital\Utilities;


class String
{
    // Returns Boolean True or False
    public function like_match($pattern, $subject)
    {
        // The preg match is case insensitive.

        $pattern = str_replace('%', '.*', preg_quote($pattern, '/'));
        return preg_match("/^{$pattern}$/i", $subject);
    }

}