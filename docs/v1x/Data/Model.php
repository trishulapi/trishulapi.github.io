<!--
    Documentation for TrishulApi\Core\Data\Model
    Author: Trishul API Team
    Since: v1.0.0
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TrishulApi\Core\Data\Model Class Documentation</title>
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
    <h1>TrishulApi\Core\Data\Model</h1>
    <p>
        <strong>Namespace:</strong> <code>TrishulApi\Core\Data</code><br>
        <strong>Type:</strong> <code>abstract class</code>
    </p>

    <div class="section">
        <h2>Overview</h2>
        <p>
            The <code>Model</code> class is the base class for all database models in the Trishul API framework. It provides a rich set of static methods for CRUD operations, querying, relationships, and raw SQL execution. Extend this class to represent your database tables and interact with them using an expressive, object-oriented API.
        </p>
    </div>

    <div class="section">
        <h2>Usage Example</h2>
        <pre><code class="language-php">
use TrishulApi\Core\Data\Model;

class User extends Model {
    public static string $table_name = 'users';
    public static string $primary_key = 'id';
}

// Fetch all users
$users = User::all();

// Find a user by ID
$user = User::getById(1);

// Create a new user
$newId = User::create(['name' => 'Alice', 'email' => 'alice@example.com']);

// Update a user
User::update(1, ['email' => 'alice@newdomain.com']);

// Delete a user
User::delete(1);

// Soft delete a user
User::softDelete(2);

// Find users with conditions
$users = User::where(['status = "active"'], 20, 0);

// Count users
$count = User::count(['status = "active"']);

// Check if a user exists
$exists = User::exists(['email = "alice@example.com"']);

