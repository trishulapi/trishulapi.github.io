<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TrishulClient Class Documentation</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2em; }
        h1, h2, h3 { color: #2c3e50; }
        code { background: #f4f4f4; padding: 2px 4px; border-radius: 3px; }
        pre { background: #f4f4f4; padding: 1em; border-radius: 3px; }
        .method { margin-bottom: 1.5em; }
        .params { margin-left: 2em; }
    </style>
</head>
<body>
    <h1>TrishulClient Class</h1>
    <p>
        <strong>Namespace:</strong> <code>TrishulApi\Core\Http</code><br>
        <strong>Implements:</strong> <code>TrishulClientInterface</code>
    </p>
    <p>
        The <code>TrishulClient</code> class provides methods to make HTTP requests (GET, POST, PUT, DELETE) using cURL. It supports both "mono" and "flux" variants for each HTTP method.
    </p>

    <h2>Methods</h2>

    <div class="method">
        <h3>get_mono($url, TrishulClientHeader $headers)</h3>
        <p>Performs a GET request to the specified URL with provided headers.</p>
        <div class="params">
            <strong>Parameters:</strong>
            <ul>
                <li><code>$url</code> (string): The request URL.</li>
                <li><code>$headers</code> (TrishulClientHeader): Headers object.</li>
            </ul>
            <strong>Returns:</strong> Response from the server.
        </div>
    </div>

    <div class="method">
        <h3>get_flux($url, TrishulClientHeader $headers)</h3>
        <p>Performs a GET request (flux variant) to the specified URL with provided headers.</p>
        <div class="params">
            <strong>Parameters:</strong>
            <ul>
                <li><code>$url</code> (string): The request URL.</li>
                <li><code>$headers</code> (TrishulClientHeader): Headers object.</li>
            </ul>
            <strong>Returns:</strong> Response from the server.
        </div>
    </div>

    <div class="method">
        <h3>post_mono($url, $data, TrishulClientHeader $headers)</h3>
        <p>Performs a POST request to the specified URL with provided data and headers.</p>
        <div class="params">
            <strong>Parameters:</strong>
            <ul>
                <li><code>$url</code> (string): The request URL.</li>
                <li><code>$data</code> (mixed): Data to send in the request body.</li>
                <li><code>$headers</code> (TrishulClientHeader): Headers object.</li>
            </ul>
            <strong>Returns:</strong> Response from the server.
        </div>
    </div>

    <div class="method">
        <h3>post_flux($url, array $data, TrishulClientHeader $headers)</h3>
        <p>Performs a POST request (flux variant) to the specified URL with provided data and headers.</p>
        <div class="params">
            <strong>Parameters:</strong>
            <ul>
                <li><code>$url</code> (string): The request URL.</li>
                <li><code>$data</code> (array): Data to send in the request body.</li>
                <li><code>$headers</code> (TrishulClientHeader): Headers object.</li>
            </ul>
            <strong>Returns:</strong> Response from the server.
        </div>
    </div>

    <div class="method">
        <h3>delete_mono($url, TrishulClientHeader $headers)</h3>
        <p>Performs a DELETE request to the specified URL with provided headers.</p>
        <div class="params">
            <strong>Parameters:</strong>
            <ul>
                <li><code>$url</code> (string): The request URL.</li>
                <li><code>$headers</code> (TrishulClientHeader): Headers object.</li>
            </ul>
            <strong>Returns:</strong> Response from the server.
        </div>
    </div>

    <div class="method">
        <h3>delete_flux($url, array $data, TrishulClientHeader $headers)</h3>
        <p>Performs a DELETE request (flux variant) to the specified URL with provided headers.</p>
        <div class="params">
            <strong>Parameters:</strong>
            <ul>
                <li><code>$url</code> (string): The request URL.</li>
                <li><code>$data</code> (array): Data to send (currently not used in implementation).</li>
                <li><code>$headers</code> (TrishulClientHeader): Headers object.</li>
            </ul>
            <strong>Returns:</strong> Response from the server.
        </div>
    </div>

    <div class="method">
        <h3>put_mono($url, $data, TrishulClientHeader $headers)</h3>
        <p>Performs a PUT request to the specified URL with provided data and headers.</p>
        <div class="params">
            <strong>Parameters:</strong>
            <ul>
                <li><code>$url</code> (string): The request URL.</li>
                <li><code>$data</code> (mixed): Data to send in the request body.</li>
                <li><code>$headers</code> (TrishulClientHeader): Headers object.</li>
            </ul>
            <strong>Returns:</strong> Response from the server.
        </div>
    </div>

    <div class="method">
        <h3>put_flux($url, array $data, TrishulClientHeader $headers)</h3>
        <p>Performs a PUT request (flux variant) to the specified URL with provided data and headers.</p>
        <div class="params">
            <strong>Parameters:</strong>
            <ul>
                <li><code>$url</code> (string): The request URL.</li>
                <li><code>$data</code> (array): Data to send in the request body.</li>
                <li><code>$headers</code> (TrishulClientHeader): Headers object.</li>
            </ul>
            <strong>Returns:</strong> Response from the server.
        </div>
    </div>

    <div class="method">
        <h3>__makeCurlRequest($url, $requestType, $data, $headers)</h3>
        <p>
            Private helper method to perform the actual cURL request.<br>
            Sets up cURL options based on the request type and executes the request.
        </p>
        <div class="params">
            <strong>Parameters:</strong>
            <ul>
                <li><code>$url</code> (string): The request URL.</li>
                <li><code>$requestType</code> (string): HTTP method (GET, POST, PUT, DELETE).</li>
                <li><code>$data</code> (mixed): Data to send in the request body (if applicable).</li>
                <li><code>$headers</code> (array): Array of headers.</li>
            </ul>
            <strong>Returns:</strong> Response from the server.
        </div>
    </div>

    <h2>Usage Example</h2>
    <pre><code>
$client = new TrishulApi\Core\Http\TrishulClient();
$headers = new TrishulApi\Core\Http\TrishulClientHeader();
$response = $client->get_mono('https://api.example.com/data', $headers);
    </code></pre>
</body>
</html>