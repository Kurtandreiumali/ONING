<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
//eto nalang gamitin mo model isa nalang
class Users_model extends Model {
    
    public function getInfoo()
    {
        return $this->db->table('prod')->get_all();
    }
    public function getCat()
    {
        return $this->db->table('cat')->get_all();
    }

    public function getCategories()
    {
        return $this->db->table('cat')->get_all();
    }
    public function searchInfoo($id)
    {
        return $this->db->table('prod')->where('id', $id)->get();
    }

    public function getPurchaseItemById($id)
    {
        return $this->db->table('purchase_items')->where('id', $id)->get();
    }

    

    public function getSales()
    {
        return $this->db->table('purchase_items')->get_all();
        // return $this->db->table('purchase_items')->order_by('order_at', 'DESC')->get_all();
    }

    public function updatePurchaseItem($id, $data)
{
    $this->db->where('purchase_id', $id);
    return $this->db->update('purchase_items', $data);  // Adjust the table name accordingly
}


    public function topProduct()
    {
        return $this->db->raw('
        SELECT
        Item_name,
        MAX(prize) AS max_prize,
        MAX(Item_image) AS max_image,
        SUM(quantity) AS total_quantity,
        SUM(total_price) AS total_sales
    FROM
        purchase_items
    WHERE
        YEAR(order_at) = YEAR(CURDATE())
    GROUP BY
        Item_name
    ORDER BY
    total_quantity DESC
    LIMIT 10;
            ');
        //Order by Items sold
    }

    public function getTodaySales()
    {
        $result = $this->db->raw('
            SELECT 
                SUM(total_price) AS today_sales 
            FROM 
                purchase_items 
            WHERE 
                DATE(order_at) = CURDATE()
        ');

        return $result[0]['today_sales'] ?? 0; // Access the result as an array
    }

    public function getMonthlySales()
    {
        $result = $this->db->raw('
            SELECT 
                SUM(total_price) AS monthly_sales 
            FROM 
                purchase_items 
            WHERE 
                MONTH(order_at) = MONTH(CURDATE()) 
                AND YEAR(order_at) = YEAR(CURDATE())
        ');

        return $result[0]['monthly_sales'] ?? 0;
    }

    public function getYearlySales()
    {
        $result = $this->db->raw('
            SELECT 
                SUM(total_price) AS yearly_sales 
            FROM 
                purchase_items 
            WHERE 
                YEAR(order_at) = YEAR(CURDATE())
        ');

        return $result[0]['yearly_sales'] ?? 0;
    }
    public function getWeeklySales()
    {
        $result = $this->db->raw('
            SELECT 
                SUM(total_price) AS weekly_sales 
            FROM 
                purchase_items 
            WHERE 
                YEARWEEK(order_at, 1) = YEARWEEK(CURDATE(), 1)
        ');

        return isset($result[0]['weekly_sales']) ? (float) $result[0]['weekly_sales'] : 0;
    }

    public function getOverallSales()
    {
        $result = $this->db->raw('
            SELECT 
                SUM(total_price) AS overall_sales 
            FROM 
                purchase_items
        ');

        return isset($result[0]['overall_sales']) ? (float) $result[0]['overall_sales'] : 0;
    }

    public function getInfo()
    {
        return $this->db->table('prod')->where('quantity', '>', 0)->get_all();
    }
    public function getpurchase()
    {
        return $this->db->table('purchase_items')->get_all();
    }
  
    public function searchInfo($searchTerm)
    {
        // return $this->db->table('prod')->where('id', $id)->get();
        return $this->db->table('prod')
        ->like('name', $searchTerm)
        ->where('quantity', '>', 0)
        ->get_all();
    }

    public function getInfoById($id)
    {
        return $this->db->table('prod')->select('*')->where('id', $id)->get();
    }

    public function getIcartById($id)
    {
        return $this->db->table('cart')->select('*')->where('id', $id)->get();
    }
   

    public function insertPurchaseData($bind)
    {
        return $this->db->table('purchase')->insert($bind);
    }

    public function clearCart($userId)
    {
        return $this->db->table('cart')->where('user_id', $userId)->delete();
    }
    public function updateProductQuantity($purchaseId)
    {
        // Get the purchase items for the given purchase_id
        $items = $this->db->table('purchase_items')
            ->where('purchase_id', $purchaseId)
            ->get_all();

        foreach ($items as $item) {
            // Update the product quantity using a raw SQL query
            $sql = "UPDATE prod SET quantity = quantity - ? WHERE id = ?";
            $this->db->raw($sql, [$item['quantity'], $item['prod_id']]);
        }
    }
    public function getorder($userId)
    {
        return $this->db->table('purchase_items')->where('CustomerId', $userId)->get_all();
    }  

    public function getusers()
    {
        return $this->db->table('users')->get_all();
    }
     public function addUser($data)
     {
        return $this->db->table('users')->insert($data);
     }
     public function getEmail($email)
     {
         return $this->db->table('users')->where('email', $email)->get();
     }

     public function getUserById($userId)
     {
         return $this->db->table('users')->where('id', $userId)->get();
     }
     public function getcart($user_id)
    {
        return $this->db->table('cart')->where('user_id', $user_id)->get_all();
    }

}















?>
