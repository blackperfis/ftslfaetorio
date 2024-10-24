<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Imagens - Banco de Dados de Fotos de Perfis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .image-list {
            margin: 20px;
        }
        .image-item {
            cursor: pointer;
            color: blue;
            margin: 5px;
            text-decoration: underline;
        }
        .image-item:hover {
            color: darkblue;
        }
    </style>
</head>
<body>

    <h1>Galeria de Imagens - Banco de Dados de Fotos de Perfis</h1>
    <div id="imageList" class="image-list">
        <?php
            $dir = 'images/'; // Caminho para a pasta de imagens
            $images = glob($dir . '*.jpg'); // Lista todas as imagens .jpg na pasta

            foreach($images as $image) {
                $imageName = basename($image);
                echo "<div class='image-item' onclick=\"abrirImagem('$imageName')\">$imageName</div>";
            }
        ?>
    </div>

    <script>
        // Função para abrir a imagem em uma nova URL
        function abrirImagem(imagem) {
            const imagePath = 'images/' + imagem;
            window.location.href = imagePath; // Redireciona para a URL da imagem
        }
    </script>

</body>
</html>
