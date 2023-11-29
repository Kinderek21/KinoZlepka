<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    
    <title>Document</title>
</head>
<body>





<header>
    <video src="../video/chlopi.mp4" autoplay muted ></video>
    <nav>
        <div class="logo_ul">
            <img src="../zdj/logo1.png" alt="" >
            <ul>
                <li>
                <a href="../index.php">Główna</a>
                </li>
                <li>
                    <a href="">Cennik</a>
                </li>
                <li>
                    <a href="">Informacje</a>
                </li>
                <li>
                    <a href="">Dzieci</a>
                </li>
            </ul>
        </div>
        <div class="wyszukiwarka_uzytkownik">
            <input type="text" name="search_input" id="" placeholder="Wyszukiwarka... " >
            <a href="../logowanie.php"> <img src="../img/user-regular.svg" alt=""></a>
            <div class="wyszukiwarka">
                    <a href="#" class="karta">
                        <img src="../img/Napoleon.jpg" alt="">
                        <div class="kont">
                            <h3>Napoleon</h3>
                            <p>Biograficzny , 2023 <span>Premiera</span></p>
                        </div>
                    </a>
            </div>
        </div>
    </nav>
    <div class="kontent">
        <h1 id="tytul">Chłopi</h1>
        <p>Na tle zmieniających się pór roku i sezonowych prac polowych rozgrywają się losy rodziny Borynów i pięknej, tajemniczej Jagny. 
    <div class="detale">
        <h6>Polska</h6>
        <h5 class="gen">Dramat</h5>
        <h4>2023</h4>
        <h3 id="prem"></h3>
    </div>
    <div class="btns">
        <a href="https://www.youtube.com/watch?v=rILKSimhfA4" id="play">Zwiastun <i class="fa-solid fa-play"></i></a>
        <a href="">8:50</a>
        <a href="">12:20</a>
        <a href="">14:10</a>
    </div>
    </div>
    <section>
        <h4>Najnowsze premiery</h4>

        <div class="karty">
            <a href="../pod/napoleon.php" class="karta">
                <img src="../poster/napoleon.png" alt="" class="poster">
                <div class="reszta_karta">
                    <img src="../img/napoleon1.jpg" alt="">
                    <div class="kont">
                        <h4>Napoleon</h4>
                        <div class="sub">
                            <p>Biograficzny, 2023</p>
                            <h3><span>PREMIERA</span></h3>
                        </div>
                    </div>
                </div>
            </a>
            <a href="../pod/fnaf.php" class="karta">
                <img src="../poster/fnaf.png" alt="" class="poster">
                <div class="reszta_karta">
                    <img src="../img/fnaf1.jpg" alt="">
                    <div class="kont">
                        <h4>Pięć koszmarnych nocy</h4>
                        <div class="sub">
                            <p>Horror, 2023</p>
                            <h3><span>PREMIERA</span></h3>
                        </div>
                    </div>
                </div>
            </a>
            <a href="../pod/dziekcz.php" class="karta">
                <img src="../poster/dziekcz.png" alt="" class="poster">
                <div class="reszta_karta">
                    <img src="../img/noc.jpg" alt="">
                    <div class="kont">
                        <h4>Noc Dziękczynienia</h4>
                        <div class="sub">
                            <p>Horror, 2023</p>
                            <h3><span>PREMIERA</span></h3>
                        </div>
                    </div>
                </div>
            </a>
            <a href="../pod/igrzyska.php" class="karta">
                <img src="../poster/igrzyska.jpg" alt="" class="poster">
                <div class="reszta_karta">
                    <img src="../img/igrzyska.jpg" alt="">
                    <div class="kont">
                        <h4>IGRZYSKA ŚMIERCI: Ballada ptaków i węży</h4>
                        <div class="sub">
                            <p>Science-Fiction, Akcja, Przygodowy, 2023</p>
                            <h3></h3>
                        </div>
                    </div>
                </div>
            </a>
            <a href="../pod/chlopi.php" class="karta">
                <img src="../poster/chlopi.jpg" alt="" class="poster">
                <div class="reszta_karta">
                    <img src="../img/chlopi.jpg" alt="">
                    <div class="kont">
                        <h4>CHŁOPI</h4>
                        <div class="sub">
                            <p>Animacja, Dramat, 2023</p>
                            <h3></h3>
                        </div>
                    </div>
                </div>
            </a>
            <a href="../pod/marvels.php" class="karta">
                <img src="../poster/marvels.jpg" alt="" class="poster">
                <div class="reszta_karta">
                    <img src="../img/marvels.jpg" alt="">
                    <div class="kont">
                        <h4>MARVELS</h4>
                        <div class="sub">
                            <p>Akcja, Fantasy, Przygodowy, 2023</p>
                            <h3></h3>
                        </div>
                    </div>
                </div>
            </a>
            <a href="../pod/psi.php" class="karta">
                <img src="../poster/psi.jpg" alt="" class="poster">
                <div class="reszta_karta">
                    <img src="../img/psi.jpg" alt="">
                    <div class="kont">
                        <h4>PSI PATROL: Wielki film</h4>
                        <div class="sub">
                            <p>Animacja, 2023</p>
                            <h3></h3>
                        </div>
                    </div>
                </div>
            </a>
          
        </div>
    </section>
</header>







<script src=""></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    var searchInput = document.querySelector('input[name="search_input"]');
    var movieCards = document.querySelectorAll('.karta');
    var searchResultsContainer = document.querySelector('.wyszukiwarka');
    function filterMovieCards(searchTerm) {
        searchTerm = searchTerm.toLowerCase();

        var hasResults = false;

        movieCards.forEach(function (card) {
            var title = card.querySelector('.kont h4').innerText.toLowerCase();
            if (title.includes(searchTerm)) {
                card.style.display = 'flex';
                hasResults = true;
            } else {
                card.style.display = 'none';
            }
        });

        searchResultsContainer.style.display = hasResults ? 'block' : 'none';
    }

    function resetSearch() {
        searchInput.value = '';
        movieCards.forEach(function (card) {
            card.style.display = 'flex';
        });

        searchResultsContainer.style.display = 'none';
    }
    searchInput.addEventListener('input', function () {
        var searchTerm = searchInput.value;
        filterMovieCards(searchTerm);
    });

    document.addEventListener('click', function (event) {
        if (!event.target.closest('.wyszukiwarka_uzytkownik') && event.target !== searchInput) {
            resetSearch();
        }
    });
    searchResultsContainer.addEventListener('click', function (event) {
        event.stopPropagation();
    });
});
</script>
</body>
</html>