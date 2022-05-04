<?php
class cartModel
{
    /*
     * Default constructor 
     */
    public function __construct()
    {
        $this->db = new Model();
    }

    /*
     * Creates a cart for a user
     */
    public function createCart($userID)
    {
        $this->db->query(
            "INSERT INTO cart(userID, totalprice)
                values(:userID, :totalprice)"
        );

        $this->db->bind(':userID', $userID);
        $this->db->bind(':totalprice', 0);

        return $this->db->execute();
    }

    /*
     * Retrieves cart based on the userID
     */
    public function getUserCart()
    {
        $this->db->query(
            "SELECT * 
                FROM cart 
                WHERE userID = :userID 
                ORDER BY cartID DESC LIMIT 1;"
        );

        $this->db->bind(':userID', $_SESSION['user_id']);

        return $this->db->getSingle();
    }

    /*
     * Create a cart item
     */
    public function createCartItem($data)
    {
        $this->db->query(
            "INSERT INTO cartitem(cartID, bookID, quantity, cartitemprice) 
                values (:cartID, :bookID, :quantity, :cartitemprice)"
        );

        $this->db->bind(':cartID', $data['cartID']);
        $this->db->bind(':bookID', $data['bookID']);
        $this->db->bind(':quantity', $data['quantity']);
        $this->db->bind(':cartitemprice', $data['subtotalPrice']);

        return $this->db->execute();
    }

    /*
     * Update cart column totalprice
     */
    public function updateCartTotalPrice($data)
    {
        $this->db->query(
            "UPDATE cart
                SET totalprice = :totalprice
                WHERE cartID = :cartID"
        );

        $this->db->bind(':totalprice', $data['withTaxPrice']);
        $this->db->bind(':cartID', $data['cartID']);

        return $this->db->execute();
    }

    /*
     * Retrieves all cart items based on the cart ID
     */
    public function getAllCartItems($cartID)
    {
        $this->db->query(
            "SELECT cart.cartID, 
                cartitem.cartitemID, cartitem.cartID, cartitem.bookID, cartitem.quantity, cartitem.cartitemprice, 
                book.bookID, book.bookname, book.retailprice, book.image, book.availablequantity
                FROM cart
                JOIN cartitem
                ON cartitem.cartID = cart.cartID
                JOIN book
                ON cartitem.bookID = book.bookID
                WHERE cartitem.cartID = :cartID"
        );

        $this->db->bind(':cartID', $cartID);

        return $this->db->getResultSet();
    }

    /*
     * Checks if a cartitem exist already in the cartitem table
     */
    public function isExistInCartItem($data)
    {
        $this->db->query(
            "SELECT * 
                FROM cartitem 
                WHERE (cartID = :cartID) 
                AND (bookID = :bookID)"
        );

        $this->db->bind(':cartID', $data['cartID']);
        $this->db->bind(':bookID', $data['bookID']);

        return $this->db->getSingle(); // returns a cartitem object
    }

    /*
     * Count the number of cart items in the cart
     */
    public function getCartItemCount($cartID)
    {
        $this->db->query(
            "SELECT * 
                FROM cartitem 
                WHERE cartID = :cartID"
        );

        $this->db->bind(':cartID', $cartID);

        return count($this->db->getResultSet());
    }

    /*
     * Get a specific cartitem based on the cartitemid
     */
    public function getCartItem($cartItemID)
    {
        $this->db->query(
            "SELECT * 
                FROM cartitem 
                WHERE cartitemID = :cartitemID"
        );
        $this->db->bind(':cartitemID', $cartItemID);

        return $this->db->getSingle();
    }

    /*
     * Updates a cart item quantity
     */
    public function updateCartItemQuantity($data)
    {
        // quantity and cartitemid
        $this->db->query(
            "UPDATE cartitem 
                        SET quantity = :quantity,
                        cartitemprice = :cartitemprice
                        WHERE cartitemID = :cartitemID"
        );

        $this->db->bind(':quantity', $data['quantity']);
        $this->db->bind(':cartitemID', $data['cartitemID']);
        $this->db->bind(':cartitemprice', $data['subtotal']);

        return $this->db->execute();
    }

    /*
     * Deletes a cart item from the cart
     */
    public function deleteCartItem($cartitemID)
    {
        $this->db->query(
            "DELETE 
                    FROM cartitem 
                    WHERE cartitemID=:cartitemID"
        );

        $this->db->bind(':cartitemID', $cartitemID);

        return $this->db->execute();
    }
}

?>
