<?php include ("cabecalho.php");?>
    <div class="lista">
        <div>
            <?php
                require_once('conecta.php');
                require_once('class/SalaDAO.php');

                $salaDAO = new SalaDAO($conecta);
                $salasId = $salaDAO->listaSala($userId);

                ?>
                <h2><span><</span> Todas salas <span>></span></h2>
                <ul class="salas">

                <?php
                foreach ($salasId as $id) {
                ?>
                    <li><a href="sala.php?id=<?= $id['id_sala']?>">~ <?= $id['nome']?></a></li>

                <?php
                }
                ?>
                </ul>
                 <h2><span>< /</span> Todas salas <span>></span></h2>
        </div>
    </div>
