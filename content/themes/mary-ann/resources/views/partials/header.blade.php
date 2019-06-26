<header id="header">
	<div class="menu">
	    <span class="menu-circle"></span>
	    <a href="#" class="menu-link">
	      <span class="menu-icon">
	        <span class="menu-line menu-line-1"></span>
	        <span class="menu-line menu-line-2"></span>
	        <span class="menu-line menu-line-3"></span>
	      </span>
	    </a>
	</div>
	<div class="for-menu">
		<div class="menu-overlay">
			@if (has_nav_menu('primary_navigation'))
				{!! 
					wp_nav_menu([
					'theme_location' => 'primary_navigation', 
					'menu_class' => 'navbar-nav',
					'container_id' => 'navbarNavAltMarkup'
					]);
				!!}
			@endif
		</div>
	</div>
</header>
