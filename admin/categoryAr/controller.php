
<?php
require_once ("../../include/initialize.php");
 	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }


$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;

 
	}
   
	function doInsert(){
		if(isset($_POST['save'])){


		if ( $_POST['CATEGORY'] == "" ) {
			$messageStats = false;
			message("Tous les champs sont obligatoires!","error");
			redirect('index.php?view=add');
		}else{	
			$category = New CategoryAR();
			$category->CATEGORIES	= $_POST['CATEGORY'];
			$category->createAR();

			message("New [". $_POST['CATEGORY'] ."] created successfully!", "success");
			redirect("index.php");
			
		}
		}

	}

	function doEdit(){
		if(isset($_POST['save'])){

			$category = New CategoryAR();
			$category->CATEGORIES	= $_POST['CATEGORY'];
			$category->updateAR($_POST['CATEGID']);

			message("[". $_POST['CATEGORY'] ."] a été modifié!", "success");
			 redirect("index.php");
		}

	}


	function doDelete(){
		// if (isset($_POST['selector'])==''){
		// message("Select a records first before you delete!","error");
		// redirect('index.php');
		// }else{

			$id = $_GET['id'];

			$category = New CategoryAR();
			$category->deleteAR($id);

			message("Catégorie déjà supprimée!","info");
			redirect('index.php');

		// $id = $_POST['selector'];
		// $key = count($id);

		// for($i=0;$i<$key;$i++){

		// 	$category = New Category();
		// 	$category->delete($id[$i]);

		// 	message("Category already Deleted!","info");
		// 	redirect('index.php');
		// }
		// }
		
	}
?>