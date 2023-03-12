## DEPLOY CON DOCKER
Desde el directorio raiz realizar los siguientes pasos:

Construir la imagen

`docker compose build --pull --no-cache`

Iniciarla

`docker compose up`

El proyecto debería ser visible en:

`http://localhost:8080/`

### En caso de mostrarse un error de cache (Linux)

Conectarse al contenedor:

`docker exec -it php74-container bash`

Y una vez dentro ejecutar el siguiente comando:

`chown -R www-data:www-data var`
