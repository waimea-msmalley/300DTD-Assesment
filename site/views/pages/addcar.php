<section>

    <h1>Add a Car</h1>

    <article>
        <form
            hx-post="/addcar"
            hx-trigger="submit"
            hx-swap="outerHTML"
            enctype="multipart/form-data"
        >

            <label>Year</label>
            <input name="year" type="text" required>

            <label>Make</label>
            <input name="make" type="text" required>

            <label>Model</label>
            <input name="model" type="text" required>

            <label>Picture of Car</label>
            <input name="image" type="file" value="image/" accept="image/*" required>

            <label>Description</label>
            <input name="descrip" type="text" required>

            <label>Price</label>
            <input name="price" type="text" required>

            <input type="submit" value="Add Car">

        </form>
    </article>

</section>



