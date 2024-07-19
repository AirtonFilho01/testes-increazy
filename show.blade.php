<!-- resources/views/user/show.blade.php -->
<!-- 
<!DOCTYPE html>
<html>
<head>
    <title>Exibir Usuário</title>
</head>
<body>
    <h3>{{ $consulta }}</h3>

    
</body>
</html>
-->
<!-- resources/views/user/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON Display</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.23.0/themes/prism.min.css" rel="stylesheet">
</head>
<body>
    <pre><code class="language-json">{{ $consulta }}</code></pre>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.23.0/prism.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.23.0/components/prism-json.min.js"></script>
</body>
</html>
