<?php

class NewsletterAjaxController
{
    public function add($data){
        $model= new Newsletter();
        $email = $data['email'];
        // verificam daca e email
        return $model->add($email);
    }
}

