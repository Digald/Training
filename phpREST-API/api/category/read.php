<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  include_once '../../config/Database.php';
  include_once '../../models/Category.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();
  // Instantiate blog post object
  $category = new Category($db);

  // Blog post query
  $result = $category->read();
  // Get row count
  $num = $result->rowCount();

  // Check if any categories
  if($num > 0) {
    // Post array
    $categories_arr = array();
    // $posts_arr['data'] = array();
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);
      $cat_item = array(
        'id' => $id,
        'name' => $name
      );
      // Push to "data"
      array_push($categories_arr, $cat_item);
      // array_push($posts_arr['data'], $post_item);
    }
    // Turn to JSON & output
    echo json_encode($categories_arr);
  } else {
    // No categories
    echo json_encode(
      array('message' => 'No Categories Found')
    );
  }