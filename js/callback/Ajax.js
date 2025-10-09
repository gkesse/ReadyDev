"use strict";

var callback = callback || {};

callback.Ajax = class {
    constructor() {}

    post(_data, _callback = null) {
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (_callback) {
                    _callback(this.responseText);
                }
            }
        };

        const method = "POST";
        const url = "/php/callback.php";
        const isAsync = true;
        const user = null;
        const password = null;
        const conetntType = "text/plain; charset=UTF-8";

        xhr.open(method, url, isAsync, user, password);
        xhr.setRequestHeader("Content-Type", conetntType);
        xhr.send(_data);
    }
};