// Raw query
$results = User::rawQuery('SELECT * FROM users WHERE status = :status', ['status' => 'active']);
        </code></pre>
    </div>

    <div class="section">
        <h2>Properties</h2>
        <table>
            <tr><th>Property</th><th>Type</th><th>Description</th></tr>
            <tr>
                <td><code>public static string $table_name</code></td>
                <td>string</td>
                <td>Name of the database table (must be set in child class).</td>
            </tr>
            <tr>
                <td><code>public static string $primary_key</code></td>
                <td>string</td>
                <td>Name of the primary key column (default: <code>id</code>).</td>
            </tr>
        </table>
    </div>

    <div class="section">
        <h2>CRUD Methods</h2>
        <div class="method">
            <code>public static function all(): array</code>
            <p>Returns all records from the table.</p>
        </div>
        <div class="method">
            <code>public static function getById($id): ?array</code>
            <p>Returns a single record by its primary key.</p>
        </div>
        <div class="method">
            <code>public static function create(array $data): int</code>
            <p>Inserts a new record and returns the new record's ID.</p>
        </div>
        <div class="method">
            <code>public static function update($id, array $data): bool</code>
            <p>Updates a record by its primary key.</p>
        </div>
        <div class="method">
            <code>public static function delete($id): bool</code>
            <p>Deletes a record by its primary key.</p>
        </div>
        <div class="method">
            <code>public static function softDelete($id): bool</code>
            <p>Performs a soft delete by setting <code>deleted_at</code> timestamp.</p>
        </div>
    </div>

    <div class="section">
        <h2>Query Methods</h2>
        <div class="method">
            <code>public static function find($conditions = [], $limit = 10, $offset = 0): array</code>
            <p>Finds records matching the given conditions, with limit and offset.</p>
        </div>
        <div class="method">
            <code>public static function where($conditions = [], $limit = 10, $offset = 0): array</code>
            <p>Alias for <code>find()</code>. Finds records matching the given conditions.</p>
        </div>
        <div class="method">
            <code>public static function filter($conditions = [], $limit = 10, $offset = 0): array</code>
            <p>Alias for <code>find()</code>. Finds records matching the given conditions.</p>
        </div>
        <div class="method">
            <code>public static function count($conditions = []): int</code>
            <p>Counts the number of records matching the given conditions.</p>
        </div>
        <div class="method">
            <code>public static function exists($conditions = []): bool</code>
            <p>Checks if any records exist matching the given conditions.</p>
        </div>
    </div>

    <div class="section">
        <h2>Raw SQL Methods</h2>
        <div class="method">
            <code>public static function rawQuery($query, $params = []): array</code>
            <p>Executes a raw SQL query and returns all results.</p>
        </div>
        <div class="method">
            <code>public static function rawQuerySingle($query, $params = []): ?array</code>
            <p>Executes a raw SQL query and returns a single record.</p>
        </div>
        <div class="method">
            <code>public static function rawQueryCount($query, $params = []): int</code>
            <p>Executes a raw SQL query and returns the count of records.</p>
        </div>
        <div class="method">
            <code>public static function rawQueryExists($query, $params = []): bool</code>
            <p>Executes a raw SQL query and checks if any records exist.</p>
        </div>
    </div>

    <div class="section">
        <h2>Transaction Support</h2>
        <div class="method">
            <code>public static function transaction(callable $callback): mixed</code>
            <p>
                Executes a set of database operations within a transaction. Rolls back if an exception occurs.
            </p>
        </div>
    </div>

    <div class="section">
        <h2>Relationship Methods</h2>
        <div class="method">
            <code>public static function hasMany($relatedModel, $foreignKey, $localKey = 'id'): array</code>
            <p>Returns all related records (one-to-many relationship).</p>
        </div>
        <div class="method">
            <code>public static function belongsTo($relatedModel, $foreignKey, $localKey = 'id'): ?array</code>
            <p>Returns a single related record (many-to-one relationship).</p>
        </div>
        <div class="method">
            <code>public static function hasOne($relatedModel, $foreignKey, $localKey = 'id'): ?array</code>
            <p>Returns a single related record (one-to-one relationship).</p>
        </div>
        <div class="method">
            <code>public static function hasManyWithConditions($relatedModel, $foreignKey, $conditions = [], $localKey = 'id'): array</code>
            <p>Returns related records with additional conditions.</p>
        </div>
        <div class="method">
            <code>public static function belongsToWithConditions($relatedModel, $foreignKey, $conditions = [], $localKey = 'id'): ?array</code>
            <p>Returns a related record with additional conditions.</p>
        </div>
        <div class="method">
            <code>public static function hasOneWithConditions($relatedModel, $foreignKey, $conditions = [], $localKey = 'id'): ?array</code>
            <p>Returns a single related record with additional conditions.</p>
        </div>
    </div>

    <div class="section">
        <h2>Utility Methods</h2>
        <div class="method">
            <code>public static function getTableName(): string</code>
            <p>Returns the table name for the model.</p>
        </div>
        <div class="method">
            <code>public static function getPrimaryKey(): string</code>
            <p>Returns the primary key column name.</p>
        </div>
        <div class="method">
            <code>public static function getModelClass(): string</code>
            <p>Returns the fully qualified class name of the model.</p>
        </div>
        <div class="method">
            <code>public static function queryBuilder(): QueryBuilder</code>
            <p>Returns a new <code>QueryBuilder</code> instance for advanced queries.</p>
        </div>
    </div>

    <div class="section">
        <h2>Notes</h2>
        <ul>
            <li>Extend this class for each database table you want to model.</li>
            <li>Set <code>$table_name</code> and optionally <code>$primary_key</code> in your child class.</li>
            <li>Supports soft deletes if your table has a <code>deleted_at</code> column.</li>
            <li>All methods are static for convenience.</li>
            <li>Relationship methods expect related models to also extend <code>Model</code>.</li>
        </ul>
    </div>

    <div class="section">
        <h2>Related Classes</h2>
        <ul>
            <li><code>TrishulApi\Core\Data\DB</code></li>
            <li><code>TrishulApi\Core\Data\QueryBuilder</code></li>
        </ul>
    </div>

    <div class="section">
        <h2>Changelog</h2>
        <ul>
            <li><strong>v1.0.0</strong> - Initial release with CRUD, query, relationship, and transaction support.</li>
        </ul>
    </div>
</body>
</html>