<!--
    Documentation for TrishulApi\Core\Enums\HttpStatus
    Author: Shyam Dubey
    Since: v1.0.0
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TrishulApi\Core\Enums\HttpStatus Enum Documentation</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2em; background: #f9f9f9; }
        h1, h2, h3 { color: #2c3e50; }
        code, pre { background: #f4f4f4; padding: 2px 6px; border-radius: 3px; }
        .section { margin-bottom: 2em; }
        table { border-collapse: collapse; width: 100%; margin-bottom: 1em; }
        th, td { border: 1px solid #ccc; padding: 8px; }
        th { background: #eaeaea; }
        .note { background: #fffbe6; border-left: 4px solid #ffe066; padding: 8px; margin: 1em 0; }
    </style>
</head>
<body>
    <h1>TrishulApi\Core\Enums\HttpStatus</h1>
    <p>
        <strong>Namespace:</strong> <code>TrishulApi\Core\Enums</code><br>
        <strong>Type:</strong> <code>enum</code><br>
        <strong>Author:</strong> Shyam Dubey<br>
        <strong>Since:</strong> v1.0.0
    </p>

    <div class="section">
        <h2>Overview</h2>
        <p>
            The <code>HttpStatus</code> enum provides a list of commonly used HTTP status codes for use in API responses. It helps ensure consistency and readability when setting response status codes throughout your application.
        </p>
    </div>

    <div class="section">
        <h2>Usage Example</h2>
        <pre><code class="language-php">
use TrishulApi\Core\Enums\HttpStatus;
use TrishulApi\Core\Http\Response;

// Return a 200 OK response
return Response::json(HttpStatus::OK, ['message' => 'Success']);

// Return a 404 Not Found response
return Response::json(HttpStatus::NOT_FOUND, ['error' => 'Resource not found']);
        </code></pre>
    </div>

    <div class="section">
        <h2>Enum Values</h2>
        <table>
            <tr><th>Name</th><th>Value</th><th>Description</th></tr>
            <tr><td><code>OK</code></td><td>200</td><td>Request succeeded</td></tr>
            <tr><td><code>CREATED</code></td><td>201</td><td>Resource created</td></tr>
            <tr><td><code>ACCEPTED</code></td><td>202</td><td>Request accepted for processing</td></tr>
            <tr><td><code>NO_CONTENT</code></td><td>204</td><td>No content to return</td></tr>
            <tr><td><code>RESET_CONTENT</code></td><td>205</td><td>Reset content</td></tr>
            <tr><td><code>PARTIAL_CONTENT</code></td><td>206</td><td>Partial content returned</td></tr>
            <tr><td><code>ALREADY_REPORTED</code></td><td>208</td><td>Already reported</td></tr>
            <tr><td><code>FOUND</code></td><td>302</td><td>Resource found (redirect)</td></tr>
            <tr><td><code>MOVED_PERMANENTLY</code></td><td>301</td><td>Resource moved permanently</td></tr>
            <tr><td><code>BAD_REQUEST</code></td><td>400</td><td>Bad request</td></tr>
            <tr><td><code>UNAUTHORIZED</code></td><td>401</td><td>Unauthorized access</td></tr>
            <tr><td><code>PAYMENT_REQUIRED</code></td><td>402</td><td>Payment required</td></tr>
            <tr><td><code>FORBIDDEN</code></td><td>403</td><td>Forbidden</td></tr>
            <tr><td><code>NOT_FOUND</code></td><td>404</td><td>Resource not found</td></tr>
            <tr><td><code>METHOD_NOT_ALLOWED</code></td><td>405</td><td>HTTP method not allowed</td></tr>
            <tr><td><code>NOT_ACCEPTABLE</code></td><td>406</td><td>Not acceptable</td></tr>
            <tr><td><code>REQUEST_TIMEOUT</code></td><td>408</td><td>Request timeout</td></tr>
            <tr><td><code>URI_TOO_LONG</code></td><td>414</td><td>URI too long</td></tr>
            <tr><td><code>UNSUPPORTED_MEDIA_TYPE</code></td><td>415</td><td>Unsupported media type</td></tr>
            <tr><td><code>INTERNAL_SERVER_ERROR</code></td><td>500</td><td>Internal server error</td></tr>
            <tr><td><code>NOT_IMPLEMENTED</code></td><td>501</td><td>Not implemented</td></tr>
            <tr><td><code>BAD_GATEWAY</code></td><td>502</td><td>Bad gateway</td></tr>
            <tr><td><code>SERVICE_UNAVAILABLE</code></td><td>503</td><td>Service unavailable</td></tr>
            <tr><td><code>GATEWAY_TIMEOUT</code></td><td>504</td><td>Gateway timeout</td></tr>
            <tr><td><code>HTTP_VERSION_NOT_SUPPORTED</code></td><td>505</td><td>HTTP version not supported</td></tr>
        </table>
    </div>

    <div class="section">
        <h2>Notes</h2>
        <ul>
            <li>Use this enum to avoid magic numbers and improve code readability.</li>
            <li>All values are strings representing standard HTTP status codes.</li>
            <li>Can be used directly in response classes or anywhere HTTP status codes are needed.</li>
        </ul>
    </div>

    <div class="section">
        <h2>Related Classes</h2>
        <ul>
            <li><code>TrishulApi\Core\Http\Response</code></li>
        </ul>
    </div>

    <div class="section">
        <h2>Changelog</h2>
        <ul>
            <li><strong>v1.0.0</strong> - Initial release with common HTTP status codes.</li>
        </ul>
    </div>
</body>
</html>