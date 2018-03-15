FIX_CODE_STYLE := vendor/bin/php-cs-fixer fix --config=.php_cs
COMPOSER := composer --no-interaction

# Development:
test:
	vendor/bin/phpunit $A
open-coverage:
	open build/coverage/html/index.html
fix-code-style:
	$(FIX_CODE_STYLE)
check-code-style:
	$(FIX_CODE_STYLE) --diff --dry-run --verbose

# Travis:
ci-install:
	$(COMPOSER) --prefer-stable update
	$(COMPOSER) info -D | sort
ci-test: \
 test \
 check-code-style
ci-coverage:
	vendor/bin/php-coveralls --verbose

# Windows
ci-win-init:
	SET PATH=C:\tools\php;C:\MinGW\bin;%PATH%
ci-win-install:
	ps: Set-Service wuauserv -StartupType Manual
	IF NOT EXIST C:\tools\php (choco install --yes --allow-empty-checksums php --version %php_ver% --params '/InstallDir:C:\tools\php')
	cd C:\tools\php
	copy php.ini-production php.ini
	echo date.timezone="UTC" >> php.ini
	echo memory_limit=512M >> php.ini
	echo extension_dir=ext >> php.ini
	echo extension=php_curl.dll >> php.ini
	echo extension=php_openssl.dll >> php.ini
	echo extension=php_mbstring.dll >> php.ini
	IF NOT EXIST C:\tools\composer.phar (cd C:\tools && appveyor DownloadFile https://getcomposer.org/download/1.4.1/composer.phar)
	cd C:\app
	C:\tools\composer.phar global show hirak/prestissimo -q || php C:\tools\composer.phar global require hirak/prestissimo
	C:\tools\composer.phar --no-interaction --prefer-stable update
	C:\tools\composer.phar --no-interaction info -D | sort
ci-win-test:
    cd C:\app
