<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="stylee.css" />
    <title></title>
  </head>
  <body>
  


<header>

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
              
        </div>
    </div>
</nav>

</div>
</div>
<section>
<div class="movie-container">
  <label> Wybrana godzina</label>
  <select id="movie">
    <option value="1030">10:30(20zł)</option>
  </select>
</div>

<ul class="showcase">
  <li>
    <div class="seat"></div>
    <small>Dostępne</small>
  </li>
  <li>
    <div class="seat selected"></div>
    <small>Wybrane</small>
  </li>
  <li>
    <div class="seat sold"></div>
    <small>Sprzedane</small>
  </li>
</ul>
<div class="container">
  <div class="screen"></div>

  <div class="row">
    <div class="seat" id="1"></div>
    <div class="seat" id="2"></div>
    <div class="seat" id="3"></div>
    <div class="seat"id="4"></div>
    <div class="seat"id="5"></div>
    <div class="seat"id="6"></div>
    <div class="seat"id="7"></div>
    <div class="seat"id="8"></div>
    <div class="seat" id="9"></div>
    <div class="seat" id="10"></div>
    <div class="seat" id="11"></div>
    <div class="seat" id="12"></div>
    <div class="seat" id="13"></div>
    <div class="seat" id="14"></div>
    <div class="seat" id="15"></div>
    <div class="seat" id="16"></div>
  </div>

  <div class="row">
  <div class="seat" id="17"></div>
    <div class="seat" id="18"></div>
    <div class="seat" id="19"></div>
    <div class="seat" id="20"></div>
    <div class="seat" id="21"></div>
    <div class="seat" id="22"></div>
    <div class="seat" id="23"></div>
    <div class="seat" id="24"></div>
    <div class="seat" id="25"></div>
    <div class="seat" id="26"></div>
    <div class="seat" id="27"></div>
    <div class="seat" id="28"></div>
    <div class="seat" id="29"></div>
    <div class="seat" id="30"></div>
    <div class="seat" id="31"></div>
    <div class="seat" id="32"></div>
  </div>
  <div class="row">
    <div class="seat" id="33"></div>
    <div class="seat" id="34"></div>
    <div class="seat" id="35"></div>
    <div class="seat" id="36"></div>
    <div class="seat" id="37"></div>
    <div class="seat" id="38"></div>
    <div class="seat" id="39"></div>
    <div class="seat" id="40"></div>
    <div class="seat" id="41"></div>
    <div class="seat" id="42"></div>
    <div class="seat" id="43"></div>
    <div class="seat" id="44"></div>
    <div class="seat" id="45"></div>
    <div class="seat" id="46"></div>
    <div class="seat" id="47"></div>
    <div class="seat" id="48"></div>
  </div>
  <div class="row">
    <div class="seat" id="49"></div>
    <div class="seat" id="50"></div>
    <div class="seat" id="51"></div>
    <div class="seat" id="52"></div>
    <div class="seat" id="53"></div>
    <div class="seat" id="54"></div>
    <div class="seat" id="55"></div>
    <div class="seat" id="56"></div>
    <div class="seat" id="57"></div>
    <div class="seat" id="58"></div>
    <div class="seat" id="59"></div>
    <div class="seat" id="60"></div>
    <div class="seat" id="61"></div>
    <div class="seat" id="62"></div>
    <div class="seat" id="63"></div>
    <div class="seat" id="64"></div>
  </div>
  <div class="row">
    <div class="seat" id="65"></div>
    <div class="seat" id="66"></div>
    <div class="seat" id="67"></div>
    <div class="seat" id="68"></div>
    <div class="seat" id="69"></div>
    <div class="seat" id="70"></div>
    <div class="seat" id="71"></div>
    <div class="seat" id="72"></div>
    <div class="seat" id="73"></div>
    <div class="seat" id="74"></div>
    <div class="seat" id="75"></div>
    <div class="seat" id="76"></div>
    <div class="seat" id="77"></div>
    <div class="seat" id="78"></div>
    <div class="seat" id="79"></div>
    <div class="seat" id="80"></div>
  </div>
  <div class="row">
    <div class="seat" id="81"></div>
    <div class="seat" id="82"></div>
    <div class="seat" id="83"></div>
    <div class="seat" id="84"></div>
    <div class="seat" id="85"></div>
    <div class="seat" id="86"></div>
    <div class="seat" id="87"></div>
    <div class="seat" id="88"></div>
    <div class="seat" id="89"></div>
    <div class="seat" id="90"></div>
    <div class="seat" id="91"></div>
    <div class="seat" id="92"></div>
    <div class="seat" id="93"></div>
    <div class="seat" id="94"></div>
    <div class="seat" id="95"></div>
    <div class="seat" id="96"></div>
  </div>
 
  
</div>
<button id="confirmButton">Potwierdź rezerwację</button>
<p class="text">
  Wybrałeś <span id="count">0</span> miejsc za cenę <span
    id="total"
    >0</span
  >
</p>
</section>
</header>




    <script>
     document.addEventListener("DOMContentLoaded", function () {
    const selectedSeats = [];
    function toggleSeat(seatId) {
        const seat = document.getElementById(seatId);
        if (seat.classList.contains("selected")) {
            seat.classList.remove("selected");
            const index = selectedSeats.indexOf(seatId);
            if (index !== -1) {
                selectedSeats.splice(index, 1);
            }
        } else {
            seat.classList.add("selected");
            selectedSeats.push(seatId);
        }
        updateCountAndTotal();
    }
    function updateCountAndTotal() {
        const countElement = document.getElementById("count");
        const totalElement = document.getElementById("total");
        const count = selectedSeats.length;
        const total = count * 20; 
        countElement.textContent = count;
        totalElement.textContent = total;
    }
    function markReservedSeats() {
        const movieTime = document.getElementById("movie").value;
        fetch('./CheckReservedSeats.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ movieTime }),
        })
        .then(response => response.json())
        .then(reservedSeats => {
            reservedSeats.forEach(seatId => {
                const reservedSeat = document.getElementById(seatId);
                if (reservedSeat) {
                    reservedSeat.classList.add("sold");
                }
            });
        })
        .catch((error) => {
        });
    }
    document.querySelectorAll('.seat').forEach(seat => {
        seat.addEventListener('click', () => {
            const seatId = seat.id;
            toggleSeat(seatId);
        });
    });

    document.getElementById("confirmButton").addEventListener("click", function () {
        const movieTime = document.getElementById("movie").value;
        const postData = {
            selectedSeats: selectedSeats,
            movieTime: movieTime
        };

        fetch('./Skrpyt.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(postData),
        })
        .then(response => response.text())
        .then(data => {
            markReservedSeats();
        })
        .catch((error) => {
        });
    });
    markReservedSeats();
});
</script>

  </body>
</html>