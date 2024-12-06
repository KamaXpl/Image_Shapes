<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Zdjecia</title>
</head>
<body>
    <section>
        <h1>Zdjecia</h1>
        <label for="shape-select">Ksztalt:</label>
        <select id="shape-select">
            <option value="square">Kwadrat</option>
            <option value="circle">Kolo</option>
            <option value="triangle">Trojkat</option>
            <option value="star">Gwiazda</option>
        </select>
        <h1>Filtry</h1>
        <label for="filter-select">Filtr:</label>
        <select id="filter-select">
            <option value="default">Podstawowy</option>
            <option value="black">Czarno-biały</option>
            <option value="inverted">Odwrócony</option>
            <option value="brightness">Brightness</option>
        </select>
        <h1>Kolory obramowki</h1>
        <label for="color-select">Kolor:</label>
        <select id="color-select">
            <option value="blue">Niebieski</option>
            <option value="red">Czerwony</option>
            <option value="yellow">Zolty</option>
            <option value="green">Zielony</option>
        </select>
        <h1>Obramowki</h1>
        <label for="border-select">Obramowke:</label>
        <select id="border-select">
            <option value="solid">Solid</option>
            <option value="dotted">Dotted</option>
            <option value="double">Double</option>
            <option value="dashed">Dashed</option>
        </select>
        <h1>Rozmiar obramowki</h1>
        <label for="size-select">Rozmiar obramowki:</label>
        <select id="size-select">
            <option value="one">1 px</option>
            <option value="five">5 px</option>
            <option value="ten">10 px</option>
            <option value="twenty">20 px</option>
        </select>
    </section>
    <div id="image-gallery">
        <?php


        $con = mysqli_connect("localhost", "root", "", "db");
        
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $query = "SELECT id, name, description FROM img";
        $result = mysqli_query($con, $query);
        
        if (!$result) {
            die("Error executing query: " . mysqli_error($con));
        }
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="image-container">';
            echo '<img src="' . $row['name'] . '" alt="' . $row['description'] . '">';
            echo '</div>';
        }
        ?>
       

       <script src="script.js"></script>
    </div>
</body>
</html>
    <?php
    mysqli_close($con);
    ?>
