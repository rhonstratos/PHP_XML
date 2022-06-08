<!-- Modal -->
<?php include_once "./include/config.php"; ?>
<div class="modal fade" id="deleteListMODAL" tabindex="-1" aria-labelledby="deleteListMODAL" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered w-50" style="max-width: 50% !important;">
        <div class="modal-content container-fluid bg-white rounded-25 p-4">
            <div class="navbar">
                <h2 class="fw-bold">Delete a MacBook</h2>
                <button type="button" class="border-none close-svg rounded-25 m-0 p-1" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="white">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M18.3 5.71c-.39-.39-1.02-.39-1.41 0L12 10.59 7.11 5.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L10.59 12 5.7 16.89c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0L12 13.41l4.89 4.89c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4z" />
                    </svg>
                </button>
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
                        <?php $update->load('delete'); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>