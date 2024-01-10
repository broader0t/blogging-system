<?php
require_once 'User.php';
require_once 'Post.php';
require_once 'Comment.php';

// Create users
$user1 = new User("John Doe");
$user2 = new User("Jane Smith");

// Create posts
$post1 = new Post($user1, "Title 1", "Content 1");
$post2 = new Post($user2, "Title 2", "Content 2");

// Add comments to posts
$comment1 = new Comment($user1, "Great post!");
$comment2 = new Comment($user2, "I agree!");
$post1->addComment($comment1);
$post2->addComment($comment2);

// Display posts and comments
echo "Post 1:\n";
echo "Author: {$post1->getAuthor()->getName()}\n";
echo "Title: {$post1->getTitle()}\n";
echo "Content: {$post1->getContent()}\n";
echo "Comments:\n";
foreach ($post1->getComments() as $comment) {
    echo "{$comment->getAuthor()->getName()}: {$comment->getContent()}\n";
}

echo "\nPost 2:\n";
echo "Author: {$post2->getAuthor()->getName()}\n";
echo "Title: {$post2->getTitle()}\n";
echo "Content: {$post2->getContent()}\n";
echo "Comments:\n";
foreach ($post2->getComments() as $comment) {
    echo "{$comment->getAuthor()->getName()}: {$comment->getContent()}\n";
}
?>
