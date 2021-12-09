FROM tutum/apache-php:latest
WORKDIR /app
COPY . .
EXPOSE 80