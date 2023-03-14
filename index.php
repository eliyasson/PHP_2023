<!DOCTYPE html>
<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="tyylit.css">
 </head>
 <body>

   <div class="row">

        <div class="col-3 col-s-3 menu">
        <ul>
        <a href="index.html" id="viiva"><li> Tehtävät  1 -  6 </li></a>
        <a href="sivu1.html" id="viiva"><li> Tehtävät  7 - 12 </li></a>
        <a href="sivu2.html" id="viiva"><li> Tehtävät 13 - 18 </li></a>
        <a href="sivu3.html" id="viiva"><li> Tehtävät 19 - 24 </li></a>
        <a href="sivu4.html" id="viiva"><li> Tehtävät 25 - 30 </li></a>
        <a href="sivu5.html" id="viiva"><li> Tehtävät 31 - 36 </li></a>
        <a href="sivu6.html" id="viiva"><li> Tehtävät 37 - 42 </li></a>
        </ul>
        </div>

    <div class="col-9 col-s-9">
<!------------- TEHT 1 ---------------------------------------------->
      <h3> Tehtävä 1 </h3>
      <p> Lyhyesti mitä koodaus tekee. </p>
    <div class="koodi"><pre>
        &LTdiv id="vari1">
        &LT?php
        echo "Hyvää päivää!&LTbr>";
        /* tämä on ohjelmoitsijan muistiinpano */
        echo "&LTspan id='vari2'>Tässä on tehtävän 1 ratkaisu.&LT/span>";
        ?>
        &LT/div> 
    </pre></div>
    	  
<!------------- TEHT 1 ---------------------------------------------->	  
	  
<!------------- TEHT 2 ---------------------------------------------->
      <h3> Tehtävä 2 </h3>
      <div id="vari1">
      <?php
        $teksti1 = "Jukolan talo sijaitsee eteläisessä Hämeessä.  
        Karhunmetsästyksessä kuollut isäntä on jättänyt talon viljelykset hunningolle, 
        emäntä on jäänyt huolehtimaan talosta seitsemän poikansa kanssa. Veljeksistä vanhin on Juhani, 
        seuraavaksi tulevat kaksoset Tuomas ja Aapo, Simeoni sekä kaksoset Timo ja Lauri. 
        Veljessarjan nuorin on nimeltään Eero. Nuorena pojat olivat välillä aika vallattomia.";
        $teksti2 = "Kerran, Eeron vielä ollessa äitinsä helmoissa kotona, 
        kuusi vanhinta veljestä varasti naapurista kananmunia ja karkasi sitten metsään. 
        Karkulaisten elämä metsässä kesti muutaman päivän ennen kuin äiti apujoukkoineen löysi heidät.  
        Seurasi kova löylytys.";
        $otsikko1 = "<h3>Veljeksiä seitsemän</h3>";
        $otsikko2 = "<h3>Porukalla kosimaan</h3>";
        echo "$otsikko1 <br> <p style='color:slateblue'>$teksti1</p> <br> $otsikko2 <br> <p style='color:slateblue'>$teksti2</p>";
      ?>
    </div>
	  
<!------------- TEHT 2 ---------------------------------------------->		  
	  
<!------------- TEHT 3 ---------------------------------------------->
      <h3> Tehtävä 3 </h3>
      <p> Lyhyesti mitä koodaus tekee. </p>
    <div class="koodi"><pre>
    This text is the content
    of the box. We have added 
    a 50px padding, 
    20px margin and a 15px green border. 
    Ut enim ad minim veniam 
    </pre></div>
	  
<!------------- TEHT 3 ---------------------------------------------->		  
	  
<!------------- TEHT 4 ---------------------------------------------->
      <h3> Tehtävä 4 </h3>
      <p> Lyhyesti mitä koodaus tekee. </p>
    <div class="koodi"><pre>
    This text is the content
    of the box. We have added 
    a 50px padding, 
    20px margin and a 15px green border. 
    Ut enim ad minim veniam 
    </pre></div>
	  
<!------------- TEHT 4 ---------------------------------------------->		  
	  
<!------------- TEHT 5 ---------------------------------------------->
      <h3> Tehtävä 5 </h3>
      <p> Lyhyesti mitä koodaus tekee. </p>
    <div class="koodi"><pre>
    This text is the content
    of the box. We have added 
    a 50px padding, 
    20px margin and a 15px green border. 
    Ut enim ad minim veniam 
    </pre></div>
	  
<!------------- TEHT 5 ---------------------------------------------->		  
	  
<!------------- TEHT 6 ---------------------------------------------->
      <h3> Tehtävä 6 </h3>
      <p> Lyhyesti mitä koodaus tekee. </p>
    <div class="koodi"><pre>
    This text is the content
    of the box. We have added 
    a 50px padding, 
    20px margin and a 15px green border. 
    Ut enim ad minim veniam 
    </pre></div>
	  
<!------------- TEHT 6 ---------------------------------------------->		  
	  
	  
	  
    </div>
   </div>

   <div class="footer">
     <p> </p>
   </div>

 </body>
</html>