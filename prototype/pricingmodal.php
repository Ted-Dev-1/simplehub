<!-- Buy Voucher Modal -->
<div class="modal fade" id="buyVoucherModal" tabindex="-1" aria-labelledby="buyVoucherModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title" id="buyVoucherModalLabel">Purchase Voucher</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- Modal Body -->
      <div class="modal-body">
        <!-- The form now submits directly to get_voucher.php -->
        <form action="facultyadmin/pcode.php" method="post">
          <div class="mb-3">
            <label for="voucherPrice" class="form-label">Enter Price</label>
            <input type="number" class="form-control" id="voucherPrice" name="price" placeholder="Enter amount" required>
          </div>
          <button type="submit" class="btn btn-primary" name="subprice">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
