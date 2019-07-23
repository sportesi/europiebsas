FROM nginx:1.17-alpine

RUN apk update && apk add \
    php7 \
	php7-fpm \
	php7-xml \
	php7-mbstring \
	php7-pdo \
	php7-dom \
	php7-gd \
	php7-pdo_pgsql \
	php7-zip \
	php7-openssl \
	php7-json \
	php7-phar \
	php7-zlib \
	php7-session \
    vim \
	unzip \
	zip \
	ca-certificates \
	curl \
	git \
	supervisor \
	nodejs \
	nodejs-npm

COPY ./docker/nginx.conf /etc/nginx/conf.d/default.conf

COPY ./docker/supervisord.conf /root/supervisord.conf

WORKDIR /usr/share/nginx/html

RUN rm -rf /usr/share/nginx/html/*

COPY ./ /usr/share/nginx/html

CMD supervisord -n -c /root/supervisord.conf