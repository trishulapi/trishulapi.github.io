<!--
    Documentation for TrishulApi\Core\App
    Author: Shyam Dubey
    Since: v1.0.0
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TrishulApi\Core\App Class Documentation</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2em; background: #f9f9f9; }
        h1, h2, h3 { color: #2c3e50; }
        code, pre { background: #f4f4f4; padding: 2px 6px; border-radius: 3px; }
        .section { margin-bottom: 2em; }
        table { border-collapse: collapse; width: 100%; margin-bottom: 1em; }
        th, td { border: 1px solid #ccc; padding: 8px; }
        th { background: #eaeaea; }
        .method { margin-bottom: 1.5em; }
        .param { color: #2980b9; }
        .return { color: #27ae60; }
        .note { background: #fffbe6; border-left: 4px solid #ffe066; padding: 8px; margin: 1em 0; }
    </style>
</head>
<body>
    <h1>TrishulApi\Core\App</h1>
    <p>
        <strong>Namespace:</strong> <code>TrishulApi\Core</code><br>
        <strong>Author:</strong> Shyam Dubey<br>
        <strong>Since:</strong> v1.0.0
    </p>

    <div class="section">
        <h2>Overview</h2>
        <p>
            The <code>App</code> class is the main entry point for the Trishul API framework. It is responsible for bootstrapping the application, initializing core components such as routing, exception handling, CORS security, logging, and Swagger documentation. This class should be instantiated and configured in your application's <code>index.php</code> or main bootstrap file.
        </p>
    </div>

    <div class="section">
        <h2>Usage Example</h2>
        <pre><code class="language-php">
use TrishulApi\Core\App;

$app = new App();

// Optionally set a custom global exception handler
$app->set_global_exception_handler(\App\Exception\CustomExceptionHandler::class);

// Optionally set allowed CORS domains
$app->set_allowed_domains(['https://example.com', 'https://api.example.com']);

// Optionally set log directory
$app->set_log_dir('/var/log/trishul');

// Optionally set .env file path
$app->set_env_path(__DIR__ . '/.env');

// Start the application (must be called to handle requests)
$app->start();
        </code></pre>
    </div>

    <div class="section">
        <h2>Methods</h2>

        <div class="method">
            <code>public function start(): void</code>
            <p>
                Starts the application by initializing global exception handling, CORS security, and routing. This should be called after all configuration is done.
            </p>
        </div>

        <div class="method">
            <code>public function set_global_exception_handler($exception_class): void</code>
            <p>
                Sets a custom global exception handler class. By default, uses <code>ExceptionHandler::class</code>. Call this before <code>start()</code> for custom error handling and logging.
            </p>
            <table>
                <tr><th>Parameter</th><th>Type</th><th>Description</th></tr>
                <tr>
                    <td><span class="param">$exception_class</span></td>
                    <td>string</td>
                    <td>Fully qualified class name of the exception handler.</td>
                </tr>
            </table>
        </div>

        <div class="method">
            <code>public function set_allowed_domains($domains): void</code>
            <p>
                Sets the allowed domains for CORS (Cross-Origin Resource Sharing). Accepts an array of domain strings.
            </p>
            <table>
                <tr><th>Parameter</th><th>Type</th><th>Description</th></tr>
                <tr>
                    <td><span class="param">$domains</span></td>
                    <td>array</td>
                    <td>List of allowed domains.</td>
                </tr>
            </table>
        </div>

        <div class="method">
            <code>public function get_allowed_domains(): array</code>
            <p>
                Returns the list of currently allowed CORS domains.
            </p>
        </div>

        <div class="method">
            <code>public function set_log_dir($dir): void</code>
            <p>
                Sets the directory where logs will be stored. Throws <code>InvalidArgumentException</code> if the directory is invalid.
            </p>
            <table>
                <tr><th>Parameter</th><th>Type</th><th>Description</th></tr>
                <tr>
                    <td><span class="param">$dir</span></td>
                    <td>string</td>
                    <td>Path to the log directory.</td>
                </tr>
            </table>
        </div>

        <div class="method">
            <code>public function get_swagger()</code>
            <p>
                Returns the singleton instance of the Swagger documentation generator (<code>TrishulSwagger</code>).
            </p>
        </div>

        <div class="method">
            <code>public function set_env_path($path): void</code>
            <p>
                Sets the path to the environment file (<code>.env</code>) for configuration.
            </p>
            <table>
                <tr><th>Parameter</th><th>Type</th><th>Description</th></tr>
                <tr>
                    <td><span class="param">$path</span></td>
                    <td>string</td>
                    <td>Path to the <code>.env</code> file.</td>
                </tr>
            </table>
        </div>

        <div class="method">
            <code>public function get_env_path(): string</code>
            <p>
                Returns the path to the environment file currently set.
            </p>
        </div>
    </div>

    <div class="section">
        <h2>Notes</h2>
        <ul>
            <li>Call <code>start()</code> after all configuration to initialize the application.</li>
            <li>Set the global exception handler early to ensure all exceptions are caught and logged.</li>
            <li>Use <code>set_allowed_domains()</code> to control CORS for your API endpoints.</li>
            <li>Use <code>set_log_dir()</code> to specify where logs should be written.</li>
            <li>Use <code>set_env_path()</code> if your environment file is not in the default location.</li>
        </ul>
    </div>

    <div class="section">
        <h2>Related Classes</h2>
        <ul>
            <li><code>TrishulApi\Core\Exception\ExceptionHandler</code></li>
            <li><code>TrishulApi\Core\Http\Router</code></li>
            <li><code>TrishulApi\Core\Log\LoggerFactory</code></li>
            <li><code>TrishulApi\Core\Security\CorsSecurity</code></li>
            <li><code>TrishulApi\Core\Swagger\TrishulSwagger</code></li>
        </ul>
    </div>

    <div class="section">
        <h2>Changelog</h2>
        <ul>
            <li><strong>v1.0.0</strong> - Initial release with application bootstrap, exception handling, CORS, logging, and Swagger support.</li>
        </ul>
    </div>
</body>
</html>