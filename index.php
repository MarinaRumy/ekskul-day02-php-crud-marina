<?php 
    
    include __DIR__ . './view/layout/header.php';

    if(isset($_GET['menu']) && $_GET['menu'] == 'dasbor'){
        include __DIR__ . './view/dasbor.php';
    }

    elseif(isset($_GET['menu']) && $_GET['menu'] == 'ekskul'){

        if(isset($_GET['page']) && $_GET['page'] == 'read-detail'){
            include __DIR__ . './view/ekskul/read-detail.php';
        } else {
            include __DIR__ . './config/functions.php';
            include __DIR__ . './view/ekskul/read.php';
        }

        
    }

    else{
        include __DIR__ . './view/404.php';
    }

    include __DIR__ . './view/layout/footer.php';