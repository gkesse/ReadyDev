//===============================================
// functions
//===============================================
function sprintf() {
    var args = arguments,
    string = args[0],
    i = 1;
    return string.replace(/%((%)|s|d)/g, function (m) {
        // m is the matched format, e.g. %s, %d
        var val = null;
        if (m[2]) {
            val = m[2];
        } else {
            val = args[i];
            // A switch statement so that the formatter can be extended. Default is %s
            switch (m) {
                case '%d': {
                    val = parseFloat(val);
                    if (isNaN(val)) {
                        val = 0;
                    }
                    break;
                }
            }
            i++;
        }
        return val;
    });
}
//===============================================
function stob(_data) {
    return (_data.toLowerCase() === "true");
}
//===============================================
function utf8_to_b64(_data) {
    return encodeURIComponent(btoa(_data));
}
//===============================================
function b64_to_utf8(_data) {
    return atob(decodeURIComponent(_data));
}
//===============================================
function componentToHex(c) {
    var hex = c.toString(16);
    return hex.length == 1 ? "0" + hex : hex;
}
//===============================================
function rgbToHex(r, g, b) {
    return "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
}
//===============================================
// String
//===============================================
String.prototype.removeCharAt = function(i) {
    var tmp = this.split(''); // convert to an array
    tmp.splice(i , 1); // remove 1 element from the array (adjusting for non-zero-indexed counts)
    return tmp.join(''); // reconstruct the string
}
//===============================================
String.prototype.getPathFromUrl = function() {
    var lData = this.replace(/url\("(.*?)"\)/g, "$1");
    return lData;
}
//===============================================
String.prototype.getHexFromRgb = function() {
    var lRed = +this.replace(/rgb\((.*?), (.*?), (.*?)\)/g, "$1");
    var lGreen = +this.replace(/rgb\((.*?), (.*?), (.*?)\)/g, "$2");
    var lBlue = +this.replace(/rgb\((.*?), (.*?), (.*?)\)/g, "$3");
    var lData = rgbToHex(lRed, lGreen, lBlue);
    return lData;
}
//===============================================
String.prototype.getNormalize = function() {
    var lData = this.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
    lData = lData.replace(/\W/g, '-');
    lData = lData.toLowerCase()
    return lData;
}
//===============================================
String.prototype.toXml = function() {
    var xml = this;
    var tab = "  ";
    var formatted = '', indent= '';
    tab = tab || '\t';
    xml.split(/>\s*</).forEach(function(node) {
        if (node.match( /^\/\w/ )) indent = indent.substring(tab.length); // decrease indent by one 'tab'
        formatted += indent + '<' + node + '>\r\n';
        if (node.match( /^<?\w[^>]*[^\/]$/ )) indent += tab;              // increase indent
    });
    return formatted.substring(1, formatted.length-3);
}
//===============================================
String.prototype.toBase64 = function() {
    var lData = this;
    lData = utf8_to_b64(lData);
    return lData;
}
//===============================================
String.prototype.fromBase64 = function() {
    var lData = this;
    lData = b64_to_utf8(lData);
    return lData;
}
//===============================================
// node
//===============================================
Element.prototype.appendBefore = function(_node) {
    this.parentNode.insertBefore(_node, this);
}
//===============================================
Element.prototype.appendAfter = function(_node) {
    this.parentNode.insertBefore(_node, this.nextSibling);
}
//===============================================
