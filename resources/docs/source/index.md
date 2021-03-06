---
title: API Reference

language_tabs:
  - bash
  - javascript

includes:

search: true

toc_footers:
  - <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---

<!-- START_INFO -->

# Info

Welcome to the generated API reference.
[Get Postman Collection](http://127.0.0.1:8000/docs/collection.json)

<!-- END_INFO -->

#AdminController

APIs for managing users

<!-- START_2b6e5a4b188cb183c7e59558cce36cb6 -->

## api/user

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost/api/user");

let headers = {
  "Content-Type": "application/json",
  Accept: "application/json",
};

fetch(url, {
  method: "GET",
  headers: headers,
})
  .then((response) => response.json())
  .then((json) => console.log(json));
```

> Example response (401):

```json
{
  "message": "Unauthenticated."
}
```

### HTTP Request

`GET api/user`

<!-- END_2b6e5a4b188cb183c7e59558cce36cb6 -->
<!-- START_48a7274ef96dde9930b6ae7c41c9607d -->

## api/auth/Admin_login

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/Admin_login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost/api/auth/Admin_login");

let headers = {
  "Content-Type": "application/json",
  Accept: "application/json",
};

fetch(url, {
  method: "POST",
  headers: headers,
})
  .then((response) => response.json())
  .then((json) => console.log(json));
```

### HTTP Request

`POST api/auth/Admin_login`

<!-- END_48a7274ef96dde9930b6ae7c41c9607d -->
<!-- START_30198815972bdbeb23df1f571c6177df -->

## Register a User.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/Admin_register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost/api/auth/Admin_register");

let headers = {
  "Content-Type": "application/json",
  Accept: "application/json",
};

fetch(url, {
  method: "POST",
  headers: headers,
})
  .then((response) => response.json())
  .then((json) => console.log(json));
```

### HTTP Request

`POST api/auth/Admin_register`

<!-- END_30198815972bdbeb23df1f571c6177df -->

#Ticket_templateController

APIs for managing users

<!-- START_3d0d02ce41ed87b8e39d5d89eb4c5126 -->

## api/auth/ticket_template

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/ticket_template" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost/api/auth/ticket_template");

let headers = {
  "Content-Type": "application/json",
  Accept: "application/json",
};

fetch(url, {
  method: "POST",
  headers: headers,
})
  .then((response) => response.json())
  .then((json) => console.log(json));
```

### HTTP Request

`POST api/auth/ticket_template`

<!-- END_3d0d02ce41ed87b8e39d5d89eb4c5126 -->
<!-- START_3b3c192376ee8622f9aa4205d0341738 -->

## api/auth/user_template_request

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/auth/user_template_request" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost/api/auth/user_template_request");

let headers = {
  "Content-Type": "application/json",
  Accept: "application/json",
};

fetch(url, {
  method: "GET",
  headers: headers,
})
  .then((response) => response.json())
  .then((json) => console.log(json));
```

### HTTP Request

`GET api/auth/user_template_request`

<!-- END_3b3c192376ee8622f9aa4205d0341738 -->

#TransactionController

APIs for managing users

<!-- START_51872e1304341611ec1374fe9c4e301a -->

## api/auth/transaction

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/transaction" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost/api/auth/transaction");

let headers = {
  "Content-Type": "application/json",
  Accept: "application/json",
};

fetch(url, {
  method: "POST",
  headers: headers,
})
  .then((response) => response.json())
  .then((json) => console.log(json));
```

### HTTP Request

`POST api/auth/transaction`

<!-- END_51872e1304341611ec1374fe9c4e301a -->

#general

<!-- START_870df6e22bd2fd83749ae1ec35e1df1c -->

## Create a new AuthController instance.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/auth/index" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost/api/auth/index");

let headers = {
  "Content-Type": "application/json",
  Accept: "application/json",
};

fetch(url, {
  method: "GET",
  headers: headers,
})
  .then((response) => response.json())
  .then((json) => console.log(json));
```

> Example response (200):

```json
[
  {
    "id": 1,
    "username": "admin1",
    "phone_number": "01321234",
    "email": "admin1@admin.com",
    "created_at": "2020-08-19T05:47:02.000000Z",
    "updated_at": "2020-08-19T05:47:02.000000Z"
  },
  {
    "id": 2,
    "username": "ibrahim1",
    "phone_number": "011222333441",
    "email": "ibrahim1@leanis.com",
    "created_at": "2020-08-19T06:24:56.000000Z",
    "updated_at": "2020-08-19T06:24:56.000000Z"
  },
  {
    "id": 3,
    "username": "admin",
    "phone_number": "01211321312",
    "email": "admin@admin.com",
    "created_at": "2020-08-19T07:45:13.000000Z",
    "updated_at": "2020-08-19T07:45:13.000000Z"
  }
]
```

### HTTP Request

`GET api/auth/index`

<!-- END_870df6e22bd2fd83749ae1ec35e1df1c -->
<!-- START_a925a8d22b3615f12fca79456d286859 -->

## Get a JWT via given credentials.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost/api/auth/login");

let headers = {
  "Content-Type": "application/json",
  Accept: "application/json",
};

fetch(url, {
  method: "POST",
  headers: headers,
})
  .then((response) => response.json())
  .then((json) => console.log(json));
```

### HTTP Request

`POST api/auth/login`

<!-- END_a925a8d22b3615f12fca79456d286859 -->
<!-- START_ade88ee476755a9706337cdabd78339b -->

## Register a User.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/registration" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost/api/auth/registration");

let headers = {
  "Content-Type": "application/json",
  Accept: "application/json",
};

