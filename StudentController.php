<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class StudentController extends AbstractController {
    function index (){
        return new Response('bonjour mes etudiants');
    }
}
?>