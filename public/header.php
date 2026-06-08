<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema CRUD</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* CSS Embutido Simples caso não queira criar o arquivo .css separado */
        body { font-family: Arial, sans-serif; margin: 30px; background-color: #f4f4f9; color: #333; }
        form { background: #fff; padding: 15px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); display: inline-block; }
        input { margin-bottom: 10px; padding: 6px; width: 200px; display: block; }
        button { padding: 8px 15px; background: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #218838; }
        .btn-sair { color: #dc3545; text-decoration: none; font-weight: bold; }
        .erro { color: red; font-weight: bold; }
        .sucesso { color: green; font-weight: bold; }
    </style>
</head>
<body>