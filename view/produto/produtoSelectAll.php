<?php require_once '../../utils/header.php' ?>
<?php require_once '../../utils/menu.php' ?>
<?php require_once './produtoHandlerSelectAll.php' ?>



<main class="container">
<h1>Select</h1>
<?php

if ($num > 0) {

    // echo "<table class='table table-hover'>";
    // echo "<tr>";
    // echo "<th>ID</th>";
    // echo "<th>Nome</th>";
    // echo "<th>Descricao</th>";
    // echo "<th>Preço</th>";
    // echo "<th>URL</th>";
    // echo "<th>Ações</th>";
    // echo "</tr>";

    echo "<div class='row'>";
   

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        // echo "<tr>";
        // echo "<td>{$pro_id}</td>";
        // echo "<td>{$pro_nome}</td>";
        // echo "<td>{$pro_descricao}</td>";
        // echo "<td>{$pro_preco}</td>";
        // echo "<td><img src='{$pro_url}' alt='{$pro_nome}' ></td>";
        // echo "<td><button class='btn btn-warning'>Editar</button><button class='btn btn-primary'>Detalhes</button><button class='btn btn-danger'>Deletar</button></td>";
        // echo "</tr>";

        echo '<div class="col-lg-3 col-md-4 col-sm-6 col-12">';
        echo '<div class="card mb-3" >';
        echo "<img src='{$pro_url}' alt='{$pro_nome}' class='card-img-top' >";
        echo ' <div class="card-body">';
        echo "  <h5 class='card-title'>{$pro_nome}</h5>";
        echo " <p class='card-text'>{$pro_descricao}</p>";
        
        echo "<div class='text-end'>";
        echo ' <a href="#" class="h4  btn-primary btn"><i class="bi bi-pencil-square"></i></a>';

        echo "<a href='produtoDetail.php?id={$pro_id}' class='h4 mx-2 btn-success btn'><i class='bi bi-check-all'></i></a>";

        echo ' <a href="#" class="h4 btn btn-danger"><i class="bi bi-trash3"></i></a>';
        echo "</div>";

        echo ' </div>';
        echo '</div>';
        echo '</div>';
    }
    echo '<div class="col-lg-3 col-md-4 col-sm-6 col-12">';
    echo '<div class="card mb-3" >';
    echo '<iframe class="w-100" src="https://www.youtube.com/embed/gHTBoku1N1Y?si=riUR-nFx_bLblvie" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
    echo ' <div class="card-body">';
    echo "  <h5 class='card-title'>{$pro_nome}</h5>";
    echo " <p class='card-text'>{$pro_descricao}</p>";
    
    echo "<div class='text-end'>";
    echo ' <a href="#" class="h4  btn-primary btn"><i class="bi bi-pencil-square"></i></a>';
    echo ' <a href="#" class="h4 btn btn-danger"><i class="bi bi-trash3"></i></a>';
    echo "</div>";

    echo ' </div>';
    echo '</div>';
    echo '</div>';




    //-------------------------------------
    echo '<div class="col-lg-3 col-md-4 col-sm-6 col-12">';
    
    echo '<iframe class="mx-3 w-100" src="https://www.youtube.com/embed/gHTBoku1N1Y?si=riUR-nFx_bLblvie" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';

    echo '</div>';
    echo "</div>";

    // echo '</table>';
} else {
    echo "<p>Nenhum registro encontrado.</p>";
}
?>
</main>
<?php require_once '../../utils/footer.php' ?>