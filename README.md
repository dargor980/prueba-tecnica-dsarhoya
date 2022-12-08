## Prueba técnica Dsarhoya

### INSTRUCCIONES DE DESPLIEGUE

1. clonar repositorio
2. tener instalado composer
3. tener instalado php >=7.3

#### ejecutar los siguientes comandos:

1.  composer-install
2.- php artisan key:generate

#### Luego en el archivo .en agregar las siguientes variables:
API_URL=https://api.sbif.cl/api-sbifv3/recursos_api
API_KEY=d8093171162117c0c6e8da895b00978d4e2b6a0e

#### Luego ejecutar:

php artisan config:clear
php artisan config:cache

finalmente iniciar servidor:

php artisan serve

