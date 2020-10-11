# Fight The Ice Core Exceptions Component

Set of exceptions shared across Fight The Ice components. This lets you catch library-specific exceptions (if needed).

## Installation

The best way to use this component is through Composer:

```BASH
$ composer require fighttheice/exceptions
```

## Usage

There are actually two steps to follow when trying to use the features of this library.

[1] - Create your own exception classes by extending any of the FightTheIce\Exceptions\{class}

```php

class YourAwesomeException extends \FightTheIce\Exceptions\ErrorException {
	protected $component = 'Your component name';
}
```

[2] - In your code (try,...catch) you have the following options
```php
...
try {
	$obj->someMethod();
} catch (YourAweomseException $e) {
	//Catch your specific execption
} catch (\FightTheIce\Exceptions\ErrorExcetion $e) {
	//catch FTI exception
} catch (\ErrorException $e) {
	//catch SPL exception
} catch (\Exception $e) {
	//catch Generic exception
}
```

## Contributing

All feedback / bug reports / pull requests are welcome.

## License

Copyright (c) 2020 William Knauss

This code is licensed under the [MIT License](LICENSE).