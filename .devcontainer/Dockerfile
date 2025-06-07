FROM php:8.0-cli

ENV DEBIAN_FRONTEND=noninteractive
# Install Dependencies

RUN apt-get update -y -qq && \
    apt-get install -y -qq --no-install-recommends \
        git zip unzip make build-essential sudo libcurl4-openssl-dev && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /workspace

RUN docker-php-ext-install curl && \
    docker-php-ext-enable curl

RUN yes | pecl install xdebug && \
    docker-php-ext-enable xdebug && \
    echo "xdebug.mode=debug,coverage" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

COPY php.ini /usr/local/etc/php/conf.d/devcontainer.ini

RUN useradd -ms /bin/bash vscode && \
    usermod -aG sudo vscode && \
    echo "vscode ALL=(ALL) NOPASSWD:ALL" >> /etc/sudoers && \
    chown -R vscode /workspace

USER vscode
