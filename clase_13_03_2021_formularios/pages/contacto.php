<?php include_once("../static/layouts/header.php"); ?>
<div class="container">
    <div class="mt-5"></div>
    <form onsubmit="return validateContactForm()" method="POST" action="validation.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nombre completo</label>
            <input type="text" class="form-control" id="name" name="fullname">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
<?php include_once("../static/layouts/footer.php");?>