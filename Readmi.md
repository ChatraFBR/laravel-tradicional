📌 Proyecto Laravel - Configuración en otro PC
Este documento describe paso a paso cómo descargar, instalar y configurar este proyecto Laravel en una nueva máquina, incluyendo la base de datos y dependencias necesarias.

🛠️ Requisitos previos
Antes de comenzar, asegúrate de que tienes instalado en tu PC:

Git → Descargar Git

PHP (mínimo 8.0) → Descargar PHP

Composer (gestor de dependencias PHP) → Descargar Composer

MySQL o MariaDB → Descargar MySQL

Laravel CLI (opcional, pero recomendado)

🚀 1. Clonar el proyecto desde GitHub
Abre la terminal y ejecuta:

bash
git clone https://github.com/TU-USUARIO/NOMBRE-DEL-REPOSITORIO.git
cd NOMBRE-DEL-REPOSITORIO
💡 Reemplaza TU-USUARIO y NOMBRE-DEL-REPOSITORIO por los datos de tu repositorio en GitHub.

⚙️ 2. Instalar dependencias
Ejecuta el siguiente comando dentro del proyecto:

bash
composer install
Esto instalará todas las librerías necesarias para Laravel.

🔑 3. Configurar el archivo .env
Copia el archivo de configuración ejemplo y edítalo:

bash
cp .env.example .env
Abre .env con un editor de texto y configura la conexión con MySQL:

env
DB_DATABASE=example_app
DB_USERNAME=root
DB_PASSWORD=1234
💡 Usa los valores correctos de tu base de datos.

🗄️ 4. Crear la base de datos
1️⃣ Si usas MySQL, abre la terminal y ejecuta:

bash
mysql -u root -p1234 -e "CREATE DATABASE example_app;"
💡 Reemplaza example_app por el nombre real de la base de datos si es diferente.

📂 5. Restaurar la base de datos desde el respaldo
Ejecuta este comando para importar la base de datos desde backup.sql:

bash
mysql -u root -p1234 example_app < backup.sql
Esto restaurará todas las tablas y datos en la nueva máquina.

🚀 6. Generar clave de aplicación
Ejecuta este comando para generar una clave única en Laravel:

bash
php artisan key:generate
🔄 7. Aplicar migraciones (si es necesario)
Si necesitas recrear las tablas sin importar datos, usa:

bash
php artisan migrate
Si la base de datos ya tiene datos y solo quieres actualizarla, usa:

bash
php artisan migrate --seed
🔗 8. Crear enlace de almacenamiento
Ejecuta este comando para asegurarte de que Laravel pueda acceder a storage:

bash
php artisan storage:link
🚀 9. Iniciar el servidor Laravel
Para ejecutar el proyecto en tu máquina, usa:

bash
php artisan serve
Esto iniciará el servidor en http://127.0.0.1:8000.
