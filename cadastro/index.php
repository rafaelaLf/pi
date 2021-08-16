<?php

    $aPagina = [
        'id'        =>  '',
        'classe'    =>  'bg-gradient-primary',
        'titulo'    =>  'Cadastro'
    ];

    include_once ('../include/header.php')

?>

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Crie sua conta agora mesmo!</h1>
                        </div>
                    </div>

                    <nav class="navbar navbar-expand topbar mb-4 col-md-8 static-top">

                        <ul class="navbar-nav ml-auto col-md-6">

                            <li class="nav-item dropdown no-arrow" style="margin-right: 40px">
                                <a href="cadastro/pais.php" class="btn btn-light btn-icon-split">
                                    <span class="text">Pais</span>
                                </a>
                            </li>

                            <li class="nav-item dropdown no-arrow" style="margin-right: 40px">
                                <a href="cadastro/baba.php" class="btn btn-light btn-icon-split">
                                    <span class="text">Babá</span>
                                </a>
                            </li>

                        </ul>

                    </nav>

                </div>
            </div>
        </div>
    </div>

</div>

<?php

    include_once ('../include/footer.php');
