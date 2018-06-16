<?php
namespace MSMVC\Manipulate;

use MSMVC\Structure\PathStructure;
use MSMVC\Manipulate\FileManipulate;
use MSMVC\Structure\FileStructure;

class CreateManipulate extends PathStructure{
	public $errorExist = "<error>File just exist</error>";
	public $errorAdded = "<error>Error adding in the file</error>";
	public $successCreate;
	public $successAdded;

	private $fileStructure;
	private $fileManipulate;
	public function __construct(){
		$this->fileStructure = new FileStructure();
		$this->fileManipulate = new FileManipulate();
	}

	public function createController($name){
		$fileContent = $this->fileStructure->controller();

		$createFile = $this->fileManipulate->createFile($name, $fileContent, $this->pathController);

		if($createFile !== true){
			return $this->errorExist;
		}

		return $this->successCreate;
	}

	public function createModel($name){
		$fileContent = $this->fileStructure->model();

		$createFile = $this->fileManipulate->createFile($name, $fileContent, $this->pathModel);

		if($createFile !== true){
			return $this->errorExist;
		}

		return $this->successCreate;
	}

	public function createView($name, $type = false){
		$methodStructure = "view";
		if($type != false){
			$methodStructure .= ucfirst($type);
		}

		$fileContent = $this->fileStructure->$methodStructure();

		$createFile = $this->fileManipulate->createFile($name, $fileContent, $this->pathView, false);

		if($createFile !== true){
			return $this->errorExist;
		}

		return $this->successCreate;
	}

	public function createHelper($name){
		$fileContent = $this->fileStructure->helper();

		$createFile = $this->fileManipulate->createFile($name, $fileContent, $this->pathHelper);

		if($createFile !== true){
			return $this->errorExist;
		}

		return $this->successCreate;
	}

	public function createRoute($route, $controller, $method = 'GET'){

		if(!in_array(strtoupper($method), ['GET', 'POST'])){
			return $this->errorAdded;
		}

		$fileContent = "\nRoute::{$method}('{$route}', '{$controller}');";

		$addedFile = $this->fileManipulate->addInFile($fileContent, $this->pathRoute);

		if($addedFile != true){
			return $this->errorAdded;
		}

		return $this->successAdded;
	}
}
