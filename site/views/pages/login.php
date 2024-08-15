<h2>Login</h2>

<form
    hx-post="/login"
    hx-trigger="submit"
>

    <label>Username</label>
    <input id=formtext name="user" type="text" required>

    <label>Password</label>
    <input id=formtext name="pass" type="password" required>

    <input id=button type="submit" value="Login">
    
</form>