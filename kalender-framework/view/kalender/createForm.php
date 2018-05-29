
<!--form for creating new person-->
<form action="<?= URL ?>kalender/createSave" method="post">
    <p>Naam:<input name="person" type="text" max="12" required></p>
    <p>Geboortedatum:<input placeholder="Dag" name="day" type="number" min="1" max="31" required> <input placeholder="month" name="month" type="number" min="1" max="12" required> <input placeholder="Jaar" name="year" type="number" min="1900" max="2018" required></p>
    <input type="submit" name="createPerson">
</form>