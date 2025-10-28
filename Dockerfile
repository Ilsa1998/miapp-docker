# Usa una imagen base oficial de PHP-FPM (Alpine es ligera)
FROM php:7.4-fpm-alpine

# Instalar dependencias del sistema y extensiones de PHP
RUN apk update && apk add --no-cache \
    git \
    bash \
    mysql-client \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    # Instalar y habilitar las extensiones mysqli y pdo_mysql (necesarias para WordPress)
    && docker-php-ext-install mysqli pdo_mysql \
    && docker-php-ext-enable mysqli pdo_mysql \
    # Configurar e instalar la extensión GD (para el manejo de imágenes en WP)
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    # Limpiar la caché de APK para reducir el tamaño de la imagen
    && rm -rf /var/cache/apk/*

# Configurar el directorio de trabajo dentro del contenedor
WORKDIR /var/www/html

# El comando de entrada por defecto es php-fpm, que corre en el puerto 9000
CMD ["php-fpm"]




