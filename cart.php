<?php
session_start();
?><html>
    <head>
        <title>Cart</title>
        <style>
            @font-face
            {
                font-family: 'Petit Formal Script';
                src: url('PetitFormalScript-Regular.ttf');
            }
            @font-face
            {
                font-family: 'LobsterTwo';
                src: url('LobsterTwo-Regular.otf ');
            }
            @font-face
            {
                font-family: 'Rochester';
                src: url('Rochester-Regular.otf');
            }
            body
            {
                background: linear-gradient(
                     rgba(20,20,20, .85), 
                     rgba(20,20,20, .85)),
                     url( 'cart.jpg');
                     background-size: 100% auto;
                     background-attachment: fixed;
                     overflow: scroll;
            }
            #header
            {
                font-family: 'Petit Formal Script';
                font-weight:bolder;
                font-size:25px;
                color:rgb(255,255,255,0.8);
                border:3px solid white;
                padding:10px;
                background-color: rgb(255,255,255,0.2);
                width:14%;
            }

            .header
            {
                margin-top: 20px;;
                border-bottom:3px solid white;
            }

            .logoutbutton
            {
                padding:7px;
                margin-right: 10px;
                width:80px;
                border:2px solid white;
                font-size:20px;
                font-family:'LobsterTwo';
                background-color: rgb(255,255,255,0.2);
                float:right;
                color:white;
                border-radius: 10px;
            }

            .logoutbutton:hover
            {
                background-color: white;
                color:maroon;
                border:2px solid black;
            }
            #main
            {
                margin-left:450px;
                font-family:'Petit Formal Script';
                font-size:40px;
                color: #FFCCCC;
            }

            p
            {
                font-family: 'Times New Roman';
                font-size:23px;
                color:rgb(175,238,238,0.8);
            }

            #head
            {
                    text-align: center;
            }
            .buttonback
            {
                padding:7px;
                width:80px;
                border:2px solid white;
                font-size:20px;
                font-family:'LobsterTwo';
                background-color: rgb(255,255,255,0.2);
                float:right;
                color:white;
                border-radius: 10px;
                margin-right: 10px;
            }

            .buttonback:hover
            {
                background-color: white;
                color:maroon;
                border:2px solid black;
            }
            button
            {
                width:60px;
                border:2px solid white;
                font-size:13px;
                font-family:'Times New Roman';
                background-color: rgb(255,255,255,0.2);
                color:white;
                border-radius: 10px;
            }

            button:hover
            {
                background-color: rgb(186,178,181,0.6);
                color: black;
                border:2px solid black;

            }
            .active 
            {
                background-color: rgb(186,178,181,0.3);
                color: #123c69;
                font-family: 'Petit Formal Script';
                font-weight: bolder;
            }

            .submit
            {
                padding:7px;
                width:150px;
                border:2px solid white;
                font-size:20px;
                font-family:'LobsterTwo';
                background-color: rgb(255,255,255,0.2);
                color:white;
                border-radius: 10px;
                margin-top: 30px;
                margin-left: 650px;
            }
            table
            {
                width: 50%;
                border: 2px solid white;
                background: rgba(255,255,255, .20);
                border-collapse: collapse;
            }
            tr, td
            {
                width: 50%;
                height: 30px;
                color: white;
                border: 1px solid white;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ;
                font-size: 20px;
                padding: 5px;
            }
            th
            {
                border: 1px solid white;
                font-size: 25px;
                padding: 5px;
            }

        </style>
    </head>
    <body>
        <div class="header">
            <span id="header">OrganiseForAll</span>
            <span id="main"> Cart </span>
            <button name="back" class="buttonback" value="Back" onclick="location.href='Welcome.html';"> Back </button>
            <button name="logout" class="logoutbutton" value="Logout" onclick="location.href='Main.html';"> Log Out </button>
            <br><br>
            <?php
            
                $servername='localhost';
                $username='root';
                $password='';
                $dbname='localvendor';

                $conn=mysqli_connect($servername,$username,$password,$dbname);

                if(!$conn){
                    die("Connection failed: ". mysqli_connect_error());
                }
                $user=$_SESSION['id'];
                $sql = "SELECT item,quantity FROM department where user='$user'";
                $result = $conn->query($sql);
                echo "<p>Departmental Store cart</p>";
                echo "<center><table><tr><th>Item</th><th>Quantity</th></tr>";
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        
                        echo "<tr><td>" . $row["item"]. "</td><td> " . $row["quantity"]. " </td></tr><br>";
                        }
                        } 
                        else {
                        echo "<p>No items in departmental store cart</p>";
                        }
                        echo"</center></table><br><br>";
                $sql = "SELECT item FROM homedecor where user='$user'";
                $result = $conn->query($sql);
                echo "<p>Home Decor cart</p>";
                echo "<center><table><tr><th>Item</th></tr>";
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                
                                echo "<tr><td>" . $row["item"]. "</td></tr><br>";
                                }
                                } 
                                else {
                                echo "<p>No items in homedecor cart.</p>";
                                }
                                echo"</center></table>";
                ?>
        </div>
    </body>
</html>