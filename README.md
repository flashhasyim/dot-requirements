## Technical Backend Engineer - Sprint 2
Hasil pengerjaan test dari DOT indonesia untuk backend enginer **sprint 2**

### Deskripsi test 
Meningkatnya kebutuhan Web service, tim engineer memutuskan untuk membuat  
swapable implementation​ untuk endpoint pencarian provinsi dan kota.  
  - Membuat sumber data pencarian province & cities bisa melalui database​ atau direct  
    API​ raja ongkir (swapable implementation). Proses swap implementasi dapat dilakukan  
    melalui konfigurasi tanpa merubah source code yang sudah dibuat.
  - Menyediakan API login agar endpoint pencarian hanya bisa diakses oleh authorized  
    user saja.
  - Membuat unit test / API test agar web service tetap reliable & maintainable  
### Requirements
```
PHP >= 7.0 
```
### Quick Start & Flow
```sh
$ git clone -b sprint2 https://github.com/hengkydev/dot-requirements dot_sprint2
$ composer install
$ php artisan migrate:refresh --seed
$ php artisan passport:install --force
```
### Accessing API
untuk menjawab test no 2  
> Menyediakan API login agar endpoint pencarian hanya bisa diakses oleh authorized user saja
setiap URL API pencarian di wajibkan menggunakan token  
karena API bersifat authenticatable 
#### Register API
daftar user untuk pengakesan API  
http://localhost/folderproject/public/api/register

| Method    | Name          | Value             | Required | 
| --------- |---------------| ----------------- | -------- |
| POST      | name          | example           | Yes      |
| POST      | email         | example@gmail.com | Yes      |
| POST      | password      | 12345678          | Yes      |
| POST      | c_password    | 12345678          | Yes      |

setelah register akan langsung mendapatkan token yang  
di gunakan untuk mengakses API pencarian  
response yang di dapat :  
```
{
    "success": {
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJ...."
    }
}
```

#### Login API
login user untuk pengakesan API  
http://localhost/folderproject/public/api/login

| Method    | Name          | Value             | Required |
| --------- |---------------| ----------------- | -------- |
| POST      | email         | example@gmail.com | Yes      |
| POST      | password      | 12345678          | Yes      |

setelah login akan langsung mendapatkan token yang  
di gunakan untuk mengakses API pencarian  
response yang di dapat :  
```
{
    "success": {
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJ...."
    }
}
```
#### Get data province
ambil data province  
http://localhost/folderproject/public/api/search/province

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
http://localhost/folderproject/public/api/search/cities

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

### Swapable Implementation
untuk menjawab test no 1
> Membuat sumber data pencarian province & cities bisa melalui database​ atau direct API​ raja ongkir (swapable implementation). Proses swap implementasi dapat dilakukan melalui konfigurasi tanpa merubah source code yang sudah dibuat.

untuk mengubah data pencarian menjadi lokal maupun menggunakan API raja ongkir  
dengan hanya mengganti konfigurasi di lakukan langkah berikut  
ganti konfigurasi di **.env**  
**LOCAL_RESOURCES** ganti ke **true** untuk pencarian lokal  
**LOCAL_RESOURCES** ganti ke **false** untuk pencarian online API    
```
# Custom conf for swapable implementation
# if false then use online resources
LOCAL_RESOURCES=true
```
lalu akses API pencarian seperti pada bagian **Accessing API**

### Unit Testing
untuk menjawab test no 3
> Membuat unit test / API test agar web service tetap reliable & maintainable  

terdapat 7 test di antaranya
 - **test signin**  
   melakukan test login pada API
 - **test register**  
   melakukan test register pada API
 - **test auth**  
   melakukan test register dan menyipan data token pada header
 - **test get province**  
   melakukan test mendapatkan data semua province dengan header
 - **test find province**  
   melakukan test mendapatkan data 1 province dengan header
 - **test get cities**  
   melakukan test mendapatkan data semua cities dengan header
 - **test find cities**  
   melakukan test mendapatkan data 1 cities dengan header
   
unit test menggunakan **phpunit** dan component dari laravel  
jalankan command di bawah ini 
```
$ vendor\bin\phpunit
```

