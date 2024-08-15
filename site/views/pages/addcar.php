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
            <input id=formtext name="year" type="text" required>

            <label>Make</label>
            <input id=formtext name="make" type="text" required>

            <label>Model</label>
            <input id=formtext name="model" type="text" required>

            <label>Picture of Car</label>
            <input id=formtext name="image" type="file" value="image/" accept="image/*" required>

            <label>Description</label>
            <input id=formtext name="descrip" type="text" required>

            <label>Price</label>
            <input id=formtext name="price" type="text" required>

            <input id=button type="submit" value="Add Car">

        </form>
    </article>

</section>



