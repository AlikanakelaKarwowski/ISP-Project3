<html>

<head>
    <title> Database Programming with PHP </title>
    <link rel="stylesheet" href="style.css" />
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
        <?php

        // Get input data
        $id = $_POST["id"];
        $title = $_POST["Title"];
        $price = $_POST["Price"];
        $quantity = $_POST["Quantity"];
        $flag = $_POST["flag"];
        $action = $_POST["action"];

        // If any of numerical values are blank, set them to zero
        if ($id == "") $id = 0;
        if ($price == "") $price = 0.0;
        if ($quantity == "") $quantity = 0;
        if ($flag == "") $flag = 0;

        // Connect to MySQL
        $db = mysqli_connect("localhost", "root", "", "isp");
        if (!$db) {
            print "Error - Could not connect to MySQL";
            exit;
        }

        // Select the database
        $er = mysqli_select_db($db, "isp");
        if (!$er) {
            print "Error - Could not select the database";
            exit;
        }


        if ($action == "display")
            $query = "";
        else if ($action == "insert")
            $query = "insert into books values($id, '$title', $price, $quantity, $flag)";
        else if ($action == "update")
            $query = "update books set Title = '$title', Price = $price, Quantity = $quantity, flag = $flag where id = $id";
        else if ($action == "delete")
            $query = "delete from books where id = $id";



        if ($query != "") {
            trim($query);
            $query_html = htmlspecialchars($query);
            $result = mysqli_query($db, $query);
            if (!$result) {
                print "Error - the query could not be executed";
            }
        }

        // Final Display of All Entries
        $query = "SELECT * FROM books";
        $result = mysqli_query($db, $query);
        if (!$result) {
            print "Error - the query could not be executed";
            exit;
        }

        $num_rows = mysqli_num_rows($result);

        print "<table id='phptable'><caption> <h2> Inventory of Books ($num_rows) </h2> </caption>";
        print "<tr align = 'center'>";

        $row = mysqli_fetch_array($result);
        $num_fields = mysqli_num_fields($result);

        // Produce the column labels
        $keys = array_keys($row);
        for ($index = 0; $index < $num_fields; $index++)
            print "<th>" . $keys[2 * $index + 1] . "</th>";
        print "</tr>";

        for ($row_num = 0; $row_num < $num_rows; $row_num++) {
            print "<tr align = 'center'>";
            $values = array_values($row);
            for ($index = 0; $index < $num_fields; $index++) {
                $value = htmlspecialchars($values[2 * $index + 1]);
                print "<th>" . $value . "</th> ";
            }
            print "</tr>";
            $row = mysqli_fetch_array($result);
        }
        print "</table>";
        ?>
        <center><input action="action" onclick="window.history.go(-1); return false;" type="submit" value="Go Back" /></center>
    </div>
</body>

</html>