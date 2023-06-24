<!Doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Flight Search</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="styles.css" />
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
<style>
  .navbar{
    background-color:green;
    color:white;
  }

  .filterSearchFilter{
    font-size: 20px;
    font-weight: bold;
    font-family: Georgia, 'Times New Roman', Times, serif;
    background-color: white;
    display: inline-block;
    border-radius: 10px;
  } 

  .radio-toolbar{
    text-align:center;
    width:350px;
  }

.sourceDesination{
  text-align: center;
  width:350px;
} 

#depatureDate{
  text-align: center;
  width:350px;
}

#returnDate{
  text-align: center;
  width:350px;
} 

#noOfTravelers{
  text-align: center;
  width:350px;
}

#searchBtn{
  text-align: center;
  margin-top:20px;
  width:350px;
} 

</style>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <a class="navbar-brand" href="#" style="color:white"><b>FIXRATE TRAVEL</b></a>
</div>
</div>
</nav>
     <div class="container-fluid text-center">
      <h1 class="text-primary">Book Flight Tickets</h1>
      <br>
      <section id="bodyCotainer">
        <div class="filterSearchFilter">
          <aside id="flightSearch">
            <form name="searchFlight">
              <div class="radio-toolbar">
                <input type="radio" id="radioOneWay" name="trip" value="One Way" checked>
                <label class="text-success" for="radioOneWay">One Way</label>
                &nbsp;&nbsp;
                <input type="radio" id="radioRoundTrip" name="trip" value="Round Trip">
                <label class="text-success" for="radioRoundTrip">Round Trip</label>
              </div>
              <br>
              <div class="sourceDesination">
                <input class="form-control no border" type="text" id="fromPlace" placeholder="From" onkeyup="flight.airportAutoSuggestion(event)" />
                <ul id="source"></ul>
                <span class="error"></span>
              </div>
              <div  class="sourceDesination">
                <input class="form-control no border" type="text" id="toPlace" placeholder="To" onkeyup="flight.airportAutoSuggestion(event)" />
                <ul id="destination"></ul>
                <span class="error"></span>
              </div>
              <div id="depatureDate">
                <input class="form-control no border" type="text" placeholder="Travel Date" onfocus="(this.type='date')" id="travelDate" onchange="flight.validateEnteredDate(event)" />
              </div>
              <br>
              <div id="returnDate">
                <input class="form-control no border" type="text" placeholder="Return Date" onfocus="(this.type='date')" id="dateOfReturn" onchange="flight.validateEnteredDate(event)" />
              </div>
              <br>
              <div>
                <div id="noOfTravelers">
                <input class="form-control no border" type="number" id="noOfTravelers" onchange="flight.validateTravelers(event)" min="1" max ="8" placeholder="Number of Travelers">
              </div>
              <div>
                <div id="searchBtn">
                <input class="btn btn-warning" id="searchBtn" type="button" onclick="flight.submitValues(event)" value="Submit" />
              </div>
            </form>
          </aside>
          <br>
          <div class="filterDetails">
            <div id="showFilter" class="showFilter"></div>
            <div id="showFilterRoundTrip" class="showFilter"></div>
          </div>
        </div>
        <div id="FlightResult">
          <div class="beforeSearch"><i class="fa fa-fighter-jet" aria-hidden="true"></i></div>
          <div class="flightOnward flightResultWrapper">
            <div class="flightResultHeader">
              <div class="headerStartingDate">
                <h4 class="headStartLoc"></h4>
                <p class="headStartDate"></p>
              </div>
              <div>
                <i class="exchangeIc fa fa-long-arrow-right"></i>
              </div>
              <div class="headeReturnDate">
                <h4 class="headEndLoc"></h4>
                <p class="headEndDate"></p>
              </div>
            </div>
            <table id="table"></table>
          </div>
          <div class="flightReturn flightResultWrapper">
            <div class="flightResultHeader">
              <div class="headerStartingDate">
                <h4 class="returnStartLoc"></h4>
                <p class="returnStartDate"></p>
              </div>
              <div>
                <i class="exchangeIc fa fa-long-arrow-right"></i>
              </div>
              <div class="headeReturnDate">
                <h4 class="returnEndLoc"></h4>
                <p class="returnEndDate"></p>
              </div>
            </div>
            <table id="table1"></table>
          </div>
        </div>
      </section>
</div>
      <footer></footer>
    </main>
    <script type="text/javascript" src="src/travel.js"></script>
  </body>
</html>