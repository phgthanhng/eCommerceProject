<?php
class Admin extends Controller
{
    public function __construct()
    {
        $this->orderModel = $this->model('orderModel');
        $this->bookModel = $this->model('bookModel');
        $this->userModel = $this->model('userModel');
        if (!isLoggedIn()) {
            header('Location: /eCommerceProject/BookStore/Login');
        }
    }

    public function index()
    {
        $this->view('Admin/index');
    }

    public function imageUpload()
    {
        //default value for the picture
        $filename = false;

        //save the file that gets sent as a picture
        $file = $_FILES['image'];

        $acceptedTypes = ['image/jpeg' => 'jpg',
            'image/gif' => 'gif',
            'image/png' => 'png'];
        //validate the file

        if (empty($file['tmp_name'])) {
            return false;
        }

        $fileData = getimagesize($file['tmp_name']);

        if ($fileData != false && in_array($fileData['mime'], array_keys($acceptedTypes))) {

            //save the file to its permanent location

            $folder = dirname(APPROOT) . '/public/img';
            $filename = uniqid() . '.' . $acceptedTypes[$fileData['mime']];
            move_uploaded_file($file['tmp_name'], "$folder/$filename");
        }
        return $filename;

    }

    public function addBook()
    {
        if (!isset($_POST['addBook'])) {
            $this->view('Admin/addBook');
        } else {
            $filename = $this->imageUpload();
            $data = [
                'bookname' => trim($_POST['title']),
                'isbn' => trim($_POST['isbn']),
                'author' => trim($_POST['author']),
                'publisher' => trim($_POST['publisher']),
                'retailprice' => trim($_POST['price']),
                'availablequantity' => trim($_POST['quantity']),
                'image' => $filename,
                'description' => trim($_POST['desc']),
                'category' => trim($_POST['category']),
            ];

            if ($this->bookModel->addBook($data)) {
                echo 'Book Addded!';
                echo '<meta http-equiv="Refresh" content="2; url=/eCommerceProject/BookStore/Admin/index">';
            }
        }

    }

    public function manageProducts()
    {

        // $this->view('Admin/manageProducts');
        $books = $this->bookModel->getAllBooks();

        if (!empty($books)) {
            $data = [
                "books" => $books,
            ];

            $this->view('Admin/manageProducts', $data);
        }

    }

    public function details($bookID)
    {

    }

    // public function editBook($bookID) {
    //     $book = $this->bookMdel->getSingleBook($bookID) ;
    //     if
    // }

    public function delete($bookID)
    {
        $data = [
            'bookID' => $bookID,
        ];
        if ($this->bookModel->delete($data)) {
            echo 'Please wait we are deleting the book for you!';
            echo '<meta http-equiv="Refresh" content=".2; url=' . URLROOT . '/Admin/manageProducts">';
        }

    }

    public function editBook($bookID)
    {
        $book = $this->bookModel->getSingleBook($bookID);
        if (!isset($_POST['addBook'])) {
            $this->view('Admin/editBook', $book);
        } else {
            if (is_uploaded_file($_FILES['image']['tmp_name'])) {
                $filename = $this->imageUpload();
            }
            else{
                $filename = $book->image;
            }
            $data = [
                'bookname' => trim($_POST['title']),
                'isbn' => trim($_POST['isbn']),
                'author' => trim($_POST['author']),
                'publisher' => trim($_POST['publisher']),
                'retailprice' => trim($_POST['price']),
                'availablequantity' => trim($_POST['quantity']),
                'image' => $filename,
                'description' => trim($_POST['desc']),
                'category' => trim($_POST['category']),
                'bookID' => $bookID,
            ];

            if ($this->bookModel->editBook($data)) {
                echo 'Update book successfull!';
                echo '<meta http-equiv="Refresh" content="2; url=/eCommerceProject/BookStore/Admin/manageProducts">';
            }
        }
    }

    public function displayUsers()
    {
        $users = $this->userModel->getUsers();
        if (!empty($users)) {
            $data = [
                "users" => $users,
            ];
            $this->view('Admin/displayUsers', $data);
        }
    }

    /**
     * display view for manageOrders
     */
    public function manageOrders() {
        $orders = $this->orderModel->getAllOrders();

        if (!empty($orders)) {
            $data = [
                "orders" => $orders
            ];
        }
        $this->view('Admin/manageOrders', $data);
    }

    /**
     * view details of a specific order
     */
    public function orderDetails($orderID) {

    }

    /**
     * mark order as shipped
     */
    public function markAsShipped($orderID) {
        $status = 'shipped';
        $data = [
            "status" => $status,
            "orderID" => $orderID
        ];
        if ($this->orderModel->updateOrderStatus($data)) {
            echo 'Updating the status of the order';
            echo '<meta http-equiv="Refresh" content=".2; url=' . URLROOT . '/Admin/manageOrders/">';
        }
       
    }

    /**
     * mark order as completed
     */
    public function markAsCompleted($orderID) {
        $status = 'completed';
        $data = [
            "status" => $status,
            "orderID" => $orderID
        ];
        if ($this->orderModel->updateOrderStatus($data)) {
            echo 'Updating the status of the order';
            echo '<meta http-equiv="Refresh" content=".2; url=' . URLROOT . '/Admin/manageOrders/">';
        }
    }

    /**
     * to get the view of completedOrders.php
     */
    public function completedOrders() {
        $orders = $this->orderModel->getAllCompletedOrders();

        // if (!empty($orders)) {
            $data = [
                "orders" => $orders
            ];
        // }
        $this->view('Admin/completedOrders', $data);
    }

    /**
     * to delete a completed order
     */
    public function deleteCompletedOrder($orderID)
    {
        $data = [
            'orderID' => $orderID,
        ];
        if ($this->orderModel->deleteOrder($data)) {
            echo 'Please wait we are deleting the book for you!';
            echo '<meta http-equiv="Refresh" content=".2; url=' . URLROOT . '/Admin/completedOrders/">';
        }

    }
  }