<!--
    Documentation for TrishulApi\Core\Log\LoggerFactory
    Author: Shyam Dubey
    Since: 2025
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TrishulApi\Core\Log\LoggerFactory Class Documentation</title>
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
    <h1>TrishulApi\Core\Log\LoggerFactory</h1>
    <p>
        <strong>Namespace:</strong> <code>TrishulApi\Core\Log</code><br>
        <strong>Author:</strong> Shyam Dubey<br>
        <strong>Since:</strong> v1.0.0
    </p>

    <div class="section">
        <h2>Overview</h2>
        <p>
            The <code>LoggerFactory</code> class provides a simple and flexible logging mechanism for your application. It supports logging messages of different severity levels (INFO, WARN, ERROR) to a specified directory or to the default PHP error log. Each log entry includes a timestamp, log level, class name, and message, making it easy to trace and debug application events.
        </p>
    </div>

    <div class="section">
        <h2>Usage Example</h2>
        <pre><code class="language-php">
use TrishulApi\Core\Log\LoggerFactory;

// Set the log directory (optional, defaults to PHP error log)
LoggerFactory::set_log_dir(__DIR__ . '/logs');

// Get a logger instance for your class
$logger = LoggerFactory::get_logger('MyClass');

// Log messages
$logger->info('This is an info message.');
$logger->warn('This is a warning.');
$logger->error('This is an error.');
$logger->log('This is a generic log message.');
        </code></pre>
    </div>

    <div class="section">
        <h2>Methods</h2>

        <div class="method">
            <code>public static function set_log_dir($dir): void</code>
            <p>
                Sets the directory where log files will be stored. If not set, logs are written to the default PHP error log.
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
            <code>public static function get_logger($className): LoggerFactory</code>
            <p>
                Returns a logger instance for the specified class. Use this to log messages with the class context.
            </p>
            <table>
                <tr><th>Parameter</th><th>Type</th><th>Description</th></tr>
                <tr>
                    <td><span class="param">$className</span></td>
                    <td>string</td>
                    <td>Name of the class for which logging is performed.</td>
                </tr>
            </table>
            <p class="return"><strong>Returns:</strong> <code>LoggerFactory</code> instance</p>
        </div>

        <div class="method">
            <code>public function log($message): void</code>
            <p>
                Logs a message with <strong>INFO</strong> level. Equivalent to <code>info()</code>.
            </p>
            <table>
                <tr><th>Parameter</th><th>Type</th><th>Description</th></tr>
                <tr>
                    <td><span class="param">$message</span></td>
                    <td>string</td>
                    <td>The message to log.</td>
                </tr>
            </table>
        </div>

        <div class="method">
            <code>public function info($message): void</code>
            <p>
                Logs a message with <strong>INFO</strong> level.
            </p>
            <table>
                <tr><th>Parameter</th><th>Type</th><th>Description</th></tr>
                <tr>
                    <td><span class="param">$message</span></td>
                    <td>string</td>
                    <td>The message to log.</td>
                </tr>
            </table>
        </div>

        <div class="method">
            <code>public function warn($message): void</code>
            <p>
                Logs a message with <strong>WARN</strong> level.
            </p>
            <table>
                <tr><th>Parameter</th><th>Type</th><th>Description</th></tr>
                <tr>
                    <td><span class="param">$message</span></td>
                    <td>string</td>
                    <td>The warning message to log.</td>
                </tr>
            </table>
        </div>

        <div class="method">
            <code>public function error($message): void</code>
            <p>
                Logs a message with <strong>ERROR</strong> level.
            </p>
            <table>
                <tr><th>Parameter</th><th>Type</th><th>Description</th></tr>
                <tr>
                    <td><span class="param">$message</span></td>
                    <td>string</td>
                    <td>The error message to log.</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="section">
        <h2>Log Format</h2>
        <p>
            Each log entry is formatted as follows:
        </p>
        <pre><code>
YYYY-MM-DD hh:mm:ss | LEVEL | ClassName.php | Message
        </code></pre>
        <p>
            Example:
        </p>
        <pre><code>
2025-06-04 03:15:22 | ERROR | MyClass.php | Something went wrong!
        </code></pre>
    </div>

    <div class="section">
        <h2>Log Storage</h2>
        <ul>
            <li>If a log directory is set via <code>set_log_dir()</code>, logs are written to daily log files named <code>YYYY-MM-DD.log</code> in that directory.</li>
            <li>If no directory is set, logs are written to the default PHP error log.</li>
            <li>The log directory is created automatically if it does not exist.</li>
        </ul>
    </div>

    <div class="section">
        <h2>Notes</h2>
        <ul>
            <li>Always use <code>get_logger()</code> to obtain a logger for your class.</li>
            <li>Supports multiple log levels: INFO, WARN, ERROR.</li>
            <li>Handles log file creation and appending automatically.</li>
            <li>Throws exceptions if log pattern or directory is invalid.</li>
        </ul>
    </div>

    <div class="section">
        <h2>Related Classes</h2>
        <ul>
            <li><code>TrishulApi\Core\Log\LoggerInterface</code></li>
            <li><code>TrishulApi\Core\Log\LogPattern</code></li>
        </ul>
    </div>

    <div class="section">
        <h2>Changelog</h2>
        <ul>
            <li><strong>2025</strong> - Initial release with support for info, warn, and error logging, and daily log file rotation.</li>
        </ul>
    </div>
</body>
</html>