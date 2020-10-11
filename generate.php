<?php
exit;

include 'vendor/autoload.php';

$namespace = 'FightTheIce\Exceptions';

$comment =
    '
/**
 * Fight The Ice {exception} Exception.
 *
 * {desc}
 *
 * @see       {url}
 *
 * @license   MIT
 */
';

$customClasses = array(
    'FileSystem\FileNotFound' => array(
        'extends' => 'ErrorException',
    ),
);

$standardclasses = array(
    //SPL exceptions
    'SPL\BadFunctionCallException' => array(
        'url'  => 'https://www.php.net/manual/en/class.badfunctioncallexception.php',
        'desc' => 'Exception thrown if a callback refers to an undefined function or if some arguments are missing.',
    ),
    'SPL\BadMethodCallException'   => array(
        'url'  => 'https://www.php.net/manual/en/class.badmethodcallexception.php',
        'desc' => 'Exception thrown if a callback refers to an undefined method or if some arguments are missing.',
    ),
    'SPL\DomainException'          => array(
        'url'  => 'https://www.php.net/manual/en/class.domainexception.php',
        'desc' => 'Exception thrown if a value does not adhere to a defined valid data domain.',
    ),
    'SPL\InvalidArgumentException' => array(
        'url'  => 'https://www.php.net/manual/en/class.invalidargumentexception.php',
        'desc' => 'Exception thrown if an argument is not of the expected type.',
    ),
    'SPL\LengthException'          => array(
        'url'  => 'https://www.php.net/manual/en/class.lengthexception.php',
        'desc' => 'Exception thrown if a length is invalid.',
    ),
    'SPL\LogicException'           => array(
        'url'  => 'https://www.php.net/manual/en/class.logicexception.php',
        'desc' => 'Exception that represents error in the program logic. This kind of exception should lead directly to a fix in your code.',
    ),
    'SPL\OutOfBoundsException'     => array(
        'url'  => 'https://www.php.net/manual/en/class.outofboundsexception.php',
        'desc' => 'Exception thrown if a value is not a valid key. This represents errors that cannot be detected at compile time.',
    ),
    'SPL\OutOfRangeException'      => array(
        'url'  => 'https://www.php.net/manual/en/class.outofrangeexception.php',
        'desc' => 'Exception thrown when an illegal index was requested. This represents errors that should be detected at compile time.',
    ),
    'SPL\OverflowException'        => array(
        'url'  => 'https://www.php.net/manual/en/class.overflowexception.php',
        'desc' => 'Exception thrown when adding an element to a full container.',
    ),
    'SPL\RangeException'           => array(
        'url'  => 'https://www.php.net/manual/en/class.rangeexception.php',
        'desc' => 'Exception thrown to indicate range errors during program execution. Normally this means there was an arithmetic error other than under/overflow. This is the runtime version of DomainException.',
    ),
    'SPL\RuntimeException'         => array(
        'url'  => 'https://www.php.net/manual/en/class.runtimeexception.php',
        'desc' => 'Exception thrown if an error which can only be found on runtime occurs.',
    ),
    'SPL\UnderflowException'       => array(
        'url'  => 'https://www.php.net/manual/en/class.underflowexception.php',
        'desc' => 'Exception thrown when performing an invalid operation on an empty container, such as removing an element.',
    ),
    'SPL\UnexpectedValueException' => array(
        'url'  => 'https://www.php.net/manual/en/class.runtimeexception.php',
        'desc' => 'Exception thrown if an error which can only be found on runtime occurs.',
    ),

    //base exceptions
    'Exception'                    => array(
        'url'  => 'https://www.php.net/manual/en/class.exception.php',
        'desc' => 'Exception is the base class for all Exceptions in PHP 5, and the base class for all user exceptions in PHP 7.',
    ),
    'ErrorException'               => array(
        'url'  => 'https://www.php.net/manual/en/class.errorexception.php',
        'desc' => 'An Error Exception.',
    ),
    'Error'                        => array(
        'url'  => 'https://www.php.net/manual/en/class.error.php',
        'desc' => 'Error is the base class for all internal PHP errors.',
    ),
    'ArgumentCountError'           => array(
        'url'  => 'https://www.php.net/manual/en/class.argumentcounterror.php',
        'desc' => 'ArgumentCountError is thrown when too few arguments are passed to a user-defined function or method.',
    ),
    'ArithmeticError'              => array(
        'url'  => 'https://www.php.net/manual/en/class.arithmeticerror.php',
        'desc' => 'ArithmeticError is thrown when an error occurs while performing mathematical operations. In PHP 7.0, these errors include attempting to perform a bitshift by a negative amount, and any call to intdiv() that would result in a value outside the possible bounds of an integer.',
    ),
    'AssertionError'               => array(
        'url'  => 'https://www.php.net/manual/en/class.assertionerror.php',
        'desc' => 'AssertionError is thrown when an assertion made via assert() fails.',
    ),
    'DivisionByZeroError'          => array(
        'url'  => 'https://www.php.net/manual/en/class.divisionbyzeroerror.php',
        'desc' => 'DivisionByZeroError is thrown when an attempt is made to divide a number by zero.',
    ),
    'CompileError'                 => array(
        'url'  => 'https://www.php.net/manual/en/class.compileerror.php',
        'desc' => 'CompileError is thrown for some compilation errors, which formerly issued a fatal error.',
    ),
    'ParseError'                   => array(
        'url'  => 'https://www.php.net/manual/en/class.parseerror.php',
        'desc' => 'ParseError is thrown when an error occurs while parsing PHP code, such as when eval() is called.',
    ),
    'TypeError'                    => array(
        'url'  => 'https://www.php.net/manual/en/class.typeerror.php',
        'desc' => 'There are three scenarios where a TypeError may be thrown. The first is where the argument type being passed to a function does not match its corresponding declared parameter type. The second is where a value being returned from a function does not match the declared function return type. The third is where an invalid number of arguments are passed to a built-in PHP function (strict mode only).',
    ),
);

