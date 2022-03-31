<?php include("header.php") ?>

  <div class="body">
    <div class="containerForm">
      <div class="text">Client Form</div>
      
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
                <label for="">Familly Name</label>
            </div>
        </div>
        <div class="form-row">
            <div class="input-data">
                <input type="text" required>
                <div class="underline"></div>
                <label for="">National Number</label>
            </div>
            <div class="input-data">
                <input type="text" required>
                <div class="underline"></div>
                <label for="">Address</label>
            </div>
        </div>
        <div class="form-row">
            <div class="input-data">
                <input type="text" required>
                <div class="underline"></div>
                <label for="">Tel</label>
            </div>
            <div class="input-data">
                <input type="text" required>
                <div class="underline"></div>
                <label for="">Email</label>
            </div>
        </div>
        <div class="form-row submit-btn">
          <div class="input-data bdelete">
              <div class="inner"></div>
              <input type="submit" value="delete">
          </div>
          <div class="input-data bclear">
            <div class="inner"></div>
            <input type="reset" value="reset">
        </div>
        <div class="input-data bsubmit ">
            <div class="inner"></div>
            <input type="button" value="save">
        </div>
        </div>
      </form>
    </div>

    <div class="containerTable">
      <table class="content-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Family Name</th>
            <th>National Number</th>
            <th>Address</th>
            <th>Email</th>
            <th>Tel</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Domenic</td>
            <td>88,110</td>
            <td>dcode</td>
            <td>dcode</td>
          </tr>
          <tr class="active-row">
            <td>2</td>
            <td>Sally</td>
            <td>72,400</td>
            <td>Students</td>
            <td>Students</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Nick</td>
            <td>52,300</td>
            <td>dcode</td>
            <td>dcode</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Nick</td>
            <td>52,300</td>
            <td>dcode</td>
            <td>dcode</td>
          </tr>
          <tr class="active-row">
            <td>2</td>
            <td>Sally</td>
            <td>72,400</td>
            <td>Students</td>
            <td>Students</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Nick</td>
            <td>52,300</td>
            <td>dcode</td>
            <td>dcode</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Nick</td>
            <td>52,300</td>
            <td>dcode</td>
            <td>dcode</td>
          </tr>
          <tr class="active-row">
            <td>2</td>
            <td>Sally</td>
            <td>72,400</td>
            <td>Students</td>
            <td>Students</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Nick</td>
            <td>52,300</td>
            <td>dcode</td>
            <td>dcode</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Nick</td>
            <td>52,300</td>
            <td>dcode</td>
            <td>dcode</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  
<?php include("footer.php") ?>