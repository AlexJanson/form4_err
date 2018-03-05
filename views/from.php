<h1>Contactformulier</h1>
<h3>zet hier jouw naam en klas</h3>
<hr>
<pre>
  <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    naam: 	 <input type="text" name="name" autofocus>

    email: 	  <input type="email" name="email">

    bericht: 	<input type="text" name="message">

    			    <input type="submit" name="sendContact">
  </form>
</pre>
<hr>
