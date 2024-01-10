<?php
class Post {
    private $author;
    private $title;
    private $content;
    private $comments = [];

    public function __construct($author, $title, $content) {
        $this->author = $author;
        $this->title = $title;
        $this->content = $content;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function addComment($comment) {
        $this->comments[] = $comment;
    }

    public function getComments() {
        return $this->comments;
    }
}
?>
