<!--
    Documentation for TrishulApi\Core\Data\DB
    Author: Shyam Dubey
    Since: v1.0.0
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TrishulApi\Core\Data\DB Class Documentation</title>
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
    <h1>TrishulApi\Core\Data\DB</h1>
    <p>
        <strong>Namespace:</strong> <code>TrishulApi\Core\Data</code><br>
        <strong>Author:</strong> Shyam Dubey<br>
        <strong>Since:</strong> v1.0.0
    </p>

    <div class="section">
        <h2>Overview</h2>
        <p>
            The <code>DB</code> class is responsible for providing a database connection object in the Trishul API framework. It reads configuration from environment variables and supports multiple database types (MySQL, PostgreSQL, Oracle). The class ensures a singleton connection and throws exceptions if configuration is missing or connection fails.
        </p>
    </div>

    <div class="section">
        <h2>Usage Example</h2>
        <pre><code class="language-php">
use TrishulApi\Core\Data\DB;

try {
    // Get PDO connection
    $pdo = DB::get_connection();

    // Use PDO as usual
    $stmt = $pdo->query('SELECT * FROM users');
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    // Handle connection errors
    echo "Database error: " . $e->getMessage();
}
        </code></pre>
    </div>

    <div class="section">
        <h2>Environment Variables</h2>
        <p>
            The following environment variables must be set for the database connection:
        </p>
        <table>
            <tr><th>Variable</th><th>Description</th></tr>
            <tr><td><code>DB_HOST</code></td><td>Database server hostname or IP address</td></tr>
            <tr><td><code>DB_PORT</code></td><td>Database server port</td></tr>
            <tr><td><code>DB_TYPE</code></td><td>Database type (<code>mysql</code>, <code>postgres</code>, <code>oracle</code>)</td></tr>
            <tr><td><code>DB_USERNAME</code></td><td>Database username</td></tr>
            <tr><td><code>DB_PASSWORD</code></td><td>Database password</td></tr>
            <tr><td><code>DB_NAME</code></td><td>Database name</td></tr>
        </table>
        <div class="note">
            <strong>Note:</strong> If any of these variables are missing, an exception will be thrown.
        </div>
    </div>

    <div class="section">
        <h2>Methods</h2>

        <div class="method">
            <code>public function __construct()</code>
            <p>
                Initializes the database configuration from environment variables. Throws an exception if configuration is incomplete. Usually, you do not need to instantiate this class directly; use <code>get_connection()</code> instead.
            </p>
        </div>

        <div class="method">
            <code>public static function get_connection(): PDO</code>
            <p>
                Returns a singleton PDO connection object. If the connection does not exist, it is created using the configuration from environment variables. Supports MySQL, PostgreSQL, and Oracle.
            </p>
            <ul>
                <li>Throws an exception if configuration is missing or connection fails.</li>
                <li>Returns the same PDO instance for subsequent calls.</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <h2>Supported Database Types</h2>
        <ul>
            <li><strong>MySQL</strong> (<code>mysql</code>)</li>
            <li><strong>PostgreSQL</strong> (<code>postgres</code>)</li>
            <li><strong>Oracle</strong> (<code>oracle</code>)</li>
        </ul>
    </div>

    <div class="section">
        <h2>Notes</h2>
        <ul>
            <li>Uses the <code>DbConfig</code> class to store configuration.</li>
            <li>Uses the <code>Environment</code> helper to read environment variables.</li>
            <li>PDO error mode is set to <code>ERRMODE_EXCEPTION</code> for robust error handling.</li>
            <li>Throws an exception if an unsupported database type is specified.</li>
        </ul>
    </div>

    <div class="section">
        <h2>Related Classes</h2>
        <ul>
            <li><code>TrishulApi\Core\Data\DbConfig</code></li>
            <li><code>TrishulApi\Core\Helpers\Environment</code></li>
            <li><code>PDO</code> (PHP Data Objects)</li>
        </ul>
    </div>

    <div class="section">
        <h2>Changelog</h2>
        <ul>
            <li><strong>v1.0.0</strong> - Initial release with support for MySQL, PostgreSQL, and Oracle connections via PDO.</li>
        </ul>
    </div>
</body>
</html>