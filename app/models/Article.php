<?php
/**
* Article Model
*/
class Article
{
  public static function first()
  {
    $connection = mysqli_connect("127.0.0.1", "root", "ksd_0520");
    if (!$connection) {
      die('Could not connect: ' . mysql_error());
    }

    // mysql_set_charset("UTF8", $connection);

    // mysql_select_db("mffc", $connection);

    // $result = mysql_query("SELECT * FROM articles limit 0,1");

    // if ($row = mysql_fetch_array($result)) {
    //   echo '<h1>'.$row["title"].'</h1>';
    //   echo '<p>'.$row["content"].'</p>';
    // }

    // mysql_close($connection);
  }
}