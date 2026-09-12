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
      <td width="871" bgcolor="#191818"><style type="text/css">
  
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
      </style></td><h1>Filmnet
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
								  
								     <h2> <a href="allhome.php">Admin</a> view</p>
                              </h2>
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
      <td height="93" colspan="5" bgcolor="#191818">&nbsp;</td>
    </tr>
    <tr>
    
		  
<tr>
              <td>&nbsp;</td>
              <td><p>
                <label for="select">Select:</label>
                <select onChange="location=this.value;">
                  <option value="allhome.php">select</option>
                  <option value="allview.php">view</option>
                  <option value="delete.php">delete</option>
                  <option value="frest.php">logout</option>
                </select>
              </p>
              <h1>Filmnet</h1></td>
            </tr>
		   
		  
        <table width="1848" height="1187" border="1">
          <tbody>
            <tr>
              <td width="8" height="175"><h1>&nbsp;</h1></td>
              <td width="1807"><table width="1807" height="153" border="1">
               
                  <tr>
                    <td width="314" height="48" align="center" valign="top"><a href="allview.php">veiw user</a></td>
                    <td width="262"><a href="allchoise.php">user choise</a></td>
                    <td width="376"><a href="delete.php">delete registred</a><a href="allchoise.php"></a></td>
                    <td width="322"><a href="contact us.php">comment</a></td>
                    <td width="348"><a href="search code.php">search</a></td>
                    <td width="145"><a href="frest.php">logout</a></td>
                  </tr>
                  <tr>
					  
		
					  
                    <td height="97" colspan="6" align="center" valign="top"><p>
                      <?php
include('connection.php');

// get results from database using mysqli
$conn = new mysqli('localhost', 'root', '', 'test');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get results from database
$result = $conn->query("SELECT * FROM filmnet ORDER BY id");

if ($result->num_rows > 0) {
    // Display data in table
    echo "<table border='1' cellpadding='8'>";
    echo "<tr>
        <th>ID</th>
        <th>fname</th>
        <th>lname</th>
        <th>username</th>
        <th>password</th>
        <th>email</th>
       
        <th>Date</th>
    </tr>";

    // Loop through results of database query, displaying them in the table
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['fname'] . "</td>";
        echo "<td>" . $row['lname'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        
        echo "<td>" . $row['date'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

// Check if delete request was made
if (isset($_POST['delete']) && isset($_POST['id'])) {
    $id = $_POST['id'];

    // Prepare delete query using prepared statements to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM filmnet WHERE id = ?");
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
?>
                    &nbsp;<span style="color: #15F32F"><a href="allchoise.php"></a><a href="delete.php"></a></p></td>
                  </tr>
                
              </table></td>
              <td width="8"><a href="frest.php"></a></td>
            </tr>
            <tr>
              <td height="49">&nbsp;</td>


</p></td>
              <td width="8">&nbsp;</td>
            </tr>
            <tr>
              <td height="63">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </form>
        </tr></table>
       
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
                              
                                      <blockquote>
                                        <blockquote>
                                          <blockquote>
                                         
                                               
                                                  
                                                         
                                                              <p>© 2024 Filmnet. project.</p>
                                                      
                                                
                                        
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
                                        </blockquote></td>
                                      <td bgcolor="#1E1D1D">&nbsp;</td>
                                    </tr>
                                  </table>
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
</blockquote></td>
        </tr>
</table>
</body>
</html>

