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
  $user->name = $record['name'];
  $user->iSBN = $record['email'];
  $user->year = $record['password'];
  $user->save();
}

// 3) Test that your Users have saved to your database at this point

// ------------------------------------------
// DO NOT EXECUTE BEYOND THIS POINT YET!!!!!
// ------------------------------------------



// Recipes Data insert:


$filename = './Recipes_SampleData.csv';
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
// If you see all the recipes (Lucashiv...), then continue

foreach($csvArr as $record){\
  $book = new App\Book;
  $book->name = $record['Name'];
  $book->iSBN = $record['ISBN'];
  $book->year = $record['Year'];
  $book->publisher = $record['Publisher'];
  $book->image = $record['Image'];
  $book->subscription = false;
  $book->save();
  $authors = explode(', ',$record['Authors']);
  foreach($authors as $author){
    $testAuthor = App\Authors::all()->where('name',$author);
    if(!$testAuthor->isEmpty()){
      $book->authors()->sync($testAuthor);
    }else{
      $newAuthor = new App\Authors;
      $newAuthor->name = $author;
      $newAuthor->save();
      $book->authors()->sync($newAuthor);
    }
  }
}
