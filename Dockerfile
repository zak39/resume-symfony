FROM dunglas/frankenphp

ARG USER=www-data

RUN \
    useradd -D ${USER}; \
    setcap CAP_NET_BIND_SERVICE=+eip /usr/local/bin/frankenphp; \
    chown -R ${USER}:${USER} /data/caddy && chown -R ${USER}:${USER} /config/caddy

# Be sure to replace "your-domain-name.example.com" by your domain name
#ENV SERVER_NAME=zakode.dev
#ENV SERVER_NAME=localhost
#ENV SERVER_NAME="zak.dev.localhost www.zak.dev.localhost localhost"
# If you want to disable HTTPS, use this value instead:
ENV SERVER_NAME=:80

# Enable PHP production settings
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

ENV APP_ENV=production

RUN install-php-extensions intl

# Copy the PHP files of your project in the public directory
# If you use Symfony or Laravel, you need to copy the whole project instead:
#COPY . /app

USER ${USER}