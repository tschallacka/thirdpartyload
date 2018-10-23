# thirdpartyload

thirdpartyload test plugins
The phpunit.xml is changed from default in plugin B and C.
Plugin B `$requires` plugin C, which has a composer libary JsonStreamingParser which is needed by B.

**without modifying the bootstrapper**  
```
$ phpunit plugins/thirdpartyload/b
PHPUnit 6.2.4 by Sebastian Bergmann and contributors.

PHP Fatal error:  Interface 'JsonStreamingParser\Listener' not found in C:\Users\michael\Desktop\New folder (3)\plugins\thirdpartyload\c\updates\1.0.1\RunC.php on line 6
PHP Stack trace:
PHP   1. {main}() C:\bin\phpunit:0
PHP   2. PHPUnit\TextUI\Command::main() C:\bin\phpunit:551
PHP   3. PHPUnit\TextUI\Command->run() phar://C:/bin/phpunit/phpunit/TextUI/Command.php:141
PHP   4. PHPUnit\TextUI\TestRunner->doRun() phar://C:/bin/phpunit/phpunit/TextUI/Command.php:212
PHP   5. PHPUnit\Framework\TestSuite->run() phar://C:/bin/phpunit/phpunit/TextUI/TestRunner.php:537
PHP   6. PHPUnit\Framework\TestSuite->run() phar://C:/bin/phpunit/phpunit/Framework/TestSuite.php:744
PHP   7. ThirdPartyLoad\B\Tests\PluginSetupTest->run() phar://C:/bin/phpunit/phpunit/Framework/TestSuite.php:744
PHP   8. PHPUnit\Framework\TestResult->run() phar://C:/bin/phpunit/phpunit/Framework/TestCase.php:883
PHP   9. ThirdPartyLoad\B\Tests\PluginSetupTest->runBare() phar://C:/bin/phpunit/phpunit/Framework/TestResult.php:695
PHP  10. ThirdPartyLoad\B\Tests\PluginSetupTest->setUp() phar://C:/bin/phpunit/phpunit/Framework/TestCase.php:924
PHP  11. ThirdPartyLoad\B\Tests\PluginSetupTest->setUp() C:\Users\michael\Desktop\New folder (3)\plugins\thirdpartyload\b\tests\PluginSetupTest.php:9
PHP  12. ThirdPartyLoad\B\Tests\PluginSetupTest->runPluginRefreshCommand() C:\Users\michael\Desktop\New folder (3)\tests\PluginTestCase.php:74
PHP  13. ThirdPartyLoad\B\Tests\PluginSetupTest->runPluginRefreshCommand() C:\Users\michael\Desktop\New folder (3)\tests\PluginTestCase.php:144
PHP  14. Illuminate\Support\Facades\Facade::call() C:\Users\michael\Desktop\New folder (3)\tests\PluginTestCase.php:151
PHP  15. Illuminate\Support\Facades\Facade::__callStatic() C:\Users\michael\Desktop\New folder (3)\tests\PluginTestCase.php:151
PHP  16. October\Rain\Foundation\Console\Kernel->call() C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Support\Facades\Facade.php:221
PHP  17. Illuminate\Console\Application->call() C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Foundation\Console\Kernel.php:249
PHP  18. Illuminate\Console\Application->run() C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Console\Application.php:177
PHP  19. Illuminate\Console\Application->run() C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Console\Application.php:88
PHP  20. Illuminate\Console\Application->doRun() C:\Users\michael\Desktop\New folder (3)\vendor\symfony\console\Application.php:130
PHP  21. Illuminate\Console\Application->doRunCommand() C:\Users\michael\Desktop\New folder (3)\vendor\symfony\console\Application.php:228
PHP  22. System\Console\PluginRefresh->run() C:\Users\michael\Desktop\New folder (3)\vendor\symfony\console\Application.php:874
PHP  23. System\Console\PluginRefresh->run() C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Console\Command.php:170
PHP  24. System\Console\PluginRefresh->execute() C:\Users\michael\Desktop\New folder (3)\vendor\symfony\console\Command\Command.php:264
PHP  25. October\Rain\Foundation\Application->call() C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Console\Command.php:183
PHP  26. Illuminate\Container\BoundMethod::call() C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Container\Container.php:549
PHP  27. Illuminate\Container\BoundMethod::callBoundMethod() C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Container\BoundMethod.php:31
PHP  28. Illuminate\Container\BoundMethod::Illuminate\Container\{closure}() C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Container\BoundMethod.php:87
PHP  29. call_user_func_array:{C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Container\BoundMethod.php:29}() C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Container\BoundMethod.php:29
PHP  30. System\Console\PluginRefresh->handle() C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Container\BoundMethod.php:29
PHP  31. System\Classes\UpdateManager->updatePlugin() C:\Users\michael\Desktop\New folder (3)\modules\system\console\PluginRefresh.php:68
PHP  32. System\Classes\VersionManager->updatePlugin() C:\Users\michael\Desktop\New folder (3)\modules\system\classes\UpdateManager.php:518
PHP  33. System\Classes\VersionManager->applyPluginUpdate() C:\Users\michael\Desktop\New folder (3)\modules\system\classes\VersionManager.php:99
PHP  34. System\Classes\VersionManager->applyDatabaseScript() C:\Users\michael\Desktop\New folder (3)\modules\system\classes\VersionManager.php:146
PHP  35. October\Rain\Database\Updater->setUp() C:\Users\michael\Desktop\New folder (3)\modules\system\classes\VersionManager.php:402
PHP  36. October\Rain\Database\Updater->resolve() C:\Users\michael\Desktop\New folder (3)\vendor\october\rain\src\Database\Updater.php:23
PHP  37. require_once() C:\Users\michael\Desktop\New folder (3)\vendor\october\rain\src\Database\Updater.php:84


  [Symfony\Component\Debug\Exception\FatalErrorException]
  Interface 'JsonStreamingParser\Listener' not found



Fatal error: Interface 'JsonStreamingParser\Listener' not found in C:\Users\michael\Desktop\New folder (3)\plugins\thirdpartyload\c\updates\1.0.1\RunC.php on line 6

Call Stack:
    0.0030     359936   1. {main}() C:\bin\phpunit:0
    0.1400    3518032   2. PHPUnit\TextUI\Command::main() C:\bin\phpunit:551
    0.1400    3521192   3. PHPUnit\TextUI\Command->run() phar://C:/bin/phpunit/phpunit/TextUI/Command.php:141
    0.1700    3845232   4. PHPUnit\TextUI\TestRunner->doRun() phar://C:/bin/phpunit/phpunit/TextUI/Command.php:212
    0.1910    3849752   5. PHPUnit\Framework\TestSuite->run() phar://C:/bin/phpunit/phpunit/TextUI/TestRunner.php:537
    0.1910    3849944   6. PHPUnit\Framework\TestSuite->run() phar://C:/bin/phpunit/phpunit/Framework/TestSuite.php:744
    0.1940    3850512   7. ThirdPartyLoad\B\Tests\PluginSetupTest->run() phar://C:/bin/phpunit/phpunit/Framework/TestSuite.php:744
    0.1940    3850512   8. PHPUnit\Framework\TestResult->run() phar://C:/bin/phpunit/phpunit/Framework/TestCase.php:883
    0.1940    3851288   9. ThirdPartyLoad\B\Tests\PluginSetupTest->runBare() phar://C:/bin/phpunit/phpunit/Framework/TestResult.php:695
    0.1940    3867912  10. ThirdPartyLoad\B\Tests\PluginSetupTest->setUp() phar://C:/bin/phpunit/phpunit/Framework/TestCase.php:924
    0.1940    3867912  11. ThirdPartyLoad\B\Tests\PluginSetupTest->setUp() C:\Users\michael\Desktop\New folder (3)\plugins\thirdpartyload\b\tests\PluginSetupTest.php:9
    0.8251   11339376  12. ThirdPartyLoad\B\Tests\PluginSetupTest->runPluginRefreshCommand() C:\Users\michael\Desktop\New folder (3)\tests\PluginTestCase.php:74
    0.8321   11343984  13. ThirdPartyLoad\B\Tests\PluginSetupTest->runPluginRefreshCommand() C:\Users\michael\Desktop\New folder (3)\tests\PluginTestCase.php:144
    0.8361   11347952  14. Illuminate\Support\Facades\Facade::call() C:\Users\michael\Desktop\New folder (3)\tests\PluginTestCase.php:151
    0.8361   11348328  15. Illuminate\Support\Facades\Facade::__callStatic() C:\Users\michael\Desktop\New folder (3)\tests\PluginTestCase.php:151
    0.8361   11348328  16. October\Rain\Foundation\Console\Kernel->call() C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Support\Facades\Facade.php:221
    0.8361   11348328  17. Illuminate\Console\Application->call() C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Foundation\Console\Kernel.php:249
    0.8361   11351000  18. Illuminate\Console\Application->run() C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Console\Application.php:177
    0.8361   11351000  19. Illuminate\Console\Application->run() C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Console\Application.php:88
    0.8361   11351000  20. Illuminate\Console\Application->doRun() C:\Users\michael\Desktop\New folder (3)\vendor\symfony\console\Application.php:130
    0.8361   11351000  21. Illuminate\Console\Application->doRunCommand() C:\Users\michael\Desktop\New folder (3)\vendor\symfony\console\Application.php:228
    0.8361   11351000  22. System\Console\PluginRefresh->run() C:\Users\michael\Desktop\New folder (3)\vendor\symfony\console\Application.php:874
    0.8361   11351352  23. System\Console\PluginRefresh->run() C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Console\Command.php:170
    0.8371   11353264  24. System\Console\PluginRefresh->execute() C:\Users\michael\Desktop\New folder (3)\vendor\symfony\console\Command\Command.php:264
    0.8371   11353640  25. October\Rain\Foundation\Application->call() C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Console\Command.php:183
    0.8371   11353640  26. Illuminate\Container\BoundMethod::call() C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Container\Container.php:549
    0.8371   11354336  27. Illuminate\Container\BoundMethod::callBoundMethod() C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Container\BoundMethod.php:31
    0.8371   11354400  28. Illuminate\Container\BoundMethod::Illuminate\Container\{closure}() C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Container\BoundMethod.php:87
    0.8371   11354456  29. call_user_func_array:{C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Container\BoundMethod.php:29}() C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Container\BoundMethod.php:29
    0.8371   11354464  30. System\Console\PluginRefresh->handle() C:\Users\michael\Desktop\New folder (3)\vendor\laravel\framework\src\Illuminate\Container\BoundMethod.php:29
    0.8381   11354704  31. System\Classes\UpdateManager->updatePlugin() C:\Users\michael\Desktop\New folder (3)\modules\system\console\PluginRefresh.php:68
    0.8381   11354736  32. System\Classes\VersionManager->updatePlugin() C:\Users\michael\Desktop\New folder (3)\modules\system\classes\UpdateManager.php:518
    0.8391   11356032  33. System\Classes\VersionManager->applyPluginUpdate() C:\Users\michael\Desktop\New folder (3)\modules\system\classes\VersionManager.php:99
    0.8401   11356488  34. System\Classes\VersionManager->applyDatabaseScript() C:\Users\michael\Desktop\New folder (3)\modules\system\classes\VersionManager.php:146
    0.8401   11356600  35. October\Rain\Database\Updater->setUp() C:\Users\michael\Desktop\New folder (3)\modules\system\classes\VersionManager.php:402
    0.8401   11356600  36. October\Rain\Database\Updater->resolve() C:\Users\michael\Desktop\New folder (3)\vendor\october\rain\src\Database\Updater.php:23
    0.8401   11357592  37. require_once('C:\Users\michael\Desktop\New folder (3)\plugins\thirdpartyload\c\updates\1.0.1\RunC.php') C:\Users\michael\Desktop\New folder (3)\vendor\october\rain\src\Database\Updater.php:84
```

**With the bootstrapper**
It loads a custom bootstrapper in plugin B
https://github.com/tschallacka/thirdpartyload/blob/master/b/phpunit_bootstrap.php
which loads the default bootstrapper and then the vendor autoload of plugin C. This will of course only work if `composer update` has been called in that directory.

to make sure php unit recognises the modify phpunit.xml run phpunit by 

`phpunit --configuration plugins/thirdpartyload/b`

it will run without issues.

Same goes for plugin C. Without bootstrapper errors, with custom bootstrapper no errors.

Plugin A, which requires B, which requires C needs the JSON streaming parser too that C provides, but doesn't implement a custom bootstrapper to load the vendor autoload. A will always fail.
