<?php

//TITLE
$title = 'About';
//NAVIGATION
$subdir = 'newsletter';
$highlight = 'index.php';



//Don't touch stuff after this line unless you know what you're doing:
//--------------------------------------------------------------------------
$DEBUG = false;

//header.php contains HTML for the top of the page [e.g. <head> and metadata]
//as well as PHP for generating the main navigation [dropdown menu]
include ('../header.php');
?>

<div class="maintext">

<p>The <b>Margaret Sanger Papers Project Newsletter</b> was issued three times a year unti 2016. It was edited by Peter C. Engelman and contains articles about Margaret Sanger and the birth control movement as well as updates on the Project's progress. Contributions of articles will be considered, though space is limited and articles must use archival materials located in the Sanger microfilm archive or related collections.</p>

<p>The Newsletter has been funded in the past by donations from the Mary Duke Biddle Foundation, the Albert and Mary Lasker Foundation, and the contributions of its readers.</p>

</div>
</div>

<div id="sidebar">
       
     <h1>Search</h1><script>
            (function() {
            var cx = '016619794450116726182:r0pm5z5tz6e';
            var gcse = document.createElement('script');
            gcse.type = 'text/javascript';
            gcse.async = true;
            gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
            '//www.google.com/cse/cse.js?cx=' + cx;
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(gcse, s);
            })();
            </script>
            <gcse:searchbox-only></gcse:searchbox-only>

            <br><br>
		
            
	<h1>About the Newsletter</h1>
		<div id="subnav">
		
		<!---LINKS (bold current section)--->
		<p><b><a href="About.php">About</a></b><br>
		<a href="articlelist.php">Articles</a>
		
</div>

<?php
//Don't touch this unless you know what you're doing:
//--------------------------------------------------------------------------

//footer.php contains HTML for the bottom of the page [e.g. copyright notice]
//as well as PHP for generating the sidebar navigation
include ('../footer.php');
?>