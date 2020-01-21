<html>
    <head>
        <title>My Site</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="styles/styles.css">
        <script src="scripts/remove.js"></script>
        <style>
            tr:nth-child(even) {
                background:#ddd;
            }
            
            table {
                width:20%;
                border:1px solid black;
            }
        </style>
    </head>
    <body>
        <center>
        <h1>Database Example</h1>
        <form enctype="multipart/form-data" method="POST" action="insert.php">
            <input name="first" type="text" placeholder="First Name" required>
            <input name="last" type="text" placeholder="Last Name" required><br>
            <button type="submit" value="Submit">Submit</button>
        </form>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
        <?php
            $servername = "localhost";
            $username   = "id10906079_lmc";
            $password   = "thisismypassword";
            $dbname     = "id10906079_names";
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
            }
            
            $sql     = "SELECT FirstName, LastName FROM Names";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["FirstName"] . "</td> <td>" . $row["LastName"] . "</td></tr><br>";
            }
        ?>
        </table>
        <form enctype="multipart/form-data" method="POST" action="delete.php">
            <button type="submit" value="Clear">Clear</button>
        </form>
        </center>
    </body>
</html>
