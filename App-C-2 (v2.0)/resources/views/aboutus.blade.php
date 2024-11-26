<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="keywords" content="Sobre ClothSha">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sobre Nosostros</title>
        <link rel="icon" href="{{asset('images/logo.ico')}}" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head> 
        <!--Auth::user() obtiene el usuario que está actualmente autenticado.
            Auth::id() obtiene solo el ID del usuario autenticado, lo que también puedes usar para hacer consultas más específicas.
            User::find(Auth::id()) es una forma de obtener el usuario directamente desde la base de datos usando su ID.-->
    <style> 
        *{
            padding: 0px;
            margin: 0px;
        }
        body{
            background-image: image-set("{{asset('/images/ImagenODS.png')}}");
            background-color: #FFFFFF;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            width: 100%;
            height: 100%;
        }
        .text_content{
            margin-top: 3px;
            margin-left: 3px;
            width: 70%;
            margin: 0px auto;
            height: 650px;
            float: left;
            position: relative;
            background-color: darkgray;
            opacity: 0.7;
            overflow-y: auto;
        }
        .redirections{
            margin-top: 3px;
            margin-left: 3px;
            margin-right: 3px;
            margin: 0px auto;
            width: 30%;
            height: 650px;
            float: right;
            position: relative;
            display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            gap: 25px
        }
        .button_position{
            margin: 0px auto;
            justify-content: center;
            border-color: #000000;
            border-width: medium;
            border-style: solid;
        }
        button {
        border: none;
        color: #fff;
        background-image: linear-gradient(30deg, #005800, #39f383);
        border-radius: 20px;
        background-size: 100% auto;
        font-family: inherit;
        font-size: 17px;
        padding: 0.6em 1.5em;
        }

        button:hover {
        background-position: right center;
        background-size: 200% auto;
        -webkit-animation: pulse 2s infinite;
        animation: pulse512 1.5s infinite;
        }

        @keyframes pulse512 {
        0% {
        box-shadow: 0 0 0 0 #05bada66;
        }

        70% {
        box-shadow: 0 0 0 10px rgb(218 103 68 / 0%);
        }

        100% {
        box-shadow: 0 0 0 0 rgb(218 103 68 / 0%);
        }
        }
    </style>
    <body>
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <h1 class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none" >Sobre Nosotros</h1>
            </header>
        </div>
        <article class="container">
            <p class="text_content"> 
                ClothSha es un proyecto de desarrollo web independiente orientado al 
                <a href="https://www.un.org/sustainabledevelopment/es/sustainable-consumption-production/" style="color: #000000; text-decoration:red dotted underline">"Objetivo de Desarrollo Sostenible 12"</a> .
                En ClothSha usted podra subir una imagen y descripcion de las prendas que actualmente ya no use, para que aquellos que necesiten las prendas se pongan en contacto con usted
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem deserunt alias quia asperiores veritatis aperiam nisi, animi doloribus velit vitae sint. Optio aliquid repellat assumenda, harum amet ab in rerum iusto reiciendis temporibus excepturi quidem porro magni voluptas quaerat perspiciatis modi aspernatur ducimus quibusdam non aut 
                ipsa unde voluptatem laudantium? Saepe culpa incidunt ut quos quia minus reprehenderit illo officiis dicta esse tenetur accusantium corporis unde, a ea hic, provident iste officia nam soluta id consequatur 
                atque! Illum illo itaque aspernatur laudantium ipsum nulla odit quam labore maxime enim assumenda fuga molestias odio, sapiente excepturi recusandae cum sunt. Pariatur minima odit nesciunt aliquam deserunt aspernatur ex amet nisi reiciendis dolorum placeat officiis illo iste obcaecati, eius minus ut perferendis accusamus eligendi, temporibus enim? Delectus quas itaque omnis expedita debitis nemo minima eligendi dolorum voluptatibus quidem facere 
                provident autem earum reiciendis iste illum tempore dicta, laudantium sapiente saepe quo velit quaerat laboriosam. Fugit, libero consequatur! In provident quam laudantium culpa omnis ullam fugiat, pariatur repudiandae nisi id veritatis commodi ducimus, quae quis quidem? Dolore exercitationem illum earum libero harum officia. In neque amet consectetur! Velit recusandae cumque, officiis qui magni provident optio voluptates magnam hic alias earum quia quod corrupti, voluptate quis tempora. Maxime, distinctio! Ea, pariatur voluptatem? Possimus, veritatis neque! Sunt tenetur deserunt debitis dicta? Inventore explicabo cupiditate est iusto impedit, et, dignissimos animi exercitationem optio, 
                qui ipsa nulla officiis necessitatibus ipsum culpa quisquam minima quibusdam. Alias eligendi assumenda atque ullam id non dicta, deserunt molestias placeat provident est quia animi quisquam tenetur nostrum natus veritatis esse quos fuga dignissimos incidunt aspernatur reiciendis doloremque. Nemo totam fugiat debitis nihil optio nobis, 
                explicabo blanditiis quo incidunt vel labore dolores ullam pariatur hic deleniti dolorum ducimus maxime nostrum laborum vero! Quod quas molestiae suscipit recusandae animi nobis voluptas quo fugit labore mollitia cum tempora iusto, saepe natus id enim doloremque nostrum iste fugiat ipsam 
                sapiente. Ad ex deserunt vel, obcaecati soluta nulla, eum inventore delectus porro et iusto eos autem neque qui, necessitatibus sint rem incidunt accusamus veniam possimus eaque libero? Perferendis dolorem temporibus, delectus rem ullam commodi explicabo reiciendis voluptates labore ut consequatur quisquam illum, pariatur odit quo tempora fuga vero. Vitae assumenda consectetur molestiae expedita corrupti, magnam quasi officia facere aspernatur incidunt est? Cum et suscipit explicabo inventore, eaque dolorem nihil iure laboriosam, architecto fugit distinctio. Fugiat provident hic rem modi, ducimus quaerat expedita libero dolor a eligendi, necessitatibus sequi.
            </p>
            <div class="redirections">
                <a href="{{route('home')}}">
                    <button class="button_position">
                        Volver
                    </button>
                </a>
                <a href="{{route('prendas.index')}}">
                <button class="button_position">
                    Ir a Prendas
                </button>
                </a>
            </div>
        </article>
    </body>
</html>