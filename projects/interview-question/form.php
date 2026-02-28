<?php 
$con=mysqli_connect("localhost","root","","test_db");
if(isset($_POST["chk"]))
{
  $hobby=$_POST["hobbies"];
  $h=implode(",",$hobby);
  $insert="insert into resgister(hobby) values('$h')";
  $query=mysqli_query($con,$insert);
//   echo "success";

echo "<script>
alert('success')
</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<title>Hobbies Form</title>
</head>
<body class="bg-gray-100  items-center justify-center min-h-screen">

<form method="post" class="bg-white p-6 rounded-lg shadow-md w-full max-w-md" action="#" method="POST">
<h2 class="text-2xl font-semibold mb-4 text-gray-700">Select Your Hobbies</h2>

<!-- Multiple Select -->
<label for="hobbies" class="block text-gray-600 mb-2">Hobbies</label>
<select id="hobbies" name="hobbies[]" multiple
class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 mb-4">
<option value="reading">Reading</option>
<option value="traveling">Traveling</option>
<option value="gaming">Gaming</option>
<option value="cooking">Cooking</option>
<option value="sports">Sports</option>
<option value="music">Music</option>
<option value="painting">Painting</option>
</select>

<!-- Submit Button -->
<button type="submit" name="chk"
class="w-1/2 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md transition-colors duration-300">
Submit
</button>
</form>

  <div class="overflow-x-auto w-1/2">
      <table class="min-w-full bg-white">
        <thead class="bg-gray-200 text-gray-700 uppercase text-sm">
          <tr>
            <th class="py-3 px-6 text-left">ID</th>
            <th class="py-3 px-6 text-left">Hobbies</th>
          </tr>
        </thead>
        <tbody class="text-gray-600 text-sm">
          <?php 
           $select="select * from resgister";
           $query=mysqli_query($con,$select);
           while($fetch=mysqli_fetch_array($query))
            {
          ?>
          <tr class="border-b hover:bg-gray-50">
            <td class="py-3 px-6"><?php echo $fetch["rid"];?></td>
            <td class="py-3 px-6"><?php echo $fetch["hobby"];?></td>
          </tr>

          <?php 
            }
            ?>
      
        </tbody>
      </table>
    </div>
  

</body>
</html>