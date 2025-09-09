<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Mijn Licenties</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .licenties-container { max-width: 600px; margin: 40px auto; background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); padding: 32px; }
        .licentie-item { display: flex; justify-content: space-between; align-items: center; padding: 12px 0; border-bottom: 1px solid #eee; }
        .licentie-item:last-child { border-bottom: none; }
        .licenties-empty { text-align: center; color: #888; }
    </style>
</head>
<body>
    <div class="licenties-container">
        <h2>Mijn Licenties</h2>
        <div id="licenties-list"></div>
        <p><a href="index.php">← Terug naar webshop</a></p>
    </div>
    <script>
    var licenties = JSON.parse(localStorage.getItem('licenties') || '[]');
    var list = document.getElementById('licenties-list');
    if (licenties.length === 0) {
        list.innerHTML = '<p class="licenties-empty">Je hebt nog geen licenties.</p>';
    } else {
        var html = '';
        licenties.forEach(function(l){
            html += '<div class="licentie-item">';
            html += '<span>' + l.name + '</span>';
            html += '<span>' + l.price + '</span>';
            html += '<span>aantal: ' + l.qty + '</span>';
            html += '</div>';
        });
        list.innerHTML = html;
    }
    </script>
</body>
</html>
