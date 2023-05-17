<?php

namespace App\Post\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;
use App\Post\Service\CreatePost;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Style\SymfonyStyle;

class CreatePostCommand extends Command
{
    //protected static $defaultName = 'app:create-post';
    
    /** @var CreatePost **/
    private $createPost;
    
    public function __construct(CreatePost $createPost)
    {
        parent::__construct();
        $this->createPost = $createPost;
    }
    
    protected function configure(): void
    {
        $this->addArgument('content', InputArgument::REQUIRED, 'Treść posta');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $symfonyStyle = new SymfonyStyle($input, $output);
        $variable = $input->getArgument('content');
        $this->createPost->create($variable);
        $output->writeln('Hello World: ' . $variable);
        return Command::SUCCESS;
    }
}
