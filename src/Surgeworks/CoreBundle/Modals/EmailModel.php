<?php
namespace Surgeworks\CoreBundle\Modals;

class EmailModel {

    private $name;
    private $from;
    private $subject;
    private $body;
    private $to;

    /**
     * Constructor
     *
     * @param string $name
     * @param string $from
     * @param string $to;
     * @param string $subject
     * @param string $body
     */
    public function __construct($name, $from, $to, $subject, $body){
        $this->setName($name);
        $this->setFrom($from);
        $this->setTo($to);
        $this->setSubject($subject);
        $this->setBody($body);
    }

    /**
     * @param string $name
     */
    public function setName($name){
        $this->name = $name;
    }

    /**
     * @param string $from
     */
    public function setFrom($from){
        $this->from = $from;
    }

    /**
     * @param string $to
     */
    public function setTo($to){
        $this->to = $to;
    }

    /**
     * @param string $subject
     */
    public function setSubject($subject){
        $this->subject = $subject;
    }

    /**
     * @param string $body
     */
    public function setBody($body){
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getName(){
       return $this->name;
    }

    /**
     * @return string
     */
    public function getFrom(){
        return $this->from;
    }

    /**
     * @return string
     */
    public function getTo(){
        return $this->to;
    }

    /**
     * @return string
     */
    public function getSubject(){
        return $this->subject;
    }

    /**
     * @return string
     */
    public function getBody(){
        return $this->body;
    }

} 