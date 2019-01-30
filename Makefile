install:
	composer install

lint:
	./vendor/bin/phpcs -- --standard=PSR12 src bin
