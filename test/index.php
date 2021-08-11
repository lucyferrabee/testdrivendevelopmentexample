<?php
require '../index.php';

use PHPUnit\Framework\TestCase;

class index extends TestCase {

    public function testGreetSuccess() {
        $input = "Bob";
        $expected = "Hello, Bob";
        $result = greet($input);
        $this->assertEquals($expected, $result);
    }

    public function testGreetSuccessNull() {
        $input = null;
        $expected = "Hello, my friend.";
        $result = greet($input);
        $this->assertEquals($expected, $result);
    }

    public function testGreetSuccessUppercase() {
        $input = "JERRY";
        $expected = "HELLO JERRY!";
        $result = greet($input);
        $this->assertEquals($expected, $result);
    }

    public function testGreetSuccessTwoNames() {
        $input = ["Jill", "Jane"];
        $expected = "Hello, Jill and Jane.";
        $result = greet($input);
        $this->assertEquals($expected, $result);
    }

    public function testGreetSuccessThreeNames() {
        $input = ["Amy", "Brian", "Charlotte"];
        $expected = "Hello, Amy, Brian, and Charlotte.";
        $result = greet($input);
        $this->assertEquals($expected, $result);
    }

    public function testGreetSuccessFourNames() {
        $input = ["Amy", "Brian", "Charlotte", "Lucy"];
        $expected = "Hello, Amy, Brian, Charlotte, and Lucy.";
        $result = greet($input);
        $this->assertEquals($expected, $result);
    }

    public function testGreetSuccessUpperLowerMix() {
        $input = ["Amy", "BRIAN", "Charlotte"];
        $expected = "Hello, Amy and Charlotte. AND HELLO BRIAN!";
        $result = greet($input);
        $this->assertEquals($expected, $result);
    }
}