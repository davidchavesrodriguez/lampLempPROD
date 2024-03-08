## apache/Dockerfile
FROM debian:12

RUN apt-get update && apt-get install -y apache2  libapache2-mod-php8.2
RUN apt install -y php-zip php-intl 
# Redirixir a saída de erros á saída de erros estandar do contedor. Debería amosarse por pantalla ou con docker compose log <servizo>
RUN ln -sf /dev/stderr /var/log/apache2/error.log

#Instalar extensións de php.
RUN apt install -y php8.2-mysql php-xml php-gd  php-json php-curl php-mbstring


EXPOSE 80
EXPOSE 443

RUN a2enmod ssl
RUN a2enmod rewrite


WORKDIR /app


ENTRYPOINT [ "apache2ctl", "-D", "FOREGROUND"]