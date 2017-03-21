<!DOCTYPE html>
 
<html lang="en">
	<head>
		<title>Chinese Zodiac</title>
		<link rel="stylesheet" type="text/css" href="chinesezodiac.css">
		<meta charset="utf-8">
	</head>
	<body align="center">

	<div id="wrapper">		
		<div> <!--This is the header placeholder -->		
			<?php 
				include "Includes/inc_header.php" 
			?>
		</div>
		<div>
			<?php 
				include "Includes/inc_text_links.php"
			?>
		</div>
		<div> <!-- This is the navigation placeholder --> 
			<?php 
				include "Includes/inc_button_nav.php"
			?>
		</div>

	<div id="content">
	<?php 
		if (isset($_GET['page'])) {
                switch ($_GET['page']) {
                    case 'site_layout':
                        include('Includes/inc_site_layout.php');
                        break;
                    case 'control_structures':
                        include('Includes/inc_control_structures.php');
                        break;
                    case 'string_functions':
                        include('Includes/inc_string_functions.php');
                        break;
                    case 'web_forms':
                        include('Includes/inc_web_forms.php');
                        break;
                    case 'midterm_assessment':
                        include('Includes/inc_midterm_assessment.php');
                        break;
                    case 'state_information':
                        include('Includes/inc_state_information.php');
                        break;
                    case 'user_templates':
                        include('Includes/inc_user_templates.php');
                        break;
                    case 'final_project':
                        include('Includes/inc_final_project.php');
                        break;
                    case 'home_page':
                    default:
                        include('Includes/inc_home.php');
                        break;
                }
            }
            /* If no button has been selected, then display the default page*/
            else { 
                include('Includes/inc_home.php');
            }
	?>
		
	</div>
			<div>
			<?php 
				include "Includes/inc_footer.php"
			?>
		</div>
	</body>
</html>