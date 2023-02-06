<?php
// Google Analytics
include_once("include/analytics.php");

// Initiate connection to database and user login session
include_once("include/session.php");

// Set values for page
$page_title = "Finance";
$current_page = "home";

// Load header
include_once("include/header.php");

// Below this PHP block, set page-specific JavaScript, CSS, and anything else for the <head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
##################################################
?>
<?php
##################################################
// Load top navigation
include_once("include/topnav.php");

// Below this PHP block, enter only the main HTML content of the page. All necessary layout, body, html, etc. tags are included in the PHP includes.
##################################################
?>
<?php
	// If user is logged in, show documents
	if ($session->logged_in) {
?>
<br />
			<h2>Finance</h2>
			<p>If you don't see what you're looking for, just contact Mia Ward or Justin Yang!</p>

                <h3>Spring 2023 Information</h3>
                <ul>
                    	<li><a href='https://docs.google.com/spreadsheets/d/1u3NZUGQtLHa8qYS0PNRcGdzf8e7MN0guaO4pRiLJIh4/edit#gid=1852648581' target = "_blank">Budget</a></li>
                    	<li>Venmo: @apoakusc</li>
                    	<li>Email: <a href="mailto:finance.apousc@gmail.com">finance.apousc@gmail.com</a></li>
			<li><a href='https://docs.google.com/forms/d/e/1FAIpQLSefRvMzAP8PkOsejOtvP9TGbH8yWCYI-JzJdyUulwWgMb3MYQ/viewform' target = "_blank">Financial Aid Application</a></li>
			<li><a href='https://docs.google.com/spreadsheets/d/1qCJAXGA4SQR949Pjb46hK6SJYdtXqzFA8UmVkKBN90U/edit#gid=0' target = "_blank">Dues Breakdown</a></li>
			<li><a href='https://docs.google.com/forms/d/e/1FAIpQLSdFeGECmGHAN1zH573kYCmJSMcGS96kcvJxOM003j2FHuu6Bg/viewform' target = "_blank">Payment Plan Adjustment Request</a></li>
<!-- 			<li><a href='https://docs.google.com/spreadsheets/d/1x9XIh9mjRXdK5HI4_aqES2yVP0TQ-4vDHp-YxXfPsJo/edit?usp=sharing' target = "_blank">Semester Calendar</a></li> -->
                </ul>
                
                <h3>Dues</h3>
                <p>Please contact Mia Ward or Justin Yang if you need additional financial accommodations for our payment plans.</p>
		<p>Payments due @ 11:59 PM of each deadline or your account will be frozen :(</p>
		<h4><b>Actives: $135 early bird, $140 regular</b></h4>
                <h4><b>Associates: $55 regular</b></h4>
		<h4><b>New Members: $275 regular</b></h4>
		<p><b>Actives Payment Plan</b></p>	
                <ul>
			<li>Pay full February 6: $135</li>
                    	<li>February 6: $50</li>
                    	<li>February 20: $45</li>
                    	<li>March 6: $45</li>
            	</ul>

             	<p><b>Associates Payment Plan</b></p>	
                <ul>
			<li>Pay full February 6: $55</li>
                    	<li>February 6: $20</li>
                	<li>February 20: $20</li>
                    	<li>March 6: $15</li>
            	</ul>

		<p><b>New Members Payment Plan</b></p>	
                <ul>
                    	<li>February 27: $95</li>
                	<li>March 13: $90</li>
                    	<li>March 27: $90</li>
            	</ul>
				<p><b>*If you do not pay your dues and do not communicate with the VPs, we will have to freeze your account until the matter is resolved.</b></p>
				
				<h3>Reimbursements</h3>
				
				<p>In order to get reimbursed, please send your receipts to Mia Ward or Justin Yang at finance.apousc@gmail.com.</p>
		<ul>
                    <li><a href='https://forms.gle/njp842MmXoSDrUXm8' target = "_blank">Driver Reimbursement Request Form</a></li>
		    <li><a href='https://forms.gle/fDck9aCVq8nETHsm9' target = "_blank">Driver Reimbursement Car Information Form</a></li>
		    <li><a href='https://docs.google.com/forms/d/e/1FAIpQLSfF-O_SJuQ4HWXIEfsT8CzNuR2u6YDEMQBUYQWv09nxcsH3Aw/viewform' target = "_blank">General APO Reimbursement Form</a></li>
                </ul>
				
<br />
				

			
			<p class="bottomNote">Note: <abbr title="Portable Document Format">PDF</abbr> files require the Adobe Reader from Adobe Systems, Incorporated. Adobe and the Adobe logo are trademarks of Adobe Systems, Incorporated. Click on the following link to download.</p>
			<a href="http://get.adobe.com/reader/"><img src="img/get_adobe_reader.png" height="39" width="158" alt="Download Adobe Reader" /></a>
<?php
	// If user is not logged in, display Restricted Area warning
	} else {
		echo "			<h2>Restricted Area</h2>¥n";
		echo "			<p>Sorry, but you must be signed in to view this page.</p>¥n";
	}
?>
<?php
##################################################
// Load sidebar, footer, and dropdown stats panel
include_once("include/sidebarFooterDropdownpanel.php");
?>
