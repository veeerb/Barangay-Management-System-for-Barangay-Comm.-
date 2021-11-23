<?php 
  class crud{
        //private database object
        private $db;
        //constructor to initialize private variable to the database connection
        function __construct($conn){
        $this->db = $conn;
        }
        public function insertResidents($lname, $fname, $mname, $dob, $email, $contactno, $emergencyno, $gender){
          try {
            $sql = "INSERT INTO user (lastname, firstname, middlename, dateofbirth, emailaddress, contactno, emergencyno, gender_id)VALUES (:lname, :fname, :mname, :dob, :email, :contactno, :emergencyno, :gender)";
            //prepare the sql statement for execution
            $stmt = $this->db->prepare($sql);
            //bind all placeholder to the actual values
            $stmt->bindparam(':lname',$lname);
            $stmt->bindparam(':fname',$fname);
            $stmt->bindparam(':mname',$mname);
            $stmt->bindparam(':dob',$dob);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':contactno',$contactno);
            $stmt->bindparam(':emergencyno',$emergencyno);
            $stmt->bindparam(':gender',$gender);
            //execute statement
            $stmt->execute();
            return true;



          } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
          }
        }
        public function editResident($id,$lname, $fname, $mname, $dob, $email, $contactno, $emergencyno, $gender){
         try{
          $sql = "UPDATE `user` SET `lastname`=:lname,`firstname`= :fname,`middlename`= :mname,`dateofbirth`= :dob,`emailaddress`= :email,`contactno`= :contactno,`emergencyno`= :emergencyno,`gender_id`= :gender WHERE user_id = :id";

          $stmt = $this->db->prepare($sql);
          //bind all placeholder to the actual values
          $stmt->bindparam(':id',$id);
          $stmt->bindparam(':lname',$lname);
          $stmt->bindparam(':fname',$fname);
          $stmt->bindparam(':mname',$mname);
          $stmt->bindparam(':dob',$dob);
          $stmt->bindparam(':email',$email);
          $stmt->bindparam(':contactno',$contactno);
          $stmt->bindparam(':emergencyno',$emergencyno);
          $stmt->bindparam(':gender',$gender);
          //execute statement
          $stmt->execute();
          return true;
          
         }catch (PDOException $e) {
          echo $e->getMessage();
          return false;
         }
        
        }
        public function getResidents(){
         try{
          $sql = "SELECT * FROM `user` u inner join genders g on u.gender_id = g.gender_id";
          $result = $this->db->query($sql);
          return $result;
         }catch (PDOException $e) {
          echo $e->getMessage();
          return false;
         }
           

        
        }
        public function getResidentDetails($id){
         try{
          $sql = "select * from user u inner join genders g on u.gender_id = g.gender_id where user_id = :id";
          $stmt = $this->db->prepare($sql);
          $stmt->bindparam(':id', $id);
          $stmt->execute();
          $result = $stmt->fetch();
          return $result;
        }catch (PDOException $e) {
          echo $e->getMessage();
          return false;
         }
          
        }

        public function deleteResident($id){
       try {
        $sql = "delete from user where user_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute(); 
        return true;

        }catch (PDOException $e) {
          echo $e->getMessage();
          return false;
          }
        }

        public function getGenders(){
          try{
            $sql = "SELECT * FROM `genders`";
            $result = $this->db->query($sql);
            return $result;
          }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
            }
        
        }
      
        }
?>