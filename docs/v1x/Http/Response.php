<!--
    Documentation for TrishulApi\Core\Http\Response
    Author: Shyam Dubey
    Since: v1.0.0
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TrishulApi\Core\Http\Response Class Documentation</title>
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
    <h1>TrishulApi\Core\Http\Response</h1>
    <p>
        <strong>Namespace:</strong> <code>TrishulApi\Core\Http</code><br>
        <strong>Author:</strong> Shyam Dubey<br>
        <strong>Since:</strong> v1.0.0
    </p>

    <div class="section">
        <h2>Overview</h2>
        <p>
            The <code>Response</code> class is responsible for constructing and sending HTTP responses in the Trishul API framework. It supports setting status codes, response headers, cookies, sessions, and response bodies. The class is designed to simplify returning JSON responses and managing response-related data in your application.
        </p>
    </div>

    <div class="section">
        <h2>Usage Example</h2>
        <pre><code class="language-php">
// Example: Returning a JSON response from a controller

use TrishulApi\Core\Http\Response;
use TrishulApi\Core\Enums\HttpStatus;

$data = [
    'success' => true,
    'message' => 'Data fetched successfully',
    'data' => [/* ... */]
];

// Return a JSON response object (does not terminate execution)
$response = Response::json(HttpStatus::OK, $data);

// Send a JSON response and terminate execution
Response::out(HttpStatus::OK, $data);

// Set a cookie in the response
$cookie = Response::get_cookie();
$cookie->set('token', 'abc123');
Response::set_cookie($cookie);

// Access response headers
$header = Response::get_header();
$header->set('X-Custom-Header', 'value');
        </code></pre>
    </div>

    <div class="section">
        <h2>Constructor</h2>
        <div class="method">
            <code>private __construct($data, HttpStatus $status, $return_type = Response::RETURN_TYPE_JSON)</code>
            <p>
                Private constructor. Initializes the response object with data, status code, and return type. Use static methods like <code>json()</code> to create a response.
            </p>
            <table>
                <tr><th>Parameter</th><th>Type</th><th>Description</th></tr>
                <tr><td><span class="param">$data</span></td><td>mixed</td><td>Response data to be sent to the client.</td></tr>
                <tr><td><span class="param">$status</span></td><td>HttpStatus</td><td>HTTP status code (enum).</td></tr>
                <tr><td><span class="param">$return_type</span></td><td>string</td><td>Type of response (default: <code>JSON</code>).</td></tr>
            </table>
        </div>
    </div>

    <div class="section">
        <h2>Methods</h2>

        <div class="method">
            <code>public static json(HttpStatus $statusCode, $data): Response</code>
            <p>
                Creates a new <code>Response</code> object with JSON data and the specified status code. Sets the <code>Content-Type</code> header to <code>application/json</code>.
            </p>
            <table>
                <tr><th>Parameter</th><th>Type</th><th>Description</th></tr>
                <tr><td><span class="param">$statusCode</span></td><td>HttpStatus</td><td>HTTP status code.</td></tr>
                <tr><td><span class="param">$data</span></td><td>mixed</td><td>Data to be returned as JSON.</td></tr>
            </table>
            <p class="return"><strong>Returns:</strong> <code>Response</code> object</p>
        </div>

        <div class="method">
            <code>public static get_body(): ResponseBody</code>
            <p>Returns the <code>ResponseBody</code> object containing the response data.</p>
        </div>

        <div class="method">
            <code>public static get_status_code()</code>
            <p>Returns the HTTP status code of the response (e.g., 200, 404, 500).</p>
        </div>

        <div class="method">
            <code>public static get_return_type()</code>
            <p>Returns the return type of the response (currently only <code>JSON</code> is supported).</p>
        </div>

        <div class="method">
            <code>public static out(HttpStatus $status, $data, $return_type = Response::RETURN_TYPE_JSON): void</code>
            <p>
                Sends the response to the client and terminates execution. Sets the status code and outputs the data as JSON. If an unsupported return type is provided, throws <code>InvalidResponseTypeException</code>.
            </p>
            <table>
                <tr><th>Parameter</th><th>Type</th><th>Description</th></tr>
                <tr><td><span class="param">$status</span></td><td>HttpStatus</td><td>HTTP status code.</td></tr>
                <tr><td><span class="param">$data</span></td><td>mixed</td><td>Data to be returned.</td></tr>
                <tr><td><span class="param">$return_type</span></td><td>string</td><td>Response type (default: <code>JSON</code>).</td></tr>
            </table>
        </div>

        <div class="method">
            <code>public static get_header(): Header</code>
            <p>Returns the <code>Header</code> object for managing response headers.</p>
        </div>

        <div class="method">
            <code>public static get_cookie(): Cookie</code>
            <p>Returns the <code>Cookie</code> object for managing response cookies.</p>
        </div>

        <div class="method">
            <code>public static set_cookie(Cookie $cookie): void</code>
            <p>Sets the <code>Cookie</code> object for the response.</p>
        </div>

        <div class="method">
            <code>public static get_session(): Session</code>
            <p>Returns the <code>Session</code> object for managing session data in the response.</p>
        </div>
    </div>

    <div class="section">
        <h2>Notes</h2>
        <ul>
            <li>All properties are static, so changes affect all instances. Use with care in concurrent environments.</li>
            <li>Use <code>Response::out()</code> to send a response and terminate execution immediately.</li>
            <li>Currently, only JSON responses are supported.</li>
            <li>Headers and cookies can be set before calling <code>out()</code>.</li>
        </ul>
    </div>

    <div class="section">
        <h2>Related Classes</h2>
        <ul>
            <li><code>TrishulApi\Core\Http\Header</code></li>
            <li><code>TrishulApi\Core\Http\Cookie</code></li>
            <li><code>TrishulApi\Core\Http\Session</code></li>
            <li><code>TrishulApi\Core\Http\ResponseBody</code></li>
            <li><code>TrishulApi\Core\Enums\HttpStatus</code></li>
            <li><code>TrishulApi\Core\Exception\InvalidResponseTypeException</code></li>
        </ul>
    </div>

    <div class="section">
        <h2>Changelog</h2>
        <ul>
            <li><strong>v1.0.0</strong> - Initial release with support for JSON responses, status codes, headers, cookies, and sessions.</li>
        </ul>
    </div>
</body>
</html>