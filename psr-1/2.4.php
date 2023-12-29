<?php
//declaration
function foo()
{
    // function body
}

// confitional declaration is *not* a side effect
if (! function_exists('bar')) {
    function bar()
    {
        // function body
    }
}