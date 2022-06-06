var _url
function setURL(url) { _url = url }

function viewCard() {
    $.get(_url, (data, status) => {
        console.log(data + " + " + status)
    })
}
function register() {
    $("#REGISTERFORM").on('submit', (event) => {
        $.ajax({
            url:"include/request.php?register=true",
            type:"POST",
            data:$(this).serialize(),
            success:(result)=>{
                console.log(result)
            }
        })
    })
}
export { setURL, viewCard, register }

