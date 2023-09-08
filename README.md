# enrique_weblabor
Prueba de Desarrollo Weblabor

Instrucciones de instalación:
•	Es necesario contar con una instalación nueva de Laravel 10
•	Copiar y reemplazar todos los archivos de este repositorio
•	Correr composer update y artisan migraciones (seeds opcionalmente)
•	Usuarios
o	El seed inyecta estos usuario: test0@web.com, test1@web.com y test2@web.com
o	Todos con el password: "clave"
•	Mandar correo de reporte
o	Es necesario configurar un cron job que ejecute cada minuto el url: dominio.com/mail_cron
o	Se genera un log que indica el tiempo para el siguiente envío en: storage/logs/app.log
o	Hay que descomentar el envío en app/Models/Emails/enviarCorreo() para el envío real del correo
o	También es necesario configurar la variables del .env para el envío de correos
o	En él .env se puede también configurar la dirección de envío: MAIL_TO_ADDRESS y MAIL_TO_NAME
o	En él .env se puede también configurar el tiempo que tarda en enviarse el correo: MAIL_REPORT_SEND_AFTER_MIN

