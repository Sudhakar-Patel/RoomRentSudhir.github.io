<div class="modal" id="m1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-dark">
          <h3>Search <i class="bi bi-house"> </i> Room</h3>
          <button class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="container border text-center">
            <form action="page1.php">
<table class="table ">
                <tr>
                  <td> 
                  <option value=""></option>
                    <label for="location">Location:</label>
                    <select name="location" id="location">
                      <option value="">select location</option>
                      <option value="Ghadi Chowk">Ghadi Chowk</option>
                      <option value="Telibandha">Telibandha</option>
                      <option value="Railway Station">Railway Station</option>
                      <option value="Shankar Nagar">Shankar Nagar</option>
                      <option value="Santoshi Nagar">Santoshi Nagar</option>
                      <option value="Kabir Nagar">Kabir Nagar</option>
                      <option value="Tatibandh">Tatibandh</option>
                      <option value="Mandir hasoud">Mandir hasoud</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td> <label for="for">For:</label>
                    <select name="category" id="for">
                      <option value="families">Families</option>
                      <option value="bachelors">Bachelor</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td> <label for="rent">Rent:</label>
                    <select name="rent" id="rent">
                      <option value="">select price</option>
                      <option value="500 and 2000">Below Rs.2000/-</option>
                      <option value="2000 and 4000"> Rs.2000-4000</option>
                      <option value="4000 and 6000">Rs.4000-6000</option>
                      <option value="6000 and 50000">Above Rs.6000/-</option>
                    </select>
                  </td>
                </tr>

              </table>
  <!-- <div class="modal-footer text-center"> -->
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Search</button>
              <!-- </div> -->
            </form>
          </div>
        </div>
      </div>
    </div>
</div>