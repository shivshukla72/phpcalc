<DOCTYPE! html>
  <html>

  <head>
    <title>Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="phpcalc.js"></script>
  </head>

  <body>
    <div class="container text-center pt-5">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-6 col-sm-8 border border-dark rounded" style="background-color: aquamarine; ">
          <h2>Calculator</h2>
          <div class="form-group">
            <form>
              <div class="pb-3">
                <input type="answer" name="answer" class="form-control" readonly placeholder="0" id="res" style="height: 15%; font-size: 150%; text-align: right;">
              </div>

              <div class="row pb-3">

                <div class="col-3 col-md-3 btn-group">
                  <button type="button" class="btn btn-danger " onclick="clears()">C</button>
                </div>


              </div>
              <div class="row pb-3">

                <div class="col-3 col-lg-3 btn-group">
                  <button type="button" class="btn btn-light" onclick="getvalue('1')">1</button>
                </div>
                <div class="col-3 col-lg-3  btn-group">
                  <button type="button" class="btn btn-light " onclick="getvalue('2')">2</button>
                </div>
                <div class="col-3 col-lg-3  btn-group">
                  <button type="button" class="btn btn-light " onclick="getvalue('3')">3</button>
                </div>
                <div class="col-3 col-lg-3   btn-group">
                  <button type="button" class="btn btn-light" onclick="solve('+')">+</button>
                </div>

              </div>
              <div class="row pb-3">
                <div class="col-3 col-lg-3   btn-group">
                  <button type="button" class="btn btn-light" onclick="getvalue('4')">4</button>
                </div>
                <div class="col-3 col-lg-3   btn-group">
                  <button type="button" class="btn btn-light" onclick="getvalue('5')">5</button>
                </div>
                <div class="col-3 col-lg-3   btn-group">
                  <button type="button" class="btn btn-light" onclick="getvalue('6')">6</button>
                </div>
                <div class="col-3 col-lg-3   btn-group">
                  <button type="button" class="btn btn-light" onclick="solve('-')">-</button>
                </div>

              </div>
              <div class="row pb-3">
                <div class="col-3 col-lg-3  btn-group">
                  <button type="button" class="btn btn-light " onclick="getvalue('7')">7</button>
                </div>
                <div class="col-3 col-lg-3  btn-group">
                  <button type="button" class="btn btn-light " onclick="getvalue('8')">8</button>
                </div>
                <div class="col-3 col-lg-3   btn-group">
                  <button type="button" class="btn btn-light" onclick="getvalue('9')">9</button>
                </div>
                <div class="col-3 col-lg-3   btn-group">
                  <button type="button" class="btn btn-light " onclick="solve('*')">*
                  </button>
                </div>

              </div>
              <div class="row pb-3">
                <div class="col-3 col-lg-3   btn-group">
                  <button type="button" class="btn btn-light" onclick="getvalue('.')">.</button>
                </div>

                <div class="col-3 col-lg-3   btn-group">
                  <button type="button" class="btn btn-light " onclick="getvalue('0')">0</button>
                </div>
                <div class="col-3 col-lg-3   btn-group">
                  <button type="button" class="btn btn-light " onclick="solve('/')">/</button>
                </div>
                <div class="col-3 col-lg-3   btn-group">
                  <button type="button" class="btn btn-light " onclick="solve('=')">=</button>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>