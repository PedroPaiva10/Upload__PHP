<html>
<head>
    <title>Upload de Arquivo</title>
</head>
<body>
    <h2>Formulário de Upload de Arquivo</h2>
    <!-- Pequeno formulário para inserir um arquivo.-->
    <!-- multipart/form-data é o responsável por permitir o upload de arquivos.-->
    <form action="upload_proc.php" method="POST" enctype="multipart/form-data">
        <label for="file">Selecione um arquivo:</label>
        <!-- Muito importante definir um "accept", evitando qualquer tipo de invasão.-->
        <input type="file" name="file" id="file" accept=".jpg,.jpeg,.png">
        <br>
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>
