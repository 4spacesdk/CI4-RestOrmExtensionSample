# CI4-RestOrmExtensionSample

## Setup
* Copy `env` to `.env`
* Adjust desired settings in `.env`
* Run `docker-compose up`
* Composer install: `docker exec -it ci4restormsample-app bash -c "cd ci4 && composer i"`
* Migrate DB: `docker exec -it ci4restormsample-app bash -c "cd ci4 && php spark migrate"`
* Seed: `docker exec -it ci4restormsample-app bash -c "cd ci4 && php spark db:seed ProductSeeder"`

## Examples
* Fetch all products: http://localhost:8780/products/get
* Fetch first 10 products: http://localhost:8780/products/get?limit=10
