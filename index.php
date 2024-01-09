<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Adrian Węglarz</title>
        <script src="script/script.js"></script> 
    </head>
    <body>
        <header>
            <h1>Wizytówka - Adrian Węglarz</h1>
        </header>
        <div class="container">
        <nav>
            <!-- Struktura rozwijanej listy -->
                <ul>
                <li class="nav"><a href="index.php">O mnie</a></li>
                        <!--Jestem leniwy i nie chce dodawać każdego linka do podstrony osobno :C  -->
                        <?php
// Pobranie listy plików w folderze
                            $pliki = glob('c:\xampp\htdocs\php\wizytówka\podstrony');
// Ustawienie liczby podstron na podstawie ilości plików
                            $iloscPodstron = count($pliki); 
                            if ($dh = opendir('c:\xampp\htdocs\php\wizytówka\podstrony')) 
                            {
// Odczytanie zawartości folderu
                                while (($file = readdir($dh)) !== false) 
                                {
//usunięcie .html
                                    $file = substr($file,0,-5);
                                    $file2 = "podstrony\\" . $file . ".html";
                                    echo '<li class="nav"><a href="?strona=' . $file2 .' ">' . $file . "</a></li>";
                                }
                            }
// Zamknięcie folderu
                                closedir($dh);              
                        ?></ul>
        </nav>
        <main>
            <?php
// Sprawdzenie, czy parametr 'strona' istnieje w tablicy $_GET
                $stronaNumber = isset($_GET['strona']) ? $_GET['strona'] : '';

// Sprawdzenie, czy plik istnieje przed próbą wczytania jego zawartości
                    if (file_exists($stronaNumber)) 
                    {
                        $stronaContent = file_get_contents($stronaNumber);
                        echo $stronaContent;
                    }
                    else
                    {
                        echo "<h2>Informacje osobiste:</h2>
                              <p>Adrian Węglarz</p>
                              <p><b>Miejscowość:</b> Wilczyce</p>
                              <p><b>Wiek:</b> 20 lat</p>
                              <h2>Zainteresowania:</h2>
                              <p>Kolarstwo</p>
                              <p>Formuła 1</p>
                              <div class='gallery'>
                              <img src='images/bike1.jpg' alt='Zdjęcie 1' id='currentImage'>
                              <img src='images/bike2.jpg' alt='Zdjęcie 2' id='nextImage' style='display: none;'>
                              </div>";                             
                    }
            ?>
</body>
        </main>
        </div>
        <footer>
            <div><br><br>© 2023 Adrian Węglarz</div>
        </footer>
    </body>
</html>