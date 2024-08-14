<?php include 'header.php'; ?>
    <h1>Contacto</h1>
    <form action="contact_process.php" method="post">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Mensaje:</label>
        <textarea id="message" name="message" required></textarea>
        
        <button type="submit">Enviar</button>
    </form>
<?php include 'footer.php'; ?>
