<?php
    class Book {
        public $title;
        public $author;

        public function __construct($title, $author) {
            $this->title = $title;
            $this->author = $author;
        }
    }

    $book = new Book("1984", "George Orwell");
    echo $book->title; // 1984
?>