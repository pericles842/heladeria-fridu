<?php require_once('../server/header.php'); ?>

<body>
    <?php
    $projects = [
        ["title" => "Egreso", "tasks" => 12, "completion" => 46, "class" => "mobile-app-design"],
        ["title" => "Productos", "tasks" => 22, "completion" => 73, "class" => "facebook-brand-ui-kit"],
        ["title" => "Proveedores", "tasks" => 15, "completion" => 80, "class" => "web-development"],
        ["title" => "Almacenes totales", "tasks" => 8, "completion" => 50, "class" => "mobile-app-design"],
        ["title" => "Ganancias totales", "tasks" => 20, "completion" => 90, "class" => "facebook-brand-ui-kit"],
        ["title" => "Ganancias del mes", "tasks" => 5, "completion" => 30, "class" => "web-development"],
        ["title" => "Despachos Pendientes", "tasks" => 18, "completion" => 60, "class" => "mobile-app-design"]
    ];

    foreach ($projects as $project) {
        echo "<div class='card {$project['class']}'>";
        echo "<h3>{$project['title']}</h3>";
        echo "<p>{$project['tasks']} en total</p>";
        echo "<p>{$project['completion']}% Capacidad</p>";
        echo "</div>";
    }
    ?>
</body>
<?php require_once('../server/footer.php'); ?>