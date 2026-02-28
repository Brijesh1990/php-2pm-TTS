🔹 Laravel Basics (1–25)

What is Laravel?

What are the main features of Laravel?

What is the difference between Laravel and other PHP frameworks?

What is MVC architecture?

How does Laravel implement MVC?

What are Service Providers?

What is the purpose of artisan command?

How to install Laravel?

What is Composer and how is it used in Laravel?

What is .env file in Laravel?

What is configuration caching?

How to enable debugging in Laravel?

What is the default storage folder in Laravel?

What is routing in Laravel?

What is the difference between web.php and api.php routes?

What is route parameter?

What is named route?

What is route group?

What is middleware in Laravel?

What is the difference between global and route middleware?

What is CSRF token in Laravel?

How to protect forms from CSRF attacks?

What is a closure in routing?

What is RESTful resource controller in Laravel?

How to create a controller using Artisan?

🔹 Routing & Controllers (26–50)

How to define route parameters?

What is optional route parameter?

What is route model binding?

What is implicit binding?

What is explicit binding?

How to create route groups with middleware?

How to create prefix in route group?

What is namespace in routes?

How to redirect routes?

How to return a view from a route?

How to return JSON response from a controller?

What is the difference between Route::get() and Route::post()?

How to create REST API using Laravel routes?

How to use Route::resource()?

How to define multiple middleware on a route?

How to restrict HTTP methods for a route?

How to use route caching?

What is the purpose of Route::fallback()?

How to create named routes using name()?

How to generate URL using named routes?

What is a controller constructor?

How to pass data from controller to view?

What is abort() function?

What is redirect()->back()?

What is dependency injection in controllers?

🔹 Middleware & Security (51–75)

What is middleware in Laravel?

How to create a custom middleware?

What is HandleCors middleware?

What is Authenticate middleware?

How to assign middleware to route?

How to assign middleware to controller?

How to use middleware parameters?

How to restrict access to authenticated users?

How to restrict access to admin only?

What is CSRF protection?

How does Laravel generate CSRF token?

How to exclude route from CSRF verification?

How to prevent XSS in Laravel?

How to encrypt data in Laravel?

How to hash passwords in Laravel?

How to use Laravel’s Hash facade?

What is Auth::attempt()?

How to logout a user?

How to restrict routes based on roles?

How to check user permissions?

What is Gate in Laravel?

How to define Policy?

How to authorize actions using Policy?

What is bcrypt()?

How to store secure cookies?

🔹 Requests & Responses (76–100)

How to get request data in Laravel?

What is Request facade?

How to get query parameters?

How to get form input?

How to get JSON data in request?

How to validate request data?

What is FormRequest class?

How to create custom request validation?

How to display validation errors in Blade?

How to return JSON errors?

How to handle file uploads?

How to validate file uploads?

How to store uploaded files?

What is Storage facade?

How to download files from Laravel?

How to return JSON response?

How to return custom HTTP status codes?

How to redirect to another route?

How to redirect with flash data?

What is session() helper?

How to retrieve session data?

How to remove session data?

How to flash messages?

What is cookie() helper?

How to retrieve cookies in Laravel?

🔹 Blade Templating (101–125)

What is Blade?

How to create Blade template?

How to extend a layout?

How to use @section and @yield?

How to include partials using @include?

How to pass data to partials?

What are Blade loops?

What are Blade conditionals?

How to escape data in Blade?

What is {!! !!} in Blade?

How to use @csrf in Blade?

How to display validation errors?

How to use @foreach?

How to use @forelse?

How to use @if, @elseif, @else?

How to define Blade components?

How to pass data to Blade components?

What are inline components?

How to create reusable Blade components?

How to use @stack and @push?

What is @json directive?

What is @route directive?

How to include JavaScript in Blade?

How to include CSS in Blade?

How to cache Blade templates?

🔹 Eloquent ORM (126–160)

What is Eloquent ORM?

What is the difference between Eloquent and Query Builder?

How to define a model?

What is a migration in Laravel?

How to create migration?

How to run migration?

How to rollback migration?

How to create relationships?

What is one-to-one relationship?

What is one-to-many relationship?

What is many-to-many relationship?

How to define hasOne() and belongsTo()?

How to define belongsToMany()?

How to use pivot table?

How to define polymorphic relationships?

What is with() eager loading?

What is lazy loading?

What is N+1 problem?

How to avoid N+1 problem?

How to perform query scopes?

How to define global scope?

How to define local scope?

What is fillable property?

What is guarded property?

What is mass assignment?

How to perform soft deletes?

What is withTrashed()?

What is onlyTrashed()?

How to restore soft deleted records?

How to use Accessors in Eloquent?

How to use Mutators in Eloquent?

How to use attribute casting?

How to use timestamps?

How to disable timestamps?

How to create model factories?

🔹 Query Builder (161–180)

What is Laravel Query Builder?

How to select data using Query Builder?

How to filter using where()?

How to use orWhere()?

How to use whereIn()?

How to use whereBetween()?

How to sort results using orderBy()?

How to limit results using limit()?

How to join tables?

How to use leftJoin and rightJoin?

How to use aggregates like count(), sum()?

How to use groupBy()?

How to use having()?

How to update records using Query Builder?

How to delete records using Query Builder?

How to insert records using Query Builder?

How to use pluck()?

How to use firstOrCreate()?

How to use updateOrInsert()?

Difference between get() and first()?

🔹 Events, Jobs & Queues (181–200)

What are events in Laravel?

How to create an event?

How to create a listener?

How to fire an event?

What is EventServiceProvider?

What is broadcasting in Laravel?

How to broadcast events using Pusher?

What are jobs in Laravel?

How to create a job?

How to dispatch a job?

What is a queue?

What is queue:work?

What is queue connection?

What are synchronous and asynchronous jobs?

How to retry failed jobs?

How to delay jobs?

What is ShouldQueue interface?

How to monitor queues?

What is job middleware?

How to clean up failed jobs?