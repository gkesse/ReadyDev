//================================================
function onItemClick(obj, req) {
    alert(req);
    GProcess.Instance().run(obj, req);
}
//================================================
