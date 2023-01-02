<div class="form-container">
    <div>
        <h2>Inserisci nuovo dipendente</h2>
    </div>
    <form class="form" action="index.php" method="post">
        <div>
            <label for="rookie">Matricola:</label>
            <input type="text" name="rookie" value=<?php echo $id[0]['max'] + 1 ?> readonly>
        </div>
        <div>
            <label for="name">Nome:</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="lastname">Cognome:</label>
            <input type="text" name="lastname">
        </div>
        <div>
            <label for="fiscalcode">Codice Fiscale:</label>
            <input type="text" name="fiscalcode">
        </div>
        <div>
            <label for="birthday">Data di nascita:</label>
            <input type="date" name="birthday">
        </div>
        <div>
            <label for="role">Ruolo:</label>
            <select name="role" id="">
                <option selected value="Seleziona">Seleziona</option>
                <option value="Jr. Developer">Jr. Developer</option>
                <option value="Sr. Developer">Sr. Developer</option>
                <option value="Ingegnere Informatico">Ingegnere Informatico</option>
                <option value="Responsabile IT">Responsabile IT</option>
                <option value="Tecnico Informatico">Tecnico Informatico</option>
                <option value="Project Menager">Project Menager</option>
            </select>
        </div>
        <div>
        <label for="date-contract">Giorno di assunzione:</label>
            <input type="date" name="date-contract">
        </div>
        <div>
            <label for="type-contract">Tipo contratto:</label>
            <select name="type-contract" id="">
                <option selected value="Stage">Stage</option>
                <option value="Determinato">Determinato</option>
                <option value="Indeterminato">Indeterminato</option>
                <option value="Amministratore">Amministratore</option>
            </select>
        </div>
        <div>
            <input style="background-color: white;" name="insert" class="submit" type="submit" value="Inserisci">
        </div>
    </form>
</div>
<div class="text-alert">
    <h2><?php echo $message; ?></h2>
</div>
<form action="index.php" method="get" class="search">
    <input name="text" type="text" placeholder="&#128269">
    <input style="background-color: white;" name="search" type="submit" value="Cerca">
</form>
<div class="show-list">

<table>
  <tr>
    <th>Matricola</th>
    <th>Nome</th>
    <th>Cognome</th>
    <th>C.F.</th>  
    <th>Ruolo</th>
    <th>Conrratto</th>
  </tr>
    <?php 
        foreach($users as $user){
            echo "
            <tr>
                <td>$user[id]</td>
                <td>$user[Name]</td>
                <td>$user[Lastname]</td> 
                <td>$user[FiscalCode]</td>
                <td>$user[Role]</td>
                <td>$user[Contract]</td>
            </tr>
            ";
        }
    
    ?>
   
</table>

</div>
