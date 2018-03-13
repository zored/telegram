test:
	vendor/bin/phpunit

open-coverage:
	open build/coverage/html/index.html

fix-code-style:
	vendor/bin/php-cs-fixer fix --config=.php_cs
