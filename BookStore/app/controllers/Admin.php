<?php
class Admin extends Controller
{
    public function __construct()
    {
        $this->bookModel = $this->model('bookModel');

    }

    public function index()
    {
        if (isLoggedIn()) {
            $this->view('Admin/index');
        }
        else {
            $this->view('Home/index');
        }
    }

    public function imageUpload(){
        if (isLoggedIn()) {
        //default value for the picture
        $filename=false;
        
        //save the file that gets sent as a picture
        $file = $_FILES['image'];
        
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
        else {
            $this->view('Home/index');
        }
    }

    public function addBook(){
        if (isLoggedIn()) {
            if(!isset($_POST['addBook'])){
                $this->view('Admin/addBook');
            }
            else{
                $filename= $this->imageUpload();
                $data=[
                    'bookname' => trim($_POST['title']),
                    'isbn' => trim($_POST['isbn']),
                    'author' => trim($_POST['author']),
                    'publisher' => trim($_POST['publisher']),
                    'retailprice' => trim($_POST['price']),
                    'availablequantity' => trim($_POST['quantity']),
                    'image' => $filename,
                    'description' => trim($_POST['desc']),
                    'category' => trim($_POST['category'])
                ];
               
                if($this->bookModel->addBook($data)){
                    echo 'Book Addded!';
                    echo '<meta http-equiv="Refresh" content="2; url=/eCommerceProject/BookStore/Admin/index">';
                }
            }
        }
    }

    public function manageProducts() {
        if (isLoggedIn()){
            // $this->view('Admin/manageProducts');
            $books = $this->bookModel->getAllBooks();
            
            if (!empty($books)) {
                $data = [
                    "books" => $books
                ];

                $this->view('Admin/manageProducts', $data);
            }
        }
        else {
            $this->view('Home/index');
        }
    }

    public function details($bookID) {

    }

    // public function editBook($bookID) {
    //     $book = $this->bookMdel->getSingleBook($bookID) ;
    //     if 
    // }

    public function delete($bookID) {
        if (isLoggedIn()) {
            $data = [
                'bookID' => $bookID
            ];
            if ($this->bookModel->delete($data)) {
                echo 'Please wait we are deleting the book for you!';
                echo '<meta http-equiv="Refresh" content=".2; url='.URLROOT.'/Admin/manageProducts">';
            }
        }
        else {
            $this->view('Home/index');
        }
    }

    public function editProfile() {
        if (isLoggedIn()) {
        // just take sessionid as the data 
        $this->view('Admin/editProfile');
        }
        else {
            $this->view('Home/index');
        }
    }
}