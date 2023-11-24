
<!DOCTYPE html>
<?php
session_start();
include("../model/connection.php");
include("../controller/header1.php");


?>
<html lang="en">

    <head>
			<title>Donate</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="./css/donate.css">


    </head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <center><h1 style="color:black;">Admin Donation for tour</h1></center>
        </div>
    </nav>
    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <h3 class="text-primary"></h3>
        <hr style="border-top:1px dotted #ccc;"/>
        <div class="col-md-4">
            <form method="POST" action="../Controller/insert.php">
                <div class="form-group">
                    <label>Donor name</label>
                    <input type="text" class="form-control" name="donorname"/>
                </div><br>
                <div class="form-group">
                    <label>Banking Number</label>
                    <input type="number" class="form-control" name="mobilenumber" />
                </div><br>
                <div class="form-group">
                    <label>Amount</label>
                    <input type="number" class="form-control" name="amount"/>
                </div><br>
                <center><button class="btn btn-primary" name="insert">Insert</button></center><br>
            </form>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered table-striped">
                <thead class="alert-info">
                    <th>Donor Name</th>
                    <th>Banking Number</th>
                    <th>Amount</th>
                </thead>
                <tbody>
                    <?php
                        $data = file_get_contents('../Model/donorlist.json');
                        $data = json_decode($data);
                        foreach($data as $fetch){
                    ?>
                        <tr>
                            <td><?php echo $fetch->donorname?></td>
                            <td><?php echo $fetch->mobilenumber?></td>
                            <td><?php echo $fetch->amount?></td>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
