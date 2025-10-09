"use strict";

var base = base || {};

base.Tools = class {
    static m_instance = null;

    constructor() {}

    static Instance() {
        if (this.m_instance == null) {
            this.m_instance = new base.Tools();
        }
        return this.m_instance;
    }

    reqJson(_module, _method, _params) {
        const req = {};
        req["module"] = _module;
        req["method"] = _method;
        req["params"] = _params;
        return JSON.stringify(req);
    }

    repData(_data, ..._key) {
        let rep = JSON.parse(_data);
        if (rep && _key.length) {
            let key;
            for (let i = 0; i < _key.length; i++) {
                key = _key[i];
                if (!this.isObject(rep) || !(key in rep)) {
                    return "";
                }
                rep = rep[key];
            }
            return rep;
        }
        return "";
    }

    hasRepData(_data, ..._key) {
        let rep = JSON.parse(_data);
        if (rep && _key.length) {
            let key;
            for (let i = 0; i < _key.length; i++) {
                key = _key[i];
                if (!this.isObject(rep) || !(key in rep)) {
                    return false;
                }
                rep = rep[key];
            }
            return true;
        }
        return false;
    }

    hasRepError(_data) {
        return this.repData(_data, "status") !== "success";
    }

    isObject(_obj) {
        if (!_obj) {
            return false;
        }
        if (Array.isArray(_obj)) {
            return false;
        }
        return typeof _obj === "object";
    }

    timestamp() {
        return Date.now() + Math.random().toString().slice(2, 6);
    }

    createNode(_data) {
        const parent = document.createElement("div");
        parent.innerHTML = _data.trim();
        return parent.firstElementChild;
    }

    divImage() {
        let html = "";
        html += "<div class='GImg1 Img1'>";
        html += "<img loading='lazy' alt='image.png'/>";
        html += "</div>";
        return html;
    }

    divVideo() {
        let html = "";
        html += "<div class='GVideo1 Video1'>&nbsp;";
        html += "<video width='500' height='auto' controls>";
        html += "<source preload='none'>";
        html += "</video>";
        html += "</div>";
        return html;
    }

    updateDataImageVideo() {
        const oTools = base.Tools.Instance();

        const whiteList = [];

        const imgs = document.querySelectorAll(".GImg1 img[loading]");
        imgs.forEach(img => {
            const source = img.getAttribute("src");
            whiteList.push(source);
        });

        const videos = document.querySelectorAll(".GVideo1 video[data-src]");
        videos.forEach(video => {
            const source = video.getAttribute("data-src");
            whiteList.push(source);
        });

        if (!whiteList.length) {
            return;
        }

        const params = {};
        params["white_list"] = whiteList;

        const reqJSON = oTools.reqJson(
            "clipboard",
            "update_data_image_video",
            params
        );

        const ajax = new callback.Ajax();
        ajax.post(reqJSON, _data => {
            oTools.showRepMessage(_data);
        });
    }

    showRepMessage(_data) {
        console.log(this.repData(_data, "data"));
    }

    lazyLoadingVideo() {
        document.addEventListener("DOMContentLoaded", function() {
            if ("IntersectionObserver" in window) {
                const observer = new IntersectionObserver(
                    (entries, observer) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                const video = entry.target;
                                video.src = video.getAttribute("data-src");
                                video.load();
                                observer.unobserve(video);
                            }
                        });
                    }
                );

                const videos = document.querySelectorAll(
                    ".GVideo1 video[data-src]"
                );
                videos.forEach(video => observer.observe(video));
            }
        });

        document.querySelectorAll(".GVideo1 video[data-src]").forEach(video => {
            video.addEventListener(
                "play",
                function() {
                    if (!video.src) {
                        video.src = video.dataset.src;
                        video.load();
                    }
                },
                { once: true }
            );
        });
    }
};
