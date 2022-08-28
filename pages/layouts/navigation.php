<?php
$logged_in = FrontController::is_logged_in();
?>

<div class="navbar-fixed">
	<nav class="blue-grey darken-2" role="navigation">
		<div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo"><img src="/assets/images/logo_business.png" alt="Schiller Viktor" align="bottom" width="60" height="60">
			<a href="/" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>    
				<ul class="right hide-on-med-and-down">
					<li><a href="/">Főoldal</a></li>
					<li><a href="/?page=members">Rólam</a></li>
					<li><a href="/?page=gallery">Galéria</a></li>
					<li><a href="/?page=map">Elérhetőség</a></li>
					<li><a href="/?page=contact">Contact</a></li>
					<?php if ($logged_in): ?>
						<li><a href="/?page=login&action=logout" class="btn red">Kilépés</a></li>
					<?php else: ?>
						<li><a href="/?page=login" class="btn green pulse">Belépés / Regisztráció</a></li>
					<?php endif; ?>
				</ul>
		</div>
	</nav>
</div>
    <ul id="nav-mobile" class="sidenav">
       <li><a href="/">Főoldal</a></li>
       <li><a href="/?page=members">Rólam</a></li>
       <li><a href="/?page=gallery">Galéria</a></li>
       <li><a href="/?page=map">Elérhetőség</a></li>
       <li><a href="/?page=contact">Contact</a></li> 
    </ul>
    
    

<?php if ($logged_in): ?>
<div class="secondary-nav blue-grey lighten-3">
    <div class="container">
        <strong class="right">
            <i class="material-icons icon">person</i>
            Bejelentkezett:
            <?=
            $_SESSION['lastname'] . ' ' . $_SESSION['firstname'] . ' ' .
            '('. $_SESSION['username'] . ')'
            ?>

        </strong>
    </div>
</div>
<?php endif; ?>