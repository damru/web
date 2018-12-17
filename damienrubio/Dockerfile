FROM node:alpine as angular-builder

# install missing mandatory dependencies
RUN npm install -g @angular/cli
RUN apk update && apk add --no-cache git

# set working directory
RUN mkdir /app
WORKDIR /app

## Storing node modules on a separate layer will prevent unnecessary npm installs at each build
COPY package*.json ./
RUN npm install

# add app
COPY . .

# build app for production
RUN npm run build --prod
