<?php
namespace MSMVC;
use Symfony\Component\Console\Application as SymfonyConsole;

class MSMVCConsole {
	public $pathApplication;
	private $symfonyConsole;

	public function __construct($pathApp){
		$this->symfonyConsole = new SymfonyConsole();

		define("APP_PATH", ((substr($pathApp, -1)) == "/") ? ($pathApp) : ($pathApp."/"));
	}

	public function init(){
		$this->symfonyConsole->add(new Command\CreateController());
		$this->symfonyConsole->add(new Command\CreateModel());
		$this->symfonyConsole->add(new Command\CreateView());
		$this->symfonyConsole->add(new Command\CreateHelper());
		$this->symfonyConsole->add(new Command\CreateRoute());
		$this->symfonyConsole->add(new Command\CreateMiddleware());
	}

	public function __destruct(){
		$this->symfonyConsole->run();
	}
}


//(new MSMVC\MSMVCConsole())->init();

?>
