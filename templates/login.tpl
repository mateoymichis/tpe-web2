{include 'templates/header.tpl'}
<form action="verify" method="POST" class="p-4">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="username" name="email" class="form-control" placeholder="Ingresar email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password">
        {if $error}
            <div>
                {$error}
            </div>
        {/if}
    </div>
    <button type="submit" class="btn btn-primary">Iniciar sesión</button>

</form>
{include 'templates/footer.tpl'}