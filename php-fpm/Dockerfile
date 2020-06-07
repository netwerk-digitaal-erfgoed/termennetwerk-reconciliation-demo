FROM phpdockerio/php74-fpm:latest

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

RUN sed -i 's/9000/9002/' /etc/php/7.4/fpm/pool.d/z-overrides.conf
