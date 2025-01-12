<?php
$itens = [
    ['href' => '#', 'src' => '/img/x-icon.png', 'alt' => 'Icone do X'],
    ['href' => '#', 'src' => '/img/facebook-icon.png', 'alt' => 'Icone do Facebook'],
    ['href' => '#', 'src' => '/img/linkedin-icon.png', 'alt' => 'Icone Linkedin'],
];
?>

<section class="flex gap-x-3">
    <!-- Titulo e Descrição -->
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">Oi, meu nome é ...</h1>
        <p class="text-xl leanding-6 mt-6">
            Falando um pouco sobre mim, sou um desenvolvedor web que adora criar coisas novas e aprender novas tecnologias.
            Especilizado em PHP e HTML, mas também tenho conhecimento em outras linguagens como Python e Java.
        </p>
        <ul class="flex gap-x-3 mt-3">
            <!-- links de redes sociais -->
            <?php foreach ($itens as $item) : ?>

                <li>
                    <a href="<?= $item['href'] ?>">
                        <img class="h-8 hover:animate-bounce" src="<?= $item['src'] ?>" alt="<?= $item['alt'] ?>" />
                    </a>
                </li>

            <?php endforeach; ?>

            <!-- <li><a href="#">
                <img class="h-8 hover:animate-bounce" src="img/facebook-icon.png" alt="Facebook logo" />
                </a></li>
            <li><a href="#">
                    <img class="h-8 hover:animate-bounce" src="img/linkedin-icon.png" alt="Linkedin Logo" />
                </a></li> -->
        </ul>
    </div>
</section>