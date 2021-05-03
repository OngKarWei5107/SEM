<?php

//require_once 'C:/xampp/htdocs/MVC/Model/addModel.php';
require_once 'C:/xampp/htdocs/GROUP03_SEC02/Model/eventModel.php';
require_once 'C:/xampp/htdocs/GROUP03_SEC02/Model/packageModel.php';
?>

<?php

class Controller
{	
//Package
//Display
		public function displayPackageController($value='')
	{
		// assign the returned values(array of user object) to variable users
		$temp = packageModel::All(); // we use the static method All() that we
							  // created in user model to retrieve all 
							  // data for user
		return $temp;
	}

/*		public function indexPackageCategory($Package_Category)
	{
		// assign the returned values(array of user object) to variable users
		$temp = eventModel::byEventType($Event_Category); // we use the static method All() that we
							  // created in user model to retrieve all 
							  // data for user
		return $temp;
	}
*/

	//Add
		public function addPackageController()
	{

		$temp = new packageModel();
		
		//$temp->Event_ID = $_POST['ID'];
		$temp->EventPackage_Name = $_POST['Name'];
		$temp->EventPackage_Price = $_POST['Price'];
		$temp->EventPackage_Feature = $_POST['Feature'];

	

	    $temp->addPackage();
	    echo '<script type="text/javascript">
		window.location = "viewPackageS.php";
		</script>';	
	}


	//Get
    public function getPackageController($EventPackage_ID)
    {
        // get user object associate with $id
        $temp = packageModel::getByPackageID($EventPackage_ID);
        // return user object with the user details
        return $temp;
    }

    //Update
	public function updatePackageController($EventPackage_ID)
	{
		// get user data associate with $id
		$findUser = packageModel::getByPackageID($EventPackage_ID);
		// update/set the attributes of the user
		$temp = new packageModel();

		//$temp->EventPackage_ID = $_POST['ID'];
		$temp->EventPackage_Name = $_POST['Name'];
		$temp->EventPackage_Price = $_POST['Price'];
		$temp->EventPackage_Feature = $_POST['Feature'];

		// update the user data in database
		$temp->updatePackage();
	
	}

	//Delete
		public function deletePackageController($EventPackage_ID)
	{
		// get user data associate with $id
		$findUser = packageModel::getByPackageID($EventPackage_ID);
		// update/set the attributes of the user
		$temp = new packageModel();
		$temp->EventPackage_ID = $findUser['EventPackage_ID'];
		// delete the user
		$temp->deletePackage();

		// redirect the page
		echo '<script type="text/javascript">
		window.location = "viewPackageS.php";
		</script>';
	}

	//Search
	public function searchPackageController($value='')
	{
		$temp = packageModel::Searchable('EventPackage_Name', $_POST['search']);
		return $temp;
	}



//Event
//Display
		public function displayEventController($value='')
	{
		// assign the returned values(array of user object) to variable users
		$temp = eventModel::All(); // we use the static method All() that we
							  // created in user model to retrieve all 
							  // data for user
		return $temp;
	}

		public function indexEventCategory($Event_Category)
	{
		// assign the returned values(array of user object) to variable users
		$temp = eventModel::byEventType($Event_Category); // we use the static method All() that we
							  // created in user model to retrieve all 
							  // data for user
		return $temp;
	}


	//Add
		public function addEventController()
	{

		$temp = new eventModel();
		
		//$temp->Event_ID = $_POST['ID'];
		$temp->Event_Description = $_POST['Description'];
		$temp->Event_Name = $_POST['Name'];
		$temp->Event_Type = $_POST['Type'];
		$temp->Event_Date = $_POST['Date'];
		$temp->Event_Time = $_POST['Time'];
	

	    $temp->addEvent();
	    echo '<script type="text/javascript">
		window.location = "ViewEvent.php";
		</script>';	
	}


	//Get
    public function getEventController($Event_ID)
    {
        // get user object associate with $id
        $temp = eventModel::getByEventID($Event_ID);
        // return user object with the user details
        return $temp;
    }

