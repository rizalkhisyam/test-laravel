<h1>Laravel 8 - REST API</h1>
<p>API ini dibuat menggunakan framework laravel 8</p>

#### Berikut model pada API
* Profile
#### Berikut daftar end point pada API
* end point insert list user
* end point update list user
* end point delete user
* end point get all user
* end point get user by id
* end point bulk insert list user
* end point bulk update list user
* end point bulk delete user

#### Langkah-langkah pemakaian
Untuk menggunakan API anda dapat meng-clone repository atau dapat men-download file berupa zip.
###### `git clone https://github.com/rizalkhisyam/REST-API.git`

##### 1. Setting .env
Setelah file project didownload atau diclone, copy file .env.example file dan rename file tersebut menjadi .env saja. Buat database dan koneksikan database yang anda buat pada file .env.

`DB_CONNECTION=mysql`<br>
`DB_HOST=127.0.0.1`<br>
 `DB_PORT=3306` <br>
`DB_DATABASE=(---isi dengan database yang anda buat--)`<br>
`DB_USERNAME=root`<br>
`DB_PASSWORD=`<br>

##### 2. Composer Install
Masuk ke directory project melalui terminal dan jalankan perintal pada terminal untuk menginstall compose package project
`composer install`

##### 3. Generate Key
Pada .env file APP_KEY akan secara otomatis kosong, untuk mendapatkan APP_KEY yang baru masuk pada directory project dengan terminal lalu jalankan perintah berikut:
`php artisan key:generate`

##### 4. Run Migration
Setelah database sudah sudah diubah, jalankan perintah migration untuk membuat table migrasi ke database dengan menjalankan perintah sebagai berikut:
`php artisan migrate`

#### Dokumentasi API end point

<table>
  <tr>
    <th>Name</th>
    <th>API Url</th>
    <th>Method</th>
    <th>Response</th>
    <th>Body Params</th>
    <th>Header Params</th>
  </tr>
  <tr>
    <td>Insert</td>
    <td>http://localhost:8000/api/post/create</td>
    <td>POST</td>
    <td>{
    "message": "User baru berhasil ditambahkan",
    "data": {
        "username": "allain2247",
        "email": "allain2337@gmail.com",
        "password": "$2y$10$DpMiWgMDJurYePn1zNehBOtc5f7dxN2NLGIhV1EVq8T2M2xhQhv7S",
        "first_name": "rizal",
        "last_name": "khisyam",
        "address": "bwi jl. 123",
        "city": "banyuwangi",
        "province": "jatim",
        "country": "indonesia",
        "updated_at": "2021-04-17T16:48:28.000000Z",
        "created_at": "2021-04-17T16:48:28.000000Z",
        "id": 16
    }
    }</td>
   <td>{
    "username" : "allain2247",
    "email" : "allain2337@gmail.com",
    "password": "poertu",
    "first_name": "rizal",
    "last_name": "khisyam",
    "address": "bwi jl. 123",
    "city": "banyuwangi",
    "province": "jatim",
    "country": "indonesia"
}</td>
   <td>application/json</td>
  </tr>
  
</table>
