<?php include("header.php") ?>

<div class="body">
    <div class="containerForm">
      <div class="text">Users Form</div>
      <form action="#">
        <div class="form-row">
          <div class="input-data">
            <input type="text" required>
            <div class="underline"></div>
            <label for="">First Name</label>
          </div>
          <div class="input-data">
            <input type="text" required>
            <div class="underline"></div>
            <label for="">Last Name</label>
          </div>
        </div>
        <div class="form-row">
          <div class="input-data">
            <input type="text" required>
            <div class="underline"></div>
            <label for="">Phone</label>
          </div>
          <div class="input-data">
            <input type="checkbox" id="isadmin" class="checkbox">
            <label class="checkbox" for="isadmin">Admin</label>
          </div>
        </div>
        <div class="form-row">
          <div class="input-data">
            <input type="password" required>
            <div class="underline"></div>
            <label for="">Password</label>
          </div>
        </div>
        
        <div class="form-row submit-btn">
          <div class="input-data">
            <div class="inner"></div>
            <input type="submit" value="Delete">     
          </div>
          <div class="input-data">
            <div class="inner"></div>
            <input type="submit" value="New">
          </div>
          <div class="input-data">
            <div class="inner"></div>
            <input type="submit" value="Save">
          </div>
        </div>
        
      </form>
    </div>

    <div class="containerTable">
      <table class="content-table">
        <thead>
          <tr>
            <th>is user?</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Phone</th>
            <th>Password</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>yes</td>
            <td>kourinche</td>
            <td>adel</td>
            <td>0667669852</td>
            <td>noone</td>
          </tr>
          <tr class="active-row">
            <td>no</td>
            <td>mahfoud</td>
            <td>sofi</td>
            <td>0554879652</td>
            <td>therisone</td>
          </tr>
          <tr>
            <td>yes</td>
            <td>Nick</td>
            <td>mok</td>
            <td>0554865324</td>
            <td>dcode</td>
          </tr>
          <tr>
            <td>yes</td>
            <td>Nick</td>
            <td>l'artist</td>
            <td>0558224963</td>
            <td>klqsmfjlkqS</td>
          </tr>
        </tbody>
      </table>
    </div>
</div>

<?php include("footer.php") ?>