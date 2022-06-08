<!-- Modal -->
<div class="modal fade" id="deleteMODAL" tabindex="-1" aria-labelledby="deleteMODAL" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered w-75" style="max-width: 75% !important;">
        <div class="modal-content container-fluid bg-white rounded-25 p-4 d-flex">
            <div class="navbar">
                <h2 class="fw-bold">Delete MacBook?</h2>
                <button type="button" class="border-none close-svg rounded-25 m-0 p-1" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="white">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M18.3 5.71c-.39-.39-1.02-.39-1.41 0L12 10.59 7.11 5.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L10.59 12 5.7 16.89c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0L12 13.41l4.89 4.89c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4z" />
                    </svg>
                </button>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <h3>Model Information</h3>
                    <div class="mb-3">
                        <span>Model Number:</span>
                        <input readonly="readonly" type="text" name="DeleteModelNumber" id="DeleteModelNumber" class="text-center form-control input-secondary rounded-10 border-none">
                        <span>Variant Name:</span>
                        <input readonly="readonly" type="text" name="DeleteVariantName" id="DeleteVariantName" class="text-center form-control input-secondary rounded-10 border-none">
                    </div>
                    <h3>Specifications</h3>
                    <div class="overflow-auto" style="max-height: 250px !important;">
                        <span>Processor Options:</span>
                        <div id="DeleteProcessor" class="container-register">
                        </div>
                        <span>Memory Options:</span>
                        <div id="DeleteMemory" class="container-register">
                        </div>
                        <span>Storage Options:</span>
                        <div id="DeleteStorage" class="container-register">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <h3>MacBook Image</h3>
                    <div class="text-center rounded-10 d-flex flex-column input-secondary w-100 h-100" style="max-height:300px;">
                        <div class="justify-content-center align-items-center align-self-center row h-100">
                            <div class="row align-self-center justify-content-center align-items-center h-100" id="DeleteIMG-label" style="max-height: 250px !important;">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="align-self-end">
                <button type="button" class="mt-3 btn btn-secondary fit align-self-end rounded-10 border-none" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <button type="button" id="dltBtn" class="mt-3 btn btn-danger fit align-self-end rounded-10 border-none">
                    <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 20 20" version="1.1">
                        <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 3.75 17.5 C 3.417969 17.5 3.125 17.375 2.875 17.125 C 2.625 16.875 2.5 16.582031 2.5 16.25 L 2.5 3.75 C 2.5 3.417969 2.625 3.125 2.875 2.875 C 3.125 2.625 3.417969 2.5 3.75 2.5 L 13.707031 2.5 C 13.875 2.5 14.039062 2.535156 14.199219 2.605469 C 14.359375 2.671875 14.492188 2.765625 14.605469 2.875 L 17.125 5.394531 C 17.234375 5.507812 17.328125 5.640625 17.394531 5.800781 C 17.464844 5.960938 17.5 6.125 17.5 6.292969 L 17.5 16.25 C 17.5 16.582031 17.375 16.875 17.125 17.125 C 16.875 17.375 16.582031 17.5 16.25 17.5 Z M 16.25 6.332031 L 13.667969 3.75 L 3.75 3.75 L 3.75 16.25 L 16.25 16.25 Z M 10 14.894531 C 10.597656 14.894531 11.109375 14.683594 11.53125 14.261719 C 11.953125 13.835938 12.167969 13.328125 12.167969 12.730469 C 12.167969 12.132812 11.953125 11.621094 11.53125 11.199219 C 11.109375 10.773438 10.597656 10.5625 10 10.5625 C 9.402344 10.5625 8.890625 10.773438 8.46875 11.199219 C 8.046875 11.621094 7.832031 12.132812 7.832031 12.730469 C 7.832031 13.328125 8.046875 13.835938 8.46875 14.261719 C 8.890625 14.683594 9.402344 14.894531 10 14.894531 Z M 5.480469 7.832031 L 11.6875 7.832031 C 11.867188 7.832031 12.015625 7.773438 12.136719 7.65625 C 12.253906 7.539062 12.3125 7.390625 12.3125 7.207031 L 12.3125 5.480469 C 12.3125 5.296875 12.253906 5.148438 12.136719 5.03125 C 12.015625 4.914062 11.867188 4.855469 11.6875 4.855469 L 5.480469 4.855469 C 5.296875 4.855469 5.148438 4.914062 5.03125 5.03125 C 4.914062 5.148438 4.855469 5.296875 4.855469 5.480469 L 4.855469 7.207031 C 4.855469 7.390625 4.914062 7.539062 5.03125 7.65625 C 5.148438 7.773438 5.296875 7.832031 5.480469 7.832031 Z M 3.75 6.332031 L 3.75 16.25 L 3.75 3.75 Z M 3.75 6.332031 " />
                        </g>
                    </svg>
                    Delete</button>
            </div>
        </div>
    </div>
</div>