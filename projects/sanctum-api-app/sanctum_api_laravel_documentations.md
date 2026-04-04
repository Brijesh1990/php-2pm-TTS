# CRUD REST API with authentication using Laravel 9 + Sanctum, including login, register, and product management, and how to test everything in Postman.


# Introduction

In this tutorial, we will create a CRUD REST API with authentication using Laravel 9 and Sanctum. We will implement user registration, login, and product management functionalities. Finally, we will test our API using Postman.

# what is Sanctum ?

Laravel Sanctum provides a featherweight authentication system for SPAs (single page applications), mobile applications, and simple token-based APIs. Sanctum allows each user of your application to generate multiple API tokens for their account. These tokens may be granted abilities/scopes which specify which actions the tokens are allowed to perform.

# what is REST API ?

A REST API (Representational State Transfer Application Programming Interface) is a set of rules and conventions for building and interacting with web services. It allows clients to communicate with servers using standard HTTP methods (GET, POST, PUT, DELETE) to perform CRUD (Create, Read, Update, Delete) operations on resources. REST APIs are stateless, meaning each request from a client to the server must contain all the information needed to understand and process the request.

# REST API with Laravel 9 + Sanctum

# REST api methods :

GET : Retrieve data from the server. Example: GET /api/products - Get all products.

POST : Create new data on the server. Example: POST /api/products - Create a new product.

PUT : Update existing data on the server. Example: PUT /api/products/1 - Update the product with ID 1.

DELETE : Remove data from the server. Example: DELETE /api/products/1 - Delete the product with ID 1.

# what is API ? 

An API (Application Programming Interface) is a set of rules and protocols that allows different software applications to communicate with each other. It defines how requests and responses should be structured, enabling developers to interact with a service or application without needing to understand its internal workings. APIs can be used for various purposes, such as accessing data, performing operations, or integrating with third-party services.

# what is JSON ?

JSON (JavaScript Object Notation) is a lightweight data interchange format that is easy for humans to read and write, and easy for machines to parse and generate. It is commonly used for transmitting data in web applications, especially in REST APIs. JSON represents data as key-value pairs, arrays, and nested objects, making it a flexible format for structuring data.


# examples of json :

```json
{
  "name": "John Doe",
  "email": "john.doe@example.com"

}

```

# examples of multiple json objects :

```json
[
  {
    "id": 1,
    "name": "Product 1",
    "description": "Description of Product 1",
    "price": 100
  },
  {
    "id": 2,
    "name": "Product 2",
    "description": "Description of Product 2",
    "price": 200
  },


  {
    "id": 3,
    "name": "Product 3",
    "description": "Description of Product 3",
    "price": 300
  },


]

``` 




1. **Setting Up Laravel Project**: First, create a new Laravel project using Composer. Run the following command in your terminal:
   ```bash
   composer create-project --prefer-dist laravel/laravel sanctum-api

   ```

2. Install Sanctum
    ```bash
    composer require laravel/sanctum

    ```


3. Publish the Sanctum configuration and migration files:
    ```bash
    php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
    ```

4. Configure Sanctum

In app/Models/User.php:

```use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
}
```


5. Create Models & Migrations
Product Model

```bash
php artisan make:model Product -m
```

6. Edit migration:
``public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description')->nullable();
        $table->integer('price');
        $table->timestamps();
    });
}
```


Run:
```bashphp artisan migrate
```


5. Create Auth Controller

```bash
php artisan make:controller API/AuthController
```

6. app/Http/Controllers/API/AuthController.php

```
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'status' => true,
            'token' => $token
        ]);
    }

    public function login(Request $request)
    {
        if (!auth()->attempt($request->only('email', 'password'))) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid credentials'
            ], 401);
        }

        $user = auth()->user();
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'status' => true,
            'token' => $token
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'status' => true,
            'message' => 'Logged out'
        ]);
    }
}
```

6. Create Product Controller

php artisan make:controller API/ProductController --api

ProductController.php

```
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    public function show($id)
    {
        return Product::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return response()->json($product);
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return response()->json(['message' => 'Deleted']);
    }
}


```

7. Define API Routes

routes/api.php

```

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProductController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::apiResource('products', ProductController::class);
});

```

8. Add Fillable Fields

app/Models/Product.php

```
protected $fillable = [
    'name',
    'description',
    'price'
];

```

9. Run Server

```bash
php artisan serve
```

10. Test in Postman

Use Postman.

🔹 Register

POST /api/register


```
{
  "name": "John",
  "email": "john@example.com",
  "password": "123456"
}

```

Login

POST /api/login
```
  {
  "email": "john@example.com",
  "password": "123456"
}

```

Use Token

In Postman → Headers:

```
Authorization: Bearer YOUR_TOKEN
Accept: application/json
```

CRUD APIs
✅ Create Product

POST /api/products

```
{
  "name": "Laptop",
  "description": "Gaming laptop",
  "price": 50000
}
```
✅ Get All Products

GET /api/products

✅ Get Single Product
GET /api/products/{id}

✅ Update Product
PUT /api/products/{id}

```
{
  "name": "Updated Laptop",
  "description": "Updated description",
  "price": 55000
}

```

✅ Delete Product
DELETE /api/products/{id}

That's it! You now have a fully functional CRUD REST API with authentication using Laravel 9 and Sanctum. You can test all the endpoints in Postman as described above.




# download postman from https://www.postman.com/downloads/ and test the API endpoints as described in step 10.






