#!/usr/bin/env bash

# Install PHP pre-reqs
sudo apt-get update
sudo apt-get -y install php5

# Install PHPUnit
cd #
wget https://phar.phpunit.de/phpunit-old.phar
mv phpunit-old.phar phpunit.phar
chmod +x phpunit.phar
sudo mv phpunit.phar /usr/local/bin/phpunit
phpunit --version

# Move to working directory
cd /vagrant