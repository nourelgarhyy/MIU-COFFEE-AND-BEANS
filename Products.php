<?php
include ('databaseConn.php');

class Product{
 
public $id;
	public $productName;
	public $img;
	public $price;
	public $description;
	
	
    public function __construct($id){
    		if ($id !="")
		{
       	$DB=new Database();
         $sql = "SELECT * FROM product WHERE ID='$id' ";
        
         $result=mysqli_query($DB->conn,$sql);
	if ($row = mysqli_fetch_array($result))
			{
				$this->id=$row["id"];
				$this->productName=$row["name"];
				$this->img=$row["image"];
				$this->price=$row["Price"];
				$this->description=$row["Description"];

							}

  }
  }
   

  
  	static function SelectAllProductsInDB()
	{
		 $DB=new Database();
		$sql="select * from product";

		$result = mysqli_query($DB->conn,$sql);
		$i=0;
		$Result;
		while ($row = mysqli_fetch_array($result))
		{
			$MyObj= new Product($row["id"]);
			$products[$i]=$MyObj;
			$i++;
		}
		return $products;
	}
  
  
 
}
?>
