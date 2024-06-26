<?php
error_reporting(0);

  $this->load->view('backend/header');
  $this->load->view('backend/sidebar'); 
?>
<div class="page-wrapper">
  <div class="container-fluid" style="padding-top: 9px;">
    <div class="row">
      <div class="col-12">
        <div class="card card-outline-info" style="border-radius: none; width: 200px;">
          




<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#receipt">Open Modal</button>

<!-- Modal -->
<div id="receipt" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width: 200px;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="card-body pos_receipt">
        <div class="receipt_header">
          <span>Invoice Number: #2938465</span>
          <p class="company-info">
            <span>Medtrust Pharma</span>
            <span>Contact: 01</span>
            <span>Address: Nairobi, Kenya</span>
          </p>
          <p class="customer-details">
            <span>Mr. Medtrust</span>
            <span>Contact: 0000000000</span>
            <span>Address: Nairobi, Kenya</span>
          </p>
        </div>
        <div class="receipt_body">
          <table>
            <tr>
              <td class="medicine_name">
                Antacid 234
              </td>
            </tr>
            <tr>
              <td>20 * 10</td>
              <td>200 Kes.</td>
            </tr>
            <tr>
              <td class="medicine_name">
                Napa Extra
              </td>
            </tr>
            <tr>
              <td>20 * 10</td>
              <td>200 Kes.</td>
            </tr>
          </table>
          
          <table>
            <tr>
              <td>VAT</td>
              <td>30 Kes.</td>
            </tr>
            <tr>
              <td>Total</td>
              <td>230 Kes.</td>
            </tr>
          </table>
        </div>
        <div class="receipt_footer">
          <span>THANK YOU</span>
        </div>                          
      </div><!-- ./card-body  -->
    </div><!-- ./model-content  -->
  </div>
</div>
        </div>
      </div>
    </div>
  </div>

<?php 
  $this->load->view('backend/footer');
?>
