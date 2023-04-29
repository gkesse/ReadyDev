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
                case '%d':
                    val = parseFloat(val);
                    if (isNaN(val)) {
                        val = 0;
                    }
                    break;
            }
            i++;
        }
        return val;
    });
}
//===============================================
function sprintfXml(sourceXml) {
    var xmlDoc = new DOMParser().parseFromString(sourceXml, 'application/xml');
    var xsltDoc = new DOMParser().parseFromString([
        // describes how we want to modify the XML - indent everything
        '<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform">',
        '  <xsl:strip-space elements="*"/>',
        '  <xsl:template match="para[content-style][not(text())]">', // change to just text() to strip space in text nodes
        '    <xsl:value-of select="normalize-space(.)"/>',
        '  </xsl:template>',
        '  <xsl:template match="node()|@*">',
        '    <xsl:copy><xsl:apply-templates select="node()|@*"/></xsl:copy>',
        '  </xsl:template>',
        '  <xsl:output indent="yes"/>',
        '</xsl:stylesheet>',
    ].join('\n'), 'application/xml');

    var xsltProcessor = new XSLTProcessor();    
    xsltProcessor.importStylesheet(xsltDoc);
    var resultDoc = xsltProcessor.transformToDocument(xmlDoc);
    var resultXml = new XMLSerializer().serializeToString(resultDoc);
    return resultXml;
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
