<?php
ob_start();
?>
 
<div class="card shadow border-0 border-start border-5 border-warning mb-4">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="mb-1">Invoice</h2>
                <p class="text-muted mb-0">Order #O001</p>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-dark"><i class="bi bi-printer me-1"></i>Print</button>
            </div>
        </div>
    </div>
</div> 
<div class="card shadow-sm border-warning border-opacity-50">
    <div class="card-body p-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <h4>CÉLESTE</h4>
                <p class="text-muted mb-0">Sales Invoice</p>
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Invoice No.: </strong>O001<br>
                <strong>Date: </strong>2026-10-03
            </div>
        </div>
        <hr>
        <div class="row mb-4">
            <div class="col-md-6">
                <strong>Customer</strong><br>
                Alice Johnson<br>
                012-3456789
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Staff</strong><br>
                Jane Smith<br>
                janesmith@example.com
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th class="text-end">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Road Bike</td>
                        <td>$1,200.00</td>
                        <td>1</td>
                        <td class="text-end">$1,200.00</td>
                    </tr>
                    <tr><td colspan="5" class="text-center">No products added to this order</td></tr>
                </tbody>
                <tfoot><tr><th colspan="4" class="text-end">Grand Total</th><th class="text-end">$1,200.00</th></tr></tfoot>
            </table>
        </div>
        <a href="orderdetails.php" class="btn btn-secondary"><i class="bi bi-arrow-left me-1"></i>Back to Details</a>
    </div>
</div>


<style>
@media print {
    @page {
        size: A4 portrait;
        margin: 10mm;
    }

    /* Hide everything on the page first */
    body * {
        visibility: hidden !important;
    }

    /* Remove layout spacing and wrappers */
    html, body {
        margin: 0 !important;
        padding: 0 !important;
        width: 100% !important;
        height: auto !important;
        overflow: visible !important;
    }

    /* Show only the invoice card */
    .card.shadow-sm,
    .card.shadow-sm * {
        visibility: visible !important;
    }

    /* Place invoice at the top of the page */
    .card.shadow-sm {
        position: static !important;
        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        border: none !important;
        box-shadow: none !important;
        background: white !important;
    }

    .card.shadow-sm .card-body {
        padding: 10px !important;
    }

    /* Hide buttons */
    .btn,
    .btn * {
        display: none !important;
    }

    /* Compact invoice formatting */
    body {
        font-family: Arial, sans-serif !important;
        font-size: 10px !important;
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
    }

    h4 {
        font-size: 16px !important;
    }

    .table {
        font-size: 9px !important;
        border-collapse: collapse !important;
    }

    .table th,
    .table td {
        padding: 5px !important;
    }

    .table thead th {
        background-color: #212529 !important;
        color: white !important;
    }
    /* Remove the Bootstrap layout spacing */
    .container,
    .container-fluid,
    .row,
    .col,
    .col.bg-light,
    .p-4 {
        margin: 0 !important;
        padding: 0 !important;
    }
}
</style>

 
<?php
$content = ob_get_clean();
require_once 'layout.php';
?>