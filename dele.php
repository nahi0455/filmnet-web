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
								  
								     <h2> Admin page
								       </p>
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
      <td height="453" bgcolor="#191818">&nbsp;</td>
      <td colspan="3" bgcolor="#191818"><form action="reg_code.php"id="form1" name="form1" method="post">
		  
		    <tr>
              <td>&nbsp;</td>
              <td><label for="select">Select:</label>
                <select onChange="location=this.value;">
				 <option value="allhome.php">select</option>
                  <option value="allview.php">view</option>
                  <option value="delete.php">delete</option>
                  <option value="frest.php">logout</option>
              </select></td>
            </tr>
		   
		  
        <table width="1570" height="430" border="1">
          <tbody>
            <tr>
              <td width="160" height="52"><h1>Filmnet</h1></td>
              <td width="1234"><table width="1235" height="73" border="1">
               
                  <tr>
					  
		
					  
                    <td height="67" align="center" valign="top"><p>&nbsp;</p>
                      <p><a href="allview.php">view</a></p>                      <span style="color: #15F32F"></td>
                    <td width="416"><a href="allview.php"><span style="color: #161ACC"><a href="file:///C|/Users/CS Lab2/Pictures/view preference.php">view preference</a><span style="color: #160013"> <a href="file:///C|/Users/CS Lab2/Pictures/view user.php">view use</a></span></td>
                    <td width="425"><a href="file:///C|/Users/CS Lab2/Pictures/delete.php">delete user</a> <a href="file:///C|/Users/CS Lab2/Pictures/search user.php"> search user </a></td>
                  </tr>
                
              </table></td>
              <td width="154"><a href="frest.php">logout</a></td>
            </tr>
            <tr>
              <td height="305">&nbsp;</td>
              <td><p>&nbsp;</p>
              <p>
				  <p>Enter ID of user to delete</p>
<form action="" method="post">
    <input type="text" name="id" id="id">
    <input type="submit" name="delete" id="delete">
</form>

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
?>&nbsp;</p></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="63">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </tbody>
        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </form>
      <td bgcolor="#131111">    <td bgcolor="#1E1D1D">&nbsp;</td>
    </tr>
<tr>
      <td height="362" bgcolor="#191818">&nbsp;</td>
      <td colspan="3" bgcolor="#191818"><blockquote>
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
                            <blockquote><p>&nbsp;</p>
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
  </tbody>
</table>
</body>
</html>

