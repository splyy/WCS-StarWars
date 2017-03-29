<nav class="navbar navbar-fixed-top navbar-custom" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="https://wildcodeschool.fr/wp-content/uploads/2017/01/logo_orange_pastille.png"  alt="Brand" width="30"/></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li <?php if($page == 'index.php'): echo 'class="active"'; endif; ?> ><a href="/">Le Temple</a></li>
                <li <?php if($page == 'list.php'): echo 'class="active"'; endif; ?> ><a href="/?page=list">Liste des Jedis</a></li>
                <li <?php if($page == 'form.php'): echo 'class="active"'; endif; ?> ><a href="/?page=form">Devenir un Jedi</a></li>
            </ul>
        </div>
    </div>
</nav>