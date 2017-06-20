<!DOCTYPE html>
<html>
<head>
  <title>UK Postcodes</title>
  <link href="/assets/application-82f31e265cb574e357521aef0a98bb00.css" media="all" rel="stylesheet" type="text/css" />
  <script src="/assets/application-3cc036f0e8930e8b2584930771aa788b.js" type="text/javascript"></script>
  <meta content="authenticity_token" name="csrf-param" />
<meta content="6KC3xnYHJrSNwPpcfuEo0aINRbik1BC7i9NDF5DR9pc=" name="csrf-token" />
  
</head>
<body>
  
  <div class="navbar navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">UK Postcodes</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li ><a href="/">Home</a></li>
          <li ><a href="/about">About</a></li>
          <li ><a href="/api">API</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  
<div class="container" id="wrap">
  <div id="main">
    <h1>API</h1>

<p>Get the data you want simply by constructing your URLs as follows:</p>
<h3>Return data for a postcode</h3>

<pre>http://uk-postcodes.com/postcode/<strong>[postcode (no space)]</strong>.<strong>['xml', 'csv', 'json'* or 'rdf']</strong></pre>

<h3>Return data for the nearest postcode to a point</h3>

<pre>http://uk-postcodes.com/latlng/<strong>[latitude]</strong>,<strong>[longitude]</strong>.<strong>['xml', 'csv', 'json'* or 'rdf']</strong></pre>

<h3>Return data for postcodes within x distance (miles) of a postcode or lat/lng</h3>

<pre>http://uk-postcodes.com/postcode/nearest?<strong>postcode=[postcode]</strong>&amp;<strong>miles=[distance in miles]</strong>&amp;<strong>format=[xml|csv|json]</strong></pre>

<pre>http://uk-postcodes.com/postcode/nearest?<strong>lat=[latitude]</strong>&amp;<strong>lng=[longitude]</strong>&amp;<strong>miles=[distance in miles (up to a maximum of 5 miles)]</strong>&amp;<strong>format=[xml|csv|json]</strong></pre>

<p>That's it! Be nice to the server and cache your requests!</p>
<p><small>* If using JSON, add '?callback=<strong>[some function call]</strong>' to the url to return JSONP</small></p>

<h2 id="libraries">Helper Libraries</h2>

<p>To make things even easier, a bunch of people have built helper libraries to make the process easier. Built one yourself? <a href="http://twitter.com/pezholio">Drop me a line via Twitter</a>.</p>

<ul>
<li><a href="https://github.com/stefl/pat">Ruby Gem</a> (cleverly called Pat) By <a href="http://stef.io">Stef Lewandowski</a></li>
<li><a href="http://gist.github.com/364477">PHP Function</a> by <a href="http://www.pezholio.co.uk">Stuart Harrison</a></li>
<li><a href="https://postcodes.readthedocs.org/en/latest/">Python Client</a> by <a href="http://about.me/eddrobinson">Edd Robinson</a></li>
<li><a href="https://github.com/cblanc/uk-postcodes-node">Node.js wrapper by <a href="http://www.iddqd-technology.com/">Chris Blanchard</a></li>
</ul>
  </div>
</div>

<div id="footer">
  <div class="container">
    <p class="text-center">This site uses Royal Mail and Ordnance Survey data &copy; Crown copyright and database right 2010 and Office for National Statistics data &copy; Crown copyright and database right 2010 (ONSPD).</p>
    <p class="text-center">Great Britain postcode data may be used under the terms of the <a href="http://www.ordnancesurvey.co.uk/oswebsite/opendata/faq.html">OS OpenData licence</a>. Northern Ireland postcode data may be used under the terms of the <a href="http://www.ons.gov.uk/ons/guide-method/geography/products/postcode-directories/-nspp-/onspd-open-licence.doc">ONSPD licence</a></p>
  </div>
</div>

</body>
</html>
