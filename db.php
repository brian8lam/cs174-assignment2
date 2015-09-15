<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
    <body>
            <!-- <p>
            <?php/*
                $username = filter_input(INPUT_POST, "user");
                $password  = filter_input(INPUT_POST, "pass");
                
                try {
                    // Connect to the database.
                    $con = new PDO("mysql:host=localhost;dbname=bruteforce",
                                   "bruteforce", "password");
                    $con->setAttribute(PDO::ATTR_ERRMODE,
                                       PDO::ERRMODE_EXCEPTION);
                    
                    // Constrain the query if we got first and last names.
                    if ((strlen($username) > 0) && (strlen($password) > 0)) {
                        $query = "SELECT * FROM users ".
                                 "WHERE first = '$username' ".
                                 "AND   last  = '$password'";
                    }
                    else {
                        $query = "SELECT * FROM users";  
                    }

                    // We're going to construct an HTML table.
                    print "<table border='1'>\n";
                    print "<caption>User Info</caption>";
                    // Query the database.
                    $data = $con->query($query);
                    $data->setFetchMode(PDO::FETCH_ASSOC);
                    
                    // Construct the HTML table row by row.
                    // Start with a header row.
                    $doHeader = true;
                    foreach ($data as $row) {
                                        
                        // The header row before the first data row.
                        if ($doHeader) {
                            print "        <tr>\n";
                            foreach ($row as $name => $value) {
                                print "            <th>$name</th>\n";
                            }
                            print "        </tr>\n";
                            
                            $doHeader = false;
                        }
                        
                        // Data row.
                        print "            <tr>\n";
                        foreach ($row as $name => $value) {
                            print "                <td>$value</td>\n";
                        }
                        print "            </tr>\n";
                    }
                    
                    print "        </table>\n";
                }
                catch(PDOException $ex) {
                    echo 'ERROR: '.$ex->getMessage();
                }        
            */?>
        </p> -->
    </body>
</html>