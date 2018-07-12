<?php

function affair($name = "")
{
    return ($name == "") ? new Affair() : $_SESSION[$name];
}

