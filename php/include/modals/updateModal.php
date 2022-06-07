<!-- Modal -->
<?php include_once "./include/config.php"; ?>
<div class="modal fade" id="updateMODAL" tabindex="-1" aria-labelledby="updateMODAL" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered w-50" style="max-width: 50% !important;">
        <div class="modal-content container-fluid bg-white rounded-25 p-4">
            <div class="navbar">
                <h2 class="fw-bold">Edit a MacBook</h2>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Close</button>
            </div>
            <div id="updateBody" class="overflow-auto d-flex justify-content-center align-items-center align-self-center w-100">
                <table class="table table-borderless w-100 fs-5 overflow-auto">
                    <thead class="text-center">
                        <tr>
                            <td scope="col">Model Number</td>
                            <td scope="col">Variant Name</td>
                            <td scope="col">Action</td>
                        </tr>
                    </thead>
                    <tbody class="text-center overflow-auto">
                        <?php $update->load(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>