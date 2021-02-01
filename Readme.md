docker-symfony
==============
![](https://img.shields.io/badge/Code-PHP-informational?style=flat&logo=php&logoColor=white&color=blueviolet)
![](https://img.shields.io/badge/Framework-Simfony_-informational?style=flat&logo=symfony&logoColor=white&color=blueviolet)
![](https://img.shields.io/badge/BBDD_-MySQL-informational?style=flat&logo=mysql&logoColor=white&color=blueviolet)

## Installation

1. Clone the project and go into the root code:

   ```
   ~$ git clone https://github.com/PeterPaulez/symfony_api
   ~$ cd symfony_api
   ```
   
2. Then, run next commands:
    
   ```
   ~$ make start

   ~$ make install
   ```

3. If you need some help about what you can do with make run next command:
    
   ```
   ~$ make help
   ```
   

## Working with the api

API: you can use with GET, POST, PUT, DELETE (PUT & DELETE needs /id) `http://localhost/api/products`


1. Send this data using POST:
   ```
   {
      "name": "Aleta de tiburón",
      "description": "Filetes de aleta de Tiburón sin espinas",
      "ean": "1234567890123",
      "sku": "567890",
      "categories": [1,2,3],
      "type": "fresco",
      "weight": "0.6",
      "enabled": "1"
   }
   ``` 
1. Send this data using POST:
   ```
   {
      "name": "Filetes de merluza",
      "description": "Filetes de merluza 4-5 unidades",
      "ean": "123456",
      "sku": "567890",
      "categories": [1,2,3],
      "type": "congelado",
      "weight": "0.9",
      "enabled": "1"
   }
   ``` 
1. Send this data using POST:
   ```
   {
      "name": "Judias verdes",
      "description": "Judias verdes enlatadas",
      "ean": "531465454564",
      "sku": "dsfasfasdfasf",
      "categories": [1,2,3],
      "type": "lata",
      "weight": "0.6",
      "enabled": "1"
   }
   ```
1. Send this data using POST:
   ```
   {
      "name": "Fingers de pollo",
      "description": "Fingers de pollo empanado, 10-12 unidades",
      "ean": "123456",
      "sku": "567890",
      "type": "congelado",
      "weight": "0.5",
      "enabled": "0"
   }
   ```