######END OF MODIFIABLE CONTENT#######END OF MODIFIABLE CONTENT#######END OF MODIFIABLE CONTENT#######END OF MODIFIABLE CONTENT#

$keepTrackOfClasses = array();
$vowels             = array('A', 'E', 'I', 'O', 'U');
//does the src folder exists?
if (!file_exists('src')) {
    mkdir('src');
}

foreach ($standardclasses as $name => $data) {
    $x                    = explode('\\', $name);
    $className            = end($x);
    $keepTrackOfClasses[] = $className;
    $extendedName         = 'Base';
    if (count($x) > 1) {
        $file = end($x);
        unset($x[count($x) - 1]);

        $basePath = 'src';
        foreach ($x as $folder) {
            $basePath = $basePath . DIRECTORY_SEPARATOR . $folder;
            if (!file_exists($basePath)) {
                mkdir($basePath);
            }
        }

        $extendedName = $x[0];
    }

    $class = new Laminas\Code\Generator\ClassGenerator(
        $className, // name
        $namespace, // namespace
        null, // flags
        $extendedName . $className, // extends
        array(), // interfaces
        array(), // properties
    );

    $class->addUse($className, $extendedName . $className);
    $class->addUse($namespace . '\\ExceptionsInterface');
    $class->addTrait('ComponentExceptionTrait');
    $class->setImplementedInterfaces(array($namespace . '\\ExceptionsInterface'));

    //setup our comment
    $classcomment = $comment;
    $classcomment = str_replace('{exception}', $className, $classcomment);
    $classcomment = str_replace('{desc}', $data['desc'], $classcomment);
    $classcomment = str_replace('{url}', $data['url'], $classcomment);

    $contents = $class->generate();
    $contents = '<?php' . PHP_EOL . $classcomment . PHP_EOL . $contents;
    $contents = str_replace('use ' . $namespace . '\\ExceptionsInterface;' . PHP_EOL, '', $contents);

    $path = 'src' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $name) . '.php';

    file_put_contents($path, $contents);
    include $path;
}

