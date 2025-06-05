<!-- Router.php Detailed Documentation -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Router Class - Detailed Documentation</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2em; background: #f9f9f9; }
        h1, h2, h3 { color: #2c3e50; }
        code, pre { background: #f4f4f4; padding: 2px 4px; border-radius: 3px; }
        table { border-collapse: collapse; width: 100%; margin-bottom: 2em; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background: #eee; }
        .method { margin-bottom: 2em; }
        .params { margin-bottom: 1em; }
        .desc { margin-bottom: 1em; }
        .example { background: #eef6fa; border-left: 4px solid #3498db; padding: 1em; margin-bottom: 2em; }
    </style>
</head>
<body>
    <h1>Router Class Documentation</h1>
    <p>
        <strong>Namespace:</strong> <code>TrishulApi\Core\Http</code><br>
        <strong>Author:</strong> Shyam Dubey<br>
        <strong>Since:</strong> v1.0.0<br>
        <strong>Version:</strong> v1.0.0
    </p>
    <p>
        The <code>Router</code> class is the core of the Trishul API framework's routing system. It allows you to define HTTP routes, group them, apply middlewares, and control the request/response lifecycle in a structured and extensible way.
    </p>

    <h2>Key Features</h2>
    <ul>
        <li>Register routes for all major HTTP methods (GET, POST, PUT, DELETE, MERGE).</li>
        <li>Attach middlewares to individual routes or globally.</li>
        <li>Group routes under a common parent URL.</li>
        <li>Support for route parameters (e.g., <code>/user/{id}</code>).</li>
        <li>Swagger/OpenAPI documentation metadata support.</li>
        <li>Dependency injection for controllers/services.</li>
        <li>Customizable response handling and middleware chaining.</li>
    </ul>

    <h2>Method Reference</h2>

    <div class="method">
        <h3>static get($url, $callback, $middlewares = [], ...)</h3>
        <div class="desc">
            Registers a GET route.<br>
            <strong>Usage:</strong> Handles HTTP GET requests at the specified URL, calling the provided controller or service method.
        </div>
        <div class="params">
            <strong>Parameters:</strong>
            <ul>
                <li><code>$url</code> (string): The route URL (e.g., <code>"/user/{id}"</code>).</li>
                <li><code>$callback</code> (string): The handler in <code>Class@method</code> format.</li>
                <li><code>$middlewares</code> (array): Optional array of middleware class names.</li>
                <li>Additional parameters for Swagger documentation and response metadata.</li>
            </ul>
        </div>
        <strong>Returns:</strong> <code>array</code> (route definition)
    </div>

    <div class="method">
        <h3>static post($url, $callback, $middlewares = [], ...)</h3>
        <div class="desc">
            Registers a POST route.<br>
            <strong>Usage:</strong> Handles HTTP POST requests.
        </div>
        <div class="params">
            <strong>Parameters:</strong> Same as <code>get()</code>.
        </div>
        <strong>Returns:</strong> <code>array</code>
    </div>

    <div class="method">
        <h3>static put($url, $callback, $middlewares = [], ...)</h3>
        <div class="desc">
            Registers a PUT route.<br>
            <strong>Usage:</strong> Handles HTTP PUT requests.
        </div>
        <div class="params">
            <strong>Parameters:</strong> Same as <code>get()</code>.
        </div>
        <strong>Returns:</strong> <code>array</code>
    </div>

    <div class="method">
        <h3>static delete($url, $callback, $middlewares = [], ...)</h3>
        <div class="desc">
            Registers a DELETE route.<br>
            <strong>Usage:</strong> Handles HTTP DELETE requests.
        </div>
        <div class="params">
            <strong>Parameters:</strong> Same as <code>get()</code>.
        </div>
        <strong>Returns:</strong> <code>array</code>
    </div>

    <div class="method">
        <h3>static merge($url, $callback, $middlewares = [], ...)</h3>
        <div class="desc">
            Registers a MERGE route.<br>
            <strong>Usage:</strong> Handles HTTP MERGE requests (custom method).
        </div>
        <div class="params">
            <strong>Parameters:</strong> Same as <code>get()</code>.
        </div>
        <strong>Returns:</strong> <code>array</code>
    </div>

    <div class="method">
        <h3>static parent($url, array $childrens, $middlewares = [], $except=[]): void</h3>
        <div class="desc">
            Groups multiple routes under a parent URL and applies middlewares to all or selected children.<br>
            <strong>Usage:</strong> Useful for organizing related endpoints (e.g., all user-related routes under <code>/users</code>).
        </div>
        <div class="params">
            <ul>
                <li><code>$url</code> (string): Parent URL (e.g., <code>"/users"</code>).</li>
                <li><code>$childrens</code> (array): Array of child routes (use <code>children()</code> method).</li>
                <li><code>$middlewares</code> (array): Middlewares for all children.</li>
                <li><code>$except</code> (array): Exempted routes (e.g., <code>["/users/login" => RequestType::POST]</code>).</li>
            </ul>
        </div>
    </div>

    <div class="method">
        <h3>static children($method, $url, $callback, ...)</h3>
        <div class="desc">
            Helper to define a child route for use with <code>parent()</code>.
        </div>
        <div class="params">
            <ul>
                <li><code>$method</code> (string): HTTP method (e.g., <code>"GET"</code>).</li>
                <li><code>$url</code> (string): Child URL (e.g., <code>"/all"</code>).</li>
                <li><code>$callback</code> (string): Handler in <code>Class@method</code> format.</li>
                <li>Additional parameters for middlewares, Swagger, etc.</li>
            </ul>
        </div>
        <strong>Returns:</strong> <code>array</code>
    </div>

    <div class="method">
        <h3>static include($routes)</h3>
        <div class="desc">
            Includes routes from another file or array.
        </div>
        <div class="params">
            <ul>
                <li><code>$routes</code> (array): Array of route definitions.</li>
            </ul>
        </div>
    </div>

    <div class="method">
        <h3>static set_global_middlewares($middlewares, $except = [])</h3>
        <div class="desc">
            Sets global middlewares for all routes, with optional exceptions.<br>
            <strong>Usage:</strong> Ensures certain middlewares (e.g., authentication, logging) run on every request unless explicitly exempted.
        </div>
        <div class="params">
            <ul>
                <li><code>$middlewares</code> (array|string): Middleware class names.</li>
                <li><code>$except</code> (array): Routes to exempt (e.g., <code>["/login" => RequestType::POST]</code>).</li>
            </ul>
        </div>
    </div>

    <div class="method">
        <h3>static init()</h3>
        <div class="desc">
            Initializes the router, matches the incoming request to a route, and dispatches it.<br>
            <strong>Call this once in your entrypoint (e.g., <code>index.php</code>) after defining all routes.</strong>
        </div>
    </div>

    <div class="method">
        <h3>static get_routes()</h3>
        <div class="desc">
            Returns all registered routes as an array.
        </div>
        <strong>Returns:</strong> <code>array</code>
    </div>

    <h2>Detailed Example</h2>
    <div class="example">
        <strong>Basic Usage:</strong>
        <pre>
use TrishulApi\Core\Http\Router;
use App\Controller\UserController;
use App\Middleware\AuthMiddleware;

// Register a GET route
Router::get("/user/{id}", UserController::class . "@getUser", [AuthMiddleware::class], "Get user", "Returns user by ID");

// Register a POST route
Router::post("/user", UserController::class . "@createUser", [AuthMiddleware::class], "Create user", "Creates a new user");

// Register a DELETE route
Router::delete("/user/{id}", UserController::class . "@deleteUser", [AuthMiddleware::class]);

// Register a PUT route
Router::put("/user/{id}", UserController::class . "@updateUser", [AuthMiddleware::class]);

// Set global middlewares (applies to all routes except login/register)
Router::set_global_middlewares(
    [AuthMiddleware::class, 'LoggingMiddleware'],
    ["/login" => "POST", "/register" => "POST"]
);

// Grouping routes under a parent
Router::parent("/users", [
    Router::children("GET", "/all", UserController::class . "@getAllUsers"),
    Router::children("POST", "/add", UserController::class . "@addUser")
], [AuthMiddleware::class], ["/users/all" => "GET"]);

// Initialize the router (should be called once, after all routes are defined)
Router::init();
        </pre>
    </div>

    <h2>Route Parameters</h2>
    <p>
        You can define dynamic segments in your route URLs using curly braces, e.g. <code>/user/{id}</code>. These will be passed as parameters to your controller method.
    </p>

    <h2>Middlewares</h2>
    <ul>
        <li>Middlewares must implement <code>MiddlewareInterface</code>.</li>
        <li>They can be applied per-route, per-group, or globally.</li>
        <li>Global middlewares can be exempted for specific routes.</li>
    </ul>

    <h2>Swagger/OpenAPI Support</h2>
    <p>
        Each route registration method accepts parameters for summary, description, response codes, tags, and more, which are used to generate Swagger documentation automatically.
    </p>

    <h2>Error Handling</h2>
    <ul>
        <li>Throws <code>ResourceNotFoundException</code> if no route matches.</li>
        <li>Throws <code>ClassNotFoundException</code> or <code>MethodNotFoundException</code> for invalid handlers.</li>
        <li>Throws <code>InvalidResponseTypeException</code> if the controller does not return a valid <code>Response</code> object.</li>
    </ul>

    <h2>Best Practices</h2>
    <ul>
        <li>Always call <code>Router::init()</code> after defining all routes.</li>
        <li>Use <code>Router::parent()</code> and <code>Router::children()</code> for better organization of related endpoints.</li>
        <li>Leverage middlewares for cross-cutting concerns like authentication, logging, and validation.</li>
        <li>Document your routes using the Swagger parameters for better API visibility.</li>
    </ul>
</body>
</html>