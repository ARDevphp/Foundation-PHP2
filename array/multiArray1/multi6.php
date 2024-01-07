<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<?php
$blog = [
    [
        'url' => '/',
        'label' => 'Asosiy sahifa',
        'child' => []
    ],
    [
        'label' => 'Sport yangiliklari',
        'child' => [
            [
                'url' => '/',
                'label' => 'UEFA',
            ],
            [
                'url' => '/',
                'label' => 'APL',
            ],
            [
                'url' => '/',
                'label' => 'OCHL',
            ],
            [
                'url' => '/',
                'label' => 'ECHL',
            ],
            [
                'url' => '/',
                'label' => 'Super liga',
            ]
        ]
    ],
    [
        'label' => 'Texnologiya',
        'child' => [
            [
                'url' => '/',
                'label' => 'Kompiyuter'
            ],
            [
                'url' => '/',
                'label' => 'Mobil telefon'
            ],
            [
                'url' => '/',
                'label' => 'Bog\'lanish'
            ]
        ],
        'parametr' => [
            /**
             * -title
             * -content
             * -created_at - qo'shilgan sana
             * -author
             * -visited
             */
            'autor' => 'Azizbek Soliyev',
            'created_at' => '29.07.2023',
            'title' => "O'zbekiston yangi qurilish inshoatlari boshlandi",
            'content' => 'O\'zbekistonda qurilish ishlari jadallik bilan o\'sib bormoqda',
            'visited' => '122 ko\'rldi'
        ]
    ]
];
?>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: yellow">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">BOSH SAHIFA</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php
                foreach ($blog as $menu) {
                    if (count($menu['child']) > 0) { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                <?= $menu['label'] ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php
                                foreach ($menu['child'] as $child) {
                                    echo "<a class='dropdown-item' href='" . $child['url'] . "'>" . $child['label'] . "</a>";
                                }
                                ?>
                            </ul>
                        </li>

                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><?= $menu['label'] ?></a>
                        </li>
                    <?php }
                } ?>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Saytdan izlash" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Qidruv</button>
            </form>
        </div>
    </div>
</nav>
<div style="margin-top: 20px">
    <div>
        <a>
            <img src="http://static.norma.uz/images/185831_2642ad6f1a98c2818f3d0bad718c.jpg">
        </a>
    </div>
    <div class="article__info border ">
        <?php
        foreach ($menu['parametr'] as $parametr) { ?>
        <div>
            <div>
                <?php echo $parametr . "<br>";
                } ?>
            </div>
        </div>
        <a href="#"">
        <h3>O‘zbekistondagi bir qator qurilish obyektlari</h3>
        </a>
    </div>
</div>

<?php

$elements = [];
for($i = 0; $i < 100; $i++){
    $elements[$i] = $i." - element";
}
$page = 2;
if(isset($_GET['page'])){
    $page = $_GET['page'];
}

$limit = 15;
$start = ($page - 1) * $limit;
$pageCount = ceil(count($elements)/$limit);

$result = array_slice($elements, $start, $limit);
?>
<nav aria-label="...">
    <ul class="pagination pagination-lg">
        <?php
        for($i = 1; $i <= $pageCount; $i++ ){ ?>
            <li class="page-item"><a class="page-link" href="/multi6.php?page=<?=$i?>"><?=$i?></a></li>
        <?php }?>
    </ul>
</nav>