    //Update
	public function updateEventController($Event_ID)
	{
		// get user data associate with $id
		$findUser = eventModel::getByEventID($Event_ID);
		// update/set the attributes of the user
		$temp = new eventModel();

		$temp->Event_ID = $findUser['ID'];
		$temp->Event_Name = $_POST['Name'];
		$temp->Event_Description = $_POST['Description'];
		$temp->Event_Type = $_POST['Type'];
		$temp->Event_Date = $_POST['Date'];
		$temp->Event_Time = $_POST['Time'];
		// update the user data in database
		$temp->updateEvent();
	
	}

	//Delete
		public function deleteEventController($Event_ID)
	{
		// get user data associate with $id
		$findUser = eventModel::getByEventID($Event_ID);
		// update/set the attributes of the user
		$temp = new eventModel();
		$temp->Event_ID = $findUser['Event_ID'];
		// delete the user
		$temp->deleteEvent();

		// redirect the page
		echo '<script type="text/javascript">
		window.location = "ViewEvent.php";
		</script>';
	}

	//Search
	public function searchEventController($value='')
	{
		
		$temp = eventModel::Searchable('Event_Name', $_POST['search']);
		return $temp;
	}



	//Equipment

	public function addController(){

		if(isset($_POST['btnRegister'])){
        $filename=$_FILES['photo']['name'];
        $filesize=$_FILES['photo']['size'];
        $filetmp=$_FILES['photo']['tmp_name'];
        $dir= "upload/".$filename;}


		$equip = new addModel();
		
		$equip->Equip_Photo = ($_FILES['photo']['name']);
		$equip->Equip_Name = $_POST['Name'];
		$equip->Equip_Price = $_POST['Price'];
		$equip->Equip_Category = $_POST ['category'];
		$equip->Equip_Desc = $_POST['Description'];
		$equip->Equip_Quantity = $_POST['Quantity'];
	
	    $equip->add();
	    copy($filetmp, $dir);	
	}


	public function displayController($value='')
	{
		// assign the returned values(array of user object) to variable users
		$equip = addModel::All(); // we use the static method All() that we
							  // created in user model to retrieve all 
							  // data for user
		return $equip;
	}

		public function indexCategory($Equip_Category)
	{
		// assign the returned values(array of user object) to variable users
		$equip = addModel::byEventType($Equip_Category); // we use the static method All() that we
							  // created in user model to retrieve all 
							  // data for user
		return $equip;
	}



	public function get($Equip_ID)
    {
        // get user object associate with $id
        $equip = addModel::getById($Equip_ID);
        // return user object with the user details
        return $equip;
    }

	public function update($Equip_ID)
	{
		// get user data associate with $id
		$findUser = addModel::getById($Equip_ID);
		// update/set the attributes of the user
		$equip = new addModel();

		$equip->Equip_ID = $findUser['Equip_ID'];
		$equip->Equip_Name = $_POST['Name'];
		$equip->Equip_Price = $_POST['Price'];
		$equip->Equip_Category = $_POST ['category'];
		$equip->Equip_Desc = $_POST['Description'];
		$equip->Equip_Quantity = $_POST['Quantity'];
		// update the user data in database
		$equip->update();
	
	}

		public function destroy($Equip_ID)
	{
		// get user data associate with $id
		$findUser = addModel::getById($Equip_ID);
		// update/set the attributes of the user
		$equip = new addModel();
		$equip->Equip_ID = $findUser['Equip_ID'];
		// delete the user
		$equip->delete();

		// redirect the page
		echo '<script type="text/javascript">
		window.location = "ViewEquipment.php";
		</script>';
	}


	public function search($value='')
	{
		
		$equip = addModel::Searchable('Equip_Name', $_POST['search']);
		return $equip;
	}


		public function addcart($Equip_ID)
	{

		$findUser = addModel::getById($Equip_ID);
		// update/set the attributes of the user
		$cart = new addModel();

		$cart->Equip_ID = $findUser['Equip_ID'];
		$cart->Equip_Name = $_POST['Equip_Name'];
		$cart->Equip_Price = $_POST['Equip_Price'];
		$cart->Equip_Category = $_POST ['Equip_Category'];
		$cart->Equip_Desc = $_POST['Equip_Desc'];
		$cart->Item_Quantity = $_POST['Item_Quantity'];
		
	
   		$totalprice = $Item_Quantity * $Equip_Price;

  		$totalquantity = $Equip_Quantity - $Item_Quantity;
	
	    $cart->addcartModel($Equip_ID);

	    alert("Hello! I am an alert box!!");
	
		}

}

