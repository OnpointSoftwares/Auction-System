<html>
    <head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style.min.css">
<script src="js/main.js"></script>
<script src="js2/jquery.js"></script>
</head>
<body>
<form style="width:80%;margin:40px" enctype="multipart/form-data" id="artefact_save">
    <fieldset>
      <legend>Items Registration</legend>
       
 
<p>
        <label>
         Name:
          <br />
         <input type="text" name="ItemName" class="form-control" id="name"/>
        </label>
      </p>
 
 
       
 
<p>
        <label>Description: <input id="desc" type="text" name="desc" class="form-control"/></label>
      </p>
<p>
        <label>Price:<input type="Number" name="price" id="Age" class="form-control"/></label>
      </p>
      <p>
        <label>
         Image to be uploaded :
          <br />
          <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
        </label>
      </p>
      <p>
      </p>
      <center><p id="loading_spinner" style="display:none"><img src="../img/loading.gif"></p></center>
      <p onclick="save()" class="btn btn-primary" style="cursor:default">Save</p>
      <a href="index.php?page=viewItems">Back</a>
     </fieldset>
  </form>
                </div>
                </div>
            </div>
            <hr>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
function save()
{
    var data = new FormData(document.getElementById("artefact_save"));
console.log("Created FormData, " + [...data.keys()].length + " keys in data");

  $("#loading_spinner").css({"display":"block"});
  $.ajax
  ({
  type:'POST',
  url:'saveItems.php',
  cache: false,
  contentType: false,
  processData: false,
  data:data,
  success:function(response) {
    $("#loading_spinner").css({"display":"none"});
  if(response=="success")
  {
  alert("Item was saved successfully");

  }
  else
  {
    alert(response)
    $("#loading_spinner").css({"display":"none"});
  }
  }
  });
 }

</script>