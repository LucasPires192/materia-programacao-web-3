<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campeonato Paulista</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background: linear-gradient(45deg, #168d20ff, #0a3b0eff);
        }
        .header{
            display: flex;
            position: sticky;
            top: 0;
            left: 0;
            justify-content: space-between;
            align-items: center;
            padding: 10px 16px;
            height: 100px;
            background-image: url("./img/bola.png"), linear-gradient(90deg, rgba(124, 252, 0, 0.5),  rgba(3, 235, 3, 0.5));
            background-size: content;
            background-repeat:repeat-x;
        }
        .header img{
            width: 50px; 
            height: 50px;
        }
        .header h1{
            color: #fff;
        }
        .btn-nav{
            display: flex;
            align-items: center;
            width: fit-content;
            background: linear-gradient(45deg, #0c4b11ff, #0a3b0eff);
            border-radius: 5px;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
        }
        .btn-nav:hover{
            opacity: 0.8;
        }
        h3{
            text-align: center;
            padding: 10px;
        }
        .time-shield{
            width: 80px; 
            height: 80px;
            background-color: rgba(255, 255, 255, 0.7);
            padding: 10px;
            border-radius: 5px;
        }
        .list-club-container{
            padding: 10px;
            border-radius: 10px;
        }
        .list-club{
            display: grid;
            grid-template-columns: repeat(2, 50%);
            gap: 10px;
            padding: 10px;
        }
        .list-club li{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px 20px;
            text-align: left;
            border: solid black 1px;
            border-radius: 5px;
            background: linear-gradient(45deg, #302f2fff, #302f2fff);
            opacity: 0.9;
            color: #fff;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <div class="header" ">
        <img src="./img/bola.png">
        <h1 style="">Campeonato Paulista</h1>
    </div>
        <a class= "btn-nav" href="/cadastro">Cadastre-se</a>
    <div class="list-club-container">
        <h3>Série A</h3>
        <ul class="list-club">
            <li class="time-name">Água Santa<img class="time-shield" alt="escudo da agua santa" src="./img/shields/agua-santa.png"></li>
            <li class="time-name">Botafogo<img class="time-shield" alt="escudo do botafogo" src="./img/shields/botafogo.png"></li>
            <li class="time-name">Corinthians<img class="time-shield" alt="escudo do corinthians" src="./img/shields/corinthians.png"></li>
            <li class="time-name">Grêmio Novorizontino<img class="time-shield" alt="escudo do gremio novorizontino" src="./img/shields/gremio-novorizontino.png"></li>
            <li class="time-name">Guarani<img class="time-shield" alt="escudo do Guarani" src="./img/shields/Guarani.png"></li>
            <li class="time-name">inter Limeira<img class="time-shield" alt="escudo da inter limeira" src="./img/shields/inter-limeira.png"></li>
            <li class="time-name">Mirassol<img class="time-shield" alt="escudo do mirassol" src="./img/shields/mirassol.png"></li>
            <li class="time-name">Noroeste<img class="time-shield" alt="escudo do noroeste" src="./img/shields/noroeste.png"></li>
            <li class="time-name">Palmeiras<img class="time-shield" alt="escudo do palmeiras" src="./img/shields/palmeiras.png"></li>
            <li class="time-name">Ponte Preta<img class="time-shield" alt="escudo do ponte preta" src="./img/shields/ponte-preta.png"></li>
            <li class="time-name">Portuguesa SAF<img class="time-shield" alt="escudo da portuguesa" src="./img/shields/portuguesa.png"></li>
            <li class="time-name">Red Bull Bragantino<img class="time-shield" alt="escudo do bragantino" src="./img/shields/bragantino.png"></li>
            <li class="time-name">Santos<img class="time-shield" alt="escudo da santos" src="./img/shields/santos.png"></li>
            <li class="time-name">São Bernardo FC<img class="time-shield" alt="escudo do sao bernardo fc" src="./img/shields/sao-bernardo.png"></li>
            <li class="time-name">São Paulo<img class="time-shield" alt="escudo do sao paulo" src="./img/shields/sao-paulo.png"></li>
            <li class="time-name">Velo Clube<img class="time-shield" alt="escudo do velo clube" src="./img/shields/velo.png"></li>
        </ul>
    </div>
</body>
</html>