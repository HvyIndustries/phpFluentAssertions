<?php

class TypeChecker
{
    public static function getType($variable)
    {
        if (is_bool($variable))
        {
            return "bool";
        }

        if (is_int($variable))
        {
            return "int";
        }

        if (is_float($variable))
        {
            return "float";
        }

        if (is_string($variable))
        {
            return "string";
        }

        if (is_array($variable))
        {
            return "array";
        }

        if (is_null($variable))
        {
            return "null";
        }

        if (is_resource($variable))
        {
            return "resource";
        }

        if (is_callable($variable))
        {
            return "callable";
        }

        if (is_object($variable))
        {
            return "object";
        }

        return "unknown";
    }
}
