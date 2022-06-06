var _url
function setURL(url) { _url = url }

function viewCard() {
    $.get(_url, (data, status) => {
        console.log(data + " + " + status)
    })
}
export { setURL, viewCard }

