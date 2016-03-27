# Fluent Assertions for PHP

Fluent Assertions for PHP is an unofficial port of the [Fluent Assertions for .NET](http://www.fluentassertions.com/) library.

It extends PHPUnit providing a very readable syntax for your unit tests that should make them easier to understand.

It also provides many powerful pre-written assertions allowing you to easily check that a result is exactly what it is expected be, including checking class inheritance, interface implementations, array searching and more.

#### Examples

```php
$this->Assert($object->stringProperty)->Should()->Be("string");
$this->Assert("string")->Should()->Contain("str");
$this->Assert($array)->Should()->HaveItemCount(10);
$this->Assert($array)->Should()->ContainItem("fourth item");

$this->Assert($object)->Should()->NotBeNull();

$this->Assert($object->DoWork())->Should()->ThrowException("MyException");
$this->Assert($object->DoWork())->Should()->ThrowError("PHP_Error_Type");

$this->Assert($class)->Should()->Implement("MyClass");
$this->Assert($class)->Should()->Extend("MyClass");
```


## Reference

### Getting Started

- Include files
- Test class inherit from `PHPUnit_FluentAssertions_TestCase`

### Generic

The basic usage of this library is as follows:
```php
$this->Assert(1)->Should()->Be(1, "1 and 1 are the same!");
```

Here we call `Assert()` on the FluentAssertions base class, passing in a result (`1`) that we want to check.

Then we call the function `Should()`, which is simply syntatic sugar to make the code read nicely.

Finally, we call one of the many assertions available as part of this library *(see below for a full list)* passing in our expected result (`1`) and an optional reason for the assertion.


<br />


All types and variables support two main assertions:

**`Be`**`($expected)` Assert that a variable is the same as another variable

**`NotBe`**`($expected)` Assert that a variable is not the same as another variable

#### Reasons

All assertions take an optional "reason" parameter at the end allowing you to specify a reason for the assertion. To read fluidly on the test output, the provided reason should start with "because".

*(An example output: "Expected false to be true because result is same type as expected")*

### Strings

When your `result` is a string, there are some special assertions that you can perform:

**`Contain`**`($searchValue)` Assert that a string contains another string

**`NotContain`**`($searchValue)` Assert a string does not contain another string

**`StartWith`**`($searchValue)` Assert a string starts with another string

**`NotStartWith`**`($searchValue)` Assert a string does not start with another string

**`EndWith`**`($searchValue)` Assert a string ends with another string

**`NotEndWith`**`($searchValue)` Assert a string does not end with another string

**`HaveLength`**`($count)` Assert a string has a certain number of characters

**`NotHaveLength`**`($count)` Assert a string's length is not the specified number of characters


### Booleans

When your `result` is a bool, there are some special assertions that you can perform:

**`BeTrue`**`()` Assert that a boolean is true

**`NotBeTrue`**`()` Assert that a boolean is not true

**`BeFalse`**`()` Assert that a boolean is false

**`NotBeFalse`**`()` Assert that a boolean is not false


### Type Checking

To check the type of the `result` variable, you can use one of the following assertions:

**`BeBool`**`()`

**`BeInt`**`()`

**`BeFloat`**`()`

**`BeString`**`()`

**`BeArray`**`()`

**`BeNull`**`()`

**`BeResource`**`()`

**`BeCallable`**`()`

**`BeObject`**`()` *Note: In PHP, only instances of classes are objects.*

All of the above also have an opposite `NotBe<type>` assertion as well.


### Arrays

When your `result` is an array, there are some special assertions that you can perform:

**`HaveCount`**`($count)` Assert that an array has a specified number of elements

**`NotHaveCount`**`($count)` Assert that an array does not have a specified number of elements

**`ContainItem`**`($item)` Assert that an array contains a specified item

**`NotContainItem`**`($item)` Assert that an array does not contain a specified item

Example usage:

```php
$this->Assert($myArray)->Should()->ContainItem("Array item");
$this->Assert($myArray[0])->Should()->Be("First item!");
$this->Assert($myArray)->Should()->HaveCount(4);
```

### Classes

When your `result` is a class instance, there are some special assertions that you can perform:

**`BeInstanceOf`**`($className)` Assert that a class instance is of the type specified

**`Implement`**`($interfaceName)` Assert that a class instance implements a given interface name

**`Extend`**`($className)` Assert that a class instance extends a given class name

**`BeSameAs`**`($classInstance)` Assert that a class instance is the same object in memory (same reference pointer)

All of the above also have an opposite `NotBe<assertion>` as well.

Example usage:

```php
$this->Assert($myClassInstance)->Should()->Implement("IFirstInterface");
$this->Assert($myClassInstance)->Should()->Extend("SubClassName");
$this->Assert($myClassInstance)->Should()->BeSameAs($myClassInstance);
$this->Assert($myClassInstance)->Should()->NotBeSameAs($myIdenticalClassInstance);
```

### Exceptions

If you pass in a function call as the `result`, you can assert that an Exception is thrown:

**`ThrowException`**`($exceptionName)`

Example usage:

```php
$this->Assert($myClass->DoWork())->Should()->ThrowException("InvalidArgumentException");
```

### PHP Errors

If you pass in a function call as the `result`, you can assert that a PHP Error, Warning or Notice is thrown:

**`ThrowError`**`()`

**`ThrowWarning`**`()`

**`ThrowNotice`**`()`

Example usage:

```php
$this->Assert($myClass->DoWork())->Should()->ThrowError();
$this->Assert($myClass->DoWork())->Should()->ThrowWarning();
```


## TODO LIST

**Generic**
- [x] `Be()`
- [x] `NotBe()`

**Booleans**
- [x] `BeTrue()`
- [x] `NotBeTrue()`
- [x] `BeFalse()`
- [x] `NotBeFalse()`

**Types**
- [x] `BeBool()`
- [x] `NotBeBool()`
- [x] `BeInt()`
- [x] `NotBeInt()`
- [ ] `BeFloat()`
- [ ] `NotBeFloat()`
- [x] `BeString()`
- [x] `NotBeString()`
- [ ] `BeArray()`
- [ ] `NotBeArray()`
- [x] `BeNull()`
- [x] `NotBeNull()`
- [ ] `BeResource()`
- [ ] `NotBeResource()`
- [ ] `BeCallable()`
- [ ] `NotBeCallable()`
- [ ] `BeObject()`
- [ ] `NotBeObject()`

**Strings**
- [x] `Contain()`
- [x] `NotContain()`
- [x] `StartWith()`
- [x] `NotStartWith()`
- [x] `EndWith()`
- [x] `NotEndWith()`
- [x] `HaveLength()`
- [x] `NotHaveLength()`

**Integers**
- [ ] `BeGreaterThan()`
- [ ] `BeLessThan()`
- [ ] `BeGreaterThanOrEqualTo()`
- [ ] `BeLessThanOrEqualTo()`
- [ ] `BeInRange()`
- [ ] `BePositive()`
- [ ] `BeNegative()`

**Arrays**
- [x] `HaveCount()`
- [x] `NotHaveCount()`
- [x] `ContainItem()`
- [x] `NotContainItem()`
- [ ] **More complex search cases (one match, exactly(x) matches, etc)**
- [ ] **Even more complex search cases (check item is instance of class ?)**
- [ ] `StartWithItem()`
- [ ] `EndWithItem()`
- [ ] `ContainSingleItem()`
- [ ] `BeEmpty()`
- [ ] `BeNullOrEmpty()`

**Classes**
- [ ] `BeInstanceOf()`
- [ ] `NotBeInstanceOf()`
- [ ] `Implement()`
- [ ] `NotImplement()`
- [ ] `Extend()`
- [ ] `NotExtend()`
- [ ] `BeSameAs()` -- Exact same object in memory (pointer to same object)
- [ ] `NotBeSameAs()`

**Exceptions**
- [ ] `ThrowException()` -- `$this->setExpectedException("InvalidArgumentException");`
- [ ] `NotThrowException()`

**PHP Errors**
- [ ] `ThrowError()` -- https://phpunit.de/manual/current/en/writing-tests-for-phpunit.html#writing-tests-for-phpunit.errors
- [ ] `NotThrowError()`

**Other**
- [ ] Get custom reason working (build up reason from inputs)
- [ ] Drop support for PHP 5.3 to allow using `traits` to clean up the main FluentAssertions class
- [ ] Get autoloader working (composer) to allow easy use
