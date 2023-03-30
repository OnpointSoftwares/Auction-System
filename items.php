<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Artefacts | Virtual Museum</title>
        <link href="css3/css/bootstrap.css" rel="stylesheet">
        <link href="css3/css/style.css" rel="stylesheet">
        <script src="css3/js/jquery.js"></script>
        <script src="css3/js/bootstrap.min.js"></script>
    </head>

    <body>
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
                <div class="row text-center" >
                    <div class="col-md-3 col-sm-6 home-feature" >
                        <div class="thumbnail" style="padding:0px;background-color:rgba(0, 0, 0, 0.7)">
                        <?php
                             echo "<img src='admin/".$row['ImagePath']."' alt='' height='300' width='400'>";
                            ?>
                            <div class="caption" style="color:white;">
                                <h3 style="font-size:20px"><?php echo $row['Name']; ?> </h3>
                                <h3 style="font-size:20px">Ksh<?php echo $row['Price']; ?> </h3>
                                <p><?php echo substr($row['Description'], 0, 100) ?></p>
                                <p><a href="buy.php?name=<?php echo $row['id']; ?>" role="button" class="btn" style="background-color:rgba(0, 0, 0, 0.7);">Buy</a></p>
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
            $con=mysqli_connect("localhost","root","","auction_system");

                    $cat=$category;
            $sql="select * from items";
            $query=mysqli_query($con,$sql);
            if(!$query)
            {
                echo "Error".mysqli_error($con);
            }
            while($row=mysqli_fetch_assoc($query))
            {
            ?>
            <div class="row text-center" >
                <div class="col-md-3 col-sm-6 home-feature" >
                    <div class="thumbnail" style="padding:0px;background-color:rgba(0, 0, 0, 0.7)">
                    <?php
                         echo "<img src='admin/".$row['image']."' alt='' height='401' width='936'>";
                        ?>
                        <div class="caption" style="color:white;">
                            <h3 style="font-size:20px"><?php echo $row['Name']; ?> </h3>
                            <p><?php echo substr($row['History'], 0, 100) ?></p>
                            <p><a href="details.php?name=<?php echo $row['id']; ?>&&type=<?php echo $cat; ?>" role="button" class="btn" style="background-color:rgba(0, 0, 0, 0.7);">Read More...</a></p>
                        </div>
                        
                    </div>
                </div>
<?php 
            }
        }
        ?>
