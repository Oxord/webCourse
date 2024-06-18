<?php
  $method = $_SERVER['REQUEST_METHOD'];

  const HOST = 'localhost';
  const USERNAME = 'root';
  const PASSWORD = '';
  const DATABASE = 'blog';
  const Error = 'Error';

  function createDBConnection(): mysqli {
      $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
      if ($conn->connect_error) 
      {
          die("Connection failed: " . $conn->connect_error);
      }
      return $conn;
  }

  function closeDBConnection(mysqli $conn): void {
  $conn->close();
  }

  function savePostToDb(mysqli $conn): void {
    $dataAsJson = file_get_contents("php://input");
    $dataAsArray = json_decode($dataAsJson, true);
    $IsValidData = ValidateParams($dataAsArray);
    
    if ($IsValidData) {
      $img_path = saveImage($dataAsArray['image_url']); 
      if ($img_path <> Error)
        $img_author_path = saveImage($dataAsArray['author_url']);
      else
        $img_author_path = Error;
    }
    if ($IsValidData && $img_author_path <> Error)
    {
      $sql = "INSERT INTO post(title,  subtitle, content, author, author_url, publish_date, image_url, featured) VALUES
      ( 
        '{$dataAsArray['title']}',
        '{$dataAsArray['subtitle']}',
        '{$dataAsArray['content']}',
        '{$dataAsArray['author']}',
        '{$img_author_path}',
        '{$dataAsArray['publish_date']}',
        '{$img_path}',
        {$dataAsArray['featured']}
      )";
      $result = $conn->query($sql);
    }
  }

  function ValidateParams(&$data): bool
  {
    if ($data['title'] <> NULL && $data['subtitle'] <> NULL && $data['content'] <> NULL && 
        $data['author'] <> NULL && $data['publish_date'] <> NULL)
    {
      if ($data['featured'] <= 1 && $data['featured'] >= 0)
        return true;
      print_r('Значени флага featured принимает значения от 0 до 1.');
      return false;
    }
    print_r('Введённые данные не корректны. Убедитесь, что все поля заполнены.');
    return false;
  }
  function saveImage(string $imageBase64): string {
      $name = random_int(1, 99999);
      $imageBase64Array = explode(';base64,', $imageBase64);
      $imgExtention = str_replace('data:image/', '', $imageBase64Array[0]);
      $imageDecoded = base64_decode($imageBase64Array[1]);
      if ($imageDecoded)
        $IsSavedSuccessed = saveFile("static/images/image{$name}.{$imgExtention}", $imageDecoded);
      else
        return Error;
      if ($IsSavedSuccessed){
        $path = "static/images/image{$name}.{$imgExtention}";
        return $path;
      }
      else{
        return Error;
      }
  }

  function saveFile(string $file, string $data): bool {
      $myFile = fopen($file, 'w');
      if ($myFile) {
        $result = fwrite($myFile, $data);
        if ($result) {
          return true;
        } else {
          return false;
        }
        fclose($myFile);
      } else {
        return false;
      }
  } 

  $conn = createDBConnection();
  SavePostToDb($conn);
  closeDBConnection($conn);

?> 