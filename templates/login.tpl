{include 'templates/header.tpl'}
    <form action="verify" method="POST">
        <label for="email">Email</label>
        <input type="username" name="email" placeholder="Ingresar email">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password">
        {if $error}
            <div>
                {$error}
            </div>
        {/if}
        <button type="submit">Iniciar sesión</button>
    </form>
{include 'templates/footer.tpl'}
