<?php
    class Car{
        private $db;
        public function __construct(){
            $this->db = new Database;
        }
        //Get All Cars
        public function getAllCars(){
            $this->db->query("SELECT cars.*,categories.name AS cname 
                FROM Cars
                INNER JOIN categories
                ON cars.category_id = categories.id
                ");
        //Assign Result Set
        $results = $this->db->resultSet();
        return $results;
        }
        //Get Categories
        public function getCategories(){
            $this->db->query("SELECT * FROM categories");
        //Assign Result Set
        $results = $this->db->resultSet();
        return $results;
        }
        //get cars by category
        public function getByCategory($category){
            $this->db->query("SELECT cars.*,categories.name AS cname 
                FROM Cars
                INNER JOIN categories
                ON cars.category_id = categories.id
                WHERE cars.category_id = $category
                ");
            $results = $this->db->resultSet();
            return $results;
        }
        public function getCategory($category_id){
            $this->db->query("SELECT * FROM categories WHERE id=:category_id");
            $this->db->bind(':category_id', $category_id);
            //assign the row 
            $row=$this->db->single();
            return $row;
        }
        // GET Car **********************************************************************************************
        public function getCar($id){
            $this->db->query("SELECT * FROM cars WHERE id=:id");
            $this->db->bind(':id', $id);
            //assign the row 
            $row=$this->db->single();
            return $row;
        }
        // CREATE car ***************************************************************************************************
        public function create($data){
            //insert query
            $this->db->query("INSERT INTO cars (category_id, car_make, dealer, car_model, location, price, contact_user, contact_email)
            VALUES(:category_id, :car_make, :dealer, :car_model, :location, :price, :contact_user, :contact_email)");
            //bind data
            $this->db->bind(':category_id', $data['category_id']);
            $this->db->bind(':car_make', $data['car_make']);
            $this->db->bind(':dealer', $data['dealer']);
            $this->db->bind(':car_model', $data['car_model']);
            $this->db->bind(':location', $data['location']);
            $this->db->bind(':price', $data['price']);
            $this->db->bind(':contact_user', $data['contact_user']);
            $this->db->bind(':contact_email', $data['contact_email']);
            //execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }

        }
        // DELETE Car **************************************************************************************************
        public function delete($id){
            $this->db->query("DELETE FROM cars WHERE id=$id");
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }
        // UPDATE car *************************************************************************************************************
        public function update($id, $data){
            $this->db->query("UPDATE cars
            SET 
            category_id = :category_id,
            car_make = :car_make,
            dealer = :dealer,
            car_model = :car_model,
            location = :location,
            price = :price,
            contact_user = :contact_user,
            contact_email = :contact_email
            WHERE id=$id
            ");
            $this->db->bind(':category_id', $data['category_id']);
            $this->db->bind(':car_make', $data['car_make']);
            $this->db->bind(':dealer', $data['dealer']);
            $this->db->bind(':car_model', $data['car_model']);
            $this->db->bind(':location', $data['location']);
            $this->db->bind(':price', $data['price']);
            $this->db->bind(':contact_user', $data['contact_user']);
            $this->db->bind(':contact_email', $data['contact_email']);
            //execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
    }
}