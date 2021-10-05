# Symfony experiments

```sh
docker-compose up -d
open http://$(docker-compose port nginx 80)
```

Alternatively:

```sh
docker-compose up -d
symfony local:server:start --daemon
open $(symfony run printenv SYMFONY_PROJECT_DEFAULT_ROUTE_URL)
```

```sh
bin/console doctrine:fixtures:load --no-interaction
```
