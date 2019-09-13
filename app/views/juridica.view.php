<?php include 'app/views/partials/header.php'; ?>
<style>
body{
    background-color:#e1e1e1;
}
footer{
    margin-top:100px;
    position:relative !important;
}
</style>
<div class="container">
    <?php include 'app/views/partials/step1juridico.php'; ?>
    <?php include 'app/views/partials/step2juridico.php'; ?>  
    <?php include 'app/views/partials/step3juridico.php'; ?>  
    <?php include 'app/views/partials/step4juridico.php'; ?>  
</div>  
<?php include 'app/views/partials/footer.php'; ?>
<script src="public/assets/js/cadastroJuridico.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>
