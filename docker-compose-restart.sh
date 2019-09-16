#!/usr/bin/env sh

docker-compose down --remove-orphans
docker container prune -f
docker volume prune -f
# docker image prune -f
docker-compose up -d
