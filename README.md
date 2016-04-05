# Fluent Assertions for PHP

Fluent Assertions for PHP is an unofficial port of the [Fluent Assertions for .NET](http://www.fluentassertions.com/) library.

It extends PHPUnit's base test class providing a very readable syntax for your unit tests that should make them easier to understand.

It also provides many powerful pre-written assertions allowing you to easily check that a result is exactly what it is expected be, including checking class inheritance, interface implementations, array searching and more.

#### Examples

```php
$this->assert($object->stringProperty)->should()->be("string");
$this->assert("string")->should()->contain("str");
$this->assert($array)->should()->haveItemCount(10);
$this->assert($array)->should()->containItem("fourth item");

$this->assert($object)->should()->notBeNull();

$this->assert($object->doWork())->should()->throwException("MyException");
$this->assert($object->doWork())->should()->throwError("PHP_Error_Type");

$this->assert($class)->should()->implement("MyClass");
$this->assert($class)->should()->extend("MyClass");
```

#### Version Support

Currently Fluent Assertions for PHP only supports PHPUnit.

**PHP** : 5.3.x to latest

**PHPUnit** : 4.8 to latest

## Reference

### Getting Started

- Include `FluentAssertions.php` *(or get from composer? TODO)*
- Set your test classes to inherit from **`PHPUnit_FluentAssertions_TestCase`** instead of `PHPUnit_Framework_TestCase`

### Generic

The basic usage of this library is as follows:
```php
$this->assert(1)->should()->be(1, "1 and 1 are the same!");
```

Here we call `assert()` on the FluentAssertions base class, passing in a result (`1`) that we want to check.

Then we call the function `should()`, which is simply syntatic sugar to make the code read nicely.

Finally, we call one of the many assertions available as part of this library *(see below for a full list)* passing in our expected result (`1`) and an optional reason for the assertion.


<br />


All types and variables support two main assertions:

**`be`**`($expected)` Assert that a variable is the same as another variable

**`notBe`**`($expected)` Assert that a variable is not the same as another variable

#### Reasons

All assertions take an optional "reason" parameter at the end allowing you to specify a reason for the assertion. To read fluidly on the test output, the provided reason should start with "because".

*(An example output: "Expected false to be true because result is same type as expected")*

### Strings

When your `result` is a string, there are some special assertions that you can perform:

**`contain`**`($searchValue)` Assert that a string contains another string

**`notContain`**`($searchValue)` Assert a string does not contain another string

**`startWith`**`($searchValue)` Assert a string starts with another string

**`notStartWith`**`($searchValue)` Assert a string does not start with another string

**`endWith`**`($searchValue)` Assert a string ends with another string

**`notEndWith`**`($searchValue)` Assert a string does not end with another string

**`haveLength`**`($count)` Assert a string has a certain number of characters

**`notHaveLength`**`($count)` Assert a string's length is not the specified number of characters


### Booleans

When your `result` is a bool, there are some special assertions that you can perform:

**`beTrue`**`()` Assert that a boolean is true

**`notBeTrue`**`()` Assert that a boolean is not true

**`beFalse`**`()` Assert that a boolean is false

**`notBeFalse`**`()` Assert that a boolean is not false


### Type Checking

To check the type of the `result` variable, you can use one of the following assertions:

**`beBool`**`()`

**`beInt`**`()`

**`beFloat`**`()`

**`beString`**`()`

**`beArray`**`()`

**`beNull`**`()`

**`beResource`**`()`

**`beCallable`**`()`

**`beObject`**`()` *Note: In PHP, only instances of classes are objects.*

All of the above also have an opposite `notBe<type>` assertion as well.


### Arrays

When your `result` is an array, there are some special assertions that you can perform:

**`haveCount`**`($count)` Assert that an array has a specified number of elements

**`notHaveCount`**`($count)` Assert that an array does not have a specified number of elements

**`containItem`**`($item)` Assert that an array contains a specified item

**`notContainItem`**`($item)` Assert that an array does not contain a specified item

Example usage:

```php
$this->assert($myArray)->should()->containItem("Array item");
$this->assert($myArray[0])->should()->be("First item!");
$this->assert($myArray)->should()->haveCount(4);
```

### Classes

When your `result` is a class instance, there are some special assertions that you can perform:

**`beInstanceOf`**`($className)` Assert that a class instance is of the type specified

**`implement`**`($interfaceName)` Assert that a class instance implements a given interface name

**`extend`**`($className)` Assert that a class instance extends a given class name

**`beSameAs`**`($classInstance)` Assert that a class instance is the same object in memory (same reference pointer)

All of the above also have an opposite `notBe<assertion>` as well.

Example usage:

```php
$this->assert($myClassInstance)->should()->implement("IFirstInterface");
$this->assert($myClassInstance)->should()->extend("SubClassName");
$this->assert($myClassInstance)->should()->beSameAs($myClassInstance);
$this->assert($myClassInstance)->should()->notBeSameAs($myIdenticalClassInstance);
```

### Exceptions

If you pass in a function call as the `result`, you can assert that an Exception is thrown:

**`throwException`**`($exceptionName)`

Example usage:

```php
$this->assert($myClass->doWork())->should()->throwException("InvalidArgumentException");
```

### PHP Errors

If you pass in a function call as the `result`, you can assert that a PHP Error, Warning or Notice is thrown:

**`throwError`**`()`

**`throwWarning`**`()`

**`throwNotice`**`()`

Example usage:

```php
$this->assert($myClass->doWork())->should()->throwError();
$this->assert($myClass->doWork())->should()->throwWarning();
```


## TODO LIST

**Generic**
- [x] `be()`
- [x] `notBe()`

**Booleans**
- [x] `beTrue()`
- [x] `notBeTrue()`
- [x] `beFalse()`
- [x] `notBeFalse()`

**Types**
- [x] `beBool()`
- [x] `notBeBool()`
- [x] `beInt()`
- [x] `notBeInt()`
- [ ] `beFloat()`
- [ ] `notBeFloat()`
- [x] `beString()`
- [x] `notBeString()`
- [ ] `beArray()`
- [ ] `notBeArray()`
- [x] `beNull()`
- [x] `notBeNull()`
- [ ] `beResource()`
- [ ] `notBeResource()`
- [ ] `beCallable()`
- [ ] `notBeCallable()`
- [ ] `beObject()`
- [ ] `notBeObject()`

**Strings**
- [x] `contain()`
- [x] `notContain()`
- [x] `startWith()`
- [x] `notStartWith()`
- [x] `endWith()`
- [x] `notEndWith()`
- [x] `haveLength()`
- [x] `notHaveLength()`

**Integers**
- [ ] `beGreaterThan()`
- [ ] `beLessThan()`
- [ ] `beGreaterThanOrEqualTo()`
- [ ] `beLessThanOrEqualTo()`
- [ ] `beInRange()`
- [ ] `bePositive()`
- [ ] `beNegative()`

**Arrays**
- [x] `haveCount()`
- [x] `notHaveCount()`
- [x] `containItem()`
- [x] `notContainItem()`
- [ ] **More complex search cases (one match, exactly(x) matches, etc)**
- [ ] **Even more complex search cases (check item is instance of class ?)**
- [ ] `startWithItem()`
- [ ] `endWithItem()`
- [ ] `containSingleItem()`
- [ ] `beEmpty()`
- [ ] `beNullOrEmpty()`

**Classes**
- [ ] `beInstanceOf()`
- [ ] `notBeInstanceOf()`
- [ ] `implement()`
- [ ] `notImplement()`
- [ ] `extend()`
- [ ] `notExtend()`
- [ ] `beSameAs()` -- Exact same object in memory (pointer to same object)
- [ ] `notBeSameAs()`

**Exceptions**
- [ ] `throwException()` -- `$this->setExpectedException("InvalidArgumentException");`
- [ ] `notThrowException()`

**PHP Errors**
- [ ] `throwError()` -- https://phpunit.de/manual/current/en/writing-tests-for-phpunit.html#writing-tests-for-phpunit.errors
- [ ] `notThrowError()`

**Other**
- [ ] Get custom reason working (build up reason from inputs)
- [ ] Drop support for PHP 5.3 to allow using `traits` to clean up the main FluentAssertions class
- [ ] Get autoloader working (composer) to allow easy use
