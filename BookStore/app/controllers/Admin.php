<?php
class Admin extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('Admin/index');
    }


    
    public function imageUpload(){
        //default value for the picture
        $filename=false;
        
        //save the file that gets sent as a picture
        $file = $_FILES['picture'];
        
        $acceptedTypes = ['image/jpeg'=>'jpg',
            'image/gif'=>'gif',
            'image/png'=>'png'];
        //validate the file
        
        if(empty($file['tmp_name']))
            return false;

        $fileData = getimagesize($file['tmp_name']);

        if($fileData!=false && in_array($fileData['mime'],array_keys($acceptedTypes))){

            //save the file to its permanent location
                
            $folder = dirname(APPROOT).'/public/img';
            $filename = uniqid() . '.' . $acceptedTypes[$fileData['mime']];
            move_uploaded_file($file['tmp_name'], "$folder/$filename");
        }
        return $filename;
    }

    public function addProduct(){
            if(!isset($_POST['add'])){
                $this->view('Admin/addProduct');
            }
            else{
                $filename= $this->imageUpload();
                $data=[
                    'bookname' => trim($_POST['bookname']),
                    'isbn' => trim($_POST['isbn']),
                    'author' => trim($_POST['author']),
                    'publisher' => trim($_POST['publisher']),
                    'publisheddate' => trim($_POST['publisheddate']),
                    'retailprice' => trim($_POST['retailprice']),
                    'availablequantity' => trim($_POST['availablequantity']),
                    'picture' => $filename,
                    'description' => trim($_POST['description']),
                ];
               
                if($this->userModel->addBook($data)){
                    echo 'Book Addded!';
                    echo '<meta http-equiv="Refresh" content="2; url=/BookStore/Admin/addProduct">';
                }
            }
        }
}
