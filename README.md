# Тестовое приложение на zf3

Для запуска воспользуйтесь следующей последовательностью комманд

1) Запустить контейнер
``` 
docker-compose up
```

2) Установка зависимостей
```
docker exec -it zf3testapp_zf_1 php composer.phar install 
```
или зайти в контейнер и вополнить там комманду ```php composer.phar install```.