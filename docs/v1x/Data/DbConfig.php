<!--
    Documentation for TrishulApi\Core\Data\DbConfig
    Author: Shyam Dubey
    Since: v1.0.0
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TrishulApi\Core\Data\DbConfig Class Documentation</title>
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
    <h1>TrishulApi\Core\Data\DbConfig</h1>
    <p>
        <strong>Namespace:</strong> <code>TrishulApi\Core\Data</code><br>
        <strong>Author:</strong> Shyam Dubey<br>
        <strong>Since:</strong> v1.0.0
    </p>

    <div class="section">
        <h2>Overview</h2>
        <p>
            The <code>DbConfig</code> class encapsulates the configuration required to connect to a database in the Trishul API framework. It stores essential connection parameters such as host, port, database type, username, password, and database name. This class is typically used internally by the <code>DB</code> class to manage and provide database connection details.
        </p>
    </div>

    <div class="section">
        <h2>Constructor</h2>
        <div class="method">
            <code>public function __construct($host, $port, $database_type, $username, $password, $database_name)</code>
            <p>
                Initializes the database configuration with the provided parameters.
            </p>
            <table>
                <tr><th>Parameter</th><th>Type</th><th>Description</th></tr>
                <tr><td><span class="param">$host</span></td><td>string</td><td>Database server hostname or IP address.</td></tr>
                <tr><td><span class="param">$port</span></td><td>int|string</td><td>Port on which the database is accessible.</td></tr>
                <tr><td><span class="param">$database_type</span></td><td>string</td><td>Type of database (e.g., MYSQL, ORACLE, POSTGRES).</td></tr>
                <tr><td><span class="param">$username</span></td><td>string</td><td>Database username.</td></tr>
                <tr><td><span class="param">$password</span></td><td>string</td><td>Database password.</td></tr>
                <tr><td><span class="param">$database_name</span></td><td>string</td><td>Name of the database/schema.</td></tr>
            </table>
        </div>
    </div>

    <div class="section">
        <h2>Methods</h2>
        <div class="method">
            <code>public function get_host(): string</code>
            <p>Returns the database host.</p>
        </div>
        <div class="method">
            <code>public function get_port(): int|string</code>
            <p>Returns the database port.</p>
        </div>
        <div class="method">
            <code>public function get_database_type(): string</code>
            <p>Returns the type of the database (e.g., MYSQL, ORACLE, POSTGRES).</p>
        </div>
        <div class="method">
            <code>public function get_username(): string</code>
            <p>Returns the database username.</p>
        </div>
        <div class="method">
            <code>public function get_password(): string</code>
            <p>Returns the database password.</p>
        </div>
        <div class="method">
            <code>public function get_database_name(): string</code>
            <p>Returns the name of the database/schema.</p>
        </div>
    </div>

    <div class="section">
        <h2>Usage Example</h2>
        <pre><code class="language-php">
use TrishulApi\Core\Data\DbConfig;

$config = new DbConfig(
    'localhost',      // host
    3306,             // port
    'mysql',          // database_type
    'dbuser',         // username
    'dbpassword',     // password
    'my_database'     // database_name
);

// Access configuration values
$host = $config->get_host();
$type = $config->get_database_type();
        </code></pre>
    </div>

    <div class="section">
        <h2>Notes</h2>
        <ul>
            <li>This class is typically used internally by the <code>DB</code> class for managing database connections.</li>
            <li>All properties are static, so changes affect all instances. Use with care in concurrent environments.</li>
            <li>Supports multiple database types (e.g., MySQL, Oracle, PostgreSQL).</li>
        </ul>
    </div>

    <div class="section">
        <h2>Related Classes</h2>
        <ul>
            <li><code>TrishulApi\Core\Data\DB</code></li>
        </ul>
    </div>

    <div class="section">
        <h2>Changelog</h2>
        <ul>
            <li><strong>v1.0.0</strong> - Initial release with support for database configuration encapsulation.</li>
        </ul>
    </div>
</body>
</html>