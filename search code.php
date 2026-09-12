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
    <a href="contact us.php">comment</a>
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
		   
		  
        <table width="1821" height="1187" border="1">
          <tbody>
            <tr>
              <td width="149" height="175"><h1>&nbsp;</h1></td>
              <td width="1569"><table width="1988" height="153" border="1">
               
                  <tr>
                    <td width="513" height="48" align="center" valign="top"><a href="allview.php">veiw user</a></td>
                    <td width="230"><a href="allchoise.php">user choise</a></td>
                    <td width="412"><a href="delete.php">delete registred</a><a href="allchoise.php"></a></td>
                    <td width="412"><a href="contact us.php">comment</a></td>
                    <td width="387"><a href="frest.php">logout</a></td>
                  </tr>
                  <tr>
					  
		
					  
					  
					  
					  
					  
					  
					  
                    <td height="97" colspan="5" align="center" valign="top"><p><body>
    <h2>Admin User Search</h2>
    <form method="POST" action="">
        <input type="text" name="search" placeholder="Enter username or email" required>
        <button type="submit">Search</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $search = $_POST['search'];
        
        $conn = new mysqli("localhost", "root", "", "test");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT id, username, email FROM filmnet WHERE username LIKE ? OR email LIKE ?";
        $stmt = $conn->prepare($sql);
        $searchTerm = "%" . $search . "%";
        $stmt->bind_param("ss", $searchTerm, $searchTerm);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Username</th><th>Email</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['id']}</td><td>{$row['username']}</td><td>{$row['email']}</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No users found.</p>";
        }
        
        $stmt->close();
        $conn->close();
    }
    ?>

</table>

                      &nbsp;</p>                      <span style="color: #15F32F"><a href="allchoise.php"></a><a href="delete.php"></a></td>
                  </tr>
                
              </table></td>
              <td width="19"><a href="frest.php"></a></td>
            </tr>
            <tr>
              <td height="49">&nbsp;</td>


</p></td>
              <td width="56">&nbsp;</td>
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

