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
            <h1 class="major">Profil de l'utilisateur <?= remove_accents($ville->getUsername()) ?></h1>
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
                        </tbody>
                    </table>
                </div>

        </div>
    </section>

</div>

<?php require_once "views/common/footer.php"; ?>
</body>
</html>