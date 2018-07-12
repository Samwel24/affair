<?php

namespace Dreamaker\Affair;

class Affair implements AffairInterface
{
    public function __construct($name = ""){
        session_start();
        return ($name !== "") ? $_SESSION[$name] : $_SESSION;
    }
    /**
     * session put
     * @param name, value
     * This will save the value into a session
     * just like in laravel where you do session::put(name, value)
     */
    static public function put($name, $value)
    {
        return $_SESSION[$name] = $value;
    }

    /**
     * session::exist
     * @param name
     * this will return true if the session you are trying to
     * check exists and false if it doesn't
     */

    static public function exists($name)
    {
        return (isset($_SESSION[$name])) ? true : false;
    }

    /**
     * session 
     * @param name
     * this will return session values if it exists
     * and empty string if it doesn't
     */

    static public function get($name)
    {
        return isset($_SESSION[$name]) ? $_SESSION[$name] : "";
    }

    /**
     * session destroy
     * @param name
     * this will destroy all existing sessions
     */
    static public function destroy()
    {
        return session_destroy();
    }

    /**
     * session unset
     * this will unset all session variable
     */

    static public function unset()
    {
        return session_unset();
    }

    /**
     * session delete
     * @param name
     * this will delete session variable set by passing a param
     * if param isn't passed it them destroys all session
     */
    static public function delete($name = "")
    {
        return ($name == "") ? session_destroy() : $_SESSION[$name] = "";
    }

    /**
     * session all
     * this return all existing session
     */
    static public function all()
    {
        return $_SESSION;
    }
    
}