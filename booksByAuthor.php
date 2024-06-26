<?php
session_start();
include_once 'layout/header.php';
include_once 'controller/BookController.php';
include_once 'controller/AuthorController.php';



$author_id=$_GET['id'];

$author_controller=new AuthorController();
$authors=$author_controller->getAuthors();

$book_controller=new BookController();
$books=$book_controller->getBooksByAuthor($author_id);
// var_dump($books);

?>

<div class="main">
        <aside class="sidebar">
            <!-- <h2 class="text-dark">Authors</h2> -->

            <?php
                foreach($authors as $author)
                {
                    echo "<a href='booksByAuthor.php?id=".$author['id']."''>".$author['name']."</a><hr/>";
                }
            ?>

            
            
        </aside>
        <main class="sidebar-content">
            <!-- <h2> James</h2> -->
            <div class="d-flex flex-wrap">
                <?php
                foreach($books as $book)
                {
                    ?>
                        <div class="card m-3 bg-light col-md-3" style="width: 23rem;">
                        <div class="card-body card" 
                            data-id="<?php echo $book['id'] ?>"
                            data-title="<?php echo $book['title'] ?>"
                            data-category="<?php echo $book['category'] ?>"
                            data-price="<?php echo $book['price'] ?>"
                        >
                                <h3>Book ID : <?php echo $book['id'] ?></h3>
                                <h3>Book Title : <?php echo $book['title'] ?></h3>
                                <p>Description : <?php echo $book['description'] ?></p>
                                <p>Category : <?php echo $book['category'] ?></p>
                                <p>Author : <b><?php echo $book['author'] ?></b></p>
                                <p>Publisher : <?php echo $book['publisher'] ?></p>
                                <p>Status : <?php echo $book['status'] ?></p>
                                <p>Price : <?php echo $book['price'] ?></p>
                                <p>Edition : <?php echo $book['edition'] ?></p>
                                <p>Pages : <?php echo $book['pages'] ?></p>
                                <p>Rating : <?php echo $book['rating'] ?></p>
                                <?php
                                    if(isset($_SESSION['user_id']))
                                    {
                                ?>
                                <form action="">
                                    <input type="hidden" id="currentPage" value="<?php echo $_SERVER['REQUSET_URI']; ?>">
                                    <button class="btn btn-dark mb-3 addToCart">Add to Cart</button>
                                </form>
                                <?php
                                    }else{
                                ?>
                                <form action="login.php">
                                    <button type="button" class="btn btn-dark mb-3" onclick="alert('Please log in to add items to your cart.'); window.location.href='login.php';">Add to Cart</button>
                                </form>
                                <?php
                                    }
                                ?>
                        </div>
                        </div>
                    <?php
                }
            ?>
            </div>
            </div>
            
        </main>
</div>
    

    
<?php
include_once 'layout/footer.php';
?>