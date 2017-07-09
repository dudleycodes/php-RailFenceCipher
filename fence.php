<?php

/**
 * Functions to encode/decode using a simple "Rail Fence" cipher
 *
 * In the rail fence cipher, the plaintext is written downwards on successive "rails" of an 
 * imaginary fence, starting a new column when the bottom is reached. The message is then read
 * off in rows. For example, if we have 3 rails and a message of "This is a secret message", 
 * you would write out:
 * 
 * T S S   C T E A
 * H     S R   S G
 * I I A E E M S E
 *
 * The secret message is then condensed and regrouped:
 * 
 * TSS CTEAH SR SG IIAEEMSE
 * 
 * To decode the message an identical number of rails must be provided.
 *
 * @since May 2006
 * @category
 * @package
 * @copyright
 */

if (!function_exists('cipher_fence_encode'))
{
    function cipher_fence_encode($plainText, $rails = 4)
    {
        $cipherText = null;
        if ($rails < 2) $rails = 2;

        for ($rail = 0; $rail < $rails; $rail++)
        {
            for ($index = $rail; $index <= strlen($plainText); $index += $rails)
            {
                $cipherText .= substr($plainText, $index, 1);
            }
        }

        return $cipherText;
    }
}

if (!function_exists('cipher_fence_decode'))
{
    function cipher_fence_decode($cipherText, $rails = null)
    {
        $plainText = null;
        if ($rails < 2) $rails = 2;

        return $plainText;
    }
}
