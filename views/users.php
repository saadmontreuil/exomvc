<!DOCTYPE HTML>
<html>
<?php require_once "views/common/header.php"; ?>
<body class="is-preload">

<?php require_once "views/common/navbar.php"; ?>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <h1 class="major">Liste de tous les utilisateurs</h1>
            <!-- Table -->
                <div class="table-wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>departement</th>
                            <th>nom</th>
                            <th>code postale</th>
                            <th>canton</th>
                            <th>population</th>
                            <th>densite</th>
                            <th>surface</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        if (count((array)$new_villes) > 1) {
                            ?>
                            <tr>
                                <td><?= $new_villes->getId() ?></td>
                                <td><?= remove_accents($new_villes->getDepartement()) ?></td>
                                <td><?= $new_villes->getNom() ?></td>
                                <td><?= $new_villes->getCodePostale() ?></td>
                                <td><?= $new_villes->getCanton() ?></td>
                                <td><?= $new_villes->getPopulation() ?></td>
                                <td><?= $new_villes->getDensite() ?></td>
                                <td><?= $new_villes->getSurface() ?></td>
                            </tr>

                        <?php } else {
                        foreach ($villes as $ville)
                        { ?>
                            <tr>
                                <td><?= $ville->getId() ?></td>
                                <td><?= remove_accents($ville->getDepartement()) ?></td>
                                <td><?= $ville->getNom() ?></td>
                                <td><?= $ville->getCodePostale() ?></td>
                                <td><?= $ville->getCanton() ?></td>
                                <td><?= $ville->getPopulation() ?></td>
                                <td><?= $ville->getDensite() ?></td>
                                <td><?= $ville->getSurface() ?></td>
                            </tr>
                        <?php } }?>
                        </tbody>
                    </table>
                </div>

        </div>
    </section>

</div>

<?php require_once "views/common/footer.php"; ?>
</body>
</html>