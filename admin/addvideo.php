<html>
    <head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style.min.css">
<script src="js/main.js"></script>
</head>
<body>
<form style="width:80%;margin:40px" enctype="multipart/form-data" id="artefact_video_save" action="savevideo.php" method="POST">
    <fieldset>
      <legend>Item File addition</legend>
       <?php
       $conn=mysqli_connect("localhost","root","","auction_system");
       $sql="select * from items";
       $query=mysqli_query($conn,$sql);
       echo "<p>
        <label>
         Item ID:
          <br />
        <select name='id' id='id'>";
       while($row=mysqli_fetch_assoc($query))
       {
        echo "<option value=".$row['id'].">".$row['Name']."</option>";
       }
       ?>
 </select>
        </label>
      </p>
      <p>
        <label>
         File to be uploaded :
          <br />
          <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
        </label>
      </p>
      <input type="submit" name="" >
      <a href="index.php?page=viewItems">Back</a>
     </fieldset>
  </form>
                </div>
                </div>
            </div>
            <hr>
        </div>

</script>