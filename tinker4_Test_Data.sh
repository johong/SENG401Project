#!/bin/bash


php artisan tinker

// User Data insert:
$filename = './User_SampleData.csv';
$delimiter = ',';

if (!file_exists($filename) || !is_readable($filename))\
  echo "error";

// 1) Test up to the above portion^^^^
// If "error" is given, then there is an error in finding the csv file

$header = null;
$data = array();
if (($handle = fopen($filename, 'r')) !== false)\
{
    while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
    {
        if (!$header)
            $header = $row;
        else
            $data[] = array_combine($header, $row);
    }
    fclose($handle);
}

$csvArr = $data;

// 2) Test up to the above portion^^^^
// If you see all the users (Lucashiv...), then continue

foreach($csvArr as $record){\
  $user = new App\User;
  $user->email = $record["Email"];
  $user->name = $record["Name"];
  $user->password = Hash::make($record["Password"]);
  $user->save();
}

// 3) Test that your Users have saved to your database at this point




// Recipes Data insert:

$filename = './Recipe_SampleData.csv';
$delimiter = ',';

if (!file_exists($filename) || !is_readable($filename))\
  echo "error";

// 1) Test up to the above portion^^^^
// If "error" is given, then there is an error in finding the csv file

$header = null;
$data = array();
if (($handle = fopen($filename, 'r')) !== false)\
{
    while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
    {
        if (!$header)
            $header = $row;
        else
            $data[] = array_combine($header, $row);
    }
    fclose($handle);
}

$csvArr = $data;

// 2) Test up to the above portion^^^^
// If you see all the recipes (Fresh Apple Cake With Caramel Sauce), then continue

foreach($csvArr as $record){\
  $recipe = new App\Recipe;
  $recipe->id = $record["Id"];
  $recipe->image_url = $record["Image_url"];
  $recipe->name = $record["Name"];
  $recipe->save();
  $user = App\User::all()->where('name',$record['User_name']);
  $recipe->users()->sync($user);
}


// Ingredients Data insert:

$filename = './Ingredient_SampleData.csv';
$delimiter = ',';

if (!file_exists($filename) || !is_readable($filename))\
  echo "error";

// 1) Test up to the above portion^^^^
// If "error" is given, then there is an error in finding the csv file

$header = null;
$data = array();
if (($handle = fopen($filename, 'r')) !== false)\
{
    while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
    {
        if (!$header)
            $header = $row;
        else
            $data[] = array_combine($header, $row);
    }
    fclose($handle);
}

$csvArr = $data;

// 2) Test up to the above portion^^^^
// If you see all the recipes (pork), then continue

foreach($csvArr as $record){\
  $ingredient = new App\Ingredient;
  $ingredient->id = $record["Id"];
  $ingredient->name = $record["Name"];
  $ingredient->save();
  $user = App\User::all()->where('name',$record['User_name']);
  $ingredient->users()->sync($user);
}
