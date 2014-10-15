<?php
namespace Surgeworks\CoreBundle\Services;

use Doctrine\ORM\NoResultException;
use Surgeworks\CoreBundle\Modals\EmailModel;
use Symfony\Component\DependencyInjection\ContainerInterface;

class EmailManager {

    /**
     **@var ContainerInterface
     */
    protected $container;
    protected $params;

    /**
     *Constructor
     *
     *@param ContainerInterface $container
     *@param $params
     */
    public function __construct(ContainerInterface $container, $params){
        $this->container = $container;
        $this->params = $params;
    }

    public function send(EmailModel $email){
        try {
            $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                ->setUsername($this->getParameter('username'))
                ->setPassword($this->getParameter('password'));

            $mailer = \Swift_Mailer::newInstance($transport);
            $message = \Swift_Message::newInstance('Message')
                ->setSubject($email->getSubject())
                ->setFrom(array($email->getFrom() => $email->getName()))
                ->setTo($email->getTo())
                ->setBody($email->getBody());

            return $mailer->send($message);
        } catch (NoResultException $e) {
            return 0;
        }
    }

    private function getParameter($parameterKey)
    {
        if (array_key_exists($parameterKey, $this->params)) {
            return $this->params[$parameterKey];
        }

        return null;
    }
} 