fetch(url, {
  method: "POST",
  headers: headers,
})
  .then((response) => response.json())
  .then((json) => console.log(json));
```

### HTTP Request

`POST api/auth/registration`

<!-- END_ade88ee476755a9706337cdabd78339b -->
<!-- START_c397c7fecffe452bd9a06a16d7632f3f -->

## Get the authenticated User.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/auth/userProfile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost/api/auth/userProfile");

let headers = {
  "Content-Type": "application/json",
  Accept: "application/json",
};

fetch(url, {
  method: "GET",
  headers: headers,
})
  .then((response) => response.json())
  .then((json) => console.log(json));
```

> Example response (200):

```json
{}
```

### HTTP Request

`GET api/auth/userProfile`

<!-- END_c397c7fecffe452bd9a06a16d7632f3f -->
<!-- START_97063c2b34e2b9d1f9a42bc89a37455e -->

## api/auth/edit-records

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/auth/edit-records" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost/api/auth/edit-records");

let headers = {
  "Content-Type": "application/json",
  Accept: "application/json",
};

fetch(url, {
  method: "GET",
  headers: headers,
})
  .then((response) => response.json())
  .then((json) => console.log(json));
```

> Example response (200):

```json
{
  "id": 1,
  "username": "admin1",
  "phone_number": "01321234",
  "email": "admin1@admin.com",
  "created_at": "2020-08-19T05:47:02.000000Z",
  "updated_at": "2020-08-19T05:47:02.000000Z"
}
```

### HTTP Request

`GET api/auth/edit-records`

<!-- END_97063c2b34e2b9d1f9a42bc89a37455e -->
<!-- START_eb9cf49fb4a9152bc61fc1003cf1eedd -->

## api/auth/ticket_template_show

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/auth/ticket_template_show" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost/api/auth/ticket_template_show");

let headers = {
  "Content-Type": "application/json",
  Accept: "application/json",
};

fetch(url, {
  method: "GET",
  headers: headers,
})
  .then((response) => response.json())
  .then((json) => console.log(json));
```

> Example response (500):

```json
{
  "message": "Server Error"
}
```

### HTTP Request

`GET api/auth/ticket_template_show`

<!-- END_eb9cf49fb4a9152bc61fc1003cf1eedd -->
<!-- START_b22760c1db6499d118529fd20515c87e -->

## api/auth/ticket_template_update

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/auth/ticket_template_update" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost/api/auth/ticket_template_update");

let headers = {
  "Content-Type": "application/json",
  Accept: "application/json",
};

fetch(url, {
  method: "GET",
  headers: headers,
})
  .then((response) => response.json())
  .then((json) => console.log(json));
```

> Example response (200):

```json
null
```

### HTTP Request

`GET api/auth/ticket_template_update`

<!-- END_b22760c1db6499d118529fd20515c87e -->
<!-- START_61cb1a325cf1adc3638960373a67dada -->

## api/auth/ticket_template_update

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/ticket_template_update" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost/api/auth/ticket_template_update");

let headers = {
  "Content-Type": "application/json",
  Accept: "application/json",
};

fetch(url, {
  method: "POST",
  headers: headers,
})
  .then((response) => response.json())
  .then((json) => console.log(json));
```

### HTTP Request

`POST api/auth/ticket_template_update`

<!-- END_61cb1a325cf1adc3638960373a67dada -->
<!-- START_bd20df41c9f6d04f9af025a8624b136f -->

## api/auth/transaction_update

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/transaction_update" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost/api/auth/transaction_update");

let headers = {
  "Content-Type": "application/json",
  Accept: "application/json",
};

fetch(url, {
  method: "POST",
  headers: headers,
})
  .then((response) => response.json())
  .then((json) => console.log(json));
```

### HTTP Request

`POST api/auth/transaction_update`

<!-- END_bd20df41c9f6d04f9af025a8624b136f -->
<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

## Create a new AuthController instance.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost/register");

let headers = {
  "Content-Type": "application/json",
  Accept: "application/json",
};

fetch(url, {
  method: "GET",
  headers: headers,
})
  .then((response) => response.json())
  .then((json) => console.log(json));
```

> Example response (200):

```json
[
  {
    "id": 1,
    "username": "admin1",
    "phone_number": "01321234",
    "email": "admin1@admin.com",
    "created_at": "2020-08-19T05:47:02.000000Z",
    "updated_at": "2020-08-19T05:47:02.000000Z"
  },
  {
    "id": 2,
    "username": "ibrahim1",
    "phone_number": "011222333441",
    "email": "ibrahim1@leanis.com",
    "created_at": "2020-08-19T06:24:56.000000Z",
    "updated_at": "2020-08-19T06:24:56.000000Z"
  },
  {
    "id": 3,
    "username": "admin",
    "phone_number": "01211321312",
    "email": "admin@admin.com",
    "created_at": "2020-08-19T07:45:13.000000Z",
    "updated_at": "2020-08-19T07:45:13.000000Z"
  }
]
```

### HTTP Request

`GET register`

<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
<!-- START_3c0f49a36cbefdbd8152c751c117b4cd -->

## Register a User.

> Example request:

```bash
curl -X POST \
    "http://localhost/registration" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost/registration");

let headers = {
  "Content-Type": "application/json",
  Accept: "application/json",
};

fetch(url, {
  method: "POST",
  headers: headers,
})
  .then((response) => response.json())
  .then((json) => console.log(json));
```

### HTTP Request

`POST registration`

<!-- END_3c0f49a36cbefdbd8152c751c117b4cd -->
