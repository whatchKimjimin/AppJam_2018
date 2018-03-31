# 오매불망

### DB schema





##### User schema

id : number

useremail: String

userpassword : String

created : TimeStamp



#### User API

> Login : /user		GET

* Request

```
useremail : String,
userpassword : String
```

* Response

> 200

```
User schema
```

> 300

```
try again
```



> Join : /user/create		GET

- Request

```
useremail : String,
userpassword : String
```

- Response

> 200

```
0 OR 1
```

> 400

```
email check
```



##### Bunge schema

id : number

useremail: number

content: String

created: TimeStamp



### Bunge API

> Bunge Create : /bunge	GET

* Request

```
useremail : String,
content : Stirng
```

* Response

> 200

```
1
```



> Bunge List: 	/bunge	GET

* Request

```
offset : number, ( 리스트 시작 위치 )
limit : number ( 리스트 가져오는 개수 ) 
```

* Response

> 200

```
Bunge Schema LIST
```



> Bunge Show :	/bunge/{ BUNGE_ID }	GET

* Request

```
BUNFE_ID : number
```

* Response

> 200

```
Bunge Schema
```





##### BungeComment schema

id : number

bungeid : number

userid : number

content: String

created TimeStamp





#### BungeComment API



> BungeComment Create : /bungeComment/create	GET

- Request

```
bungeid : number,
useremail : String,
content : String
```

- Response

> 200

```
0 or 1
```





> BungeComment LIST : /bungeComment		GET

- Request

```
bungeid : number
```

- Response

> 200

```
BungeComment Schema LIST
```





