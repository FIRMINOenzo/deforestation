import { lang } from "../constants/lang.js";
import { LocalStorage } from "./LocalStorage.js";

export class Language {
    static getLanguage() {
        const langToUse = lang[navigator.language.slice(0, 2)];
        return langToUse;
    }

    static setLanguage(param, language, id) {
        const lang = language ?? Language.getLanguage();

        for (const key in lang.text) {
            if (key in param.text) {
                param.text[key].innerHTML = lang.text[key];
            }
        }

        for (const key in lang.buttons) {
            if (key in param.buttons) {
                param.buttons[key].innerHTML = lang.buttons[key];
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


        LocalStorage.set("lang", id)
    }
}
