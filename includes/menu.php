<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'index.php'){echo 'active'; } else { echo ''; } ?>"><a href="index.php">Home</a></li>
        <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'quem-somos.php'){echo 'active'; } else { echo ''; } ?>"><a href="quem-somos.php">Quem Somos</a></li>
        <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'servicos.php'){echo 'active'; } else { echo ''; } ?>"><a href="servicos.php">Serviços</a></li>
        <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'contato.php'){echo 'active'; } else { echo ''; } ?>"><a href="contato.php">Contato</a></li>
    </ul>
    <form class="navbar-form navbar-left" metodo="POST" action="/includes/pesquisar.php" role="search">
        <div class="form-group">
            <input type="text" name="pesquisar" class="form-control" placeholder="Digite...">
        </div>
        <button type="submit" class="btn btn-default searc" value="Enviar" aria-label="Left Align">
            <span> </span>
        </button>
    </form>
</div><!-- /.navbar-collapse -->