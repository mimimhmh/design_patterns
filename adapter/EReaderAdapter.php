<?php


namespace Acme;


class EReaderAdapter implements BookInterface
{

    private $EReader;

    //injection
    public function __construct(EReaderInterface $EReader) {

        $this->EReader = $EReader;
    }

    public function open() {

        return $this->EReader->powerOn();
    }

    public function turnPage() {

        return $this->EReader->clickNextPage();
    }

}