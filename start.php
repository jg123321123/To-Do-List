<?php include("header.html"); ?>

<div>
    <form action="index.php" method="post">
        <fieldset>
            <p>
                <strong><label class="left">Name:</label></strong>
                <input name="name" type="text" size="16">
            </p>
            <p>
                <strong><label class="left">Email:</label></strong>
                <input name="email" type="text" size="16">
            </p>
            <p>
                <input type="submit" value="Begin" />
            </p>
        </fieldset>
    </form>
</div>

<?php include("description.html"); ?>