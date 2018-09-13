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
PHP 7.0 >=
```
### Quick Start & Flow
```sh
$ git clone -b sprint1 https://github.com/hengkydev/dot-requirements dot_sprint1
$ git composer install
$ php artisan migrate:refresh --seed
```
nb : artisan migrate and seed command do action similiar like 2nd Test Description above
