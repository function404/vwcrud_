<?php 
    include '../../includes/header.php';    

    include './registerPage.rules.php' 
?>

<main>
    <section class="titles">
        <p class="dashboard-title">Register</p>
        <div class="line"></div>
    </section>

    <section class="form-toggle">
        <button class="modelo">Modelo</button>
        <button class="chave">Chave</button>
    </section>

    <section class="container-register">
        <div class="content-register">
            <form action="" method="POST">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" required>

                <label for="type">Tipo:</label>
                <select name="type" id="type">
                    <option value="" disabled selected>Selecione</option>
                    <option value="SUV">SUV</option>
                    <option value="Hatch">Hatch</option>
                    <option value="Sedan">Sedan</option>
                    <option value="Pickup">Pickup</option>
                </select>

                <label for="color">Cor:</label>
                <input type="text" name="color" id="color" required>

                <label for="image">Imagem:</label>
                <input type="file" name="image" id="image" required>

                <div class="buttons">
                    <button type="reset" class="limpar">Limpar</button>
                    <button type="submit" class="cadastrar">Cadastrar</button>
                </div>
            </form>
        </div>
    </section>

    <section class="container-register">
        <div class="content-register">
            <form action="" method="POST">
                <label for="name">Chave:</label>
                <input type="text" name="name" id="name" required>
        
                <div class="buttons">
                    <button type="reset" class="limpar">Limpar</button>
                    <button type="submit" class="cadastrar">Cadastrar</button>
                </div>
            </form>
        </div>
    </section>
</main>