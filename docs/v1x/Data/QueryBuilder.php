<!--
    Documentation for TrishulApi\Core\Data\QueryBuilder
    Author: Shyam Dubey
    Since: v1.0.0
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TrishulApi\Core\Data\QueryBuilder Class Documentation</title>
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
    <h1>TrishulApi\Core\Data\QueryBuilder</h1>
    <p>
        <strong>Namespace:</strong> <code>TrishulApi\Core\Data</code><br>
        <strong>Author:</strong> Shyam Dubey<br>
        <strong>Since:</strong> v1.0.0
    </p>

    <div class="section">
        <h2>Overview</h2>
        <p>
            The <code>QueryBuilder</code> class provides a fluent, object-oriented interface for building and executing SQL SELECT queries on your models. It supports selecting fields, adding conditions, ordering, limiting results, and executing queries to fetch data from the database. This class is typically used in conjunction with models that extend <code>TrishulApi\Core\Data\Model</code>.
        </p>
    </div>

    <div class="section">
        <h2>Usage Example</h2>
        <pre><code class="language-php">
use TrishulApi\Core\Data\QueryBuilder;

$builder = new QueryBuilder(User::class);

$results = $builder
    ->select(['id', 'name', 'email'])
    ->where('status = "active"')
    ->orderBy('created_at', 'DESC')
    ->limit(10)
    ->get();

// Get only the first result
$first = $builder
    ->select(['id', 'name'])
    ->where('email = "alice@example.com"')
    ->getFirst();

// Get the count of matching records
$count = $builder
    ->where('status = "active"')
    ->getCount();
        </code></pre>
    </div>

    <div class="section">
        <h2>Constructor</h2>
        <div class="method">
            <code>public function __construct(string $modelClass)</code>
            <p>
                Initializes the query builder for the specified model class. The model class must extend <code>Model</code>.
            </p>
            <table>
                <tr><th>Parameter</th><th>Type</th><th>Description</th></tr>
                <tr>
                    <td><span class="param">$modelClass</span></td>
                    <td>string</td>
                    <td>Fully qualified class name of the model.</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="section">
        <h2>Fluent Query Methods</h2>
        <div class="method">
            <code>public function select(array $fields): self</code>
            <p>Specify the fields to select in the query.</p>
        </div>
        <div class="method">
            <code>public function where(string $condition): self</code>
            <p>Add a WHERE condition to the query. Multiple calls are combined with <code>AND</code>.</p>
        </div>
        <div class="method">
            <code>public function orderBy(string $field, string $direction = 'ASC'): self</code>
            <p>Order the results by the specified field and direction (<code>ASC</code> or <code>DESC</code>).</p>
        </div>
        <div class="method">
            <code>public function limit(int $limit): self</code>
            <p>Limit the number of results returned.</p>
        </div>
    </div>

    <div class="section">
        <h2>Execution Methods</h2>
        <div class="method">
            <code>public function build(): string</code>
            <p>Builds and returns the SQL query string based on the current state of the builder.</p>
        </div>
        <div class="method">
            <code>public function get(): array</code>
            <p>Executes the built query and returns all results as an array.</p>
        </div>
        <div class="method">
            <code>public function getFirst(): array</code>
            <p>Executes the built query with a limit of 1 and returns the first result as an array.</p>
        </div>
        <div class="method">
            <code>public function getCount(): int</code>
            <p>Executes the built query and returns the count of matching records.</p>
        </div>
    </div>

    <div class="section">
        <h2>Utility Methods</h2>
        <div class="method">
            <code>public function getModelClass(): string</code>
            <p>Returns the model class associated with this query builder.</p>
        </div>
        <div class="method">
            <code>public function getTable(): string</code>
            <p>Returns the table name for the query.</p>
        </div>
        <div class="method">
            <code>public function getFields(): array</code>
            <p>Returns the fields selected for the query.</p>
        </div>
        <div class="method">
            <code>public function getConditions(): array</code>
            <p>Returns the list of WHERE conditions.</p>
        </div>
        <div class="method">
            <code>public function getOrderBy(): array</code>
            <p>Returns the ORDER BY clauses.</p>
        </div>
        <div class="method">
            <code>public function getLimit(): int</code>
            <p>Returns the LIMIT value.</p>
        </div>
        <div class="method">
            <code>public function __toString(): string</code>
            <p>Returns the built SQL query as a string.</p>
        </div>
    </div>

    <div class="section">
        <h2>Notes</h2>
        <ul>
            <li>Use this class for building complex SELECT queries in a fluent, readable way.</li>
            <li>Each method returns the builder instance, allowing method chaining.</li>
            <li>Model class must extend <code>TrishulApi\Core\Data\Model</code>.</li>
            <li>Supports only SELECT queries.</li>
            <li>For advanced queries, use <code>rawQuery</code> methods on your model.</li>
        </ul>
    </div>

    <div class="section">
        <h2>Related Classes</h2>
        <ul>
            <li><code>TrishulApi\Core\Data\Model</code></li>
            <li><code>TrishulApi\Core\Data\DB</code></li>
        </ul>
    </div>

    <div class="section">
        <h2>Changelog</h2>
        <ul>
            <li><strong>v1.0.0</strong> - Initial release with fluent query building and execution support.</li>
        </ul>
    </div>
</body>
</html>