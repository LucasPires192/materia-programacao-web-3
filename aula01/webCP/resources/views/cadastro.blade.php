<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
        <style>
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            body{
                height: 100vh;
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
                background: linear-gradient(90deg, #7CFC00,  #03eb03ff);
            }
            .header img{
                width: 50px; 
                height: 50px;
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
                opacity: 0.9;
            }
            .formulario{
                display: flex;
                gap: 20px;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                width: 100%;
                height: 80%;
            }
            .formulario h3{
                color: #fff;
                text-transform: uppercase;
            }
            .formulario form{
                display: flex;
                flex-direction: column;
                align-items: center;
                background: linear-gradient(45deg, #4122cfff, #441eecff);
                width: 500px;
                gap: 20px;
                max-width: 50%;
                padding: 50px 0;
                border-radius: 10px;
                color: #fff;
                text-transform: uppercase;
            }
            .formulario input{
                padding: 5px 0 5px 10px;
                border-radius: 10px;
                width: 70%;
                border: none;
                outline: none;
            }
            .formulario button{
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                background-color: #180d47ff;
                color: #fff;
                cursor: pointer;
            }
            .formulario button:hover{
                opacity: 0.7;
            }
        </style>
</head>
<body>
    <div class="header" ">
        <img src="./img/bola.png">
        <h1 style="">Campeonato Paulista</h1>
    </div>
    
    <a class= "btn-nav" href="/">Página Inicial</a>

    <div class="formulario">
        <h3>Cadastre-se para receber noticias no seu time</h3>
        <form>
            <label name="name">Nome: </label>
            <input type="text" placeholder="Nome">
            <label name="emial">E-mail: </label>
            <input type="email" placeholder="E-mail">
            <label name="telefone">Telefone: </label>
            <input type="number" placeholder="(**)* ****-****">
            <button type="button">Cadastrar</button>
        </form>
    </div>
</body>
</html>