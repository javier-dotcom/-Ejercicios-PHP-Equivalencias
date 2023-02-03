<!DOCTYPE html>


<html>

<head>
    <title>Equivalencias.php</title>
    <style type="text/css">
        body {
            background-color: #000;
            color: #fff;
        }
        
        .input,
        p {
            text-align: center;
            padding: 3px;
            color: #000;
            background-color: rgba(20, 159, 159);
            border: 5px groove rgba(159, 20, 20);
            text-decoration: none;
            opacity: 0.7;
        }
        
        .input:hover {
            opacity: 1.0;
            cursor: pointer;
        }
        
        p:hover {
            opacity: 1.0;
            cursor: pointer;
        }
        
        .for {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
        
        .ejer {
            text-align: center;
            width: 80%;
            margin: auto;
        }
        
        .label {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        table,
        tr,
        td {
            margin: auto;
            color: #000;
            background-color: rgba(20, 159, 159);
            border: 5px groove rgba(159, 20, 20);
            padding: 3px;
        }
    </style>


</head>

<body>



    <div class="ejer">
        <h1>Programacion PHP</h1>
        <h3>Equivalencias</h3>
        <p>Elaborar un programa que permita leer una medida (N) en número de metros, y que imprima una tabla de equivalencias a yardas, pulgadas y pies; desde 1 metro hasta N metros de uno en uno. Equivalencias: 1 pie = 12 pulgadas, 1 yarda = 3 pies, 1 pulgada
            = 2,54 cm, 1 metro = 100 cm.
        </p>

        <form action="Equivalencias.php" method="get">
            <h2>Ingresar valor </h2>
            <input class="input" type="number" name="num" required="" min=1>
            <input class="input" type="submit" value="Calcular" name="calcular" id="calcular">


        </form>



        <?php
if(isset($_GET["calcular"])){
?>
            <h2>Valor ingresado</h2>
            <?php

$a=$_GET["num"];
 echo "<h3>" . $a ."</h3>";
echo "<table><tr><td class='metro'>  Metros</td><td class='yarda'>Yardas</td><td class='pulga'>  Pulgadas</td><td class='pies'>Pies</td></tr>";
for($p=1;$p<=$a;$p++){
echo "<tr><td class='metro'>  $p</td><td class='yarda'> " . ($p*1.09361) . "</td><td class='pulga'>" .  ($p*39.3701) . "</td>". "</td><td class='pies'>" .  ($p*3.28084) . "</td>";
}
}
?>
    </div>
    </div>
</body>

</html>