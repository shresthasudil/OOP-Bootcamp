<?php

/**
 * E07: Statics and Constants
 * Class Math
 *
 * Static: think it as Share, static properties are going to share its values in global.
 * :: Scope Resolution Operator.
 * Static are Guilty until proven Innocent. (careful using static).
 */
class Math
{
    public static function add(...$nums)
    {
        return array_sum($nums);
    }
}

class BankAccount
{
    public static $tax1 = .09;       // its public so can be updated by: BankAccount::$tax = 1.5;
    private static $tax2 = .09;     // can be updated within the Class but not outside the class. 50% chance of changing.
    const TAX = 0.9;                // set Constant, value cannot be changed and stays same everywhere
}

echo Math::add(1, 2, 3);    // when the function is STATIC it can be called from anywhere with Class::function();

echo BankAccount::TAX;

/**
 * All the Laravel functions in the Core classes are static methods.
 * They can be accessed anywhere in the application
 * Str::lower(); Str::upper();
 */