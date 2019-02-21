<?php
/*
imports the functions.php file and then calls
the generate_header and navigation_elements Functions
with the correct arguments
*/
include('functions.php');
generate_header('Report: The Game');
navigation_elements("Report");
?>
</header>
<!-- Main content of the page -->
<main>
<h5>Warning: Please close details when done reading the sections</h5>
<details><summary><h1>HTML</h1></summary>
  <!-- This div style creates a scrollable text box,
    helping to limit the wbsite to a single page.
    This is also the only time inline styling is used,
    just to demonstrate how it works-->
  <div style="height:400px;width:100%;border:1px solid #ccc;overflow:auto;">
    <h4>HEAD:</h4>
    <p class="report">Implemented using generate_header()</p>
    <h4>Structure Elements:</h4>
    <p class="report">
      footer: used in generate_footer()<br>
      nav: used in navigation_elements()<br>
      main: used throughout the website on all pages to define the main content<br>
      header: used to define the navigation_elements()<br>
      details: used to expand the leaderboards to display postions from 6 to 10<br>
      summary: used to define the visible heading for the details tag<br>
    </p>
    <h4>Content Elements</h4>
    <p class="report">
      p: used to define paragraphs used on Main page, Info page and a few places more<br>
      a: mostly used in navigation_elements() to display link; used in footer to
      make contact a clickable link<br>
      iframe: used to embed youtube video as a placeholder on the Game page<br>
      li: used to define a list item, in the navigation_elements()<br>
      mailto: as part of the address tag in the footer to enable easy sending of mail to website creator<br>
      body background: to display an image on the background of the website<br>
      br: used to provide a line break<br>
      div: used to define logical divisions and/or sections trhoughout the website<br>
      b: used to provide emphasis on content<br>
      font: used to change font in the footer for better readability <br>
      link : has been used to link stylesheets and webfonts.
    </p>
  </div></details>

<details><summary><h1>CSS</h1></summary>
  <div style="height:400px;width:100%;border:1px solid #ccc;overflow:auto;">
    <h4>Page Design</h4>
    <p class="report">
      Fonts: has been used to set the default font for the website<br>
      Background-color: is used to define a darker background for text elements for better readability<br>
      font-size: has been used to structure text according to importance<br>
      text-shadow: used to provide shadow to text for better readability<br>
      border attributes: used to change the appearance of borders<br>
      display: used to contain elements into blocks<br>
      size attributes: height and width elements used to define the size of objects<br>
      margin: used to create spaces around elements<br>
      opacity: has been used to set transparency of elements<br>
      margin: used to create spaces around elements<br>
      text-decoration: used to underline active navigation elements]
      and many more properties have been used
    </p>
    <h4>Class and ID usage for group and individual formatting</h4>
    <p class="report">
      Classes like one, footer, Report, Logo, grid.container are html selectors
       that have been used to catagorise<br>
       and identify elements for design and to assign them to a grid;<br>
      IDs like para_center, report, login_form and mail have been been used to
      identify elements that require special<br> design elements either for aesthetic
       reason or functional reasons <br>
      They are necessary for applying special design elements like grid allocation and
       changing attributes of only certain Classes or IDs, without them the
    </p>
    <h4>Grid Layout</h4>
    <p class="report">
      CSS grid has been used extensively throughout the website for structuring the page<br>
      into sections. The most extensive grid is the grid.container which has 5 columns<br>
      with elements like the logo (only takes 3 columns but it looks as if it takes all)
      and the content_play_area taking up all 5 columns.<br>
      Another grid layout is also used to display the leaderboards, although that grid only has 1 column<br>
    </p>
  </div></details>

<details><summary><h1>PHP</h1></summary>
  <div style="height:400px;width:100%;border:1px solid #ccc;overflow:auto;">
    <h4>PHP Functions and Reusable Functions</h4>
    <p class="report">
      generate_header() : Reusable function used to generate the header for all pages <br>
      navigation_elements($pageName) : Reusable function used to generate the nav elements for all pages <br>
      generate_footer() : Reusable function used to generate the footer for all pages <br>
      validate_id() : (NOT IMPLEMENTED / INCOMPLETE) : I wanted to implement a function which will check the user name <br>
      and password to see if it is a valid input, like the user id starting with an alphabet, and the password containing at least<br>
      one upper-case letter, one lower-case letter, one symbol, and one number.<br>
      greeting(): function that greets the user depending on the time of day.<br>
    </p>
  </div></details>

  <details><summary><h1>OTHERS</h1></summary>
    <div style="height:400px;width:100%;border:1px solid #ccc;overflow:auto;">
      <h4>Code Quality</h4>
      <p class="report">
        The HTML5 doctype is used <br>
        Tags are always closed <br>
        The code has been validated again and again with each line addition or edit/removal <br>
        external stylesheets are placed only in the "head" tag<br>
        tags are all lowercase <br>
        Number of elements on any page is as low as possible and wherever possible code is reused via php functions <br>
        Proper use of Indentation has been followed <br>
        Code is commented where needed<br>
        Appropriate line breaks are used <br>
      </p>
      <h4>Files</h4>
      <p class="report">
        All files are lowercase, and named using traditional methods. <br>
        All media files have been placed in a folder called media in the root directory of the webiste,<br>
        additional folders like 'images' 'videos' and 'audio' can be created inside the media folder once the number of media files increase.<br>
      </p>
      <h4>HTML Report</h4>
      <p class="report">
        An HTML report has been created and is a part of the main website,<br>
        if you are reading this you probably have seen the HTML report.<br>
        The HTML report has some extra elements which have not been used in the main site, feel free to check them out.<br>
        For example, the scrolling textbox.<br>
      </p>
      <h4>Screenshots</h4>
      <p class="report">
        Right click on image and select `View Image` to view full resolution images <br><br>
        <img src="./screenshots/homepage.png" style="width:512px;height:144px" alt="homepage.png" >
        <img src="./screenshots/game.png" style="width:512px;height:144px" alt="game.png" >
        <img src="./screenshots/info.png" style="width:512px;height:144px" alt="info.png" >
        <img src="./screenshots/leaderboards.png" style="width:512px;height:144px" alt="leaderboards.png" >
        <img src="./screenshots/leaderboards_expanded.png" style="width:512px;height:144px" alt="leaderboards_expanded.png" >
        <img src="./screenshots/login.png" style="width:512px;height:144px" alt="login.png" >
        <img src="./screenshots/report.png" style="width:512px;height:144px" alt="report.png" >
        <img src="./screenshots/report_expanded_html.png" style="width:512px;height:144px" alt="report_expanded_html.png" >
        <img src="./screenshots/report_expanded_css.png" style="width:512px;height:144px" alt="report_expanded_css.png" >
        <img src="./screenshots/report_expanded_php.png" style="width:512px;height:144px" alt="report_expanded_php.png" >
        <img src="./screenshots/report_expanded_others.png" style="width:512px;height:144px" alt="report_expanded_others.png" >
      </p>
    </div></details>
    </main>
<?php
/* Function call for generating the footer */
  generate_footer();
?>
