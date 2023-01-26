<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FizzBuzz extends CI_Controller
{
    public function index()
    {
        $node = 0;
        $fizz = 0;
        $buzz = 0;
        $this->fizzbuzz($node, $fizz, $buzz);
    }

    public function fizzbuzz($x, $y, $z)
    {
        for ($i = 0; $i < 100; $i++) {
            if ($i % 2 == 0) {
                echo "fizz, ";
            } elseif ($i % 3 == 0) {
                echo "buzz, ";
            } else {
                echo $i. ", " ;
            }
        }
    }
}
