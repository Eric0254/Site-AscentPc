<?php
// Configurar a conexão com o banco de dados
$host = 'seu-host';
$usuario = 'seu-usuario';
$senha = 'sua-senha';
$banco = 'seu-banco';

// Conectar ao banco de dados (usando MySQLi neste exemplo)
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Recuperar os dados dos produtos do banco de dados
$sql = "SELECT * FROM produtos";
$resultado = $conn->query($sql);
?>

<section class="container">
  <div class="row mt-3">
    <div class="col-lg-5 col-md-12 col-12">
      <div class="zoom-img">
        <img class="img-fluid w-100" src="<?php echo $produtoAtual['imagem']; ?>" id="Mainimg" alt="">
      </div>
      <div class="small-img-group">
        <?php
        // Exibir as imagens dos produtos
        if ($resultado->num_rows > 0) {
          while ($row = $resultado->fetch_assoc()) {
            echo '<div class="small-img-col">';
            echo '<a href="vitrine.php?produto=' . $row['id'] . '">';
            echo '<img src="' . $row['imagem'] . '" width="100%" class="small-img" alt="">';
            echo '</a>';
            echo '</div>';
          }
        } else {
          echo "Nenhum produto encontrado.";
        }
        ?>
      </div>
    </div>
    <div class="col-lg-6 col-md-12 col-12">
      <!-- Exibir as informações do produto selecionado -->
      <?php
      if (isset($_GET['produto'])) {
        $produtoId = $_GET['produto'];
        // Recuperar as informações do produto selecionado
        $sqlProduto = "SELECT * FROM produtos WHERE id = $produtoId";
        $resultadoProduto = $conn->query($sqlProduto);

        if ($resultadoProduto->num_rows > 0) {
          $produtoAtual = $resultadoProduto->fetch_assoc();
          echo '<h6>Home / Produto</h6>';
          echo '<h3 class="py-4">' . $produtoAtual['nome'] . '</h3>';
          echo '<h2>' . $produtoAtual['preco'] . '</h2>';
          echo '<button class="mt-3 btn-text comprar-btn">Comprar Agora</button>';
          echo '<h4 class="mt-5 mb-5">Sobre o Produto</h4>';
          echo '<span>' . $produtoAtual['descricao'] . '</span>';
        } else {
          echo "Produto não encontrado.";
        }
      }
      ?>
    </div>
  </div>
</section>

<?php
// Fechar a conexão com o banco de dados
$conn->close();
?>
