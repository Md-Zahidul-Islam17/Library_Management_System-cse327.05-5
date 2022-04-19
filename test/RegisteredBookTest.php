<?php

use PHPUnit\Framework\TestCase;

class RegisteredBookTest extends TestCase{

/**  @test */
    public function isMatching(){
        require "BookList.php";

        $book = new BookList;

        $book->book_name="IELTS";

        $this -> assertEquals('IELTS', $book -> getBookName());


    }
}

?>
