# PHP Fluent Assertions

Unofficial port of the [.NET Fluent Assertions](http://www.fluentassertions.com/) library for PHP (PHPUnit?)


#### Syntax Examples

```php
this->Assert("string")->Should()->Be("string");
this->Assert(1024)->Should()->Be(1024);
this->Assert($object->stringProperty)->Should()->Be("string");

this->Assert("string")->Should()->Contain("str");
this->Assert("string")->Should()->StartWith("str");
this->Assert("string")->Should()->EndWith("ing");
this->Assert("string")->Should()->HaveLength(6);

this->Assert($array)->Should()->HaveItemCount(10);
this->Assert($array[0])->Should()->Be("first item");
this->Assert($array)->Should()->ContainItem("fourth item");

this->Assert(true)->Should()->BeTrue();
this->Assert(false)->Should()->BeFalse();
this->Assert(true)->Should()->NotBe(false);

this->Assert(null)->Should()->BeNull();
this->Assert($object)->Should()->NotBeNull();
this->Assert($object->$property)->Should()->Be("MyProperty");

this->Assert($object->DoWork())->Should()->ThrowException("MyException");
this->Assert($object->DoWork())->Should()->ThrowError("PHP_Error_Type");

this->Assert($class)->Should()->Implement("MyClass");
```
