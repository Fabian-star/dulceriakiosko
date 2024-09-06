<?php
    include('app/config.php');
    include('layout/sesion.php');
    include('layout/parte1.php');
?>

<style>
    .content-wrapper {
        background-image: url('<?php echo $URL;?>/public/images/DULCES.avif');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
    }
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                <br></br>
                    <center><h1 class="m-0">BIENVENIDO AL SISTEMA DE VENTAS</h1></center> <br></br>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <style>
    /* Cambiar color y tamaño de las letras */
    .content h3 {
        color: white; /* Cambia 'blue' al color que desees */
        font-size: 24px; /* Tamaño de fuente para h3 */
    }

    .content h5 {
        color: white; /* Cambia 'green' al color que desees */
        font-size: 18px; /* Tamaño de fuente para h5 */
    }
</style>

<style>
    /* Espacio de separación entre los mensajes */
    .message-container {
        margin-bottom: 50px; /* Cambia '20px' al valor que desees para el espacio de separación */
    }
</style>

<div class="message-container">
<center><h2 class="m-0">¿QUIENES SOMOS?</h2></center>
    <h3 class="m-4">Somos una tienda en línea especializada en ofrecerte los dulces más deliciosos y variados para satisfacer tus antojos más dulces. Desde clásicos caramelos hasta golosinas exóticas, en Kiosko encontrarás un paraíso para los amantes de lo dulce o para invertir en tu negocio. Nuestra pasión es brindarte una experiencia única que compras y de satisfacción encontrando lo que buscas. ¡Explora nuestro mundo de sabores y déjate tentar por nuestras delicias azucaradas! ¡SOMOS TU MEJOR OPCIÓN!</h3>
</div>
</div>
<!-- /.content-wrapper -->

<?php include('layout/parte2.php'); ?>
