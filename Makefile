FIX_CODE_STYLE := vendor/bin/php-cs-fixer fix --config=.php_cs
COMPOSER := composer --no-interaction

test:
	vendor/bin/phpunit $A

open-coverage:
	open build/coverage/html/index.html

fix-code-style:
	$(FIX_CODE_STYLE)

check-code-style:
	$(FIX_CODE_STYLE) --diff --dry-run --verbose

ci-install:
	$(COMPOSER) --prefer-stable update
	$(COMPOSER) info -D | sort

ci-test: \
 test \
 check-code-style

ci-coverage:
	vendor/bin/php-coveralls --verbose
