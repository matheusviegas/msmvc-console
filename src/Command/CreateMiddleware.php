<?php
namespace MSMVC\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use MSMVC\Manipulate\CreateManipulate;

class CreateMiddleware extends Command {
	protected function configure(){
		$this->setName("create:middleware")
		->setDescription('Create new middleware')
		->setHelp("This command is used to create new Middleware");

		$this->addArgument('name', InputArgument::REQUIRED, 'The middleware name');
	}

	protected function execute(InputInterface $input, OutputInterface $output){
		$createManipulate = new CreateManipulate();
		$createManipulate->successCreate = "<info>Middleware created with success!</info>";

		return $output->writeln($createManipulate->createMiddleware($input->getArgument('name')));
	}
}
