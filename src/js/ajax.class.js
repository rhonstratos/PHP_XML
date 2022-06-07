var _url
function setURL(url) { _url = url }

function viewCard(modelNumber) {
    let params = `?viewCard=true`
    params += `&modelNumber=${modelNumber}`
    const _url = `./include/request.php${params}`
    $.get(_url, (data, status) => {
        console.log(data + " + " + status)
    })
}
export { setURL, viewCard }

