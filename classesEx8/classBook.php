<?php

class Book
{

    private $title;
    private $author;
    private $numberPages;
    private $page;
    private $open;
    private $reader;

    public function __construct($title, $author, $numberPages, $page, $open, $reader)
    {

        $this->title = $title;
        $this->author = $author;
        $this->numberPages = $numberPages;
        $this->page = $page;
        $this->open = $open;
        $this->reader = $reader;
        
    }

    //setters & getters
    public function setTitle($valueTitle)
    {
        $this->title = $valueTitle;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function setAuthor($valueAuthor)
    {
        $this->author = $valueAuthor;
    }
    public function getAuthor()
    {
        return $this->author;
    }

    public function setNumberPages($valueNumberPages)
    {
        $this->numberPages = $valueNumberPages;
    }
    public function getNumberPages()
    {
        return $this->numberPages;
    }

    public function setPage($page)
    {
        $this->page = $page;
    }
    public function getPage()
    {
        return $this->page;
    }

    public function setOpen($valueOpen)
    {
        $this->open = $valueOpen;
    }
    public function getOpen()
    {
        return $this->open;
    }
    
    public function setReader($valueReader)
    {
        $this->reader = $valueReader;
    }
    public function getReader()
    {
        return $this->reader;
    }

    public function getDetails()
    {
        return " Title = {$this->title} <br /> Author = {$this->author}  <br /> Number of pages = {$this->numberPages} <br />  Page = {$this->page} <br />  Open = {$this->open} <br />  Reader = {$this->reader} ";
    }
}
