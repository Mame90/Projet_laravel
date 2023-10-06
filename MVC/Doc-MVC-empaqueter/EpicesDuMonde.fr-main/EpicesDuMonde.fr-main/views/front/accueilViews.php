<?php
ob_start();
?>

<!-- CONTENT -->

<section id="page">
    <div class="container hauteur">
        <div class="header-page px-3 pb-md-4 mx-auto text-center">
            <h1 class="page-title">Notre selection d'épices</h1>
        </div>

        <?php
        echo '<nav>
            <ul class="nav nav-pills justify-content-center mb-5" id="pills-tab" role="tablist">';

        foreach ($categories as $category) {
            if ($category['id'] == '1')
                echo '<li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#pills-' . $category['id'] . '" role="tab" aria-selected="true">' . $category['name'] . '</a>
                </li>';
            else
                echo '<li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#pills-' . $category['id'] . '" role="tab" aria-selected="false">' . $category['name'] . '</a>
            </li>';
        }
        echo '</ul>
        </nav>';

        echo '<div class="tab-content" id="pills-tabContent">';
        // var_dump($epices);

        foreach ($categories as $category) {
            if ($category['id'] == '1')
                echo '<div class="tab-pane fade show active" id="pills-' . $category['id'] . '" role="tabpanel"> ';
            else
                echo '<div class="tab-pane fade" id="pills-' . $category['id'] . '" role="tabpanel"> ';
            echo '<div class="row">';
            $bdd = connexionPDO();
            $statement = $bdd->prepare('SELECT * FROM items WHERE items.category = ?');
            $statement->execute(array($category['id']));
            while ($item = $statement->fetch()) {
                echo '<div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card mb-4 shadow-sm">
                            <img src="' . URL . '/public/img/' . $item['image'] . '" class="card-img-top" width="100%" height="auto" alt="...">';
                if ($category['id'] == '6')
                    echo '<div class="card-price">' . number_format($item['price'], 2, '.', '') . ' € le lot</div>';
                else
                    echo '<div class="card-price">' . number_format($item['price'], 2, '.', '') . ' € les 100g</div>';
                        echo '<div class="card-body">
                                <h2 class="card-title text-center">' . $item['name'] . '</h2>
                                <p class="card-text text-center">' . $item['description'] . '</p>                                        
                                <button type="button" class="btn btn-sm btn-outline-secondary"><svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                </svg> Commander</button>                                            
                              </div>
                            </div>
                        </div>';
                }
            echo '</div>
                </div>';
        }
        echo '</div>
            </div>';
        ?>
    </div>
</section>

<?php

$content = ob_get_clean();
$title = "EpicesDuMonde.fr";
require "views/commons/template.php";
