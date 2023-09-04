//Function that copies the current page url when u click on the share icon
function copyToClipboard() {

    var currentUrl = window.location.href;
    var tempInput = document.createElement("input");

    tempInput.value = currentUrl;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");

    document.body.removeChild(tempInput);

    Swal.fire({
        position: 'bottom',
        icon: '<success>',
        title: '<p>Link Copied</p>',
        showConfirmButton: false,
        timer: 1500, // Auto-close the notification after 1.5 seconds
        customClass: {
            container: 'small-alert-container'
        }
    });
}