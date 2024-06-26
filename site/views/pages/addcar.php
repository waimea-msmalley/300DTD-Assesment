<section>

    <h1>Add a Car</h1>

    <article>
        <form
            hx-post="/form"
            hx-trigger="submit"
            hx-swap="outerHTML"
            enctype="multipart/form-data"
        >

            <label>Year</label>
            <input name="name" type="text" required>

            <label>Make</label>
            <input name="name" type="text" required>

            <label>Model</label>
            <input name="name" type="text" required>

            <label>Description</label>
            <input name="name" type="text" required>

            <label>Price</label>
            <input name="name" type="text" required>

            <input type="submit" value="Add Car">

        </form>
    </article>

</section>



