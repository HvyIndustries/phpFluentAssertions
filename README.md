# PHP Fluent Assertions

PHP Fluent Assertions is an unofficial port of the [.NET Fluent Assertions](http://www.fluentassertions.com/) library for PHP.

It extends PHPUnit providing a similar syntax for your unit tests that should make them more human readable and easier to understand.

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

### Generic (All types)

The basic usage of this library is as follows:
```php
$this->Assert($result)->Should()->Be($expected, "because result is same type as expected");
```

All asserters take a "reason" parameter at the end allowing you to specify a reason for the assertion. To read fluidly on the test output, the given reason should start with "because".

*(An example output: "Expected false to be true because result is same type as expected")*

### Strings

### Booleans

### Type Checking

Note: In PHP, strings, ints, bools and arrays are not technically objects. Only class instances are objects *(double check this...)*

### Arrays

### Classes

### Exceptions

### PHP Errors


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
- [ ] `BeBool()`
- [ ] `NotBeBool()`
- [ ] `BeInt()`
- [ ] `NotBeInt()`
- [ ] `BeFloat()`
- [ ] `NotBeFloat()`
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
- [ ] `Contain()`
- [ ] `NotContain()`
- [ ] `StartWith()`
- [ ] `NotStartWith()`
- [ ] `EndWith()`
- [ ] `NotEndWith()`
- [ ] `HaveLength()`
- [ ] `NotHaveLength()`

**Arrays**
- [ ] `HaveCount()`
- [ ] `ContainItem()`
- [ ] `NotContainItem()`

**Classes**
- [ ] `Implement()`
- [ ] `NotImplement()`
- [ ] `Extend()`
- [ ] `NotExtend()`

**Exceptions**
- [ ] `ThrowException()`
- [ ] `NotThrowException()`

**PHP Errors**
- [ ] `ThrowError()`
- [ ] `NotThrowError()`

**Other**
- [ ] Get custom reason working (build up reason from inputs)
