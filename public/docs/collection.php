[

    {

        "name":"User_Register"
         "request":{
            "Method":"POST"
            "RequestParams":[

                                {
                                "key": "username",
                                "value":  "admin",
                                "type": "text"
                                },
                                {
                                  "key": "username",
                                  "value": "ibrahim1",
                                  "type": "text"
                                },
                                {
                                  "key": "password",
                                  "value": "123456",
                                  "type": "text"
                                },
                                {
                                  "key": "phone_number",
                                  "value": "011222333441",
                                  "type": "text"
                                },
                                {
                                  "key": "email",
                                  "value": "ibrahim1@leanis.com",
                                  "type": "text"
                                },
                                {
                                  "key": "",
                                  "value": "",
                                  "type": "text",
                                  "disabled": true
                                }
        ]

                "url": {
                "raw": "http://127.0.0.1:8000/api/auth/registration",
                "protocol": "http",
                "host": ["127", "0", "0", "1"],
                "port": "8000",
                "path": ["api", "auth", "registration"]
              },

        ]

    },


{
    "name":"Get User Details"
    "request":{
        "Method":"GET"
        "RequestParams":[
            {
              "key": "token",
              "value": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9hdXRoXC9BZG1pbl9sb2dpbiIsImlhdCI6MTU5NzgxNjI0NywiZXhwIjoxNTk3OTAyNjQ3LCJuYmYiOjE1OTc4MTYyNDcsImp0aSI6ImRmVWIzdTFWTzJEZG50aEkiLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.784NnXuYgfR3TT04gPCfQQoXJc37y_6csLzN33411OE",
              "type": "string"
            }

        ]
          "url": {
					"raw": "http://127.0.0.1:8000/api/auth/userProfile",
					"protocol": "http",
					"host": ["127",	"0",	"0",	"1"],
					"port": "8000",
					"path": ["api","auth","userProfile"]
				}
    }
},




{
    "name":"Login"
    "request":{
        "method":"POST"
        "RequestParams":[
            {
							"key": "email",
							"value": "ibrahim1@leanis.com",
							"type": "text"
						},
						{
							"key": "password",
							"value": "123456",
							"type": "text"
            }
        ]
        "url": {
					"raw": "http://127.0.0.1:8000/api/auth/login",
					"protocol": "http",
					"host": ["127",	"0",	"0",	"1"],
					"port": "8000",
					"path": ["api","auth","login"]
				}
   }
},

    {
      "name": "Admin Regitration", // missing s
			"request": {
				"method": "POST",
        "requestParams":[
          {
							"key": "username",
							"value": "admin",
							"type": "text"
						},
						{
							"key": "password",
							"value": "admin123",
							"type": "text"
						},
						{
							"key": "phone_number",
							"value": "01211321312",
							"type": "text"
						},
						{
							"key": "email",
							"value": "admin@admin.com",
							"type": "text"
						}

      ]
        "url": {
					"raw": "http://127.0.0.1:8000/api/auth/Admin_register",
					"protocol": "http",
					"host": ["127",	"0",	"0",	"1"],
					"port": "8000",
					"path": ["api","auth","Admin_register"]
				}

    }
    },


    {
			"name": "Admin Login",
			"request": {
				"method": "POST",
        "requestParams":[
          {
							"key": "email",
							"value": "admin@admin.com\n",
							"type": "text"
						},
						{
							"key": "password",
							"value": "admin123",
							"type": "text"
						}
					]
				},

        "url": {
					"raw": "http://127.0.0.1:8000/api/auth/Admin_register",
					"protocol": "http",
					"host": ["127",	"0",	"0",	"1"],
					"port": "8000",
					"path": ["api","auth","Admin_register"]
				}
      },



        ]
















   ]
