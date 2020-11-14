<!DOCTYPE html>
<html>

<head>
    <title> Database Programming with PHP </title>
    <link rel="stylesheet" href="style.css" />
    <meta charset="utf-8" />
    <style type="text/css">
        td,
        th,
        table {
            border: thin solid white;
        }
    </style>

</head>

<body>
    <div class="container">
        <form action="inventory.php" method="post">
            <h1> Playing with Database </h1>
            <table>
                <tr>
                    <th> id </th>
                    <th> Title </th>
                    <th> Price </th>
                    <th> Quantity </th>
                    <th> Out of Stock </th>
                </tr>
                <tr>
                    <td><input type="text" name="id" size="3" value="0" /></td>
                    <td><input type="text" name="Title" size="16" value="Sample Title" /></td>
                    <td><input type="text" name="Price" size="8" value="10.99" /></td>
                    <td><input type="text" name="Quantity" size="4" value="10" /></td>
                    <td><input type="text" name="flag" size="8" value="0" /></td>
                </tr>
            </table>
            <h3> Action </h3>
            <p>
                <input type="radio" name="action" value="display" checked="checked" />
                Display all records <br />
                <input type="radio" name="action" value="insert" />
                Add a new record <br />
                <input type="radio" name="action" value="update" />
                Update an existing record <br />
                <input type="radio" name="action" value="delete" />
                Delete an existing record <br />
                <input type="reset" value="Reset" />
                <input type="submit" value="Submit" />

            </p>
        </form>
    </div>
</body>

</html>