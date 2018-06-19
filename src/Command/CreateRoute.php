<?php
namespace MSMVC\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use MSMVC\Manipulate\CreateManipulate;

class CreateRoute extends Command{

	protected function configure(){
		$this->setName("create:route")
		->setDescription('Create new Route')
		->setHelp("This command is used to create new Route");

		$this->addArgument('method', InputArgument::REQUIRED, 'HTTP Method accepted for this route')
		->addArgument('route', InputArgument::REQUIRED, 'The route url')
		->addArgument('controller', InputArgument::REQUIRED, 'Controller@method to use')
		->addArgument('file', InputArgument::REQUIRED, 'The routes file to add the route [api or web]');
	}

	protected function execute(InputInterface $input, OutputInterface $output){
		$route = $input->getArgument('route');
		$controller = $input->getArgument('controller');
		$method = $input->getArgument('method');
		$file = $input->getArgument('file');

		$createManipulate = new CreateManipulate();
		$createManipulate->successAdded = "<info>Route created with success!</info>";

		return $output->writeln($createManipulate->createRoute($route, $controller, $method, $file));
	}

}
