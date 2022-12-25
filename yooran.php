<?php include './pages/header.php'; 
  if (empty($_POST['size'])){
     $_POST['size'] =4;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="row justify-content-center align-items-center mt-5">
      <div class="col-6">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
          <div class="col-13">
          <input type="radio" class="btn-check" name="size" name="options-outlined" value="4" id="success-outlined1" autocomplete="off" <?php echo ($_POST['size'] == "4") ? " checked" : "";?> />
          <label class="btn btn-outline-success" for="success-outlined1">4</label>
          <input type="radio" class="btn-check" name="size" name="options-outlined" value="4.5" id="success-outlined2" autocomplete="off" <?php echo ($_POST['size'] == "4.5") ? " checked" : "";?>/>
          <label class="btn btn-outline-success" for="success-outlined2">4.5</label>
          <input type="radio" class="btn-check" name="size" name="options-outlined" value="5" id="success-outlined3" autocomplete="off" <?php echo ($_POST['size'] == "5") ? " checked" : "";?>>
          <label class="btn btn-outline-success" for="success-outlined3">5</label>
          <input type="radio" class="btn-check" name="size" name="options-outlined" value="5.5" id="success-outlined4" autocomplete="off" <?php echo ($_POST['size'] == "5.5") ? " checked" : "";?>>
          <label class="btn btn-outline-success" for="success-outlined4">5.5</label>
          <input type="radio" class="btn-check" name="size" name="options-outlined" value="6" id="success-outlined5" autocomplete="off" <?php echo ($_POST['size'] == "6") ? " checked" : "";?>>
          <label class="btn btn-outline-success" for="success-outlined5">6</label>
          <input type="radio" class="btn-check" name="size" name="options-outlined" value="6.5" id="success-outlined6" autocomplete="off" <?php echo ($_POST['size'] == "6.5") ? " checked" : "";?>>
          <label class="btn btn-outline-success" for="success-outlined6">6.5</label>
          <input type="radio" class="btn-check" name="size" name="options-outlined" value="7" id="success-outlined7" autocomplete="off" <?php echo ($_POST['size'] == "7") ? " checked" : "";?>>
          <label class="btn btn-outline-success" for="success-outlined7">7</label>
          <input type="radio" class="btn-check" name="size" name="options-outlined" value="7.5" id="success-outlined8" autocomplete="off" <?php echo ($_POST['size'] == "7.5") ? " checked" : "";?>>
          <label class="btn btn-outline-success" for="success-outlined8">7.5</label>
          <input type="radio" class="btn-check" name="size" name="options-outlined" value="8" id="success-outlined9" autocomplete="off" <?php echo ($_POST['size'] == "8") ? " checked" : "";?>>
          <label class="btn btn-outline-success" for="success-outlined9">8</label>
          <input type="radio" class="btn-check" name="size" name="options-outlined" value="8.5" id="success-outlined10" autocomplete="off" <?php echo ($_POST['size'] == "8.5") ? " checked" : "";?>>
          <label class="btn btn-outline-success" for="success-outlined10">8.5</label>
          <input type="radio" class="btn-check" name="size" name="options-outlined" value="9" id="success-outlined11" autocomplete="off" <?php echo ($_POST['size'] == "9") ? " checked" : "";?>>
          <label class="btn btn-outline-success" for="success-outlined11">9</label>
          <input type="radio" class="btn-check" name="size" name="options-outlined" value="9.5" id="success-outlined12" autocomplete="off" <?php echo ($_POST['size'] == "9.5") ? " checked" : "";?>>
          <label class="btn btn-outline-success" for="success-outlined12">9.5</label>
          <input type="radio" class="btn-check" name="size" name="options-outlined" value="10" id="success-outlined12" autocomplete="off" <?php echo ($_POST['size'] == "10") ? " checked" : "";?>>
          <label class="btn btn-outline-success" for="success-outlined13">10</label>
          <input type="radio" class="btn-check" name="size" name="options-outlined" value="10.5" id="success-outlined14" autocomplete="off" <?php echo ($_POST['size'] == "10.5") ? " checked" : "";?>>
          <label class="btn btn-outline-success" for="success-outlined14">10.5</label>
          <input type="radio" class="btn-check" name="size" name="options-outlined" value="11" id="success-outlined15" autocomplete="off"<?php echo ($_POST['size'] == "11") ? " checked" : "";?>>
          <label class="btn btn-outline-success" for="success-outlined15">11</label>
          </div>
          <div class="row justify-content-center mt-3">
          <button type="submit" class="btn btn-primary col-4">Search</button>  
          </div>
        </form>
    </div>
    </div>
</body>
</html>
<?php include './pages/footer.php'; ?> 
      <div class='row justify-content-center align-items-center mt-5'>
        <div class='col-6'>
          <div class='list-group'>
  <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
      $size = $_POST['size'];
    
      $proDir = "./data/products.json";
      $file = fopen($proDir,'r');
      $data = json_decode(fread($file,filesize($proDir)),true);
                foreach($data as $key => $val){
                    if($val['size'] == $size){
                        echo "<a href='#'class='list-group-item list-group-item-action list-group-item-primary'>".$val['pName']."</a>";
                    }
                }
              }
              ?>
          </div>
        </div>
      </div>