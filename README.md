# README

Website for Drishti 2018.

# How do I get set up?

Follow these steps to setup your local development environment

* __$__ git clone _https://github.com/hemanditwiz/drishti18_ && cd drishti18

* __$__ composer install       # Install PHP packages

* __$__ npm install            # Install node packages for css,js preprocessors

* __$__ cp .env.example .env   # set all required environment values

* __$__ php artisan migrate

* __$__ npm run dev            # For watching for changes, run _npm run watch_

* __$__ php artisan serve


## NOTE

* Use migrations for schema changes.

* DO NOT add your .env file to git.

* DO NOT add compiled/generated files to git.

* Always apply the latest migrations after pulling changes from remote repo.



