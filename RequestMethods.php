<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RequestMethods
 *
 * @author Harish
 */

namespace Craften
{
    class RequestMethods
    {
        private function __construct()
        {
            // do nothing
        }

        private function __clone()
        {
            // do nothing
        }

        public static function get($key, $default = "")
        {
            if (!empty($_GET[$key]))
            {
                return $_GET[$key];
            }
            return $default;
        }

        public static function post($key, $default = "")
        {
            if (!empty($_POST[$key]))
            {
                return $_POST[$key];
            }
            return $default;
        }

        public static function server($key, $default = "")
        {
            if (!empty($_SERVER[$key]))
            {
                return $_SERVER[$key];
            }
            return $default;
        }
    }
}
?>
