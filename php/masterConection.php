<?php
class PostgressConnection
{

    public $conn = null;
    public $name = "def";

    function __construct()
    {
    }

    public function ConnectDB()
    {

        $host = 'localhost';
        $db = 'krsystem';
        $user = 'postgres';
        $password = 'Arrieta27'; // change to your password
        try {
            $this->conn = new Pdo("pgsql:host=$host;dbname=$db", $user, $password,);
            echo "connected to table:$db";
        } catch (PDOException $exp_error) {
            echo ("failed connection error:$exp_error");
        }
    }


    public function showBotProfile()
    {
        $sql = "Select * From drivers order by id asc";
        echo '<h1> "bot profile" </h2>';


        try {
            echo '<div id="botdisp" class="botdisplay">';
            foreach ($this->conn->query($sql) as $row) {
                $colorstr ="";

                echo "<div  id=".$row['id'].' class="botprofile">name:'.$row["name"].' cssexample
                     <h3 class="botname"> Bot:'.$row['name'].' </h3><hr/>
                    <div class="colorblock" style="background-color:'.$row["colorcode"].';"></div>
                    <div class="state">'. $row["state"].'</div>
                </div>';
                
            }
            
            echo "</div>";
        } catch (PDOException $exp_error) {
            echo ("failed connection error:$exp_error");
        }
    }

    //display the content of a query in a table on
    public function displayAsTable($tablename = "")
    {
        $sql = "Select * From $tablename";
        echo '<h1> "btable " </h1>';
        $result=$this->conn->query($sql);
        try {
            echo gettype($this->conn->query($sql))."<br>";
            foreach ($this->conn->query($sql) as $row) {
                
            }
        } catch (PDOException $exp_error) {
            echo ("failed connection error:$exp_error");
        }
    }
}