if (isset($customClasses)) {
    foreach ($customClasses as $name => $data) {
        $x         = explode('\\', $name);
        $className = end($x);
        if (count($x) > 1) {
            $file = end($x);
            unset($x[count($x) - 1]);

            $basePath = 'src';
            foreach ($x as $path) {
                $basePath = $basePath . DIRECTORY_SEPARATOR . $path;
                if (!file_exists($basePath)) {
                    mkdir($basePath);
                }
            }
        }

        $realClassName = $namespace . '\\' . $name;
        $extends       = null;
        if (isset($data['extends'])) {
            $extends = $namespace . '\\' . str_replace($namespace . '\\', '', $data['extends']);
        }

        $class = new Laminas\Code\Generator\ClassGenerator(
            $realClassName, // name
            null, // namespace
            null, // flags
            $extends, // extends
            array(), // interfaces
            array(), // properties
        );
        $class->addUse($namespace . '\\' . $data['extends']);

        $contents             = '<?php' . PHP_EOL . PHP_EOL . $class->generate();
        $keepTrackOfClasses[] = $name;

        $path = 'src' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $name) . '.php';

        file_put_contents($path, $contents);
        include $path;
    }
}

//do we have a tests folder?
if (!file_exists('tests')) {
    mkdir('tests');
}

$class = new Laminas\Code\Generator\ClassGenerator(
    'ZZchoasZZ', // name
    null, // namespace
    null, // flags
    null, // extends
    array(), // interfaces
    array(), // properties
);

foreach ($keepTrackOfClasses as $cName) {
    $method = new Laminas\Code\Generator\MethodGenerator('throw' . str_replace('\\', '_', $cName));
    $blah   = 'EXCEPTION: [' . $cName . ']';
    $body   = 'throw new \\' . $namespace . '\\' . $cName . '(\'' . $blah . '\');';
    $method->setBody($body);

    $class->addMethodFromGenerator($method);
}

$contents = '<?php' . PHP_EOL . PHP_EOL . $class->generate();
file_put_contents('tests/ZZchoasZZ.php', $contents);

$trait = new Laminas\Code\Generator\TraitGenerator(
    'ComponentExceptionTrait', // name
    $namespace, // namespace
    null, // flags
    null, // extends
    array(), // interfaces
    array(), // properties
);
//ddProperty($name, $defaultValue = null, $flags = PropertyGenerator::FLAG_PUBLIC)
$trait->addProperty('component', 'UNKNOWN', Laminas\Code\Generator\PropertyGenerator::FLAG_PROTECTED);

$method = new Laminas\Code\Generator\MethodGenerator('getComponent');
$method->setBody('return $this->component;');

$trait->addMethodFromGenerator($method);

file_put_contents('src/ComponentExceptionTrait.php', '<?php' . PHP_EOL . PHP_EOL . $trait->generate());

$interface = new Laminas\Code\Generator\InterfaceGenerator(
    'ExceptionsInterface', // name
    $namespace, // namespace
    null, // flags
    null, // extends
    array(), // interfaces
    array(), // properties
);
$method = new Laminas\Code\Generator\MethodGenerator('getComponent');
$interface->addMethodFromGenerator($method);

file_put_contents('src/ExceptionsInterface.php', '<?php' . PHP_EOL . PHP_EOL . $interface->generate());

$test = new Laminas\Code\Generator\ClassGenerator(
    'ExceptionsTest', // name
    null, // namespace
    null, // flags
    'PHPUnit\Framework\TestCase', // extends
    array(), // interfaces
    array(), // properties
);

foreach ($keepTrackOfClasses as $cName) {
    $class = $namespace . '\\' . $cName;
    $obj   = new $class('error');
    $links = getlinks($obj);
    foreach ($links as $link) {
        $methodName = 'test' . str_replace('\\', '_', $cName) . str_replace('\\', '_', $link) . 'Exception';
        $method     = new Laminas\Code\Generator\MethodGenerator($methodName);
        $body       = '$this->expectException(\\' . $link . '::class);';
        $body       = $body . PHP_EOL . '$choas = new ZZchoasZZ;';
        $body       = $body . PHP_EOL . '$choas->throw' . str_replace('\\', '_', $cName) . '();';
        /*
        $choas->throwFileSystem_FileNotFound();
         */
        $method->setBody($body);

        $test->addMethodFromGenerator($method);
    }
}

file_put_contents('tests/ExceptionsTest.php', '<?php' . PHP_EOL . PHP_EOL . $test->generate());

function getlinks($class) {
    $children   = array();
    $children[] = get_class($class);
    $parents    = class_parents($class);
    foreach ($parents as $name => $blah) {
        $children[] = $name;
    }

    $interfaces = class_implements($class);
    foreach ($interfaces as $name => $blah) {
        if ($name == 'Throwable') {
            continue;
        }

        $children[] = $name;
    }

    return $children;
}
