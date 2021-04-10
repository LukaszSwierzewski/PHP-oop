<?php

interface Newsletter
{
    public function subscribe($email);
}


class Compaign implements Newsletter
{

    public function subscribe($email)
    {
        echo 'sub with compaign';
    }
}

class Drip implements Newsletter
{
    public function subscribe($email)
    {
        echo 'sub with drip';
    }
}

class NewsletterSub
{

    public function store(Newsletter $newsletter)
    {
        $email = 'joe@os.pl';
        $newsletter->subscribe($email);
    }
}

$controller = new NewsletterSub();

$controller->store(new Compaign);
