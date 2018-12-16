<section class="card card-body mx-3 col-sm-6 center mx-auto mt-5 mb-5"><?php 
  
  if(isset($_GET['name'])){
    $name = htmlentities($_GET['name']);
    echo $name;

  }

  /*

  if(isset($_POST['name'])){
    print_r($_POST);
    $name = htmlentities($_POST['name']);
    // echo $name;
  }

  if(isset($_REQUEST['name'])){
    print_r($_REQUEST);
    $name = htmlentities($_REQUEST['name']);
    echo $name;
  } 
  

  echo $_SERVER['QUERY_STRING'];

  */
?></section>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <title>My Website</title>
</head>
<body>
  <section class="card card-body mx-3 col-sm-6 center mx-auto mt-5 mb-5">
  <h1><?php echo "{$name}'s Profile"; ?></h1>
    <ul>
      <li>
        <a href="get_post.php?name=Vonds">Vonds</a>
      </li>
      <li>
        <a href="get_post.php?name=Yoda">Yoda</a>
      </li>
    </ul>
  </section>

  
  <section class="card card-body mx-3 col-sm-6 center mx-auto mt-5 mb-5">
  <form method="GET" action="get_post.php">
    <section class="form-group">
      <label for="name">Name</label>
      <input class="form-control" type="text" name="name">
    </section>
    <section class="form-group">
      <label for="email">Email</label>
      <input class="form-control" type="text" name="email">
    </section>
    <input class="btn btn-dark" type="submit" value="Submt">
  </form>
  
  </section>
  
</body>
</html>