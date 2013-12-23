<div id="sidebar">
	<ul>
		<?php
			if ($user) 
			{
				echo View::factory('/auth/user');
			}
			else
			{
				echo View::factory('/auth/main'); 
			}
		?>
	</ul>
</div>