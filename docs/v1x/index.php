<?php
require_once '../../includes/define.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Trishul API Documentation V1.x</title>
    <?php require_once '../../includes/header.php'; ?>
</head>

<body id="page-top">
    <?php include_once '../../includes/navbar.php'; ?>
    <div class="container-fluid">
        <section class="page-section">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Trishul API Documentation</h2>
                    <h3 class="section-subheading text-muted">Version 1.x.x | Last updated on - <?php echo LAST_UPDATED_ON; ?></h3>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p class="large text-muted">Welcome to the Trishul API documentation for version 1.x.x. This documentation provides detailed information on how to use the Trishul API, including endpoints, request and response formats, and examples.</p>
                        <p class="large text-muted">For the latest updates, please visit our <a href="<?php echo GITHUB_URL; ?>" target="_blank" rel="noopener noreferrer">GitHub repository</a>.</p>
                        <p class="large text-muted">Last updated on: <strong><?php echo LAST_UPDATED_ON; ?></strong></p>
                        <p class="large text-muted">For any issues or contributions, please refer to our <a href="<?php echo TRISHUL_API_GITHUB_ACCOUNT_URL; ?>" target="_blank" rel="noopener noreferrer">GitHub account</a>.</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-lg-4 sticky-top">
                <h3 class="text-uppercase">Menu</h3>
                <ul>
                    <li><a href="#getting-started">Getting Started</a></li>
                    <li><a href="#project-structure">Project Structure</a></li>
                    <li><a href="#app">App Initializing</a></li>
                    <li><a href="#router">Create Routes</a></li>
                    <li><a href="#trishulclient">Trishul Client</a></li>
                    <li><a href="#request">Request</a></li>
                    <li><a href="#response">Response</a></li>
                    <li><a href="#logging">Logging</a></li>
                    <li><a href="#MiddlewareInterface">MiddlewareInterface</a></li>
                    <li><a href="#db">DB</a></li>
                    <li><a href="#model">Models</a></li>

                </ul>
            </div>
            <div class="col-lg-8">
                <div id="getting-started">
                    <h2 class="text-uppercase">Getting Started</h2>
                    <p class="large text-muted">To get started with the Trishul API, you will need to follow these steps:</p>
                    <p>If your system has php installed and composer installed.</p>
                    <ol>
                        <li>Open terminal and type <span class="text-bold text-underline"><i>composer create-project trishulapi/framework app_name</i></span> </li>
                        <li>This will install the required files in app_name directory in the current path.</li>
                        <li>cd app_name </li>
                        <li>Run the command <span class="text-bold text-underline"><i>composer update</i></span> to update all required dependencies.</li>
                        <li>Run the command <span class="text-bold text-underline"><i>php -S localhost:8000</i></span></li>
                        <li>Application will start at localhost:8000</li>
                    </ol>
                </div>
                <div id="project-structure">
                    <h2 class="text-uppercase">Project Structure</h2>
                    <p class="large text-muted">The Trishul API project structure is designed to be simple and easy to navigate. Below is an overview of the main directories and files:</p>
                    <ul>
                        <li><strong>src/</strong> - Contains the application code, including controllers, models, Services etc.</li>
                        <li><strong>vendor/</strong> - Contains all the dependencies installed via Composer.</li>
                        <li><strong>composer.json</strong> - The Composer configuration file that lists the dependencies of the project.</li>
                        <li><strong>.env</strong> - Environment variables for the application.</li>
                        <li><strong>README.md</strong> - A markdown file that provides an overview of the project and how to get started.</li>
                        <li><strong>index.php</strong> - The main entry point for the application. This file is responsible for bootstrapping the application and handling requests.</li>
                </div>
                <div id="app">
                    <h2 class="text-uppercase">App Initializing </h2>
                    <p class="large text-muted"><code>TrishulApi\Core\App</code> class is the main class which bootstraps the application.</p>

                    <ol>
                        <li>Open index.php file and create an object of <code>TrishulApi\Core\App</code> class.</li>
                        <li> <span class="text-bold text-underline"><i>$app = TrishulApi\Core\App();</i></span> </li>
                        <li>This class has several useful methods which are used to setup the application correctly.
                            <ul>
                                <li><code>set_exception_handler($class)</code> function is used to set the custom global exception handler for your application. By default TrishulApi manages it.</li>
                                <li><code>set_allowed_domains(array $domains)</code> used for managing CORS for your application. Add your domains like localhost:4200, https://trishulapi.com, http://example.com. Only these domains will be allowed to interact with the application.</li>
                                <li><code>set_env_path($filepath)</code> sets the .env path so all the environment properties will be picked from the mentioned file.</li>
                                <li><code>set_log_dir($dir)</code> takes one param $dir. This is used to set the directory to create and save the logging messages in files (auto generates day wise).</li>
                                <li><code>get_swagger()</code> returns the object of TrishulSwagger class which is used to generate swagger documentation. You can then use methods of TrishulSwagger class to manage the swagger properties.</li>
                                <li><code>start()</code> function should be added in the last of index.php file so that all the configuration is loaded correctly.</li>
                            </ul>
                        </li>
                    </ol>


                    <p>For more information on App class, please refer to the <a href="./App.php" target="_blank" rel="noopener noreferrer">App documentation</a>.</p>
                </div>
                <div id="router">
                    <h2 class="text-uppercase">Create Routes</h2>
                    <p class="large text-muted">To create routes in the Trishul API, you will need to follow these steps:</p>
                    <p><code>TrishulApi\Core\Http\Router</code> class is responsible for creating routes.</p>
                    <ol>
                        <li>Open index.php file and add a route</li>
                        <li>Use the <span class="text-bold text-underline"><i>Router::get()</i></span> method to create a GET route.</li>
                    </ol>
                    <pre><code class="language-php">
