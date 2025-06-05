<!--
    Documentation for TrishulApi\Core\Middleware\MiddlewareInterface
    Author: Shyam Dubey
    Since: v1.0.0
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TrishulApi\Core\Middleware\MiddlewareInterface Documentation</title>
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
    <h1>TrishulApi\Core\Middleware\MiddlewareInterface</h1>
    <p>
        <strong>Namespace:</strong> <code>TrishulApi\Core\Middleware</code><br>
        <strong>Author:</strong> Shyam Dubey<br>
        <strong>Since:</strong> v1.0.0
    </p>

    <div class="section">
        <h2>Overview</h2>
        <p>
            The <code>MiddlewareInterface</code> defines the contract for creating custom middleware in the Trishul API framework. Middleware allows you to intercept and manipulate HTTP requests and responses before and after the main application logic executes. This is useful for tasks such as authentication, logging, input validation, and modifying responses.
        </p>
    </div>

    <div class="section">
        <h2>Implementing Middleware</h2>
        <p>
            To create a custom middleware, implement the <code>MiddlewareInterface</code> and define the required methods:
        </p>
        <pre><code class="language-php">
use TrishulApi\Core\Middleware\MiddlewareInterface;
use TrishulApi\Core\Http\Request;
use TrishulApi\Core\Http\Response;

class AuthMiddleware implements MiddlewareInterface
{
    public function handle_request(Request $request): Request
    {
        // Example: Check authentication
        if (!$request->session()->get('user_id')) {
            // You can modify the request or throw an exception
        }
        return $request;
    }

    public function handle_response(Response $response): Response
    {
        // Example: Add a custom header to the response
        $response->get_header()->set('X-Processed-By', 'AuthMiddleware');
        return $response;
    }
}
        </code></pre>
    </div>

    <div class="section">
        <h2>Methods</h2>

        <div class="method">
            <code>handle_request(Request $request): Request</code>
            <p>
                Intercepts the incoming HTTP request before it reaches the main application logic. You can inspect, modify, or validate the request here.
            </p>
            <table>
                <tr><th>Parameter</th><th>Type</th><th>Description</th></tr>
                <tr>
                    <td><span class="param">$request</span></td>
                    <td>Request</td>
                    <td>The incoming HTTP request object.</td>
                </tr>
            </table>
            <p class="return"><strong>Returns:</strong> <code>Request</code> (possibly modified)</p>
        </div>

        <div class="method">
            <code>handle_response(Response $response): Response</code>
            <p>
                Intercepts the outgoing HTTP response before it is sent to the client. You can modify headers, cookies, or the response body here.
            </p>
            <table>
                <tr><th>Parameter</th><th>Type</th><th>Description</th></tr>
                <tr>
                    <td><span class="param">$response</span></td>
                    <td>Response</td>
                    <td>The outgoing HTTP response object.</td>
                </tr>
            </table>
            <p class="return"><strong>Returns:</strong> <code>Response</code> (possibly modified)</p>
        </div>
    </div>

    <div class="section">
        <h2>When to Use Middleware</h2>
        <ul>
            <li>Authentication and authorization checks</li>
            <li>Logging requests and responses</li>
            <li>Input validation and sanitization</li>
            <li>Modifying or enriching requests and responses</li>
            <li>Handling CORS, rate limiting, etc.</li>
        </ul>
    </div>

    <div class="section">
        <h2>Notes</h2>
        <ul>
            <li>Middleware can be chained; each middleware can modify the request/response before passing it along.</li>
            <li>Always return the (possibly modified) <code>Request</code> or <code>Response</code> object from your methods.</li>
            <li>Middleware should not terminate execution unless absolutely necessary (e.g., for security reasons).</li>
        </ul>
    </div>

    <div class="section">
        <h2>Related Classes</h2>
        <ul>
            <li><code>TrishulApi\Core\Http\Request</code></li>
            <li><code>TrishulApi\Core\Http\Response</code></li>
        </ul>
    </div>

    <div class="section">
        <h2>Changelog</h2>
        <ul>
            <li><strong>v1.0.0</strong> - Initial release with request and response interception support.</li>
        </ul>
    </div>
</body>
</html>