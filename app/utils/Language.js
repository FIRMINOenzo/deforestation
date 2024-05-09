import { lang } from "../constants/lang.js";

export class Language {
    static getLanguage() {
        const langToUse = lang[navigator.language.slice(0, 2)];
        return langToUse;
    }

    static setLanguage(param, language) {
        const lang = language ?? Language.getLanguage();

        for (const key in lang.text) {
            if (key in param.text) {
                param.text[key].innerHTML = lang.text[key];
            }
        }

        for (const key in lang.inputs) {
            if (key in param.inputs) {
                param.inputs[key].placeholder = lang.inputs[key];
            }
        }

        for (const key in lang.menus) {
            if (key in param.menus) {
                param.menus[key].innerHTML = lang.menus[key];
            }
        }
    }
}
