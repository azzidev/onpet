<?php
    echo '
        <div class="toast hide position-fixed top-0 right-0 p-3 align-items-center text-white border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                Hello, world! This is a toast message.
                </div>
                <button type="button" class="btn-close-white ml-auto my-auto" data-bs-dismiss="toast" aria-label="Close" onclick="$(this).parent().parent().fadeOut(`fast`)"></button>
            </div>
        </div>
    ';
?>