<h2>Login</h2>

<form
    hx-post="/login"
    hx-trigger="submit"
>

    <label>Username</label>
    <input name="user" type="text" required>

    <label>Password</label>
    <input name="pass" type="text" required>

    <input type="submit" value="Login">
    
</form>