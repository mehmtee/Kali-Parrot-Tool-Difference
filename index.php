<?php 

$filep = fopen("parrot.txt",'r');
$parrot_array = explode(',',fread($filep,filesize("parrot.txt")));
$file = fopen("kali.txt", "r");

while (!feof($file)) {
	$kali_array[] = fgets($file);
}

$parrot_array=array_map('trim',$parrot_array);
$kali_array=array_map('trim',$kali_array);


$parrot_array = array_map('strtolower', $parrot_array);
$kali_array = array_map('strtolower', $kali_array);
$ortaklar = [];
$parrot_array = array_unique($parrot_array);
$kali_array = array_unique($kali_array);


$ortaklar = [];


foreach ($parrot_array as $key)
{
	foreach ($kali_array as $keys)
	{

		if($key == $keys)
		{
			array_push($ortaklar, $key);
		}

	}
}


 array_diff($parrot_array,$kali_array);






?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>


<h5 style="color:gray">Created By Mehmet Değirmenci</h5>
<div class="container">
	

	<div class="row">
		<div class="col-4 text-center">
			<h3>KALİ LİNUX</h3>	
		</div>
		

		<div class="col-4 text-center">
						<h3>ORTAK</h3>	

		</div>


		<div class="col-4 text-center">
									<h3>PARROT OS</h3>	

		</div>


	</div>



	<div class="row">




  <table class="table table-dark table-striped col-4 mt-3">
    <thead>
      <tr>
        <th>Kali Linux</th>
      </tr>
    </thead>
    <tbody>


    	<?php foreach (array_diff($kali_array,$parrot_array) as $key) {?>
      <tr>
        <td><?php echo $key ?></td>
      </tr>
      <?php } ?>



    </tbody>
  </table>


  <table class="table table-dark table-striped col-4 mt-3">
    <thead>
      <tr>
        <th>ORTAKLAR</th>
      </tr>
    </thead>
    <tbody>


    	<?php foreach ($ortaklar as $key) {?>
      <tr>
        <td><?php echo $key ?></td>
      </tr>
      <?php } ?>



    </tbody>
  </table>





  <table class="table table-dark table-striped col-4 mt-3">
    <thead>
      <tr>
        <th>Parrot Os</th>
      </tr>
    </thead>
    <tbody>


    	<?php foreach ( array_diff($parrot_array,$kali_array) as $key) {?>
      <tr>
        <td><?php echo $key ?></td>
      </tr>
      <?php } ?>



    </tbody>
  </table>













</div>
</div>

</body>
</html>
