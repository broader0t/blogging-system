<?php
class Comment {
    private $author;
    private $content;

    public function __construct($author, $content) {
        $this->author = $author;
        $this->content = $content;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getContent() {
        return $this->content;
    }
}
?>
