FROM gitpod/workspace-mysql

ENV GIT_SSL_NO_VERIFY=true

# Install custom tools, runtimes, etc.
# For example "bastet", a command-line tetris clone:
# RUN brew install bastet
#
# More information: https://www.gitpod.io/docs/config-docker/
RUN sudo apt-get update && sudo apt-get purge -y \
        docker-ce \
        docker-ce-cli \
        containerd.io && \ 
    sudo apt-get upgrade -y && \
    sudo apt-get install -y \
        mysql-client postgresql-client telnet php-redis \
        docker-ce=5:19.03.15~3-0~ubuntu-focal \
        docker-ce-cli=5:19.03.15~3-0~ubuntu-focal && \
    sudo apt-get clean && sudo rm -rf /var/lib/apt/lists/* && \
    sudo curl -fsSL -o /usr/bin/runc https://github.com/opencontainers/runc/releases/download/v1.0.0-rc93/runc.amd64 &&\
    wget http://download.redis.io/redis-stable.tar.gz &&\
    tar xvzf redis-stable.tar.gz &&\
    cd redis-stable &&\
    make
    

RUN sudo apt-get install apt-transport-https ca-certificates -y &&\
    sudo update-ca-certificates

RUN mkdir -p src/pool/config/db-sync/secrets &&\
    echo 'catalyst' > src/pool/config/db-sync/secrets/postgres_user &&\
    echo 'v8hlDV0yMAHHlIurYupj' > src/pool/config/db-sync/secrets/postgres_password &&\
    echo 'catalyst' > src/pool/config/db-sync/secrets/postgres_db
