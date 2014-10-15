<?php
namespace Surgeworks\CoreBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

class NewsController extends AbstractController  {

    public function readAction(Request $request){
        if ($request->getMethod() == "POST") {
            $feeds = $this->getNewsManager()->findAll();
            $return = array('success' => true, 'news' => $feeds);
            $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('message' => new JsonEncoder()));
            $message = $serializer->serialize($return, 'json');
            return new JsonResponse($message);
        }
    }

    public function getNewsManager(){
        return $this->getService('surgeworks.news_manager');
    }

}

