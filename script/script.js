var currentImageIndex = 1;  // Indeks aktualnie wyświetlanego zdjęcia (zaczynamy od 1)
var totalImages = 2;       // Łączna liczba zdjęć w galerii
var intervalTime = 3000;   // Czas (w milisekundach) między zmianami zdjęć

function changeImage() 
{
    var currentImage = document.getElementById('currentImage');
    var nextImage = document.getElementById('nextImage');

// Zmiana indeksu obrazu
    currentImageIndex = (currentImageIndex % totalImages) + 1;

// Ustawienie nowego źródła dla następnego obrazu
    nextImage.src = 'images/bike' + currentImageIndex + '.jpg';

// Zamiana obrazów
    setTimeout(function() 
    {
        currentImage.src = nextImage.src;
    }, 1000);
}

// Uruchomienie funkcji
setInterval(changeImage, intervalTime);

// Skrypt JavaScript obsługujący rozwijanie listy
//
//        document.addEventListener("DOMContentLoaded", function() 
//        {
//            var expandableListItems = document.querySelectorAll('.expandable-list-item');
//
//           expandableListItems.forEach(function(item) 
//            {
//                item.addEventListener('mouseover', function() 
//                {
//                    this.classList.add('expanded');
//                });
//
//               item.addEventListener('mouseout', function() 
//                {
//                    this.classList.remove('expanded');
//                });
//            });
//        });