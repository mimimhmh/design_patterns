<?php


namespace Acme;


class Kindle implements EReaderInterface
{

    public function powerOn() {

        var_dump('turn on the kindle');
    }

    public function clickNextPage() {

        var_dump('click next page button');
    }
}