<?php
class Author{
    private $name;
    private $email;

    public function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;

    }

    function getName(){
        return $this->name;
    }

    function getEmail(){
        return $this->email;
    }

    function getInfo(){
        return "The author is {$this->name} and his email is {$this->email}";
    }
}

class Book{
    private $name;
    private $pages;
    public $author;

    public function __construct($name, $author, $pages){
        $this->name = $name;
        $this->pages = $pages;
        $this->author = $author;
    }

    function getName(){
        return $this->name;
    }

    function getAuthor(){
        return $this->author->getInfo();
    }

    function getPages(){
        return $this->pages;
    }

    function getInfo(){
        return "This is {$this->name}, the author is {$this->author->getName()}, 
number of pages is {$this->pages}";
    }

}

class Library{
    public $book = [];
    function createNewBookInLibrary($nameOfBook, $authorOfBook, $pagesCount){
    if (count($this->book) <= 10) {
            $this->book[] = [$nameOfBook, $authorOfBook, $pagesCount];
    }
}

    function printAllBooks(){
        return $this->book;
    }

    function getBooks($nameOfAuthor){
        $authorsBooks = [];
        for ($i=0;$i<count($this->book);$i++)
        if ($nameOfAuthor == $this->book[$i][1]){
            $authorsBooks[] = $this->book[$i][0];
            
          }
    
    return $authorsBooks;


    }


    function getAuthorOfBook($nameOfBook){

       $booksAuthor = [];
        for ($i=0;$i<count($this->book);$i++)
            if ($nameOfBook == $this->book[$i][0]){
                $booksAuthor[] = $this->book[$i][1];
            
          }
    
    return $booksAuthor;


    }

    function getBooksByCount($minimalRequiredPages){
        $booksPages = [];
        for ($i=0;$i<count($this->book);$i++)
            if ($minimalRequiredPages <= $this->book[$i][2]){
                $booksPages[] = $this->book[$i][0];
            
          }
    
    return $booksPages;

}

    function getAllauthors(){
        $AllAuthors = [];

        for ($i=0;$i<count($this->book);$i++){
            if (in_array($this->book[$i][1],$AllAuthors)) {
                continue;
        } else {
            $AllAuthors[] = $this->book[$i][1];

        }
        }
        return $AllAuthors;

    }
}


$author1 = new Author("J.R.R. Tolkien", "tolkien@gmail.com");
$author2 = new Author("R.R. Martin", "martin@gmail.com");
$author3 = new Author("R.R. prdel", "martin@gmail.com");


$books = [new Book("lord of the rings",$author1, 500), new Book("Game Of Thrones",$author2, 1000), new Book("hobbit", $author3, 400)];

$library = new Library();

$library->createNewBookInLibrary($books[0]->getName(),$author1->getName(),$books[0]->getPages());
$library->createNewBookInLibrary($books[1]->getName(),$author2->getName(),$books[1]->getPages());
$library->createNewBookInLibrary($books[2]->getName(),$author3->getName(),$books[2]->getPages());


print_r($library->printAllBooks());

print_r($library->getBooks("J.R.R. Tolkien"));

print_r($library->getAuthorOfBook("Game Of Thrones"));
print_r($library->getBooksByCount(500));
echo "authors";
print_r($library->getAllauthors());




?>