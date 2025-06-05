<!--
    Documentation for TrishulApi\Core\Http\Request
    Author: Shyam Dubey
    Since: 2025
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TrishulApi\Core\Http\Request Class Documentation</title>
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
    <h1>TrishulApi\Core\Http\Request</h1>
    <p>
        <strong>Namespace:</strong> <code>TrishulApi\Core\Http</code><br>
        <strong>Author:</strong> Shyam Dubey<br>
        <strong>Since:</strong> v1.0.0
    </p>

    <div class="section">
        <h2>Overview</h2>
        <p>
            The <code>Request</code> class is the central point for handling HTTP requests in the Trishul API framework. It provides convenient access to query parameters, headers, request body, cookies, sessions, and path variables. This class is designed to be used in controllers, middleware, and other core components to interact with incoming HTTP requests.
        </p>
    </div>

    <div class="section">
        <h2>Usage Example</h2>
        <pre><code class="language-php">
// Example usage in a controller or middleware

use TrishulApi\Core\Http\Request;

function handleRequest(Request $request) {
    // Get query parameters
    $params = $request->query_params()->all();

    // Get a specific header
    $authHeader = $request->header()->get('Authorization');

    // Get request body (for POST/PUT)
    $body = $request->body()->asArray();

    // Get session data
    $userId = $request->session()->get('user_id');

    // Get cookies
    $cookieValue = $request->cookie()->get('session_token');

    // Get path variables
    $id = $request->path()->get('id');

    // Get request URL
    $url = $request->get_url();

    // Get client IP
    $ip = $request->get_ip();
}
        </code></pre>
    </div>

    <div class="section">
        <h2>Constructor</h2>
        <div class="method">
            <code>__construct(string $url)</code>
            <p>
                Initializes the request object with the given URL. Internally sets up query parameters, headers, body, session, cookies, and path variables.
            </p>
            <table>
                <tr><th>Parameter</th><th>Type</th><th>Description</th></tr>
                <tr><td><span class="param">$url</span></td><td>string</td><td>The URL on which the request is coming.</td></tr>
            </table>
        </div>
    </div>

    <div class="section">
        <h2>Methods</h2>

        <div class="method">
            <code>body(): RequestBody</code>
            <p>Returns the <code>RequestBody</code> object representing the request payload (useful for POST/PUT requests).</p>
        </div>

        <div class="method">
            <code>query_params(): QueryParams</code>
            <p>Returns the <code>QueryParams</code> object for accessing query parameters.</p>
        </div>

        <div class="method">
            <code>update(Request $request): void</code>
            <p>Updates the current request object with another request's data. Useful in middleware when modifying the request.</p>
        </div>

        <div class="method">
            <code>set_body(RequestBody $body): void</code>
            <p>Sets the request body. Throws <code>NullPointerException</code> if the current body is null.</p>
        </div>

        <div class="method">
            <code>get_url(): string</code>
            <p>Returns the URL of the current request.</p>
        </div>

        <div class="method">
            <code>get_ip(): string|null</code>
            <p>Returns the client's IP address.</p>
        </div>

        <div class="method">
            <code>header(): Header</code>
            <p>Returns the <code>Header</code> object for accessing HTTP headers.</p>
        </div>

        <div class="method">
            <code>set_header(Header $header): void</code>
            <p>Sets the request headers (used internally).</p>
        </div>

        <div class="method">
            <code>session(): Session</code>
            <p>Returns the <code>Session</code> object for managing session data.</p>
        </div>

        <div class="method">
            <code>set_session(Session $session): void</code>
            <p>Sets the session object (used internally).</p>
        </div>

        <div class="method">
            <code>cookie(): Cookie</code>
            <p>Returns the <code>Cookie</code> object for accessing cookies.</p>
        </div>

        <div class="method">
            <code>set_cookie(Cookie $cookie): void</code>
            <p>Sets the cookie object (used internally).</p>
        </div>

        <div class="method">
            <code>set_path($data): void</code>
            <p>Sets the path variables (used internally).</p>
        </div>

        <div class="method">
            <code>path(): PathVariable</code>
            <p>Returns the <code>PathVariable</code> object for accessing path variables.</p>
        </div>
    </div>

    <div class="section">
        <h2>Notes</h2>
        <ul>
            <li>All properties are static, so changes affect all instances. Use with care in concurrent environments.</li>
            <li>Always use the provided getter methods to access request data.</li>
            <li>For middleware, use <code>update()</code> to propagate changes to the request object.</li>
        </ul>
    </div>

    <div class="section">
        <h2>Related Classes</h2>
        <ul>
            <li><code>TrishulApi\Core\Http\QueryParams</code></li>
            <li><code>TrishulApi\Core\Http\Header</code></li>
            <li><code>TrishulApi\Core\Http\RequestBody</code></li>
            <li><code>TrishulApi\Core\Http\Session</code></li>
            <li><code>TrishulApi\Core\Http\Cookie</code></li>
            <li><code>TrishulApi\Core\Http\PathVariable</code></li>
        </ul>
    </div>

    <div class="section">
        <h2>Changelog</h2>
        <ul>
            <li><strong>v1.0.0</strong> - Initial release with support for query params, headers, body, session, cookies, and path variables.</li>
        </ul>
    </div>
</body>
</html>