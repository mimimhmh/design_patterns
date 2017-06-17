<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/16
 * Time: 16:51
 */
require '../vendor/autoload.php';

use Acme\Person;
use Acme\Book;
use Acme\Kindle;


$John = new person();
$CookBook = new Book();
$AmazonKindle = new Kindle();

$John->read(new \Acme\EReaderAdapter($AmazonKindle));