{
	"info": {
		"_postman_id": "a3e58a48-f09b-40a5-b334-79f72ca53790",
		"name": "Task7",
		"schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json",
		"_exporter_id": "34450681"
	},
	"item": [
		{
			"name": "Auth",
			"item": [
				{
					"name": "Login",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": [
								{
									"key": "token",
									"value": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2F1dGgvbG9naW4iLCJpYXQiOjE3MTYwMTkyMjMsImV4cCI6MTcxNjAyMjgyMywibmJmIjoxNzE2MDE5MjIzLCJqdGkiOiJSYlZ2SGJ3QUNTeFAyeDFWIiwic3ViIjoiMyIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.JeRLOGhfDe_G4YshasV3gL5nBAPYZqJ6pVoKrLazp4E",
									"type": "string"
								}
							]
						},
						"method": "POST",
						"header": [],
						"body": {
							"mode": "formdata",
							"formdata": [
								{
									"key": "email",
									"value": "test3@test.com",
									"type": "text"
								},
								{
									"key": "password",
									"value": "123456789",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://127.0.0.1:8000/api/auth/login",
							"protocol": "http",
							"host": [
								"127",
								"0",
								"0",
								"1"
							],
							"port": "8000",
							"path": [
								"api",
								"auth",
								"login"
							]
						}
					},
					"response": []
				},
				{
					"name": "Register",
					"request": {
						"auth": {
							"type": "noauth"
						},
						"method": "POST",
						"header": [
							{
								"key": "Accept",
								"value": "application/json"
							}
						],
						"body": {
							"mode": "formdata",
							"formdata": [
								{
									"key": "name",
									"value": "test3",
									"type": "text"
								},
								{
									"key": "email",
									"value": "test3@test.com",
									"type": "text"
								},
								{
									"key": "password",
									"value": "123456789",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://127.0.0.1:8000/api/auth/register",
							"protocol": "http",
							"host": [
								"127",
								"0",
								"0",
								"1"
							],
							"port": "8000",
							"path": [
								"api",
								"auth",
								"register"
							]
						}
					},
					"response": []
				},
				{
					"name": "logout",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": [
								{
									"key": "token",
									"value": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2F1dGgvbG9naW4iLCJpYXQiOjE3MTYwMTkyMjMsImV4cCI6MTcxNjAyMjgyMywibmJmIjoxNzE2MDE5MjIzLCJqdGkiOiJSYlZ2SGJ3QUNTeFAyeDFWIiwic3ViIjoiMyIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.JeRLOGhfDe_G4YshasV3gL5nBAPYZqJ6pVoKrLazp4E",
									"type": "string"
								}
							]
						},
						"method": "POST",
						"header": [],
						"url": {
							"raw": "http://127.0.0.1:8000/api/auth/logout",
							"protocol": "http",
							"host": [
								"127",
								"0",
								"0",
								"1"
							],
							"port": "8000",
							"path": [
								"api",
								"auth",
								"logout"
							]
						}
					},
					"response": []
				},
				{
					"name": "refresh",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": [
								{
									"key": "token",
									"value": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2F1dGgvbG9naW4iLCJpYXQiOjE3MTYxNDg3NzcsImV4cCI6MTcxNjE1MjM3NywibmJmIjoxNzE2MTQ4Nzc3LCJqdGkiOiJ1ZlFXRjBwc3BGREpuOFlRIiwic3ViIjoiMSIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ._wih2eq7Gk9C4SKhpYdXpzRuADc5Xj44YFZjGCvYzGM",
									"type": "string"
								}
							]
						},
						"method": "POST",
						"header": [],
						"url": {
							"raw": "http://127.0.0.1:8000/api/auth/refresh",
							"protocol": "http",
							"host": [
								"127",
								"0",
								"0",
								"1"
							],
							"port": "8000",
							"path": [
								"api",
								"auth",
								"refresh"
							]
						}
					},
					"response": []
				}
			]
		},
		{
			"name": "Category",
			"item": [
				{
					"name": "Get  Categories All",
					"protocolProfileBehavior": {
						"disableBodyPruning": true
					},
					"request": {
						"method": "GET",
						"header": [],
						"body": {
							"mode": "formdata",
							"formdata": []
						},
						"url": {
							"raw": "http://127.0.0.1:8000/api/categories/",
							"protocol": "http",
							"host": [
								"127",
								"0",
								"0",
								"1"
							],
							"port": "8000",
							"path": [
								"api",
								"categories",
								""
							]
						}
					},
					"response": []
				},
				{
					"name": "create category",
					"request": {
						"method": "POST",
						"header": [],
						"body": {
							"mode": "formdata",
							"formdata": []
						},
						"url": {
							"raw": "http://127.0.0.1:8000/api/create",
							"protocol": "http",
							"host": [
								"127",
								"0",
								"0",
								"1"
							],
							"port": "8000",
							"path": [
								"api",
								"create"
							]
						}
					},
					"response": []
				},
				{
					"name": "get category",
					"request": {
						"method": "GET",
						"header": []
					},
					"response": []
				},
				{
					"name": "delete category",
					"request": {
						"method": "DELETE",
						"header": [],
						"url": {
							"raw": ""
						}
					},
					"response": []
				},
				{
					"name": "update category",
					"request": {
						"method": "PUT",
						"header": [],
						"url": {
							"raw": "http://127.0.0.1:8000/api/categories/1",
							"protocol": "http",
							"host": [
								"127",
								"0",
								"0",
								"1"
							],
							"port": "8000",
							"path": [
								"api",
								"categories",
								"1"
							]
						}
					},
					"response": []
				}
			]
		},
		{
			"name": "Pasts",
			"item": [
				{
					"name": "get posts",
					"request": {
						"method": "GET",
						"header": [],
						"url": {
							"raw": "http://127.0.0.1:8000/api/posts/",
							"protocol": "http",
							"host": [
								"127",
								"0",
								"0",
								"1"
							],
							"port": "8000",
							"path": [
								"api",
								"posts",
								""
							]
						}
					},
					"response": []
				},
				{
					"name": "create post",
					"request": {
						"method": "POST",
						"header": [],
						"body": {
							"mode": "formdata",
							"formdata": [
								{
									"key": "tile",
									"value": "post1",
									"type": "text"
								},
								{
									"key": "category_id",
									"value": "2",
									"type": "text"
								},
								{
									"key": "body",
									"value": "post 1 body",
									"type": "text"
								}
							]
						}
					},
					"response": []
				},
				{
					"name": "get post only",
					"request": {
						"method": "GET",
						"header": [],
						"url": {
							"raw": "http://127.0.0.1:8000/api/posts/",
							"protocol": "http",
							"host": [
								"127",
								"0",
								"0",
								"1"
							],
							"port": "8000",
							"path": [
								"api",
								"posts",
								""
							]
						}
					},
					"response": []
				},
				{
					"name": "delete post",
					"request": {
						"method": "DELETE",
						"header": [],
						"url": {
							"raw": "http://127.0.0.1:8000/api/posts/",
							"protocol": "http",
							"host": [
								"127",
								"0",
								"0",
								"1"
							],
							"port": "8000",
							"path": [
								"api",
								"posts",
								""
							]
						}
					},
					"response": []
				}
			]
		},
		{
			"name": "Comments",
			"item": [
				{
					"name": "get comment",
					"request": {
						"method": "GET",
						"header": []
					},
					"response": []
				}
			]
		}
	]
}