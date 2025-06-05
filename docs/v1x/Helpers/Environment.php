<!--
    Documentation for TrishulApi\Core\Helpers\Environment
    Author: Trishul API Team
    Since: v1.0.0
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TrishulApi\Core\Helpers\Environment Class Documentation</title>
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
    <h1>TrishulApi\Core\Helpers\Environment</h1>
    <p>
        <strong>Namespace:</strong> <code>TrishulApi\Core\Helpers</code><br>
        <strong>Author:</strong> Trishul API Team<br>
        <strong>Since:</strong> v1.0.0
    </p>

    <div class="section">
        <h2>Overview</h2>
        <p>
            The <code>Environment</code> class provides utility methods for accessing and managing environment variables in the Trishul API framework. It supports loading variables from a <code>.env</code> file as well as from the system environment, making it easy to manage configuration in different environments (development, staging, production).
        </p>
    </div>

    <div class="section">
        <h2>Usage Example</h2>
        <pre><code class="language-php">
use TrishulApi\Core\Helpers\Environment;

// Get an environment variable (from .env file or system)
$dbHost = Environment::get('DB_HOST');

// Get with a default value if not set
$debug = Environment::get('DEBUG', false);

// Set an environment variable at runtime
Environment::set('APP_MODE', 'production');

// Check if a variable exists in the .env file
if (Environment::has('DB_PASSWORD')) {
    // Do something
}
        </code></pre>
    </div>

    <div class="section">
        <h2>Methods</h2>
        <div class="method">
            <code>public static function get(string $key, $default = null, $from_file = true)</code>
            <p>
                Retrieves the value of an environment variable. Checks the <code>.env</code> file (if configured) first, then falls back to the system environment. Returns the default value if not found.
            </p>
            <table>
                <tr><th>Parameter</th><th>Type</th><th>Description</th></tr>
                <tr>
                    <td><span class="param">$key</span></td>
                    <td>string</td>
                    <td>Name of the environment variable.</td>
                </tr>
                <tr>
                    <td><span class="param">$default</span></td>
                    <td>mixed</td>
                    <td>Default value if the variable is not set.</td>
                </tr>
                <tr>
                    <td><span class="param">$from_file</span></td>
                    <td>bool</td>
                    <td>Whether to check the .env file (default: true).</td>
                </tr>
            </table>
            <p class="return"><strong>Returns:</strong> mixed</p>
        </div>

        <div class="method">
            <code>public static function has($key): bool</code>
            <p>
                Checks if the specified environment variable exists in the loaded <code>.env</code> file.
            </p>
            <table>
                <tr><th>Parameter</th><th>Type</th><th>Description</th></tr>
                <tr>
                    <td><span class="param">$key</span></td>
                    <td>string</td>
                    <td>Name of the environment variable.</td>
                </tr>
            </table>
            <p class="return"><strong>Returns:</strong> bool</p>
        </div>

        <div class="method">
            <code>public static function set(string $key, string $value): void</code>
            <p>
                Sets an environment variable at runtime (for the current process only).
            </p>
            <table>
                <tr><th>Parameter</th><th>Type</th><th>Description</th></tr>
                <tr>
                    <td><span class="param">$key</span></td>
                    <td>string</td>
                    <td>Name of the environment variable.</td>
                </tr>
                <tr>
                    <td><span class="param">$value</span></td>
                    <td>string</td>
                    <td>Value to set.</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="section">
        <h2>.env File Support</h2>
        <ul>
            <li>The class will attempt to load environment variables from a <code>.env</code> file if the application is configured with an environment file path.</li>
            <li>Each line in the <code>.env</code> file should be in the format <code>KEY=VALUE</code>.</li>
            <li>Variables loaded from the <code>.env</code> file are cached for performance.</li>
        </ul>
    </div>

    <div class="section">
        <h2>Notes</h2>
        <ul>
            <li>If a variable is not found in the <code>.env</code> file, the system environment is checked.</li>
            <li>Setting a variable with <code>set()</code> only affects the current PHP process.</li>
            <li>Use <code>App::set_env_path()</code> to specify the path to your <code>.env</code> file.</li>
        </ul>
    </div>

    <div class="section">
        <h2>Related Classes</h2>
        <ul>
            <li><code>TrishulApi\Core\App</code></li>
        </ul>
    </div>

    <div class="section">
        <h2>Changelog</h2>
        <ul>
            <li><strong>v1.0.0</strong> - Initial release with .env and system environment variable support.</li>
        </ul>
    </div>
</body>
</html>