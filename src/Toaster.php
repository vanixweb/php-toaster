<?php

namespace YourNamespace;

class Toaster
{
    public static function showToast($message)
    {
        echo "<div class='toast'>$message</div>";
    }
}
