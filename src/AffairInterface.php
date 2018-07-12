<?php

namespace Dreamaker\Affair;

interface AffairInterface
{
    static public function put($name, $value);

    static public function exists($name);

    static public function get($name);

    static public function delete();

    static public function destroy();

    static public function unset();

    static public function all();

}