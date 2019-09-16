#!/usr/bin/env bash

DIR="$(dirname "$(readlink -f "$0")")"
docker build -t damru/web-resume ${DIR}
docker push damru/web-resume