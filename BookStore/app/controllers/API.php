<?php
class API extends Controller
{
    public function __construct()
    {
    }

    /*
    * Calls the display page of the API
    */
    public function index()
    {
        $data = $this->api_call("https://api.nytimes.com/svc/books/v3/lists/best-sellers/history.json?api-key=DxchxA33AYfMQ2r4tsjkrdg4jlohwzlA");
        $this->view('API/bestSellers',$data);
    }

    /*
     * Makes a call to the bestsellers API of New York Times 
     */
    public function api_call($url){ 
        $json_data = file_get_contents($url);
        $response_data = json_decode($json_data);
        return $response_data;
    }

}