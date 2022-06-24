<?php

include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operations</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class=" container mx-auto px-5 my-20 " >
<!-- Add User Button -->
<div class="md:flex md:items-center">
            <div class="md:w-1/3">
              <button class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"><a href="index.php">Add More Enteries</a>
            
            
            
            
            
            </button>
            </div>
          </div>

          <!-- USer entries Table -->

          <div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full">
          <thead class="bg-white border-b">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left" >
                S. No
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Name
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Age
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Gender
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                E-mail
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Phone
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Other
              </th>

              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Operations
              </th>
            </tr>
          </thead>
          <tbody>

<?php

$queryOutput= "Select * from `trip`.`trip`";
$result=mysqli_query($con,$queryOutput);


if($result){
    $sno=0;
    while($row=mysqli_fetch_assoc($result)){
$sno++;
//should be Name instead of name because we give NAme capital to fileds while creating table.
$id=$row['id'];
$name = $row['Name'];
$age = $row['Age'];
$gender = $row['Gender'];
$email = $row['Email'];
$phone = $row['Phone'];
$other = $row['Other'];

echo'


<tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">'.$sno.'</td>
<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
'.$name.'
</td>
<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
'.$age.'
</td>
<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
'.$gender.'
</td>
<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
'.$email.'
</td>
<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
'.$phone.'
</td>
<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
'.$other.'
</td>
<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
<button class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"><a href="update.php?updateid='.$id.'">Update</a></button>
<button class="m-2 shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
</td>
</tr>



';

    }

}

?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

    </div>

    
</body>
</html>