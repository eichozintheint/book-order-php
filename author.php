<?php
include_once 'layout/header.php';
include_once 'controller/AuthorController.php';

session_start();

$author_controller=new Author();
$authors=$author_controller->getAuthors();

?>
<div class="main">
        <aside class="sidebar">
            <h2 class="text-dark">Authors</h2>

            <?php
                foreach($authors as $author)
                {
                    echo "<a href='booksByAuthor.php?id=".$author['id']."'>".$author['name']."</a><hr/>";
                }
            ?>

            
            
        </aside>
        <main class="sidebar-content">
            <h2> James</h2>
            <div class="d-flex flex-wrap">
                <div class="card m-3" style="width: 18rem;">
                 
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                  
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                  
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                  
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                 
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                  
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
            </div>
            
        </main>
</div>
<?php
include_once 'layout/footer.php';
?>