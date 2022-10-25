<?php
include "header.php";

?>

<main id="main" class="main-page">

    <!-- ======= Speaker Details Sectionn ======= -->
    <section id="speakers-details">
    <br><br><br>
        <div class="container">
            <div class="section-header">
                <center>
                <h2> No hay boletos</h2>
                </center>
            </div>
            <center>
                <div class="col-md-6">
                    <div class="details">
                        <h1> No hay boletos disponibles de categoria: <?php echo $_GET["cat"];  ?>. </h1>
                        <br>
                    </div>
                </div>
            </center>
        </div>
        <br><br><br>
    </section>

</main><!-- End #main -->

<?php
include "footer.php";
?>