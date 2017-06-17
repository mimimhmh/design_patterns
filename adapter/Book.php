<?php

namespace Acme;


class Book implements BookInterface
{

    public function open() {

        var_dump('open the book');
    }

    public function turnPage() {

        var_dump('turn to the page');

    }
}