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
 <tr>
  <td>Update</td>
  <td>http://localhost:8000/api/post/1/edit</td>
  <td>PUT</td>
  <td>{
    "message": "Data berhasil di update",
    "data_baru": {
        "id": 7,
        "username": "adminbaru1",
        "email": "adminbaru@gmail.com",
        "password": "$2y$10$XBljXDYBY1sG.1XcPe8AM.blciiV0k0cKUAeD3HVDXultxSJeSHQW",
        "first_name": "rizal",
        "last_name": "admin",
        "address": "bwi jl. 123",
        "city": "banyuwangi",
        "province": "jatim",
        "country": "indonesia",
        "created_at": "2021-04-17T07:26:57.000000Z",
        "updated_at": "2021-04-17T16:54:28.000000Z",
        "deleted_at": null
    }
}</td>
  <td>{
    "username" : "adminbaru1",
    "email" : "adminbaru@gmail.com",
    "first_name": "rizal",
    "last_name": "admin",
    "address": "bwi jl. 123",
    "city": "banyuwangi",
    "province": "jatim",
    "country": "indonesia"
}</td>
  <td>application/json</td>
 </tr>
 <tr>
  <td>Delete</td>
  <td>http://localhost:8000/api/post/14/delete</td>
  <td>delete</td>
  <td>{
    "message": "Data berhasil di hapus"
}</td>
  <td> - </td>
  <td> - </td>
 </tr>
 <tr>
  <td>get all user</td>
  <td>http://localhost:8000/api/post/show-all-data</td>
  <td>get</td>
  <td>{
    "data": [
        {
            "id": 7,
            "username": "adminbaru1",
            "first_name": "rizal",
            "last_name": "admin",
            "address": "bwi jl. 123",
            "city": "banyuwangi",
            "province": "jatim",
            "country": "indonesia"
        },
        {
            "id": 12,
            "username": "childe2",
            "first_name": "ajax",
            "last_name": "khisyam",
            "address": "bwi jl. 123",
            "city": "banyuwangi",
            "province": "jatim",
            "country": "indonesia"
        },
        {
            "id": 13,
            "username": "diluc2",
            "first_name": "ajax",
            "last_name": "diluc",
            "address": "bwi jl. 123",
            "city": "banyuwangi",
            "province": "jatim",
            "country": "indonesia"
        },
        {
            "id": 15,
            "username": "eren2",
            "first_name": "eren",
            "last_name": "yeager",
            "address": "bwi jl. 123",
            "city": "banyuwangi",
            "province": "jatim",
            "country": "indonesia"
        },
        {
            "id": 16,
            "username": "allain2247",
            "first_name": "rizal",
            "last_name": "khisyam",
            "address": "bwi jl. 123",
            "city": "banyuwangi",
            "province": "jatim",
            "country": "indonesia"
        }
    ]
}</td>
  <td> - </td>
  <td> - </td>
 </tr>
 <tr>
  <td>Get One User By Id</td>
  <td>http://localhost:8000/api/post/get-by-id/15</td>
  <td>get</td>
  <td>{
    "data": {
        "id": 15,
        "username": "eren2",
        "email": "eren2@gmail.com",
        "password": "$2y$10$GCzvNkbxZhXpdeE9JtrPvePfVokDMuP8lNAlkJWMy8X4cOEu8sLfy",
        "first_name": "eren",
        "last_name": "yeager",
        "address": "bwi jl. 123",
        "city": "banyuwangi",
        "province": "jatim",
        "country": "indonesia",
        "created_at": "2021-04-17T07:34:36.000000Z",
        "updated_at": "2021-04-17T07:34:36.000000Z",
        "deleted_at": null
    }
}</td>
  <td> - </td>
  <td> - </td>
 </tr>
 <tr>
  <td>Bulk Insert</td>
  <td>http://localhost:8000/api/post/create-many</td>
  <td>post</td>
  <td>{
    "message": "Semua data berhasil dimasukkan ke database"
}</td>
  <td>{
    "list_users": [
        {
            "username" : "allbedooo",
            "email" : "childe2sad@gmail.com",
            "password": "poertu",
            "first_name": "ajax",
            "last_name": "khisyam",
            "address": "bwi jl. 123",
            "city": "banyuwangi",
            "province": "jatim",
            "country": "indonesia"
        },
        {
            "username" : "eulaa",
            "email" : "diluc2sadsa@gmail.com",
            "password": "poertu",
            "first_name": "ajax",
            "last_name": "diluc",
            "address": "bwi jl. 123",
            "city": "banyuwangi",
            "province": "jatim",
            "country": "indonesia"
        },
        {
            "username" : "xiao",
            "email" : "jean2xa@gmail.com",
            "password": "jean",
            "first_name": "jean",
            "last_name": "khisyam",
            "address": "bwi jl. 123",
            "city": "banyuwangi",
            "province": "jatim",
            "country": "indonesia"
        },
        {
            "username" : "sucrose",
            "email" : "eren2sadsa@gmail.com",
            "password": "poertu",
            "first_name": "eren",
            "last_name": "yeager",
            "address": "bwi jl. 123",
            "city": "banyuwangi",
            "province": "jatim",
            "country": "indonesia"
        }
    ]
}</td>
  <td>application/json</td>
 </tr>
 <tr>
  <td>Bulk Update</td>
  <td>http://localhost:8000/api/post/edit-many/1,2,3,4</td>
  <td>put</td>
  <td></td>
  <td>{
    "list_users": [
        {
            "username" : "childe22",
            "email" : "childe2@gmail.com",
            "password": "poertu",
            "first_name": "ajax",
            "last_name": "khisyam",
            "address": "bwi jl. 123",
            "city": "banyuwangi",
            "province": "jatim",
            "country": "indonesia"
        },
        {
            "username" : "diluc222",
            "email" : "diluc2@gmail.com",
            "password": "poertu",
            "first_name": "ajax",
            "last_name": "diluc",
            "address": "bwi jl. 123",
            "city": "banyuwangi",
            "province": "jatim",
            "country": "indonesia"
        },
        {
            "username" : "jean222",
            "email" : "jean2@gmail.com",
            "password": "jean",
            "first_name": "jean",
            "last_name": "khisyam",
            "address": "bwi jl. 123",
            "city": "banyuwangi",
            "province": "jatim",
            "country": "indonesia"
        },
        {
            "username" : "eren222",
            "email" : "eren2@gmail.com",
            "password": "poertu",
            "first_name": "eren",
            "last_name": "yeager",
            "address": "bwi jl. 123",
            "city": "banyuwangi",
            "province": "jatim",
            "country": "indonesia"
        }
    ]
}</td>
  <td>application/json</td>
 </tr>
 <tr>
  <td>Bulk Delete</td>
  <td>http://localhost:8000/api/post/delete-many/8,9,10</td>
  <td>delete</td>
  <td>{
    "message": "Data yang dipilih berhasil di hapus"
}</td>
  <td></td>
  <td></td>
 </tr>
</table>
