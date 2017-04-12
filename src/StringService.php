<?php
/**
 * Created by PhpStorm.
 * User: normanwanto
 * Date: 2017-03-07
 * Time: 3:37 PM
 */

namespace Cashewdigital;


class StringService
{
    // Returns Boolean True or False
    public function like_match($pattern, $subject)
    {
        // The preg match is case insensitive.

        $pattern = str_replace('%', '.*', preg_quote($pattern, '/'));
        return preg_match("/^{$pattern}$/i", $subject);
    }

}