# Manual de Usuario y Guía Técnica - Proyecto Hola Mundo

## 1. Descripción de la Aplicación

Esta aplicación Laravel muestra una página **Hola Mundo** con un diseño moderno basado en **Tailwind CSS**, animaciones de fondo con gradientes y un efecto **Glassmorphism**. La página está pensada como ejemplo de integración de estilos avanzados y arquitectura básica de Laravel (ruta, controlador y vista).

## 2. Requerimientos de Ejecución

- **PHP 8.2** o superior.
- **Composer** instalado y disponible en la línea de comandos.
- Extensiones de PHP requeridas por Laravel (OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON, BCMath, etc.).
- Conexión a internet para cargar Tailwind CSS vía CDN (solo en modo desarrollo).

## 3. Pasos para iniciar el servidor local

1. Abrir una terminal y posicionarse en la carpeta del proyecto:
   ```bash
   cd proyecto_laravel
   ```
2. Instalar dependencias (solo la primera vez):
   ```bash
   composer install
   ```
3. Generar la clave de la aplicación (si no existe):
   ```bash
   php artisan key:generate
   ```
4. Iniciar el servidor de desarrollo:
   ```bash
   php artisan serve
   ```
5. Abrir el navegador y acceder a la URL:
   ```
   http://127.0.0.1:8000/hola
   ```
   Verás la vista con el mensaje **¡Hola Mundo desde Laravel!** y los efectos visuales descritos.

## 4. Arquitectura de la Solución

- **Ruta**: `GET /hola`
  - Definida en `routes/web.php` y enlazada al controlador `HolaMundoController@index`.
- **Controlador**: `app/Http/Controllers/HolaMundoController.php`
  - Contiene el método `index()` que prepara la variable `$mensaje` y devuelve la vista `hola`.
  ```php
  public function index()
  {
      $mensaje = '¡Hola Mundo desde Laravel!';
      return view('hola', compact('mensaje'));
  }
  ```
- **Vista**: `resources/views/hola.blade.php`
  - Utiliza Tailwind CSS vía CDN.
  - Fondo animado con gradientes morados/azules.
  - Tarjeta central con efecto **Glassmorphism**, animación de flotación y badge pulsante.
  - Muestra la variable `{{ $mensaje }}` pasada desde el controlador.

---

Con estos pasos y componentes, la aplicación está lista para ser ejecutada y extendida según sea necesario.
