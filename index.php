

<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">

<body>
<div id="affichage">
    <h3>Datation au carbone 14</h3>

    <div >Teneur en isotope carbone 14/carbone 12 à la mesure en %</div>
    <label id="change"> 50%</label>
    <input type="range" min="0" max="100" value="50" class="slider bar" id="value1" onchange="calcul();">

</div>
<div id="calculDisplay"> Age = 5568 ans </div>
<canvas id = "schema" height="1000" width="1000" style="border:1px solid">

</canvas>
<a href="exemple.php" class="bouton">Exemples </a>
<br><br>
<a href="simuinv.php" class="bouton">Simultion inverse </a>
</body>
</html>

<script language="javascript">
    var slider1 = document.getElementById("value1");
    var x1 = slider1.value;
    var zone_dessin = document.getElementById("schema");
    var graphe= zone_dessin.getContext("2d");
    var compteur=0;
    graphe.strokeStyle = "#0098f8";
    graphe.lineWidth=5;
    graphe.beginPath();
    graphe.moveTo(0,f(0));
    graphe.moveTo(0,f(0));
    while(compteur<100) {
        graphe.lineTo(10*(compteur-(0)),1000-(f(compteur)-(0))*0.01);
        compteur=(compteur+0.05);
    }
    graphe.stroke();
    function f(x) {
        var y=Math.round(8033 * Math.log(100/(x)));
        return (y);
    }
    graphe.beginPath();
    graphe.lineWidth="1";
    graphe.strokeStyle="black";
    graphe.moveTo(0,zone_dessin.height/2);
    graphe.lineTo(zone_dessin.width,zone_dessin.height/2);
    graphe.lineTo(zone_dessin.width-5,(zone_dessin.height/2)-5);
    graphe.moveTo(zone_dessin.width,zone_dessin.height/2);
    graphe.lineTo(zone_dessin.width-5,(zone_dessin.height/2)+5);
    graphe.moveTo(zone_dessin.width/2,zone_dessin.height);
    graphe.lineTo(zone_dessin.width/2,0);
    graphe.lineTo((zone_dessin.width/2)-5,5);
    graphe.moveTo(zone_dessin.width/2,0);
    graphe.lineTo((zone_dessin.width/2)+5,5);
    graphe.stroke();
    graphe.font = "30px Verdana";
    graphe.fillText("0",0,100+zone_dessin.height/2);
    graphe.fillText("100%",zone_dessin.width-100,100+zone_dessin.height/2);
    graphe.fillText("0",50+zone_dessin.width/2,-8+zone_dessin.height);
    graphe.fillText("Age 50000",50+zone_dessin.width/2,80);
    function calcul(){
        x1 = slider1.value;

        var result = Math.round(8033 * Math.log(100/(x1)));
        document.getElementById("calculDisplay").innerHTML = "Age =" + result + " ans";
        document.getElementById("change").innerHTML = x1 + "% ";

        graphe.beginPath();
        graphe.lineWidth="1";
        graphe.strokeStyle="red";
        graphe.moveTo(10*x1,0);
        graphe.lineTo(10*x1,zone_dessin.width);
        graphe.moveTo(0,1000-(result/50));
        graphe.lineTo(zone_dessin.height,1000   -(result/50));
        graphe.stroke();

    }

</script>