use TrishulApi\Core\Http\Router;
Router::get('/hello', ["hello"=>"world"]); </code></pre>
                    <p>In the above example, we have created a GET route for the path <span class="text-bold text-underline">/hello</span> that returns a JSON response {"hello":"world"}.</p>
                    <p>You can also create POST, PUT, DELETE routes using the respective methods <span class="text-bold text-underline"><i>Router::post()</i></span>, <span class="text-bold text-underline"><i>Router::put()</i></span>, and <span class="text-bold text-underline"><i>Router::delete()</i></span>.</p>
                    <p>For more information on creating routes, please refer to the <a href="./Http/Router.php" target="_blank" rel="noopener noreferrer">Router documentation</a>.</p>
                </div>
                <div id="request">
                    <h2 class="text-uppercase">Request</h2>
                    <p class="large text-muted">To handle requests in the Trishul API, you can use the <code>TrishulApi\Core\Http\Request</code> class. This class provides methods to access request data, headers, and other information related to the incoming HTTP request.</p>
                    <p>Here is an example of how to use the <code>Request</code> class:</p>
                    <p class="alert alert-success">
                        TrishulApi provides Request class object on the class which you use in Router::get("/", Controller::class."@method").
                    </p>
                    <p>In such case Request class object will automatically be injected in the Constructor of Controller class.</p>
                    <code>
                        <pre>
Class Controller {
    public function __construct(TrishulApi\Core\Http\Request $request) {
        // You can access request data here
        $this->request = $request;
    }

    public function method() {
        // Access request data
        $data = $this->request->header()->get('key'); // Get a specific key from the request header
        
        $body = $this->request->body(); // Get the request body
        $queryParams = $this->request->query_params(); // Get query parameters from the URL
    }
}</pre>
                    </code>
                    <p>For more information on Request Class, please refer to the <a href="./Http/Request.php" target="_blank" rel="noopener noreferrer">Request documentation</a>.</p>
                </div>
                <div id="response">
                    <h2 class="text-upperca">Response</h2>
                    p class="large text-muted">To handle responses in the Trishul API, you can use the <code>TrishulApi\Core\Http\Response</code> class. This class provides methods to set the response status code, headers, and body content. It also allows you to send JSON responses easily.</p>
                    <p>Here is an example of how to use the <code>Response</code> class:</p>
                    <code>
                        <pre>
Class Controller {
    public function __construct(TrishulApi\Core\Http\Request $request) {
        // You can access request data here
        $this->request = $request;
    }

    public function method() {
        return Response::json(HttpStatus::OK, [
            'message' => 'Hello, World!',
            'data' => ['key' => 'value']
        ]);
    }
}
</pre>
                    </code>
                    <p>For more information on Response Class, please refer to the <a href="./Http/Response.php" target="_blank" rel="noopener noreferrer">Response documentation</a>.</p>
                </div>



                <div id="logging">
                    <h2 class="text-uppercase">Logging</h2>
                    p class="large text-muted">Trishul API provides a simple logging mechanism to log messages to files. You can use the <code>TrishulApi\Core\Log\LoggerFactory</code> class to log messages at different levels (info, warning, error, etc.).</p>
                    <p>Here is an example of how to use the <code>LoggerFactory</code> class:</p>
                    <code>
                        <pre>
