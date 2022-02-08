cuatroochenta Test By oskarg6

Este proyecto es un administrador para poder registrar mediciones a vinos.
Actualmente el administrador consta:
 - login
 - register
 - home (sólo accesible con un usuario logueado)

En  la página de login un usuario puede iniciar sesión.

En la página de register el usuario puede crear un usuario para poder iniciar sesión.

En la home el usuario puede ver un listado de medidas, un listado de sensores y un formulario para registrar nuevos sensores.


El proyecto funciona con docker-compose.

Para ejecutar los test: ```$ vendor/bin/codecept run unit,functional```


TO DO:
- mejorar los test sobre todo los de integración que solamente he creado unos de ejemplo
- mejorar el fronend dividiendo la home en componentes, de esta manera aprovechar mejor stimulus
- cambiar nombre de Create\<Entity>Service para llamarlos como lo que son: Factories
- alojar los factories en dominio
- crear Value Object para los datos que se guardan en la BD
- implementar la idea de Model para desacoplar las Entities del framework