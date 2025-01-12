<?php
$projetos = [

    [
        "titulo" => "Meu portfólio",
        "finalizado" => false,
        "ano" => 2024,
        "descricao" => "Meu primeiro portfólio escrito em PHP e HTML",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => "/img/projeto-portfolio.png",
    ],
    [
        "titulo" => "Lista de Tarefas",
        "finalizado" => true,
        "ano" => 2024,
        "descricao" => "Lista de tarefas escrito em PHP e HTML",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => "",
    ],
    [
        "titulo" => "Controle de Leitura de Livros",
        "finalizado" => true,
        "ano" => 2023,
        "descricao" => "Lista de livros escrito em PHP e HTML",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => "",
    ],
    [
        "titulo" => "Mais um projeto",
        "finalizado" => false,
        "ano" => 2025,
        "descricao" => "Mais um projeto escrito em PHP e HTML",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => "",
    ],
];

?>

<?php foreach ($projetos as $projeto): ?>
    <div class="bg-slate-800 rounded-lg p-3 flex items-center space-x-5">

        <div class="w-1/5">
            <img src=<?= $projeto['img'] ?> alt="" class="h-42 rounded-md shadow-lg shadow-slate-900" />
        </div>

        <div class="w-full">
            <div class="flex gap-3 justify-between">
                <h3 class="font-semibold text-xl">
                    <?= $projeto['finalizado'] ? "✅" :  "" ?>
                    <?= $projeto['titulo'] ?>

                    <?php if ($projeto['finalizado']) : ?>
                        <span class="text-xs text-gray-400 opacity-50 italic">(finalizado em <?= $projeto['ano'] ?>)</span>
                    <?php else: ?>
                        <span class="text-xs text-gray-400 opacity-50 italic">(Em desenvolvimento)</span>
                    <?php endif; ?>
                </h3>

                <div class="space-x-1">
                    <?php  
                    $colors = ["fuchsia", "green", "sky", "rose", "amber", "teal", "purple"];
                    
                    
                    foreach ($projeto['stack'] as $position => $language): ?>
                    <span class="bg-<?= $colors[$position] ?>-400 text-<?= $colors[$position] ?>-900 rounded-md px-2 py-1 font-semibold text-xs">
                        <?= $language ?>
                    </span>
                    <?php endforeach; ?>
                </div>
            </div>
            <p class="leading-6 w-4/5">
               <?= $projeto['descricao'] ?>
            </p>
        </div>
    </div>
<?php endforeach; ?>