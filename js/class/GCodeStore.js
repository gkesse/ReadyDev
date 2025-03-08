"use strict";

class GCodeStore {
    static #m_oInstance = null;
    static #m_isInstance = false;

    #m_aMode;

    constructor() {
        if (!GCodeStore.#m_isInstance) {
            throw new TypeError("GCodeStore is not constructable.");
        }
    }

    static Instance() {
        if (this.#m_oInstance == null) {
            this.#m_isInstance = true;
            this.#m_oInstance = new GCodeStore();
            this.#m_oInstance.#init();
        }
        return this.#m_oInstance;
    }

    #init() {
        this.#m_aMode = "c_cpp";
    }

    setMode(_aMode) { this.#m_aMode = _aMode; }
    getMode() { return this.#m_aMode; }
}
