# Hongos Frontend con Laravel

Este es el frontend de un proyecto que se conecta a un backend para mostrar las respuestas de las APIs relacionadas con la clasificación de especies de hongos utilizando aprendizaje automático.

## Capturas de Pantalla

**Pantalla Principal:**

![Captura de Pantalla Principal](https://github.com/BryanRF/proyecto_hongos/blob/main/Proyecto_API/Captura%20de%20pantalla%202023-09-06%20140750.png)

**Predicción de la Especie de Hongo:**

![Predicción de la Especie de Hongo](https://github.com/BryanRF/proyecto_hongos/blob/main/Proyecto_API/cap.png)

## Autores

- [Rojas Freyre Brayan Eduardo](https://github.com/BryanRF)

## Instalación

Siga estos pasos para configurar y ejecutar el proyecto en su entorno local:

1. **Configurar Host Local (Opcional, solo para Windows):**

   Para configurar un host local en Windows para su proyecto, siga estos pasos:

   - Abra el archivo `C:\xampp\apache\conf\extra\httpd-vhosts`.
   - Agregue el siguiente bloque de código al final del archivo:

     ```apache
     NameVirtualHost *:80
     <VirtualHost *:80>
         DocumentRoot "C:/xampp/htdocs"
         ServerName localhost
     </VirtualHost>

     <VirtualHost *:80>
         DocumentRoot "C:/xampp/htdocs/machine-front/public"
         ServerName hongos.test
         <Directory "C:/xampp/htdocs/machine-front/public">
             Options All
             AllowOverride All
             Require all granted
         </Directory>
     </VirtualHost>
     ```

   - Luego, abra el archivo `C:\Windows\System32\drivers\etc\hosts` con privilegios de administrador y agregue la siguiente línea:

     ```
     127.0.0.1       hongos.test
     ```

2. **Clonar el Repositorio:**

   ```bash
   git clone https://github.com/BryanRF/hongos-front-laravel.git
