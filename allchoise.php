<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>filmnet</title>
<style type="text/css">
body,td,th {
    color: #8B8081;
}
</style>

</head>


<body background="tampler/baground/3babc65de5d5b9f42b211ee1112197e0.jpg">
  <tbody>
    <tr>
      <td width="133" height="23" bgcolor="#191818">
<tbody>
          <tr>
            <td><a href="login_page.php"></a></td>
          </tr>
</tbody>
      </td>
      <style type="text/css">
  
        background-size: cover;
    }
    h1, h2 {
        color: white; /* White color for headings */
    }
    a {
        color: white; /* White links */
        text-decoration: none;
    }
    a:hover {
        color: lightgray; /* Light gray hover effect */
    }
    form {
        color: white; /* White text in form */
    }
    select, input {
        color: black; /* Black text inside input and select fields */
        background-color: white; /* White background for better contrast */
    }
      </style>
<td width="871" bgcolor="#191818">&nbsp;</td>
      <td width="315" bgcolor="#191818">&nbsp;</td>
      <td width="139" bgcolor="#191818">&nbsp;</td>
<td width="80" bgcolor="#1E1D1D">&nbsp;</td>
    </tr>
    <h1>Filmnet
		<tr>
             <blockquote>
          <blockquote>
            <blockquote>
              <blockquote>
                <blockquote>
                  <blockquote>
                    <blockquote>
                      <blockquote>
                        <blockquote>
                          <blockquote>
                            <blockquote>
                              <blockquote>
								  
								     <h2> <a href="allhome.php">Admin</a> choice</h2>
                              </blockquote>
                            </blockquote>
                          </blockquote>
                        </blockquote>
                      </blockquote>
                    </blockquote>
                  </blockquote>
                </blockquote>
              </blockquote>
            </blockquote>
          </blockquote>
</blockquote>
               
      </tr>
    </h1>
    <tr>
      <td height="60" bgcolor="#191818">&nbsp;</td>
</tr>
    <tr>
      <td>
        <table width="1951" height="562" border="1">
          <tbody>
                    <tr>
                      <td width="141" height="112"><h1>Filmnet</h1></td>
                      <td width="1716"><table width="1730" height="89" border="1">
                        <tr>
                          <td width="438" height="83" align="center" valign="top"><p>&nbsp;</p>
                            <p><a href="allview.php">veiw user</a></p>
                            <span style="color: #15F32F"></td>
                          <td width="416"><a href="allchoise.php">user choise</a></td>
                          <td width="345"><a href="delete.php">delete registred</a><a href="allchoise.php"></a></td>
                          <td width="345"><a href="contact us.php">comment</a></td>
                          <td width="152"><a href="frest.php">logout</a></td>
                        </tr>
                      </table>
                      <p></p></td>
                      <td width="72">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="35">&nbsp;</td>
                      <td><?php
include('connection.php');

// get results from database using mysqli
$conn = new mysqli('localhost', 'root', '', 'test');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get results from database
$result = $conn->query("SELECT * FROM pyment ORDER BY id");

if ($result->num_rows > 0) {
    // Display data in table
    echo "<table border='1' cellpadding='8'>";
    echo "<tr>
        <th>id</th>
        <th>movie</th>
        <th>name</th>
        <th>usernametelegram</th>
        <th>password</th>
        <th>file</th>
       
        <th>Date</th>
    </tr>";

    // Loop through results of database query, displaying them in the table
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['movie'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['usernametelegram'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
if (isset($row['file'])) {
    echo "<td>" . htmlspecialchars($row['file'], ENT_QUOTES, 'UTF-8') . "</td>";
} else {
    echo "<td></td>"; // Display an empty cell if 'file' is not set
}
        
        echo "<td>" . $row['date'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}
 
     if (isset($_POST['delete']) && isset($_POST['id'])) {
    $id = $_POST['id'];

    // Prepare delete query using prepared statements to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM pyment WHERE id = ?");
    $stmt->bind_param("i", $id);  // "i" stands for integer

    if ($stmt->execute()) {
        echo "Record deleted successfully.";
        header("Location: ");
        exit();
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Please enter a valid ID to delete.";
}

$conn->close();     
           




// Check if delete request was made

?>
&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
     
  <tr>
 
      <blockquote>
        <blockquote>
          <blockquote>
            <blockquote>
              <blockquote>
                <blockquote>
                  <blockquote>
                    <blockquote>
                      <blockquote>
                        <blockquote>
                          <blockquote>
                            <p>© 2024 Filmnet. project.</p>
                          </blockquote>
                        </blockquote>
                      </blockquote>
                    </blockquote>
                  </blockquote>
                </blockquote>
              </blockquote>
            </blockquote>
          </blockquote>
        </blockquote>
      </blockquote>
    </blockquote>
      <p>&nbsp;</p>
      <blockquote>
        <blockquote>
          <blockquote>
            <blockquote>
              <blockquote>
                <blockquote>
                  <blockquote>
                    <blockquote>
                      <blockquote>
                        <blockquote>
                          <blockquote>
                            <blockquote>
                              <p>&nbsp;</p>
                            </blockquote>
                          </blockquote>
                        </blockquote>
                      </blockquote>
                    </blockquote>
                  </blockquote>
                </blockquote>
              </blockquote>
            </blockquote>
          </blockquote>
        </blockquote>
      </blockquote>
  
  </tr>
                </table>
              <p>&nbsp; </p></td>
            </tr>
</body>
</html>

