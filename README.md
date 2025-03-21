# GIT TECNOLOGÍAS - Reparación y Servicios

GIT TECNOLOGÍAS es una plataforma web diseñada para gestionar servicios de reparación de equipos electrónicos, venta de productos y seguimiento de clientes. Este proyecto incluye una interfaz de usuario para clientes y un panel de administración para gestionar inventarios, servicios, usuarios y más.

## Características principales

- **Página de inicio**: Información sobre los servicios ofrecidos, productos disponibles y contacto.
- **Gestión de productos**: Catálogo de productos disponibles para la venta.
- **Gestión de servicios**: Registro y seguimiento de servicios de reparación.
- **Panel de administración**: Gestión de usuarios, clientes, inventarios y servicios.
- **Generación de reportes**: Exportación de reportes en formato PDF para productos y servicios.
- **Autenticación de usuarios**: Sistema de login para administradores.

## Tecnologías utilizadas

- **Frontend**: HTML, CSS, JavaScript, Bootstrap.
- **Backend**: PHP, MySQL.
- **Librerías**: mPDF (para generación de PDF), jQuery, Alertify (para notificaciones).
- **Dependencias**: Composer (para gestionar dependencias de PHP).

## Requisitos del sistema

- Servidor web (Apache, Nginx, etc.).
- PHP 7.0 o superior.
- MySQL 5.6 o superior.
- Composer (para instalar dependencias).

## Instalación

1. **Clonar el repositorio**:
   ```bash
   git clone https://github.com/tuusuario/gitdurango-web.git
   cd gitdurango-web
2.  **Configurar la base de datos**:    
    -   Importa el archivo SQL proporcionado en la carpeta  `database/`  a tu servidor MySQL.        
    -   Configura las credenciales de la base de datos en el archivo  `admin/php/conexion.php`.        
3.  **Instalar dependencias**: 
    -   Navega a la carpeta  `PDF/`  y ejecuta:  
     ```   
        bash       
        Copy        
        composer install      
   Esto instalará las dependencias necesarias para la generación de PDF.
4.  **Configurar el servidor web**:    
    -   Asegúrate de que el servidor web esté configurado para apuntar a la carpeta  `gitdurango-web/`.
5.  **Acceder al sitio**:    
    -   Abre tu navegador y visita  `http://localhost/gitdurango-web/`.
## Uso
### Página principal
-   **Inicio**: Información general sobre los servicios y productos.   
-   **Productos**: Catálogo de productos disponibles.   
-   **Servicios**: Descripción de los servicios de reparación.    
-   **Contáctanos**: Formulario de contacto y ubicación en Google Maps.
### Panel de administración
-   **Inicio**: Resumen de actividades y acceso rápido.   
-   **Servicios**: Gestión de servicios de reparación.    
-   **Usuarios**: Gestión de usuarios administradores.    
-   **Clientes**: Listado de clientes y estado de sus equipos.  
-   **Facturas**: Generación y visualización de facturas.  
-   **Inventario**: Gestión de productos en inventario. 
-   **Movimientos**: Registro de movimientos de productos y servicios.
### Generación de reportes
-   **Productos**: Genera un reporte en PDF de los productos disponibles.    
-   **Servicios**: Genera un reporte en PDF de los servicios realizados.
## Contribución
Si deseas contribuir a este proyecto, sigue estos pasos:
1.  Haz un fork del repositorio.    
2.  Crea una nueva rama (`git checkout -b feature/nueva-funcionalidad`).    
3.  Realiza tus cambios y haz commit (`git commit -am 'Añade nueva funcionalidad'`).   
4.  Haz push a la rama (`git push origin feature/nueva-funcionalidad`).  
5.  Abre un Pull Request.
## Licencia
Este proyecto está bajo la licencia MIT. Consulta el archivo  [LICENSE](https://license/)  para más detalles.
