<?php include("header.php") ?>

<div class="body">
  <div class="containerForm">
    <div class="text">Rent Form</div>
    
    <form action="#">
      <div class="form-row">
          <div class="input-data">
              <input type="text" required>
              <div class="underline"></div>
              <label for="">Client Name</label>
          </div>
          <div class="input-data">
              <input type="text" required>
              <div class="underline"></div>
              <label for="">Car Name</label>
          </div>
      </div>
      <div class="form-row">
          <div class="input-data">
              <input type="date" required>
              <div class="underline"></div>
          </div>
          <div class="input-data">
              <input type="text" required>
              <div class="underline"></div>
              <label for="">Day's number</label>
          </div>
      </div>
      <div class="form-row submit-btn">
        <div class="input-data">
            <div class="inner"></div>
            <input type="submit" value="submit">
        </div>
      </div>
    </form>
  </div>

  <div class="containerTable">
    <table class="content-table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Client Name</th>
          <th>Car Name</th>
          <th>Date</th>
          <th>Day's Number</th>
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
