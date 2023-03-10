class MyHeader extends HTMLElement{
	connectCallback(){
		this.innerHTML = '
		<section class="header">
			<div class="navbar">
			<nav>
				<h1>RFY</h1>
				<ul>
					<li><a href="dashboard.html">HOME</a></li>
				</ul>
				<ul>
					<li><a href="#">MAP</a></li>
				</ul>
				<ul>
					<li><a href="#">BUSES</a></li>
				</ul>
				
				<img src="images/64572.png" class="user-icon" onclick="toggleMenu()">
				
				<div class="sub-menu-wrap" id="subMenu">
					<div class="sub-menu">
						<div class="user-info">
							<img src="images/64572.png">
							<h2>name</h2>
						</div>
						<hr>
						<a href="dashboard.html" class="sub-menu-link">
							<img src="images/profile.png">
							<p>Profile</p>
							<span>></span>
						</a>
						<a href="#" class="sub-menu-link">
							<img src="images/setting.png">
							<p>Settings</p>
							<span>></span>
						</a>
						<a href="logout.php" class="sub-menu-link">
							<img src="images/logout.png">
							<p>Logout</p>
							<span>></span>
						</a>
					</div>
				</div>
			</nav>
		</div>
		</section>
		'
	}
}

customElements.define('my-header', MyHeader)