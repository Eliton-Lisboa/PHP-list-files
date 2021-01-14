<?php
    require './publication.php';

    class Book implements Publication {
        private $title;
        private $author;
        private $totalPages;
        private $currentPage;
        private $open;
        private $reader;

        function details() {
            echo "Book {$this->getTitle()} written by {$this->getAuthor()}";
            echo "<br/>Pages: {$this->getTotalPages()} current {$this->getCurrentPage()}";
            echo "<br/>Being read by: {$this->getReader()->getName()}";
        }

        function __construct($title, $author, $totalPages, $reader) {
            $this->title = $title;
            $this->author = $author;
            $this->totalPages = $totalPages;
            $this->reader = $reader;
            $this->open = false;
            $this->currentPage = 0;
        }

        function Open() {
            if (!$this->getOpen()) {
                $this->setOpen(true);
            }
        }
        function Close() {
            if ($this->getOpen()) {
                $this->setOpen(false);
            }
        }
        function Leaf($page) {
            if ($this->getOpen()) {
                if ($page < $this->getTotalPages()) {
                    $this->setCurrentPage($page);
                }
                else {
                    $this->setCurrentPage(0);
                }

            }
        }
        function NextPage() {
            if ($this->getOpen()) {
                if ($this->getCurrentPage() < $this->getTotalPages()) {
                    $this->setCurrentPage($this->getCurrentPage() + 1);
                }
                else {
                    $this->setCurrentPage(0);
                }

            }
        }
        function BackPage()  {
            if ($this->getOpen()) {
                if (0 < $this->getCurrentPage()) {
                    $this->setCurrentPage($this->getCurrentPage() - 1);
                }
                else {
                    $this->setCurrentPage($this->getTotalPages());
                }
                
            }
        }

        function getTitle()                   { return $this->title;               }
        function setTitle($title)             { $this->title = $title;             }
        function getAuthor()                  { return $this->author;              }
        function setAuthor($author)           { $this->author = $author;           }
        function getTotalPages()              { return $this->totalPages;          }
        function setTotalPages($totalPages)   { $this->totalPages = $totalPages;   }
        function getCurrentPage()             { return $this->currentPage;         }
        function setCurrentPage($currentPage) { $this->currentPage = $currentPage; }
        function getOpen()                    { return $this->open;                }
        function setOpen($open)               { $this->open = $open;               }
        function getReader()                  { return $this->reader;              }
        function setReader($reader)           { $this->reader = $reader;           }
    }