use TrishulApi\Core\Log\LoggerFactory;
$logger = LoggerFactory::get_instance(Controller::class);
$logger->info('This is an info message');
$logger->warn('This is a warning message');
$logger->error('This is an error message');
</pre>
                    </code>
                    <p>For more information on LoggerFactory Class, please refer to the <a href="./Log/LoggerFactory.php" target="_blank" rel="noopener noreferrer">LoggerFactory documentation</a>.</p>
                </div>
                <div id="MiddlewareInterface">
                    <h2 class="text-uppercase">MiddlewareInterface</h2>
                    <p class="large text-muted">Trishul API allows you to create middleware to handle requests and responses before they reach the controller. You can implement the <code>TrishulApi\Core\Http\MiddlewareInterface</code> interface to create your own middleware.</p>
                    <p>Here is an example of how to create a middleware:</p>    
                    <code>
                        <pre>
use TrishulApi\Core\Http\MiddlewareInterface;
class MyMiddleware implements MiddlewareInterface {
    public function handle(TrishulApi\Core\Http\Request $request):Request {
        // Perform some action before the request is processed
        $request->header()->set('X-Custom-Header', 'MyValue');
        // Call the next middleware or controller
        return $request;
    }

    public function handle_response(TrishulApi\Core\Http\Response $response):Response {
        // Perform some action before the response is sent
        $response->header()->set('X-Custom-Response-Header', 'MyValue');
        // Return the modified response
        return $response;
    }
                        </pre>
                    </code>
                    <p>For more information on MiddlewareInterface Class, please refer to the <a href="./Middleware/MiddlewareInterface.php" target="_blank" rel="noopener noreferrer">MiddlewareInterface documentation</a>.</p>
    </div>
    <div id="db">
        <h2 class="text-uppercase">DB</h2>
        <p class="large text-muted">Trishul API provides a class for providing PDO object.</p>
        <p>Here is an example of how to use the <code>TrishulApi\Core\Data\DB</code> class:</p>
        <code>
            <pre>
use TrishulApi\Core\Data\DB;
$pdo = DB::get_connection();
// Use the PDO object to execute queries
$statement = $pdo->prepare('SELECT * FROM users WHERE id = :id');
$statement->execute(['id' => 1]);
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
            </pre>
        </code>
        <p>For more information on DB Class, please refer to the <a href="./Data/DB.php" target="_blank" rel="noopener noreferrer">DB documentation</a>.</p>

    </div>
    <div id="model">
        <h2 class="text-uppercase">Model</h2>
        <p class="large text-muted">Trishul API provides a base model class that you can extend to create your own models. The base model class provides methods for interacting with the database using PDO.</p>
        <p>Here is an example of how to create a model:</p>
        <code>
            <pre>
use TrishulApi\Core\Data\Model;
class User extends Model {
    public string $table_name = 'users'; // Specify the table name
    public string $primary_key = 'user_id'; // Define primary key for the model default is id
    public function __construct() {
        parent::__construct();
    }
}
            </pre>
        </code>
        <p>Model class provides several functions to extract the data from the database.</p>
         <p>For more information on Model Class, please refer to the <a href="./Data/Model.php" target="_blank" rel="noopener noreferrer">Model documentation</a>.</p>
    </div>
    <div id="trishulclient">
        <h2 class="text-uppercase">
            TrishulClient
        </h2>
        <p class="large text-muted">Trishul API provides a client class that you can use to make HTTP requests to other APIs. The <code>TrishulApi\Core\Http\TrishulClient</code> class provides methods for making GET, POST, PUT, DELETE requests.</p>
        <p>Here is an example of how to use the <code>TrishulClient</code> class:</p>
        <code>
            <pre>
use TrishulApi\Core\Http\TrishulClient;
$client = new TrishulClient();
$response = $client->get_mono('https://api.example.com/data');
            </pre>
        </code>
        <p>For more information on TrishulClient Class, please refer to the <a href="./Http/TrishulClient.php" target="_blank" rel="noopener noreferrer">TrishulClient documentation</a>.</p>
    </div>
            </div>
        </div>

    </div>

    <?php require_once '../../includes/footer.php'; ?>
</body>

</html>