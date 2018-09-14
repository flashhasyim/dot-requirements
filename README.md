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
composer
```
### Quick Start & Flow
```sh
$ git clone -b sprint1 https://github.com/hengkydev/dot-requirements dot_sprint1
$ cd dot_sprint1
$ composer install
```
copy file dan rename **.env.example** 
menjadi **.env**
lalu ubah berberapa konfigurasi sesuai yang di butuhkan  
```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost/folderproject/public

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=namadatabase
DB_USERNAME=usernamedatabase
DB_PASSWORD=passworddatabase
...
```
lalu jalankan command berikut
```sh
$ php artisan key:generate
$ php artisan migrate:fresh --seed
```

lanjut menjalankan test di bawah ini :  

### Test - 1
Integrasi dengan API province & city Rajaongkir (paket starter)  
https://rajaongkir.com/dokumentasi/starter  
  
**cara dan hasil :**  
kunjungi link di bawah ini untuk melihat hasil integrasi  
http://localhost/dot_sprint1/public/rajaongkir/provinces ( integration to get province list )  
http://localhost/dot_sprint1/public/rajaongkir/cities ( integration to get cities list )  
  
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


#### Get data province
ambil data province  
http://localhost/dot_sprint1/public/search/provinces

| Method    | Name          | Value             | Required |
| --------- |---------------| ----------------- | -------- |
| GET       | id            | 1                 | No       |

response yang di dapat apabila tidak ada parameter **id** :  
```
[
    {
        "id": 1,
        "province_id": 1,
        "province": "Bali",
        "created_at": "2018-09-13 09:43:35",
        "updated_at": "2018-09-13 09:43:35"
    },
    {
        "id": 2,
        "province_id": 2,
        "province": "Bangka Belitung",
        "created_at": "2018-09-13 09:43:35",
        "updated_at": "2018-09-13 09:43:35"
    },
    ....
]
```
response yang di dapat apabila ada parameter **id** :  
```
{
    "id": 1,
    "province_id": 1,
    "province": "Bali",
    "created_at": "2018-09-13 09:43:35",
    "updated_at": "2018-09-13 09:43:35"
}
```

#### Get data cities
ambil data cities  
http://localhost/dot_sprint1/public/search/cities

| Method    | Name          | Value             | Required |
| --------- |---------------| ----------------- | -------- |
| GET       | id            | 1                 | No       |
| GET       | province      | 21                | No       |

response yang di dapat apabila tidak ada parameter **id** dan **province** :  
```
[
    {
        "id": 1,
        "city_id": 1,
        "province_id": 21,
        "province": "Nanggroe Aceh Darussalam (NAD)",
        "type": "Kabupaten",
        "city_name": "Aceh Barat",
        "postal_code": "23681",
        "created_at": "2018-09-13 09:44:05",
        "updated_at": "2018-09-13 09:44:05"
    },
    {
        "id": 2,
        "city_id": 2,
        "province_id": 21,
        "province": "Nanggroe Aceh Darussalam (NAD)",
        "type": "Kabupaten",
        "city_name": "Aceh Barat Daya",
        "postal_code": "23764",
        "created_at": "2018-09-13 09:44:05",
        "updated_at": "2018-09-13 09:44:05"
    },
    ....
]
```
response yang di dapat apabila ada parameter **province** :  
```
[
    {
        "id": 1,
        "city_id": 1,
        "province_id": 21,
        "province": "Nanggroe Aceh Darussalam (NAD)",
        "type": "Kabupaten",
        "city_name": "Aceh Barat",
        "postal_code": "23681",
        "created_at": "2018-09-13 09:44:05",
        "updated_at": "2018-09-13 09:44:05"
    },
    {
        "id": 2,
        "city_id": 2,
        "province_id": 21,
        "province": "Nanggroe Aceh Darussalam (NAD)",
        "type": "Kabupaten",
        "city_name": "Aceh Barat Daya",
        "postal_code": "23764",
        "created_at": "2018-09-13 09:44:05",
        "updated_at": "2018-09-13 09:44:05"
    },
    ....
]
```
response yang di dapat apabila ada parameter **id** atau  
terdapat **id** dan **province** :  
```
{
    "id": 1,
    "city_id": 1,
    "province_id": 21,
    "province": "Nanggroe Aceh Darussalam (NAD)",
    "type": "Kabupaten",
    "city_name": "Aceh Barat",
    "postal_code": "23681",
    "created_at": "2018-09-13 09:44:05",
    "updated_at": "2018-09-13 09:44:05"
}
```

untuk kemudahan akses api saya menyediakan **postman collection**  
pada repository ini  
[dot.postman_collection.json](dot.postman_collection.json)
