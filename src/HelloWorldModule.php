<?php
// HelloWorldModule.php
class HelloWorldModule {
    // Outputs "Hello, World!"
    public static function sayHello() {
        return "Hello, World!";
    }
}

// Example usage
if (php_sapi_name() == 'cli') {
    echo HelloWorldModule::sayHello() . "\n";
}
