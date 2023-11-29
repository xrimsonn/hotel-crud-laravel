# Hotel Management System

Este proyecto es un Sistema de Gestión Hotelera desarrollado en Laravel, diseñado para facilitar la administración de empleados, personal y órdenes del restaurante en un hotel. Además, el sistema utiliza la biblioteca [PicoCSS](https://github.com/picocss/pico) para estilos minimalistas y una experiencia de usuario limpia.

## Características principales

1. **CRUD de Empleados**: Gestiona fácilmente la información de los empleados, incluyendo detalles como nombre, posición, contacto, etc.

2. **CRUD de Personal del Hotel**: Administra el personal del hotel, permitiendo la adición, edición y eliminación de detalles relevantes.

3. **CRUD de Órdenes del Restaurante**: Facilita la gestión de órdenes de comida en el restaurante del hotel, con opciones para agregar, editar y eliminar pedidos.

4. **Integración con PicoCSS**: La interfaz de usuario utiliza la biblioteca PicoCSS para estilos minimalistas y una experiencia visual agradable.

5. **Integración con FontAwesome**: Tambien se incluyen iconos de la libreria de FontAwesome para añadir detalles visuales.


## Requisitos del sistema

Asegúrate de que tu entorno cumple con los siguientes requisitos antes de instalar y ejecutar el proyecto:

- PHP >= 8.2
- Composer
- Node.js y npm
- Base de datos MySQL

## Instalación

1. Clona el repositorio:

    ```bash
    git clone https://github.com/tu-usuario/hotel-management-system.git
    ```

2. Instala las dependencias de PHP con Composer:

    ```bash
    composer install
    ```

3. Copia el archivo de configuración `.env`:

    ```bash
    cp .env.example .env
    ```

4. Configura tu entorno en el archivo `.env`, incluyendo la configuración de la base de datos (solo se necesita una base de datos vacia para ejecutar las migraciones).


6. Ejecuta las migraciones y los seeders para configurar la base de datos:

    ```bash
    php artisan migrate --seed
    ```

10. Inicia el servidor de desarrollo:

    ```bash
    php artisan serve
    ```

11. Abre [http://localhost:8000](http://localhost:8000).

¡El Hotel Management System ahora debería estar funcionando en tu entorno local!


## Licencia

Este proyecto está bajo la licencia [MIT](LICENSE).

---
