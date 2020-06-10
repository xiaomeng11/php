# Question 1
  ./model/Client.php implement MyGreeter\Client
  
# Question 2
  ./test/MyGreeter_Client_Test.php add function "test_greetingStr" 
  
# Process
+ git clone git@github.com:xiaomeng11/php.git 
+ cd php
+ composer.phar install
+ composer dump-autoload
+ vendor/bin/phpunit test
