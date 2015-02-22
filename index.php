<!doctype html>
<html>
<head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CODEHACK</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://bootswatch.com/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

<div id="view">


<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><i class="fa fa-car"></i> ReportCars</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse" >
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">        
        <h4 class="form-group">Choose your car</h4>
        <form action="return 0;">
        
            <select class="form-control col-xs-4" id="brand_select" onChange="brandSelection(this.value);">
               <option value="Brand">Select a Brand</option>
               <option value="Audi">Audi</option>
               <option value="BMW">BMW</option>
               <option value="Dodge">Dodge</option>
               <option value="Ford">Ford</option>
               <option value="Volkswagen">Volkswagen</option>
               <option value="Volvo">Volvo</option>
               


            </select>
        
            <div id="model_select">
               <select class="form-control col-xs-4"  onChange="modelSelection(this.value);" disabled>
                  <option value="Model">Select a Model</option>
                <!--   <option value="F150">F150</option>
                  <option value="F350">F350</option>
                  <option value="Granada">Granada</option>
                  <option value="Mustang">Mustang</option>
                  <option value="Pinto">Pinto</option> -->
               </select>
            </div>

            <select class="form-control col-xs-4"  id="year_select" onChange="yearSelection(this.value);">
               <option value="Year"> Select a Year</option>
               <option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option>
            </select>
        
        
        </form>
    </div>

    </div>
    
    <br>
    <div class="container well" id="recalls">
         <h4>Recalls</h4>
         <h4 class="col-xs-4 col-xs-offset-1"><strong>Year</strong></h4>
         <h4 class="col-xs-4"><strong>Model</strong></h4>
         <br>
         <br>

      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

      <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title accordion-height">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
               <div class="col-xs-1 "><i class="fa fa-caret-down"></i></div>
               <div class="col-xs-4">2008</div>
               <div class="col-xs-6">150-F Series</div>
            </a>
          </h4>
        </div>
       <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
            Vehicles may have an underhood wiring harness that could develop an electrical short, possibly causing wiring harness damage, engine overheating and engine compartment fire.
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title accordion-height">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
               <div class="col-xs-1 "><i class="fa fa-caret-down"></i></div>
               <div class="col-xs-4">1994</div>
               <div class="col-xs-6">350-FX Series</div>
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
            On certain vehicles, the platic front seatbelt release buttons may break allowing plastic pieces to fall into the buckle assembly.  If this should happen, a no latch, false latch or failure to unlatch condition could occur creating the risk of personal injury in the event of a crash or sudden stop.  Correction: Front seatbelt buckles will be repaired or replaced as necessary.
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title accordion-height">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
               <div class="col-xs-1 "><i class="fa fa-caret-down"></i></div>
               <div class="col-xs-4">1983</div>
               <div class="col-xs-6">700A Series</div>
            </a>
          </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
            On certain fifth wheel and travel trailers equipped with a Dometic Corporation refrigerator, a fatigue crack can develop in the boiler tube.  This could allow the release of pressurized coolant solution into an area where an ignition source is present, which could result in a fire.  Correction: Dealers will replace the refrigerator's boiler tube assembly.
          </div>
        </div>
      </div>
    </div>
    </div>
  






    <div class="container well" id="emissions">
        <h4>Gas Emissions</h4>
        <div class="progress" style="background-color:#aaa; height:20px;">
            <div class="progress-bar progress-bar-success" style="width: 25%"></div>
            <div class="progress-bar progress-bar-danger" style="width: 75%"></div>
        </div>
        <div>
            <span class="col-xs-1">Cough cough</span>
            <span class="col-xs-1 col-xs-offset-9">Feeling good</span>
        </div>
    </div>
  
    <div id="gasPrices">
    </div>
  
    <div id="dealershipMaps">
    </div>
  
    
    
  
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="js/main.js" type="text/javascript"></script>
</body>
</html>
