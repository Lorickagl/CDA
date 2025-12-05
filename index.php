<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <header>
        <nav>
            <ul>
                <li><a href="#sect1">Accueil</a></li>
                <li><a href="#sect2">Contactez-moi</a></li>
            </ul>
        </nav>
</header>
<main>
        <div>
            <section id="sect1" class="sect1">
                <img src="/Image/images.jpg" alt="img_sect1">
                <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium error in nihil et quis modi
                    aliquam illo totam vero reiciendis, aspernatur qui voluptatum atque illum autem maxime vel sit.
                    Iure.</p>
                    <p></p>
            </section>
             <section id="sect2" class="sect2">
                <img src="" alt="Image Random">
                <form id="formulaire">
                    <input type="text" name="nom" id="nom" required />
                    <input type="text" name="prenom" id="prenom" required />
                    <input type="email" name="email" id="email" />
                    <input type="submit" value="Validez ! " />
                                        <p id="message">
                        Votre demande est bien envoyée !
                    </p>
                    <p id="message">
                        Vos informations ne sont pas correctes
                    </p>
                </form>
            </section>
            <footer>
        <p>Page web faite par <?php NOM ?></p>
    </footer>
    <script src="/index.js"></script>
</body>
</html>