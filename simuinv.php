<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">

<body>
<div id="affichage">
    <h3>Datation au carbone 14</h3>

    <div >Date en année</div>
    <label id="change"> 5000 ans</label>
    <input type="range" min="0" max="50000" value="5000" class="slider bar" id="value1" onchange="calculs();">

</div>
<div id="calculDisplay"> Teneur en isotope carbone 14 est : </div>

<a href="exemple.php" class="bouton">Exemples </a>
<br><br>
<a href="simuinv.php" class="bouton">Simultion inverse </a>
</body>
<br><br>
</html>

<script language="javascript">

    function calculs(){
        var slider1 = document.getElementById("value1");
        x1 = slider1.value;

        var result = Math.round(100/Math.exp((x1/8033)));
        document.getElementById("calculDisplay").innerHTML = "Teneur en isotope carbone 14 est :  =" + result + " %";
        document.getElementById("change").innerHTML = x1 + " ANS";


    }

</script>