## Technical Backend Engineer - Sprint 1
Hasil pengerjaan test dari DOT indonesia untuk backend enginer **sprint 1**

### Deskripsi test 
  - Integrasi dengan API province & city Rajaongkir (paket starter)  
    https://rajaongkir.com/dokumentasi/starter
  - Membuat artisan command​ yg melakukan fetching API data provinsi & kota dan data  
    di simpan ke database
  - Membuat REST API untuk pencarian provinsi & kota dengan endpoint berikut:  
    ```
    a. [GET] /search/provinces?id={province_id}  
    b. [GET] /search/cities?id={city_id}  
    ```
    Data API pencarian ini mengambil dari database.    
### Requirements
```
PHP >= 7.0 
```
### Quick Start & Flow
```sh
$ git clone -b sprint1 https://github.com/hengkydev/dot-requirements dot_sprint1
$ composer install
$ php artisan migrate:refresh --seed
```

### Test - 1
Integrasi dengan API province & city Rajaongkir (paket starter)  
https://rajaongkir.com/dokumentasi/starter  
  
**cara dan hasil :**  
```
$ php artisan serve
```
kunjungi link di bawah ini untuk melihat hasil integrasi  
http://localhost:8080/rajaongkir/province ( integration to get province list )  
http://localhost:8080/rajaongkir/cities ( integration to get cities list )  
  
### Test - 2
Membuat artisan command​ yg melakukan fetching API data provinsi & kota dan data  
di simpan ke database  
**cara dan hasil:**
```sh
$ php artisan localization:dump
```
the output will like this :  
```sh
Setting up dump data and seeding with Raja Ongkir API .... .
 2/2 [============================] 100%
Dump & seed data is done !
```
Cek database untuk melihat hasil data yang telah di masukan  
  
### Test - 3
Membuat REST API untuk pencarian provinsi & kota dengan endpoint berikut:  
```
a. [GET] /search/provinces?id={province_id}  
b. [GET] /search/cities?id={city_id}
```  
Data API pencarian ini mengambil dari database.      
**cara dan hasil :**
```sh
$ php artisan serve
```
akses url berikut :  
http://localhost:8080/search/provinces ( all data provinces )  
http://localhost:8080/search/provinces?id=1 ( get detail provinces with id 1 )  
http://localhost:8080/search/cities ( all data cities )  
http://localhost:8080/search/cities?id=1 ( get detail cities with id 1 )  
atau import file **postman** yang ada pada repo  
[dot.postman_collection.json](dot.postman_collection.json)
