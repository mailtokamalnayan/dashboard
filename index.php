<?php include 'includes/head.php'; ?>

  <body>

  <?php include 'includes/nav_top.php'; ?>

    <!-- Modals -->
    <!-- View -->
    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel"># 1</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                <div class="col-xs-6">
                  <p class="font-weight-bold mb-0">Kamal Nayan</p>
                  <p>
                    <span>9709108697 · mailtokamalnayan@gmail.com</span> <br>
                    <span>2 Guests · Single room</span><br>
                    <span class="text-uppercase">Jaipur</span>
                  </p>
                </div>
                <div class="col-xs-6 col-sm-offset-6">
                  <p class="font-weight-bold mb-0">12 Oct — 15 Oct</p>
                  <p>3 Nights</p>
                  <p class="font-weight-bold mb-0">Included</p>
                  <ul>
                    <li>Airport transfer</li>
                    <li>Lunch</li>
                  </ul>
                </div>
            </div>
            <p class="text-muted">Booked on 8 Nov, 2015</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Cancel -->
    <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Cancel booking # 1</h4>
          </div>
          <div class="modal-body">
            <p class="font-weight-bold mb-0">Kamal Nayan</p>
            <p>
              <span>2 Guests · Single room</span><br>
              <span>Jan 13 — Jan 15</span>
            </p>
            <form>
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Message will be sent to:</label>
                <input type="text" class="form-control" id="recipient-name" value="mailtokamalnayan@gmail.com" disabled>
              </div>
              <div class="form-group">
                <label for="message-text" class="form-control-label">Reason of cancellation:</label>
                <textarea class="form-control" id="message-text"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger">Cancel booking</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Bookings <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Rooms</a></li>
            <li><a href="#">History</a></li>
          </ul>
        </div>
        <div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 main">
          <h2>Bookings</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>IN</th>
                  <th>OUT</th>
                  <th>Type</th>
                  <th>Location</th>
                  <th> </th>
                  <th> </th>
                </tr>
              </thead>
              <tbody>
              <?php for($i=1; $i<10; $i++): ?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td>Johny Janardan</td>
                  <td>Sat, 3 Dec</td>
                  <td>Mon, 5 Dec</td>
                  <td>Single</td>
                  <td>Badlapur</td>
                  <td><a href="#" class="text-info" data-toggle="modal" data-target="#viewModal">View</a></td>
                  <td><a href="#" class="text-danger" data-toggle="modal" data-target="#cancelModal">Cancel</a></td>
                </tr>
              <?php endfor; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>