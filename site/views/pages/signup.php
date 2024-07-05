<h2>Sign Up</h2>

<form
    hx-post="/signup"
    hx-trigger="submit"
>

    <label>Forename</label>
    <input name="forename" type="text" required>

    <label>Surname</label>
    <input name="surname" type="text" required>

    <label>Username</label>
    <input name="user" type="text" required>

    <label>Password</label>
    <input name="pass" type="text" required>

    <input type="submit" value="Sign up">
    
</form>