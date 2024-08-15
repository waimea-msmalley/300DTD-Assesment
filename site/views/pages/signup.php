<h2>Sign Up</h2>

<form
    hx-post="/signup"
    hx-trigger="submit"
>

    <label>Forename</label>
    <input id=formtext name="forename" type="text" required>

    <label>Surname</label>
    <input id=formtext name="surname" type="text" required>

    <label>Username</label>
    <input id=formtext name="user" type="text" required>

    <label>Password</label>
    <input id=formtext name="pass" type="text" required>

    <input id=button type="submit" value="Sign up">
    
</form>