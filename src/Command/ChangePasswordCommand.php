<?php

namespace App\Command;

use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ChangePasswordCommand extends Command
{
    private $passwordEncoder;
    private $entityManager;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $entityManager)
    {
        parent::__construct();

        $this->passwordEncoder = $passwordEncoder;
        $this->entityManager = $entityManager;
    }

    /**
     * {@inheritdoc}
    */
    protected function configure()
    {
        $this
            ->setName('user:change-password')
            ->setDescription('Change a user password.')
            ->addArgument('email', InputArgument::REQUIRED, 'The user email')
            ->addArgument('password', InputArgument::REQUIRED, 'The new password (if blank, will be interactively asked)')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $username = $input->getArgument('username');

        // Vous voulez peut-être remplacer "email" par un autre champ (ie, "username")
        $utilisateur = $this->entityManager->getRepository(Utilisateur::class)->findOneBy([
            'username' => $username,
        ]);

        if (!$username) {
            throw new \Exception('L`utilisateur avec ce login n`a pas été trouvé');
        }

        $password = $this->passwordEncoder->encodePassword($utilisateur, $input->getArgument('password'));

        $utilisateur->setPassword($password);

        $this->entityManager->persist($utilisateur);
        $this->entityManager->flush();

        $output->writeln(sprintf('<comment>Mot de passe de %s mis à jour</comment>', $username));
    }

    /**
     * {@inheritdoc}
     */
    protected function interact(InputInterface $input, OutputInterface $output)
    {
        $questions = array();

        if (!$input->getArgument('password')) {
            $question = new Question('Please enter new password:');
            $question->setValidator(function ($password) {
                if (empty($password)) {
                    throw new \Exception('Password can not be empty');
                }

                return $password;
            });
            $question->setHidden(true);
            $questions['password'] = $question;
        }

        foreach ($questions as $name => $question) {
            $answer = $this->getHelper('question')->ask($input, $output, $question);
            $input->setArgument($name, $answer);
        }
    }
}

