<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Items | online Auction</title>
        <link href="css3/bootstrap.css" rel="stylesheet">
        <link href="css3/style.css" rel="stylesheet">
        <script src="js2/jquery.js"></script>
        <script src="js2/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container" id="content">

            <hr>
            <?php
            $con=mysqli_connect("localhost","root","","auction_system");

    $sql="select * from items";
    $query=mysqli_query($con,$sql);
    if(!$query)
    {
        echo "Error".mysqli_error($con);
    }
    while($row=mysqli_fetch_assoc($query))
    {
    ?>
    <div class="row text-center" id="cameras">
        <div class="col-md-3 col-sm-6 home-feature">
            <div class="thumbnail">
            <?php
                 echo "<img src='".$row['ImagePath']."' alt='' height='400' width='400'>";
                ?>
                <div class="caption">
                    <h3 style="font-size:20px"><?php echo $row['Name']; ?> </h3>
                    <p><?php echo substr($row['Description'], 0, 200) ?></p>
            </div>
                
            </div>
        </div>
<?php 
    }
                echo "<br><br></div>
                <hr/>";
    
    
            ?>
                </div>
            </div>
            <hr>
        </div>
    </body>
</html>
<?php
function getartefacts($category)
                {
            $con=mysqli_connect("localhost","root","","virtualmuseum");

                    $cat=$category;
            $sql="select * from ".$cat;
            $query=mysqli_query($con,$sql);
            if(!$query)
            {
                echo "Error".mysqli_error($con);
            }
            while($row=mysqli_fetch_assoc($query))
            {
            ?>
            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <?php
                         echo "<img src='".$row['image']."' alt='' height='400' width='400'>";
                        ?>
                        <div class="caption">
                            <h3 style="font-size:20px"><?php echo $row['Name']; ?> </h3>
                            <p><?php echo substr($row['History'], 0, 200) ?></p>
                    </div>
                        
                    </div>
                </div>
<?php 
            }
        }
        ?>
